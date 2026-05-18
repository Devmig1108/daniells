<?php 
// SEO Variables
$page_title = "Thank You | Daniell's Tree Service";
$page_desc = "Thank you for requesting a free estimate from Daniell's Tree Service. We will be in touch shortly.";

// Load the global header
require_once 'includes/header.php'; 
?>

    <style>
        .thank-you-section {
            padding: 150px 0 120px;
            background: var(--bg-cream);
            text-align: center;
            min-height: 65vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .thank-you-content {
            max-width: 650px;
            margin: 0 auto;
            background: var(--bg-white);
            padding: 60px 50px;
            border-radius: 8px;
            box-shadow: var(--shadow-soft);
            border: 1px solid var(--border-soft);
        }
        .thank-you-icon {
            font-size: 4.5rem;
            color: var(--tree-accent);
            margin-bottom: 25px;
        }
        .thank-you-content h1 {
            font-size: 3rem;
            margin-bottom: 20px;
            line-height: 1.2;
        }
        .thank-you-content p {
            color: var(--text-muted);
            font-size: 1.1rem;
            line-height: 1.8;
            margin-bottom: 35px;
        }
        @media (max-width: 768px) {
            .thank-you-content {
                padding: 40px 30px;
            }
            .thank-you-content h1 {
                font-size: 2.2rem;
            }
        }
    </style>

    <section class="thank-you-section">
        <div class="container">
            <div class="thank-you-content reveal-up">
                <i class="fas fa-check-circle thank-you-icon"></i>
                <h1>Request Received!</h1>
                <p>Thank you for reaching out to Daniell's Tree Service. We have received your project details, and one of our arborists will be in touch with you shortly to discuss your free estimate.</p>
                <a href="/" class="btn-primary" style="display: inline-block; padding: 16px 32px; font-size: 1rem;">Return to Homepage</a>
            </div>
        </div>
    </section>

<?php require_once 'includes/footer.php'; ?>