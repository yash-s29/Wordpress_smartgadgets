<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
    <div class="container">
        <nav class="main-nav">
            <div class="logo">
                <a href="<?php echo home_url(); ?>">◎ SmartGadgets</a>
            </div>

            <div class="menu-toggle">&#9776;</div>

            <ul class="nav-links">
                <li><a href="<?php echo home_url(); ?>">Home</a></li>
                <li><a href="<?php echo home_url(); ?>/#about">About</a></li>
                <li><a href="<?php echo home_url('/products'); ?>">Products</a></li>
                <li><a href="<?php echo home_url('/feedback'); ?>">Feedback</a></li>
                <li><a href="<?php echo home_url('/register'); ?>">Register</a></li>
                <li><a href="<?php echo home_url('/login'); ?>">Login</a></li>
            </ul>
        </nav>
    </div>
</header>

<script>
document.addEventListener("DOMContentLoaded", () => {
    const toggle = document.querySelector(".menu-toggle");
    const nav = document.querySelector(".nav-links");
    toggle.addEventListener("click", () => {
        nav.classList.toggle("show");
    });
});
</script>

<?php wp_footer(); ?>
</body>
</html>
