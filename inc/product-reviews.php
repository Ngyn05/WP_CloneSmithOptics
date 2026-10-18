<?php
/** Local WooCommerce product review rendering and submission. */

if (!defined('ABSPATH')) exit;

function smith_review_stats($product_id) {
    global $wpdb;
    $row = $wpdb->get_row($wpdb->prepare(
        "SELECT COUNT(DISTINCT c.comment_ID) AS review_count,
                COALESCE(AVG(NULLIF(CAST(cm.meta_value AS DECIMAL(3,2)), 0)), 0) AS average_rating
         FROM {$wpdb->comments} c
         LEFT JOIN {$wpdb->commentmeta} cm
           ON cm.comment_id = c.comment_ID AND cm.meta_key = 'rating'
         WHERE c.comment_post_ID = %d
           AND c.comment_approved = '1'
           AND c.comment_type = 'review'",
        (int) $product_id
    ));
    return array(
        'count' => isset($row->review_count) ? (int) $row->review_count : 0,
        'average' => isset($row->average_rating) ? round((float) $row->average_rating, 1) : 0,
    );
}

function smith_render_review_summary($stats, $header = false) {
    $count = (int) ($stats['count'] ?? 0);
    $average = (float) ($stats['average'] ?? 0);
    $class = 'smith-review-summary' . ($header ? ' smith-review-summary--header' : '');
    return '<div class="' . esc_attr($class) . '">'
        . '<span class="smith-rating-stars" style="--smith-rating:' . esc_attr($average * 20) . '%" aria-label="' . esc_attr($average . ' trên 5 sao') . '">★★★★★</span>'
        . '<a class="smith-review-count" href="#reviews">(' . esc_html($count . ' đánh giá') . ')</a>'
        . '</div>';
}

function smith_render_review_item($comment) {
    $rating = max(0, min(5, (int) get_comment_meta($comment->comment_ID, 'rating', true)));
    return '<article class="smith-review-item">'
        . '<div class="smith-review-item-head"><strong>' . esc_html($comment->comment_author) . '</strong>'
        . '<time datetime="' . esc_attr(get_comment_date('c', $comment)) . '">' . esc_html(get_comment_date('d/m/Y', $comment)) . '</time></div>'
        . '<div class="smith-review-item-stars" aria-label="' . esc_attr($rating . ' trên 5 sao') . '">' . esc_html(str_repeat('★', $rating) . str_repeat('☆', 5 - $rating)) . '</div>'
        . '<p>' . nl2br(esc_html($comment->comment_content)) . '</p>'
        . '</article>';
}

function smith_render_product_reviews($product_id) {
    $product_id = (int) $product_id;
    $stats = smith_review_stats($product_id);
    $comments = get_comments(array(
        'post_id' => $product_id,
        'status' => 'approve',
        'type' => 'review',
        'number' => 50,
        'orderby' => 'comment_date_gmt',
        'order' => 'DESC',
    ));

    $html = '<section class="smith-product-reviews" id="reviews" aria-label="Đánh giá và nhận xét sản phẩm">'
        . '<h2>Đánh giá &amp; nhận xét</h2>'
        . smith_render_review_summary($stats)
        . '<p class="smith-review-empty"' . ($stats['count'] ? ' hidden' : '') . '>Chưa có đánh giá nào cho sản phẩm này.</p>'
        . '<button class="smith-review-open" type="button">' . ($stats['count'] ? 'GỬI ĐÁNH GIÁ' : 'HÃY LÀ NGƯỜI ĐẦU TIÊN GỬI ĐÁNH GIÁ') . '</button>'
        . '<form class="smith-review-form" method="post" hidden>'
        . '<input type="hidden" name="action" value="smith_submit_product_review">'
        . '<input type="hidden" name="product_id" value="' . esc_attr($product_id) . '">'
        . '<input type="hidden" name="nonce" value="' . esc_attr(wp_create_nonce('smith_submit_product_review')) . '">'
        . '<fieldset><legend>Đánh giá của bạn</legend><span class="smith-rating-input">';
    for ($rating = 5; $rating >= 1; $rating--) {
        $html .= '<input id="smith-rating-' . esc_attr($product_id . '-' . $rating) . '" type="radio" name="rating" value="' . esc_attr($rating) . '" required>'
            . '<label for="smith-rating-' . esc_attr($product_id . '-' . $rating) . '" aria-label="' . esc_attr($rating . ' sao') . '">★</label>';
    }
    $html .= '</span></fieldset><div class="smith-review-fields">'
        . '<label>Họ tên<input type="text" name="author" autocomplete="name" required></label>'
        . '<label>Email<input type="email" name="email" autocomplete="email" required></label></div>'
        . '<label>Nhận xét<textarea name="content" rows="5" required></textarea></label>'
        . '<button class="smith-review-submit" type="submit">GỬI ĐÁNH GIÁ</button><p class="smith-review-message" aria-live="polite"></p></form>'
        . '<div class="smith-review-list">';
    foreach ($comments as $comment) $html .= smith_render_review_item($comment);
    return $html . '</div></section>';
}

function smith_submit_product_review() {
    check_ajax_referer('smith_submit_product_review', 'nonce');
    $product_id = isset($_POST['product_id']) ? absint($_POST['product_id']) : 0;
    $rating = isset($_POST['rating']) ? absint($_POST['rating']) : 0;
    $author = isset($_POST['author']) ? sanitize_text_field(wp_unslash($_POST['author'])) : '';
    $email = isset($_POST['email']) ? sanitize_email(wp_unslash($_POST['email'])) : '';
    $content = isset($_POST['content']) ? sanitize_textarea_field(wp_unslash($_POST['content'])) : '';
    if (get_post_type($product_id) !== 'product' || $rating < 1 || $rating > 5 || !$author || !is_email($email) || !$content) {
        wp_send_json_error(array('message' => 'Vui lòng nhập đầy đủ thông tin đánh giá.'), 400);
    }

    $comment_id = wp_insert_comment(array(
        'comment_post_ID' => $product_id,
        'comment_author' => $author,
        'comment_author_email' => $email,
        'comment_content' => $content,
        'comment_type' => 'review',
        'comment_approved' => 0,
        'user_id' => get_current_user_id(),
    ));
    if (!$comment_id) wp_send_json_error(array('message' => 'Không thể lưu đánh giá.'), 500);
    update_comment_meta($comment_id, 'rating', $rating);
    wp_send_json_success(array(
        'message' => 'Cảm ơn bạn. Đánh giá đang chờ duyệt.',
        'count' => smith_review_stats($product_id)['count'],
        'average' => smith_review_stats($product_id)['average'],
        'html' => '',
    ));
}
add_action('wp_ajax_smith_submit_product_review', 'smith_submit_product_review');
add_action('wp_ajax_nopriv_smith_submit_product_review', 'smith_submit_product_review');
