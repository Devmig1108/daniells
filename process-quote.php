<?php
declare(strict_types=1);

// process-quote.php

/*
|--------------------------------------------------------------------------
| Configuration
|--------------------------------------------------------------------------
| Use the Turnstile SECRET key here, not the public site key.
*/

$turnstileSecret = '0x4AAAAAAEqhOaDvP74r5OCaWMABUUyHlr4';
$zeptoMailToken  = 'Zoho-enczapikey wSsVR6118hSjDv0rlDT4I7g+m1oAAF6iQEUoi1D06SX7F//C/cdunkfGDQagGvMZEDJrRzVHrbMvnRpShztY2YgsyQxTXiiF9mqRe1U4J3x17qnvhDzPV2hUkRSPK4kKxQ9rmmRhFsAj+g==';

$verifiedSenderEmail  = 'info@daniellstreeremoval.com';
$clientRecipientEmail = 'margaretdaniell72@gmail.com';

$allowedTurnstileHostnames = [
    'daniellstreeremoval.com',
    'www.daniellstreeremoval.com',
];

/*
|--------------------------------------------------------------------------
| Helper functions
|--------------------------------------------------------------------------
*/

function stopRequest(string $message, int $statusCode = 422): void
{
    http_response_code($statusCode);
    header('Content-Type: text/plain; charset=UTF-8');
    exit($message);
}

function getPostValue(string $field, int $maxLength = 500): string
{
    if (!isset($_POST[$field]) || !is_string($_POST[$field])) {
        return '';
    }

    $value = trim($_POST[$field]);
    $value = str_replace("\0", '', $value);

    if (strlen($value) > $maxLength) {
        $value = substr($value, 0, $maxLength);
    }

    return $value;
}

function escapeHtml(string $value): string
{
    return htmlspecialchars(
        $value,
        ENT_QUOTES | ENT_SUBSTITUTE,
        'UTF-8'
    );
}

/*
|--------------------------------------------------------------------------
| Require POST
|--------------------------------------------------------------------------
*/

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: /');
    exit;
}

/*
|--------------------------------------------------------------------------
| Honeypot check
|--------------------------------------------------------------------------
*/

if (getPostValue('company_website', 255) !== '') {
    header('Location: /thank-you.php');
    exit;
}

/*
|--------------------------------------------------------------------------
| Cloudflare Turnstile verification
|--------------------------------------------------------------------------
*/

$turnstileToken = getPostValue('cf-turnstile-response', 2048);

if ($turnstileToken === '') {
    stopRequest(
        'Please complete the security verification and try again.'
    );
}

$turnstilePostData = [
    'secret'   => $turnstileSecret,
    'response' => $turnstileToken,
];

if (!empty($_SERVER['REMOTE_ADDR'])) {
    $turnstilePostData['remoteip'] = $_SERVER['REMOTE_ADDR'];
}

$turnstileCurl = curl_init(
    'https://challenges.cloudflare.com/turnstile/v0/siteverify'
);

if ($turnstileCurl === false) {
    error_log('Unable to initialize the Turnstile request.');

    stopRequest(
        'Security verification is temporarily unavailable. Please try again.',
        503
    );
}

curl_setopt_array($turnstileCurl, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST           => true,
    CURLOPT_POSTFIELDS     => http_build_query($turnstilePostData),
    CURLOPT_HTTPHEADER     => [
        'Accept: application/json',
        'Content-Type: application/x-www-form-urlencoded',
    ],
    CURLOPT_CONNECTTIMEOUT => 5,
    CURLOPT_TIMEOUT        => 10,
]);

$turnstileResponse  = curl_exec($turnstileCurl);
$turnstileHttpCode  = (int) curl_getinfo(
    $turnstileCurl,
    CURLINFO_HTTP_CODE
);
$turnstileCurlError = curl_error($turnstileCurl);

curl_close($turnstileCurl);

if ($turnstileResponse === false || $turnstileHttpCode !== 200) {
    error_log(
        'Turnstile connection error: ' .
        ($turnstileCurlError !== ''
            ? $turnstileCurlError
            : 'HTTP status ' . $turnstileHttpCode)
    );

    stopRequest(
        'Security verification is temporarily unavailable. Please try again.',
        503
    );
}

$turnstileResult = json_decode($turnstileResponse, true);

if (!is_array($turnstileResult)) {
    error_log('Turnstile returned invalid JSON.');

    stopRequest(
        'Security verification is temporarily unavailable. Please try again.',
        503
    );
}

$turnstileSuccess  = ($turnstileResult['success'] ?? false) === true;
$turnstileAction   = (string) ($turnstileResult['action'] ?? '');
$turnstileHostname = strtolower(
    (string) ($turnstileResult['hostname'] ?? '')
);

$turnstilePassed =
    $turnstileSuccess &&
    $turnstileAction === 'tree_quote' &&
    in_array(
        $turnstileHostname,
        $allowedTurnstileHostnames,
        true
    );

if (!$turnstilePassed) {
    $turnstileErrors = $turnstileResult['error-codes'] ?? [];

    if (!is_array($turnstileErrors)) {
        $turnstileErrors = ['unknown'];
    }

    error_log(
        'Turnstile verification failed. Hostname: ' .
        $turnstileHostname .
        '; action: ' .
        $turnstileAction .
        '; errors: ' .
        implode(', ', $turnstileErrors)
    );

    stopRequest(
        'Security verification failed. Please refresh the page and try again.'
    );
}

/*
|--------------------------------------------------------------------------
| Capture form fields
|--------------------------------------------------------------------------
*/

$name    = getPostValue('name', 100);
$phone   = getPostValue('phone', 40);
$email   = getPostValue('email', 254);
$service = getPostValue('service', 100);
$message = getPostValue('message', 3000);

