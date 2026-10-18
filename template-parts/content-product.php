<?php
/**
 * Product Card Component
 */
if (!defined('ABSPATH')) exit;

$p_handle = isset($product['handle']) ? $product['handle'] : '';
$p_title = isset($product['title']) ? $product['title'] : 'Smith Product';
$p_price = isset($product['price']) ? $product['price'] : '$185.00';
$p_image = isset($product['image']) ? smith_get_image_url($product['image']) : smith_get_image_url('');
$p_cat = isset($product['category']) ? strtoupper($product['category']) : 'SMITH OPTICS';
$p_url = esc_url(home_url('/products/' . $p_handle));
?>
<div class="smith-card" data-handle="<?php echo esc_attr($p_handle); ?>">
    <div class="smith-card-img-wrap">
        <a href="<?php echo $p_url; ?>">
            <img src="<?php echo esc_url($p_image); ?>" alt="<?php echo esc_attr($p_title); ?>" loading="lazy">
        </a>
    </div>
    <div class="smith-card-body">
        <span class="smith-card-cat"><?php echo esc_html($p_cat); ?></span>
        <h3 class="smith-card-title">
            <a href="<?php echo $p_url; ?>"><?php echo esc_html($p_title); ?></a>
        </h3>
        <div class="smith-card-footer">
            <span class="smith-card-price"><?php echo esc_html($p_price); ?></span>
            <a href="<?php echo $p_url; ?>" class="smith-card-btn">Xem chi tiết</a>
        </div>
    </div>
</div>
