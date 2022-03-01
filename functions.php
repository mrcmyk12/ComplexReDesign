<?php 

function complex_files() {
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', NULL, 1.0, true);
    wp_enqueue_style('bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css');
    wp_enqueue_style('font-awesome','"https://kit.fontawesome.com/34bbb27069.js"');
    wp_enqueue_style('google-fonts',"https://fonts.googleapis.com/css2?family=Roboto+Serif:wght@300;400;500;700&family=Roboto+Slab:wght@400;500;600;700;800;900&display=swap");
    wp_enqueue_style('complex_main_styles', get_theme_file_uri('/build/index.css'));
}

add_action('wp_enqueue_scripts', 'complex_files' );

function complex_features() {
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'complex_features');