<?php


function insert_jquery() {
    //  RETOUR A JQUERY 1.11.3
    wp_deregister_script('jquery');
    wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.3.1.min.js', false, '1.11.3');
    // wp_register_script('jquery', "https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js", false, '1.11.3');
    wp_enqueue_script('jquery');
}
add_filter('wp_enqueue_scripts','insert_jquery',1);
//
//function headVendorScripts() {
//    echo '<script src="' . get_template_directory_uri() . '/assets/js/scrollreveal.min.js"></script>';
//}
//add_action( 'wp_head', 'headVendorScripts' );

function footerVendorScripts () {
    // All minified vendors
    wp_enqueue_script( 'all-vendors', get_template_directory_uri() . '/assets/js/vendors.min.js', array('jquery'), '', true );
}
add_action( 'wp_footer', 'footerVendorScripts' );

// scripts de la HomePage
// function homeScripts() {
//     if ( is_front_page() ) {
//     }
// }
// add_action( 'wp_footer', 'homeScripts' );

// script perso
function mainScript () {
    wp_enqueue_script( 'script js', get_template_directory_uri() . '/js/front.js', array('jquery') );
}
add_action( 'wp_footer', 'mainScript' );
