<?php
/**
 * Smith Optics Official Theme Functions & Bulletproof Vietnamese Dual Router
 *
 * @package Smith_Optics
 */

if (!defined('ABSPATH')) {
    exit;
}

define('SMITH_THEME_VERSION', '2.20.46');
define('SMITH_CONTACT_EMAIL', 'contact@smithoptics.vn');

/** Let Yoast build product sitemaps without hydrating hundreds of product images. */
function smith_optimize_yoast_product_sitemap_images($include_images) {
    $path = (string) parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH);
    return preg_match('#^/product-sitemap(?:[0-9]+)?\.xml$#', $path) ? false : $include_images;
}
add_filter('wpseo_xml_sitemap_include_images', 'smith_optimize_yoast_product_sitemap_images', 5);

/**
 * Keep Yoast sitemap pagination consistent between the index and child requests.
 * A 100-entry cap prevents the large product catalogue exhausting production limits.
 */
function smith_limit_yoast_product_sitemap_entries($entries) {
    return min(100, max(1, (int) $entries));
}
add_filter('wpseo_sitemap_entries_per_page', 'smith_limit_yoast_product_sitemap_entries', 10);

/** Return the single public handle used by every WooCommerce product URL. */
function smith_product_public_handle($product) {
    $post = $product instanceof WP_Post ? $product : get_post((int) $product);
    if (!$post instanceof WP_Post || $post->post_type !== 'product') return '';

    $handle = sanitize_title((string) get_post_meta($post->ID, '_smith_handle', true));
    return $handle ?: sanitize_title((string) $post->post_name);
}

/** Publish one consistent /san-pham/ URL for every product in Yoast. */
function smith_yoast_product_sitemap_url($url, $post) {
    if (!$post instanceof WP_Post || $post->post_type !== 'product') return $url;
    $handle = smith_product_public_handle($post);
    return $handle ? home_url('/san-pham/' . rawurlencode($handle) . '/') : $url;
}
add_filter('wpseo_xml_sitemap_post_url', 'smith_yoast_product_sitemap_url', 30, 2);

/** Normalize the captured Shopify-style /products/ alias before custom routing. */
function smith_redirect_plural_product_alias() {
    if (is_admin()) return;
    $path = (string) parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH);
    if (!preg_match('#^/products/([^/]+)/?$#i', $path, $match)) return;

    $handle = sanitize_title(rawurldecode($match[1]));
    if (!$handle) return;
    $target = home_url('/san-pham/' . rawurlencode($handle) . '/');
    $variant = isset($_GET['variant']) ? preg_replace('/[^0-9]/', '', wp_unslash($_GET['variant'])) : '';
    if ($variant !== '') $target = add_query_arg('variant', $variant, $target);
    wp_safe_redirect($target, 301, 'SmithOptics VN');
    exit;
}
add_action('parse_request', 'smith_redirect_plural_product_alias', -200);

/** Redirect legacy /product/ and /products/ routes to the canonical public URL. */
function smith_redirect_legacy_product_url() {
    if (is_admin() || is_preview()) return;

    $path = (string) parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH);
    $handle = '';
    if (preg_match('#^/products/([^/]+)/?$#i', $path, $match)) {
        $handle = sanitize_title(rawurldecode($match[1]));
    } elseif (is_singular('product')) {
        $handle = smith_product_public_handle(get_queried_object());
    }
    if (!$handle) return;

    $target = home_url('/san-pham/' . rawurlencode($handle) . '/');
    $variant = isset($_GET['variant']) ? preg_replace('/[^0-9]/', '', wp_unslash($_GET['variant'])) : '';
    if ($variant !== '') $target = add_query_arg('variant', $variant, $target);
    wp_safe_redirect($target, 301, 'SmithOptics VN');
    exit;
}
add_action('template_redirect', 'smith_redirect_legacy_product_url', -20);

/** Return a real 404 for the removed synthetic sports collection landing page. */
function smith_404_removed_sports_collection() {
    if (is_admin() || wp_doing_ajax()) return;

    $path = trim((string) parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH), '/');
    if ($path !== 'bo-suu-tap/the-thao') return;

    global $wp_query;
    if ($wp_query) $wp_query->set_404();
    status_header(404);
    nocache_headers();

    $template = get_404_template();
    if ($template) include $template;
    exit;
}
add_action('template_redirect', 'smith_404_removed_sports_collection', -15);

/** Phục vụ các icon snapshot còn dùng đường dẫn tuyệt đối /assets/images/. */
function smith_serve_legacy_root_image_asset() {
    $path = (string) parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH);
    if (!preg_match('#^/assets/images/([A-Za-z0-9._-]+)$#', $path, $match)) return;
    $asset_root = realpath(get_template_directory() . '/assets/images');
    $file = realpath(get_template_directory() . '/assets/images/' . $match[1]);
    if (!$file && $asset_root) {
        $extension = pathinfo($match[1], PATHINFO_EXTENSION);
        $stem = pathinfo($match[1], PATHINFO_FILENAME);
        $candidates = glob($asset_root . DIRECTORY_SEPARATOR . $stem . '*.' . $extension);
        if (count($candidates) === 1) $file = realpath($candidates[0]);
    }
    if (!$asset_root || !$file || strpos($file, $asset_root . DIRECTORY_SEPARATOR) !== 0 || !is_file($file)) return;
    $types = array('svg' => 'image/svg+xml', 'png' => 'image/png', 'jpg' => 'image/jpeg', 'jpeg' => 'image/jpeg', 'webp' => 'image/webp', 'gif' => 'image/gif');
    $extension = strtolower(pathinfo($file, PATHINFO_EXTENSION));
    if (!isset($types[$extension])) return;
    status_header(200);
    header('Content-Type: ' . $types[$extension]);
    header('Cache-Control: public, max-age=31536000, immutable');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
}
add_action('template_redirect', 'smith_serve_legacy_root_image_asset', 0);

/**
 * Snapshot giữ một số tích hợp Shopify để bộ lọc/video tiếp tục hoạt động.
 * Hai thư viện này phát cảnh báo đỏ dù giao diện đã có fallback local; chỉ bỏ
 * đúng hai thông báo đã biết, mọi lỗi khác vẫn được giữ nguyên trong F12.
 */
function smith_silence_known_snapshot_console_noise() {
    echo '<style id="smith-critical-hide-prices">.smith-product-source-snapshot .price-item,.smith-unified-pdp .price-item,.smith-source-snapshot .price-item{display:none!important}</style>' . "\n";
    echo '<script>(function(){var originalError=console.error.bind(console);console.error=function(){if(arguments[0]==="No template found in VideoSection")return;return originalError.apply(console,arguments)}})();</script>' . "\n";
}
add_action('wp_head', 'smith_silence_known_snapshot_console_noise', 0);

/** Chuẩn hóa heading trong main bằng thao tác chuỗi giới hạn, an toàn với snapshot rất lớn. */
function smith_normalize_main_headings($html) {
    $main_start = stripos($html, '<main');
    if ($main_start === false) return $html;
    $main_open_end = strpos($html, '>', $main_start);
    $main_end = stripos($html, '</main>', $main_open_end ?: $main_start);
    if ($main_open_end === false || $main_end === false) return $html;
    $main = substr($html, $main_open_end + 1, $main_end - $main_open_end - 1);
    preg_match_all('/<h1\b[^>]*>/i', $main, $h1_matches);
    $h1_count = count($h1_matches[0]);
    if ($h1_count === 0) {
        $h2_start = false;
        if (is_front_page()) {
            // Tiêu đề nội dung đầu tiên thực sự nhìn thấy trên trang chủ. Bỏ qua
            // heading trong giỏ hàng/template và thanh khuyến mại ở phía trên.
            $hero_text = stripos($main, 'Bộ sưu tập thịnh hành');
            if ($hero_text !== false) $h2_start = strripos(substr($main, 0, $hero_text), '<h2');
        }
        if ($h2_start === false) $h2_start = stripos($main, '<h2');
        if ($h2_start !== false) {
            $h2_open_end = strpos($main, '>', $h2_start);
            $h2_close = $h2_open_end === false ? false : stripos($main, '</h2>', $h2_open_end);
            if ($h2_open_end !== false && $h2_close !== false) {
                $main = substr_replace($main, 'h1', $h2_close + 2, 2);
                $main = substr_replace($main, 'h1', $h2_start + 1, 2);
            }
        }
    } elseif ($h1_count > 1 && is_category()) {
        $opening = 0;
        $closing = 0;
        $main = preg_replace_callback('/<h1\b([^>]*)>/i', static function ($m) use (&$opening) {
            $opening++;
            return $opening === 1 ? $m[0] : '<h2' . $m[1] . '>';
        }, $main);
        $main = preg_replace_callback('/<\/h1>/i', static function ($m) use (&$closing) {
            $closing++;
            return $closing === 1 ? $m[0] : '</h2>';
        }, $main);
    }
    return substr_replace($html, $main, $main_open_end + 1, $main_end - $main_open_end - 1);
}

/** Sửa ba snapshot đặc biệt không có cấu trúc heading chuẩn trong vùng main. */
function smith_normalize_special_page_headings($html) {
    $path = '/' . ltrim((string) parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH), '/');
    if ($path === '/trang/thong-tin-chuong-trinh-smith-pro/') {
        // Heading thứ hai thuộc khối trợ giúp được nhúng, không phải tiêu đề trang.
        return preg_replace(
            '#<h1([^>]*)>(\s*Trung tâm Trợ giúp Smith Optics\s*)</h1>#iu',
            '<h2$1>$2</h2>',
            $html,
            1
        );
    }
    $titles = array(
        '/trang/theo-doi-don-hang/' => 'Theo dõi đơn hàng',
        '/trang/trung-tam-ho-tro/' => 'Trung tâm hỗ trợ',
    );
    if (!isset($titles[$path]) || preg_match('/<h1\b/i', $html)) return $html;
    $heading = '<h1 class="smith-page-title">' . esc_html($titles[$path]) . '</h1>';
    if ($path === '/trang/trung-tam-ho-tro/' && stripos($html, '<div id="smith-hc-main-container">') !== false) {
        return preg_replace('#(<div\s+id="smith-hc-main-container"[^>]*>)#i', $heading . '$1', $html, 1);
    }
    return preg_replace('#(<main\b[^>]*>)#i', '$1' . $heading, $html, 1);
}

/**
 * Replace legacy email addresses before public HTML reaches the browser.
 */
