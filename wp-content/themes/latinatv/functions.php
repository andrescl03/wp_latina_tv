<?php

function latina_assets()
{
    wp_register_style("google-font", "https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700", array(), false, 'all');
    wp_register_style("google-font-2", "https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap", array(), false, 'all');

    wp_register_style("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css", array(), "5-1", 'all');
    wp_enqueue_style("estilos", get_template_directory_uri() . "/assets/css/style.css", array("google-font", "bootstrap"));

    wp_enqueue_script("latinatv-js", get_template_directory_uri() . "assets/js/script.js");

}

add_action("wp_enqueue_scripts", "latina_assets");

function latina_theme_supports()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', array(
        "width" => 82,
        "height" => 101,
        "flex-width" => true,
        "flex_height" => true,
    ));
}
add_action("after_setup_theme", "latina_theme_supports");

function latina_add_menus()
{
    register_nav_menus(
        array(
            'menu-principal' => "Menu principal",
            'menu-responsive' => "Menu responsive",
        )
    );
}

add_action("after_setup_theme", "latina_add_menus");

function latina_add_sidebar()
{
    register_sidebar(
        array(
            'name' => 'Pie de página',
            'id' => 'pie-pagina',
            'before_widget' => '',
            'after_widger' => ' ',
        )
    );
}
add_action("widgets_init", "latina_add_sidebar");

function latina_add_custom_post_type()
{

    $labels = array(
        'name' => 'Latina',
        'singular_name' => 'Latina',
        'all_items' => 'todos',
        'add_new' => 'Añadir'
    );

    $args = array(
        'labels'             => $labels,
        'description'        => 'listar en un catálogo.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'deportes' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail' ),
        'taxonomies'         => array('category'),
        'show_in_rest'       => true,
        'menu_icon'          => 'dashicons-cart'
    );

    register_post_type('entrada', $args);
}

add_action("init", "latina_add_custom_post_type");
