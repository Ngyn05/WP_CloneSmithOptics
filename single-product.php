<?php
/**
 * Exact 1:1 Smith Optics Product Detail Template
 * Complete with:
 * - Floating Sticky Top Bar on scroll (Thumbnail, Title, Price, Add to Cart)
 * - Multi-image mosaic gallery & sticky buy box with rectangular swatches
 * - "Why We Love It", Spec rows, "Complete Your Kit" mini carousel
 * - 3-Column Storytelling feature cards with authentic photography
 * - Full Product Details & Specs (Description, Tech breakdowns, What's Included, Dimensions diagram)
 * - "Find Your Perfect Fishing Lens" banner block
 * - "You May Also Like" carousel with badges, swatches, +X count bubbles and dot indicators
 * - Review CTA section ("Be the first to write a review")
 *
 * @package Smith_Optics
 */

get_header();

// 1. Lấy handle sản phẩm từ URL router
$smith_product = get_query_var('smith_product');
if (empty($smith_product)) {
    $request_uri = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '';
    $path = trim(strtok($request_uri, '?'), '/');
    if (preg_match('#products(?:/(.*))?$#i', $path, $matches)) {
        $smith_product = isset($matches[1]) ? trim($matches[1], '/') : '';
    }
}
if (empty($smith_product)) {
    $smith_product = 'riptide-xl';
}

// 2. Nạp chi tiết sản phẩm qua helper với cache và auto-fetch
$prod = smith_get_product_detail($smith_product);
if (!$prod) {
    $prod = smith_get_product_detail('riptide-xl');
}

$title = smith_localize_product_title(!empty($prod['title']) ? $prod['title'] : ucwords(str_replace('-', ' ', $smith_product)), $smith_product);
$vendor = !empty($prod['vendor']) ? $prod['vendor'] : 'Smith Optics';
$product_type = !empty($prod['product_type']) ? $prod['product_type'] : 'Sunglass';
$variants = !empty($prod['variants']) && is_array($prod['variants']) ? $prod['variants'] : array();
$images = !empty($prod['images']) && is_array($prod['images']) ? $prod['images'] : array();
$options = !empty($prod['options']) && is_array($prod['options']) ? $prod['options'] : array();
$recommendations = !empty($prod['recommendations']) && is_array($prod['recommendations']) ? $prod['recommendations'] : array();

// 3. Phân loại danh mục sản phẩm. Cache hiện có cả product_type tiếng Anh
// lẫn tiếng Việt, vì vậy phải nhận diện hai ngôn ngữ và giữ các nhóm loại trừ nhau.
$index_product = smith_get_product_by_handle($smith_product);
$index_category = !empty($index_product['category']) ? $index_product['category'] : '';
$p_type_lower = function_exists('mb_strtolower')
    ? mb_strtolower($product_type . ' ' . $index_category . ' ' . $title . ' ' . $smith_product, 'UTF-8')
    : strtolower($product_type . ' ' . $index_category . ' ' . $title . ' ' . $smith_product);
$contains_any = static function ($haystack, $needles) {
    foreach ($needles as $needle) {
        if (stripos($haystack, $needle) !== false) return true;
    }
    return false;
};

$is_helmet = $contains_any($p_type_lower, array('helmet', 'mũ bảo hộ', 'mũ bảo hiểm'));
$is_goggle = !$is_helmet && $contains_any($p_type_lower, array('goggle', 'kính bảo hộ'));
$is_apparel = !$is_helmet && !$is_goggle && $contains_any($p_type_lower, array(
    'apparel', 'trang phục', 'sock', 'tất ', 'shirt', 'tee', 'jersey', 'glove',
    'beanie', 'balaclava', 'hoodie', 'sweatpant', 'cap', 'mũ len', 'áo ', 'quần ', 'găng tay'
));
$is_accessory = !$is_helmet && !$is_goggle && $contains_any($p_type_lower, array(
    'accessory', 'phụ kiện', 'gift card', 'thẻ quà tặng', 'cleaning kit', 'retainer', 'adapter'
));
$is_sunglass = !$is_helmet && !$is_goggle && !$is_apparel && !$is_accessory && $contains_any($p_type_lower, array(
    'sunglass', 'kính râm', 'glasses', 'rx frame', 'gọng kính thuốc'
));
// Dữ liệu cũ không phải lúc nào cũng có type; chỉ dùng kính râm làm phương án cuối.
if (!$is_helmet && !$is_goggle && !$is_apparel && !$is_accessory && !$is_sunglass) {
    $is_accessory = $contains_any($p_type_lower, array('lens', 'tròng kính', 'liner', 'bag', 'case'));
    $is_sunglass = !$is_accessory;
}

$cat_slug = 'sunglasses';
$cat_name = 'Kính râm';
if ($is_helmet) {
    $cat_slug = 'helmets';
    $cat_name = 'Mũ bảo hiểm';
} elseif ($is_goggle) {
    $cat_slug = 'goggles';
    $cat_name = 'Kính bảo hộ';
} elseif ($is_apparel) {
    $cat_slug = 'apparel';
    $cat_name = 'Trang phục';
} elseif ($is_accessory) {
    $cat_slug = 'accessories';
    $cat_name = 'Phụ kiện';
}

// 4. Parse parsed body content
$parsed_body = smith_parse_product_body(!empty($prod['body_html']) ? $prod['body_html'] : '');
$catalog_short_description = '';
$catalog_file = get_template_directory() . '/assets/collections_catalog.json';
if (file_exists($catalog_file)) {
    $catalog_data = json_decode(file_get_contents($catalog_file), true);
    foreach ((array) $catalog_data as $collection) {
        foreach ((array) (isset($collection['products']) ? $collection['products'] : array()) as $card) {
            if (!empty($card['handle']) && $card['handle'] === $smith_product && !empty($card['description'])) {
                $catalog_short_description = $card['description'];
                break 2;
            }
        }
    }
}

// 5. Options
$has_color_option = false;
$has_size_option = false;
$color_values = array();
$size_values = array();
$color_option_position = 0;
$size_option_position = 0;

foreach ($options as $opt) {
    $opt_name = strtolower(remove_accents((string) $opt['name']));
    if (strpos($opt_name, 'color') !== false || strpos($opt_name, 'colour') !== false || strpos($opt_name, 'mau') !== false) {
        $has_color_option = true;
        $color_values = $opt['values'];
        $color_option_position = max(1, min(3, intval($opt['position'] ?? 1)));
    } elseif ($opt_name === 'co' || strpos($opt_name, 'size') !== false || strpos($opt_name, 'kich co') !== false || strpos($opt_name, 'kich thuoc') !== false) {
        $has_size_option = true;
        $size_values = $opt['values'];
        $size_option_position = max(1, min(3, intval($opt['position'] ?? 1)));
    }
}
if (!$has_color_option && !empty($variants)) {
    $has_color_option = true;
    $color_option_position = 1;
    foreach ($variants as $v) {
        $v_c = $v['option1'] ?: $v['title'];
        if (!in_array($v_c, $color_values)) $color_values[] = $v_c;
    }
}
$variant_option_value = static function ($variant, $position, $fallback = '') {
    if ($position >= 1 && $position <= 3) {
        $key = 'option' . $position;
        if (isset($variant[$key]) && $variant[$key] !== '') return $variant[$key];
    }
    return $fallback;
};

// 6. Xử lý variant ban đầu theo tham số query ?variant=...
$selected_variant_id = isset($_GET['variant']) ? trim($_GET['variant']) : '';
$current_variant = null;
if (!empty($selected_variant_id) && !empty($variants)) {
    foreach ($variants as $v) {
        if ((string)$v['id'] === (string)$selected_variant_id) {
            $current_variant = $v;
            break;
        }
    }
}
if (!$current_variant && !empty($variants)) {
    $current_variant = $variants[0];
}

$is_available = $current_variant ? !empty($current_variant['available']) : false;
$short_description = $catalog_short_description ?: (!empty($parsed_body['description']) ? html_entity_decode($parsed_body['description'], ENT_QUOTES, 'UTF-8') : '');
if ($short_description) {
    $short_description = preg_split('/(?<=[.!?])\s+/', $short_description, 2)[0];
}
$warranty_text = $is_helmet ? 'Bảo hành 3 năm' : ($is_apparel ? 'Bảo hành 1 năm' : 'Bảo hành trọn đời có giới hạn');

$current_price_num = $current_variant ? floatval(str_replace(array('$', ','), '', $current_variant['price'])) : 217.00;
$current_price_str = '$' . number_format($current_price_num, 2);
$current_compare_price_num = ($current_variant && !empty($current_variant['compare_at_price']))
    ? floatval(str_replace(array('$', ','), '', $current_variant['compare_at_price']))
    : 0;
$current_compare_price_str = $current_compare_price_num > $current_price_num
    ? '$' . number_format($current_compare_price_num, 2)
    : '';
$current_sku = $current_variant && !empty($current_variant['sku']) ? $current_variant['sku'] : '209834DL564UI';
$current_color_val = $current_variant ? $variant_option_value($current_variant, $color_option_position, $current_variant['title']) : (isset($color_values[0]) ? $color_values[0] : 'Standard');
$current_size_val = $current_variant ? $variant_option_value($current_variant, $size_option_position, ($has_size_option && !empty($size_values[0]) ? $size_values[0] : '')) : '';
$review_product_id = function_exists('smith_product_id_from_handle')
    ? smith_product_id_from_handle($smith_product)
    : 0;
$review_stats = ($review_product_id && function_exists('smith_review_stats'))
    ? smith_review_stats($review_product_id)
    : array('count' => 0, 'average' => 0);

