<?php

add_action('init', 'omsai_testimonial_post_type', 0 );
add_action('init', 'omsai_team_post_type', 0 );
add_action('init', 'omsai_service_post_type', 0 );

function omsai_testimonial_post_type() {
      // Labels for the Post Type
    $labels = array(
      'name'                => _x( 'Testimonials', 'Post Type General Name', 'omsai' ),
      'singular_name'       => _x( 'Testimonial', 'Post Type Singular Name', 'omsai' ),
      'menu_name'           => __( 'Testimonials', 'omsai' ),
      'parent_item_colon'   => __( 'Parent Testimonial', 'omsai' ),
      'all_items'           => __( 'All Testimonials', 'omsai' ),
      'view_item'           => __( 'View Testimonial', 'omsai' ),
      'add_new_item'        => __( 'Add New Testimonial', 'omsai' ),
      'add_new'             => __( 'Add New Testimonial', 'omsai' ),
      'edit_item'           => __( 'Edit Testimonial', 'omsai' ),
      'update_item'         => __( 'Update Testimonial', 'omsai' ),
      'search_items'        => __( 'Search Testimonial', 'omsai' ),
      'not_found'           => __( 'No testimonials found', 'omsai' ),
      'not_found_in_trash'  => __( 'Not found in trash', 'omsai' ),
    );
    // Another Customizations
    $args = array(
        'label'   => __('Testimonials','omsai' ),
        'description' => __('Testimonials for omsai', 'omsai'),
        'labels'  => $labels,
        'supports' => array('title', 'thumbnail','editor'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menus' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 15,
        'menu_icon' => 'dashicons-admin-comments',
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'capability_type' => 'page',
    );
    // register the post Type
    register_post_type( 'testimonials', $args);
}

function omsai_team_post_type() {
      // Labels for the Post Type
    $labels = array(
      'name'                => _x( 'Teams', 'Post Type General Name', 'omsai' ),
      'singular_name'       => _x( 'Team', 'Post Type Singular Name', 'omsai' ),
      'menu_name'           => __( 'teams', 'omsai' ),
      'parent_item_colon'   => __( 'Parent Team', 'omsai' ),
      'all_items'           => __( 'All Teams', 'omsai' ),
      'view_item'           => __( 'View Team', 'omsai' ),
      'add_new_item'        => __( 'Add New Team', 'omsai' ),
      'add_new'             => __( 'Add New team', 'omsai' ),
      'edit_item'           => __( 'Edit Team', 'omsai' ),
      'update_item'         => __( 'Update Team', 'omsai' ),
      'search_items'        => __( 'Search team', 'omsai' ),
      'not_found'           => __( 'No Teams found', 'omsai' ),
      'not_found_in_trash'  => __( 'Not found in trash', 'omsai' ),
    );
    // Another Customizations
    $args = array(
        'label'   => __('Teams','omsai' ),
        'description' => __('Teams for omsai', 'omsai'),
        'labels'  => $labels,
        'supports' => array('title', 'thumbnail'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menus' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 15,
        'menu_icon' => 'dashicons-groups',
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'capability_type' => 'page',
    );
    // register the post Type
    register_post_type( 'teams', $args);
}

function omsai_service_post_type() {
      // Labels for the Post Type
    $labels = array(
      'name'                => _x( 'services', 'Post Type General Name', 'omsai' ),
      'singular_name'       => _x( 'service', 'Post Type Singular Name', 'omsai' ),
      'menu_name'           => __( 'services', 'omsai' ),
      'parent_item_colon'   => __( 'Parent service', 'omsai' ),
      'all_items'           => __( 'All services', 'omsai' ),
      'view_item'           => __( 'View service', 'omsai' ),
      'add_new_item'        => __( 'Add New service', 'omsai' ),
      'add_new'             => __( 'Add New service', 'omsai' ),
      'edit_item'           => __( 'Edit service', 'omsai' ),
      'update_item'         => __( 'Update service', 'omsai' ),
      'search_items'        => __( 'Search service', 'omsai' ),
      'not_found'           => __( 'No services found', 'omsai' ),
      'not_found_in_trash'  => __( 'Not found in trash', 'omsai' ),
    );
    // Another Customizations
    $args = array(
        'label'   => __('services','omsai' ),
        'description' => __('services for omsai', 'omsai'),
        'labels'  => $labels,
        'supports' => array('title', 'thumbnail', 'editor'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menus' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 15,
        'menu_icon' => 'dashicons-lightbulb',
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'capability_type' => 'page',
    );
    // register the post Type
    register_post_type( 'services', $args);
}



?>
