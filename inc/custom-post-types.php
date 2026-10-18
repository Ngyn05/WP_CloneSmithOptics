<?php
/**
 * Register Custom Post Types for Smith Optics (Standalone mode when WooCommerce is not installed)
 */

if (!defined('ABSPATH')) {
    exit;
}

function smith_register_cpts() {
    if (class_exists('WooCommerce')) {
        return; // Dùng trực tiếp post type của WooCommerce nếu có
    }

    $labels = array(
        'name'               => _x('Smith Products', 'post type general name', 'smith-optics'),
        'singular_name'      => _x('Smith Product', 'post type singular name', 'smith-optics'),
        'menu_name'          => _x('Smith Products', 'admin menu', 'smith-optics'),
        'add_new'            => _x('Add New', 'smith product', 'smith-optics'),
        'add_new_item'       => __('Add New Product', 'smith-optics'),
        'edit_item'          => __('Edit Product', 'smith-optics'),
        'all_items'          => __('All Products', 'smith-optics'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'products'),
        'capability_type'    => 'post',
        'has_archive'        => 'collections',
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-cart',
        'supports'           => array('title', 'editor', 'thumbnail', 'custom-fields', 'excerpt'),
    );

    register_post_type('smith_product', $args);
}
add_action('init', 'smith_register_cpts');