// 7. Nhóm ảnh theo từng variant
$variant_data_map = array();
foreach ($variants as $v) {
    $v_id = $v['id'];
    $v_title = $v['title'];
    $v_opt1 = $variant_option_value($v, $color_option_position, $v_title);
    $v_opt2 = $variant_option_value($v, $size_option_position, '');
    $v_price = floatval(str_replace(array('$', ','), '', $v['price']));
    $v_compare_price = !empty($v['compare_at_price'])
        ? floatval(str_replace(array('$', ','), '', $v['compare_at_price']))
        : 0;
    
    $clean_v_title = strtolower(preg_replace('/[^a-zA-Z0-9]/', '', explode('|', $v_opt1)[0]));
    
    $v_3q = '';
    $v_ff = '';
    $v_side = '';
    $v_wi = '';
    $v_lifestyles = array();

    if (!empty($v['image_id'])) {
        foreach ($images as $img) {
            if ($img['id'] === $v['image_id']) {
                $v_3q = $img['src'];
                break;
            }
        }
    }

    foreach ($images as $img) {
        $src = $img['src'];
        $src_lower = strtolower($src);

        $is_match = false;
        if (!empty($img['variant_ids']) && in_array($v_id, $img['variant_ids'])) {
            $is_match = true;
        } elseif (strpos($src_lower, $clean_v_title) !== false) {
            $is_match = true;
        }

        if ($is_match) {
            if (strpos($src_lower, '_3q') !== false && empty($v_3q)) {
                $v_3q = $src;
            } elseif (strpos($src_lower, '_ff') !== false && empty($v_ff)) {
                $v_ff = $src;
            } elseif (strpos($src_lower, '_side') !== false && empty($v_side)) {
                $v_side = $src;
            } elseif (strpos($src_lower, '_wi') !== false && empty($v_wi)) {
                $v_wi = $src;
            } elseif (strpos($src_lower, 'lifestyle') !== false) {
                $v_lifestyles[] = $src;
            }
        }
    }

    if (empty($v_3q) && !empty($images)) $v_3q = $images[0]['src'];
    if (empty($v_ff) && count($images) > 1) $v_ff = $images[1]['src'];
    if (empty($v_side) && count($images) > 2) $v_side = $images[2]['src'];
    if (empty($v_wi) && count($images) > 3) $v_wi = $images[3]['src'];
    if (empty($v_lifestyles)) {
        foreach ($images as $img) {
            if (strpos(strtolower($img['src']), 'lifestyle') !== false) {
                $v_lifestyles[] = $img['src'];
            }
        }
    }

    $variant_data_map[$v_id] = array(
        'id' => $v_id,
        'title' => $v_title,
        'option1' => $v_opt1,
        'option2' => $v_opt2,
        'price' => number_format($v_price, 2),
        'compare_price' => $v_compare_price > $v_price ? number_format($v_compare_price, 2) : '',
        'sku' => !empty($v['sku']) ? $v['sku'] : $current_sku,
        'img_3q' => $v_3q,
        'img_ff' => $v_ff ?: $v_3q,
        'img_side' => $v_side ?: $v_3q,
        'img_wi' => $v_wi ?: $v_3q,
        'lifestyles' => $v_lifestyles
    );
}

$cur_v_id = $current_variant ? $current_variant['id'] : (isset($variants[0]) ? $variants[0]['id'] : 0);
$cur_v_data = isset($variant_data_map[$cur_v_id]) ? $variant_data_map[$cur_v_id] : (reset($variant_data_map) ?: array());

// Use this product's own media. The old fallback showed Riptide XL campaign
// photography on every PDP whose cache had previously been missing.
$product_image_urls = array();
foreach ($images as $image) {
    if (!empty($image['src'])) $product_image_urls[] = $image['src'];
}
$product_image_urls = array_values(array_unique($product_image_urls));
$initial_gallery_images = array();
foreach (array(
    !empty($cur_v_data['img_3q']) ? $cur_v_data['img_3q'] : '',
    !empty($cur_v_data['img_ff']) ? $cur_v_data['img_ff'] : '',
    !empty($cur_v_data['img_side']) ? $cur_v_data['img_side'] : '',
    !empty($cur_v_data['img_wi']) ? $cur_v_data['img_wi'] : '',
    !empty($cur_v_data['lifestyles'][0]) ? $cur_v_data['lifestyles'][0] : '',
) as $gallery_src) {
    if ($gallery_src && !in_array($gallery_src, $initial_gallery_images, true)) {
        $initial_gallery_images[] = $gallery_src;
    }
}
foreach ($product_image_urls as $gallery_src) {
    if (!in_array($gallery_src, $initial_gallery_images, true)) {
        $initial_gallery_images[] = $gallery_src;
    }
}
$story_candidates = array_values(array_filter($product_image_urls, function ($src) {
    return stripos($src, 'lifestyle') !== false || stripos($src, 'detail') !== false || stripos($src, 'hero') !== false;
}));
if (count($story_candidates) < 3) {
    $story_candidates = array_values(array_unique(array_merge($story_candidates, $product_image_urls)));
}
$story_img_1 = isset($story_candidates[0]) ? $story_candidates[0] : '';
$story_img_2 = isset($story_candidates[1]) ? $story_candidates[1] : $story_img_1;
$story_img_3 = isset($story_candidates[2]) ? $story_candidates[2] : $story_img_2;

// Mini Kit Accessories Images
$kit_img_cleaning = 'https://cdn.shopify.com/s/files/1/0751/8073/6750/files/cleaning-kit_2024_8753510AC0000.png?v=1757464865';
$kit_img_tee = 'https://cdn.shopify.com/s/files/1/0751/8073/6750/files/overlappig.png?v=1757464871';
$kit_img_retainer = 'https://cdn.shopify.com/s/files/1/0751/8073/6750/files/8751480AC0000_01.png?v=1757464860';
$promo_boat_img = isset($story_candidates[3]) ? $story_candidates[3] : $story_img_1;

// Dynamic Storytelling Titles & Descriptions by Product Type
if ($is_helmet) {
    $story_title_1 = 'Bảo vệ va đập theo vùng';
    $story_desc_1 = 'Cấu trúc Koroyd® và Mips® giúp hấp thụ năng lượng, đồng thời giảm lực xoay khi va đập trên đường mòn.';
    $story_title_2 = 'Luồng khí được tối ưu';
    $story_desc_2 = 'Hệ thống thông gió AirEvac™ dẫn không khí qua các cửa hút, giúp đầu luôn thoáng và hạn chế kính bị mờ.';
    $story_title_3 = 'Điều chỉnh độ ôm chính xác';
    $story_desc_3 = 'Hệ thống VaporFit™ cho phép tùy chỉnh độ ôm 270 độ chỉ bằng một núm xoay.';
    $why_love_text = 'Khả năng bảo vệ toàn diện với Mips® và Koroyd®, luồng khí tối ưu và khả năng kết hợp kính liền mạch.';
    $promo_title = 'Kết hợp mũ và kính Smith';
    $promo_desc = 'Được thiết kế đồng bộ để mang lại sự thoải mái, thông thoáng và tầm nhìn không mờ trong mỗi lần đổ dốc.';
} elseif ($is_goggle) {
    $story_title_1 = 'Tầm nhìn BirdsEye Vision™';
    $story_desc_1 = 'Mở rộng trường nhìn thêm 25%, mang lại tầm nhìn ngoại vi vượt trội trên toàn địa hình núi.';
    $story_title_2 = 'Độ rõ nét ChromaPop™';
    $story_desc_2 = 'Lọc vùng giao thoa quang học để tăng độ tương phản tự nhiên và thể hiện màu sắc trung thực trong nhiều điều kiện tuyết.';
    $story_title_3 = 'Tích hợp chống mờ';
    $story_desc_3 = 'Hệ thống AirEvac™ phối hợp với mũ Smith để thoát hơi ẩm và giữ tầm nhìn luôn trong trẻo.';
    $why_love_text = 'Trường nhìn rộng vượt trội cùng công nghệ BirdsEye Vision™ và ChromaPop™ giúp địa hình hiện lên sắc nét.';
    $promo_title = 'Hướng dẫn chọn tròng kính tuyết ChromaPop™';
    $promo_desc = 'Chọn đúng màu tròng cho ngày bão tuyết, nắng gắt hoặc ánh sáng hỗn hợp trên núi để thấy rõ hơn trong từng khúc cua.';
} else {
    $story_title_1 = 'Kiểu dáng rộng hơn';
    $story_desc_1 = 'Gọng kính lớn mang lại độ che phủ toàn diện mà vẫn giữ được sự thoải mái.';
    $story_title_2 = 'Độ rõ nét vượt trội';
    $story_desc_2 = 'Tròng phân cực ChromaPop™ bền bỉ giúp tăng cường màu sắc, độ tương phản và giảm chói để tầm nhìn luôn rõ ràng.';
    $story_title_3 = 'Thoải mái cả ngày';
    $story_desc_3 = 'Bản lề lò xo và độ đàn hồi cao giúp kính thoải mái từ sáng sớm đến cuối ngày.';
    $why_love_text = 'Độ ôm XL và vùng che phủ lớn, kết hợp gọng vật liệu sinh học cùng bản lề lò xo để tự điều chỉnh vừa vặn.';
    $promo_title = 'Tìm tròng kính câu cá phù hợp nhất';
    $promo_desc = 'Mỗi địa hình và điều kiện thời tiết đòi hỏi một loại tròng kính khác nhau; chúng tôi sẽ giúp bạn chọn đúng loại để mang theo.';
}
?>

<!-- FLOATING STICKY TOP BAR (Appears on Scroll Down) -->
<div id="smith-floating-pdp-bar" class="smith-floating-pdp-bar" style="display: none;">
    <div class="floating-inner">
        <div class="floating-left">
            <img id="smith-floating-thumb" src="<?php echo esc_url($cur_v_data['img_3q']); ?>" alt="<?php echo esc_attr($title); ?>">
            <span class="floating-title"><?php echo esc_html($title); ?></span>
        </div>
        <div class="floating-right">
            <span class="floating-price smith-stock-label" id="smith-floating-price">CÒN HÀNG</span>
            <button type="button" class="floating-add-btn smith-dynamic-buy-now">MUA NGAY</button>
        </div>
    </div>
</div>

