<?php

class My_Walker_Nav_Menu extends Walker_Nav_Menu {

  function start_lvl(&$output, $depth)
  {
    $indent = str_repeat("\t", $depth);
    $output .= "\n$indent<ul id=\"dropdown1\" class=\"sousmenu-".$depth." sub-menu\">\n";
  }

}
