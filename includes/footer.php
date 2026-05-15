<footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-brand reveal-up">
                <img src="images/logo.png" alt="Pool Service Logo" onerror="this.style.display='none'">
                    <p>Honesty, integrity, and exceptional tree care services for the greater El Paso area since 1976. Your local tree service experts.</p>
                </div>
                <div class="footer-col reveal-up" style="transition-delay: 0.1s;">
                    <h4>Contact Info</h4>
                    <ul>
                        <li><i class="fas fa-map-marker-alt"></i> <span>Proudly serving El Paso, TX<br>and surrounding areas</span></li>
                        <li><i class="fas fa-phone"></i> <span>(915) 858-0086</span></li>
                        <li><i class="fas fa-clock"></i> <span>Call today for a free estimate.</span></li>
                    </ul>
                </div>
                <div class="footer-col reveal-up" style="transition-delay: 0.2s;">
                    <h4>Our Services</h4>
                    <ul>
                        <li><a href="demo/daniells/services/">El Paso Tree Removal</a></li>
                        <li><a href="/demo/daniells/services/">Stump Grinding & Removal</a></li>
                        <li><a href="/demo/daniells/services/">Tree Trimming & Pruning</a></li>
                        <li><a href="/demo/daniells/services/">Shrub Removal Services</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom reveal-up" style="transition-delay: 0.3s;">
                <p>&copy; <?php echo date("Y"); ?> Daniell's Tree Removal and Pruning Service. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            /* --- Sticky Navbar Glass Effect --- */
            const navbar = document.getElementById('navbar');
            window.addEventListener('scroll', () => {
                if (window.scrollY > 50) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }
            });

            /* --- Cinematic Scroll Reveals --- */
            function checkReveals() {
                const reveals = document.querySelectorAll('.reveal-up');
                const windowHeight = window.innerHeight;

                for (let i = 0; i < reveals.length; i++) {
                    const elementTop = reveals[i].getBoundingClientRect().top;
                    if (elementTop < windowHeight - 50) {
                        reveals[i].classList.add('active-reveal');
                    }
                }
            }

            window.addEventListener('scroll', checkReveals);
            checkReveals(); 

            // Failsafe: Reveal everything after 1.5 seconds
            setTimeout(function () {
                document.querySelectorAll('.reveal-up').forEach(function (el) {
                    el.classList.add('active-reveal');
                });
            }, 1500);
        });
    </script>
</body>
</html>