<main id="MainContent" class="smith-official-pdp-main smith-unified-pdp smith-unified-pdp--<?php echo esc_attr($cat_slug); ?>" role="main" data-product-template="unified" data-product-category="<?php echo esc_attr($cat_slug); ?>">
    
    <!-- Top Two-Column Product Detail Layout -->
    <div class="smith-official-pdp-container">
        <div class="smith-pdp-layout-grid">
            
            <!-- LEFT COLUMN: Multi-Image Mosaic Wall Gallery -->
            <div class="smith-mosaic-gallery-col">
                <div class="smith-mosaic-gallery-grid" id="smith-mosaic-grid">
                    
                    <!-- Tile 1: Top Hero (Angle View) -->
                    <div class="smith-mosaic-tile smith-tile-hero" id="smith-tile-3q-box">
                        <img id="smith-img-3q" src="<?php echo esc_url(isset($initial_gallery_images[0]) ? $initial_gallery_images[0] : ''); ?>" alt="<?php echo esc_attr($title); ?> - Ảnh chính" loading="eager">
                    </div>

                    <!-- Tile 2: Front View -->
                    <?php if (!empty($initial_gallery_images[1])): ?>
                    <div class="smith-mosaic-tile smith-tile-half" id="smith-tile-ff-box">
                        <img id="smith-img-ff" src="<?php echo esc_url($initial_gallery_images[1]); ?>" alt="<?php echo esc_attr($title); ?> - Mặt trước" loading="lazy">
                    </div>
                    <?php endif; ?>

                    <!-- Tile 3: Side View -->
                    <?php if (!empty($initial_gallery_images[2])): ?>
                    <div class="smith-mosaic-tile smith-tile-half" id="smith-tile-side-box">
                        <img id="smith-img-side" src="<?php echo esc_url($initial_gallery_images[2]); ?>" alt="<?php echo esc_attr($title); ?> - Mặt bên" loading="lazy">
                    </div>
                    <?php endif; ?>

                    <!-- Tile 4: Interior / Package View -->
                    <?php if (!empty($initial_gallery_images[3])): ?>
                    <div class="smith-mosaic-tile smith-tile-half" id="smith-tile-wi-box">
                        <img id="smith-img-wi" src="<?php echo esc_url($initial_gallery_images[3]); ?>" alt="<?php echo esc_attr($title); ?> - Chi tiết" loading="lazy">
                    </div>
                    <?php endif; ?>

                    <!-- Tile 5: Lifestyle Photo -->
                    <?php if (!empty($initial_gallery_images[4])): ?>
                    <div class="smith-mosaic-tile smith-tile-half smith-tile-lifestyle" id="smith-tile-life-box">
                        <img id="smith-img-life" src="<?php echo esc_url($initial_gallery_images[4]); ?>" alt="<?php echo esc_attr($title); ?> - Thực tế sử dụng" loading="lazy">
                    </div>
                    <?php endif; ?>

                </div>

                <!-- View More Expandable Link -->
                <div class="smith-gallery-view-more"<?php echo count($initial_gallery_images) <= 5 ? ' style="display:none"' : ''; ?>>
                    <button type="button" id="smith-view-more-btn" onclick="smithToggleMorePhotos()">Xem thêm</button>
                </div>

                <!-- Hidden Extra Photos Grid -->
                <div id="smith-extra-photos-grid" class="smith-extra-mosaic-grid" style="display: none;">
                    <?php if (count($initial_gallery_images) > 5): ?>
                        <?php foreach (array_slice($initial_gallery_images, 5, 6) as $e_idx => $extra_src): ?>
                            <div class="smith-mosaic-tile smith-tile-half <?php echo (strpos($extra_src, 'lifestyle') !== false) ? 'smith-tile-lifestyle' : ''; ?>">
                                <img src="<?php echo esc_url($extra_src); ?>" alt="<?php echo esc_attr($title); ?> - Ảnh <?php echo intval($e_idx + 6); ?>" loading="lazy">
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>

            <!-- RIGHT COLUMN: Sticky Buy Box & Information Panel -->
            <div class="smith-sticky-buybox-col">
                <div class="smith-buybox-sticky-inner">
                    
                    <!-- Breadcrumbs -->
                    <nav class="smith-buybox-breadcrumbs">
                        <a href="<?php echo esc_url(home_url('/')); ?>">Trang chủ</a>
                        <span class="sep">/</span>
                        <a href="<?php echo esc_url(home_url('/collections/' . esc_attr($cat_slug))); ?>"><?php echo esc_html($cat_name); ?></a>
                        <span class="sep">/</span>
                        <span class="cur"><?php echo esc_html($title); ?></span>
                    </nav>

                    <!-- Product Title & Subtitle -->
                    <h1 class="smith-buybox-title"><?php echo esc_html($title); ?></h1>
                    <?php if ($short_description): ?><div class="smith-buybox-subtitle"><?php echo esc_html($short_description); ?></div><?php endif; ?>
                    <?php
                    if (function_exists('smith_render_review_summary')) {
                        echo smith_render_review_summary($review_stats, true); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                    }
                    ?>

                    <!-- Price -->
                    <div class="smith-buybox-price" id="smith-buybox-price-text">
                        <span class="smith-stock-label">CÒN HÀNG</span>
                    </div>

                    <!-- Color Label -->
                    <?php if (!empty($color_values)): ?>
                    <div class="smith-buybox-color-header">
                        <span class="label">Màu sắc:</span>
                        <span class="val" id="smith-active-color-title"><?php echo esc_html($current_color_val); ?></span>
                    </div>

                    <!-- Color Swatches Grid (2 rows of 5) -->
                    <div class="smith-rect-swatches-grid" id="smith-rect-swatches">
                        <?php 
                        $rendered_swatches = array();
                        foreach ($variants as $idx => $v): 
                            $v_id = $v['id'];
                            $v_data = isset($variant_data_map[$v_id]) ? $variant_data_map[$v_id] : array();
                            $v_thumb = !empty($v_data['img_3q']) ? $v_data['img_3q'] : '';
                            $v_opt1 = $v['option1'] ?: $v['title'];
                            
                            if (in_array($v_opt1, $rendered_swatches)) continue;
                            $rendered_swatches[] = $v_opt1;

                            $is_active = ((string)$cur_v_id === (string)$v_id || $current_color_val === $v_opt1);
                            $v_price = !empty($v_data['price']) ? $v_data['price'] : number_format($current_price_num, 2);
                            $is_fishing = (stripos($v_opt1, 'Green Mirror') !== false || stripos($v_opt1, 'Blue Mirror') !== false || stripos($v_opt1, 'Bronze') !== false);
                        ?>
                            <button type="button" 
                                    class="smith-rect-swatch <?php echo $is_active ? 'is-selected' : ''; ?>"
                                    data-variant-id="<?php echo esc_attr($v_id); ?>"
                                    data-color="<?php echo esc_attr($v_opt1); ?>"
                                    data-price="<?php echo esc_attr($v_price); ?>"
                                    data-title="<?php echo esc_attr($v['title']); ?>"
                                    data-category="<?php echo $is_fishing ? 'fishing' : 'all'; ?>"
                                    data-sku="<?php echo esc_attr(!empty($v_data['sku']) ? $v_data['sku'] : ''); ?>"
                                    onclick="smithSelectColorVariant(this)">
                                <img src="<?php echo esc_url($v_thumb); ?>" alt="<?php echo esc_attr($v_opt1); ?>" loading="lazy">
                            </button>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>

                    <!-- Size Selection (If Product Has Sizes e.g. Helmets) -->
                    <?php if ($has_size_option && !empty($size_values)): ?>
                    <div class="smith-size-option-wrapper">
                        <div class="smith-size-header">
                            <span class="label">Kích thước: <strong id="smith-active-size-title"><?php echo esc_html($current_size_val ?: $size_values[0]); ?></strong></span>
                            <a href="<?php echo esc_url(home_url('/pages/size-guide')); ?>" class="size-guide-link">Hướng dẫn chọn size</a>
                        </div>
                        <div class="smith-size-pills">
                            <?php foreach ($size_values as $s_idx => $s_val): 
                                $is_s_active = ($current_size_val === $s_val || (empty($current_size_val) && $s_idx === 0));
                                $s_cm_label = '';
                                if ($is_helmet) {
                                    if ($s_val === 'S') $s_cm_label = ' (51-55 cm)';
                                    elseif ($s_val === 'M') $s_cm_label = ' (55-59 cm)';
                                    elseif ($s_val === 'L') $s_cm_label = ' (59-62 cm)';
                                    elseif ($s_val === 'XL') $s_cm_label = ' (62-66 cm)';
                                }
                            ?>
                                <button type="button" 
                                        class="smith-size-btn <?php echo $is_s_active ? 'is-active' : ''; ?>"
                                        data-size="<?php echo esc_attr($s_val); ?>"
                                        onclick="smithSelectSizeVariant(this)">
                                    <?php echo esc_html($s_val . $s_cm_label); ?>
                                </button>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <?php endif; ?>

                    <!-- Add to Cart Button -->
                    <div class="smith-buybox-add-row">
                        <button type="button" id="smith-add-to-cart-btn" class="smith-full-add-btn smith-dynamic-buy-now">
                            MUA NGAY
                        </button>
                    </div>

                    <!-- Trust & Guarantee Badges -->
                    <div class="smith-buybox-trust-list">
                        <div class="trust-item">
                            <span class="icon">🚚</span>
                            <span>Miễn phí giao hàng cho đơn từ $50</span>
                        </div>
                        <div class="trust-item">
                            <span class="icon">🛡️</span>
                            <span><?php echo esc_html($warranty_text); ?></span>
                        </div>
                        <div class="trust-item">
                            <span class="icon">🔄</span>
                            <span>Đổi trả trong 30 ngày, không áp dụng cho sản phẩm tùy chỉnh</span>
                        </div>
                    </div>

                    <!-- "Why We Love It" Callout Highlight Box -->
                    <?php if ($is_sunglass || $is_goggle): ?><div class="smith-highlight-callout-box">
                        <strong>Lý do chúng tôi yêu thích</strong> — <?php echo esc_html($why_love_text); ?>
                    </div><?php endif; ?>

                    <!-- Dynamic Spec Quick Rows -->
                    <div class="smith-spec-quick-list">
                        <?php if ($is_helmet): ?>
                            <div class="spec-row"><div class="spec-left"><strong>Độ vừa vặn</strong> — Hệ thống chỉnh ôm đầu bằng núm xoay</div><span class="spec-icon">⚙️</span></div>
                            <?php
                            $helmet_tech = array();
                            if (stripos($title . ' ' . $prod['body_html'], 'mips') !== false) $helmet_tech[] = 'Mips®';
                            if (stripos($prod['body_html'], 'koroyd') !== false) $helmet_tech[] = 'KOROYD®';
                            if ($helmet_tech): ?>
                            <div class="spec-row"><div class="spec-left"><strong>Công nghệ</strong> — <?php echo esc_html(implode(' + ', $helmet_tech)); ?></div><span class="spec-icon">🛡️</span></div>
                            <?php endif; ?>
                        <?php elseif ($is_goggle): ?>
                            <div class="spec-row"><div class="spec-left"><strong>Công nghệ tròng kính</strong> — ChromaPop™ BirdsEye Vision™</div><span class="spec-icon">🔍</span></div>
                            <div class="spec-row"><div class="spec-left"><strong>Cơ chế thay tròng</strong> — Tháo lắp nhanh bằng nam châm MAG™</div><span class="spec-icon">🧲</span></div>
                            <div class="spec-row"><div class="spec-left"><strong>Trong hộp</strong> — Tròng kính phụ + túi microfiber</div><span class="spec-icon">📦</span></div>
                        <?php elseif ($is_sunglass): ?>
                            <div class="spec-row"><div class="spec-left"><strong>Độ vừa vặn</strong> — Lớn đến XL</div><span class="spec-icon">✏️</span></div>
                            <div class="spec-row"><div class="spec-left"><strong>Công nghệ</strong> — <?php echo (stripos($current_color_val, 'Glass') !== false) ? 'ChromaPop™ Glass Polarized' : 'ChromaPop™ Polarized'; ?></div><span class="spec-icon">🔍</span></div>
                            <div class="spec-row"><div class="spec-left"><strong>Trong hộp</strong> — Túi microfiber</div><span class="spec-icon">📦</span></div>
                        <?php endif; ?>
                    </div>

                    <!-- Nearby Dealer Link -->
                    <div class="smith-dealer-link-row">
                        <a href="<?php echo esc_url(home_url('/trang/tim-cua-hang')); ?>">📍 Tìm tại đại lý gần bạn</a>
                    </div>

                    <!-- Complete Your Kit Mini Slider -->
                    <?php if ($recommendations): ?><div class="smith-complete-kit-mini-box">
                        <div class="kit-mini-header">
                            <h3>Hoàn thiện bộ trang bị</h3>
                            <div class="kit-arrows">
                                <button type="button" class="arrow-btn" onclick="smithScrollKitMini(-1)">‹</button>
                                <button type="button" class="arrow-btn" onclick="smithScrollKitMini(1)">›</button>
                            </div>
                        </div>

                        <div class="kit-mini-slider" id="smith-kit-mini-track">
                            <?php foreach (array_slice($recommendations, 0, 5) as $rec):
                                $rec_image = !empty($rec['featured_image']) ? $rec['featured_image'] : (!empty($rec['images'][0]) ? $rec['images'][0] : '');
                                $rec_colors = !empty($rec['options'][0]['values']) ? count($rec['options'][0]['values']) : 1;
                                $rec_handle = !empty($rec['handle']) ? $rec['handle'] : '';
                                $rec_index_product = $rec_handle ? smith_get_product_by_handle($rec_handle) : null;
                                $rec_title = !empty($rec['title']) ? $rec['title'] : '';
                                if (!$rec_title || strtolower(trim($rec_title)) === 'name') {
                                    $rec_title = !empty($rec_index_product['title'])
                                        ? $rec_index_product['title']
                                        : ucwords(str_replace('-', ' ', $rec_handle));
                                }
                                $rec_title = smith_localize_product_title($rec_title, $rec_handle);
                            ?>
                            <div class="kit-mini-item">
                                <a class="item-img-wrap" href="<?php echo esc_url(home_url('/products/' . $rec_handle)); ?>"><img src="<?php echo esc_url($rec_image); ?>" alt="<?php echo esc_attr($rec_title); ?>"></a>
                                <div class="item-info"><h4><?php echo esc_html($rec_title); ?></h4><span class="colors-note"><?php echo intval($rec_colors); ?> màu có sẵn</span><div class="price smith-stock-label">CÒN HÀNG</div></div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div><?php endif; ?>

                </div>
            </div>

        </div>

        <?php if (!$is_apparel && !$is_accessory): ?>
        <!-- 3-Column Storytelling & Tech Features -->
        <section class="smith-storytelling-3col-section">
            <div class="smith-story-grid">
                
                <div class="smith-story-card">
                    <div class="story-img-wrap">
                        <img id="smith-story-img-1" src="<?php echo esc_url($story_img_1); ?>" alt="<?php echo esc_attr($story_title_1); ?>" loading="lazy">
                    </div>
                    <div class="story-content">
                        <h3><?php echo esc_html($story_title_1); ?></h3>
                        <p><?php echo esc_html($story_desc_1); ?></p>
                    </div>
                </div>

                <div class="smith-story-card">
                    <div class="story-img-wrap">
                        <img id="smith-story-img-2" src="<?php echo esc_url($story_img_2); ?>" alt="<?php echo esc_attr($story_title_2); ?>" loading="lazy">
                    </div>
                    <div class="story-content">
                        <h3><?php echo esc_html($story_title_2); ?></h3>
                        <p><?php echo esc_html($story_desc_2); ?></p>
                    </div>
                </div>

                <div class="smith-story-card">
                    <div class="story-img-wrap">
                        <img id="smith-story-img-3" src="<?php echo esc_url($story_img_3); ?>" alt="<?php echo esc_attr($story_title_3); ?>" loading="lazy">
                    </div>
                    <div class="story-content">
                        <h3><?php echo esc_html($story_title_3); ?></h3>
                        <p><?php echo esc_html($story_desc_3); ?></p>
                    </div>
                </div>

            </div>
        </section>
        <?php endif; ?>

        <!-- Full Product Specs & Details -->
        <section class="smith-specs-full-section">
            
            <!-- Description -->
            <?php if (!empty($parsed_body['description'])): ?>
            <div class="smith-spec-block">
                <h2>Mô tả sản phẩm</h2>
                <div class="spec-block-content">
                    <p><?php echo esc_html($parsed_body['description']); ?></p>
                </div>
            </div>
            <?php endif; ?>

            <!-- Dynamic Sections (Protection, Vision, Fit/Integration, Frame, Features) -->
            <div class="smith-spec-block">
                <h2>Chi tiết sản phẩm</h2>
                <div class="spec-block-content">
                    <?php if (!empty($parsed_body['sections'])): ?>
                        <?php foreach ($parsed_body['sections'] as $s_title => $s_items): ?>
                            <div class="tech-sub-group">
                                <h3><?php echo esc_html($s_title); ?></h3>
                                <ul>
                                    <?php foreach ($s_items as $item_text): ?>
                                        <li><?php echo esc_html($item_text); ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <div class="tech-sub-group">
                            <h3>Tầm nhìn và tròng kính</h3>
                            <ul>
                                <li>Tròng kính ChromaPop™ tăng cường độ tương phản và màu sắc tự nhiên, giúp các chi tiết trở nên rõ nét hơn</li>
                                <li>Smudge and moisture resistant coating for easy cleaning and clear optics</li>
                                <li>Anti-reflective coating improves clarity and reduces eye strain</li>
                            </ul>
                        </div>
                        <div class="tech-sub-group">
                            <h3>Độ vừa vặn và khả năng tương thích</h3>
                            <ul>
                                <li>Large to XL fit, large coverage</li>
                                <li>6-base lens curvature provides a modest wraparound fit</li>
                                <li>Megol nose and temple pads provide non-slip grip so glasses stay put</li>
                                <li>Spring hinges self-adjust to your face for a snug, comfortable fit</li>
                            </ul>
                        </div>
                        <div class="tech-sub-group">
                            <h3>Gọng kính</h3>
                            <ul>
                                <li>Evolve bio-based frame material is lightweight and durable</li>
                            </ul>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <?php if (!empty($parsed_body['included'])): ?>
            <!-- What's Included -->
            <div class="smith-spec-block">
                <h2>Bộ sản phẩm bao gồm</h2>
                <div class="spec-block-content">
                    <ul>
                        <?php if (!empty($parsed_body['included'])): ?>
                            <?php foreach ($parsed_body['included'] as $inc_item): ?>
                                <li><?php echo esc_html($inc_item); ?></li>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
            <?php endif; ?>

            <!-- Additional Specs & Dimension Diagram -->
            <div class="smith-spec-block">
                <h2>Thông số bổ sung</h2>
                <div class="spec-block-content">
                    <div class="prod-id-line">
                        Mã sản phẩm: <strong id="smith-spec-prod-id"><?php echo esc_html($current_sku ?: '205834DL5641J'); ?></strong>
                    </div>

                    <?php if ($is_sunglass): ?>
                    <!-- Sunglass Exact Dimensions Diagram (Smith Optics 1:1) -->
                    <div class="smith-dimensions-bar">
                        
                        <!-- Lens Height -->
                        <div class="dim-item">
                            <div class="dim-icon">
                                <svg width="44" height="28" viewBox="0 0 44 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 6C4 4.89543 4.89543 4 6 4H22C23.1046 4 24 4.89543 24 6V22C24 23.1046 23.1046 24 22 24H6C4.89543 24 4 23.1046 4 22V6Z" stroke="#888888" stroke-width="1.4"/>
                                    <line x1="30" y1="4" x2="30" y2="24" stroke="#111111" stroke-width="1.4"/>
                                    <path d="M28 7L30 4L32 7" stroke="#111111" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M28 21L30 24L32 21" stroke="#111111" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div class="dim-info">
                                <div class="dim-val-line">
                                    <strong><?php echo (stripos($title, 'XL') !== false) ? '47' : '45'; ?></strong> <span class="unit">mm</span>
                                </div>
                                <span class="dim-label">Chiều cao tròng kính</span>
                            </div>
                        </div>

                        <!-- Lens Width -->
                        <div class="dim-item">
                            <div class="dim-icon">
                                <svg width="48" height="28" viewBox="0 0 48 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="4" y="4" width="34" height="16" rx="2" stroke="#888888" stroke-width="1.4"/>
                                    <line x1="4" y1="25" x2="38" y2="25" stroke="#111111" stroke-width="1.4"/>
                                    <path d="M7 23L4 25L7 27" stroke="#111111" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M35 23L38 25L35 27" stroke="#111111" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div class="dim-info">
                                <div class="dim-val-line">
                                    <strong><?php echo (stripos($title, 'XL') !== false) ? '62' : '58'; ?></strong> <span class="unit">mm</span>
                                </div>
                                <span class="dim-label">Chiều rộng tròng kính</span>
                            </div>
                        </div>

                        <!-- Bridge Width -->
                        <div class="dim-item">
                            <div class="dim-icon">
                                <svg width="50" height="28" viewBox="0 0 50 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 8C4 6 5.5 4 8 4H16C18.5 4 20 6 20 8V20C20 22 18.5 24 16 24H8C5.5 24 4 22 4 20V8Z" stroke="#888888" stroke-width="1.2"/>
                                    <path d="M30 8C30 6 31.5 4 34 4H42C44.5 4 46 6 46 8V20C46 22 44.5 24 42 24H34C31.5 24 30 22 30 20V8Z" stroke="#888888" stroke-width="1.2"/>
                                    <path d="M20 10C23 8 27 8 30 10" stroke="#444444" stroke-width="1.6" stroke-linecap="round"/>
                                    <line x1="20" y1="16" x2="30" y2="16" stroke="#111111" stroke-width="1.2"/>
                                    <path d="M22 14L20 16L22 18" stroke="#111111" stroke-width="1.2"/>
                                    <path d="M28 14L30 16L28 18" stroke="#111111" stroke-width="1.2"/>
                                </svg>
                            </div>
                            <div class="dim-info">
                                <div class="dim-val-line">
                                    <strong><?php echo (stripos($title, 'XL') !== false) ? '15' : '16'; ?></strong> <span class="unit">mm</span>
                                </div>
                                <span class="dim-label">Độ rộng cầu kính</span>
                            </div>
                        </div>

                        <!-- Temple Length -->
                        <div class="dim-item">
                            <div class="dim-icon">
                                <svg width="54" height="28" viewBox="0 0 54 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 12H38C43 12 47 15 49 22" stroke="#444444" stroke-width="1.8" stroke-linecap="round"/>
                                    <line x1="4" y1="25" x2="49" y2="25" stroke="#111111" stroke-width="1.3"/>
                                    <path d="M7 23L4 25L7 27" stroke="#111111" stroke-width="1.2"/>
                                    <path d="M46 23L49 25L46 27" stroke="#111111" stroke-width="1.2"/>
                                </svg>
                            </div>
                            <div class="dim-info">
                                <div class="dim-val-line">
                                    <strong><?php echo (stripos($title, 'XL') !== false) ? '145' : '140'; ?></strong> <span class="unit">mm</span>
                                </div>
                                <span class="dim-label">Chiều dài gọng kính</span>
                            </div>
                        </div>

                    </div>
                    <?php endif; ?>

                </div>
            </div>

        </section>

        <?php if ($is_sunglass): ?>
        <!-- Category Promo Banner -->
        <section class="smith-fishing-lens-promo-section">
            <div class="promo-grid">
                <div class="promo-text-col">
                    <h2><?php echo nl2br(esc_html($promo_title)); ?></h2>
                    <p><?php echo esc_html($promo_desc); ?> <a href="<?php echo esc_url(home_url('/pages/lens-guide')); ?>">Làm bài trắc nghiệm chọn kính &gt;</a></p>
                </div>
                <div class="promo-img-col">
                    <img src="<?php echo esc_url($promo_boat_img); ?>" alt="<?php echo esc_attr($promo_title); ?>" loading="lazy">
                </div>
            </div>
        </section>
        <?php endif; ?>

        <!-- "YOU MAY ALSO LIKE" CAROUSEL SLIDER -->
        <section class="smith-you-may-like-section">
            <?php get_template_part('template-parts/collection', 'trending'); ?>
            <div class="smith-legacy-you-may-like" hidden>
            <div class="you-like-header">
                <h2>You May Also Like</h2>
                <div class="you-like-nav">
                    <button type="button" class="nav-arrow" onclick="smithScrollYouLike(-1)" aria-label="Trước">‹</button>
                    <button type="button" class="nav-arrow" onclick="smithScrollYouLike(1)" aria-label="Tiếp theo">›</button>
                </div>
            </div>

            <div class="you-like-slider" id="smith-you-like-track">
                
                <!-- Card 1: Riptide -->
                <div class="you-like-card">
                    <div class="card-media">
                        <a href="<?php echo esc_url(home_url('/products/riptide')); ?>">
                            <img src="https://cdn.shopify.com/s/files/1/0751/8073/6750/files/203682K8761QG_01.png?v=1770749794" alt="Riptide" loading="lazy">
                        </a>
                    </div>
                    <div class="card-meta">
                        <div class="card-swatches">
                            <span class="c-swatch-thumb"><img src="https://cdn.shopify.com/s/files/1/0751/8073/6750/files/203682K8761QG_01.png?v=1770749794" alt="Blue"></span>
                            <span class="c-swatch-thumb"><img src="https://cdn.shopify.com/s/files/1/0751/8073/6750/files/riptide-sunglasses_matteBlack-cpGlassPolarchromicRoseBlueMirror_3Q.png?v=1773166500" alt="Green"></span>
                            <span class="c-swatch-thumb"><img src="https://cdn.shopify.com/s/files/1/0751/8073/6750/files/riptide-sunglasses_matteGravy-cpGlassPolarizedBronzeMirror_3Q.png?v=1773166500" alt="Bronze"></span>
                            <span class="c-count">+11</span>
                        </div>
                        <h4 class="card-title"><a href="<?php echo esc_url(home_url('/products/riptide')); ?>">Riptide</a></h4>
                        <div class="card-price">$217</div>
                    </div>
                </div>

                <!-- Card 2: Guide's Choice -->
                <div class="you-like-card">
                    <div class="card-media">
                        <span class="badge-new-color">Màu mới</span>
                        <a href="<?php echo esc_url(home_url('/products/guides-choice')); ?>">
                            <img src="https://cdn.shopify.com/s/files/1/0751/8073/6750/files/201563N9P62L5_01.png?v=1770850890" alt="Guide's Choice" loading="lazy">
                        </a>
                    </div>
                    <div class="card-meta">
                        <div class="card-swatches">
                            <span class="c-swatch-thumb"><img src="https://cdn.shopify.com/s/files/1/0751/8073/6750/files/guides-choice-sunglasses_matteBlack_20494701T62QG_3Q.png?v=1770850890" alt="Blue"></span>
                            <span class="c-swatch-thumb"><img src="https://cdn.shopify.com/s/files/1/0751/8073/6750/files/guides-choice-sunglasses_matteTortoise_204947N9P6278_3Q.png?v=1770850890" alt="Bronze"></span>
                            <span class="c-swatch-thumb"><img src="https://cdn.shopify.com/s/files/1/0751/8073/6750/files/cpGlassPolarizedGreenMirror_01_b88461a7-06e4-42ec-a5ae-4ca7627bcff0.png?v=1770850890" alt="Green"></span>
                            <span class="c-count">+16</span>
                        </div>
                        <h4 class="card-title"><a href="<?php echo esc_url(home_url('/products/guides-choice')); ?>">Guide's Choice</a></h4>
                        <div class="card-price">$207</div>
                    </div>
                </div>

                <!-- Card 3: Wildcat -->
                <div class="you-like-card">
                    <div class="card-media">
                        <a href="<?php echo esc_url(home_url('/products/wildcat')); ?>">
                            <img src="https://cdn.shopify.com/s/files/1/0751/8073/6750/files/wildcat-sunglasses_matteBlack_20151600399G0_3Q.png?v=1771868323" alt="Wildcat" loading="lazy">
                        </a>
                    </div>
                    <div class="card-meta">
                        <div class="card-swatches">
                            <span class="c-swatch-thumb"><img src="https://cdn.shopify.com/s/files/1/0751/8073/6750/files/wildcat-sunglasses_matteFathom-cpBlack_3Q.png?v=1771976383" alt="Black"></span>
                            <span class="c-swatch-thumb"><img src="https://cdn.shopify.com/s/files/1/0751/8073/6750/files/wildcat-sunglasses_matteSaltHaze-cpRoseGoldMirror_3Q.png?v=1771976383" alt="Red"></span>
                            <span class="c-swatch-thumb"><img src="https://cdn.shopify.com/s/files/1/0751/8073/6750/files/wildcat-sunglasses_matteGravy-cpPolarizedBronzeMirror_3Q.png?v=1771976383" alt="Wild"></span>
                            <span class="c-count">+11</span>
                        </div>
                        <h4 class="card-title"><a href="<?php echo esc_url(home_url('/products/wildcat')); ?>">Wildcat</a></h4>
                        <div class="card-price">$217</div>
                    </div>
                </div>

                <!-- Card 4: Lowdown 2 -->
                <div class="you-like-card">
                    <div class="card-media">
                        <a href="<?php echo esc_url(home_url('/products/lowdown-2')); ?>">
                            <img src="https://cdn.shopify.com/s/files/1/0751/8073/6750/files/lowdown2-sunglasses_matteBlack-cpGlassPolarizedBlueMirror_3Q_618938d5-743f-4127-b9f9-82ee67e0d0d1.png?v=1757603563" alt="Lowdown 2" loading="lazy">
                        </a>
                    </div>
                    <div class="card-meta">
                        <div class="card-swatches">
                            <span class="c-swatch-thumb"><img src="https://cdn.shopify.com/s/files/1/0751/8073/6750/files/lowdown2-sunglasses_matteBlack-cpGlassPolarizedBlueMirror_3Q_618938d5-743f-4127-b9f9-82ee67e0d0d1.png?v=1757603563" alt="Blue"></span>
                            <span class="c-swatch-thumb"><img src="https://cdn.shopify.com/s/files/1/0751/8073/6750/files/LD2CPGNMB_01_8739fd17-317d-4b10-95e8-65ab609a9e62.png?v=1757710331" alt="Green"></span>
                            <span class="c-swatch-thumb"><img src="https://cdn.shopify.com/s/files/1/0751/8073/6750/files/lowdown-2-sunglasses_matteSaltHaze-cpGlassPolarizedBrown_3Q.png?v=1768860803" alt="Bronze"></span>
                            <span class="c-count">+14</span>
                        </div>
                        <h4 class="card-title"><a href="<?php echo esc_url(home_url('/products/lowdown-2')); ?>">Lowdown 2</a></h4>
                        <div class="card-price">$187</div>
                    </div>
                </div>

            </div>

            <!-- Dots Indicator -->
            <div class="you-like-dots">
                <span class="dot is-active"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>
            </div>
        </section>

        <!-- REVIEWS CTA SECTION -->
        <section class="smith-reviews-cta-section" id="reviews">
            <div class="reviews-cta-text">- Chưa có đánh giá nào cho sản phẩm này -</div>
            <button type="button" class="reviews-write-btn" onclick="alert('Review submission form will open.');">
                HÃY LÀ NGƯỜI ĐẦU TIÊN GỬI ĐÁNH GIÁ
            </button>
        </section>

    </div>

    <!-- Toast Modal -->
    <div id="smith-cart-toast" class="smith-toast-modal" style="display: none;">
        <div class="smith-toast-body">
            <div class="smith-toast-icon">✓</div>
            <div class="smith-toast-text">
                <div class="smith-toast-title">Đã thêm vào giỏ hàng!</div>
                <div class="smith-toast-prod" id="smith-toast-item-name"><?php echo esc_html($title); ?></div>
            </div>
            <a href="<?php echo esc_url(home_url('/cart')); ?>" class="smith-toast-viewcart">Xem giỏ hàng</a>
            <button type="button" class="smith-toast-close" onclick="document.getElementById('smith-cart-toast').style.display='none'">×</button>
        </div>
    </div>

