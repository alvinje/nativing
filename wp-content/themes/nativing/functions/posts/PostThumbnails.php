<?php
//////////////// IMAGES A LA UNE

function montheme_setup() {
	add_theme_support( 'post-thumbnails', array( 'post','page', 'case-study', 'offre') );
	set_post_thumbnail_size( 600, 600, true ); // largeur int, hauteur int, recadrage boolean
	add_image_size( 'mags', 800, 553, true );
}
add_action( 'after_setup_theme', 'montheme_setup' );


///////////////// IMAGES A LA UNE MULTIPLES

if (class_exists('MultiPostThumbnails')) {
	new MultiPostThumbnails(array(
		'label' => 'Image magasin',
		'id' => 'img-magasin',
		'post_type' => 'magasins'
		 )
	);
}
