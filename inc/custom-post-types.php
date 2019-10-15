<?php

function bw_register_cpts_reviews()
{
    /**
     * Post Type: Reviews.
     */
    $labels = array(
        'name' => __('Reviews', 'brainworks'),
        'singular_name' => __('Review', 'brainworks'),
    );

    $args = array(
        'label' => __('Reviews', 'brainworks'),
        'labels' => $labels,
        'description' => '',
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'delete_with_user' => false,
        'show_in_rest' => false,
        'rest_base' => 'reviews',
        'rest_controller_class' => 'WP_REST_Posts_Controller',
        'has_archive' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'exclude_from_search' => false,
        'capability_type' => 'post',
        'map_meta_cap' => true,
        'hierarchical' => false,
        'rewrite' => array('slug' => 'reviews', 'with_front' => true),
        'query_var' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
    );

    register_post_type('reviews', $args);
}

add_action('init', 'bw_register_cpts_reviews');


// Register Custom Post Type
function stylenova_services()
{
    $labels = array(
        'name'                  => 'Услуги',
        'singular_name'         => 'Услуга',
        'menu_name'             => 'Услуги',
        'add_new_item'          => 'Добавить новую',
        'add_new'               => 'Добавить новую',
        'new_item'              => 'Новую',
        'edit_item'             => 'Редактировать',
        'update_item'           => 'Обновить',
        'view_item'             => 'Просмотр',
        'view_items'            => 'Посмотреть все',
    );
    $rewrite = array(
        'slug'                  => 'services',
        'with_front'            => true,
        'pages'                 => true,
        'feeds'                 => true,
    );
    $args = array(
        'label'                 => 'Услуга',
        'labels'                => $labels,
        'supports'              => array('title', 'thumbnail'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 4,
        'menu_icon'             => 'dashicons-cart',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => false,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'query_var'             => 'snservice',
        'rewrite'               => $rewrite,
        'capability_type'       => 'page',
    );
    register_post_type('stylenova_service', $args);
}
add_action('init', 'stylenova_services', 0);