</main>

<style>
/* =========================================================
   UNIVERSAL 1:1 SMITH OPTICS PDP STYLES
   ========================================================= */

.smith-official-pdp-main {
    font-family: "Plus Jakarta Sans", "Inter", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif !important;
    color: #111111;
    background: #ffffff;
    line-height: 1.4;
    padding-bottom: 60px;
}

.smith-official-pdp-container {
    max-width: 1440px;
    margin: 0 auto;
    padding: 20px 32px 40px;
}

/* FLOATING STICKY TOP BAR */
.smith-floating-pdp-bar {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    background: #ffffff;
    border-bottom: 1px solid #e0e0e0;
    box-shadow: 0 4px 16px rgba(0,0,0,0.06);
    z-index: 9999;
    padding: 10px 32px;
    animation: smithSlideDown 0.25s ease-out;
}

@keyframes smithSlideDown {
    from { transform: translateY(-100%); }
    to { transform: translateY(0); }
}

.floating-inner {
    max-width: 1440px;
    margin: 0 auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.floating-left {
    display: flex;
    align-items: center;
    gap: 12px;
}

.floating-left img {
    width: 44px;
    height: 32px;
    object-fit: contain;
    background: #f5f5f5;
    border-radius: 3px;
}

.floating-title {
    font-size: 15px;
    font-weight: 800;
    color: #111;
}

.floating-right {
    display: flex;
    align-items: center;
    gap: 18px;
}

.floating-price {
    font-size: 16px;
    font-weight: 800;
    color: #111;
}

.floating-add-btn {
    background: #000000;
    color: #ffffff;
    border: none;
    padding: 10px 24px;
    font-size: 13px;
    font-weight: 800;
    letter-spacing: 0.5px;
    border-radius: 2px;
    cursor: pointer;
    transition: background 0.15s;
}

.floating-add-btn:hover {
    background: #333;
}

.smith-pdp-layout-grid {
    display: grid;
    grid-template-columns: 1.15fr 0.85fr;
    gap: 48px;
    align-items: start;
}

@media (max-width: 1024px) {
    .smith-pdp-layout-grid {
        grid-template-columns: 1fr;
        gap: 32px;
    }
}

/* =========================================================
   LEFT: MOSAIC GALLERY
   ========================================================= */
.smith-mosaic-gallery-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 12px;
}

