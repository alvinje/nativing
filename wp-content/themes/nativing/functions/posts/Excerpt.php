<?php
//////////////// TAILLE DES RESUMES D'ARTICLE

function new_excerpt_length($length) {
	return 25;
}
add_filter('excerpt_length', 'new_excerpt_length');


//////////////// FIN DES RESUMES D'ARTICLE

function new_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');
