<?php
/** Dynamic, database-backed blog article. */
if (!defined('ABSPATH')) exit;

$post_id = absint(get_query_var('smith_blog_post_id'));
$blog_post = $post_id ? get_post($post_id) : null;
if (!$blog_post instanceof WP_Post) {
    status_header(404);
    nocache_headers();
    include get_404_template();
    exit;
}

$GLOBALS['post'] = $blog_post;
setup_postdata($blog_post);
get_header();
?>
<main id="MainContent" class="smith-article" role="main">
    <article <?php post_class('smith-article__post', $post_id); ?>>
        <header class="smith-article__header smith-blog__wrap">
            <a class="smith-article__back" href="<?php echo esc_url(home_url('/bai-viet/')); ?>">← Tất cả bài viết</a>
            <p class="smith-blog__eyebrow">CÂU CHUYỆN SMITH</p>
            <h1><?php echo esc_html(get_the_title($post_id)); ?></h1>
            <div class="smith-article__meta">
                <time datetime="<?php echo esc_attr(get_the_date(DATE_W3C, $post_id)); ?>"><?php echo esc_html(get_the_date('d/m/Y', $post_id)); ?></time>
            </div>
        </header>

        <?php if (has_post_thumbnail($post_id)) : ?>
            <figure class="smith-article__hero-image">
                <?php echo get_the_post_thumbnail($post_id, 'full', array('fetchpriority' => 'high', 'decoding' => 'async')); ?>
            </figure>
        <?php endif; ?>

        <div class="smith-article__content smith-blog__wrap">
            <?php echo apply_filters('the_content', $blog_post->post_content); ?>
        </div>

        <footer class="smith-article__footer smith-blog__wrap">
            <a href="<?php echo esc_url(home_url('/bai-viet/')); ?>">← Quay lại trang bài viết</a>
        </footer>
    </article>
</main>
<?php
wp_reset_postdata();
get_footer();
