<?php
// Dynamic SEO Variables (Defaults if not set on the individual page)
$seo_title = $page_title ?? "El Paso Tree Removal & Pruning Services | Daniell's Tree Service";
$seo_desc  = $page_desc ?? "Looking for expert tree removal in El Paso, TX? Daniell's Tree Service offers top-rated tree and shrub removal, stump grinding, and safe tree trimming. Call (915) 858-0086!";
$site_url  = "https://www.daniellstreeservice.com"; // Replace with actual domain
$current_url = $site_url . $_SERVER['REQUEST_URI'];
$og_image  = $site_url . "/images/og-image.jpg"; 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $seo_title; ?></title>
    <meta name="description" content="<?php echo $seo_desc; ?>">
    <link rel="canonical" href="<?php echo $current_url; ?>" />
    <meta name="theme-color" content="#1E352B">

    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo $current_url; ?>">
    <meta property="og:title" content="<?php echo $seo_title; ?>">
    <meta property="og:description" content="<?php echo $seo_desc; ?>">
    <meta property="og:image" content="<?php echo $og_image; ?>">

    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?php echo $current_url; ?>">
    <meta property="twitter:title" content="<?php echo $seo_title; ?>">
    <meta property="twitter:description" content="<?php echo $seo_desc; ?>">
    <meta property="twitter:image" content="<?php echo $og_image; ?>">

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Arborist",
      "name": "Daniell's Tree Service",
      "image": "<?php echo $site_url; ?>/images/logo.jpg",
      "@id": "<?php echo $site_url; ?>",
      "url": "<?php echo $site_url; ?>",
      "telephone": "+1-915-858-0086",
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "El Paso",
        "addressRegion": "TX",
        "addressCountry": "US"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 31.7619, 
        "longitude": -106.4850
      },
      "areaServed": ["El Paso, TX", "Socorro, TX", "Horizon City, TX", "Anthony, TX"],
      "openingHoursSpecification": {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": [
          "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"
        ],
        "opens": "00:00",
        "closes": "23:59"
      },
      "priceRange": "$$",
      "description": "Professional tree removal, stump grinding, and pruning services in El Paso, TX."
    }
    </script>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Lora:ital,wght@0,400;0,500;0,600;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* =========================================
           0. PREMIUM ORGANIC THEME VARIABLES
           ========================================= */
        :root {
            --tree-dark: #1E352B; 
            --tree-light: #2C4C3B; 
            --tree-accent: #D4A373; 
            --tree-accent-hover: #b5885c;
            --bg-cream: #FAF9F6; 
            --bg-white: #FFFFFF;
            --text-main: #2A2A2A;
            --text-muted: #5C5C5C;
            --border-soft: #EAE6DF;
            --transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
            --shadow-soft: 0 15px 40px rgba(30, 53, 43, 0.08);
        }

        /* =========================================
           1. RESET & BASE
           ========================================= */
        * { margin: 0; padding: 0; box-sizing: border-box; }
        html { scroll-behavior: smooth; }
        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--bg-cream);
            color: var(--text-main);
            line-height: 1.7;
            -webkit-font-smoothing: antialiased;
            overflow-x: hidden;
        }

        h1, h2, h3, h4 {
            font-family: 'Lora', serif;
            color: var(--tree-dark);
            font-weight: 500;
        }

        .container { max-width: 1400px; margin: 0 auto; padding: 0 5%; }

        /* =========================================
           2. UTILITY STRIP & NAVIGATION
           ========================================= */
        .utility-strip {
            background-color: var(--tree-dark);
            color: var(--bg-cream);
            padding: 10px 0;
            font-size: 0.85rem;
            font-weight: 400;
            letter-spacing: 1px;
        }

        .utility-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 5%;
        }

        .utility-info span { margin-right: 25px; }
        .utility-info span i { margin-right: 8px; color: var(--tree-accent); }

        .nav-header {
            background-color: var(--bg-white);
            padding: 20px 0;
            position: sticky;
            top: 0;
            z-index: 1000;
            transition: var(--transition);
            border-bottom: 1px solid transparent;
        }

        .nav-header.scrolled {
            background-color: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            padding: 15px 0;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
            border-bottom: 1px solid var(--border-soft);
        }

        .nav-wrapper {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .brand-logo { text-decoration: none; display: flex; flex-direction: column; position: relative; z-index: 1001;}
        .brand-logo .title { font-family: 'Lora', serif; font-size: 1.8rem; font-weight: 600; color: var(--tree-dark); line-height: 1.1; }
        .brand-logo .subtitle { font-family: 'Inter', sans-serif; font-size: 0.75rem; text-transform: uppercase; letter-spacing: 2px; color: var(--tree-accent); font-weight: 600; }

        .nav-links { display: flex; gap: 35px; align-items: center; }
        .nav-links a { color: var(--text-main); text-decoration: none; font-size: 0.9rem; font-weight: 500; text-transform: uppercase; letter-spacing: 1px; transition: var(--transition); }
        .nav-links a:hover { color: var(--tree-accent); }

        /* =========================================
           3. BUTTONS
           ========================================= */
        .btn-primary {
            background: var(--tree-accent);
            color: var(--bg-white) !important;
            padding: 14px 35px;
            border-radius: 4px;
            font-family: 'Inter', sans-serif;
            font-size: 0.9rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            transition: var(--transition);
            border: none;
            display: inline-block;
            text-decoration: none;
            cursor: pointer;
        }

        .btn-primary:hover {
            background: var(--tree-accent-hover);
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(212, 163, 115, 0.3);
        }

        .btn-outline {
            background: transparent;
            color: var(--bg-white);
            padding: 12px 30px;
            border: 1px solid var(--bg-white);
            border-radius: 4px;
            font-size: 0.9rem;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            text-decoration: none;
            transition: var(--transition);
            font-weight: 600;
        }

        .btn-outline:hover { background: var(--bg-white); color: var(--tree-dark); }

        /* =========================================
           4. GLOBAL FOOTER STYLES
           ========================================= */
        .footer { background: var(--tree-dark); color: var(--bg-white); padding: 80px 0 40px; }
        .footer-grid { display: grid; grid-template-columns: 2fr 1fr 1fr; gap: 60px; border-bottom: 1px solid rgba(255, 255, 255, 0.1); padding-bottom: 60px; margin-bottom: 40px; }
        .footer-brand .title { font-family: 'Lora', serif; font-size: 2rem; color: var(--bg-white); margin-bottom: 5px; }
        .footer-brand p { color: #A0B0A8; max-width: 400px; margin-top: 20px; line-height: 1.8; }
        .footer-col h4 { color: var(--bg-white); font-size: 1.1rem; margin-bottom: 25px; font-family: 'Inter', sans-serif; letter-spacing: 1px; }
        .footer-col ul { list-style: none; }
        .footer-col ul li { margin-bottom: 15px; color: #A0B0A8; display: flex; gap: 15px; align-items: flex-start; }
        .footer-col ul li i { color: var(--tree-accent); margin-top: 5px; }
        .footer-col a { color: #A0B0A8; text-decoration: none; transition: var(--transition); }
        .footer-col a:hover { color: var(--tree-accent); }
        .footer-bottom { text-align: center; color: #A0B0A8; font-size: 0.85rem; }

        /* =========================================
           5. MOBILE NAVIGATION STYLES
           ========================================= */
        .hamburger { display: none; flex-direction: column; gap: 6px; cursor: pointer; background: none; border: none; position: relative; z-index: 1001; padding: 10px;}
        .hamburger span { width: 30px; height: 2px; background-color: var(--tree-dark); transition: var(--transition); }
        
        .hamburger.active span:nth-child(1) { transform: translateY(8px) rotate(45deg); }
        .hamburger.active span:nth-child(2) { opacity: 0; }
        .hamburger.active span:nth-child(3) { transform: translateY(-8px) rotate(-45deg); }

        .mobile-drawer {
            position: fixed; top: 0; left: 0; width: 100%; height: 100vh;
            background-color: var(--bg-white); z-index: 999;
            display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 2rem;
            transform: translateY(-100%); transition: transform 0.4s cubic-bezier(0.16, 1, 0.3, 1);
        }

        .mobile-drawer.active {
            transform: translateY(0);
        }

        .mobile-drawer a {
            font-size: 1.5rem; font-family: 'Lora', serif; font-weight: 500; color: var(--tree-dark); text-decoration: none;
        }

        /* Global Animation Classes */
        .reveal-up { opacity: 0; transform: translateY(40px); transition: all 0.8s cubic-bezier(0.16, 1, 0.3, 1); }
        .active-reveal { opacity: 1 !important; transform: translateY(0) !important; }
        @keyframes fadeUp { 0% { opacity: 0; transform: translateY(30px); } 100% { opacity: 1; transform: translateY(0); } }
        .load-1 { animation: fadeUp 1s cubic-bezier(0.16, 1, 0.3, 1) forwards; }
        .load-2 { animation: fadeUp 1s cubic-bezier(0.16, 1, 0.3, 1) 0.2s forwards; }
        .load-3 { animation: fadeUp 1s cubic-bezier(0.16, 1, 0.3, 1) 0.4s forwards; }

        /* Responsive Breakpoints */
        @media (max-width: 900px) {
            .utility-strip { display: none; }
            .nav-links { display: none; }
            .hamburger { display: flex; }
            .footer-grid { grid-template-columns: 1fr; gap: 40px; }
        }
    </style>
</head>

<body>

    <div class="utility-strip">
        <div class="utility-container">
            <div class="utility-info">
                <span><i class="fas fa-map-marker-alt"></i> Proudly serving El Paso, TX</span>
                <span><i class="fas fa-leaf"></i> Local Tree Experts Since 1987</span>
            </div>
            <div class="utility-contact">
                <span><i class="fas fa-phone"></i> (915) 858-0086</span>
            </div>
        </div>
    </div>

    <nav class="nav-header" id="navbar">
        <div class="container nav-wrapper">
            <a href="/" class="brand-logo">
                <span class="title">Daniell's</span>
                <span class="subtitle">Tree Removal & Pruning</span>
            </a>
            
            <div class="nav-links">
                <a href="/">Home</a>
                <a href="/about-us/">Our Story</a>
                <a href="/services/">Services</a>
                <a href="/gallery/">Portfolio</a>
                <a href="/contact/" class="btn-primary">Call (915) 858-0086</a>
            </div>

            <button class="hamburger" id="hamburger-btn" aria-label="Menu">
                <span></span><span></span><span></span>
            </button>
        </div>
    </nav>

    <div class="mobile-drawer" id="mobile-menu">
        <a href="ervotech.site/demo/daniells/">Home</a>
        <a href="ervotech.site/demo/daniells/about-us/">Our Story</a>
        <a href="ervotech.site/demo/daniells/services/">Services</a>
        <a href="ervotech.site/demo/daniells/gallery/">Portfolio</a>
        <a href="ervotech.site/demo/daniells/contact/" class="btn-primary" style="margin-top: 20px;">Call (915) 858-0086</a>
    </div>

    <script>
        (function() {
            const btn = document.getElementById('hamburger-btn');
            const menu = document.getElementById('mobile-menu');
            
            if(btn && menu) {
                btn.addEventListener('click', function(e) {
                    e.preventDefault();
                    this.classList.toggle('active');
                    menu.classList.toggle('active');
                    document.body.style.overflow = menu.classList.contains('active') ? 'hidden' : '';
                });
                
                const links = menu.querySelectorAll('a');
                links.forEach(link => {
                    link.addEventListener('click', () => {
                        btn.classList.remove('active');
                        menu.classList.remove('active');
                        document.body.style.overflow = '';
                    });
                });
            }
        })();
    </script>