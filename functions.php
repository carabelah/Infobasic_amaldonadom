<?php
require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

/* =====================
   Enqueue Styles & Scripts
===================== */
function infobasic_enqueue_assets() {
    // Bootstrap CSS
    wp_enqueue_style(
        'bootstrap',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css',
        array(),
        '5.3.3'
    );

    // Theme style (style.css)
    wp_enqueue_style(
        'infobasic-style',
        get_stylesheet_uri(),
        array('bootstrap'),
        wp_get_theme()->get('Version')
    );

    // Custom CSS
    wp_enqueue_style(
        'custom-css',
        get_template_directory_uri() . '/inc/css/custom.css',
        array('infobasic-style'),
        wp_get_theme()->get('Version')
    );

    // Bootstrap JS Bundle
    wp_enqueue_script(
        'bootstrap-js',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js',
        array(),
        '5.3.3',
        true
    );
}
add_action('wp_enqueue_scripts', 'infobasic_enqueue_assets');

/* =====================
   Theme Supports
===================== */
add_theme_support('menus');
add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));

/* =====================
   Register Menus
===================== */
function infobasic_register_menus() {
    register_nav_menus(array(
        'primary-menu' => __('Menú Principal', 'infobasic'),
        'footer-menu'  => __('Menú del Footer', 'infobasic')
    ));
}
add_action('after_setup_theme', 'infobasic_register_menus');