.smith-mosaic-tile {
    background: #f4f4f4;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
}

.smith-tile-hero {
    grid-column: 1 / span 2;
    min-height: 420px;
    padding: 30px;
}

.smith-tile-half {
    min-height: 260px;
    padding: 20px;
}

.smith-tile-lifestyle {
    padding: 0 !important;
}

.smith-tile-lifestyle img {
    width: 100%;
    height: 100%;
    object-fit: cover !important;
}

.smith-mosaic-tile img {
    max-width: 100%;
    max-height: 100%;
    object-fit: contain;
    transition: transform 0.3s cubic-bezier(0.2, 0.8, 0.2, 1);
}

.smith-mosaic-tile:hover img {
    transform: scale(1.03);
}

.smith-gallery-view-more {
    text-align: center;
    margin-top: 16px;
}

.smith-gallery-view-more button {
    background: none;
    border: none;
    font-size: 12px;
    font-weight: 700;
    text-decoration: underline;
    color: #111;
    cursor: pointer;
}

.smith-extra-mosaic-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 12px;
    margin-top: 12px;
}

/* =========================================================
   RIGHT: STICKY BUY BOX
   ========================================================= */
.smith-sticky-buybox-col {
    position: relative;
}

.smith-buybox-sticky-inner {
    position: sticky;
    top: 80px;
    padding-left: 12px;
}

