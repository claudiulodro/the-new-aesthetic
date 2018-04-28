<?php

add_theme_support( 'post-thumbnails' ); 

function tna_register_menus() {
  register_nav_menus(
    array(
      'main-menu' => __( 'Main Menu' ),
      'footer' => __( 'Footer Menu' )
    )
  );
}
add_action( 'init', 'tna_register_menus' );
