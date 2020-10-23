<?php

// Carregando scripts e folhas de estilo
function load_scripts() {
    wp_enqueue_script( 'bootstrap-js', '/dist/js/bootstrap.min.js', array( 'jquery' ), '4.5.3', true );
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/dist/css/bootstrap.min.css', array(), '4.5.3', 'all' );
    wp_enqueue_style( 'template', get_template_directory_uri() . '/css/template.css', array(), '1.0', 'all' );
}
add_action( 'wp_enqueue_scripts', 'load_scripts' );

// Registrando menus
register_nav_menus(
    array(
        'my_main_menu'   => 'Main Menu',
        'my_footer_menu' => 'Footer Menu'
    )
);