.smith-buybox-breadcrumbs {
    font-size: 11px;
    color: #888888;
    margin-bottom: 12px;
}

.smith-buybox-breadcrumbs a {
    color: #777777;
    text-decoration: none;
}

.smith-buybox-breadcrumbs .sep {
    margin: 0 4px;
}

.smith-buybox-breadcrumbs .cur {
    color: #111111;
}

.smith-buybox-title {
    font-family: "Plus Jakarta Sans", "Inter", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif !important;
    font-size: 28px;
    font-weight: 800;
    line-height: 1.15;
    margin: 0 0 4px;
    color: #111111;
}

.smith-full-add-btn:disabled {
    background: #fff;
    color: #111;
    border: 1px solid #111;
    cursor: default;
}

.smith-buybox-subtitle {
    font-size: 13px;
    color: #555555;
    margin-bottom: 14px;
}

.smith-buybox-price {
    font-size: 20px;
    font-weight: 800;
    color: #111111;
    margin-bottom: 20px;
}

.smith-buybox-price .smith-compare-price {
    margin-left: 10px;
    color: #777;
    font-size: .62em;
    font-weight: 500;
}

.smith-buybox-color-header {
    font-size: 13px;
    margin-bottom: 10px;
}

.smith-buybox-color-header .label {
    font-weight: 800;
}

.smith-buybox-color-header .val {
    font-weight: 500;
    color: #333;
    margin-left: 4px;
}

/* Tabs */
.smith-color-filter-tabs {
    display: flex;
    gap: 16px;
    margin-bottom: 12px;
    border-bottom: 1px solid #e0e0e0;
}

.smith-color-filter-tabs .tab-btn {
    background: none;
    border: none;
    padding: 6px 0;
    font-size: 13px;
    font-weight: 600;
    color: #777;
    cursor: pointer;
    position: relative;
}

.smith-color-filter-tabs .tab-btn.is-active {
    color: #111;
    font-weight: 800;
}

.smith-color-filter-tabs .tab-btn.is-active::after {
    content: '';
    position: absolute;
    bottom: -1px;
    left: 0;
    right: 0;
    height: 2px;
    background: #111;
}

/* Rectangular Swatches */
.smith-rect-swatches-grid {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    gap: 8px;
    margin-bottom: 18px;
}

.smith-rect-swatch {
    height: 38px;
    background: #fdfdfd;
    border: 1px solid #d5d5d5;
    border-radius: 4px;
    padding: 3px;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.15s ease;
}

.smith-rect-swatch img {
    max-width: 100%;
    max-height: 100%;
    object-fit: contain;
}

.smith-rect-swatch:hover {
    border-color: #777;
}

.smith-rect-swatch.is-selected {
    border: 2px solid #000000;
    box-shadow: 0 0 0 1px #000000;
}

/* Size Options */
.smith-size-option-wrapper {
    margin-bottom: 18px;
}

.smith-size-header {
    display: flex;
    justify-content: space-between;
    font-size: 13px;
    margin-bottom: 8px;
}

.smith-size-header .label {
    font-weight: 800;
}

.size-guide-link {
    font-size: 12px;
    color: #555;
    text-decoration: underline;
}

.smith-size-pills {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
}

.smith-size-btn {
    padding: 10px 14px;
    background: #ffffff;
    border: 1px solid #cccccc;
    font-size: 12px;
    font-weight: 700;
    border-radius: 4px;
    cursor: pointer;
    transition: all 0.15s;
}

.smith-size-btn:hover {
    border-color: #000;
}

.smith-size-btn.is-active {
    background: #000000;
    color: #ffffff;
    border-color: #000000;
}

/* Reviews Row */
.smith-buybox-reviews-row {
    display: flex;
    align-items: center;
    gap: 6px;
    font-size: 13px;
    margin-bottom: 18px;
}

.smith-buybox-reviews-row .stars {
    color: #111;
    letter-spacing: 1px;
}

.smith-buybox-reviews-row .score {
    font-weight: 700;
}

.smith-buybox-reviews-row .reviews-link {
    color: #666;
    text-decoration: underline;
}

/* Add to Cart Button */
.smith-full-add-btn {
    width: 100%;
    background: #000000;
    color: #ffffff;
    border: none;
    padding: 16px;
    font-size: 14px;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 1px;
    cursor: pointer;
    border-radius: 2px;
    transition: background 0.2s;
}

.smith-full-add-btn:hover {
    background: #333333;
}

/* Installments */
.smith-buybox-installments {
    font-size: 11px;
    color: #444444;
    text-align: center;
    margin: 12px 0 18px;
    letter-spacing: 0.3px;
}

.badge-klarna {
    background: #000;
    color: #ffb3c7;
    font-weight: 800;
    padding: 1px 4px;
    border-radius: 2px;
}

