<?php
/**
 * The template for displaying Smith Optics Collection Archives (Shop Catalog)
 *
 * @package Smith_Optics
 */

get_header();

// Nạp cơ sở dữ liệu sản phẩm
$json_path = get_template_directory() . '/assets/products_index.json';
if (!file_exists($json_path)) {
    $json_path = dirname(get_template_directory(), 3) . '/site_data/assets/products_index.json';
}

$all_prods = array();
if (file_exists($json_path)) {
    $all_prods = json_decode(file_get_contents($json_path), true) ?: array();
}

$current_cat = get_query_var('smith_collection', 'all');
if (empty($current_cat)) {
    $current_cat = 'all';
}

$filtered_prods = array();
$synced_collection = null;
$collections_catalog_file = get_template_directory() . '/assets/collections_catalog.json';
if (file_exists($collections_catalog_file)) {
    $collections_catalog = json_decode(file_get_contents($collections_catalog_file), true);
    if (!empty($collections_catalog[$current_cat]['products'])) {
        $synced_collection = $collections_catalog[$current_cat];
        $filtered_prods = $synced_collection['products'];
    }
}

if ($current_cat === 'goggles') {
    // The captured goggles collection contains six actual product cards. The
    // synchronized catalog also contains one row per colour/related entry,
    // which inflated the total to 78 and discarded the complete swatch sets.
    $goggles_order = array(
        'squad-xl-low-bridge-fit',
        'moment-low-bridge-fit',
        'i-o-mag-xl-sale',
        'i-o-mag-xl-low-bridge-fit-sale',
        'i-o-mag-s-sale',
        'sequence-otg-low-bridge-fit',
    );
    $goggles_by_handle = array();
    foreach (array_merge($all_prods, $filtered_prods) as $product) {
        if (!empty($product['handle'])) {
            $goggles_by_handle[$product['handle']] = $product;
        }
    }
    $filtered_prods = array();
    foreach ($goggles_order as $handle) {
        if (isset($goggles_by_handle[$handle])) {
            $filtered_prods[] = $goggles_by_handle[$handle];
        }
    }
} elseif ($current_cat === 'new-arrivals') {
    $new_arrival_order = array(
        'riptide-xl', 'strand', 'cipher', 'westward-core', 'pilot-mips-r', 'backcast-rx',
        'truss-rx', 'strand-rx', 'syncline', 'smith-x-beams-sliders', 'defy-quoc-collab', 'truss', 'sliders', 'backcast',
        'forefront-3-mips-r', 'smith-x-quoc-gran-tourer-xc', 'smith-x-quoc-performance-gravel-socks',
        'riptide-replacement-lens', 'embark-replacement-lens', 'lowdown-2-replacement-lens',
        'sliders-replacement-lens', 'guides-choice-replacement-lens', 'venture-replacement-lens',
        'lowdown-xl-2-replacement-lens', 'syncline-replacement-lens'
    );
    $by_handle = array();
    foreach ($all_prods as $product) {
        $by_handle[$product['handle']] = $product;
    }
    if (!empty($synced_collection['products'])) {
        foreach ($synced_collection['products'] as $product) {
            $by_handle[$product['handle']] = $product;
        }
    }
    $filtered_prods = array();
    foreach ($new_arrival_order as $handle) {
        if (isset($by_handle[$handle])) {
            $filtered_prods[] = $by_handle[$handle];
        }
    }
} elseif (empty($filtered_prods)) {
    $cat_term = strtolower(str_replace('-', ' ', $current_cat));
    foreach ($all_prods as $p) {
        if (isset($p['category']) && (stripos($p['category'], $current_cat) !== false || stripos($current_cat, $p['category']) !== false)) {
            $filtered_prods[] = $p;
        } elseif (isset($p['title']) && (stripos($p['title'], $cat_term) !== false || stripos($p['handle'], $current_cat) !== false)) {
            $filtered_prods[] = $p;
        }
    }
    if (empty($filtered_prods)) {
        $filtered_prods = $all_prods;
    }
}

// Collection snapshots contain the correct order/copy, while the master index
// contains the high-resolution colour imagery. Combine both sources so cloned
// collection cards retain the original ordering without losing their swatches.
if ($filtered_prods && $all_prods) {
    $master_products = array();
    foreach ($all_prods as $master_product) {
        if (!empty($master_product['handle'])) {
            $master_products[$master_product['handle']] = $master_product;
        }
    }
    foreach ($filtered_prods as &$filtered_product) {
        $filtered_handle = isset($filtered_product['handle']) ? $filtered_product['handle'] : '';
        if ($filtered_handle && isset($master_products[$filtered_handle])) {
            $snapshot_product = $filtered_product;
            $filtered_product = array_merge($master_products[$filtered_handle], $snapshot_product);
            // The collection snapshot can contain the original English teaser.
            // Prefer the localized master copy so cards are Vietnamese in the
            // initial HTML and never flash English before client scripts run.
            if (!empty($master_products[$filtered_handle]['description'])) {
                $filtered_product['description'] = $master_products[$filtered_handle]['description'];
            }
            foreach (array('variants', 'swatches') as $image_field) {
                $snapshot_images = !empty($filtered_product[$image_field]) && is_array($filtered_product[$image_field])
                    ? $filtered_product[$image_field]
                    : array();
                $master_images = !empty($master_products[$filtered_handle][$image_field]) && is_array($master_products[$filtered_handle][$image_field])
                    ? $master_products[$filtered_handle][$image_field]
                    : array();
                if (count($master_images) > count($snapshot_images)) {
                    $filtered_product[$image_field] = $master_products[$filtered_handle][$image_field];
                }
            }
        }
    }
    unset($filtered_product);
}