function smith_replace_public_email_addresses($html) {
    if (!is_string($html) || $html === '') return $html;
    $html = preg_replace(
        '/[A-Z0-9._%+\-]+@[A-Z0-9.\-]+\.[A-Z]{2,}/i',
        SMITH_CONTACT_EMAIL,
        $html
    );

    // Fix three legacy snapshot fragments that retained the English word "To".
    // Only text is changed; the existing markup and styling stay intact.
    $html = str_replace(
        array(
            '>To <a href="https://www.smithoptics.com/blogs/blog/how-to-measure-yourself-for-a-bike-helmet">Hãy đo đầu bạn để lấy mũ bảo hiểm</a>bọc một băng đo',
            '>To <a href="https://www.smithoptics.com/blogs/blog/how-to-measure-yourself-for-a-bike-helmet">tìm kích cỡ mũ bảo hiểm của bạn</a>đo chu vi đầu của bạn',
            '>To <a href="https://www.smithoptics.com/blogs/blog/how-to-measure-yourself-for-a-ski-snowboard-helmet">Hãy đo mình bằng mũ bảo hiểm tuyết.</a>Lấy một thước băng mềm',
        ),
        array(
            '>Để <a href="https://www.smithoptics.com/blogs/blog/how-to-measure-yourself-for-a-bike-helmet">đo đầu và chọn đúng kích cỡ mũ bảo hiểm</a>, hãy quấn thước dây',
            '>Để <a href="https://www.smithoptics.com/blogs/blog/how-to-measure-yourself-for-a-bike-helmet">tìm kích cỡ mũ bảo hiểm phù hợp</a>, hãy đo chu vi đầu của bạn',
            '>Để <a href="https://www.smithoptics.com/blogs/blog/how-to-measure-yourself-for-a-ski-snowboard-helmet">đo đầu và chọn đúng kích cỡ mũ bảo hiểm tuyết</a>, hãy lấy một thước dây mềm',
        ),
        $html
    );

    // Chuỗi tiếng Anh còn sót trong phần chân trang của snapshot.
    $html = str_replace('Withdrawal form', 'Biểu mẫu rút yêu cầu', $html);

    // Product snapshots are server-rendered with English option values. Translate
    // only the visible selected color before sending HTML to the browser, while
    // preserving radio values used by Shopify's variant matching logic.
    $html = preg_replace_callback(
        '#(<fieldset\b[^>]*class=["\'][^"\']*product-form__input--swatch[^"\']*["\'][^>]*>.*?<span\b[^>]*class=["\'][^"\']*product-form__input--swatch-value[^"\']*["\'][^>]*>)(.*?)(</span>)#is',
        static function ($match) {
            $value = trim(html_entity_decode(strip_tags($match[2]), ENT_QUOTES | ENT_HTML5, 'UTF-8'));
            if (strcasecmp($value, 'Black / Cement Stripe') === 0) {
                $translated = 'Đen / Sọc màu xi măng';
            } else {
                $translated = function_exists('smith_translate_product_display_name')
                    ? smith_translate_product_display_name($value)
                    : $value;
            }
            return $match[1] . "\n" . esc_html($translated) . "\n" . $match[3];
        },
        $html
    );

    // Snapshot cũ và WordPress/Yoast có thể cùng in thẻ SEO. Trong <head>,
    // giữ bản đầu tiên (bản đã tối ưu) để bot chỉ đọc một tín hiệu duy nhất.
    $html = preg_replace_callback('#<head\b[^>]*>.*?</head>#is', static function ($match) {
        $head = $match[0];
        if (function_exists('smith_current_complete_seo_title')) {
            $complete_title = smith_current_complete_seo_title('Smith Việt Nam');
            if (preg_match('#<title\b[^>]*>.*?</title>#is', $head)) {
                $head = preg_replace('#<title\b[^>]*>.*?</title>#is', '<title>' . esc_html($complete_title) . '</title>', $head, 1);
            } else {
                $head = preg_replace('#</head>#i', '<title>' . esc_html($complete_title) . '</title></head>', $head, 1);
            }
        }
        $patterns = array(
            '#<title\b[^>]*>.*?</title>#is',
            '#<meta\b(?=[^>]*\bname=["\']description["\'])[^>]*>#is',
            '#<link\b(?=[^>]*\brel=["\']canonical["\'])[^>]*>#is',
        );
        foreach ($patterns as $pattern) {
            $seen = false;
            $head = preg_replace_callback($pattern, static function ($tag) use (&$seen) {
                if (!$seen) { $seen = true; return $tag[0]; }
                return '';
            }, $head);
        }
        if (function_exists('smith_current_public_canonical_url')) {
            $title = smith_current_complete_seo_title('Smith Việt Nam');
            $description = smith_current_public_meta_description();
            $canonical = smith_current_public_canonical_url();
            $image = smith_current_public_social_image();
            $og_type = preg_match('#^/(?:san-pham|products?)/#i', (string) parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH)) ? 'product' : 'website';
            $head = preg_replace('#<meta\b(?=[^>]*(?:name|property)=["\'](?:description|og:[^"\']+|twitter:[^"\']+)["\'])[^>]*>#is', '', $head);
            $head = preg_replace('#<link\b(?=[^>]*rel=["\']canonical["\'])[^>]*>#is', '', $head);
            $meta = '<meta name="description" content="' . esc_attr($description) . '">' . "\n"
                . '<link rel="canonical" href="' . esc_url($canonical) . '">' . "\n"
                . '<meta property="og:locale" content="vi_VN"><meta property="og:type" content="' . esc_attr($og_type) . '">' . "\n"
                . '<meta property="og:title" content="' . esc_attr($title) . '"><meta property="og:description" content="' . esc_attr($description) . '">' . "\n"
                . '<meta property="og:url" content="' . esc_url($canonical) . '"><meta property="og:site_name" content="SmithOptics VN">' . "\n"
                . '<meta property="og:image" content="' . esc_url($image) . '"><meta property="og:image:alt" content="' . esc_attr($title) . '">' . "\n"
                . '<meta name="twitter:card" content="summary_large_image"><meta name="twitter:title" content="' . esc_attr($title) . '"><meta name="twitter:description" content="' . esc_attr($description) . '"><meta name="twitter:image" content="' . esc_url($image) . '">' . "\n";
            $head = preg_replace('#</head>#i', $meta . '</head>', $head, 1);
        }
        return $head;
    }, $html);

    // Logo là nhận diện giao diện, không phải heading nội dung.
    $html = preg_replace('#<h1([^>]*class="[^"]*header__heading[^"]*"[^>]*)>(.*?)</h1>#is', '<div$1>$2</div>', $html, 1);
    $html = smith_normalize_main_headings($html);
    $html = smith_normalize_special_page_headings($html);

    // Remove two captured US schema blocks. Local structured data is emitted below.
    $html = preg_replace_callback('#<script\b[^>]*type=["\']application/ld\+json["\'][^>]*>.*?</script>#is', static function ($match) {
        return stripos($match[0], 'www.smithoptics.com') !== false ? '' : $match[0];
    }, $html);

    // Không để liên kết điều hướng quay về website Smith/Shopify gốc. Chỉ
    // thay thuộc tính URL, không đụng tới src ảnh, video hoặc CDN tài nguyên.
    $html = preg_replace_callback('#<(a|form)\b[^>]*>#i', static function ($tag_match) {
        $attribute = strtolower($tag_match[1]) === 'a' ? 'href' : 'action';
        return preg_replace_callback(
            '#\b(' . $attribute . ')=([' . "\"'" . '])((?:https?:)?//(?:(?:[a-z0-9-]+\.)?smithoptics\.com|v8pti0-6j\.myshopify\.com)(?:/[^' . "\"'" . '\s>]*)?)\2#i',
            static function ($url_match) {
                $local = function_exists('smith_localize_original_url')
                    ? smith_localize_original_url($url_match[3])
                    : home_url('/');
                return $url_match[1] . '=' . $url_match[2] . esc_url($local) . $url_match[2];
            },
            $tag_match[0]
        );
    }, $html);

    // Snapshot chứa hàng chục đến hàng trăm ảnh ở dưới màn hình. Dùng cơ chế
    // native của trình duyệt để không tải đồng loạt, không đổi src/kích thước.
    // Giữ nguyên cơ chế tải ảnh gốc của snapshot; can thiệp loading toàn cục
    // làm ảnh chính trong lưới sản phẩm không được kích hoạt đúng lúc.
    return $html;

    $html = preg_replace_callback('#<img\b[^>]*>#i', static function ($match) {
        $tag = $match[0];
        // Dùng thẳng Shopify CDN để tránh một lượt chuyển hướng qua website gốc.
        $tag = preg_replace(
            '#(?:https?:)?//(?:www\.)?smithoptics\.com/cdn/shop/files/#i',
            'https://cdn.shopify.com/s/files/1/0751/8073/6750/files/',
            $tag
        );
        if (!preg_match('/\bloading\s*=/i', $tag)) $tag = preg_replace('/<img\b/i', '<img loading="lazy"', $tag, 1);
        if (!preg_match('/\bdecoding\s*=/i', $tag)) $tag = preg_replace('/<img\b/i', '<img decoding="async"', $tag, 1);
        return $tag;
    }, $html);

    // Ảnh đại diện PDP là LCP: tải ngay thay vì vừa ưu tiên cao vừa lazy.
    // Chỉ giới hạn trong từng khối featured để không làm các slide còn lại tải sớm.
    $featured_offset = 0;
    while (($featured_offset = stripos($html, 'product__media-item--desktop-featured', $featured_offset)) !== false) {
        $img_start = stripos($html, '<img', $featured_offset);
        if ($img_start === false || $img_start - $featured_offset > 5000) {
            $featured_offset += 40;
            continue;
        }
        $img_end = strpos($html, '>', $img_start);
        if ($img_end === false) break;
        $tag = substr($html, $img_start, $img_end - $img_start + 1);
        $tag = preg_replace('/\bloading\s*=\s*(["\'])lazy\1/i', 'loading="eager"', $tag);
        if (!preg_match('/\bfetchpriority\s*=/i', $tag)) {
            $tag = preg_replace('/<img\b/i', '<img fetchpriority="high"', $tag, 1);
        }
        $html = substr_replace($html, $tag, $img_start, $img_end - $img_start + 1);
        $featured_offset = $img_start + strlen($tag);
    }
    $html = preg_replace_callback('#<iframe\b[^>]*>#i', static function ($match) {
        return preg_match('/\bloading\s*=/i', $match[0])
            ? $match[0]
            : preg_replace('/<iframe\b/i', '<iframe loading="lazy"', $match[0], 1);
    }, $html);
    return $html;
}

