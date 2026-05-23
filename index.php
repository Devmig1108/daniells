<?php 
// SEO Variables
$page_title = "El Paso Tree Removal & Pruning Services | Daniell's Tree Service";
$page_desc = "Looking for expert tree removal in El Paso, TX? Daniell's Tree Service offers top-rated tree and shrub removal, stump grinding, and safe tree trimming. Call (915) 858-0086!";

// Load the global header
require_once 'includes/header.php'; 
?>

    <style>
        /* Home Page Specific Styles */
        .hero {
            height: 85vh;
            min-height: 650px;
            background: linear-gradient(rgba(30, 53, 43, 0.75), rgba(30, 53, 43, 0.85)), url('https://images.unsplash.com/photo-1513836279014-a89f7a76ae86?q=80&w=2000&auto=format&fit=crop') center/cover;
            display: flex;
            align-items: center;
            position: relative;
        }

        .hero-content { max-width: 850px; color: var(--bg-white); }
        .hero-label { display: inline-block; color: var(--tree-accent); font-size: 0.85rem; font-weight: 600; letter-spacing: 3px; text-transform: uppercase; margin-bottom: 20px; }
        .hero-title { font-size: clamp(3rem, 6vw, 5.5rem); color: var(--bg-white); line-height: 1.1; margin-bottom: 25px; }
        .hero-title i { font-style: italic; font-weight: 400; color: var(--tree-accent); }
        .hero-desc { font-size: 1.2rem; color: #EAE6DF; margin-bottom: 40px; max-width: 600px; font-weight: 300; line-height: 1.8; }
        .hero-actions { display: flex; gap: 20px; align-items: center; }

        .trust-banner { background: var(--bg-white); padding: 60px 0; box-shadow: var(--shadow-soft); position: relative; z-index: 10; margin-top: -60px; border-radius: 8px; }
        .trust-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 40px; text-align: center; }
        .trust-card i { font-size: 2.2rem; color: var(--tree-accent); margin-bottom: 20px; }
        .trust-card h4 { font-size: 1.3rem; margin-bottom: 10px; font-family: 'Lora', serif; }
        .trust-card p { color: var(--text-muted); font-size: 0.95rem; font-family: 'Inter'; max-width: 250px; margin: 0 auto; }

        .about-section { padding: 120px 0; background: var(--bg-cream); }
        .about-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 80px; align-items: center; }
        .about-images { position: relative; height: 600px; }
        .img-main { width: 85%; height: 85%; object-fit: cover; border-radius: 8px; position: absolute; top: 0; left: 0; box-shadow: var(--shadow-soft); transition: transform 0.8s ease; }
        .img-sub { width: 55%; height: 50%; object-fit: cover; border-radius: 8px; border: 15px solid var(--bg-cream); position: absolute; bottom: 0; right: 0; box-shadow: var(--shadow-soft); transition: transform 0.8s ease; }
        .about-images:hover .img-sub { transform: translateY(-15px); }
        .about-images:hover .img-main { transform: scale(1.02); }

        .about-content span { color: var(--tree-accent); font-size: 0.8rem; letter-spacing: 3px; text-transform: uppercase; font-weight: 600; display: block; margin-bottom: 15px; }
        .about-content h2 { font-size: 3rem; line-height: 1.2; margin-bottom: 30px; }
        .about-content p { color: var(--text-muted); font-size: 1.1rem; line-height: 1.8; margin-bottom: 25px; }
        .value-list { list-style: none; margin-top: 30px; }
        .value-list li { display: flex; align-items: center; gap: 15px; margin-bottom: 15px; font-weight: 500; font-size: 1.05rem; }
        .value-list li i { color: var(--tree-accent); font-size: 1.2rem; }

        .services-section { padding: 120px 0; background: var(--bg-white); }
        .section-header { text-align: center; margin-bottom: 70px; }
        .section-header span { color: var(--tree-accent); font-size: 0.8rem; letter-spacing: 3px; text-transform: uppercase; font-weight: 600; display: block; margin-bottom: 15px; }
        .section-header h2 { font-size: 3rem; margin-bottom: 20px; }
        .services-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 40px; }
        
        .service-card { border-radius: 8px; overflow: hidden; background: var(--bg-cream); transition: var(--transition); border: 1px solid var(--border-soft); }
        .service-card:hover { transform: translateY(-10px); box-shadow: var(--shadow-soft); }
        .service-img { height: 240px; overflow: hidden; }
        .service-img img { width: 100%; height: 100%; object-fit: cover; transition: transform 0.8s ease; }
        .service-card:hover .service-img img { transform: scale(1.05); }
        
        .service-info { padding: 40px 30px; text-align: center; }
        .service-info h3 { font-size: 1.5rem; margin-bottom: 15px; }
        .service-info p { color: var(--text-muted); font-size: 0.95rem; margin-bottom: 25px; }
        .service-info a { color: var(--tree-light); font-weight: 600; text-decoration: none; font-size: 0.9rem; text-transform: uppercase; letter-spacing: 1px; transition: var(--transition); }
        .service-info a:hover { color: var(--tree-accent); }

        @media (max-width: 900px) {
            .hero-title { font-size: 3rem; }
            .trust-grid { grid-template-columns: 1fr; }
            .trust-banner { margin-top: 0; padding: 40px 5%; border-radius: 0; }
            .about-grid { grid-template-columns: 1fr; }
            .about-images { height: 400px; margin-bottom: 40px; }
        }
    </style>

    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <span class="hero-label load-1">El Paso Tree Service Professionals</span>
                <h1 class="hero-title load-2">Expert Tree Removal & <i>Safe Pruning.</i></h1>
                <p class="hero-desc load-3">Daniell's Tree Service provides safe, professional, and affordable tree
                    care. From complete tree removal to routine pruning and stump grinding, we've served El Paso residential and
                    commercial clients since 1976.</p>
                <div class="hero-actions load-3" style="animation-delay: 0.6s;">
                    <a href="/contact/" class="btn-primary">Free Estimate</a>
                    <a href="/services/" class="btn-outline">View Services</a>
                </div>
            </div>
        </div>
    </section>

    <section class="container">
        <div class="trust-banner reveal-up">
            <div class="trust-grid">
                <div class="trust-card reveal-up">
                    <i class="fas fa-seedling"></i>
                    <h4>Rooted Since 1976</h4>
                    <p>Decades of specialized experience handling the West Texas climate and local tree species.</p>
                </div>
                <div class="trust-card reveal-up" style="transition-delay: 0.1s;">
                    <i class="fas fa-handshake"></i>
                    <h4>Honest Professionals</h4>
                    <p>We pride ourselves on safe tree cutting, quality work, and transparent pricing.</p>
                </div>
                <div class="trust-card reveal-up" style="transition-delay: 0.2s;">
                    <i class="fas fa-shield-alt"></i>
                    <h4>Guaranteed Results</h4>
                    <p>Protecting your property is our priority. We guarantee satisfaction on every tree removal project.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="about-section">
        <div class="container about-grid">
            <div class="about-images reveal-up">
                <img src="images/owner.jpg" alt="Cutting tree branches" class="img-main">
                <img src="images/palm.jpg" alt="Tree stump in the ground" class="img-sub">
            </div>
            <div class="about-content reveal-up" style="transition-delay: 0.2s;">
                <span>Our Heritage</span>
                <h2>El Paso's Trusted Tree Care Professionals.</h2>
                <p>At Daniell's Tree Removal and Pruning Service, we know that every tree requires an individualized
                    approach. We offer customizable tree services to protect the health of your landscape and the safety
                    of your home.</p>
                <p>We are El Paso's leading tree removal contractors, specializing in safe, efficient teardowns of
                    hazardous or dead trees. Whether it's a tight residential space or a large commercial lot, our team
                    brings the right equipment to get the job done without damaging your property.</p>

                <ul class="value-list">
                    <li class="reveal-up"><i class="fas fa-check"></i> Free On-Site Tree Assessments</li>
                    <li class="reveal-up" style="transition-delay: 0.1s;"><i class="fas fa-check"></i> Residential & Commercial Tree Care</li>
                    <li class="reveal-up" style="transition-delay: 0.2s;"><i class="fas fa-check"></i> Clean, Efficient Debris & Branch Removal</li>
                </ul>
            </div>
        </div>
    </section>

    <section id="services" class="services-section">
        <div class="container">
            <div class="section-header reveal-up">
                <span>What We Do</span>
                <h2>Comprehensive Tree Services in El Paso, TX</h2>
                <p style="color: var(--text-muted); max-width: 600px; margin: 0 auto;">From seasonal trimming to
                    complete hazard removals, our experienced tree cutters are equipped to handle projects of any scale
                    safely and affordably.</p>
            </div>

            <div class="services-grid">
                <div class="service-card reveal-up">
                    <div class="service-img">
                        <img src="images/tree-removal.jpg" alt="Professional Tree Removal">
                    </div>
                    <div class="service-info">
                        <h3>Tree & Shrub Removal</h3>
                        <p>Safe, strategic dismantling and removal of dead, diseased, or hazardous trees and shrubs. We specialize in tight-space removals without property damage.</p>
                        <a href="/services/">Learn More <i class="fas fa-arrow-right" style="margin-left: 5px; font-size: 0.8rem;"></i></a>
                    </div>
                </div>

                <div class="service-card reveal-up" style="transition-delay: 0.1s;">
                    <div class="service-img">
                        <img src="images/stump.jpg" alt="Stump Grinding Service">
                    </div>
                    <div class="service-info">
                        <h3>Stump Grinding</h3>
                        <p>Complete removal of unsightly tree stumps. Reclaim your yard space, level the ground, and eliminate hazards and potential pest habitats.</p>
                        <a href="/services/">Learn More <i class="fas fa-arrow-right" style="margin-left: 5px; font-size: 0.8rem;"></i></a>
                    </div>
                </div>

                <div class="service-card reveal-up" style="transition-delay: 0.2s;">
                    <div class="service-img">
                        <img src="images/trees-after.jpg" alt="Tree Pruning and Trimming">
                    </div>
                    <div class="service-info">
                        <h3>Tree Pruning & Trimming</h3>
                        <p>Promote healthy growth, improve structural integrity, and keep branches away from power lines and roofs with expert tree trimming.</p>
                        <a href="/services/">Learn More <i class="fas fa-arrow-right" style="margin-left: 5px; font-size: 0.8rem;"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'includes/form.php'; ?>
<?php require_once 'includes/footer.php'; ?>