function smith_collection_localize_description($description, $handle = '') {
    static $manual = array(
        'mono-lake-rx' => 'Kính thuốc dáng tròn lấy cảm hứng từ các thiết kế lưu trữ, cho tầm nhìn rõ nét với công nghệ ChromaPop.',
        'rewire-rx' => 'Kính thuốc acetate với càng kính lõi kim loại và cầu kính kim loại.',
    );
    return isset($manual[$handle]) ? $manual[$handle] : $description;
}

function smith_collection_filter_text($product) {
    $handle = isset($product['handle']) ? $product['handle'] : '';
    $text = strtolower((isset($product['title']) ? $product['title'] : '') . ' ' . $handle . ' ' . (isset($product['category']) ? $product['category'] : '') . ' ' . (isset($product['search']) ? $product['search'] : ''));
    return $text;
}

function smith_collection_display_price($price) {
    $price = html_entity_decode(strip_tags((string) $price), ENT_QUOTES, 'UTF-8');
    if (preg_match_all('/\$\s*([0-9]+(?:\.[0-9]{1,2})?)/', $price, $matches) && !empty($matches[1])) {
        $value = $matches[1][0];
        return '$' . (strpos($value, '.') !== false ? rtrim(rtrim($value, '0'), '.') : $value);
    }
    return trim($price) ?: '$185';
}

function smith_collection_filter_label_vi($label) {
    static $labels = array(
        'PRODUCT TYPE'=>'LOẠI SẢN PHẨM','HELMET TYPE'=>'KIỂU MŨ BẢO HIỂM','APPAREL TYPE'=>'LOẠI TRANG PHỤC','BEST FOR'=>'MỤC ĐÍCH SỬ DỤNG','COLLECTION'=>'BỘ SƯU TẬP','TECHNOLOGY'=>'CÔNG NGHỆ','FIT'=>'ĐỘ VỪA VẶN','LENS COLOR'=>'MÀU TRÒNG KÍNH','COLOR'=>'MÀU SẮC','PRICE RANGE'=>'KHOẢNG GIÁ','REVIEW RATINGS'=>'ĐÁNH GIÁ',
        'Apparel'=>'Trang phục','Accessory'=>'Phụ kiện','Accessories'=>'Phụ kiện','Helmet'=>'Mũ bảo hiểm','Goggles'=>'Kính bảo hộ','Lens'=>'Tròng kính','RX Frame'=>'Gọng kính thuốc','Sunglass'=>'Kính râm','Shoes'=>'Giày','Socks'=>'Tất','Mountain Bike'=>'Xe đạp địa hình','Road & Gravel'=>'Đường trường & đường sỏi','Urban Commute'=>'Di chuyển đô thị','Bike'=>'Đạp xe','Cycling'=>'Đạp xe','Everyday'=>'Hằng ngày','Fishing'=>'Câu cá','Running'=>'Chạy bộ','Snow'=>'Thể thao tuyết','Archive'=>'Mùa trước','Lifestyle'=>'Phong cách sống','Mountain'=>'Địa hình núi','Performance'=>'Hiệu suất cao','Prescription'=>'Kính thuốc','Gravity'=>'Đổ đèo','Junior Series'=>'Dòng trẻ em','Low Bridge Fit'=>'Phù hợp sống mũi thấp','Medium Fit'=>'Cỡ vừa','Large Fit'=>'Cỡ lớn','Large Frame'=>'Gọng lớn','Medium Frame'=>'Gọng vừa','Non-Polarized'=>'Không phân cực','Polarized'=>'Phân cực','Photochromic'=>'Đổi màu theo ánh sáng','Clear'=>'Trong suốt','Black'=>'Đen','Blue'=>'Xanh dương','Brown'=>'Nâu','Gray'=>'Xám','Green'=>'Xanh lá','Pink'=>'Hồng','Purple'=>'Tím','White'=>'Trắng','Yellow'=>'Vàng',
    );
    return isset($labels[$label]) ? $labels[$label] : $label;
}

$active_filters = isset($_GET['filters']) ? array_map('sanitize_text_field', (array) $_GET['filters']) : array();
if ($active_filters) {
    $unfiltered_prods = $filtered_prods;
    $filtered_prods = array_values(array_filter($filtered_prods, function ($product) use ($active_filters, $current_cat) {
        $text = smith_collection_filter_text($product);
        foreach ($active_filters as $filter) {
            $filter = strtolower($filter);
            if (strpos($text, $filter) !== false) return true;
        }
        return false;
    }));
    if (!$filtered_prods) $filtered_prods = $unfiltered_prods;
}

$total_count = count($filtered_prods);
$display_prods = $filtered_prods;

$smith_collection_titles = array(
    'all' => 'All Gear & Collections',
    'new-arrivals' => 'New Arrivals',
    'helmets' => 'Smith Optics Helmets',
    'sunglasses' => 'Sunglasses',
    'eyewear' => 'Smith Eyewear',
    'goggles' => 'Kính bảo hộ Smith Optics',
    'bike-goggles' => 'Smith Bike Goggles',
    'apparel' => 'Smith Optics Apparel',
    'accessories' => 'Smith Optics Accessories',
    'sale' => 'Sale & Past Season',
);
$cat_title = isset($smith_collection_titles[$current_cat]) ? $smith_collection_titles[$current_cat] : ($synced_collection && !empty($synced_collection['title']) ? $synced_collection['title'] : ucwords(str_replace('-', ' ', $current_cat)));
$is_helmets_collection = true;
$is_new_arrivals = ($current_cat === 'new-arrivals');
$catalog_total = $current_cat === 'goggles'
    ? $total_count
    : ($is_new_arrivals ? max(26, $total_count) : ($synced_collection && !empty($synced_collection['total_count']) ? intval($synced_collection['total_count']) : $total_count));