/** Chuyển đường dẫn website gốc sang route nội bộ tiếng Việt. */
function smith_localize_original_url($url) {
    $parts = wp_parse_url(html_entity_decode((string) $url, ENT_QUOTES | ENT_HTML5, 'UTF-8'));
    $path = isset($parts['path']) ? rawurldecode($parts['path']) : '/';
    $path = preg_replace('#^/(?:en-us|en-ca|en-eu)(?=/|$)#i', '', $path);
    $path = '/' . ltrim($path, '/');
    $host = isset($parts['host']) ? strtolower($parts['host']) : '';
    if (strpos($host, 'support.smithoptics.com') !== false) {
        return home_url('/trang/ho-tro/');
    }

    if (preg_match('#^/products?/([^/?]+)#i', $path, $m)) {
        return home_url('/san-pham/' . sanitize_title($m[1]) . '/');
    }
    if (preg_match('#^/collections?/([^/?]+)#i', $path, $m)) {
        return home_url('/bo-suu-tap/' . sanitize_title($m[1]) . '/');
    }
    if (preg_match('#^/pages?/technologies/([^/?]+)#i', $path, $m)) {
        return home_url('/trang/cong-nghe/' . sanitize_title($m[1]) . '/');
    }
    if (preg_match('#^/pages?/athletes/([^/?]+)#i', $path, $m)) {
        return home_url('/trang/van-dong-vien/' . sanitize_title($m[1]) . '/');
    }
    if (preg_match('#^/pages?/([^/?]+)#i', $path, $m)) {
        return home_url('/trang/' . sanitize_title($m[1]) . '/');
    }
    if (preg_match('#^/(?:blogs?/[^/]+|b)/([^/?]+)#i', $path, $m)) {
        return home_url('/bai-viet/' . sanitize_title($m[1]) . '/');
    }
    if (preg_match('#^/p/[^/]+/([^/]+)/[^/]+\.html$#i', $path, $m)) {
        $handle = preg_replace('/-(?:performance|lifestyle|sport|snow|bike|ski)?-?(?:sun)?glasses$|-(?:snow-)?goggles$|-(?:bike|snow)?-?helmets$/i', '', $m[1]);
        return home_url('/san-pham/' . sanitize_title($handle) . '/');
    }
    if (preg_match('#^/(?:cart|checkout|search)(?:/|$)#i', $path)) {
        return home_url($path);
    }
    return home_url('/');
}

function smith_start_public_email_buffer() {
    static $started = false;
    if ($started) return;
    if (is_admin() || wp_doing_ajax() || wp_doing_cron()) return;
    $started = true;
    ob_start('smith_replace_public_email_addresses');
}
add_action('parse_request', 'smith_start_public_email_buffer', -100);
add_action('template_redirect', 'smith_start_public_email_buffer', -100);

function smith_output_local_business_schema() {
    if (!is_front_page()) return;
    $home = home_url('/');
    $schema = array(
        '@context' => 'https://schema.org', '@type' => 'OnlineStore', '@id' => $home . '#organization',
        'name' => 'SmithOptics VN', 'url' => $home,
        'logo' => array('@type' => 'ImageObject', 'url' => get_template_directory_uri() . '/assets/images/favicon-1-dark_2627276f2b.png'),
        'description' => 'Đơn vị cung cấp kính mắt, kính bảo hộ và mũ bảo hiểm Smith tại Việt Nam.',
        'telephone' => '+84917834532', 'email' => SMITH_CONTACT_EMAIL,
        'areaServed' => array('@type' => 'Country', 'name' => 'Việt Nam'),
        'contactPoint' => array('@type' => 'ContactPoint', 'contactType' => 'customer service', 'telephone' => '+84917834532', 'email' => SMITH_CONTACT_EMAIL, 'availableLanguage' => array('vi')),
        'address' => array(
            array('@type' => 'PostalAddress', 'streetAddress' => '226 Đường Láng, Phường Thịnh Quang, Quận Đống Đa', 'addressLocality' => 'Hà Nội', 'addressCountry' => 'VN'),
            array('@type' => 'PostalAddress', 'streetAddress' => '137 Hòa Hưng, Phường Hòa Hưng', 'addressLocality' => 'TP. Hồ Chí Minh', 'addressCountry' => 'VN'),
        ),
    );
    echo '<script type="application/ld+json">' . wp_json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . '</script>' . "\n";
}
add_action('wp_head', 'smith_output_local_business_schema', 30);

function smith_output_site_identity_assets() {
    $theme = get_template_directory_uri();
    echo '<link rel="icon" href="' . esc_url($theme . '/assets/images/favicon-smith-vn.svg') . '" type="image/svg+xml">' . "\n";
    echo '<link rel="icon" href="' . esc_url($theme . '/assets/images/favicon-1-dark_2627276f2b.png') . '" type="image/png">' . "\n";
    echo '<link rel="apple-touch-icon" href="' . esc_url($theme . '/assets/images/favicon-1-dark_2627276f2b.png') . '">' . "\n";
    echo '<link rel="manifest" href="' . esc_url(get_template_directory_uri() . '/site.webmanifest') . '">' . "\n";
    echo '<meta name="theme-color" content="#111111">' . "\n";
}
add_action('wp_head', 'smith_output_site_identity_assets', 31);

