<?php

////////////////// MENUS ADMINISTRABLE DU SITE
register_nav_menus(array(
    'header' => 'Menu principal (header)',
    'footer' => 'Menu secondaire (footer)'
));

//////////////// TROUVER LE MENU PARENT D'UNE PAGE
function parent_menu_name( $loc ) {
    global $post;
    $locs = get_nav_menu_locations();
    $menu = wp_get_nav_menu_object( $locs[$loc] );
    $infos = array();
    if($menu) {
        $items = wp_get_nav_menu_items($menu->term_id);
        foreach ($items as $k => $v) {
            // Check if this menu item links to the current page
            if ($items[$k]->object_id == $post->ID) {
              // retrouve l'id de la page actuelle
                $infos['id'] = $items[$k]->ID;
                $infos['title'] = $items[$k]->title;
                $infos['parent'] = $items[$k]->menu_item_parent;
                break;
            }
        }
        if ($infos['parent'] != '0') {
          foreach ($items as $k => $v) {
              // Check if this menu item links to the current page
              if ($items[$k]->ID == $infos['parent']) {
                  $infos['titre_parent'] = $items[$k]->title;
                  break;
              }
          }
          return $infos['titre_parent'];
        }
        return $infos['title'];
    }
}
