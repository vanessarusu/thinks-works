<?php

// Defines
define( 'FL_CHILD_THEME_DIR', get_stylesheet_directory() );
define( 'FL_CHILD_THEME_URL', get_stylesheet_directory_uri() );

// Classes
require_once 'classes/class-fl-child-theme.php';

// Actions
add_action( 'wp_enqueue_scripts', 'FLChildTheme::enqueue_scripts', 1000 );


function _thinksworks_assets() {
    wp_enqueue_style( '_thinksworks-admin-stylesheet', get_stylesheet_directory_uri() . '/dist/css/admin.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( '_thinksworks-stylesheet', get_stylesheet_directory_uri() . '/dist/css/bundle.css', array(), '1.0.0', 'all' );
    wp_enqueue_script( '_gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js', array(), '1.0.0', true );
    wp_enqueue_script( '_vivus', 'https://cdn.jsdelivr.net/npm/vivus@latest/dist/vivus.min.js', array(), '1.0.0', true );
    wp_enqueue_script( '_thinksworks-scripts', get_stylesheet_directory_uri() . '/dist/js/bundle.js', array(), '1.0.0', true );

}

add_action('wp_enqueue_scripts', '_thinksworks_assets', 1000 );

function my_login_logo() { 
    wp_enqueue_style( '_thinksworks-admin-stylesheet', get_stylesheet_directory_uri() . '/dist/css/admin.css', array(), '1.0.0', 'all' );

    ?> 
    <style type="text/css"> 
    body.login div#login h1 a {
     background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/dist/images/ThinksWorks-Logo-Black-Type-Black-Icon.svg);
    padding-bottom: 90px;
    background-size: contain; 
    width: 240px;
    } 
    </style>
     <?php 
} 

add_action( 'login_enqueue_scripts', 'my_login_logo' );
    