function smith_output_route_schema() {
    $route = function_exists('smith_current_database_route') ? smith_current_database_route() : null;
    $product_handle = get_query_var('smith_product');
    if (!$route instanceof WP_Post && !$product_handle) return;
    $canonical = smith_current_public_canonical_url();
    $title = preg_replace('/\s*\|\s*SmithOptics VN\s*$/u', '', smith_current_complete_seo_title());
    $graph = array(array(
        '@type' => 'BreadcrumbList', '@id' => $canonical . '#breadcrumb',
        'itemListElement' => array(
            array('@type' => 'ListItem', 'position' => 1, 'name' => 'Trang chủ', 'item' => home_url('/')),
            array('@type' => 'ListItem', 'position' => 2, 'name' => $title, 'item' => $canonical),
        ),
    ));
    if ($product_handle) {
        $product_id = smith_product_id_from_handle(sanitize_title($product_handle));
        $product = $product_id && function_exists('wc_get_product') ? wc_get_product($product_id) : null;
        $node = array(
            '@type' => 'Product', '@id' => $canonical . '#product', 'url' => $canonical,
            'name' => $product ? $product->get_name() : $title,
            'description' => smith_current_public_meta_description(),
            'image' => array(smith_current_public_social_image()),
            'brand' => array('@type' => 'Brand', 'name' => 'Smith Optics'),
            'seller' => array('@id' => home_url('/') . '#organization'),
        );
        if ($product && $product->get_sku()) $node['sku'] = $product->get_sku();
        $graph[] = $node;
    } else {
        $graph[] = array('@type' => 'CollectionPage', '@id' => $canonical . '#webpage', 'url' => $canonical, 'name' => $title, 'description' => smith_current_public_meta_description(), 'breadcrumb' => array('@id' => $canonical . '#breadcrumb'), 'inLanguage' => 'vi');
    }
    echo '<script type="application/ld+json">' . wp_json_encode(array('@context' => 'https://schema.org', '@graph' => $graph), JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . '</script>' . "\n";
}
add_action('wp_head', 'smith_output_route_schema', 32);

function smith_custom_robots_txt($output, $public) {
    if (!$public) return "User-agent: *\nDisallow: /\n";
    $private = "Disallow: /wp-admin/\nAllow: /wp-admin/admin-ajax.php\nDisallow: /wp-content/uploads/wc-logs/\nDisallow: /wp-content/uploads/woocommerce_transient_files/\nDisallow: /wp-content/uploads/woocommerce_uploads/\nDisallow: /cart/\nDisallow: /checkout/\nDisallow: /my-account/\nDisallow: /search/\nDisallow: /*?s=\nDisallow: /*?add-to-cart=\nDisallow: /*?*add-to-cart=\n";
    return "User-agent: *\nAllow: /\n" . $private . "\nUser-agent: OAI-SearchBot\nAllow: /\n" . $private
        . "\nSitemap: " . home_url('/sitemap_index.xml') . "\n";
}
add_filter('robots_txt', 'smith_custom_robots_txt', PHP_INT_MAX, 2);

// Product prices remain available to WooCommerce for cart/checkout calculations,
// but this storefront intentionally does not expose them in any customer-facing UI.
add_filter('woocommerce_get_price_html', '__return_empty_string', 9999);
add_filter('woocommerce_cart_item_price', '__return_empty_string', 9999);
add_filter('woocommerce_cart_item_subtotal', '__return_empty_string', 9999);
add_filter('woocommerce_cart_subtotal', '__return_empty_string', 9999);
add_filter('woocommerce_cart_totals_order_total_html', '__return_empty_string', 9999);
add_filter('woocommerce_get_formatted_order_total', '__return_empty_string', 9999);
define('SMITH_THEME_DIR', get_template_directory());
define('SMITH_THEME_URI', get_template_directory_uri());
require_once SMITH_THEME_DIR . '/inc/seo-database-pages.php';

/**
 * Remove Shopify-only analytics embeds from the cloned storefront markup.
 */
function smith_strip_remote_tracking($html) {
    if (!is_string($html) || $html === '') return $html;

    $keywords = array(
        'snippets-script',
        'elevar',
        'wpmLoader',
        'init-shop-cart-sync',
        'ShopifyPay',
        'dynamic_checkout',
        'captcha-bootstrap',
        'easyredirects',
        'shopify-perf-kit',
        'preloads_d4673e0e13',
        'esc-redirect',
        'collection_page_discount',
        'load_81c01befab',
        'mini-cart_99bfb614e8',
        'regios_discounts_embed',
        'Shopify.loadFeatures',
        'getGeoIPServiceKlaviyo',
        'gladly.com',
        'monorail-edge',
        'produce_batch',
        'shop_events_listener',
        'shopify:webmcp_adapter_loaded',
        'bc-widget-integration.js',
        'widget.reviews.io/modern-widgets/ugc.js',
        'checkouts/internal/preloads.js'
    );

    $cleaned = preg_replace_callback('#<script\b[^>]*>.*?</script>#is', function($matches) use ($keywords) {
        $block = $matches[0];
        foreach ($keywords as $kw) {
            if (stripos($block, $kw) !== false) {
                return '';
            }
        }
        return $block;
    }, $html);

    if ($cleaned !== null) {
        $html = $cleaned;
    }

    $cleaned_links = preg_replace_callback('#<link\b[^>]*>#is', function($matches) {
        $tag = $matches[0];
        if (stripos($tag, 'shop.app') !== false || stripos($tag, 'app_0105740136.css') !== false || stripos($tag, 'app_662d050e9e.css') !== false || stripos($tag, 'monorail-edge') !== false) {
            return '';
        }
        return $tag;
    }, $html);

    if ($cleaned_links !== null) {
        $html = $cleaned_links;
    }

    // Keep the Riptide XL merchandising banner inside the local storefront.
    $html = str_replace(
        array(
            'href="https://www.smithoptics.com/en-us/products/riptide-xl"',
            "href='https://www.smithoptics.com/en-us/products/riptide-xl'"
        ),
        array(
            'href="/san-pham/riptide-xl"',
            "href='/san-pham/riptide-xl'"
        ),
        $html
    );

    $request_path = parse_url(isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '', PHP_URL_PATH);
    if (false && preg_match('#^/(?:products|san-pham)/#i', (string) $request_path)
        && strpos($html, 'smith-product-reviews-placeholder') === false
        && stripos($html, '<reviewsio-product-reviews-widget') !== false) {
        $reviews_placeholder = '<section class="smith-product-reviews-placeholder" aria-label="Đánh giá sản phẩm">'
            . '<p>- Chưa có đánh giá nào cho sản phẩm này -</p>'
            . '<button type="button">HÃY LÀ NGƯỜI ĐẦU TIÊN GỬI ĐÁNH GIÁ</button>'
            . '</section>';
        $html = preg_replace(
            '#<reviewsio-product-reviews-widget\b#i',
            $reviews_placeholder . '<reviewsio-product-reviews-widget',
            $html,
            1
        );
    }

    if (preg_match('#^/(?:products|san-pham)/([^/]+)#i', (string) $request_path, $product_match)) {
        $product_id = smith_product_id_from_handle(sanitize_title($product_match[1]));
        if ($product_id && function_exists('smith_render_product_reviews')) {
            $html = preg_replace(
                '#<reviewsio-product-ratings\b[^>]*>.*?</reviewsio-product-ratings>#is',
                smith_render_review_summary(smith_review_stats($product_id), true),
                $html
            );
            $html = preg_replace('#<section class="smith-product-reviews-placeholder".*?</section>#is', '', $html, 1);
            $reviews = smith_render_product_reviews($product_id);
            if (stripos($html, '<reviewsio-product-reviews-widget') !== false) {
                $html = preg_replace(
                    '#<reviewsio-product-reviews-widget\b[^>]*>.*?</reviewsio-product-reviews-widget>#is',
                    $reviews,
                    $html,
                    1
                );
            }
            if (strpos($html, 'smith-product-reviews') === false
                && strpos($html, 'smith-reviews-cta-section') !== false) {
                $html = preg_replace(
                    '#<section\b[^>]*class="[^"]*smith-reviews-cta-section[^"]*"[^>]*>.*?</section>#is',
                    $reviews,
                    $html,
                    1
                );
            }
            if (strpos($html, 'smith-product-reviews') === false) {
                $html = preg_replace('#</main>#i', $reviews . '</main>', $html, 1);
            }
        }
    }

    return $html;
}

function smith_start_clean_output() {
    if (!is_admin() && !wp_doing_ajax()) ob_start('smith_strip_remote_tracking');
}
add_action('init', 'smith_start_clean_output', -999);

function smith_product_id_from_handle($handle) {
    global $wpdb;
    $clean_handle = sanitize_title($handle);
    if (!$clean_handle) return 0;

    $id = (int) $wpdb->get_var($wpdb->prepare(
        "SELECT pm.post_id FROM {$wpdb->postmeta} pm INNER JOIN {$wpdb->posts} p ON p.ID=pm.post_id WHERE pm.meta_key='_smith_handle' AND pm.meta_value=%s AND p.post_type='product' LIMIT 1",
        $clean_handle
    ));
    if (!$id) {
        $id = (int) $wpdb->get_var($wpdb->prepare(
            "SELECT ID FROM {$wpdb->posts} WHERE post_name=%s AND post_type='product' LIMIT 1",
            $clean_handle
        ));
    }
    if (!$id) {
        $id = (int) $wpdb->get_var($wpdb->prepare(
            "SELECT pm.post_id FROM {$wpdb->postmeta} pm INNER JOIN {$wpdb->posts} p ON p.ID=pm.post_id WHERE pm.meta_key='_smith_handle' AND pm.meta_value LIKE %s AND p.post_type='product' LIMIT 1",
            '%' . $wpdb->esc_like($clean_handle) . '%'
        ));
    }
    return $id;
}

function smith_resolve_quick_order_item($handle, $source_variant_id = '') {
    $product_id = smith_product_id_from_handle($handle);
    global $wpdb;

    if (!$product_id && $source_variant_id) {
        $found_parent = (int) $wpdb->get_var($wpdb->prepare(
            "SELECT p.post_parent FROM {$wpdb->postmeta} pm INNER JOIN {$wpdb->posts} p ON p.ID=pm.post_id WHERE pm.meta_key='_smith_shopify_variant_id' AND pm.meta_value=%s AND p.post_type='product_variation' LIMIT 1",
            $source_variant_id
        ));
        if ($found_parent) $product_id = $found_parent;
    }

    if (!$product_id) return false;
    $item_id = $product_id;
    $variation_id = 0;

    if ($source_variant_id) {
        $found_v_id = (int) $wpdb->get_var($wpdb->prepare(
            "SELECT pm.post_id FROM {$wpdb->postmeta} pm INNER JOIN {$wpdb->posts} p ON p.ID=pm.post_id WHERE pm.meta_key='_smith_shopify_variant_id' AND pm.meta_value=%s AND p.post_type='product_variation' LIMIT 1",
            $source_variant_id
        ));
        if ($found_v_id) {
            $item_id = $found_v_id;
            $variation_id = $found_v_id;
        }
    }

    $item = wc_get_product($item_id);
    return $item ? array('parent_id' => $product_id, 'item_id' => $item_id, 'variation_id' => $variation_id, 'item' => $item) : false;
}

function smith_translate_product_display_name($name) {
    $colors = [
        'Matte Black' => 'Đen nhám',
        'Matte White' => 'Trắng nhám',
        'Matte Charcoal' => 'Than chì nhám',
        'Matte Slate' => 'Xám đá nhám',
        'Matte Gravy' => 'Xám Matte Gravy',
        'Matte Tortoise' => 'Đồi mồi nhám',
        'Tortoise' => 'Đồi mồi',
        'Matte' => 'Nhám',
        'Grey' => 'Xám',
        'Gray' => 'Xám',
        'Black' => 'Đen',
        'White' => 'Trắng',
        'Red' => 'Đỏ',
        'Blue' => 'Xanh dương',
        'Green' => 'Xanh lá',
        'Yellow' => 'Vàng',
        'Orange' => 'Cam',
        'Purple' => 'Tím',
        'Pink' => 'Hồng',
        'Brown' => 'Nâu',
        'Clear' => 'Trong suốt',
        'Silver' => 'Bạc',
        'Gold' => 'Vàng gold',
        'Bronze Mirror' => 'Gương đồng',
        'Blue Mirror' => 'Gương xanh dương',
        'Green Mirror' => 'Gương xanh lá',
        'Red Mirror' => 'Gương đỏ',
        'Rose Gold Mirror' => 'Gương vàng hồng',
        'Polarized' => 'Phân cực (Polarized)',
        'Photochromic' => 'Đổi màu (Photochromic)',
        'Clear to Grey' => 'Trong suốt sang Xám',
        'Opal' => 'Ngọc thạch Opal',
        'Jade' => 'Ngọc bích Jade',
        'Sun Red Mirror' => 'Gương đỏ đi nắng',
        'Sun Green Mirror' => 'Gương xanh đi nắng',
        'Everyday Green Mirror' => 'Gương xanh hàng ngày',
        'Everyday Red Mirror' => 'Gương đỏ hàng ngày',
        'Everyday Violet Mirror' => 'Gương tím hàng ngày',
        'Storm Rose Flash' => 'Hồng đi sương mù/bão',
        'Storm Yellow Flash' => 'Vàng đi sương mù',
    ];
    foreach ($colors as $en => $vi) {
        $name = preg_replace('/(\b|-|–|\/|,|\s)' . preg_quote($en, '/') . '(\b|-|–|\/|,|\s)/i', '$1' . $vi . '$2', $name);
    }
    return $name;
}

function smith_get_product_variant_info($handle, $source_variant_id = '', $fallback = array()) {
    $resolved = smith_resolve_quick_order_item($handle, $source_variant_id);
    if (!$resolved) return false;

    $parent_id = $resolved['parent_id'];
    $item_id = $resolved['item_id'];
    $item = $resolved['item'];

    $parent_product = ($parent_id !== $item_id) ? wc_get_product($parent_id) : $item;
    $parent_raw_name = $parent_product ? $parent_product->get_name() : $item->get_name();
    $product_name = smith_localize_product_title(smith_translate_product_display_name($parent_raw_name), $handle);

    $variant_payload = array();
    $data = array();
    $raw_payload = get_post_meta($parent_id, '_smith_source_payload', true);
    if ($raw_payload) {
        $data = json_decode($raw_payload, true) ?: array();
        if (!empty($data['variants']) && is_array($data['variants'])) {
            if ($source_variant_id) {
                foreach ($data['variants'] as $v) {
                    if ((string) ($v['id'] ?? '') === (string) $source_variant_id) {
                        $variant_payload = $v;
                        break;
                    }
                }
            }
            if (empty($variant_payload) && (!empty($fallback['color']) || !empty($fallback['size']))) {
                foreach ($data['variants'] as $v) {
                    $c = (string) ($v['option1'] ?? '');
                    $s = (string) ($v['option2'] ?? '');
                    if (!empty($fallback['color']) && !empty($fallback['size'])) {
                        if ($c === $fallback['color'] && $s === $fallback['size']) {
                            $variant_payload = $v;
                            break;
                        }
                    } elseif (!empty($fallback['color']) && $c === $fallback['color']) {
                        $variant_payload = $v;
                        break;
                    }
                }
            }
        }
    }

    if (empty($variant_payload) && $item_id !== $parent_id) {
        $var_raw = get_post_meta($item_id, '_smith_source_payload', true);
        if ($var_raw) {
            $variant_payload = json_decode($var_raw, true) ?: array();
        }
    }

    $color = !empty($variant_payload['option1']) ? (string) $variant_payload['option1'] : (!empty($fallback['color']) ? (string) $fallback['color'] : '');
    $color_vi = $color ? smith_translate_product_display_name($color) : '';

    $size = '';
    if (!empty($variant_payload['option2']) && (preg_match('/^(S|M|L|XL|XXL|OSFA|One Size|\d+)/i', $variant_payload['option2']) || stripos($variant_payload['option2'], 'cm') !== false)) {
        $size = (string) $variant_payload['option2'];
    } elseif (!empty($variant_payload['option3']) && (preg_match('/^(S|M|L|XL|XXL|OSFA|One Size|\d+)/i', $variant_payload['option3']) || stripos($variant_payload['option3'], 'cm') !== false)) {
        $size = (string) $variant_payload['option3'];
    } elseif (!empty($fallback['size'])) {
        $size = (string) $fallback['size'];
    }

    $sku = (string) get_post_meta($item_id, '_smith_original_sku', true);
    if (!$sku && !empty($variant_payload['sku'])) {
        $sku = (string) $variant_payload['sku'];
    }
    if (!$sku) {
        $sku = (string) get_post_meta($parent_id, '_smith_original_sku', true);
    }

    $other_options = array();
    if (!empty($variant_payload['option2']) && $variant_payload['option2'] !== $size) {
        $other_options[] = smith_translate_product_display_name($variant_payload['option2']);
    }
    if (!empty($variant_payload['option3']) && $variant_payload['option3'] !== $size) {
        $other_options[] = smith_translate_product_display_name($variant_payload['option3']);
    }

    $variant_parts = array();
    if ($color_vi) $variant_parts[] = $color_vi;
    if ($size) $variant_parts[] = $size;
    if (!empty($other_options)) $variant_parts = array_merge($variant_parts, $other_options);

    $variant_title = !empty($variant_parts) ? implode(' / ', $variant_parts) : (!empty($fallback['variant_title']) ? (string) $fallback['variant_title'] : '');
    $display_name = $product_name . ($variant_title ? ' - ' . $variant_title : '');

    $image = (string) get_post_meta($item_id, '_smith_external_image_url', true);
    if (!$image && !empty($variant_payload['image_id']) && !empty($data['images'])) {
        foreach ($data['images'] as $img) {
            if ((string) ($img['id'] ?? '') === (string) $variant_payload['image_id']) {
                $image = (string) ($img['src'] ?? '');
                break;
            }
        }
    }
    if (!$image) {
        $image_id = $item->get_image_id() ?: get_post_thumbnail_id($parent_id);
        if ($image_id) $image = wp_get_attachment_image_url($image_id, 'medium') ?: wp_get_attachment_image_url($image_id, 'full');
    }
    if (!$image) {
        $image = (string) get_post_meta($parent_id, '_smith_external_primary_image', true);
    }

    return array(
        'parent_id'     => $parent_id,
        'item_id'       => $item_id,
        'item'          => $item,
        'product_name'  => $product_name,
        'name'          => $product_name,
        'display_name'  => $display_name,
        'color'         => $color,
        'color_vi'      => $color_vi,
        'size'          => $size,
        'sku'           => $sku,
        'other_options' => $other_options,
        'variant_title' => $variant_title,
        'image'         => $image,
        'handle'        => $handle,
        'variant_id'    => $source_variant_id ?: (string) ($variant_payload['id'] ?? ''),
    );
}

function smith_buy_now_popup() {
    check_ajax_referer('smith_buy_now', 'nonce');
    $handle = sanitize_title(wp_unslash($_POST['handle'] ?? ''));
    $source_variant_id = sanitize_text_field(wp_unslash($_POST['variant_id'] ?? ''));
    $color = sanitize_text_field(wp_unslash($_POST['color'] ?? ''));
    $size = sanitize_text_field(wp_unslash($_POST['size'] ?? ''));

    $info = smith_get_product_variant_info($handle, $source_variant_id, array('color' => $color, 'size' => $size));
    if (!$info) wp_send_json_error(array('message' => 'Không tìm thấy sản phẩm.'), 404);

    wp_send_json_success(array(
        'name'          => $info['product_name'],
        'display_name'  => $info['display_name'],
        'color'         => $info['color_vi'] ?: $info['color'],
        'size'          => $info['size'],
        'variant_title' => $info['variant_title'],
        'sku'           => $info['sku'],
        'image'         => esc_url_raw($info['image']),
        'stock'         => 'Còn hàng',
        'handle'        => $handle,
        'variant_id'    => $info['variant_id'],
    ));
}
remove_action('wp_ajax_smith_buy_now', 'smith_buy_now');
remove_action('wp_ajax_nopriv_smith_buy_now', 'smith_buy_now');
add_action('wp_ajax_smith_buy_now', 'smith_buy_now_popup');
add_action('wp_ajax_nopriv_smith_buy_now', 'smith_buy_now_popup');

function smith_create_quick_order() {
    check_ajax_referer('smith_buy_now', 'nonce');
    $handle = sanitize_title(wp_unslash($_POST['handle'] ?? ''));
    $source_variant_id = sanitize_text_field(wp_unslash($_POST['variant_id'] ?? ''));
    $color = sanitize_text_field(wp_unslash($_POST['color'] ?? ''));
    $size = sanitize_text_field(wp_unslash($_POST['size'] ?? ''));
    $variant_title = sanitize_text_field(wp_unslash($_POST['variant_title'] ?? ''));
    $sku = sanitize_text_field(wp_unslash($_POST['sku'] ?? ''));
    $quantity = max(1, min(99, absint($_POST['quantity'] ?? 1)));
    $phone = sanitize_text_field(wp_unslash($_POST['phone'] ?? ''));
    $email = sanitize_email(wp_unslash($_POST['email'] ?? ''));
    $name = sanitize_text_field(wp_unslash($_POST['name'] ?? ''));
    $address = sanitize_text_field(wp_unslash($_POST['address'] ?? ''));
    $note = sanitize_textarea_field(wp_unslash($_POST['note'] ?? ''));

    if (!$phone || ($email && !is_email($email))) {
        wp_send_json_error(array('message' => !$phone ? 'Vui lòng nhập số điện thoại.' : 'Địa chỉ email không hợp lệ.'), 422);
    }

    $info = smith_get_product_variant_info($handle, $source_variant_id, array(
        'color'         => $color,
        'size'          => $size,
        'variant_title' => $variant_title,
    ));
    if (!$info) wp_send_json_error(array('message' => 'Không tìm thấy sản phẩm hoặc biến thể.'), 404);

    try {
        $order = wc_create_order();
        $item_id = $order->add_product($info['item'], $quantity);
        $order_item = $order->get_item($item_id);

        $final_color = $info['color_vi'] ?: $color;
        $final_size = $info['size'] ?: $size;
        $final_sku = $info['sku'] ?: $sku;
        $final_title = $info['variant_title'] ?: $variant_title;

        if ($order_item) {
            if ($final_color) {
                $order_item->add_meta_data('Màu sắc', $final_color, true);
            }
            if ($final_size) {
                $order_item->add_meta_data('Kích cỡ', $final_size, true);
            }
            if ($final_title) {
                $order_item->add_meta_data('Phân loại', $final_title, true);
            }
            if ($final_sku) {
                $order_item->add_meta_data('Mã SKU', $final_sku, true);
            }
            if (!empty($info['other_options'])) {
                $order_item->add_meta_data('Tùy chọn khác', implode(', ', $info['other_options']), true);
            }
            if (!empty($info['variant_id'])) {
                $order_item->add_meta_data('_shopify_variant_id', $info['variant_id'], true);
            }

            $full_name = $info['product_name'] . ($final_title ? ' (' . $final_title . ')' : '');
            $order_item->set_name($full_name);
            $order_item->save();
        }

        $order->set_billing_first_name($name);
        $order->set_shipping_first_name($name);
        $order->set_billing_phone($phone);
        if ($email) $order->set_billing_email($email);
        $order->set_billing_address_1($address);
        $order->set_shipping_address_1($address);
        $order->set_customer_note($note);
        $order->set_payment_method('cod');
        $order->set_payment_method_title('Thanh toán khi nhận hàng (COD)');

        $note_parts = array(
            '📦 ĐƠN ĐẶT HÀNG NHANH',
            '• Sản phẩm: ' . $info['product_name'],
        );
        if (!empty($final_color)) $note_parts[] = '• Màu sắc: ' . $final_color;
        if (!empty($final_size)) $note_parts[] = '• Kích cỡ: ' . $final_size;
        if (!empty($final_sku)) $note_parts[] = '• Mã SKU: ' . $final_sku;
        if (!empty($final_title)) $note_parts[] = '• Chi tiết: ' . $final_title;
        if (!empty($note)) $note_parts[] = '• Ghi chú của khách: ' . $note;

        $order->add_order_note(implode("\n", $note_parts));

        $order->calculate_totals();
        $order->update_status('processing', 'Đơn mua nhanh COD được tạo từ popup sản phẩm.');
        $order->save();
    } catch (Throwable $error) {
        wp_send_json_error(array('message' => 'Không thể tạo đơn hàng: ' . $error->getMessage()), 500);
    }
    wp_send_json_success(array('order_id' => $order->get_id(), 'message' => 'Đặt hàng thành công. Mã đơn hàng của bạn là #' . $order->get_id() . '.'));
}
add_action('wp_ajax_smith_create_quick_order', 'smith_create_quick_order');
add_action('wp_ajax_nopriv_smith_create_quick_order', 'smith_create_quick_order');

/**
 * Send a product callback request to the WordPress administrator email.
 */
function smith_register_callback_request_type() {
    register_post_type('smith_callback', array(
        'labels' => array(
            'name' => 'Yêu cầu tư vấn',
            'singular_name' => 'Yêu cầu tư vấn',
            'menu_name' => 'Yêu cầu tư vấn',
            'all_items' => 'Tất cả yêu cầu',
        ),
        'public' => false,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_icon' => 'dashicons-phone',
        'supports' => array('title'),
        'capability_type' => 'post',
        'capabilities' => array(
            'create_posts' => false,
        ),
        'map_meta_cap' => true,
    ));
}
add_action('init', 'smith_register_callback_request_type');

function smith_request_sales_callback() {
    check_ajax_referer('smith_buy_now', 'nonce');

    // Quietly accept bot submissions caught by the hidden honeypot field.
    if (!empty($_POST['website'])) {
        wp_send_json_success(array('message' => 'Yêu cầu của bạn đã được ghi nhận.'));
    }

    $phone = sanitize_text_field(wp_unslash($_POST['phone'] ?? ''));
    $digits = preg_replace('/\D+/', '', $phone);
    $handle = sanitize_title(wp_unslash($_POST['handle'] ?? ''));
    $variant_id = sanitize_text_field(wp_unslash($_POST['variant_id'] ?? ''));
    $color = sanitize_text_field(wp_unslash($_POST['color'] ?? ''));
    $size = sanitize_text_field(wp_unslash($_POST['size'] ?? ''));
    $variant_title = sanitize_text_field(wp_unslash($_POST['variant_title'] ?? ''));
    $product_name = sanitize_text_field(wp_unslash($_POST['product_name'] ?? ''));
    $product_url = esc_url_raw(wp_unslash($_POST['product_url'] ?? ''));

    if (strlen($digits) < 9 || strlen($digits) > 11) {
        wp_send_json_error(array('message' => 'Vui lòng nhập số điện thoại hợp lệ.'), 422);
    }

    $rate_key = 'smith_callback_' . md5($digits . '|' . sanitize_text_field(wp_unslash($_SERVER['REMOTE_ADDR'] ?? '')));
    if (get_transient($rate_key)) {
        wp_send_json_error(array('message' => 'Yêu cầu đã được gửi. Nhân viên tư vấn sẽ sớm liên hệ với bạn.'), 429);
    }

    $sales_email = sanitize_email((string) get_option('admin_email'));
    if (!$sales_email) {
        wp_send_json_error(array('message' => 'Email quản trị WordPress chưa được cấu hình.'), 500);
    }

    $info = smith_get_product_variant_info($handle, $variant_id, array('color' => $color, 'size' => $size, 'variant_title' => $variant_title));
    $display_product = $product_name ?: $handle;
    $final_color = $color;
    $final_size = $size;
    $final_sku = '';

    if ($info) {
        $display_product = $info['display_name'];
        $final_color = $info['color_vi'] ?: $info['color'];
        $final_size = $info['size'];
        $final_sku = $info['sku'];
    }

    $subject = '[Smith Việt Nam] Yêu cầu gọi lại - ' . $display_product;
    $message = "Khách hàng vừa gửi yêu cầu tư vấn qua trang sản phẩm.\n\n"
        . "Số điện thoại: {$phone}\n"
        . "Sản phẩm: {$display_product}\n"
        . ($final_color ? "Màu sắc: {$final_color}\n" : "")
        . ($final_size ? "Kích cỡ: {$final_size}\n" : "")
        . ($final_sku ? "Mã SKU: {$final_sku}\n" : "")
        . "Mã sản phẩm (Handle): {$handle}\n"
        . "Biến thể ID: " . ($variant_id ?: 'Không xác định') . "\n"
        . "Liên kết: {$product_url}\n"
        . "Thời gian: " . wp_date('d/m/Y H:i:s') . "\n";

    // Save first so a temporary SMTP problem never loses the customer's phone number.
    $request_id = wp_insert_post(array(
        'post_type' => 'smith_callback',
        'post_status' => 'publish',
        'post_title' => $phone . ' - ' . $display_product,
    ), true);
    if (is_wp_error($request_id)) {
        wp_send_json_error(array('message' => 'Chưa thể ghi nhận yêu cầu. Vui lòng thử lại sau.'), 500);
    }
    update_post_meta($request_id, '_smith_callback_phone', $phone);
    update_post_meta($request_id, '_smith_callback_product', $display_product);
    update_post_meta($request_id, '_smith_callback_handle', $handle);
    update_post_meta($request_id, '_smith_callback_variant', $variant_id);
    update_post_meta($request_id, '_smith_callback_color', $final_color);
    update_post_meta($request_id, '_smith_callback_size', $final_size);
    update_post_meta($request_id, '_smith_callback_sku', $final_sku);
    update_post_meta($request_id, '_smith_callback_url', $product_url);

    $sent = wp_mail($sales_email, $subject, $message, array('Content-Type: text/plain; charset=UTF-8'));
    update_post_meta($request_id, '_smith_callback_email_sent', $sent ? 'yes' : 'no');
    set_transient($rate_key, 1, 5 * MINUTE_IN_SECONDS);
    wp_send_json_success(array(
        'message' => 'Đã ghi nhận! Nhân viên tư vấn sẽ sớm gọi lại cho bạn.',
        'request_id' => $request_id,
        'email_sent' => (bool) $sent,
    ));
}
add_action('wp_ajax_smith_request_sales_callback', 'smith_request_sales_callback');
add_action('wp_ajax_nopriv_smith_request_sales_callback', 'smith_request_sales_callback');

/**
 * Theme Setup
 */
function smith_theme_setup() {
    load_theme_textdomain('smith-optics', SMITH_THEME_DIR . '/languages');
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('woocommerce');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script'));

    register_nav_menus(array(
        'primary-menu' => esc_html__('Primary Header Menu', 'smith-optics'),
        'footer-menu'  => esc_html__('Footer Links', 'smith-optics'),
    ));
}
add_action('after_setup_theme', 'smith_theme_setup');

/**
 * Vietnamese to English Slug Dictionary
 */
function smith_get_vn_slug_map() {
    static $map = null;
    if ($map === null) {
        $map = array(
            'collections' => array(
                'phu-kien' => 'accessories',
                'mu-truot-tuyet-all-mountain' => 'all-mountain-snow-helmets',
                'mu-dua-tuyet-alpine' => 'alpine-ski-racing-helmets',
                'trang-phuc' => 'apparel',
                'bo-suu-tap-di-san' => 'archive-collection',
                'kinh-ram-da-ngoai-backcountry' => 'backcountry-touring-sunglasses',
                'san-pham-ban-chay' => 'best-sellers',
                'kinh-ram-ban-chay' => 'best-selling-sunglasses',
                'trong-kinh-xe-dap-thay-the' => 'bike-goggles-replacement-lenses',
                'kinh-bao-ho-xe-dap' => 'bike-goggles',
                'mu-bao-hiem-xe-dap' => 'bike-helmets',
                'giam-gia-xe-dap' => 'bike-sale',
                'tam-nhin-birdseye' => 'birdseye',
                'kinh-chong-anh-sang-xanh' => 'blue-light-glasses',
                'tao-bo-trang-bi-mtb' => 'build-your-mtb-kit',
                'bo-suu-tap-cot-loi' => 'core-collection',
                'kinh-mat' => 'eyewear',
                'cau-ca' => 'fishing',
                'mu-truot-tuyet-freestyle' => 'freestyle-snow-helmets',
                'kinh-bao-ho' => 'goggles',
                'bo-suu-tap-guides-choice' => 'guides-choice-collection',
                'mu-bao-hiem' => 'helmets',
                'leo-nui-da-ngoai' => 'hiking',
                'kinh-ram-lifestyle' => 'lifestyle-sunglasses',
                'bo-suu-tap-lowdown' => 'lowdown-collection',
                'mu-bao-hiem-xe-dap-leo-nui' => 'mountain-biking-helmets',
                'xe-dap-leo-nui' => 'mountain-biking',
                'san-pham-moi' => 'new-arrivals',
                'kinh-truot-tuyet-trum-kinh-can-otg' => 'over-the-glasses-snow-goggles',
                'bo-chuyen-kinh-do-rx' => 'prescription-adapters',
                'kinh-can-co-do' => 'prescription-eyeglasses',
                'kinh-ram-co-do' => 'prescription-sunglasses',
                'kinh-co-do' => 'prescription',
                'kinh-bao-ho-chuyen-dung' => 'protective-eyewear',
                'mu-bao-hiem-road-gravel' => 'road-gravel-cycling-helmets',
                'xe-dap-road-gravel' => 'road-gravel-cycling',
                'chay-bo' => 'running',
                'giam-gia' => 'sale',
                'kinh-truot-tuyet-smith-mag' => 'smith-mag-snow-goggles',
                'trong-kinh-truot-tuyet-thay-the' => 'snow-goggles-replacement-lenses',
                'kinh-bao-ho-truot-tuyet' => 'snow-goggles',
                'mu-bao-hiem-truot-tuyet' => 'snow-helmets',
                'truot-tuyet' => 'snow',
                'kinh-ram-the-thao-hieu-nang-cao' => 'sport-performance-sunglasses',
                'kinh-bao-ho-squad' => 'squad-goggles',
                'trong-kinh-ram-thay-the' => 'sunglasses-replacement-lenses',
                'kinh-ram-duoi-200' => 'sunglasses-under-200',
                'kinh-ram' => 'sunglasses',
                'luot-song' => 'surfing',
                'bo-suu-tap-ulterior' => 'ulterior-collection',
                'mu-bao-hiem-xe-dap-do-thi' => 'urban-cycling-helmets',
                'kinh-ram-chromapop-glass-polarchromic' => 'v-chromapop-glass-polarchromic-sunglasses',
                'kinh-ram-chromapop' => 'v-chromapop-sunglasses',
                'kinh-ram-photochromic' => 'v-photochromic-sunglasses',
                'kinh-bao-ho-co-lon-xl' => 'xl-goggles',
                'mu-xe-dap-tre-em' => 'youth-bike-helmets',
                'kinh-truot-tuyet-tre-em' => 'youth-snow-goggles',
                'mu-truot-tuyet-tre-em' => 'youth-snow-helmets',
                'dong-san-pham-4d-mag' => '4d-mag-series'
            ),
            'pages' => array(
                've-chung-toi' => 'about-us',
                'van-dong-vien' => 'athletes',
                'lien-he' => 'contactus',
                'tuyen-bo-cookie' => 'cookie-declaration',
                'tim-cua-hang' => 'find-a-store',
                'trac-nghiem-trong-kinh-cau-ca' => 'fishing-lens-quiz',
                'kinh-mat-co-do' => 'prescription-eyewear',
                'dieu-khoan-khuyen-mai' => 'promotion-terms',
                'theo-duoi-dam-me-oaxaca' => 'pursue-your-thrill-oaxaca',
                'theo-duoi-dam-me-outer-banks' => 'pursue-your-thrill-outer-banks',
                'danh-gia' => 'reviews',
                'tuyen-bo-kha-nang-tiep-can' => 'smith-accessibility-statement',
                'smith-xe-dap' => 'smith-cycling',
                'smith-truot-tuyet' => 'smith-snow',
                'smith-x-quoc' => 'smith-x-quoc',
                'trac-nghiem-chon-kinh-ram' => 'sunglasses-finder-quiz',
                'ho-tro' => 'support',
                'cong-nghe' => 'technologies',
                'dieu-khoan-ban-hang' => 'terms-of-sale',
                'du-bao-the-forecast' => 'the-forecast',
                'huong-dan-chon-size' => 'size-guide',
                'bao-hanh' => 'warranty-policy',
                'chinh-sach-bao-hanh' => 'warranty-policy',
                'doi-tra' => 'returns-center',
                'chinh-sach-doi-tra' => 'returns-center',
                'trung-tam-doi-tra' => 'returns-center',
                'theo-doi-don-hang' => 'order-tracking',
                'chinh-sach-bao-mat' => 'privacy-policy',
                'dieu-khoan-dich-vu' => 'terms-of-service',
                'dieu-khoan-su-dung' => 'terms-of-service'
            ),
            'blogs' => array(
                'kinh-ram-chay-bo-tot-nhat' => 'best-sunglasses-for-running',
                'tin-tuc-thang-8-2026' => 'the-lowdown-august-2026',
                'goc-nhin-zoe-mcdougall-kinh-ram-le-hoi' => 'through-the-lens-zoe-mcdougall-s-festival-sunglasses-lineup',
                'gap-go-doi-ngu-jose-luis-rebolledo' => 'meet-the-team-jose-luis-rebolledo',
                'bua-sang-nha-vo-dich-breakfast-club-atx' => 'breakfast-of-champions-casual-observations-from-a-week-with-the-breakfast-club-atx'
            ),
            'products' => array(
                'the-qua-tang' => 'gift-card'
            )
        );
    }
    return $map;
}

/**
 * Bulletproof Dual URL Router: Hỗ trợ URL Tiếng Việt chuẩn SEO + Fallback URL Gốc
 */
function smith_bulletproof_router() {
    $request_uri = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '';
    $path = trim(strtok($request_uri, '?'), '/');

    // Handle Shopify monorail / telemetry endpoints gracefully
    if (strpos($path, '.well-known/shopify') !== false || strpos($path, 'api/collect') !== false) {
        status_header(200);
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode(array('status' => 'ok'));
        exit;
    }

    // Serve root-relative fonts, images, css
    if (preg_match('#^assets/(fonts|images|css)/(.*)$#i', $path, $asset_matches)) {
        $sub = $asset_matches[1];
        $rel = $asset_matches[2];
        $file = SMITH_THEME_DIR . '/assets/' . $sub . '/' . $rel;

        $legacy_assets = array(
            'assets/fonts/Graphik-Regular_cbe1db55b7.woff2' => 'assets/fonts/Graphik-Regular_cbe1db55b7.woff2',
            'assets/fonts/Graphik-Semibold_b3ce14d55e.woff2' => 'assets/fonts/Graphik-Semibold_b3ce14d55e.woff2',
            'assets/fonts/Graphik-Regular_8fde87f36e.woff' => 'assets/fonts/Graphik-Regular_8fde87f36e5a.woff',
            'assets/fonts/Graphik-Semibold_62d8a9c876.woff' => 'assets/fonts/Graphik-Semibold_62d8a9c8768f.woff',
            'assets/css/css2_7e05d8fe06.css' => 'assets/css/css2_7e05d8fe0634.css',
        );
        if (!is_file($file) && isset($legacy_assets[$path])) {
            $file = SMITH_THEME_DIR . '/' . $legacy_assets[$path];
        }

        if (is_file($file)) {
            $extension = strtolower(pathinfo($file, PATHINFO_EXTENSION));
            $types = array(
                'css' => 'text/css',
                'woff' => 'font/woff',
                'woff2' => 'font/woff2',
                'svg' => 'image/svg+xml',
                'png' => 'image/png',
                'jpg' => 'image/jpeg',
                'jpeg' => 'image/jpeg',
                'webp' => 'image/webp',
                'gif' => 'image/gif',
                'json' => 'application/json',
                'js' => 'application/javascript'
            );
            status_header(200);
            header('Content-Type: ' . (isset($types[$extension]) ? $types[$extension] : 'application/octet-stream'));
            header('Cache-Control: public, max-age=31536000, immutable');
            readfile($file);
            exit;
        }
    }

    if ($path === 'cart.js' || $path === 'en-us/cart.js') {
        status_header(200);
        header('Content-Type: application/json; charset=utf-8');
        echo wp_json_encode(array(
            'token' => null,
            'note' => null,
            'attributes' => (object) array(),
            'original_total_price' => 0,
            'total_price' => 0,
            'total_discount' => 0,
            'total_weight' => 0,
            'item_count' => 0,
            'items' => array(),
            'requires_shipping' => false,
            'currency' => 'USD',
            'items_subtotal_price' => 0,
            'cart_level_discount_applications' => array(),
        ));
        exit;
    }

    $site_path = trim(parse_url(home_url(), PHP_URL_PATH) ?: '', '/');
    if (!empty($site_path) && strpos($path, $site_path) === 0) {
        $path = trim(substr($path, strlen($site_path)), '/');
    }

    if (strpos($path, 'en-us/') === 0) {
        $path = substr($path, 6);
    } elseif ($path === 'en-us') {
        $path = '';
    }

    if ($path === 'bo-suu-tap/the-thao') {
        global $wp_query;
        if ($wp_query) $wp_query->set_404();
        status_header(404);
        nocache_headers();
        $template = get_404_template();
        if ($template) include $template;
        exit;
    }

    // URL tiếng Việt của các trang snapshot được lưu trong database. Chuyển
    // chúng về tuyến nội bộ cũ để giữ nguyên giao diện, nhưng WordPress/Yoast
    // vẫn quản lý URL, title và sitemap bằng bản ghi Page thật.
    $database_route = function_exists('smith_find_database_route')
        ? smith_find_database_route($path)
        : null;
    if ($database_route instanceof WP_Post) {
        $snapshot_handle = get_post_meta($database_route->ID, '_smith_snapshot_handle', true);
        if ($snapshot_handle) {
            if (strpos($snapshot_handle, 'article-') === 0) {
                $path = 'bai-viet/blog/' . substr($snapshot_handle, 8);
            } elseif (strpos($snapshot_handle, 'athlete-') === 0) {
                $path = 'trang/athletes/' . substr($snapshot_handle, 8);
            } elseif (strpos($snapshot_handle, 'technology-') === 0) {
                $path = 'trang/technologies/' . substr($snapshot_handle, 11);
            } else {
                $path = 'trang/' . $snapshot_handle;
            }
        }
    }

    $vn_map = smith_get_vn_slug_map();

    // 1. Tuyến đường /bo-suu-tap/... hoặc /danh-muc/... hoặc /collections/...
    if (preg_match('#^(?:bo-suu-tap|danh-muc|collections)(?:/(.*))?$#i', $path, $matches)) {
        global $wp_query;
        $wp_query->is_404 = false;
        status_header(200);
        $raw_handle = isset($matches[1]) && trim($matches[1]) !== '' ? trim($matches[1], '/') : 'all';
        $handle = isset($vn_map['collections'][$raw_handle]) ? $vn_map['collections'][$raw_handle] : $raw_handle;
        set_query_var('smith_collection', $handle);

        $snapshot = get_template_directory() . '/snapshots/collection-' . sanitize_file_name($handle) . '.php';
        // The goggles capture is missing several core Boost rules (sorting,
        // filter typography and product-list layout). Use the maintained local
        // archive template for this collection instead of stacking brittle CSS
        // patches onto an incomplete multi-megabyte snapshot.
        if (is_file($snapshot) && $handle !== 'goggles') {
            if ($handle !== 'best-sellers') {
                add_action('wp_footer', static function () {
                    get_template_part('template-parts/collection', 'trending');
                }, 1);
            }
            include $snapshot;
            exit;
        }

        $template = locate_template('archive-product.php');
        if ($template) {
            include $template;
            exit;
        }
    }

    // 2. Tuyến đường /san-pham/... hoặc /products/...
    if (preg_match('#^(?:san-pham|products)(?:/(.*))?$#i', $path, $matches)) {
        global $wp_query;
        $wp_query->is_404 = false;
        status_header(200);
        $raw_handle = isset($matches[1]) ? rawurldecode(trim($matches[1], '/')) : '';
        $handle = isset($vn_map['products'][$raw_handle]) ? $vn_map['products'][$raw_handle] : $raw_handle;
        set_query_var('smith_product', $handle);

        $product_snapshot = get_template_directory() . '/snapshots/product-' . sanitize_file_name($handle) . '.php';
        if (is_file($product_snapshot)) {
            add_action('wp_footer', static function () {
                get_template_part('template-parts/collection', 'trending');
            }, 1);
            include $product_snapshot;
            exit;
        }

        $template = locate_template('single-product.php');
        if ($template) {
            include $template;
            exit;
        }
    }

    // 3. Tuyến đường /gio-hang hoặc /cart
    if (preg_match('#^(?:gio-hang|cart)(?:/(.*))?$#i', $path)) {
        global $wp_query;
        $wp_query->is_404 = false;
        status_header(200);
        set_query_var('smith_page', 'cart');

        $template = locate_template('page.php');
        if ($template) {
            include $template;
            exit;
        }
    }

    // 4. Tuyến đường /trang/..., /pages/..., /policies/..., /support.html, /support, /ho-tro, /chinh-sach-bao-mat, etc.
    if (preg_match('#^(?:trang|pages|policies)(?:/(.*))?$#i', $path, $matches) || preg_match('#^(?:support\.html|support|ho-tro|privacy-policy|chinh-sach-bao-mat|terms-of-service|terms-of-use|warranty-policy|returns-center|order-tracking)$#i', $path)) {
        global $wp_query;
        $wp_query->is_404 = false;
        status_header(200);
        $raw_handle = isset($matches[1]) ? trim($matches[1], '/') : (preg_match('#^(?:support\.html|support|ho-tro)$#i', $path) ? 'support' : $path);
        $handle = isset($vn_map['pages'][$raw_handle]) ? $vn_map['pages'][$raw_handle] : $raw_handle;
        if (empty($handle) && preg_match('#^(?:support\.html|support|ho-tro)$#i', $path)) {
            $handle = 'support';
        }
        set_query_var('smith_page', $handle);

        $snapshot_handle = $handle;
        if (preg_match('#^athletes/([^/]+)$#i', $handle, $athlete_match) || preg_match('#^van-dong-vien/([^/]+)$#i', $handle, $athlete_match)) {
            $snapshot_handle = 'athlete-' . sanitize_title(rawurldecode($athlete_match[1]));
        } elseif (preg_match('#^technologies/([^/]+)$#i', $handle, $technology_match) || preg_match('#^cong-nghe/([^/]+)$#i', $handle, $technology_match)) {
            $snapshot_handle = 'technology-' . sanitize_title(rawurldecode($technology_match[1]));
        }
        $page_snapshot = get_template_directory() . '/snapshots/page-' . sanitize_file_name($snapshot_handle) . '.php';
        if (is_file($page_snapshot)) {
            include $page_snapshot;
            exit;
        }

        $template = locate_template('page.php');
        if ($template) {
            include $template;
            exit;
        }
    }

    // 5. Tuyến đường /bai-viet/..., /tin-tuc/..., /blogs/..., /cong-cu/..., /tools/...
    if (preg_match('#^(?:bai-viet|tin-tuc|blogs|cong-cu|tools|account)(?:/(.*))?$#i', $path, $matches)) {
        global $wp_query;
        $wp_query->is_404 = false;
        status_header(200);
        $raw_handle = isset($matches[1]) && trim($matches[1]) !== '' ? trim($matches[1], '/') : 'customer-support';
        $handle = isset($vn_map['blogs'][$raw_handle]) ? $vn_map['blogs'][$raw_handle] : $raw_handle;
        set_query_var('smith_page', $handle);

        if ($handle === 'blog' || $handle === 'bai-viet' || $handle === 'tin-tuc' || $raw_handle === 'customer-support') {
            set_query_var('smith_dynamic_blog', 'archive');
            $template = locate_template('archive-blog.php');
            if ($template) {
                include $template;
                exit;
            }
        } elseif (preg_match('#^(?:blog|bai-viet)/([^/]+)$#i', $raw_handle, $article_match)
            || preg_match('#^(?:bai-viet|tin-tuc)/([^/]+)$#i', $path, $direct_article_match)
            || isset($vn_map['blogs'][$raw_handle])) {
            if (isset($vn_map['blogs'][$raw_handle])) {
                $article_slug = $vn_map['blogs'][$raw_handle];
            } elseif (!empty($direct_article_match[1])) {
                $article_slug = sanitize_title(rawurldecode($direct_article_match[1]));
            } else {
                $article_slug = sanitize_title(rawurldecode($article_match[1]));
            }
            if (stripos($article_slug, 'introducing-chromapop') === 0) {
                $article_slug = 'introducing-chromapop-pro-photochromic';
            }
            $blog_post = get_page_by_path($article_slug, OBJECT, 'post');
            if ($blog_post instanceof WP_Post && $blog_post->post_status === 'publish') {
                set_query_var('smith_dynamic_blog', 'single');
                set_query_var('smith_blog_post_id', $blog_post->ID);
                $template = locate_template('single-blog.php');
                if ($template) {
                    include $template;
                    exit;
                }
            }
            $snapshot_handle = 'article-' . $article_slug;
        } else {
            $snapshot_handle = $handle;
        }
        $page_snapshot = get_template_directory() . '/snapshots/page-' . sanitize_file_name($snapshot_handle) . '.php';
        if (is_file($page_snapshot)) {
            include $page_snapshot;
            exit;
        }

        $template = locate_template('page.php');
        if ($template) {
            include $template;
            exit;
        }
    }
}
add_action('parse_request', 'smith_bulletproof_router', 1);
add_action('template_redirect', 'smith_bulletproof_router', 1);

/**
 * Keep the public blog CRUD-friendly: every regular WordPress post belongs to
 * the Blog category, so a newly published post appears at /bai-viet at once.
 */
function smith_assign_blog_category_to_posts($post_id, $post, $update) {
    if (!$post instanceof WP_Post || $post->post_type !== 'post') return;
    if (wp_is_post_revision($post_id) || wp_is_post_autosave($post_id)) return;

    $term = term_exists('Blog', 'category');
    if (!$term) {
        $term = wp_insert_term('Blog', 'category', array('slug' => 'blog'));
    }
    if (is_wp_error($term)) return;

    $term_id = (int) (is_array($term) ? $term['term_id'] : $term);
    if ($term_id && !has_category($term_id, $post_id)) {
        wp_set_post_categories($post_id, array($term_id), true);
    }
}
add_action('save_post_post', 'smith_assign_blog_category_to_posts', 20, 3);

/**
 * Enqueue Theme Scripts and Styles
 */
function smith_theme_scripts() {
    wp_enqueue_style('smith-style', get_stylesheet_uri(), array(), SMITH_THEME_VERSION);

    // Collection snapshots contain Boost markup and the site's custom Boost
    // overrides, but they still need the base Boost layout stylesheet. Without
    // it, the filter column and every product card fall back to display:block,
    // which makes the hosted collection pages appear as one long broken column.
    if (get_query_var('smith_collection')) {
        $boost_layout_file = SMITH_THEME_DIR . '/assets/css/asset_ca12a8efc4.css';
        $boost_layout_version = is_file($boost_layout_file)
            ? (string) filemtime($boost_layout_file)
            : SMITH_THEME_VERSION;

        wp_enqueue_style(
            'smith-boost-collection-layout',
            SMITH_THEME_URI . '/assets/css/asset_ca12a8efc4.css',
            array('smith-style'),
            $boost_layout_version
        );
    }

    if (get_query_var('smith_dynamic_blog')) {
        wp_enqueue_style('smith-dynamic-blog', SMITH_THEME_URI . '/assets/css/blog-dynamic.css', array('smith-style'), SMITH_THEME_VERSION);
    }

    $snapshot_interactivity_file = get_template_directory() . '/assets/js/smith-snapshot-interactivity.js';
    $snapshot_interactivity_ver = file_exists($snapshot_interactivity_file) ? (string) filemtime($snapshot_interactivity_file) : SMITH_THEME_VERSION;
    wp_enqueue_script('smith-interactivity', SMITH_THEME_URI . '/assets/js/smith-local-interactivity.js', array(), SMITH_THEME_VERSION, true);
    wp_enqueue_script('smith-snapshot-interactivity', SMITH_THEME_URI . '/assets/js/smith-snapshot-interactivity.js', array(), $snapshot_interactivity_ver, true);
    wp_enqueue_script('smith-product-snapshot', SMITH_THEME_URI . '/assets/js/smith-product-snapshot.js', array(), SMITH_THEME_VERSION, true);
    // The homepage renders the shared collection-trending component, which
    // initializes its own carousel. Do not enqueue the legacy homepage script:
    // it runs a second initializer and replaces the shared product selection.
    wp_localize_script('smith-interactivity', 'smithData', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'buy_nonce' => wp_create_nonce('smith_buy_now'),
        'checkout_url' => wc_get_checkout_url(),
        'theme_url' => SMITH_THEME_URI,
        'products_index' => SMITH_THEME_URI . '/assets/products_index.json',
        'products_ajax_url' => admin_url('admin-ajax.php?action=smith_get_products')
    ));
}
add_action('wp_enqueue_scripts', 'smith_theme_scripts');

