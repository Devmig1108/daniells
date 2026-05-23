<?php 
// 1. Load the global header
require_once '../includes/header.php'; 
?>

<style>
    .page-hero {
        height: 45vh;
        min-height: 350px;
        background: linear-gradient(rgba(30, 53, 43, 0.8), rgba(30, 53, 43, 0.9)), url('https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?q=80&w=2000&auto=format&fit=crop') center/cover;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
    }

    .page-title {
        font-size: clamp(3rem, 5vw, 4rem);
        color: var(--bg-white);
        margin-bottom: 10px;
    }

    .contact-layout {
        padding: 100px 0;
        background: var(--bg-cream);
    }

    .contact-grid {
        display: grid;
        grid-template-columns: 0.9fr 1.1fr;
        gap: 80px;
        align-items: start;
    }

    /* --- Contact Details Side --- */
    .contact-info-panel h2 {
        font-size: 2.5rem;
        margin-bottom: 25px;
    }

    .contact-info-panel p {
        color: var(--text-muted);
        font-size: 1.1rem;
        margin-bottom: 40px;
        line-height: 1.8;
    }

    .contact-method {
        display: flex;
        gap: 20px;
        margin-bottom: 35px;
    }

    .contact-icon {
        width: 60px;
        height: 60px;
        background: var(--bg-white);
        border: 1px solid var(--border-soft);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--tree-accent);
        font-size: 1.4rem;
        flex-shrink: 0;
        box-shadow: var(--shadow-soft);
    }

    .contact-text h4 {
        font-family: 'Inter', sans-serif;
        font-size: 0.9rem;
        text-transform: uppercase;
        letter-spacing: 2px;
        color: var(--text-muted);
        margin-bottom: 5px;
        font-weight: 600;
    }

    .contact-text a, .contact-text span {
        font-family: 'Lora', serif;
        font-size: 1.5rem;
        color: var(--tree-dark);
        font-weight: 500;
        text-decoration: none;
    }

    /* --- SEO Map Section --- */
    .map-section {
        padding-bottom: 100px;
        background: var(--bg-cream);
    }

    .map-wrapper {
        height: 500px;
        width: 100%;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: var(--shadow-soft);
        border: 1px solid var(--border-soft);
    }

    .map-wrapper iframe {
        width: 100%;
        height: 100%;
        filter: grayscale(0.2) contrast(1.1); /* Matches the organic theme better */
    }

    @media (max-width: 1024px) {
        .contact-grid { grid-template-columns: 1fr; gap: 60px; }
        .contact-info-panel { text-align: center; }
        .contact-method { justify-content: center; flex-direction: column; align-items: center; text-align: center; }
    }
</style>

<section class="page-hero">
    <div class="container">
        <h1 class="page-title load-1">Contact <i>Us.</i></h1>
        <p class="hero-desc load-2" style="color: #EAE6DF;">Ready to start your project? We're standing by to help.</p>
    </div>
</section>

<section class="contact-layout">
    <div class="container contact-grid">
        
        <div class="contact-info-panel reveal-up">
            <span class="eyebrow">Get In Touch</span>
            <h2>Talk to a local tree expert.</h2>
            <p>Whether you have a complete removal or just need a routine seasonal trim, Daniell's Tree Service provides honest advice and free on-site assessments.</p>

            <div class="contact-method">
                <div class="contact-icon"><i class="fas fa-phone-alt"></i></div>
                <div class="contact-text">
                    <h4>Call or Text</h4>
                    <a href="tel:9158580086">(915) 858-0086</a>
                </div>
            </div>

            <div class="contact-method">
                <div class="contact-icon"><i class="fas fa-map-marked-alt"></i></div>
                <div class="contact-text">
                    <h4>Service Area</h4>
                    <span>El Paso, TX & Surrounding Areas</span>
                </div>
            </div>

            <div class="contact-method">
                <div class="contact-icon"><i class="fas fa-clock"></i></div>
                <div class="contact-text">
                    <h4>Availability</h4>
                    <span>Mon - Sat: 9am - 4pm</span>
                </div>
            </div>
        </div>

        <div class="reveal-up" style="transition-delay: 0.2s;">
            <?php include '../includes/form.php'; ?>
        </div>

    </div>
</section>

<section class="map-section">
    <div class="container">
        <div class="section-header reveal-up">
            <span>Our Service Region</span>
            <h2>Serving the Greater El Paso Area</h2>
        </div>
        <div class="map-wrapper reveal-up">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d108528.26194468644!2d-106.51614741490214!3d31.810574044195155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86e73f8bc5fe3b6d%3A0x6d90060938da64!2sEl%20Paso%2C%20TX!5e0!3m2!1sen!2sus!4v1714412345678!5m2!1sen!2sus" 
                width="600"
                height="450"
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
</section>

<?php require_once '../includes/footer.php'; ?>