<?php

function darina_theme_support()
{
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'darina_theme_support');

function darina_menus()
{
    $locations = array(
        'primary' => "Desktop Primary Navbar"
    );
    register_nav_menus($locations);
}

function register_navwalker()
{
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}

add_action('after_setup_theme', 'register_navwalker');

add_action('init', 'darina_menus');

function darina_register_styles()
{
    wp_enqueue_style('darina-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css", array(), null, 'all');
    wp_enqueue_style('darina-owl', "https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css", array(), false, 'all');
    wp_enqueue_style('darina-owl-theme', "https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css", array(), false, 'all');
    wp_enqueue_style('darina-animate', "https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css", array(), false, 'all');
    wp_enqueue_style('darina-magnific', "https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css", array(), false, 'all');

    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Lato:wght@900&family=Righteous&family=Roboto:wght@400;500;900&display=swap', false);
    wp_enqueue_style('darina-styles', get_template_directory_uri() . '/assets/css/style.css?v=' . time(), array(), false, 'all');
}

add_action('wp_enqueue_scripts', 'darina_register_styles');


function darina_register_scripts()
{
    wp_enqueue_script('darina-jquery', "https://code.jquery.com/jquery-3.6.0.js", null, null, false, false);
    wp_enqueue_script('darina-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js", array(), '', true);
    wp_enqueue_script('darina-fontawesome', "https://kit.fontawesome.com/8b79b4846c.js", array(), null, false);
    wp_enqueue_script('darina-owl', "https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js", array('darina-jquery'), '', true);
    wp_enqueue_script('darina-magnific', "https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js", null, false, true);
    wp_enqueue_script('darina-script', get_template_directory_uri() . '/assets/js/main.js', array(), '', true);
}

add_action('wp_enqueue_scripts', 'darina_register_scripts');

add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');

function posts_link_attributes() {
  return 'class="styled-links"';
}
