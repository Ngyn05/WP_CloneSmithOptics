<?php
/** Dynamic, database-backed blog archive. */
if (!defined('ABSPATH')) exit;

$current_page = isset($_GET['page']) ? max(1, absint($_GET['page'])) : 1;
$blog_query = new WP_Query(array(
    'post_type'              => 'post',
    'post_status'            => 'publish',
    'posts_per_page'         => 12,
    'paged'                  => $current_page,
    'category_name'          => 'blog',
    'orderby'                => 'date',
    'order'                  => 'DESC',
    'ignore_sticky_posts'    => true,
    'no_found_rows'          => false,
));

get_header();
?>
<main id="MainContent" class="smith-blog" role="main">
    <header class="smith-blog__hero">
        <div class="smith-blog__wrap">
            <div class="smith-blog__hero-copy">
                <p class="smith-blog__eyebrow">CÂU CHUYỆN SMITH / NHẬT KÝ</p>
                <h1>Bài viết<br>&amp; Tin tức</h1>
            </div>
            <div class="smith-blog__hero-intro">
                <span class="smith-blog__hero-line" aria-hidden="true"></span>
                <p>Những câu chuyện về con người, sản phẩm và các hành trình ngoài trời truyền cảm hứng cho chúng tôi.</p>
                <span class="smith-blog__count"><?php echo esc_html(number_format_i18n($blog_query->found_posts)); ?> câu chuyện</span>
            </div>
        </div>
    </header>

    <section class="smith-blog__wrap smith-blog__section" aria-label="Danh sách bài viết">
        <div class="smith-blog__section-head">
            <h2>Mới nhất</h2>
            <span>Cập nhật từ Smith</span>
        </div>
        <?php if ($blog_query->have_posts()) : ?>
            <div class="smith-blog__grid">
                <?php while ($blog_query->have_posts()) : $blog_query->the_post(); ?>
                    <article <?php post_class('smith-blog-card'); ?>>
                        <a class="smith-blog-card__image" href="<?php echo esc_url(home_url('/bai-viet/' . get_post_field('post_name', get_the_ID()) . '/')); ?>">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('large', array('loading' => 'lazy', 'decoding' => 'async')); ?>
                            <?php else : ?>
                                <span class="smith-blog-card__placeholder" aria-hidden="true"></span>
                            <?php endif; ?>
                        </a>
                        <div class="smith-blog-card__body">
                            <time datetime="<?php echo esc_attr(get_the_date(DATE_W3C)); ?>"><?php echo esc_html(get_the_date('d/m/Y')); ?></time>
                            <h2><a href="<?php echo esc_url(home_url('/bai-viet/' . get_post_field('post_name', get_the_ID()) . '/')); ?>"><?php the_title(); ?></a></h2>
                            <p><?php echo esc_html(get_the_excerpt()); ?></p>
                            <a class="smith-blog-card__more" href="<?php echo esc_url(home_url('/bai-viet/' . get_post_field('post_name', get_the_ID()) . '/')); ?>">Đọc bài viết <span aria-hidden="true">→</span></a>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>

            <?php if ($blog_query->max_num_pages > 1) : ?>
                <nav class="smith-blog-pagination" aria-label="Phân trang bài viết">
                    <?php for ($page_number = 1; $page_number <= $blog_query->max_num_pages; $page_number++) : ?>
                        <a class="<?php echo $page_number === $current_page ? 'is-current' : ''; ?>" href="<?php echo esc_url(add_query_arg('page', $page_number, home_url('/bai-viet/'))); ?>"<?php echo $page_number === $current_page ? ' aria-current="page"' : ''; ?>><?php echo esc_html($page_number); ?></a>
                    <?php endfor; ?>
                </nav>
            <?php endif; ?>
        <?php else : ?>
            <p class="smith-blog__empty">Hiện chưa có bài viết nào.</p>
        <?php endif; wp_reset_postdata(); ?>
    </section>
</main>
<?php get_footer(); ?>
