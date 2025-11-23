<?php
get_header();
?>

<div class="container products-page">
    <h1>🛒 Our Products</h1>
    <p>&#9989; Explore our range of innovative gadgets.</p>

    <div class="products-grid">
        
        <div class="product-card">
            <center><img src="<?php echo get_template_directory_uri(); ?>/assets/images/smart-watch.jpeg" alt="Smart Watch"></center>
            <h3>⌚ Smart Watch</h3>
            <p>Keep track of your health and notifications. <br> Powered by innovation. </p>
            <a href="#" class="btn">Buy Now &raquo;</a>
        </div>

        
        <div class="product-card">
           <center><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Smart-speaker.jpeg" alt="Smart Speaker"></center> 
            <h3>🔊 Smart Speaker</h3>
            <p>Voice-controlled, smart home compatible. <br> Experience crystal-clear audio.</p>
            <a href="#" class="btn">Buy Now &raquo;</a>
        </div>

        
        <div class="product-card">
            <center><img src="<?php echo get_template_directory_uri(); ?>/assets/images/VR-headset.jpeg" alt="VR Headset"></center>
            <h3>👓 VR Headset</h3>
            <p>Immersive 4K visuals with motion tracking. <br> Step into the future.</p>
            <a href="#" class="btn">Buy Now &raquo;</a>
        </div>

        
        <div class="product-card">
            <center><img src="<?php echo get_template_directory_uri(); ?>/assets/images/smart-home-hub.jpeg" alt="Smart Home Hub"></center>
            <h3>🏠 Smart Home Hub</h3>
            <p>Control all your smart devices from one place. <br> The center of your connected life.</p>
            <a href="#" class="btn">Buy Now &raquo;</a>
        </div>
    </div>

    <div class="shop-more">
        <p>
            <strong>⭐ Explore Our Featured Picks:</strong> We're constantly updating our inventory with the latest innovations.  
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
            
            <a href="#" class="btn">View All Categories &#10148;</a>
        </p>
        <?php /* <h2>🚀 Want to explore more gadgets?</h2> */ ?>
    </div>
</div>
<?php get_footer(); ?>