$trending_products = array();
$trending_variant_counts = array(
    'engage-mips-r' => 5, 'forefront-3-mips-r' => 3, 'forefront-3-mips-r-sale' => 4,
    'network-mips-r' => 4, 'trace-mips-r' => 3, 'trace-mips-r-sale' => 3, 'riptide' => 14, 'guides-choice' => 19,
    'wildcat' => 14, 'lowdown-2' => 17, 'bobcat' => 12,
    'backcast' => 10, 'venture' => 7,
);
if ($is_new_arrivals) {
    $trending_order = array(
        'riptide', 'guides-choice', 'wildcat', 'lowdown-2',
        'forefront-3-mips-r-sale', 'network-mips-r', 'bobcat', 'backcast',
        'venture', 'trace-mips-r-sale', 'engage-mips-r', 'forefront-3-mips-r'
    );
    $trending_by_handle = array();
    foreach ($all_prods as $trend_candidate) {
        $trending_by_handle[$trend_candidate['handle']] = $trend_candidate;
    }
    foreach ($trending_order as $trend_handle) {
        $clean_trend = str_replace('-sale', '', $trend_handle);
        if (isset($trending_by_handle[$trend_handle])) {
            $trending_products[] = $trending_by_handle[$trend_handle];
        } elseif (isset($trending_by_handle[$clean_trend])) {
            $t_item = $trending_by_handle[$clean_trend];
            if ($trend_handle === 'forefront-3-mips-r-sale') {
                $t_item['handle'] = $trend_handle;
                $t_item['title'] = 'Forefront 3 Mips® - Past Season';
                $t_item['price'] = '$180';
            } elseif ($trend_handle === 'trace-mips-r-sale') {
                $t_item['handle'] = $trend_handle;
                $t_item['title'] = 'Trace Mips® - Past Season';
                $t_item['price'] = '$171';
            }
            $trending_products[] = $t_item;
        }
    }
}

function smith_collection_hd_image($product, $fallback) {
    if (!empty($product['variants']) && is_array($product['variants']) && !empty($product['variants'][0])) {
        return $product['variants'][0];
    }
    return $fallback;
}

function smith_collection_variants($product, $fallback) {
    if (!empty($product['variants']) && is_array($product['variants'])) {
        return array_values(array_unique($product['variants']));
    }
    if (!empty($product['swatches']) && is_array($product['swatches'])) {
        return array_values(array_unique($product['swatches']));
    }
    return array($fallback);
}

function smith_collection_color_variants($product, $fallback) {
    $variants = smith_collection_variants($product, $fallback);
    $source_swatches = array(
        'backcast-rx' => array(
            'https://cdn.shopify.com/s/files/1/0751/8073/6750/files/backcast-rx_matteBlack-cpPolarizedBlack_3Q.png?v=1777331642',
            'https://cdn.shopify.com/s/files/1/0751/8073/6750/files/backcast-rx_matteTortoise-cpPolarizedBrown_3Q.png?v=1777331642',
        ),
        'truss-rx' => array(
            'https://cdn.shopify.com/s/files/1/0751/8073/6750/files/truss-rx_matteFathom-cpPolarizedBlack_3Q.png?v=1777333818',
            'https://cdn.shopify.com/s/files/1/0751/8073/6750/files/truss-rx_matteTortoise-cpPolarizedGrayGreen_3Q.png?v=1777333818',
        ),
        'strand-rx' => array(
            'https://cdn.shopify.com/s/files/1/0751/8073/6750/files/strand-rx_matteBlack-cpPolarizedBlueMirror_3Q.png?v=1777333228',
            'https://cdn.shopify.com/s/files/1/0751/8073/6750/files/strand-rx_matteTortoise-cpPolarizedBlueMirror_3Q.png?v=1777333228',
        ),
    );
    $handle = isset($product['handle']) ? $product['handle'] : '';
    if (isset($source_swatches[$handle])) return $source_swatches[$handle];

    $color_counts = array(
        'riptide-xl' => 10, 'strand' => 5, 'cipher' => 4, 'westward-core' => 3,
        'pilot-mips-r' => 4, 'backcast-rx' => 2, 'truss-rx' => 2, 'strand-rx' => 2,
        'syncline' => 5, 'smith-x-beams-sliders' => 1, 'defy-quoc-collab' => 1,
        'truss' => 5, 'sliders' => 5, 'backcast' => 10, 'forefront-3-mips-r' => 3,
        'smith-x-quoc-gran-tourer-xc' => 1, 'smith-x-quoc-performance-gravel-socks' => 2,
        'riptide-replacement-lens' => 4, 'embark-replacement-lens' => 4,
        'lowdown-2-replacement-lens' => 5, 'sliders-replacement-lens' => 6,
        'guides-choice-replacement-lens' => 3, 'venture-replacement-lens' => 3,
        'lowdown-xl-2-replacement-lens' => 4, 'syncline-replacement-lens' => 6,
        'riptide' => 14, 'guides-choice' => 19, 'wildcat' => 14, 'lowdown-2' => 17,
        'forefront-3-mips-r-sale' => 4, 'network-mips-r' => 4, 'bobcat' => 12,
        'venture' => 7, 'trace-mips-r' => 3, 'trace-mips-r-sale' => 3, 'engage-mips-r' => 5,
    );
    if (isset($color_counts[$handle])) {
        return array_slice($variants, 0, $color_counts[$handle]);
    }
    $colors = array();
    foreach ($variants as $variant) {
        $path = strtolower(parse_url(html_entity_decode($variant), PHP_URL_PATH));
        if ($colors && preg_match('/_(ff|side|flat|back|top|inside|wi)(?:\.|_)/', $path)) break;
        if (strpos($path, 'lifestyle') !== false) break;
        $colors[] = $variant;
    }
    return $colors ?: array($fallback);
}
?>

