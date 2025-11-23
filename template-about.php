<?php
get_header();
?>
<section id="about" class="about-section">
    <div class="about-container">
        <div class="about-image glass-card">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about.jpg" alt="About SmartGadgets">
        </div>
        <div class="about-text glass-card">
            <h2>💡 About SmartGadgets</h2>
            <p>
                At SmartGadgets, we believe technology should make life simpler, smarter, and more enjoyable.
                Our curated selection of innovative devices—from wearables to smart home solutions—helps you stay connected and in control with ease.
            </p>
            <p>
                Our Focus: <br>
                ✅ Quality | ✅ Design | ✅ Usability <br>
                We bring you the best gadgets for your modern lifestyle.
            </p>
            <a href="<?php echo home_url('/products'); ?>" class="btn primary-btn">Explore Products →</a>
        </div>
    </div>
</section>
<section id="contact" class="contact-section glass-card">
    <div class="contact-container">
        <h2>📞 Contact Us</h2>
        <p>Have questions or need assistance? Reach out to us!</p>
        <div class="contact-details">
            <div><strong>Email:</strong> support@smartgadgets.com</div>
            <div><strong>Phone:</strong> +91 98765 43210</div>
            <div><strong>Address:</strong> Pune, Maharashtra, India</div>
        </div>
        <a href="<?php echo home_url('/feedback'); ?>" class="btn primary-btn">Send Feedback</a>
    </div>
</section>
<?php get_footer(); ?>
