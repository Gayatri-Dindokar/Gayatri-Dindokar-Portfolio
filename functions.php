<?php
/* =========================
   Theme Setup
========================= */
require get_template_directory() . '/template-parts/class-menu-walker.php';


function load_stylesheets() {
    
    wp_register_style('custom', get_template_directory_uri() . '/assets/css/custom.css');
    wp_enqueue_style('custom'); 

    // Enqueue the main stylesheet
    wp_enqueue_style('pixel-style', get_stylesheet_uri());


     /* Main JS */
    wp_enqueue_script(
        'main-js',
        get_template_directory_uri() . '/assets/js/main.js',
        [],          // dependencies
        null,
        true         // load in footer
    );

}
add_action('wp_enqueue_scripts', 'load_stylesheets');

function add_cdn_files() {
    wp_enqueue_style(
        'bootstrap-icons',
        'https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css'
    );
}
add_action('wp_enqueue_scripts', 'add_cdn_files');

function add_fontawesome() {
    wp_enqueue_style(
        'font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css'
    );
}
add_action('wp_enqueue_scripts', 'add_fontawesome');

function gayatri_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'gayatri_theme_setup');

add_theme_support( 'custom-logo' );

 add_theme_support('menus');
 register_nav_menus(
    array(
        'top-menu' => __('Top Menu','theme'),
        'sidebar-menu'=> __('side menu','theme'),
       

    )
    );
/* =========================
   Enqueue CSS & JS
========================= */
function gayatri_assets() {

    /* Bootstrap CSS */
    wp_enqueue_style(
        'bootstrap-css',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css'
    );

    /* Theme Custom CSS */
    wp_enqueue_style(
        'gayatri-style',
        get_template_directory_uri() . '/assets/css/custom.css',
        ['bootstrap-css'] // dependency
    );

    /* Bootstrap JS */
    wp_enqueue_script(
        'bootstrap-js',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js',
        [],
        null,
        true
    );

    /* Theme Custom JS */
    wp_enqueue_script(
        'gayatri-script',
        get_template_directory_uri() . '/assets/js/main.js',
        ['bootstrap-js'],
        null,
        true
    );
}
add_action('wp_enqueue_scripts', 'gayatri_assets');


// cpt project
function create_projects_cpt() {
    register_post_type('projects', array(
        'labels' => array(
            'name' => 'Projects',
            'singular_name' => 'Project'
        ),
        'public' => true,
        'supports' => array('title','editor','thumbnail'),
        'menu_icon' => 'dashicons-portfolio'
    ));
}
add_action('init','create_projects_cpt');







