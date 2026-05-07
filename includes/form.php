<section id="contact" style="padding: 120px 0; background: var(--bg-white);">
    <div class="container">
        <div class="section-header reveal-up">
            <span>Free Estimate</span>
            <h2>Request Tree Service</h2>
            <p style="color: var(--text-muted); max-width: 600px; margin: 15px auto 0;">Provide us with some details about your project, and our arborists will get back to you promptly to schedule an on-site assessment.</p>
        </div>

        <div class="reveal-up" style="max-width: 650px; margin: 0 auto; background: var(--bg-cream); padding: 50px; border-radius: 8px; border: 1px solid var(--border-soft); box-shadow: var(--shadow-soft);">
            
            <?php
            // Basic Form Processing Logic
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // In a production environment, sanitize these inputs before use/emailing
                $name = htmlspecialchars($_POST['name']);
                $phone = htmlspecialchars($_POST['phone']);
                $service = htmlspecialchars($_POST['service']);
                
                // Show success message
                echo "<div style='background: #E8F5E9; color: #2E7D32; padding: 15px; border-radius: 4px; margin-bottom: 25px; text-align: center; font-weight: 500;'>";
                echo "Thank you, $name! Your request for $service has been received. We will call you at $phone shortly.";
                echo "</div>";
            }
            ?>

            <form action="#contact" method="POST" style="display: grid; gap: 20px;">
                
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                    <input type="text" name="name" placeholder="Full Name *" required 
                           style="width: 100%; padding: 16px; border: 1px solid var(--border-soft); border-radius: 4px; font-family: 'Inter', sans-serif; font-size: 0.95rem; outline: none;">
                    
                    <input type="tel" name="phone" placeholder="Phone Number *" required 
                           style="width: 100%; padding: 16px; border: 1px solid var(--border-soft); border-radius: 4px; font-family: 'Inter', sans-serif; font-size: 0.95rem; outline: none;">
                </div>

                <select name="service" required 
                        style="width: 100%; padding: 16px; border: 1px solid var(--border-soft); border-radius: 4px; font-family: 'Inter', sans-serif; font-size: 0.95rem; outline: none; color: var(--text-muted); background: #fff; cursor: pointer;">
                    <option value="" disabled selected>Select a Service Needed *</option>
                    <option value="Tree Removal">Tree Removal</option>
                    <option value="Tree Pruning & Trimming">Tree Pruning & Trimming</option>
                    <option value="Stump Grinding">Stump Grinding</option>
                    <option value="Emergency Service">Emergency Storm Service</option>
                </select>

                <textarea name="message" placeholder="Describe the job (e.g., Tree location, size, access restrictions)..." rows="4" 
                          style="width: 100%; padding: 16px; border: 1px solid var(--border-soft); border-radius: 4px; font-family: 'Inter', sans-serif; font-size: 0.95rem; outline: none; resize: vertical;"></textarea>

                <button type="submit" class="btn-primary" style="width: 100%; font-size: 1rem; padding: 18px;">Submit Request</button>
            </form>
        </div>
    </div>
</section>