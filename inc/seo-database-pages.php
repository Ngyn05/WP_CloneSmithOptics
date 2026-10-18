<?php
/**
 * Kết nối các trang snapshot với WordPress và Yoast SEO.
 *
 * Các bản ghi được tạo bởi tools/sync-pages-to-database.php. File này chỉ đọc
 * dữ liệu, vì vậy không phát sinh thao tác ghi database trong request public.
 */

if (!defined('ABSPATH')) exit;

function smith_normalize_public_path($path) {
    $path = trim((string) $path);
    $path = (string) parse_url($path, PHP_URL_PATH);
    $site_path = trim((string) parse_url(home_url('/'), PHP_URL_PATH), '/');
    $path = trim(rawurldecode($path), '/');
    if ($site_path && ($path === $site_path || strpos($path, $site_path . '/') === 0)) {
        $path = trim(substr($path, strlen($site_path)), '/');
    }
    return untrailingslashit($path);
}

function smith_find_database_route($path) {
    static $cache = array();
    $path = smith_normalize_public_path($path);
    if ($path === '') return null;
    if (array_key_exists($path, $cache)) return $cache[$path];

    $ids = get_posts(array(
        'post_type'              => 'page',
        'post_status'            => 'publish',
        'posts_per_page'         => 1,
        'fields'                 => 'ids',
        'meta_key'               => '_smith_public_path',
        'meta_value'             => $path,
        'no_found_rows'          => true,
        'suppress_filters'       => true,
        'update_post_term_cache' => false,
    ));
    $cache[$path] = $ids ? get_post((int) $ids[0]) : null;
    return $cache[$path];
}

function smith_current_database_route() {
    $uri = isset($_SERVER['REQUEST_URI']) ? wp_unslash($_SERVER['REQUEST_URI']) : '';
    return smith_find_database_route($uri);
}

/** Tìm nội dung database tương ứng cho cả URL WordPress và URL router. */
function smith_current_seo_object() {
    $page = smith_current_database_route();
    if ($page instanceof WP_Post) return $page;

    $queried = get_queried_object();
    if ($queried instanceof WP_Post) return $queried;

    $handle = get_query_var('smith_product');
    if ($handle) {
        $ids = get_posts(array('post_type' => 'product', 'post_status' => 'publish',
            'posts_per_page' => 1, 'fields' => 'ids', 'meta_key' => '_smith_handle',
            'meta_value' => sanitize_title($handle), 'no_found_rows' => true));
        if ($ids) return get_post((int) $ids[0]);
    }
    return $queried;
}

