<?php
get_header();
?>
<section class="hero" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/hero.jpg');">
    <div class="hero-content">
        <h1>✨ Welcome to SmartGadgets ✨</h1>
        <p>
            &#10003; Discover our latest innovative gadgets that simplify your life. 
            <br>
            &#9113; Quality | Design | Usability
        </p>
        
        <a href="<?php echo home_url('/register'); ?>" class="btn">
            Get Started &rarr;
        </a>
    </div>
</section>
<section id="about" class="about-section">
    <div class="about-container">
        <div class="about-text glass-card">
            <h2>💡 About SmartGadgets</h2>
            <p>
                At SmartGadgets, we believe that technology should be an effortless extension of your life, not a complication. 
                Our core mission is to bridge the gap between cutting edge innovation and everyday usability, ensuring that the future is accessible to everyone.
                We meticulously select and develop products from intuitive smart wearables that track your wellness journey to seamlessly connected home devices that simplify daily tasks all while upholding the highest standards of sleek, minimalist design.
            </p>
                 We bring you the best gadgets for your modern lifestyle.
            </p>
            <a href="<?php echo home_url('/products'); ?>" class="btn secondary-btn">Explore Products</a>
        </div>
        <div class="about-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about.jpg" alt="About SmartGadgets">
        </div>
    </div>
</section>
<section id="contact" class="contact-section glass-card">
    <div class="contact-container">
        <h2>📞 Contact Us</h2>
        <p class="contact-intro">
            We’d love to hear from you! Reach out with any questions, feedback, or partnership ideas.
        </p>
        <div class="contact-details">
            <div><strong>Email:</strong> support@smartgadgets.com</div>
            <div><strong>Phone:</strong> +91 98765 43210</div>
            <div><strong>Address:</strong> Pune, Maharashtra, India</div>
        </div>
        <a href="<?php echo home_url('/feedback'); ?>" class="btn primary-btn">Send Feedback</a>
    </div>
</section>
<?php get_footer(); ?>