/**
 * AJAX Endpoint phục vụ dữ liệu sản phẩm tức thì
 */
function smith_ajax_get_products() {
    $json_path = get_template_directory() . '/assets/products_index.json';
    if (!file_exists($json_path)) {
        $json_path = dirname(get_template_directory(), 3) . '/site_data/assets/products_index.json';
    }
    if (!file_exists($json_path)) {
        $json_path = 'c:/Users/hnguy/Desktop/New folder (3)/site_data/assets/products_index.json';
    }
    if (file_exists($json_path)) {
        header('Content-Type: application/json; charset=utf-8');
        readfile($json_path);
        exit;
    }
    wp_send_json_error(array('message' => 'products_index.json not found'));
}
add_action('wp_ajax_smith_get_products', 'smith_ajax_get_products');
add_action('wp_ajax_nopriv_smith_get_products', 'smith_ajax_get_products');

/**
 * Include Helpers
 */
if (file_exists(SMITH_THEME_DIR . '/inc/helpers.php')) {
    require_once SMITH_THEME_DIR . '/inc/helpers.php';
}
if (file_exists(SMITH_THEME_DIR . '/inc/product-reviews.php')) {
    require_once SMITH_THEME_DIR . '/inc/product-reviews.php';
}
if (file_exists(SMITH_THEME_DIR . '/inc/ajax-endpoints.php')) {
    require_once SMITH_THEME_DIR . '/inc/ajax-endpoints.php';
}