function smith_fit_runtime_seo_title($base) {
    $suffix = ' | SmithOptics VN';
    $base = html_entity_decode(wp_strip_all_tags((string) $base), ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $base = preg_replace('/\s*\|\s*Smith(?:Optics)?\s*(?:Việt Nam|VN)\s*$/iu', '', trim($base));
    $base = str_replace(array('...', '…'), ' ', $base);
    $limit = 60 - mb_strlen($suffix, 'UTF-8');
    if (mb_strlen($base, 'UTF-8') > $limit) {
        $base = mb_substr($base, 0, $limit + 1, 'UTF-8');
        $base = preg_replace('/\s+\S*$/u', '', $base);
    }
    $base = rtrim(trim($base), '-–—|,.;:');
    return ($base ?: 'Smith Việt Nam') . $suffix;
}

/** Việt hóa phần mô tả, đồng thời giữ nguyên tên model và thương hiệu. */
function smith_vietnamese_seo_base($base, $object = null) {
    $slug = '';
    if ($object instanceof WP_Term) $slug = $object->slug;
    elseif ($object instanceof WP_Post) $slug = $object->post_name;
    if ($object instanceof WP_Post && strpos((string) get_post_meta($object->ID, '_smith_snapshot_handle', true), 'technology-') === 0) {
        return trim(preg_replace(array('/^Technology\s+/i', '/\bBike Helmets\b/i', '/\bSunglasses\b/i'),
            array('Công nghệ ', 'mũ bảo hiểm xe đạp', 'kính râm'), (string) $base));
    }

    $exact_by_slug = array(
        'new-arrivals' => 'Sản phẩm mới', 'sunglasses' => 'Kính râm',
        'goggles' => 'Kính bảo hộ', 'helmets' => 'Mũ bảo hiểm',
        'accessories' => 'Phụ kiện Smith Optics', 'apparel' => 'Trang phục Smith Optics',
        'eyewear' => 'Kính mắt Smith Optics', 'sale' => 'Sản phẩm giảm giá Smith Optics',
        'snow' => 'Thiết bị thể thao tuyết', 'snow-goggles' => 'Kính bảo hộ trượt tuyết',
        'snow-helmets' => 'Mũ bảo hiểm trượt tuyết', 'bike-sale' => 'Sản phẩm xe đạp giảm giá',
        'archive-collection' => 'Bộ sưu tập mùa trước', 'core-collection' => 'Bộ sưu tập chủ đạo',
        'hiking' => 'Bộ sưu tập leo núi', 'running' => 'Bộ sưu tập chạy bộ',
        'fishing' => 'Kính râm câu cá', 'surfing' => 'Kính râm lướt sóng',
        'blog' => 'Bài viết', 'bike-helmets' => 'Mũ bảo hiểm xe đạp tốt nhất',
        'best-selling-sunglasses' => 'Kính râm bán chạy',
        'lifestyle-sunglasses' => 'Kính râm phong cách sống',
        'sport-performance-sunglasses' => 'Kính râm thể thao hiệu năng cao',
        'youth-bike-helmets' => 'Mũ bảo hiểm xe đạp trẻ em',
        'v-chromapop-sunglasses' => 'Kính râm ChromaPop™',
        'v-photochromic-sunglasses' => 'Kính râm đổi màu theo ánh sáng',
        'prescription' => 'Kính mắt và kính râm có độ',
        'prescription-eyeglasses' => 'Kính mắt có độ',
        'prescription-sunglasses' => 'Kính râm có độ',
        'protective-eyewear' => 'Kính bảo hộ thể thao',
        'road-gravel-cycling' => 'Kính đạp xe đường trường và đường sỏi',
        'road-gravel-cycling-helmets' => 'Mũ bảo hiểm xe đạp đường trường',
        'urban-cycling-helmets' => 'Mũ bảo hiểm xe đạp đô thị và xe điện',
        'snow-goggles-replacement-lenses' => 'Tròng kính bảo hộ tuyết thay thế',
        'sunglasses-replacement-lenses' => 'Tròng kính râm thay thế',
        'sunglasses-under-200' => 'Kính râm dưới 200 đô la',
        'backcountry-touring-sunglasses' => 'Kính râm leo núi',
        'all-mountain-snow-helmets' => 'Mũ bảo hiểm trượt tuyết đa địa hình',
        'ulterior-collection' => 'Bộ sưu tập Ulterior',
    );
    if ($slug && isset($exact_by_slug[$slug])) return $exact_by_slug[$slug];

    $base = (string) $base;
    $replacements = array(
        '/\bTechnology\b/i' => 'Công nghệ', '/\bNew Arrivals\b/i' => 'Sản phẩm mới',
        '/\bMới Arrivals\b/iu' => 'Sản phẩm mới', '/\bReplacement Lenses?\b/i' => 'Tròng kính thay thế',
        '/\bSunglasses\b/i' => 'Kính râm', '/\bSunglass\b/i' => 'Kính râm',
        '/\bSnow Goggles\b/i' => 'Kính bảo hộ trượt tuyết', '/\bGoggles\b/i' => 'Kính bảo hộ',
        '/\bGoggle\b/i' => 'Kính bảo hộ', '/\bSnow Helmets\b/i' => 'Mũ bảo hiểm trượt tuyết',
        '/\bBike Helmets\b/i' => 'Mũ bảo hiểm xe đạp', '/\bHelmets\b/i' => 'Mũ bảo hiểm',
        '/\bHelmet\b/i' => 'Mũ bảo hiểm', '/\bAccessories\b/i' => 'Phụ kiện',
        '/\bAccessory\b/i' => 'Phụ kiện', '/\bApparel\b/i' => 'Trang phục',
        '/\bEyewear\b/i' => 'Kính mắt', '/\bPrescription\b/i' => 'Có độ',
        '/\bCollection\b/i' => 'Bộ sưu tập', '/\bBest Selling\b/i' => 'Bán chạy',
        '/\bBest\b/i' => 'Tốt nhất', '/\bSale\b/i' => 'Giảm giá',
        '/\bKids?\b/i' => 'Trẻ em', '/\bYouth\b/i' => 'Trẻ em',
        '/\bWomen(?:’s|\x27s)?\b/iu' => 'Nữ', '/\bMen(?:’s|\x27s)?\b/iu' => 'Nam',
        '/\bCycling\b/i' => 'Đạp xe', '/\bBike\b/i' => 'Xe đạp',
        '/\bSnowboard(?:ing)?\b/i' => 'Trượt ván tuyết', '/\bSki(?:ing)?\b/i' => 'Trượt tuyết',
        '/\bMountaineering\b/i' => 'Leo núi', '/\bHiking\b/i' => 'Đi bộ đường dài',
        '/\bCommuter\b/i' => 'Đô thị', '/\bRoad\b/i' => 'Đường trường',
        '/\bSurfer\b/i' => 'Lướt sóng', '/\bSafety\b/i' => 'An toàn',
        '/\bGlasses\b/i' => 'Kính mắt', '/\bGear\b/i' => 'Thiết bị',
        '/\bRunning\b/i' => 'Chạy bộ', '/\bFishing\b/i' => 'Câu cá',
        '/\bSnow\b/i' => 'Thể thao tuyết', '/\bEveryday\b/i' => 'Phong cách sống',
        '/\bPerformance\b/i' => 'Hiệu năng cao', '/\bPhotochromic\b/i' => 'Đổi màu theo ánh sáng',
        '/\bProtective\b/i' => 'Bảo hộ', '/\bProducts?\b/i' => 'Sản phẩm',
        '/\bReviews?\b/i' => 'Đánh giá', '/\bSupport\b/i' => 'Hỗ trợ',
        '/\bWarranty\b/i' => 'Bảo hành', '/\bStore\b/i' => 'Cửa hàng',
    );
    return trim(preg_replace(array_keys($replacements), array_values($replacements), $base));
}

/** SEO title duy nhất cho mọi kiểu URL public. */
function smith_current_complete_seo_title($fallback = '') {
    if (is_front_page()) return 'Kính mắt và mũ bảo hiểm thể thao | SmithOptics VN';
    if (function_exists('is_shop') && is_shop()) return 'Cửa hàng Smith chính hãng | SmithOptics VN';
    $object = smith_current_seo_object();
    if ($object instanceof WP_Post) {
        $saved = get_post_meta($object->ID, '_yoast_wpseo_title', true);
        return smith_fit_runtime_seo_title(smith_vietnamese_seo_base($saved ?: $object->post_title, $object));
    }
    if ($object instanceof WP_Term) {
        $saved = get_term_meta($object->term_id, 'wpseo_title', true);
        return smith_fit_runtime_seo_title(smith_vietnamese_seo_base($saved ?: $object->name, $object));
    }
    $collection = get_query_var('smith_collection');
    if ($collection) {
        $term = get_term_by('slug', sanitize_title($collection), 'product_cat');
        $base = $term instanceof WP_Term ? smith_vietnamese_seo_base($term->name, $term) : ucwords(str_replace('-', ' ', $collection));
        return smith_fit_runtime_seo_title($base);
    }
    if (is_search()) return smith_fit_runtime_seo_title('Kết quả tìm kiếm');
    if (is_404()) return smith_fit_runtime_seo_title('Không tìm thấy trang');
    return smith_fit_runtime_seo_title($fallback ?: 'Smith Việt Nam');
}

/** Metadata dùng chung cho các route snapshot, kể cả khi Yoast không nhận query tùy chỉnh. */
function smith_current_public_canonical_url() {
    $path = (string) parse_url(isset($_SERVER['REQUEST_URI']) ? wp_unslash($_SERVER['REQUEST_URI']) : '/', PHP_URL_PATH);
    $path = '/' . ltrim($path, '/');
    return $path === '/' ? home_url('/') : home_url(user_trailingslashit($path));
}

function smith_current_public_meta_description() {
    if (is_front_page()) return 'Khám phá kính mắt, kính bảo hộ và mũ bảo hiểm Smith chính hãng dành cho thể thao, phong cách sống và hoạt động ngoài trời tại SmithOptics VN.';
    $object = smith_current_seo_object();
    if ($object instanceof WP_Post) {
        $saved = get_post_meta($object->ID, '_yoast_wpseo_metadesc', true);
        if ($saved) return wp_strip_all_tags($saved);
        if ($object->post_excerpt) return wp_trim_words(wp_strip_all_tags($object->post_excerpt), 28, '');
    }
    $title = preg_replace('/\s*\|\s*SmithOptics VN\s*$/u', '', smith_current_complete_seo_title());
    return 'Khám phá ' . mb_strtolower($title, 'UTF-8') . ' chính hãng, thông tin sản phẩm và tư vấn lựa chọn phù hợp tại SmithOptics VN.';
}

function smith_current_public_social_image() {
    $object = smith_current_seo_object();
    if ($object instanceof WP_Post) {
        $image = get_the_post_thumbnail_url($object->ID, 'full');
        if ($image) return $image;
    }
    $handle = get_query_var('smith_product');
    if ($handle && function_exists('smith_product_id_from_handle')) {
        $product_id = smith_product_id_from_handle(sanitize_title($handle));
        $image_id = $product_id ? get_post_thumbnail_id($product_id) : 0;
        $image = $image_id ? wp_get_attachment_image_url($image_id, 'full') : '';
        if ($image) return $image;
    }
    return get_template_directory_uri() . '/assets/images/favicon-1-dark_2627276f2b.png';
}

function smith_schema_website_identity($data) {
    $data['name'] = 'SmithOptics VN';
    $data['alternateName'] = array('Smith Việt Nam', 'Smith Optics Việt Nam');
    return $data;
}
add_filter('wpseo_schema_website', 'smith_schema_website_identity', 20);

function smith_database_route_title($title) {
    if (is_front_page()) return 'Kính mắt và mũ bảo hiểm thể thao | SmithOptics VN';
    $page = smith_current_database_route();
    return $page instanceof WP_Post && $page->post_title ? $page->post_title : $title;
}
add_filter('pre_get_document_title', 'smith_database_route_title', 50);

function smith_database_route_yoast_title($title) {
    return smith_current_complete_seo_title($title);
}
add_filter('wpseo_title', 'smith_database_route_yoast_title', 50);

function smith_database_route_yoast_description($description) {
    if (is_front_page()) {
        return 'Khám phá kính mắt, kính bảo hộ và mũ bảo hiểm Smith chính hãng dành cho thể thao, phong cách sống và hoạt động ngoài trời tại SmithOptics VN.';
    }
    $page = smith_current_database_route();
    if (!$page instanceof WP_Post) return $description;
    $meta_description = get_post_meta($page->ID, '_yoast_wpseo_metadesc', true);
    return $meta_description ?: $description;
}
add_filter('wpseo_metadesc', 'smith_database_route_yoast_description', 50);

/** Yoast đã in title; bỏ title-tag mặc định để trong head chỉ có một title. */
function smith_remove_duplicate_core_title() {
    if (defined('WPSEO_VERSION')) remove_action('wp_head', '_wp_render_title_tag', 1);
}
add_action('wp', 'smith_remove_duplicate_core_title', 99);

function smith_database_route_canonical($canonical) {
    $page = smith_current_database_route();
    if (!$page instanceof WP_Post) return $canonical;
    $path = get_post_meta($page->ID, '_smith_public_path', true);
    return $path ? home_url(user_trailingslashit($path)) : $canonical;
}
add_filter('wpseo_canonical', 'smith_database_route_canonical', 50);

/** Dùng URL public tiếng Việt ở mọi nơi WordPress/Yoast lấy permalink Page. */
function smith_database_page_link($url, $post_id) {
    $path = get_post_meta((int) $post_id, '_smith_public_path', true);
    return $path ? home_url(user_trailingslashit($path)) : $url;
}
add_filter('page_link', 'smith_database_page_link', 20, 2);

function smith_database_yoast_sitemap_entry($url, $object_type, $object) {
    if ($object_type !== 'post' || !$object instanceof WP_Post || $object->post_type !== 'page') return $url;
    $path = get_post_meta($object->ID, '_smith_public_path', true);
    if ($path) $url['loc'] = home_url(user_trailingslashit($path));
    return $url;
}
add_filter('wpseo_sitemap_entry', 'smith_database_yoast_sitemap_entry', 20, 3);

/** Không đưa URL tiện ích, trang mẫu và bản bài viết tiếng Anh trùng nội dung vào sitemap. */
function smith_sitemap_excluded_page_ids($ids) {
    $utility_pages = get_posts(array(
        'post_type' => 'page', 'post_status' => 'any', 'posts_per_page' => -1, 'fields' => 'ids',
        'post_name__in' => array('cart', 'checkout', 'my-account', 'sample-page'),
    ));
    $removed_routes = get_posts(array(
        'post_type' => 'page', 'post_status' => 'any', 'posts_per_page' => -1, 'fields' => 'ids',
        'meta_query' => array(array(
            'key' => '_smith_public_path',
            'value' => array('bo-suu-tap/the-thao', '/bo-suu-tap/the-thao', 'bo-suu-tap/the-thao/'),
            'compare' => 'IN',
        )),
    ));
    return array_values(array_unique(array_merge(
        (array) $ids,
        array_map('intval', $utility_pages),
        array_map('intval', $removed_routes)
    )));
}
add_filter('wpseo_exclude_from_sitemap_by_post_ids', 'smith_sitemap_excluded_page_ids');

function smith_exclude_duplicate_post_sitemap($excluded, $post_type) {
    return $post_type === 'post' ? true : $excluded;
}
add_filter('wpseo_sitemap_exclude_post_type', 'smith_exclude_duplicate_post_sitemap', 20, 2);

/** Bài viết WordPress cũ chuyển thẳng tới URL bài viết tiếng Việt tương ứng. */
function smith_redirect_legacy_post_permalink() {
    if (!is_singular('post') || is_preview()) return;
    $post = get_queried_object();
    if (!$post instanceof WP_Post) return;
    $ids = get_posts(array(
        'post_type' => 'page', 'post_status' => 'publish', 'posts_per_page' => 1, 'fields' => 'ids',
        'meta_key' => '_smith_snapshot_handle', 'meta_value' => 'article-' . $post->post_name,
        'no_found_rows' => true, 'suppress_filters' => true,
    ));
    if (!$ids) return;
    $path = get_post_meta((int) $ids[0], '_smith_public_path', true);
    if ($path) wp_safe_redirect(home_url(user_trailingslashit($path)), 301, 'SmithOptics VN');
    if ($path) exit;
}
add_action('template_redirect', 'smith_redirect_legacy_post_permalink', 5);

/** Danh mục HTML tạo liên kết nội bộ tới toàn bộ Page đã đồng bộ. */
function smith_render_site_directory() {
    $pages = get_posts(array(
        'post_type' => 'page', 'post_status' => 'publish', 'posts_per_page' => -1,
        'meta_key' => '_smith_public_path', 'orderby' => 'title', 'order' => 'ASC',
    ));
    if (!$pages) return '<p>Chưa có trang nào được đồng bộ.</p>';
    $html = '<nav class="smith-site-directory" aria-label="Danh mục toàn bộ trang"><ul>';
    foreach ($pages as $page) {
        $path = get_post_meta($page->ID, '_smith_public_path', true);
        if (!$path || $path === 'so-do-trang') continue;
        $html .= '<li><a href="' . esc_url(home_url(user_trailingslashit($path))) . '">' . esc_html($page->post_title) . '</a></li>';
    }
    return $html . '</ul></nav>';
}
add_shortcode('smith_so_do_trang', 'smith_render_site_directory');
