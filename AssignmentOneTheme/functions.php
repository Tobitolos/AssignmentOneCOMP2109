<?php

function my_theme_setup() {
    register_nav_menus( array(
        'header' => 'Header menu',
        'footer' => 'Footer menu'
    ));
}

add_action('after_setup_theme', 'my_theme_setup');

// Add Featured Image support to our posts
add_theme_support('post-thumbnails');