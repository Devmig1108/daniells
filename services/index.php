<?php 
// SEO Variables
$page_title = "Tree Removal, Pruning & Stump Grinding | Daniell's Tree Service";
$page_desc = "Expert tree services in El Paso including hazard tree removal, precision pruning, shrub clearing, and stump grinding. Request a free estimate today.";

require_once '../includes/header.php'; 
?>

<style>
    .page-hero { height: 50vh; min-height: 400px; background: linear-gradient(rgba(30, 53, 43, 0.8), rgba(30, 53, 43, 0.9)), url('https://images.unsplash.com/photo-1592424001844-3075e6d6287c?q=80&w=2000&auto=format&fit=crop') center/cover; display: flex; align-items: center; justify-content: center; text-align: center; }
    .page-hero-content { max-width: 800px; padding: 0 5%; }
    .page-title { font-size: clamp(3rem, 5vw, 4.5rem); color: var(--bg-white); margin-bottom: 15px; }
    .hero-desc { font-size: 1.15rem; color: #EAE6DF; max-width: 600px; margin: 0 auto; line-height: 1.8; }
    .services-editorial { padding: 100px 0 60px; background: var(--bg-cream); }
    .service-row { display: grid; grid-template-columns: 1fr 1fr; gap: 80px; align-items: center; margin-bottom: 120px; }
    .service-row:nth-child(even) { direction: rtl; }
    .service-row:nth-child(even) > * { direction: ltr; }
    .service-image { position: relative; height: 550px; border-radius: 8px; overflow: hidden; box-shadow: var(--shadow-soft); }
    .service-image img { width: 100%; height: 100%; object-fit: cover; transition: transform 0.8s ease; }
    .service-row:hover .service-image img { transform: scale(1.03); }
    .service-image::after { content: ''; position: absolute; inset: 0; border: 1px solid rgba(255,255,255,0.3); margin: 20px; pointer-events: none; z-index: 2; }
    .service-content { max-width: 550px; }
    .service-number { font-family: 'Lora', serif; font-size: 4rem; color: var(--tree-accent); opacity: 0.3; line-height: 1; margin-bottom: -15px; }
    .service-content h2 { font-size: 2.8rem; margin-bottom: 25px; line-height: 1.1; }
    .service-content p { color: var(--text-muted); font-size: 1.1rem; line-height: 1.8; margin-bottom: 20px; }
    .service-features { list-style: none; margin: 30px 0 40px; display: grid; gap: 15px; }
    .service-features li { display: flex; align-items: flex-start; gap: 15px; font-weight: 500; color: var(--text-main); }
    .service-features li i { color: var(--tree-accent); margin-top: 5px; }
    .process-banner { background: var(--tree-dark); color: var(--bg-white); padding: 80px 0; text-align: center; }
    .process-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 40px; margin-top: 50px; }
    .process-step h4 { color: var(--tree-accent); font-family: 'Inter', sans-serif; font-size: 1.1rem; text-transform: uppercase; letter-spacing: 2px; margin-bottom: 15px; }
    .process-step p { color: #A0B0A8; font-size: 0.95rem; max-width: 250px; margin: 0 auto; }
    @media (max-width: 1024px) { .service-row, .service-row:nth-child(even) { grid-template-columns: 1fr; direction: ltr; gap: 40px; margin-bottom: 80px; } .service-image { height: 400px; } .process-grid { grid-template-columns: 1fr; gap: 40px; } }
</style>

<section class="page-hero">
    <div class="page-hero-content">
        <span class="eyebrow load-1" style="color: var(--tree-accent);">Our Expertise</span>
        <h1 class="page-title load-2">Comprehensive <i>Tree Care.</i></h1>
        <p class="hero-desc load-3">From hazardous teardowns to seasonal pruning, our licensed arborists deliver safe, efficient solutions tailored to the West Texas environment.</p>
    </div>
</section>

<section class="services-editorial">
    <div class="container">
        <div class="service-row reveal-up">
            <div class="service-image"><img src="../images/tree-removal.jpg" alt="Expert tree removal"></div>
            <div class="service-content">
                <div class="service-number">01</div>
                <h2>Complete Tree Removal</h2>
                <p>Removing a tree, especially one that is dead, diseased, or situated near your home, is highly dangerous work that requires heavy-duty machinery and precise rigging.</p>
                <p>We are El Paso's specialists in tight-space and hazardous tree teardowns. We utilize advanced safety protocols to dismantle trees piece-by-piece, ensuring zero damage to your roof, fencing, or surrounding landscaping.</p>
                <ul class="service-features">
                    <li><i class="fas fa-check-circle"></i> Emergency hazard tree removal</li>
                    <li><i class="fas fa-check-circle"></i> Dead or diseased tree extraction</li>
                    <li><i class="fas fa-check-circle"></i> Safe teardowns near power lines and structures</li>
                </ul>
                <a href="/contact/" class="btn-outline" style="color: var(--tree-dark); border-color: var(--tree-dark);">Request Removal</a>
            </div>
        </div>

        <div class="service-row reveal-up">
            <div class="service-image"><img src="../images/stump.jpg" alt="Stump grinding"></div>
            <div class="service-content">
                <div class="service-number">02</div>
                <h2>Professional Stump Grinding</h2>
                <p>Once a tree is removed, leaving the stump behind can create a tripping hazard, ruin the aesthetic of your yard, and serve as a breeding ground for termites and pests.</p>
                <p>Our industrial-grade stump grinders quickly and efficiently pulverize stumps below the soil grade. We clear the remaining debris and leave the ground level, allowing you to reclaim your yard for new landscaping or construction.</p>
                <ul class="service-features">
                    <li><i class="fas fa-check-circle"></i> Grinding below surface level for seamless landscaping</li>
                    <li><i class="fas fa-check-circle"></i> Eliminates pest habitats and tripping hazards</li>
                    <li><i class="fas fa-check-circle"></i> Fast, efficient cleanup and leveling</li>
                </ul>
                <a href="/contact/" class="btn-outline" style="color: var(--tree-dark); border-color: var(--tree-dark);">Get a Grinding Quote</a>
            </div>
        </div>

        <div class="service-row reveal-up">
            <div class="service-image"><img src="../images/pruning.jpg" alt="Tree Pruning"></div>
            <div class="service-content">
                <div class="service-number">03</div>
                <h2>Tree Trimming & Pruning</h2>
                <p>Proper pruning is essential for the long-term health, structural integrity, and aesthetic beauty of your trees. Bad cuts can permanently damage or kill native El Paso species.</p>
                <p>Our experienced arborists know exactly where and how to cut. We perform crown thinning to allow light penetration, deadwooding to remove dangerous branches, and structural pruning to keep branches safely away from your roof and utility lines.</p>
                <ul class="service-features">
                    <li><i class="fas fa-check-circle"></i> Crown thinning, lifting, and deadwooding</li>
                    <li><i class="fas fa-check-circle"></i> Clearance pruning for roofs and utility lines</li>
                    <li><i class="fas fa-check-circle"></i> Health-focused seasonal trimming</li>
                </ul>
                <a href="/contact/" class="btn-outline" style="color: var(--tree-dark); border-color: var(--tree-dark);">Schedule Pruning</a>
            </div>
        </div>

        <div class="service-row reveal-up">
            <div class="service-image"><img src="../images/shrub-removal.jpg" alt="Shrub removal"></div>
            <div class="service-content">
                <div class="service-number">04</div>
                <h2>Shrub & Bush Removal</h2>
                <p>Overgrown, dead, or deeply rooted shrubs can choke out your other plants and make your property look unkempt. Removing them yourself is back-breaking work.</p>
                <p>We provide comprehensive shrub and bush removal services. We don't just chop the tops off; we completely extract the root ball so the shrub doesn't grow back, preparing your landscape for a fresh start.</p>
                <ul class="service-features">
                    <li><i class="fas fa-check-circle"></i> Complete root ball extraction</li>
                    <li><i class="fas fa-check-circle"></i> Clearing overgrown hedges and brush</li>
                    <li><i class="fas fa-check-circle"></i> Thorough debris cleanup and haul-away</li>
                </ul>
                <a href="/contact/" class="btn-outline" style="color: var(--tree-dark); border-color: var(--tree-dark);">Clear Your Shrubs</a>
            </div>
        </div>
    </div>
</section>

<section class="process-banner">
    <div class="container">
        <h2 class="reveal-up" style="color: var(--bg-white); font-size: 2.5rem; margin-bottom: 15px;">How We Work</h2>
        <p class="reveal-up" style="color: #A0B0A8; font-size: 1.1rem; max-width: 600px; margin: 0 auto;">A seamless, professional process from the first call to the final cleanup.</p>
        <div class="process-grid">
            <div class="process-step reveal-up">
                <h4>1. Free Assessment</h4>
                <p>We visit your property to evaluate the tree's condition, assess hazards, and provide a transparent, upfront quote.</p>
            </div>
            <div class="process-step reveal-up" style="transition-delay: 0.1s;">
                <h4>2. Safe Execution</h4>
                <p>Our licensed team arrives on time with the right machinery, prioritizing the safety of your property throughout the job.</p>
            </div>
            <div class="process-step reveal-up" style="transition-delay: 0.2s;">
                <h4>3. Immaculate Cleanup</h4>
                <p>We haul away all wood, branches, and debris. We leave your yard looking significantly better than when we arrived.</p>
            </div>
        </div>
    </div>
</section>

<?php include '../includes/form.php'; ?>
<?php require_once '../includes/footer.php'; ?>