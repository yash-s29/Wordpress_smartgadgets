<?php
get_header();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = sanitize_text_field($_POST['full_name']);
    $email = sanitize_email($_POST['email']);
    $password = $_POST['password'];

    if (!username_exists($username) && !email_exists($email)) {
        $user_id = wp_create_user($username, $password, $email);

        if (!is_wp_error($user_id)) {
            echo '<p class="success-message">Registration successful! <a href="' . esc_url(home_url('/login')) . '">Login here</a></p>';
        } else {
            echo '<p class="error-message">Error: ' . $user_id->get_error_message() . '</p>';
        }
    } else {
        echo '<p class="error-message">Username or email already exists!</p>';
    }
}
?>

<div class="container form-page">
    <div class="form-wrapper">
        <h1>🔑 Register Account</h1>
        <center><p class="form-subtitle">Create your account</p></center>
        <form action="" method="post">
            <input type="text" name="full_name" placeholder="Full Name" required>
            <input type="email" name="email" placeholder="Email Address" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" class="btn">Register</button>
        </form>
        <p class="form-footer">
          <center>  &#8618; Already have an account? <a href="<?php echo esc_url(home_url('/login')); ?>">Login here</a> </center>
        </p>
    </div>
</div>

<?php get_footer(); ?>
