<?php

if (!is_admin()) {
    // bxSlider
    wp_enqueue_style( 'vendors-css', '/wp-content/themes/' . THEME_FOLDER_NAME . '/assets/css/vendors.min.css' );

    // Icones
    wp_enqueue_style( 'font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css' );
    wp_enqueue_style( 'material-icons', 'https://fonts.googleapis.com/icon?family=Material+Icons' );
}
