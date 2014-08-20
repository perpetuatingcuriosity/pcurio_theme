<?php

function pcurio_scripts_method() {
  wp_enqueue_script(
    'pcurio_js', //handle
    get_stylesheet_directory_uri() . '/js/pcurio.js', //source
    array( 'jquery' ), //dependencies
    null, // version number
    true //load in footer
  );

  wp_enqueue_script(
    'smoothscroll', //handle
    get_stylesheet_directory_uri() . '/js/smoothscroll.js', //source
    array( 'jquery' ), //dependencies
    null, // version number
    true //load in footer
  );

  wp_enqueue_script(
    'svginject', //handle
    get_stylesheet_directory_uri() . '/js/SVGinject.js', //source
    array( 'jquery' ), //dependencies
    null, // version number
    true //load in footer
  );

}

add_action( 'wp_enqueue_scripts', 'pcurio_scripts_method' );

// Add theme support for Featured Image
add_theme_support( 'post-thumbnails' );

//register our nav menu
register_nav_menu('primary','Main Menu');


//Register Sidebar Widget Area and Footer Widget Areas
function pcurio_widgets_init() {
  register_sidebar( array(
    'name'          => __( 'Sidebar', 'pcurio' ),
    'class'            => 'sidebar-1',
    'description'   => '',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h1 class="widgetTitle">',
    'after_title'   => '</h1>',
  ) );

  register_sidebar( array(
  'name' => 'Footer Sidebar 1',
  'class' => 'footer-sidebar-1',
  'description' => 'Appears in the footer area',
  'before_widget' => '<aside id="%1$s" class="widget %2$s">',
  'after_widget' => '</aside>',
  'before_title' => '<h3 class="widgetTitle">',
  'after_title' => '</h3>',
  ) );
  register_sidebar( array(
  'name' => 'Footer Sidebar 2',
  'class' => 'footer-sidebar-2',
  'description' => 'Appears in the footer area',
  'before_widget' => '<aside id="%1$s" class="widget %2$s">',
  'after_widget' => '</aside>',
  'before_title' => '<h3 class="widgetTitle">',
  'after_title' => '</h3>',
  ) );
  register_sidebar( array(
  'name' => 'Footer Sidebar 3',
  'class' => 'footer-sidebar-3',
  'description' => 'Appears in the footer area',
  'before_widget' => '<aside id="%1$s" class="widget %2$s">',
  'after_widget' => '</aside>',
  'before_title' => '<h3 class="widgetTitle">',
  'after_title' => '</h3>',
  ) );
  register_sidebar( array(
  'name' => 'Footer Sidebar 4',
  'class' => 'footer-sidebar-4',
  'description' => 'Appears in the footer area',
  'before_widget' => '<aside id="%1$s" class="widget %2$s">',
  'after_widget' => '</aside>',
  'before_title' => '<h3 class="widgetTitle">',
  'after_title' => '</h3>',
  ) );
}

add_action( 'widgets_init', 'pcurio_widgets_init' );


//----------------------------------------------------------------
//DEALING WITH JQUERY (load at bottom of page rather than top)
wp_deregister_script('jquery');
wp_register_script('jquery');
wp_enqueue_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"), false, '1.3.2', true);


?>