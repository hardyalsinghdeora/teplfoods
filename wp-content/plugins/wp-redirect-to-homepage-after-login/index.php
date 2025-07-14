<?php
/*
Plugin Name: WP - Redirect to homepage after login
Description: Redirect all users to homepage after the login step.
Version: 1.7.6
Author: Hervé Yvis
Author URI: http://yvisherve.net/
License: MIT
License URI: http://opensource.org/licenses/MIT
*/

function redirect_after_login($url, $request, $user)
{         
    $redirect_to = home_url();

    return $redirect_to;
}

add_filter('login_redirect', 'redirect_after_login', 10, 3);
