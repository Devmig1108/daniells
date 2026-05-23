<?php 
// Dynamic SEO Variables
$page_title = "Tree Service Portfolio | Daniell's Tree Service El Paso";
$page_desc = "View our recent tree removal, pruning, and stump grinding projects. We deliver clean, safe results for El Paso homeowners.";

// 1. Load the global header (stepping back one directory)
require_once '../includes/header.php'; 
?>

<style>
    /* --- Page Hero --- */
    .page-hero {
        height: 50vh;
        min-height: 400px;
        /* Using one of your beautiful after shots for the hero background */
        background: linear-gradient(rgba(30, 53, 43, 0.85), rgba(30, 53, 43, 0.95)), url('../images/trees-after.jpg') center/cover;
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

    .hero-desc {
        font-size: 1.15rem;
        color: #EAE6DF;
        max-width: 600px;
        margin: 0 auto;
        line-height: 1.8;
    }

    /* --- Before & After Showcase --- */
    .transformation-section {
        padding: 100px 0;
        background: var(--bg-cream);
    }

    .ba-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 30px;
        margin-bottom: 80px;
        align-items: stretch;
    }

    .ba-card {
        border-radius: 8px;
        overflow: hidden;
        box-shadow: var(--shadow-soft);
        background: var(--bg-white);
        position: relative;
    }

    .ba-label {
        position: absolute;
        top: 20px;
        left: 20px;
        background: var(--tree-dark);
        color: var(--bg-white);
        padding: 8px 16px;
        border-radius: 4px;
        font-size: 0.85rem;
        font-weight: 600;
        letter-spacing: 2px;
        text-transform: uppercase;
        z-index: 10;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }

    .ba-label.after {
        background: var(--tree-accent);
        color: var(--bg-white);
    }

    .ba-card img {
        width: 100%;
        height: 500px;
        object-fit: cover;
        transition: transform 0.8s ease;
    }

    .ba-card:hover img {
        transform: scale(1.03);
    }

    .ba-caption {
        padding: 25px;
        text-align: center;
        border-top: 1px solid var(--border-soft);
    }

    .ba-caption h3 {
        font-size: 1.3rem;
        margin-bottom: 8px;
    }

    .ba-caption p {
        color: var(--text-muted);
        font-size: 0.95rem;
    }

    /* --- Project Masonry Grid --- */
    .project-gallery {
        padding: 0 0 100px;
        background: var(--bg-cream);
    }

    .masonry-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 25px;
    }

    .masonry-item {
        border-radius: 8px;
        overflow: hidden;
        box-shadow: var(--shadow-soft);
        position: relative;
        background: var(--tree-dark);
    }

    .masonry-item.tall {
        grid-row: span 2;
    }

    .masonry-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: opacity 0.4s ease, transform 0.8s ease;
        display: block;
    }

    /* Hover Overlay Effect */
    .masonry-item::after {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(to top, rgba(30, 53, 43, 0.9), transparent 60%);
        opacity: 0;
        transition: var(--transition);
        pointer-events: none;
    }

    .masonry-item:hover img {
        transform: scale(1.05);
        opacity: 0.7;
    }

    .masonry-item:hover::after {
        opacity: 1;
    }

    .item-caption {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        padding: 25px;
        color: var(--bg-white);
        z-index: 10;
        transform: translateY(20px);
        opacity: 0;
        transition: var(--transition);
    }

    .masonry-item:hover .item-caption {
        transform: translateY(0);
        opacity: 1;
    }

    .item-caption h4 {
        color: var(--tree-accent);
        font-family: 'Inter', sans-serif;
        font-size: 0.9rem;
        text-transform: uppercase;
        letter-spacing: 2px;
        margin-bottom: 5px;
    }

    .item-caption p {
        font-family: 'Lora', serif;
        font-size: 1.2rem;
        margin: 0;
    }

    /* --- Responsive --- */
    @media (max-width: 1024px) {
        .masonry-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 768px) {
        .ba-grid {
            grid-template-columns: 1fr;
            gap: 20px;
            margin-bottom: 60px;
        }

        .ba-card img {
            height: 350px;
        }

        .masonry-grid {
            grid-template-columns: 1fr;
        }

        .masonry-item.tall {
            grid-row: span 1;
            height: 400px;
        }

        .masonry-item {
            height: 350px;
        }
    }
