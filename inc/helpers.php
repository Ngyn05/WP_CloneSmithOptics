<?php
/**
 * Helper functions for Smith Optics Theme
 */

if (!defined('ABSPATH')) {
    exit;
}

/** Use the curated Vietnamese title while preserving product model names. */
function smith_localize_product_title($title, $handle = '') {
    static $titles = null;
    if ($titles === null) {
        $file = SMITH_THEME_DIR . '/assets/product-title-translations.json';
        $titles = file_exists($file) ? json_decode((string) file_get_contents($file), true) : array();
        if (!is_array($titles)) $titles = array();
    }
    $handle = sanitize_title($handle);
    return ($handle && !empty($titles[$handle])) ? $titles[$handle] : $title;
}

/**
 * Get all products from JSON index (or local database)
 */
function smith_get_all_products() {
    static $products = null;
    if ($products !== null) {
        return $products;
    }

    $json_file = SMITH_THEME_DIR . '/assets/products_index.json';
    if (file_exists($json_file)) {
        $content = file_get_contents($json_file);
        $products = json_decode($content, true);
    } else {
        $products = array();
    }
    return $products ?: array();
}

/**
 * Get products by category
 */
function smith_get_products_by_category($category = '', $limit = 24) {
    $all = smith_get_all_products();
    if (empty($category) || $category === 'all' || $category === 'new-arrivals') {
        return array_slice($all, 0, $limit);
    }

    $filtered = array();
    $cat_slug = strtolower(sanitize_title($category));

    foreach ($all as $p) {
        if (isset($p['category']) && strtolower($p['category']) === $cat_slug) {
            $filtered[] = $p;
        } elseif (isset($p['title']) && stripos($p['title'], $category) !== false) {
            $filtered[] = $p;
        }
    }

    return array_slice($filtered ?: $all, 0, $limit);
}

/**
 * Get single product by handle
 */
function smith_get_product_by_handle($handle) {
    $all = smith_get_all_products();
    foreach ($all as $p) {
        if (isset($p['handle']) && $p['handle'] === $handle) {
            return $p;
        }
    }
    return null;
}

/**
 * Get full detailed product with auto-fetch and local cache
 */