if ($message === '') {
    $message = 'No additional details provided.';
}

if (
    $name === '' ||
    $phone === '' ||
    $email === '' ||
    $service === ''
) {
    stopRequest('Please fill out all required fields.');
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    stopRequest('Please enter a valid email address.');
}

/*
|--------------------------------------------------------------------------
| Validate the selected service
|--------------------------------------------------------------------------
*/

$allowedServices = [
    'Tree Removal',
    'Tree Pruning & Trimming',
    'Stump Grinding',
];

if (!in_array($service, $allowedServices, true)) {
    stopRequest('Please select a valid tree service.');
}

/*
|--------------------------------------------------------------------------
| Escape values for the HTML email
|--------------------------------------------------------------------------
*/

$safeName    = escapeHtml($name);
$safePhone   = escapeHtml($phone);
$safeEmail   = escapeHtml($email);
$safeService = escapeHtml($service);
$safeMessage = nl2br(escapeHtml($message));

/*
|--------------------------------------------------------------------------
| Construct the email
|--------------------------------------------------------------------------
*/

$htmlBody = <<<HTML
<h2>New Tree Service Inquiry</h2>

<p>
    A new lead has requested a quote or service from the
    Daniells Tree Removal website.
</p>

<table style="width:100%; border-collapse:collapse; max-width:600px;">
    <tr>
        <th style="text-align:left; padding:10px; border-bottom:1px solid #eee;">
            Name:
        </th>
        <td style="padding:10px; border-bottom:1px solid #eee;">
            {$safeName}
        </td>
    </tr>

    <tr>
        <th style="text-align:left; padding:10px; border-bottom:1px solid #eee;">
            Email:
        </th>
        <td style="padding:10px; border-bottom:1px solid #eee;">
            <a href="mailto:{$safeEmail}">{$safeEmail}</a>
        </td>
    </tr>

    <tr>
        <th style="text-align:left; padding:10px; border-bottom:1px solid #eee;">
            Phone:
        </th>
        <td style="padding:10px; border-bottom:1px solid #eee;">
            {$safePhone}
        </td>
    </tr>

    <tr>
        <th style="text-align:left; padding:10px; border-bottom:1px solid #eee;">
            Service Needed:
        </th>
        <td style="padding:10px; border-bottom:1px solid #eee;">
            {$safeService}
        </td>
    </tr>

    <tr>
        <th style="text-align:left; padding:10px; vertical-align:top;">
            Message:
        </th>
        <td style="padding:10px;">
            {$safeMessage}
        </td>
    </tr>
</table>

<p style="margin-top:20px; font-size:0.9em; color:#666;">
    <em>
        To respond to this lead, use the email address or phone number
        provided above.
    </em>
</p>
HTML;

$textBody =
    "New Tree Service Inquiry\n" .
    "Name: {$name}\n" .
    "Phone: {$phone}\n" .
    "Email: {$email}\n" .
    "Service: {$service}\n" .
    "Message: {$message}";

/*
|--------------------------------------------------------------------------
| Prepare ZeptoMail request
|--------------------------------------------------------------------------
*/

$postData = [
    'from' => [
        'address' => $verifiedSenderEmail,
        'name'    => 'Daniells Tree Website',
    ],
    'to' => [
        [
            'email_address' => [
                'address' => $clientRecipientEmail,
                'name'    => 'Daniells Tree Sales',
            ],
        ],
    ],

    // reply_to intentionally omitted to preserve current deliverability setup.
    'subject'  => "New Lead: {$name} - {$service}",
    'htmlbody' => $htmlBody,
    'textbody' => $textBody,
];

$encodedPostData = json_encode(
    $postData,
    JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE
);

if ($encodedPostData === false) {
    error_log('Unable to encode the ZeptoMail request.');

    stopRequest(
        'There was an error submitting your request. Please call us directly.',
        500
    );
}

/*
|--------------------------------------------------------------------------
| Send through ZeptoMail
|--------------------------------------------------------------------------
*/

$zeptoCurl = curl_init('https://api.zeptomail.com/v1.1/email');

if ($zeptoCurl === false) {
    error_log('Unable to initialize the ZeptoMail request.');

    stopRequest(
        'There was an error submitting your request. Please call us directly.',
        500
    );
}

curl_setopt_array($zeptoCurl, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST           => true,
    CURLOPT_POSTFIELDS     => $encodedPostData,
    CURLOPT_HTTPHEADER     => [
        'Accept: application/json',
        'Content-Type: application/json',
        'Authorization: ' . $zeptoMailToken,
    ],
    CURLOPT_CONNECTTIMEOUT => 5,
    CURLOPT_TIMEOUT        => 20,
]);

$zeptoResponse  = curl_exec($zeptoCurl);
$zeptoHttpCode  = (int) curl_getinfo(
    $zeptoCurl,
    CURLINFO_HTTP_CODE
);
$zeptoCurlError = curl_error($zeptoCurl);

curl_close($zeptoCurl);

/*
|--------------------------------------------------------------------------
| Handle response
|--------------------------------------------------------------------------
*/

if (
    $zeptoResponse !== false &&
    ($zeptoHttpCode === 200 || $zeptoHttpCode === 201)
) {
    header('Location: /thank-you.php');
    exit;
}

error_log(
    'ZeptoMail submission failed. HTTP status: ' .
    $zeptoHttpCode .
    '; cURL error: ' .
    ($zeptoCurlError !== '' ? $zeptoCurlError : 'none') .
    '; response: ' .
    ($zeptoResponse !== false ? $zeptoResponse : 'no response')
);

stopRequest(
    'There was an error submitting your request. Please try again or call us directly.',
    500
);