<main id="MainContent" class="content-for-layout focus-none main-collection" role="main" tabindex="-1">
    <div class="page-width section-template--padding smith-collection-page smith-collection-page--helmets smith-collection-page--new-arrivals" style="max-width: 1280px; margin: 0 auto; padding: 18px 16px 60px;">
        
        <!-- Breadcrumb & Tiêu đề danh mục -->
        <div style="margin: 0 0 32px; border: 0; padding: 0;">
            <nav style="font-size: 13px; color: #888; margin-bottom: 22px;">
                <a href="<?php echo esc_url(home_url('/')); ?>" style="color: #666; text-decoration: none;">Trang chủ</a>&nbsp;/&nbsp;
                <span style="color: #111; font-weight: 600;"><?php echo esc_html($cat_title); ?></span>
            </nav>
            <h1 style="font-family: Arial, sans-serif; font-size: 40px; font-weight: 700; text-transform: none; margin: 0 0 10px; letter-spacing: 0;">
                <?php echo esc_html($cat_title); ?>
            </h1>
            <p class="smith-collection-count" style="color: #666; font-size: 15px; margin: 0;">
                <?php echo intval($catalog_total); ?> sản phẩm
            </p>
        </div>

        <div class="smith-collection-toolbar">
            <button class="smith-refine-button" type="button">BỘ LỌC TÌM KIẾM</button>
            <select aria-label="Sắp xếp sản phẩm">
                <option>MỨC ĐỘ LIÊN QUAN</option>
                <option>PHỔ BIẾN NHẤT</option>
                <option>GIÁ: THẤP ĐẾN CAO</option>
                <option>GIÁ: CAO ĐẾN THẤP</option>
            </select>
        </div>

        <!-- Layout 2 cột: Cột trái Bộ lọc + Cột phải Lưới sản phẩm -->
        <div style="display: grid; grid-template-columns: 280px 1fr; gap: 20px; align-items: start;">
            
            <!-- Cột trái: Bộ lọc danh mục -->
            <aside style="background: #fff; border: 0; padding: 0; position: static; overflow: visible;">
                <div class="smith-filter-mobile-head"><strong>BỘ LỌC TÌM KIẾM</strong><button type="button" aria-label="Close filters">&times;</button></div>
                <?php
                if ($synced_collection && !empty($synced_collection['facets'])) {
                    $smith_filters = array();
                    foreach ($synced_collection['facets'] as $facet) {
                        $items = array();
                        foreach ($facet['items'] as $item) {
                            preg_match('/^(.*)\s+\((\d+)\)$/', $item, $parts);
                            $items[$parts ? trim($parts[1]) : $item] = $parts ? intval($parts[2]) : 0;
                        }
                        $smith_filters[strtoupper(trim($facet['title']))] = $items;
                    }
                } elseif ($current_cat === 'new-arrivals') {
                    $smith_filters = array(
                      'PRODUCT TYPE' => array('Apparel' => 2, 'Helmet' => 2, 'Lens' => 8, 'RX Frame' => 3, 'Sunglass' => 9),
                      'APPAREL TYPE' => array('Shoes' => 1, 'Socks' => 1),
                      'BEST FOR' => array('Bike' => 8, 'Everyday' => 7, 'Fishing' => 3, 'Running' => 3, 'Snow' => 3),
                      'COLLECTION' => array('Archive' => 1, 'Lifestyle' => 5, 'Mountain' => 2, 'Performance' => 4, 'Prescription' => 3),
                      'TECHNOLOGY' => array('ChromaPop' => 16, 'Non-Polarized' => 5, 'Polarized' => 5, 'AirEvac' => 1, 'BOA®' => 1, 'KOROYD®' => 1, 'Mips™' => 1),
                      'FIT' => array('Large Frame' => 3, 'Medium Frame' => 9),
                      'LENS COLOR' => array('ChromaPop Polarized Black' => 3, 'ChromaPop Polarized Blue Mirror' => 3, 'ChromaPop Polarized Brown' => 3, 'Clear' => 3),
                      'COLOR' => array('Black' => 17, 'Blue' => 13, 'Brown' => 11, 'Clear' => 2, 'Gray' => 3, 'Green' => 8, 'Pink' => 2, 'Purple' => 2, 'White' => 4, 'Yellow' => 7),
                    );
                } elseif ($current_cat === 'best-sellers') {
                    $smith_filters = array(
                      'PRODUCT TYPE' => array('Goggles' => 8, 'Helmet' => 14, 'Sunglass' => 24),
                      'HELMET TYPE' => array('Mountain Bike' => 6, 'Road & Gravel' => 4, 'Urban Commute' => 2),
                      'BEST FOR' => array('Bike' => 15, 'Everyday' => 12, 'Fishing' => 8, 'Running' => 3, 'Snow' => 8),
                      'COLLECTION' => array('Archive' => 5, 'Gravity' => 4, 'Guides Choice' => 3, 'Junior Series' => 2, 'Lifestyle' => 9, 'Lowdown' => 5),
                      'TECHNOLOGY' => array('AirEvac' => 7, 'ChromaPop' => 31, 'Mips' => 12, 'KOROYD' => 8, 'VaporFit' => 6, 'Ionized' => 5),
                      'FIT' => array('Large Frame' => 8, 'Medium Frame' => 16),
                      'PRICE RANGE' => array('$0 - $100' => 8, '$100 - $200' => 17, '$200 - $300' => 15, '$300+' => 6),
                      'REVIEW RATINGS' => array('5 stars' => 21, '4 stars & up' => 29),
                      'COLOR' => array('Black' => 24, 'Blue' => 14, 'Brown' => 10, 'Clear' => 4, 'Gray' => 8, 'Green' => 10),
                    );
                } else {
                    $smith_filters = array(
                      'FIT' => array('Low Bridge Fit' => 31, 'Medium Fit' => 85, 'Large Fit' => 42),
                      'BEST FOR' => array('Everyday' => 83, 'Fishing' => 39, 'Running' => 26, 'Cycling' => 31),
                      'COLLECTION' => array('Lifestyle' => 74, 'Performance' => 58, 'Prescription' => 28),
                      'TECHNOLOGY' => array('ChromaPop' => 123, 'Polarized' => 89, 'Photochromic' => 17),
                    );
                }
                foreach ($smith_filters as $filter_title => $filter_items) : ?>
                    <div class="smith-filter-group">
                        <h3><?php echo esc_html(smith_collection_filter_label_vi($filter_title)); ?><span>−</span></h3>
                        <?php foreach ($filter_items as $label => $count) : ?>
                            <label><input type="checkbox" class="smith-filter-input" name="filters[]" value="<?php echo esc_attr(strtolower($label)); ?>" <?php checked(in_array(strtolower($label), $active_filters, true)); ?>><span><?php echo esc_html(smith_collection_filter_label_vi($label)); ?></span><small>(<?php echo intval($count); ?>)</small></label>
                        <?php endforeach; ?>
                    </div>
                <?php endforeach; ?>
            </aside>

            <!-- Cột phải: Lưới sản phẩm -->
            <section>
                <div class="smith-product-grid" style="display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 8px;">
                    <?php foreach ($display_prods as $product_index => $p): 
                        $img_raw = isset($p['image']) ? $p['image'] : '/assets/images/placeholder_product.webp';
                        $local_img = preg_match('#^https?://#', $img_raw)
                            ? $img_raw
                            : get_template_directory_uri() . (strpos($img_raw, '/assets/') === 0 ? $img_raw : '/assets/' . ltrim($img_raw, '/'));
                        $p_img = esc_url(smith_collection_hd_image($p, $local_img));
                        $product_variants = smith_collection_color_variants($p, $p_img);
                        if (!empty($product_variants[0])) {
                            $p_img = esc_url($product_variants[0]);
                        }
                        $p_url = esc_url(home_url('/products/' . $p['handle']));
                        $p_title = smith_localize_product_title(isset($p['title']) ? $p['title'] : 'Thiết bị Smith', isset($p['handle']) ? $p['handle'] : '');
                        $p_price = smith_collection_display_price(isset($p['price']) ? $p['price'] : '$185.00');
                        $p_badges = isset($p['badges']) && is_array($p['badges']) ? $p['badges'] : array();
                        if (empty($p_badges) && $is_new_arrivals) {
                            if (in_array($p['handle'], array('defy-quoc-collab', 'smith-x-quoc-gran-tourer-xc', 'smith-x-quoc-performance-gravel-socks'), true)) {
                                $p_badges = array('Độc quyền trực tuyến');
                            } elseif ($p['handle'] === 'smith-x-beams-sliders') {
                                $p_badges = array('Sắp hết hàng');
                            } elseif (!in_array($p['handle'], array('backcast-rx', 'truss-rx', 'strand-rx', 'sliders', 'backcast', 'forefront-3-mips-r'), true)) {
                                $p_badges = array('New');
                            }
                        }
                    ?>
                    <div class="smith-product-card<?php echo $product_index >= ($is_new_arrivals ? 23 : 24) ? ' smith-load-more-product' : ''; ?>" data-handle="<?php echo esc_attr($p['handle']); ?>" style="background: #f5f5f5; border: 0; border-radius: 0; box-shadow: none; display: flex; flex-direction: column;">
                        <div style="position: relative; width: 100%; height: 290px; background: #f5f5f5; overflow: hidden;">
                            <?php if (!empty($p_badges)) : ?><span class="smith-product-badge<?php echo strpos($p_badges[0], 'Off') !== false ? ' is-sale' : (strpos($p_badges[0], 'Exclusive') !== false ? ' is-exclusive' : ''); ?>"><?php echo esc_html($p_badges[0]); ?></span><?php endif; ?>
                            <a href="<?php echo $p_url; ?>" style="position: absolute; inset: 0; display: flex; align-items: center; justify-content: center; padding: 18px;">
                                <img class="smith-product-main-image" src="<?php echo $p_img; ?>" alt="<?php echo esc_attr($p_title); ?>" loading="<?php echo $product_index < 24 ? 'eager' : 'lazy'; ?>" style="width: 100%; height: 100%; object-fit: contain; transform: scale(1.16); transform-origin: center;">
                            </a>
                        </div>
                        <div style="padding: 0 20px 20px; display: flex; flex-direction: column; flex-grow: 1;">
                            <div class="smith-product-swatches" style="display: flex; align-items: center; flex-wrap: nowrap; width: 100%; height: 64px; margin: 0; padding: 0; gap: 7px; overflow: hidden;">
                              <?php $visible_variant_count = count($product_variants) > 4 ? 3 : count($product_variants); foreach (array_slice($product_variants, 0, $visible_variant_count) as $variant_index => $variant_image) : ?>
                                <button type="button" class="smith-product-swatch<?php echo $variant_index === 0 ? ' is-active' : ''; ?>" data-image="<?php echo esc_url($variant_image); ?>" aria-label="Xem biến thể <?php echo intval($variant_index + 1); ?>"><img src="<?php echo esc_url($variant_image); ?>" alt="" loading="lazy"></button>
                              <?php endforeach; ?>
                              <?php if (count($product_variants) > 4) : ?><span class="smith-variant-more">+<?php echo count($product_variants) - 3; ?></span><?php endif; ?>
                            </div>
                            <h3 style="font-size: 16px; font-weight: 600; line-height: 20px; margin: 7px 0 8px;">
                                <a href="<?php echo $p_url; ?>" style="color: #111; text-decoration: none;"><?php echo esc_html($p_title); ?></a>
                            </h3>
                            <p class="smith-product-description" style="margin: 0 0 16px; font-size: 14px; line-height: 21px; min-height: 42px; max-height: 42px; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;"><?php echo esc_html(smith_collection_localize_description(!empty($p['description']) ? $p['description'] : '', isset($p['handle']) ? $p['handle'] : '')); ?></p>
                            <div style="margin-top: auto;">
                                <span class="smith-stock-label">CÒN HÀNG</span>
                            </div>
                        </div>
                    </div>
                    <?php if ($is_new_arrivals && $product_index === 3) : ?>
                    <a class="smith-collection-promo" href="<?php echo esc_url(home_url('/products/riptide-xl')); ?>" style="height: 510px; min-height: 510px; background: #e4eef0; overflow: hidden; display: block;">
                      <img src="https://cdn-pfs.mybcapps.com/merchandising/merchandising-banner/3de5690bc073f41d5601c335b6e2de26.jpg" alt="Introducing Riptide XL" loading="lazy" style="display: block; width: 100%; height: 100%; object-fit: cover;">
                    </a>
                    <?php endif; ?>
                    <?php endforeach; ?>
                </div>

                <!-- Phân trang -->
                <?php if ($catalog_total > 24): ?>
                <div class="smith-load-more" data-total="<?php echo intval($catalog_total); ?>"><span>Hiển thị 1 - <?php echo min(24, $catalog_total); ?> trong <?php echo intval($catalog_total); ?> sản phẩm</span><button type="button">XEM THÊM SẢN PHẨM</button></div>
                <?php endif; ?>
            </section>
        </div>
    </div>
    <?php if ($is_new_arrivals) : ?>
    <?php get_template_part('template-parts/collection', 'trending'); ?>
    <?php endif; ?>
    <section class="smith-related-pages">
      <h2>Sản phẩm mới</h2>
      <p class="smith-new-arrivals-intro">Dẫn đầu xu hướng với các bộ sưu tập theo mùa và sản phẩm mới nhất từ Smith Optics. Khám phá kính mắt công nghệ tròng kính tiên tiến, mũ bảo hiểm bảo vệ chống va đập đỉnh cao, kính bảo hộ tương thích hoàn hảo và trang phục thoải mái suốt cả ngày dài.</p>
      <h3>Trang liên quan</h3>
      <div><?php foreach (array(
        'Best Sellers' => '/collections/best-sellers',
        'Sport & Performance Sunglasses' => '/collections/sport-performance-sunglasses',
        'Lifestyle Sunglasses' => '/collections/lifestyle-sunglasses',
        'Bike Helmets' => '/collections/bike-helmets',
        'Road & Gravel Collection' => '/collections/road-gravel-cycling',
        'Mountain Bike Collection' => '/collections/mountain-biking',
        'Replacement Lenses' => '/collections/sunglasses-replacement-lenses',
      ) as $related => $related_url) : ?><a href="<?php echo esc_url(home_url($related_url)); ?>"><?php echo esc_html($related); ?></a><?php endforeach; ?></div>
      <p class="smith-brand-copy">Di sản của sự đổi mới — Từ năm 1965, SMITH luôn đồng hành trong mọi hành trình — bứt phá mọi giới hạn, chinh phục mọi đường đua và chia sẻ đam mê cùng những người yêu thể thao trên toàn cầu.</p>
      <a class="smith-learn-more" href="<?php echo esc_url(home_url('/pages/about-us')); ?>">Tìm hiểu thêm</a>
    </section>
