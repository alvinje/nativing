<?php

// paramétrage menu desktop
function get_nav_menu() {
    $navMenuDefaults = array(
        'theme_location'  => 'header',
        'menu'            => '',
        'container'       => false,
        'container_class' => '',
        'container_id'    => '',
        'menu_class'      => 'flex-container space-around desktop-menu  ',
        'menu_id'         => '',
        'echo'            => true,
        'fallback_cb'     => false,
        'before'          => '',
        'after'           => '',
        'link_before'     => '',
        'link_after'      => '',
        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        'depth'           => 0
            );
    return wp_nav_menu($navMenuDefaults);
}

// paramétrage version mobile
 function get_nav_menu_mobile() {
     $navMenuDefaults = array(
         'theme_location'  => 'header',
         'menu'            => '',
         'container'       => false,
         'container_class' => '',
         'container_id'    => '',
         'menu_class'      => 'side-nav',
         'menu_id'         => 'mobile-demo',
         'echo'            => true,
         'fallback_cb'     => false,
         'before'          => '',
         'after'           => '',
         'link_before'     => '',
         'link_after'      => '',
         'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
         'depth'           => 0
     );
     return wp_nav_menu($navMenuDefaults);
 }

/*
// ajouter une classe à la balise <a></a> du menu
 function my_walker_nav_menu_start_el($item_output, $item, $depth, $args) {
        $item_output = preg_replace('/<a /', '<a class="animsition-link" ', $item_output, 1);
    return $item_output;
}
add_filter('walker_nav_menu_start_el', 'my_walker_nav_menu_start_el', 10, 4);*/
