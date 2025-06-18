<?php
/*
 * Plugin Name: redirect user after login
 */
function redirect_function() {
    return home_url();
}
add_action( 'login_redirect', 'redirect_function' );
?>