.badge-afterpay {
    background: #000;
    color: #b2fce4;
    font-weight: 800;
    padding: 1px 4px;
    border-radius: 2px;
}

/* Trust list */
.smith-buybox-trust-list {
    display: flex;
    flex-direction: column;
    gap: 8px;
    font-size: 12px;
    color: #444;
    margin-bottom: 22px;
    padding-bottom: 18px;
    border-bottom: 1px solid #ebebeb;
}

.trust-item {
    display: flex;
    align-items: center;
    gap: 8px;
}

/* Highlight Box */
.smith-highlight-callout-box {
    background: #eef3f7;
    border-radius: 6px;
    padding: 14px 16px;
    font-size: 13px;
    line-height: 1.5;
    color: #222;
    margin-bottom: 20px;
}

.smith-highlight-callout-box strong {
    color: #000;
}

/* Spec Quick List */
.smith-spec-quick-list {
    display: flex;
    flex-direction: column;
    gap: 14px;
    margin-bottom: 20px;
    font-size: 13px;
}

.spec-row {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-bottom: 12px;
    border-bottom: 1px solid #f0f0f0;
}

.spec-row strong {
    color: #111;
}

.spec-icon {
    font-size: 14px;
}

/* Dealer Link */
.smith-dealer-link-row {
    margin-bottom: 28px;
}

.smith-dealer-link-row a {
    font-size: 13px;
    color: #111;
    text-decoration: underline;
    font-weight: 600;
}

/* Complete Your Kit Mini Box */
.smith-complete-kit-mini-box {
    border-top: 1px solid #e0e0e0;
    padding-top: 24px;
}

.kit-mini-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 16px;
}

.kit-mini-header h3 {
    font-size: 15px;
    font-weight: 800;
    margin: 0;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.kit-arrows {
    display: flex;
    gap: 6px;
}

.arrow-btn {
    width: 28px;
    height: 28px;
    border: 1px solid #ccc;
    background: #fff;
    border-radius: 50%;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 14px;
    font-weight: bold;
}

.kit-mini-slider {
    display: flex;
    gap: 12px;
    overflow-x: auto;
    scrollbar-width: none;
    scroll-behavior: smooth;
}

.kit-mini-slider::-webkit-scrollbar {
    display: none;
}

.kit-mini-item {
    flex: 0 0 130px;
    border: 1px solid #eee;
    border-radius: 4px;
    padding: 10px;
    display: flex;
    flex-direction: column;
    background: #fff;
}

.kit-mini-item .item-img-wrap {
    width: 100%;
    height: 85px;
    background: #f8f8f8;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 8px;
}

.kit-mini-item .item-img-wrap img {
    max-width: 90%;
    max-height: 90%;
    object-fit: contain;
}

.kit-mini-item h4 {
    font-size: 11px;
    font-weight: 700;
    margin: 0 0 4px;
    line-height: 1.25;
}

.kit-mini-item .colors-note {
    font-size: 10px;
    color: #888;
    display: block;
    margin-bottom: 6px;
}

.kit-mini-item .price {
    font-size: 12px;
    font-weight: 800;
    margin-bottom: 8px;
}

.kit-add-btn {
    background: #ffffff;
    border: 1.5px solid #111111;
    color: #111111;
    font-size: 10px;
    font-weight: 800;
    padding: 6px;
    width: 100%;
    border-radius: 2px;
    cursor: pointer;
    transition: all 0.15s;
}

.kit-add-btn:hover {
    background: #111;
    color: #fff;
}

/* =========================================================
   BOTTOM: 3-COLUMN STORYTELLING
   ========================================================= */
.smith-storytelling-3col-section {
    margin-top: 60px;
    padding-top: 40px;
    border-top: 1px solid #e0e0e0;
}

.smith-story-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 24px;
}

@media (max-width: 768px) {
    .smith-story-grid {
        grid-template-columns: 1fr;
    }
}

.smith-story-card {
    display: flex;
    flex-direction: column;
}

.smith-story-card .story-img-wrap {
    width: 100%;
    height: 380px;
    background: #f5f5f5;
    overflow: hidden;
    margin-bottom: 16px;
}

.smith-story-card .story-img-wrap img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.4s ease;
}

.smith-story-card:hover .story-img-wrap img {
    transform: scale(1.04);
}

.smith-story-card .story-content h3 {
    font-size: 18px;
    font-weight: 800;
    margin: 0 0 8px;
    color: #111;
}

.smith-story-card .story-content p {
    font-size: 13px;
    color: #555;
    line-height: 1.5;
    margin: 0;
}

/* =========================================================
   FULL SPECS & DETAILS SECTION
   ========================================================= */
.smith-specs-full-section {
    margin-top: 50px;
    padding-top: 30px;
    border-top: 1px solid #e0e0e0;
    max-width: 800px;
}

.smith-spec-block {
    margin-bottom: 32px;
}

.smith-spec-block h2 {
    font-size: 18px;
    font-weight: 800;
    margin: 0 0 14px;
    color: #111;
}

.spec-block-content {
    font-size: 14px;
    color: #333;
    line-height: 1.6;
}

.spec-block-content p {
    margin: 0 0 14px;
}

.spec-block-content ul {
    padding-left: 20px;
    margin: 0 0 14px;
}

.spec-block-content li {
    margin-bottom: 6px;
}

.tech-sub-group {
    margin-bottom: 16px;
}

.tech-sub-group h3 {
    font-size: 14px;
    font-weight: 800;
    margin: 12px 0 6px;
    color: #111;
}

.prod-id-line {
    font-size: 13px;
    color: #666;
    margin-bottom: 20px;
}

.smith-dimensions-bar {
    display: flex;
    gap: 40px;
    margin-top: 20px;
    padding-top: 20px;
    border-top: 1px solid #eee;
    flex-wrap: wrap;
}

.dim-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
}

.dim-icon {
    height: 32px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 8px;
}

.dim-val-line {
    font-size: 14px;
    font-weight: 800;
    color: #111;
    margin-bottom: 2px;
}

.dim-val-line strong {
    font-size: 15px;
    font-weight: 900;
}

.dim-val-line .unit {
    font-size: 11px;
    font-weight: 600;
    color: #666;
}

.dim-label {
    font-size: 11px;
    color: #777;
    white-space: nowrap;
}

/* =========================================================
   FISHING LENS PROMO SECTION
   ========================================================= */
.smith-fishing-lens-promo-section {
    margin-top: 70px;
    padding-top: 50px;
    border-top: 1px solid #e0e0e0;
}

.promo-grid {
    display: grid;
    grid-template-columns: 1fr 1.2fr;
    gap: 48px;
    align-items: center;
}

@media (max-width: 768px) {
    .promo-grid {
        grid-template-columns: 1fr;
    }
}

.promo-text-col h2 {
    font-size: 40px;
    font-weight: 900;
    line-height: 1.05;
    margin: 0 0 18px;
    color: #111;
    letter-spacing: -0.5px;
}

.promo-text-col p {
    font-size: 14px;
    color: #555;
    line-height: 1.6;
    max-width: 440px;
}

.promo-text-col a {
    color: #111;
    font-weight: 700;
    text-decoration: underline;
}

.promo-img-col {
    width: 100%;
    height: 400px;
    border-radius: 4px;
    overflow: hidden;
    background: #f0f0f0;
}

.promo-img-col img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* =========================================================
   "YOU MAY ALSO LIKE" CAROUSEL
   ========================================================= */
.smith-you-may-like-section {
    margin-top: 80px;
    padding-top: 40px;
    border-top: 1px solid #e0e0e0;
}

.you-like-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 24px;
}

.you-like-header h2 {
    font-size: 20px;
    font-weight: 800;
    margin: 0;
    color: #111;
}

.you-like-nav {
    display: flex;
    gap: 8px;
}

.nav-arrow {
    width: 32px;
    height: 32px;
    border-radius: 50%;
    border: 1px solid #d0d0d0;
    background: #ffffff;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 16px;
    font-weight: bold;
    color: #333;
    transition: all 0.15s;
}

.nav-arrow:hover {
    border-color: #111;
    color: #111;
}

.you-like-slider {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
    overflow-x: auto;
    scrollbar-width: none;
    scroll-behavior: smooth;
}

.you-like-slider::-webkit-scrollbar {
    display: none;
}

