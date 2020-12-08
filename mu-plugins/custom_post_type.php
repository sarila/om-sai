<?php

add_action('init', 'omsai_testimonial_post_type', 0 );
add_action('init', 'omsai_team_post_type', 0 );
add_action('init', 'omsai_service_post_type', 0 );
add_action( 'init', 'omsai_slider_post_type', 0 );
add_action('init', 'omsai_client_post_type', 0 );
add_action( 'init', 'team_custom_taxonomy', 0 );
add_action( 'init', 'client_custom_taxonomy', 0 );



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

function omsai_slider_post_type()
{
    // Labels for the Post Type
    $labels = array(
        'name'                => _x('Sliders', 'Post Type General Name', 'omsai'),
        'singular_name'       => _x('Slider', 'Post Type Singular Name', 'omsai'),
        'menu_name'           => __('Sliders', 'omsai'),
        'parent_item_colon'   => __('Parent Slider', 'omsai'),
        'all_items'           => __('All Sliders', 'omsai'),
        'view_item'           => __('View Slider', 'omsai'),
        'add_new_item'        => __('Add New Slider', 'omsai'),
        'add_new'             => __('Add New Slider', 'omsai'),
        'edit_item'           => __('Edit Slider', 'omsai'),
        'update_item'         => __('Update Slider', 'omsai'),
        'search_items'        => __('Search Slider', 'omsai'),
        'not_found'           => __('No sliders found', 'omsai'),
        'not_found_in_trash'  => __('Not found in trash', 'omsai'),
    );
    // Another Customizations
    $args = array(
        'label'   => __('Sliders', 'omsai'),
        'description' => __('Sliders for omsai', 'omsai'),
        'labels'  => $labels,
        'supports' => array('title', 'thumbnail', 'editor'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menus' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 15,
        'menu_icon' => 'dashicons-images-alt2',
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'capability_type' => 'page',
    );
    // register the post Type
    register_post_type('sliders', $args);
}


function omsai_team_post_type() {
      // Labels for the Post Type
    $labels = array(
      'name'                => _x( 'teams', 'Post Type General Name', 'omsai' ),
      'singular_name'       => _x( 'team', 'Post Type Singular Name', 'omsai' ),
      'menu_name'           => __( 'teams', 'omsai' ),
      'parent_item_colon'   => __( 'Parent team', 'omsai' ),
      'all_items'           => __( 'All teams', 'omsai' ),
      'view_item'           => __( 'View team', 'omsai' ),
      'add_new_item'        => __( 'Add New team', 'omsai' ),
      'add_new'             => __( 'Add New team', 'omsai' ),
      'edit_item'           => __( 'Edit team', 'omsai' ),
      'update_item'         => __( 'Update team', 'omsai' ),
      'search_items'        => __( 'Search team', 'omsai' ),
      'not_found'           => __( 'No teams found', 'omsai' ),
      'not_found_in_trash'  => __( 'Not found in trash', 'omsai' ),
    );
    // Another Customizations
    $args = array(
        'label'   => __('teams','omsai' ),
        'description' => __('teams for omsai', 'omsai'),
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

// Register Team Taxonomy
function team_custom_taxonomy() {

  $labels = array(
    'name'                       => _x( 'Categories', 'Taxonomy General Name', 'omsai' ),
    'singular_name'              => _x( 'Category', 'Category Singular Name', 'omsai' ),
    'menu_name'                  => __( 'Category', 'omsai' ),
    'all_items'                  => __( 'All Items', 'omsai' ),
    'parent_item'                => __( 'Parent Item', 'omsai' ),
    'parent_item_colon'          => __( 'Parent Item:', 'omsai' ),
    'new_item_name'              => __( 'New Item Name', 'omsai' ),
    'add_new_item'               => __( 'Add New Item', 'omsai' ),
    'edit_item'                  => __( 'Edit Item', 'omsai' ),
    'update_item'                => __( 'Update Item', 'omsai' ),
    'view_item'                  => __( 'View Item', 'omsai' ),
    'separate_items_with_commas' => __( 'Separate items with commas', 'omsai' ),
    'add_or_remove_items'        => __( 'Add or remove items', 'omsai' ),
    'choose_from_most_used'      => __( 'Choose from the most used', 'omsai' ),
    'popular_items'              => __( 'Popular Items', 'omsai' ),
    'search_items'               => __( 'Search Items', 'omsai' ),
    'not_found'                  => __( 'Not Found', 'omsai' ),
    'no_terms'                   => __( 'No items', 'omsai' ),
    'items_list'                 => __( 'Items list', 'omsai' ),
    'items_list_navigation'      => __( 'Items list navigation', 'omsai' ),
  );
  $args = array(
    'labels'                     => $labels,
    'hierarchical'               => false,
    'public'                     => true,
    'show_ui'                    => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => true,
    'show_tagcloud'              => true,
  );
  register_taxonomy( 'team_category', array( 'teams' ), $args );

}
//Client Custom Post Type
function omsai_client_post_type() {
      // Labels for the Post Type
    $labels = array(
      'name'                => _x( 'clients', 'Post Type General Name', 'omsai' ),
      'singular_name'       => _x( 'client', 'Post Type Singular Name', 'omsai' ),
      'menu_name'           => __( 'clients', 'omsai' ),
      'parent_item_colon'   => __( 'Parent client', 'omsai' ),
      'all_items'           => __( 'All clients', 'omsai' ),
      'view_item'           => __( 'View client', 'omsai' ),
      'add_new_item'        => __( 'Add New client', 'omsai' ),
      'add_new'             => __( 'Add New client', 'omsai' ),
      'edit_item'           => __( 'Edit client', 'omsai' ),
      'update_item'         => __( 'Update client', 'omsai' ),
      'search_items'        => __( 'Search client', 'omsai' ),
      'not_found'           => __( 'No clients found', 'omsai' ),
      'not_found_in_trash'  => __( 'Not found in trash', 'omsai' ),
    );
    // Another Customizations
    $args = array(
        'label'   => __('clients','omsai' ),
        'description' => __('clients for omsai', 'omsai'),
        'labels'  => $labels,
        'supports' => array('title', 'thumbnail'),
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
    register_post_type( 'clients', $args);
}

// Register Team Taxonomy
function client_custom_taxonomy() {

  $labels = array(
    'name'                       => _x( 'Categories', 'Taxonomy General Name', 'omsai' ),
    'singular_name'              => _x( 'Category', 'Category Singular Name', 'omsai' ),
    'menu_name'                  => __( 'Category', 'omsai' ),
    'all_items'                  => __( 'All Items', 'omsai' ),
    'parent_item'                => __( 'Parent Item', 'omsai' ),
    'parent_item_colon'          => __( 'Parent Item:', 'omsai' ),
    'new_item_name'              => __( 'New Item Name', 'omsai' ),
    'add_new_item'               => __( 'Add New Item', 'omsai' ),
    'edit_item'                  => __( 'Edit Item', 'omsai' ),
    'update_item'                => __( 'Update Item', 'omsai' ),
    'view_item'                  => __( 'View Item', 'omsai' ),
    'separate_items_with_commas' => __( 'Separate items with commas', 'omsai' ),
    'add_or_remove_items'        => __( 'Add or remove items', 'omsai' ),
    'choose_from_most_used'      => __( 'Choose from the most used', 'omsai' ),
    'popular_items'              => __( 'Popular Items', 'omsai' ),
    'search_items'               => __( 'Search Items', 'omsai' ),
    'not_found'                  => __( 'Not Found', 'omsai' ),
    'no_terms'                   => __( 'No items', 'omsai' ),
    'items_list'                 => __( 'Items list', 'omsai' ),
    'items_list_navigation'      => __( 'Items list navigation', 'omsai' ),
  );
  $args = array(
    'labels'                     => $labels,
    'hierarchical'               => false,
    'public'                     => true,
    'show_ui'                    => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => true,
    'show_tagcloud'              => true,
  );
  register_taxonomy( 'client-category', array( 'clients' ), $args );

}

?>