function smith_get_product_detail($handle) {
    if (empty($handle)) {
        return null;
    }

    $handle = strtolower(trim($handle));
    $cache_dir = SMITH_THEME_DIR . '/assets/products_cache';
    $cache_file = $cache_dir . '/' . $handle . '.json';
    // Bộ cache cũ mã hóa ký hiệu ® trong tên tệp thành #U00ae trên Windows.
    // Giữ URL/tên sản phẩm Unicode chuẩn, nhưng vẫn đọc được đúng hai tệp kế thừa này.
    if (!file_exists($cache_file) && (strpos($handle, '®') !== false || strpos($handle, 'Â®') !== false)) {
        $legacy_handle = str_replace(array('Â®', '®'), '#U00ae', $handle);
        $legacy_cache_file = $cache_dir . '/' . $legacy_handle . '.json';
        if (file_exists($legacy_cache_file)) $cache_file = $legacy_cache_file;
    }

    // 1. Kiểm tra cache local đã có sẵn
    if (file_exists($cache_file)) {
        $content = file_get_contents($cache_file);
        $data = json_decode($content, true);
        if ($data && !empty($data['title'])) {
            $data['title'] = smith_localize_product_title($data['title'], $handle);
            return $data;
        }
    }

    // 2. Nếu chưa có, tự động gọi API Shopify của Smith Optics và lưu cache
    $remote_url = 'https://www.smithoptics.com/products/' . urlencode($handle) . '.json';
    $response = wp_remote_get($remote_url, array(
        'timeout' => 5,
        'user-agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36',
        'headers' => array('Accept' => 'application/json')
    ));

    if (!is_wp_error($response) && wp_remote_retrieve_response_code($response) === 200) {
        $body = wp_remote_retrieve_body($response);
        $json = json_decode($body, true);
        if (isset($json['product']) && !empty($json['product']['title'])) {
            $product = $json['product'];
            $product['title'] = smith_localize_product_title($product['title'], $handle);
            if (!is_dir($cache_dir)) {
                wp_mkdir_p($cache_dir);
            }
            file_put_contents($cache_file, json_encode($product, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
            return $product;
        }
    }

    // 3. Fallback tìm trong products_index.json
    $fallback = smith_get_product_by_handle($handle);
    if ($fallback) {
        return array(
            'id' => crc32($handle),
            'title' => $fallback['title'],
            'handle' => $fallback['handle'],
            'product_type' => isset($fallback['category']) ? ucwords($fallback['category']) : 'Performance Gear',
            'body_html' => '<div class="short-desc-content">' . (isset($fallback['description']) ? $fallback['description'] : 'Experience premium optics with authentic Smith technology.') . '</div>',
            'variants' => array(
                array(
                    'id' => crc32($handle . '_v1'),
                    'title' => 'Standard Fit',
                    'price' => str_replace('$', '', isset($fallback['price']) ? $fallback['price'] : '195.00'),
                    'compare_at_price' => null,
                    'sku' => strtoupper(substr(md5($handle), 0, 10)),
                    'option1' => 'Standard'
                )
            ),
            'images' => array(
                array(
                    'id' => 1,
                    'src' => smith_get_image_url(isset($fallback['image']) ? $fallback['image'] : ''),
                    'variant_ids' => array()
                )
            ),
            'image' => array(
                'src' => smith_get_image_url(isset($fallback['image']) ? $fallback['image'] : '')
            )
        );
    }

    return null;
}

/**
 * Parse body_html into structured sections dynamically for all product types
 */
function smith_parse_product_body($body_html) {
    $result = array(
        'description' => '',
        'sections' => array(), // associative: Title => array of bullet points / text
        'included' => array()
    );

    if (empty($body_html)) {
        return $result;
    }

    // 1. Extract Description
    if (preg_match('/<div[^>]*class="[^"]*short-desc-content[^"]*"[^>]*>(.*?)<\/div>/is', $body_html, $matches)) {
        $result['description'] = trim(strip_tags($matches[1]));
    } elseif (preg_match('/<h2[^>]*>Description<\/h2>\s*<p[^>]*>(.*?)<\/p>/is', $body_html, $matches)) {
        $result['description'] = trim(strip_tags($matches[1]));
    } elseif (preg_match('/<p[^>]*>(.*?)<\/p>/is', $body_html, $matches)) {
        $result['description'] = trim(strip_tags($matches[1]));
    }

    // 2. Extract All H3 Sections (Protection, Vision, Fit / Integration, Frame, Features, What's Included, etc.)
    preg_match_all('/<h3[^>]*>(.*?)<\/h3>\s*(?:<ul>(.*?)<\/ul>|<p>(.*?)<\/p>)/is', $body_html, $all_sections, PREG_SET_ORDER);
    foreach ($all_sections as $sec) {
        $sec_title = trim(strip_tags($sec[1]));
        if (empty($sec_title)) continue;

        $items = array();
        if (!empty($sec[2])) {
            // Unordered list
            preg_match_all('/<li[^>]*>(.*?)<\/li>/is', $sec[2], $li_matches);
            $items = array_map('trim', array_map('strip_tags', $li_matches[1]));
        } elseif (!empty($sec[3])) {
            $items = array(trim(strip_tags($sec[3])));
        }

        if (stripos($sec_title, "Included") !== false) {
            $result['included'] = $items;
        } else {
            $result['sections'][$sec_title] = $items;
        }
    }

    // 3. Fallback for What's Included if inside detail-block
    if (empty($result['included']) && preg_match('/<div[^>]*class="[^"]*whats-included[^"]*"[^>]*>.*?<ul>(.*?)<\/ul>/is', $body_html, $inc_match)) {
        preg_match_all('/<li[^>]*>(.*?)<\/li>/is', $inc_match[1], $li_m);
        $result['included'] = array_map('trim', array_map('strip_tags', $li_m[1]));
    }

    return $result;
}


/**
 * Format local image URL
 */
function smith_get_image_url($image_path) {
    if (empty($image_path)) {
        return SMITH_THEME_URI . '/assets/images/placeholder_product.webp';
    }
    if (strpos($image_path, 'http') === 0 || strpos($image_path, '//') === 0) {
        return $image_path;
    }
    // Remove leading /assets/ or /
    $clean_path = ltrim($image_path, '/');
    if (strpos($clean_path, 'assets/') === 0) {
        return SMITH_THEME_URI . '/' . $clean_path;
    }
    return SMITH_THEME_URI . '/assets/' . $clean_path;
}