</style>

<section class="page-hero">
    <div class="page-hero-content">
        <span class="eyebrow load-1" style="color: var(--tree-accent);">Our Portfolio</span>
        <h1 class="page-title load-2">Real Results. <i>Proven Care.</i></h1>
        <p class="hero-desc load-3">Browse our recent tree removals, trimming projects, and landscape transformations across the greater El Paso area.</p>
    </div>
</section>

<section class="transformation-section">
    <div class="container">
        <div class="section-header reveal-up">
            <span>The Daniell's Difference</span>
            <h2>Before & After</h2>
            <p>See the visual impact of professional pruning, hazard removal, and property cleanup.</p>
        </div>

        <div class="ba-grid reveal-up">
            <div class="ba-card">
                <div class="ba-label">Before</div>
                <img src="../images/trees-before.jpg" alt="Overgrown tree before trimming">
                <div class="ba-caption">
                    <h3>Overgrown Canopy</h3>
                    <p>Branches encroaching on property lines and blocking visibility.</p>
                </div>
            </div>
            <div class="ba-card">
                <div class="ba-label after">After</div>
                <img src="../images/trees-after.jpg" alt="Beautifully trimmed blooming tree after service">
                <div class="ba-caption">
                    <h3>Precision Canopy Lift</h3>
                    <p>Safely elevated and thinned to promote healthy growth and vibrant blooming.</p>
                </div>
            </div>
        </div>

        <div class="ba-grid reveal-up">
            <div class="ba-card">
                <div class="ba-label">Before</div>
                <img src="../images/palm-before.jpg" alt="Unkempt palm tree with dead fronds">
                <div class="ba-caption">
                    <h3>Heavy Deadwood</h3>
                    <p>Accumulated dead fronds creating fire and pest hazards.</p>
                </div>
            </div>
            <div class="ba-card">
                <div class="ba-label after">After</div>
                <img src="../images/palm-after.jpg" alt="Cleanly skinned and trimmed palm tree">
                <div class="ba-caption">
                    <h3>Clean Palm Skinned</h3>
                    <p>Professionally trimmed and skinned for a clean, manicured resort look.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="project-gallery">
    <div class="container">
        <div class="section-header reveal-up">
            <span>In The Field</span>
            <h2>Our Crew At Work</h2>
        </div>

        <div class="masonry-grid">
            <div class="masonry-item tall reveal-up">
                <img src="../images/owner.jpg" alt="Climbing a ladder for tree pruning">
                <div class="item-caption">
                    <h4>Precision Pruning</h4>
                    <p>Safe access and expert cuts.</p>
                </div>
            </div>

            <div class="masonry-item reveal-up" style="transition-delay: 0.1s;">
                <img src="../images/tree-removal.jpg" alt="Heavy tree trunk removal process">
                <div class="item-caption">
                    <h4>Hazard Teardown</h4>
                    <p>Strategic dismantling of large trunks.</p>
                </div>
            </div>

            <div class="masonry-item reveal-up" style="transition-delay: 0.2s;">
                <img src="../images/pruning.jpg" alt="Perfectly pruned ornamental tree">
                <div class="item-caption">
                    <h4>Ornamental Trimming</h4>
                    <p>Shaping for structural integrity.</p>
                </div>
            </div>

            <div class="masonry-item reveal-up" style="transition-delay: 0.1s;">
                <img src="../images/stump.jpg" alt="Freshly cut stump ready for grinding">
                <div class="item-caption">
                    <h4>Stump Preparation</h4>
                    <p>Clearing the way for stump grinding.</p>
                </div>
            </div>
        </div>

        <div class="btn-row reveal-up" style="justify-content: center; margin-top: 60px;">
            <a href="/contact/" class="btn-primary">Call For Your Free Estimate</a>
        </div>
    </div>
</section>

<?php include '../includes/form.php'; ?>

<?php require_once '../includes/footer.php'; ?>