@media (max-width: 1024px) {
    .you-like-slider {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 640px) {
    .you-like-slider {
        grid-template-columns: 1fr;
    }
}

.you-like-card {
    background: #ffffff;
    display: flex;
    flex-direction: column;
}

.card-media {
    position: relative;
    width: 100%;
    padding-top: 75%;
    background: #f8f8f8;
    margin-bottom: 12px;
    overflow: hidden;
    border-radius: 2px;
}

.badge-bestseller, .badge-new-color {
    position: absolute;
    top: 10px;
    right: 10px;
    background: #ffffff;
    color: #111111;
    border: 1px solid #e0e0e0;
    font-size: 10px;
    font-weight: 800;
    padding: 3px 8px;
    border-radius: 2px;
    z-index: 2;
}

.card-media a {
    position: absolute;
    inset: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 16px;
}

.card-media img {
    max-width: 90%;
    max-height: 90%;
    object-fit: contain;
    transition: transform 0.3s ease;
}

.you-like-card:hover .card-media img {
    transform: scale(1.05);
}

.card-meta {
    display: flex;
    flex-direction: column;
}

.card-swatches {
    display: flex;
    align-items: center;
    gap: 6px;
    margin-bottom: 8px;
}

.c-swatch-thumb {
    width: 24px;
    height: 18px;
    border-radius: 2px;
    border: 1px solid #ddd;
    background: #f5f5f5;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    padding: 1px;
}

.c-swatch-thumb img {
    width: 100%;
    height: 100%;
    object-fit: contain;
}

.c-count {
    font-size: 10px;
    color: #555;
    background: #f0f0f0;
    padding: 2px 6px;
    border-radius: 10px;
    font-weight: 800;
    border: 1px solid #e5e5e5;
}

.card-title {
    font-size: 13px;
    font-weight: 700;
    margin: 0 0 4px;
}

.card-title a {
    color: #111;
    text-decoration: none;
}

.card-price {
    font-size: 13px;
    font-weight: 800;
    color: #111;
}

.you-like-dots {
    display: flex;
    justify-content: center;
    gap: 6px;
    margin-top: 24px;
}

.you-like-dots .dot {
    width: 6px;
    height: 6px;
    border-radius: 50%;
    background: #ccc;
}

.you-like-dots .dot.is-active {
    background: #111;
}

/* =========================================================
   REVIEWS CTA SECTION
   ========================================================= */
.smith-reviews-cta-section {
    margin-top: 50px;
    padding: 40px 0 20px;
    text-align: center;
    border-top: 1px solid #f0f0f0;
}

.reviews-cta-text {
    font-size: 13px;
    color: #777777;
    margin-bottom: 20px;
}

.reviews-write-btn {
    background: #000000;
    color: #ffffff;
    border: none;
    padding: 14px 28px;
    font-size: 12px;
    font-weight: 800;
    letter-spacing: 1px;
    text-transform: uppercase;
    border-radius: 2px;
    cursor: pointer;
    transition: background 0.15s;
}

.reviews-write-btn:hover {
    background: #333333;
}

/* Toast */
.smith-toast-modal {
    position: fixed;
    bottom: 30px;
    right: 30px;
    z-index: 999999;
}

.smith-toast-body {
    background: #111111;
    color: #ffffff;
    padding: 16px 22px;
    border-radius: 6px;
    box-shadow: 0 12px 36px rgba(0,0,0,0.35);
    display: flex;
    align-items: center;
    gap: 14px;
}

.smith-toast-icon {
    width: 24px;
    height: 24px;
    border-radius: 50%;
    background: #27ae60;
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 900;
    font-size: 12px;
}

.smith-toast-title {
    font-weight: 800;
    font-size: 13px;
}

.smith-toast-prod {
    font-size: 11px;
    color: #ccc;
}

.smith-toast-viewcart {
    background: #ffffff;
    color: #111111;
    padding: 6px 12px;
    border-radius: 3px;
    font-size: 11px;
    font-weight: 800;
    text-decoration: none;
    margin-left: 8px;
}

.smith-toast-close {
    background: transparent;
    border: none;
    color: #888;
    font-size: 18px;
    cursor: pointer;
}
</style>

<script>
var smithVariantDataMap = <?php echo json_encode($variant_data_map); ?>;
var smithVariantsRaw = <?php echo json_encode($variants); ?>;
var smithCurrentState = {
    handle: <?php echo json_encode($smith_product); ?>,
    title: <?php echo json_encode($title); ?>,
    activeVariantId: <?php echo json_encode($cur_v_id); ?>,
    activeColor: <?php echo json_encode($current_color_val); ?>,
    activeSize: <?php echo json_encode($current_size_val); ?>,
    activePrice: <?php echo json_encode($current_price_num); ?>,
    activePriceFormatted: <?php echo json_encode($current_price_str); ?>
};

// Scroll listener for Floating Sticky Top Bar
window.addEventListener('scroll', function() {
    var bar = document.getElementById('smith-floating-pdp-bar');
    if (bar) {
        if (window.scrollY > 650) {
            bar.style.display = 'block';
        } else {
            bar.style.display = 'none';
        }
    }
});

function smithUpdateVariantUI(data) {
    if (!data) return;

    var colorTitle = document.getElementById('smith-active-color-title');
    if (colorTitle) colorTitle.textContent = data.option1 || data.title;
    var priceBox = document.getElementById('smith-buybox-price-text');
    if (priceBox) {
        priceBox.innerHTML = '<span class="smith-stock-label">CÒN HÀNG</span>';
    }
    var floatPrice = document.getElementById('smith-floating-price');
    if (floatPrice) floatPrice.textContent = 'CÒN HÀNG';

    if (document.getElementById('smith-spec-prod-id')) {
        document.getElementById('smith-spec-prod-id').textContent = data.sku || '';
    }
    var priceNum = parseFloat(data.price.replace(/,/g, '')) || 217.00;
    var installmentValue = document.getElementById('smith-installment-val');
    if (installmentValue) installmentValue.textContent = '$' + (priceNum / 4).toFixed(2);

    if (data.img_3q) {
        document.getElementById('smith-img-3q').src = data.img_3q;
        var floatThumb = document.getElementById('smith-floating-thumb');
        if (floatThumb) floatThumb.src = data.img_3q;
    }
    var frontImage = document.getElementById('smith-img-ff');
    var sideImage = document.getElementById('smith-img-side');
    var detailImage = document.getElementById('smith-img-wi');
    var lifestyleImage = document.getElementById('smith-img-life');
    if (data.img_ff && frontImage) frontImage.src = data.img_ff;
    if (data.img_side && sideImage) sideImage.src = data.img_side;
    if (data.img_wi && detailImage) detailImage.src = data.img_wi;
    if (data.lifestyles && data.lifestyles.length > 0) {
        if (lifestyleImage) lifestyleImage.src = data.lifestyles[0];
    }

    smithCurrentState.activeVariantId = data.id;
    smithCurrentState.activePrice = priceNum;
    smithCurrentState.activePriceFormatted = '$' + data.price;
    if (data.option1) smithCurrentState.activeColor = data.option1;
    if (data.option2 && (/^(S|M|L|XL|XXL|OSFA|One Size|\d+)/i.test(data.option2) || data.option2.indexOf('cm') !== -1)) {
        smithCurrentState.activeSize = data.option2;
    }
    try {
        var url = new URL(window.location);
        url.searchParams.set('variant', data.id);
        window.history.replaceState({}, '', url);
    } catch(e){}
}

function smithFindMatchingVariant(color, size) {
    var match = null;
    if (size) {
        match = smithVariantsRaw.find(function(v) {
            var c = v.option1 || v.title;
            var s = v.option2 || '';
            return (c === color && s === size);
        });
    }
    if (!match) {
        match = smithVariantsRaw.find(function(v) {
            var c = v.option1 || v.title;
            return (c === color);
        });
    }
    return match ? (smithVariantDataMap[match.id] || null) : null;
}

function smithSelectColorVariant(btn) {
    var color = btn.getAttribute('data-color');
    smithCurrentState.activeColor = color;

    document.querySelectorAll('.smith-rect-swatch').forEach(function(s) {
        s.classList.remove('is-selected');
    });
    btn.classList.add('is-selected');

    var vData = smithFindMatchingVariant(color, smithCurrentState.activeSize);
    if (!vData) {
        var vId = btn.getAttribute('data-variant-id');
        vData = smithVariantDataMap[vId];
    }
    if (vData) smithUpdateVariantUI(vData);
}

function smithSelectSizeVariant(btn) {
    var size = btn.getAttribute('data-size');
    smithCurrentState.activeSize = size;

    document.querySelectorAll('.smith-size-btn').forEach(function(b) {
        b.classList.remove('is-active');
    });
    btn.classList.add('is-active');
    var sizeTitleEl = document.getElementById('smith-active-size-title');
    if (sizeTitleEl) sizeTitleEl.textContent = size;

    var vData = smithFindMatchingVariant(smithCurrentState.activeColor, size);
    if (vData) smithUpdateVariantUI(vData);
}

function smithFilterSwatches(category, btn) {
    document.querySelectorAll('.smith-color-filter-tabs .tab-btn').forEach(function(t) {
        t.classList.remove('is-active');
    });
    btn.classList.add('is-active');

    document.querySelectorAll('.smith-rect-swatch').forEach(function(sw) {
        if (category === 'all') {
            sw.style.display = 'flex';
        } else {
            var cat = sw.getAttribute('data-category');
            sw.style.display = (cat === category) ? 'flex' : 'none';
        }
    });
}

function smithToggleMorePhotos() {
    var extra = document.getElementById('smith-extra-photos-grid');
    var btn = document.getElementById('smith-view-more-btn');
    if (extra.style.display === 'none') {
        extra.style.display = 'grid';
        btn.textContent = 'View Less';
    } else {
        extra.style.display = 'none';
        btn.textContent = 'View More';
    }
}

function smithScrollKitMini(direction) {
    var track = document.getElementById('smith-kit-mini-track');
    if (track) {
        track.scrollBy({ left: direction * 140, behavior: 'smooth' });
    }
}

function smithScrollYouLike(direction) {
    var track = document.getElementById('smith-you-like-track');
    if (track) {
        track.scrollBy({ left: direction * 280, behavior: 'smooth' });
    }
}

function smithAddToCartOfficial() {
    var item = {
        id: smithCurrentState.activeVariantId || smithCurrentState.handle,
        title: smithCurrentState.title + (smithCurrentState.activeColor ? ' - ' + smithCurrentState.activeColor : '') + (smithCurrentState.activeSize ? ' / ' + smithCurrentState.activeSize : ''),
        price: smithCurrentState.activePrice * 100,
        image: document.getElementById('smith-img-3q').src,
        quantity: 1,
        url: window.location.pathname + '?variant=' + (smithCurrentState.activeVariantId || '')
    };

    try {
        var cart = JSON.parse(localStorage.getItem('smith_cloned_cart')) || { items: [], item_count: 0, total_price: 0 };
        var existing = cart.items.find(function(i) { return String(i.id) === String(item.id); });
        if (existing) {
            existing.quantity += 1;
        } else {
            cart.items.push(item);
        }
        cart.item_count = cart.items.reduce(function(sum, i) { return sum + i.quantity; }, 0);
        cart.total_price = cart.items.reduce(function(sum, i) { return sum + (i.price * i.quantity); }, 0);
        localStorage.setItem('smith_cloned_cart', JSON.stringify(cart));

        document.querySelectorAll('[data-cart-count], .cart-count, .cart-count-bubble, [cart-count]').forEach(function(el) {
            el.textContent = cart.item_count;
            el.style.display = cart.item_count > 0 ? '' : 'none';
        });
    } catch(e){}

    var toast = document.getElementById('smith-cart-toast');
    if (toast) {
        document.getElementById('smith-toast-item-name').textContent = item.title;
        toast.style.display = 'block';
        setTimeout(function() {
            toast.style.display = 'none';
        }, 4500);
    }
}
</script>

<?php
get_footer();