/** Keep WooCommerce cart, checkout and account views aligned with catalog/PDP titles. */
function smith_localize_woocommerce_product_name($name, $product) {
    if (!$product || !is_a($product, 'WC_Product')) return $name;
    $product_id = $product->is_type('variation') ? $product->get_parent_id() : $product->get_id();
    $handle = (string) get_post_meta($product_id, '_smith_handle', true);
    if (!$handle) $handle = get_post_field('post_name', $product_id);
    return smith_localize_product_title($name, $handle);
}
add_filter('woocommerce_product_get_name', 'smith_localize_woocommerce_product_name', 20, 2);
add_filter('woocommerce_product_variation_get_name', 'smith_localize_woocommerce_product_name', 20, 2);

/**
 * Tùy chỉnh Email Đơn hàng (Cả Admin & Khách hàng): Ẩn giá chuyên nghiệp & Không hiển thị ảnh
 */
// 1. Tắt ảnh sản phẩm trong email
add_filter('woocommerce_email_order_items_args', function($args) {
    $args['show_image'] = false;
    return $args;
});
add_filter('woocommerce_order_item_thumbnail', '__return_empty_string');

// 2. Ẩn giá từng sản phẩm trong bảng email (thay bằng "Liên hệ" chuyên nghiệp)
add_filter('woocommerce_order_formatted_line_subtotal', function($subtotal, $item, $order) {
    return '<span style="color:#18743a; font-weight:600; font-size:14px;">Liên hệ</span>';
}, 20, 3);

