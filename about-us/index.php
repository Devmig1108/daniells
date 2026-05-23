<?php 
// 1. Load the global header
require_once '../includes/header.php'; 
?>

<style>
    .page-hero {
        height: 55vh;
        min-height: 450px;
        background: linear-gradient(rgba(30, 53, 43, 0.85), rgba(30, 53, 43, 0.95)), url('https://images.unsplash.com/photo-1542273917363-3b1817f69a5d?q=80&w=2000&auto=format&fit=crop') center/cover;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
    }

    .page-hero-content {
        max-width: 800px;
        padding: 0 5%;
    }

    .page-title {
        font-size: clamp(3rem, 5vw, 4.5rem);
        color: var(--bg-white);
        margin-bottom: 15px;
    }

    .stats-section {
        position: relative;
        z-index: 10;
        margin-top: -60px;
    }

    .stats-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 30px;
    }

    .stat-card {
        background: var(--bg-white);
        padding: 40px 20px;
        border-radius: 8px;
        text-align: center;
        box-shadow: var(--shadow-soft);
        border-bottom: 3px solid var(--tree-accent);
    }

    .stat-number {
        font-family: 'Lora', serif;
        font-size: 2.8rem;
        color: var(--tree-dark);
        line-height: 1;
        margin-bottom: 10px;
    }

    .stat-label {
        font-size: 0.85rem;
        text-transform: uppercase;
        letter-spacing: 2px;
        color: var(--text-muted);
        font-weight: 600;
    }

    .mission-section {
        padding: 120px 0;
        background: var(--bg-cream);
    }

    .mission-grid {
        display: grid;
        grid-template-columns: 1fr 1.2fr;
        gap: 80px;
        align-items: center;
    }

    .mission-image {
        border-radius: 8px;
        overflow: hidden;
        box-shadow: var(--shadow-soft);
        position: relative;
    }

    .mission-image::after {
        content: '';
        position: absolute;
        inset: 0;
        border: 2px solid var(--tree-accent);
        border-radius: 8px;
        transform: translate(15px, 15px);
        z-index: -1;
    }

    .core-values {
        padding: 100px 0;
        background: var(--tree-dark);
        color: var(--bg-white);
    }

    .core-values .section-header h2 {
        color: var(--bg-white);
    }

    .core-values .section-header p {
        color: #A0B0A8;
    }

    .values-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 50px;
        margin-top: 60px;
    }

    .value-item i {
        font-size: 2.5rem;
        color: var(--tree-accent);
        margin-bottom: 25px;
    }

    .value-item h3 {
        color: var(--bg-white);
        font-size: 1.5rem;
        margin-bottom: 15px;
    }

    .value-item p {
        color: #A0B0A8;
        font-size: 1.05rem;
    }

    @media (max-width: 900px) {
        .stats-grid { grid-template-columns: repeat(2, 1fr); }
        .mission-grid { grid-template-columns: 1fr; gap: 50px; }
        .values-grid { grid-template-columns: 1fr; gap: 40px; text-align: center; }
        .stats-section { margin-top: -30px; padding: 0 5%; }
    }
    @media (max-width: 600px) {
        .stats-grid { grid-template-columns: 1fr; }
    }
</style>

<section class="page-hero">
    <div class="page-hero-content">
        <span class="eyebrow load-1" style="color: var(--tree-accent);">Our Roots</span>
        <h1 class="page-title load-2">Deeply Rooted in <i>El Paso.</i></h1>
        <p class="hero-desc load-3" style="margin: 0 auto; color: #EAE6DF;">Providing safe, expert, and honest tree care to the Sun City since 1976.</p>
    </div>
</section>

<section class="stats-section container">
    <div class="stats-grid">
        <div class="stat-card reveal-up">
            <div class="stat-number">35+</div>
            <div class="stat-label">Years Experience</div>
        </div>
        <div class="stat-card reveal-up" style="transition-delay: 0.1s;">
            <div class="stat-number">Local</div>
            <div class="stat-label">El Paso Roots</div>
        </div>
        <div class="stat-card reveal-up" style="transition-delay: 0.2s;">
            <div class="stat-number">Safe</div>
            <div class="stat-label">Rigging & Teardowns</div>
        </div>
        <div class="stat-card reveal-up" style="transition-delay: 0.3s;">
            <div class="stat-number">Fast</div>
            <div class="stat-label">Free Estimates</div>
        </div>
    </div>
</section>

<section class="mission-section">
    <div class="container mission-grid">
        <div class="mission-content reveal-up">
            <span class="eyebrow">The Daniell's Difference</span>
            <h2 style="font-size: 2.8rem; margin-bottom: 25px; line-height: 1.2;">Not just cutting trees down. Doing it right.</h2>
            <p style="color: var(--text-muted); font-size: 1.1rem; margin-bottom: 20px;">
                Tree removal in West Texas presents unique challenges. High winds, dense neighborhoods, and deeply rooted desert trees require more than just a chainsaw—they require precision, the right equipment, and a profound respect for property safety.
            </p>
            <p style="color: var(--text-muted); font-size: 1.1rem; margin-bottom: 30px;">
                Since 1976, Daniell's Tree Service has been a staple in the El Paso community. We started with a simple commitment: offer honest assessments, show up on time, and leave the property cleaner than we found it. Decades later, our tools have upgraded, but our core philosophy remains exactly the same.
            </p>
            <div class="btn-row">
                <a href="/contact/" class="btn-primary">Request an Assessment</a>
            </div>
        </div>
        <div class="mission-image reveal-up" style="transition-delay: 0.2s;">
            <img src="../images/owner.jpg" alt="Daniell's Tree Service team member trimming a large tree" style="width: 100%; display: block;">
        </div>
    </div>
</section>

<section class="core-values">
    <div class="container">
        <div class="section-header reveal-up">
            <span style="color: var(--tree-accent);">Our Standards</span>
            <h2>Why El Paso Trusts Us</h2>
            <p>Tree work requires expertise. We handle the heavy lifting so you don't have to worry.</p>
        </div>

        <div class="values-grid">
            <div class="value-item reveal-up">
                <i class="fas fa-hard-hat"></i>
                <h3>Uncompromising Safety</h3>
                <p>We prioritize safe practices on every job site. We never cut corners when it comes to protecting our crew, your family, and your home.</p>
            </div>
            <div class="value-item reveal-up" style="transition-delay: 0.1s;">
                <i class="fas fa-handshake"></i>
                <h3>Honest Assessments</h3>
                <p>We believe in transparent pricing and clear communication. If a tree can be saved with pruning, we'll tell you. If it needs to go, we'll explain exactly how we'll do it safely.</p>
            </div>
            <div class="value-item reveal-up" style="transition-delay: 0.2s;">
                <i class="fas fa-leaf"></i>
                <h3>Local Knowledge</h3>
                <p>We understand the specific diseases, root structures, and pruning needs of Afghan Pines, Mulberrys, and native desert trees in the borderland.</p>
            </div>
        </div>
    </div>
</section>

<?php include '../includes/form.php'; ?>

<?php require_once '../includes/footer.php'; ?>