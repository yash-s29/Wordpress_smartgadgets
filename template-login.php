<?php
get_header();
?>
<div class="container" style="max-width:500px; margin-top:5rem;">
     <h1>👋 Welcome Back!</h1>
    <form>
        <p>
            <input type="email" placeholder="Your Registered Email" required>
        </p>

        <p>
            <input type="password" placeholder="Enter Your Password" required>
        </p>
        
        <p>
            <input type="submit" value="Secure Login &raquo;">
        </p>
            
            <a href="<?php echo home_url('/register'); ?>">
                &#9989; Don't have an account? Register here
            </a>
        
    </form>
</div>
<?php get_footer(); ?>