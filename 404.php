<?php
get_header();
?>
<main style="max-width: 800px; margin: 100px auto; text-align: center; padding: 0 20px;">
    <h1 style="font-size: 72px; font-weight: 900; margin-bottom: 20px;">404</h1>
    <h2>Page Not Found</h2>
    <p style="color: #666; margin: 20px 0 30px;">Sản phẩm hoặc trang bạn đang tìm kiếm có thể đã được di chuyển hoặc tạm thời không khả dụng.</p>
    <a href="<?php echo esc_url(home_url('/')); ?>" class="smith-card-btn" style="padding: 14px 28px; font-size: 15px; display: inline-block;">Quay lại Trang chủ</a>
</main>
<?php
get_footer();
