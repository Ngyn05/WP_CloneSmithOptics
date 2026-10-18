<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class('smith-blog-page'); ?>>
<?php wp_body_open(); ?>
<div class="smith-blog-topbar">
    <div>🇻🇳 VIỆT NAM</div>
    <a href="<?php echo esc_url(home_url('/trang/tim-cua-hang/')); ?>">TÌM CỬA HÀNG</a>
</div>
<header class="smith-blog-header">
    <a class="smith-blog-logo" href="<?php echo esc_url(home_url('/')); ?>" aria-label="Smith - Trang chủ">SMITH</a>
    <nav class="smith-blog-nav" aria-label="Điều hướng chính">
        <a href="<?php echo esc_url(home_url('/bo-suu-tap/new-arrivals/')); ?>">Nổi bật</a>
        <a href="<?php echo esc_url(home_url('/bo-suu-tap/eyewear/')); ?>">Kính mắt</a>
        <a href="<?php echo esc_url(home_url('/bo-suu-tap/helmets/')); ?>">Mũ bảo hiểm</a>
        <a href="<?php echo esc_url(home_url('/bo-suu-tap/goggles/')); ?>">Kính bảo hộ</a>
        <a href="<?php echo esc_url(home_url('/bo-suu-tap/apparel/')); ?>">Trang phục</a>
        <a href="<?php echo esc_url(home_url('/bo-suu-tap/accessories/')); ?>">Phụ kiện</a>
        <a href="<?php echo esc_url(home_url('/bo-suu-tap/sale/')); ?>"><strong>Giảm giá</strong></a>
        <a class="is-active" href="<?php echo esc_url(home_url('/')); ?>">Khám phá</a>
    </nav>
    <a class="smith-blog-search" href="<?php echo esc_url(home_url('/?s=')); ?>" aria-label="Tìm kiếm"><span aria-hidden="true">⌕</span><span>Tìm kiếm</span></a>
</header>
