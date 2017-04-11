<?php
/*
Plugin Name: Carawebs Secure REST API Plugin
Plugin URI:  https://carawebs.com
Description: Basic WordPress Plugin that restricts access to the REST API to logged-in users
Version:     1.0.0
Author:      David Egan
Author URI:  http://dev-notes.eu/
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/
add_filter( 'rest_authentication_errors', function( $result ) {
    if ( ! empty( $result ) ) {
        return $result;
    }
    if ( ! is_user_logged_in() || ! current_user_can( 'manage_options' ) ) {
        return new WP_Error( 'rest_not_logged_in', 'You are not currently logged in.', array( 'status' => 401 ) );
    }
    return $result;
});