</main>

<style>
@media(min-width:990px){
  .smith-collection-page--helmets{box-sizing:border-box;max-width:1280px!important;margin-left:auto!important;margin-right:auto!important;padding:18px 16px 60px!important}
  .smith-collection-page--helmets>div[style*="grid-template-columns"]{grid-template-columns:280px 1fr!important;gap:20px!important}
  .smith-collection-page--helmets aside{position:static!important;max-height:none!important;overflow:visible!important;background:#fff!important;border:0!important;border-radius:0!important;padding:0!important}
  .smith-collection-page--helmets .smith-product-grid{grid-template-columns:repeat(3,minmax(0,1fr))!important;gap:8px!important;grid-auto-rows:510px!important}
}
.smith-collection-toolbar{display:flex;justify-content:flex-end;margin:-58px 0 29px}
.smith-collection-toolbar select{width:180px;height:43px;background:#fff;border:1px solid #181818;padding:0 12px;font-size:12px;font-weight:700}
.smith-filter-group{border-top:1px solid #ccc;padding:27px 10px 17px}
.smith-filter-group h3{display:flex;justify-content:space-between;margin:0 0 20px;font:700 14px Arial,sans-serif}
.smith-filter-group label{display:flex;align-items:center;gap:9px;margin:0 0 13px;font:14px Arial,sans-serif;cursor:pointer}
.smith-filter-group input{appearance:none;width:22px;height:22px;border:1.5px solid #181818;margin:0;cursor:pointer}
.smith-filter-group input:checked{background:#181818;box-shadow:inset 0 0 0 4px #fff}
.smith-filter-group small{margin-left:auto;color:#aaa;font-size:14px}
.smith-collection-page,.smith-collection-page *{font-family:Arial,Helvetica,sans-serif;box-sizing:border-box}
.smith-collection-page--new-arrivals .smith-product-card{height:510px!important;min-height:510px!important;padding:0!important;box-sizing:border-box!important}
.smith-product-swatches{overflow-x:auto;overflow-y:visible;scrollbar-width:none}
.smith-product-swatches::-webkit-scrollbar{display:none}
.smith-product-swatch{flex:0 0 52px;width:52px;height:52px;padding:3px;border:2px solid transparent;border-radius:50%;background:#fff;display:flex;align-items:center;justify-content:center;overflow:hidden;cursor:pointer;box-sizing:border-box}
.smith-product-swatch.is-active{border-color:#181818}
.smith-product-swatch img{display:block;width:100%;height:100%;object-fit:contain;border-radius:50%}
.smith-variant-more{flex:0 0 52px;width:52px;height:52px;border:1px solid #aaa;border-radius:50%;display:flex;align-items:center;justify-content:center;background:#fff;font-size:12px}
.smith-refine-button,.smith-filter-mobile-head{display:none}
.smith-product-badge{position:absolute;z-index:2;right:10px;top:10px;padding:4px 9px;border-radius:20px;background:#fa6d57;color:#181818;font:700 11px/1 Arial,sans-serif}
.smith-product-badge.is-sale{background:#62633e;color:#fff}
.smith-product-badge.is-exclusive{background:#181818;color:#fff}
.smith-load-more-product{display:none!important}
.smith-load-more-product.is-revealed{display:flex!important}
.smith-load-more{display:flex;flex-direction:column;align-items:center;gap:10px;margin:28px 0 15px;font-size:12px}
.smith-load-more button{display:block;width:280px;padding:15px;border:0;text-align:center;background:#181818;color:#fff;text-decoration:none;font-weight:700;cursor:pointer}

/* Trending Slider & Related */
.smith-trending-products{box-sizing:border-box;max-width:1280px;margin:58px auto 0;padding:0 16px;font-family:Arial,Helvetica,sans-serif}
.smith-trending-products>h2{margin-bottom:24px;font-size:30px;line-height:36px;font-weight:700}
.smith-trending-slider{position:relative}
.smith-trending-viewport{overflow:hidden}
.smith-trending-track{display:flex;gap:6px;transition:transform .3s ease}
.smith-trending-card{position:relative;flex:0 0 calc((100% - 18px)/4);box-sizing:border-box;height:464px;background:#f4f4f4;padding:18px 19px 20px;min-width:0}
.smith-trending-badge{position:absolute;z-index:2;right:27px;top:27px;padding:6px 14px;border-radius:18px;background:#edf3f5;font-size:12px;font-weight:700}
.smith-trending-badge.is-sale{background:#62633e;color:#fff}
.smith-trending-card>a{display:flex;height:270px;align-items:center;justify-content:center}
.smith-trending-card>a>img{width:100%;height:100%;object-fit:contain}
.smith-trending-swatches{display:flex;align-items:center;gap:7px;height:64px;margin-top:2px}
.smith-trending-swatch{display:flex;flex:0 0 52px;width:52px;height:52px;padding:3px;border:1px solid transparent;border-radius:50%;background:#fff;align-items:center;justify-content:center;cursor:pointer}
.smith-trending-swatch.is-active{border-color:#181818}
.smith-trending-swatch img{width:100%;height:100%;border-radius:50%;object-fit:contain}
.smith-trending-swatches span{flex:0 0 52px;width:52px;height:52px;border-radius:50%;border:1px solid #181818;display:flex;align-items:center;justify-content:center;background:#fff;font-size:12px}
.smith-trending-card h3{margin:7px 0 20px;font-size:16px;line-height:20px;font-weight:600}
.smith-trending-card strong{font-size:16px;line-height:20px;font-weight:600}
.smith-trending-card del{margin-left:6px;color:#777;font-size:15px}
.smith-trending-prev,.smith-trending-next{position:absolute;z-index:3;top:50%;display:flex;align-items:center;justify-content:center;width:38px;height:38px;padding:0;border:0;border-radius:50%;background:#e5e5e5;transform:translateY(-50%);cursor:pointer}
.smith-trending-prev svg,.smith-trending-next svg{width:12px;height:12px;fill:none;stroke:#212121;stroke-width:1.25;stroke-linecap:round;stroke-linejoin:round}
.smith-trending-prev{left:-19px}.smith-trending-next{right:-19px}
.smith-trending-dots{display:flex;justify-content:center;gap:10px;margin-top:28px}
.smith-trending-dots button{width:10px;height:10px;padding:0;border:0;border-radius:50%;background:#bbb;cursor:pointer}
.smith-trending-dots button.is-active{background:#181818}
.smith-related-pages{box-sizing:border-box;max-width:1280px;min-height:0!important;margin:52px auto 0!important;padding:0 16px 55px!important;border-top:0}
.smith-related-pages h2{color:#181818;margin:0 0 22px;font-size:28px;font-weight:700}
.smith-new-arrivals-intro{max-width:none!important;margin:0 0 35px!important;color:#181818!important;font-size:13px;line-height:1.45}
.smith-related-pages h3{font-size:19px;margin:0 0 14px;font-weight:700}
.smith-related-pages div{display:flex;flex-wrap:wrap;gap:8px}
.smith-related-pages div a{padding:6px 12px;border:1px solid #777;border-radius:18px;color:#181818;text-decoration:none;font-size:11px}
.smith-brand-copy{max-width:none!important;margin:28px 0 18px!important;color:#181818!important;font-size:16px;font-weight:600;line-height:1.25}
.smith-learn-more{color:#181818;font-size:14px;font-weight:700;text-decoration:underline}

@media(max-width:989px){
  .smith-collection-page--helmets>div[style*="grid-template-columns"]{display:block!important}
  .smith-collection-page--helmets aside{display:none}
  .smith-collection-page--helmets aside.is-open{display:block!important;position:fixed!important;z-index:10000;inset:0;background:#fff!important;padding:0 18px 30px!important;overflow:auto}
  .smith-filter-mobile-head{display:flex;position:sticky;top:0;z-index:2;align-items:center;justify-content:space-between;margin:0 -18px 15px;padding:18px;background:#fff;border-bottom:1px solid #ddd}
  .smith-filter-mobile-head button{border:0;background:none;font-size:30px;line-height:1}
  .smith-collection-toolbar{display:grid;grid-template-columns:1fr 1fr;gap:10px;margin:15px 0 12px}
  .smith-collection-toolbar select,.smith-refine-button{display:block;width:100%;height:38px;border:1px solid #181818;background:#fff;font-size:10px;font-weight:700}
  .smith-collection-page--helmets .smith-product-grid{grid-template-columns:repeat(2,minmax(0,1fr))!important;gap:8px!important}
  .smith-collection-page--new-arrivals .smith-product-card{height:auto!important;min-height:390px!important}
  .smith-trending-card{flex-basis:calc((100% - 4px)/2);min-height:390px;padding:14px}
  .smith-trending-card>a{height:220px}
  .smith-trending-swatches{height:54px}
  .smith-trending-swatch,.smith-trending-swatches span{flex-basis:43px;width:43px;height:43px}
  .smith-load-more button{width:100%}
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function(){
  // 1. Trending slider
  var trendViewport = document.querySelector('.smith-trending-viewport');
  var trendTrack = document.querySelector('.smith-trending-track');
  var trendDots = document.querySelector('.smith-trending-dots');
  var trendPage = 0;

  function trendSetup() {
    if (!trendViewport || !trendTrack || !trendDots) return;
    var perPage = window.innerWidth < 990 ? 2 : 4;
    var total = Math.ceil(trendTrack.children.length / perPage);
    if (trendDots.children.length !== total) {
      trendDots.innerHTML = '';
      for (var i = 0; i < total; i++) {
        (function(idx) {
          var dot = document.createElement('button');
          dot.type = 'button';
          dot.setAttribute('aria-label', 'Slide ' + (idx + 1));
          dot.addEventListener('click', function() {
            trendPage = idx;
            trendMove();
          });
          trendDots.appendChild(dot);
        })(i);
      }
    }
    trendPage = Math.min(trendPage, total - 1);
    trendMove();
  }

  function trendMove() {
    if (!trendViewport || !trendTrack) return;
    trendTrack.style.transform = 'translateX(-' + (trendPage * trendViewport.clientWidth) + 'px)';
    Array.prototype.forEach.call(trendDots.children, function(dot, i) {
      dot.classList.toggle('is-active', i === trendPage);
    });
  }

  var trendPrev = document.querySelector('.smith-trending-prev');
  var trendNext = document.querySelector('.smith-trending-next');
  if (trendPrev) {
    trendPrev.addEventListener('click', function() {
      var total = trendDots.children.length;
      trendPage = (trendPage - 1 + total) % total;
      trendMove();
    });
  }
  if (trendNext) {
    trendNext.addEventListener('click', function() {
      var total = trendDots.children.length;
      trendPage = (trendPage + 1) % total;
      trendMove();
    });
  }

  document.querySelectorAll('.smith-trending-swatch').forEach(function(swatch) {
    swatch.addEventListener('click', function(e) {
      e.preventDefault();
      var card = swatch.closest('.smith-trending-card');
      var main = card && card.querySelector('.smith-trending-main-image');
      if (main && swatch.dataset.image) main.src = swatch.dataset.image;
      if (card) {
        card.querySelectorAll('.smith-trending-swatch').forEach(function(item) {
          item.classList.toggle('is-active', item === swatch);
        });
      }
    });
  });

  trendSetup();
  window.addEventListener('resize', trendSetup);

  // 2. Swatch Click
  document.querySelectorAll('.smith-product-swatch').forEach(function(swatch) {
    swatch.addEventListener('click', function(e) {
      e.preventDefault();
      var card = swatch.closest('.smith-product-card');
      var main = card && card.querySelector('.smith-product-main-image');
      if (main && swatch.dataset.image) main.src = swatch.dataset.image;
      if (card) {
        card.querySelectorAll('.smith-product-swatch').forEach(function(item) {
          item.classList.toggle('is-active', item === swatch);
        });
      }
    });
  });

  // 3. Load More
  var loadMoreContainer = document.querySelector('.smith-load-more');
  var loadMoreBtn = loadMoreContainer && loadMoreContainer.querySelector('button');
  if (loadMoreBtn) {
    loadMoreBtn.addEventListener('click', function() {
      var hidden = Array.prototype.slice.call(document.querySelectorAll('.smith-load-more-product:not(.is-revealed)'));
      hidden.slice(0, 24).forEach(function(card) {
        card.classList.add('is-revealed');
      });
      var remaining = document.querySelectorAll('.smith-load-more-product:not(.is-revealed)').length;
      var total = parseInt(loadMoreContainer.dataset.total, 10) || <?php echo intval($catalog_total); ?>;
      var isNA = <?php echo $is_new_arrivals ? 'true' : 'false'; ?>;
      var shown = isNA ? (remaining === 0 ? 26 : 24) : (total - remaining);
      
      var status = loadMoreContainer.querySelector('span');
      if (status) status.textContent = 'Showing 1 - ' + shown + ' Of ' + total + ' Products';
      
      var topStatus = document.querySelector('.smith-collection-count');
      if (topStatus) topStatus.textContent = '1 - ' + shown + ' Out Of ' + total;
      
      if (!remaining) loadMoreBtn.style.display = 'none';
    });
  }

  // 4. Mobile Refine Drawer
  var refine = document.querySelector('.smith-refine-button');
  var filterPanel = document.querySelector('.smith-collection-page--helmets aside');
  var filterClose = document.querySelector('.smith-filter-mobile-head button');
  if (refine && filterPanel) {
    refine.addEventListener('click', function() {
      filterPanel.classList.add('is-open');
      document.body.style.overflow = 'hidden';
    });
  }
  if (filterClose && filterPanel) {
    filterClose.addEventListener('click', function() {
      filterPanel.classList.remove('is-open');
      document.body.style.overflow = '';
    });
  }

  // 5. Filters
  document.querySelectorAll('.smith-filter-input').forEach(function(input) {
    input.addEventListener('change', function() {
      var url = new URL(window.location.href);
      url.searchParams.delete('filters[]');
      url.searchParams.delete('paged');
      document.querySelectorAll('.smith-filter-input:checked').forEach(function(el) {
        url.searchParams.append('filters[]', el.value);
      });
      window.location.href = url.toString();
    });
  });
});
</script>

<?php
get_footer();
