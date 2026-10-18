<?php
/**
 * Ajax Endpoints for Smith Optics Theme
 */

if (!defined('ABSPATH')) {
    exit;
}

function smith_ajax_filter_products() {
    $cat = isset($_GET['category']) ? sanitize_text_field($_GET['category']) : '';
    $limit = isset($_GET['limit']) ? intval($_GET['limit']) : 24;

    $products = smith_get_products_by_category($cat, $limit);

    ob_start();
    if (!empty($products)) {
        foreach ($products as $product) {
            include SMITH_THEME_DIR . '/template-parts/content-product.php';
        }
    } else {
        echo '<p class="smith-no-products">' . esc_html__('No products found in this collection.', 'smith-optics') . '</p>';
    }
    $html = ob_get_clean();

    wp_send_json_success(array('html' => $html, 'count' => count($products)));
}
add_action('wp_ajax_smith_filter_products', 'smith_ajax_filter_products');
add_action('wp_ajax_nopriv_smith_filter_products', 'smith_ajax_filter_products');