// 3. Ẩn tổng tiền trong email, thay bằng thông báo xác nhận & báo giá
add_filter('woocommerce_get_order_item_totals', function($total_rows, $order, $tax_display) {
    unset($total_rows['cart_subtotal']);
    unset($total_rows['order_total']);
    unset($total_rows['tax']);
    unset($total_rows['shipping']);
    
    $total_rows['smith_price_consultation'] = array(
        'label' => 'Báo giá & Xác nhận:',
        'value' => '<strong style="color:#18743a;">Chuyên viên Smith Optics sẽ liên hệ tư vấn và báo giá trực tiếp</strong>'
    );
    return $total_rows;
}, 20, 3);

// 4. CSS định dạng Email sang trọng, chuyên nghiệp
add_filter('woocommerce_email_styles', function($css) {
    $css .= '
        #wrapper { background-color: #f7f7f7 !important; padding: 40px 0 !important; font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Arial, sans-serif !important; }
        #template_container { background-color: #ffffff !important; border-radius: 8px !important; box-shadow: 0 4px 16px rgba(0,0,0,0.06) !important; border: 1px solid #e9e9e9 !important; overflow: hidden !important; max-width: 620px !important; }
        #template_header { background-color: #181818 !important; border-radius: 8px 8px 0 0 !important; color: #ffffff !important; padding: 28px 32px !important; }
        #template_header h1 { color: #ffffff !important; font-size: 22px !important; font-weight: 700 !important; margin: 0 !important; letter-spacing: 0.5px !important; }
        #template_body { padding: 24px 32px !important; }
        #body_content_inner { font-size: 15px !important; line-height: 1.6 !important; color: #333333 !important; }
        table.td { border: 1px solid #eeeeee !important; border-collapse: collapse !important; width: 100% !important; margin-bottom: 24px !important; }
        table.td th { background-color: #fafafa !important; color: #181818 !important; font-weight: 600 !important; padding: 12px 14px !important; font-size: 14px !important; border-bottom: 2px solid #e5e5e5 !important; }
        table.td td { padding: 14px !important; border-bottom: 1px solid #eeeeee !important; vertical-align: middle !important; font-size: 14px !important; }
        .order_item img, .email-item-image { display: none !important; width: 0 !important; height: 0 !important; }
        .order_item .wc-item-meta { font-size: 13px !important; color: #666666 !important; margin-top: 6px !important; padding: 0 !important; list-style: none !important; }
        .order_item .wc-item-meta li { margin-bottom: 3px !important; }
        #template_footer #credit { color: #888888 !important; font-size: 13px !important; padding: 24px 0 !important; border-top: 1px solid #eeeeee !important; text-align: center !important; }
    ';
    return $css;
});
