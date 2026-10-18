<?php
/**
 * Dynamic Page Template for Smith Optics
 * Handles Contact Us, Warranty, Returns, Size Guide, About Us, Support, FAQ, Cart, etc.
 *
 * @package Smith_Optics
 */

get_header();

$page_handle = get_query_var('smith_page');
if (empty($page_handle)) {
    $page_handle = get_post_field('post_name', get_post());
}
$page_handle = strtolower(trim($page_handle, '/'));
$page_title_map = array(
    'theo-doi-don-hang' => 'Theo dõi đơn hàng',
    'trung-tam-doi-tra' => 'Trung tâm đổi trả',
);
$page_display_title = isset($page_title_map[$page_handle])
    ? $page_title_map[$page_handle]
    : ucwords(str_replace('-', ' ', $page_handle));
?>

<main id="MainContent" class="content-for-layout focus-none main-page" role="main" tabindex="-1">
    
    <!-- Breadcrumb -->
    <div style="background: #fbfbfb; border-bottom: 1px solid #eee; padding: 14px 0;">
        <div style="max-width: 1200px; margin: 0 auto; padding: 0 20px; font-size: 13px; color: #777;">
            <a href="<?php echo esc_url(home_url('/')); ?>" style="color: #666; text-decoration: none;">Trang chủ</a>
            <span style="margin: 0 8px;">/</span>
            <span style="color: #111; font-weight: 600;">
                <?php 
                if ($page_handle === 'cart') echo 'Shopping Cart';
                elseif (strpos($page_handle, 'contact') !== false) echo 'Contact Us';
                elseif (strpos($page_handle, 'warranty') !== false) echo 'Warranty Policy';
                elseif (strpos($page_handle, 'return') !== false) echo 'Returns & Exchanges';
                elseif (strpos($page_handle, 'size') !== false) echo 'Size & Fit Guide';
                elseif (strpos($page_handle, 'about') !== false || strpos($page_handle, 'our-story') !== false) echo 'About Smith Optics';
                elseif ($page_handle === 'support' || strpos($page_handle, 'faq') !== false) echo 'Customer Support & FAQ';
                else echo esc_html($page_display_title);
                ?>
            </span>
        </div>
    </div>

    <div class="page-width section-template--padding" style="max-width: 1200px; margin: 40px auto 80px; padding: 0 20px;">

    <?php if ($page_handle === 'cart'): ?>
        <!-- ==================== 1. SHOPPING CART ==================== -->
        <div id="smith-cart-view">
            <h1 style="font-size: 36px; font-weight: 900; text-transform: uppercase; margin-bottom: 30px; letter-spacing: -0.5px;">
                Your Shopping Cart
            </h1>

            <div id="smith-cart-empty" style="display: none; text-align: center; padding: 60px 20px; background: #fafafa; border: 1px solid #eee; border-radius: 6px;">
                <div style="font-size: 48px; margin-bottom: 16px;">🛍️</div>
                <h2 style="font-size: 22px; font-weight: 800; margin-bottom: 10px;">Giỏ hàng của bạn hiện đang trống</h2>
                <p style="color: #666; margin-bottom: 24px;">Có vẻ như bạn chưa thêm sản phẩm nào vào giỏ hàng.</p>
                <a href="<?php echo esc_url(home_url('/collections/new-arrivals')); ?>" style="display: inline-block; background: #000; color: #fff; padding: 14px 30px; border-radius: 4px; font-weight: 800; text-decoration: none; text-transform: uppercase; font-size: 13px;">
                    Explore New Arrivals
                </a>
            </div>

            <div id="smith-cart-content" style="display: grid; grid-template-columns: 2fr 1fr; gap: 40px; align-items: start;">
                <!-- Cart Items List -->
                <div style="background: #ffffff; border: 1px solid #ebebeb; border-radius: 6px; padding: 24px;">
                    <div style="display: flex; justify-content: space-between; padding-bottom: 16px; border-bottom: 1px solid #eee; font-size: 13px; font-weight: 700; color: #777; text-transform: uppercase;">
                        <span>Product</span>
                        <span>Total</span>
                    </div>
                    <div id="smith-cart-items-list" style="padding-top: 10px;">
                        <!-- JS renders items here -->
                    </div>
                </div>

                <!-- Cart Summary -->
                <div style="background: #fafafa; border: 1px solid #e5e5e5; border-radius: 6px; padding: 24px; position: sticky; top: 120px;">
                    <h3 style="font-size: 18px; font-weight: 800; text-transform: uppercase; margin: 0 0 20px 0; border-bottom: 2px solid #111; padding-bottom: 10px;">
                        Order Summary
                    </h3>
                    
                    <div style="display: flex; justify-content: space-between; margin-bottom: 12px; font-size: 14px; color: #555;">
                        <span>Subtotal</span>
                        <strong id="smith-cart-subtotal" style="color: #111;">$0.00</strong>
                    </div>

                    <div style="display: flex; justify-content: space-between; margin-bottom: 12px; font-size: 14px; color: #555;">
                        <span>Shipping</span>
                        <span style="color: #2e7d32; font-weight: 700;">FREE</span>
                    </div>

                    <div style="display: flex; justify-content: space-between; margin-bottom: 20px; font-size: 14px; color: #555;">
                        <span>Estimated Tax</span>
                        <span>$0.00</span>
                    </div>

                    <div style="display: flex; justify-content: space-between; margin-top: 16px; padding-top: 16px; border-top: 1px solid #ddd; font-size: 18px; font-weight: 900; color: #111;">
                        <span>Total</span>
                        <span id="smith-cart-total">$0.00</span>
                    </div>

                    <button type="button" onclick="alert('Proceeding to Smith Optics Secure Checkout...');" style="width: 100%; background: #000000; color: #ffffff; border: none; border-radius: 4px; padding: 16px; font-weight: 800; font-size: 14px; text-transform: uppercase; letter-spacing: 1px; margin-top: 24px; cursor: pointer;">
                        Proceed to Checkout
                    </button>

                    <a href="<?php echo esc_url(home_url('/collections/all')); ?>" style="display: block; text-align: center; margin-top: 16px; font-size: 13px; color: #555; text-decoration: underline;">
                        Continue Shopping
                    </a>
                </div>
            </div>
        </div>

        <script>
        function renderCartPage() {
            var cart = JSON.parse(localStorage.getItem('smith_cloned_cart')) || { items: [], item_count: 0, total_price: 0 };
            var emptyView = document.getElementById('smith-cart-empty');
            var contentView = document.getElementById('smith-cart-content');
            var itemsList = document.getElementById('smith-cart-items-list');

            if (!cart.items || cart.items.length === 0) {
                if (emptyView) emptyView.style.display = 'block';
                if (contentView) contentView.style.display = 'none';
                return;
            }

            if (emptyView) emptyView.style.display = 'none';
            if (contentView) contentView.style.display = 'grid';

            var html = '';
            var subtotalCents = 0;

            cart.items.forEach(function(item, idx) {
                var pPrice = item.price || 18500;
                var pQty = item.quantity || 1;
                var pTotal = (pPrice * pQty) / 100;
                subtotalCents += (pPrice * pQty);

                html += '<div style="display: flex; gap: 20px; align-items: center; padding: 20px 0; border-bottom: 1px solid #f0f0f0;">';
                html += '<div style="width: 80px; height: 80px; background: #fafafa; border: 1px solid #eee; border-radius: 4px; display: flex; align-items: center; justify-content: center; padding: 6px;">';
                html += '<img src="' + (item.image || '<?php echo get_template_directory_uri(); ?>/assets/images/placeholder_product.webp') + '" style="max-width: 100%; max-height: 100%; object-fit: contain;">';
                html += '</div>';
                
                html += '<div style="flex: 1;">';
                html += '<h4 style="font-size: 15px; font-weight: 700; margin: 0 0 6px;"><a href="' + (item.url || '#') + '" style="color: #111; text-decoration: none;">' + (item.title || 'Smith Gear') + '</a></h4>';
                html += '<div style="font-size: 13px; color: #777;">Unit Price: $' + (pPrice / 100).toFixed(2) + '</div>';
                html += '<div style="display: flex; align-items: center; gap: 14px; margin-top: 10px;">';
                html += '<div style="display: flex; border: 1px solid #ccc; border-radius: 2px;">';
                html += '<button onclick="updateCartItemQty(' + idx + ', -1)" style="padding: 2px 10px; border: none; background: #eee; cursor: pointer;">-</button>';
                html += '<span style="padding: 2px 10px; font-weight: 700; font-size: 13px;">' + pQty + '</span>';
                html += '<button onclick="updateCartItemQty(' + idx + ', 1)" style="padding: 2px 10px; border: none; background: #eee; cursor: pointer;">+</button>';
                html += '</div>';
                html += '<button onclick="removeCartItem(' + idx + ')" style="background: none; border: none; color: #e53935; font-size: 12px; cursor: pointer; text-decoration: underline;">Xóa</button>';
                html += '</div>';
                html += '</div>';

                html += '<div style="font-size: 16px; font-weight: 800; color: #111;">$' + pTotal.toFixed(2) + '</div>';
                html += '</div>';
            });

            if (itemsList) itemsList.innerHTML = html;
            var subtotalStr = '$' + (subtotalCents / 100).toFixed(2);
            var subEl = document.getElementById('smith-cart-subtotal');
            var totEl = document.getElementById('smith-cart-total');
            if (subEl) subEl.textContent = subtotalStr;
            if (totEl) totEl.textContent = subtotalStr;
        }

        function updateCartItemQty(idx, delta) {
            var cart = JSON.parse(localStorage.getItem('smith_cloned_cart')) || { items: [] };
            if (cart.items[idx]) {
                cart.items[idx].quantity += delta;
                if (cart.items[idx].quantity <= 0) {
                    cart.items.splice(idx, 1);
                }
            }
            cart.item_count = cart.items.reduce(function(s, i){ return s + i.quantity; }, 0);
            localStorage.setItem('smith_cloned_cart', JSON.stringify(cart));
            renderCartPage();
        }

        function removeCartItem(idx) {
            var cart = JSON.parse(localStorage.getItem('smith_cloned_cart')) || { items: [] };
            cart.items.splice(idx, 1);
            cart.item_count = cart.items.reduce(function(s, i){ return s + i.quantity; }, 0);
            localStorage.setItem('smith_cloned_cart', JSON.stringify(cart));
            renderCartPage();
        }

        document.addEventListener('DOMContentLoaded', renderCartPage);
        renderCartPage();
        </script>

    <?php elseif (strpos($page_handle, 'contact') !== false): ?>
        <!-- ==================== 2. CONTACT US ==================== -->
        <div>
            <h1 style="font-size: 38px; font-weight: 900; text-transform: uppercase; margin-bottom: 12px;">Liên hệ Smith Optics</h1>
            <p style="color: #666; font-size: 16px; margin-bottom: 40px; line-height: 1.6;">
                Bạn có thắc mắc về sản phẩm, bảo hành hoặc theo dõi đơn hàng? Đội ngũ hỗ trợ khách hàng của chúng tôi luôn sẵn sàng hỗ trợ bạn.
            </p>

            <div style="display: grid; grid-template-columns: 1.2fr 1fr; gap: 50px; align-items: start;">
                <!-- Contact Form -->
                <div style="background: #fafafa; border: 1px solid #eee; border-radius: 6px; padding: 30px;">
                    <h3 style="font-size: 20px; font-weight: 800; margin-top: 0; margin-bottom: 20px;">Gửi tin nhắn cho chúng tôi</h3>
                    
                    <form onsubmit="event.preventDefault(); alert('Thank you! Your message has been sent to Smith Optics Customer Care.'); this.reset();">
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 16px;">
                            <div>
                                <label style="display: block; font-size: 13px; font-weight: 700; margin-bottom: 6px;">Tên *</label>
                                <input type="text" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
                            </div>
                            <div>
                                <label style="display: block; font-size: 13px; font-weight: 700; margin-bottom: 6px;">Họ *</label>
                                <input type="text" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
                            </div>
                        </div>

                        <div style="margin-bottom: 16px;">
                            <label style="display: block; font-size: 13px; font-weight: 700; margin-bottom: 6px;">Địa chỉ Email *</label>
                            <input type="email" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
                        </div>

                        <div style="margin-bottom: 16px;">
                            <label style="display: block; font-size: 13px; font-weight: 700; margin-bottom: 6px;">Chủ đề cần hỗ trợ</label>
                            <select style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px; background: #fff;">
                                <option>Order Status & Shipping</option>
                                <option>Warranty Claim & Repair</option>
                                <option>Product & Lens Advice</option>
                                <option>Returns & Exchanges</option>
                                <option>Other Inquiry</option>
                            </select>
                        </div>

                        <div style="margin-bottom: 24px;">
                            <label style="display: block; font-size: 13px; font-weight: 700; margin-bottom: 6px;">Nội dung tin nhắn *</label>
                            <textarea rows="5" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px; resize: vertical;"></textarea>
                        </div>

                        <button type="submit" style="background: #000; color: #fff; border: none; padding: 14px 28px; border-radius: 4px; font-weight: 800; text-transform: uppercase; font-size: 13px; cursor: pointer;">
                            Submit Message
                        </button>
                    </form>
                </div>

                <!-- Contact Channels -->
                <div>
                    <div style="background: #ffffff; border: 1px solid #ebebeb; border-radius: 6px; padding: 26px; margin-bottom: 24px;">
                        <h4 style="font-size: 16px; font-weight: 800; text-transform: uppercase; margin: 0 0 12px;">📞 Hỗ trợ qua Điện thoại</h4>
                        <p style="color: #444; font-size: 15px; margin: 0 0 8px;"><strong>1-888-206-2995</strong></p>
                        <p style="color: #777; font-size: 13px; margin: 0;">Thứ Hai – Thứ Sáu: 8:00 – 17:00 (Giờ MST)</p>
                    </div>

                    <div style="background: #ffffff; border: 1px solid #ebebeb; border-radius: 6px; padding: 26px; margin-bottom: 24px;">
                        <h4 style="font-size: 16px; font-weight: 800; text-transform: uppercase; margin: 0 0 12px;">✉️ Hỗ trợ qua Email</h4>
                        <p style="color: #444; font-size: 15px; margin: 0 0 8px;"><a href="mailto:help@smithoptics.com" style="color: #000; font-weight: 700;">help@smithoptics.com</a></p>
                        <p style="color: #777; font-size: 13px; margin: 0;">Chúng tôi thường phản hồi trong vòng 1 ngày làm việc.</p>
                    </div>

                    <div style="background: #ffffff; border: 1px solid #ebebeb; border-radius: 6px; padding: 26px;">
                        <h4 style="font-size: 16px; font-weight: 800; text-transform: uppercase; margin: 0 0 12px;">🏢 Trụ sở chính</h4>
                        <p style="color: #555; font-size: 14px; line-height: 1.6; margin: 0;">
                            Smith Optics Inc.<br>
                            220 NW 8th Ave<br>
                            Portland, OR 97209, USA
                        </p>
                    </div>
                </div>
            </div>
        </div>

    <?php elseif (strpos($page_handle, 'warranty') !== false): ?>
        <!-- ==================== 3. WARRANTY POLICY ==================== -->
        <div>
            <h1 style="font-size: 38px; font-weight: 900; text-transform: uppercase; margin-bottom: 16px;">Bảo hành trọn đời Smith</h1>
            <p style="color: #666; font-size: 16px; margin-bottom: 30px; line-height: 1.6;">
                Chúng tôi tạo nên các sản phẩm bền bỉ trong những điều kiện khắc nghiệt nhất. Smith Optics bảo hành tất cả kính râm, kính bảo hộ và mũ bảo hiểm chính hãng đối với các lỗi từ nhà sản xuất.
            </p>

            <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; margin-bottom: 40px;">
                <div style="background: #fafafa; border: 1px solid #eee; border-radius: 6px; padding: 24px;">
                    <h3 style="font-size: 18px; font-weight: 800; margin: 0 0 10px;">🕶️ Kính râm</h3>
                    <p style="color: #555; font-size: 14px; line-height: 1.6; margin: 0;">Được bảo hành trọn đời đối với các lỗi sản xuất về vật liệu và kỹ thuật chế tác trong suốt vòng đời của sản phẩm.</p>
                </div>
                <div style="background: #fafafa; border: 1px solid #eee; border-radius: 6px; padding: 24px;">
                    <h3 style="font-size: 18px; font-weight: 800; margin: 0 0 10px;">🥽 Kính bảo hộ</h3>
                    <p style="color: #555; font-size: 14px; line-height: 1.6; margin: 0;">Được bảo hành đối với các trường hợp bong tróc mút xốp, tuột dây đeo và lỗi kết cấu gọng trong suốt vòng đời của kính bảo hộ.</p>
                </div>
                <div style="background: #fafafa; border: 1px solid #eee; border-radius: 6px; padding: 24px;">
                    <h3 style="font-size: 18px; font-weight: 800; margin: 0 0 10px;">🪖 Mũ bảo hiểm</h3>
                    <p style="color: #555; font-size: 14px; line-height: 1.6; margin: 0;">Bảo hành đối với các lỗi kỹ thuật trong 2 năm kể từ ngày mua. Chúng tôi cũng cung cấp chương trình giảm giá thay thế khi va chạm trong 2 năm.</p>
                </div>
            </div>

            <div style="background: #ffffff; border: 1px solid #eee; border-radius: 6px; padding: 30px;">
                <h3 style="font-size: 22px; font-weight: 800; margin-top: 0; margin-bottom: 16px;">Cách thức gửi yêu cầu bảo hành</h3>
                <ol style="color: #444; font-size: 15px; line-height: 1.8; padding-left: 20px; margin: 0 0 24px;">
                    <li>Prepare clear photos showing the defect, overall product, and inside temple/label SKU code.</li>
                    <li>Locate your order number or proof of purchase.</li>
                    <li>Email our warranty specialists at <a href="mailto:warranty@smithoptics.com" style="color: #000; font-weight: 700;">warranty@smithoptics.com</a> or submit via our online form.</li>
                    <li>Our team will review your claim and issue a replacement or store voucher within 3-5 business days.</li>
                </ol>
                <a href="<?php echo esc_url(home_url('/pages/contactus')); ?>" style="display: inline-block; background: #000; color: #fff; padding: 12px 24px; border-radius: 4px; font-weight: 800; text-decoration: none; text-transform: uppercase; font-size: 13px;">
                    File a Warranty Claim
                </a>
            </div>
        </div>

    <?php elseif (strpos($page_handle, 'return') !== false): ?>
        <!-- ==================== 4. RETURNS & EXCHANGES ==================== -->
        <div>
            <h1 style="font-size: 38px; font-weight: 900; text-transform: uppercase; margin-bottom: 16px;">Đổi trả trong 30 ngày</h1>
            <p style="color: #666; font-size: 16px; margin-bottom: 30px; line-height: 1.6;">
                Nếu bạn chưa hoàn toàn hài lòng với sản phẩm Smith đã mua, bạn có thể đổi trả sản phẩm trong vòng 30 ngày kể từ ngày nhận hàng để được hoàn tiền hoặc đổi hàng.
            </p>

            <div style="background: #fafafa; border: 1px solid #eee; border-radius: 6px; padding: 30px; margin-bottom: 30px;">
                <h3 style="font-size: 20px; font-weight: 800; margin-top: 0; margin-bottom: 14px;">Điều kiện đổi trả</h3>
                <ul style="color: #444; font-size: 15px; line-height: 1.8; padding-left: 20px; margin: 0;">
                    <li>Items must be in new, unworn, and undamaged condition.</li>
                    <li>Must include all original packaging, tags, goggle microfiber bags, and cases.</li>
                    <li>Custom prescription eyewear and Final Sale items are non-returnable.</li>
                    <li>Free prepaid return shipping labels are provided for all US domestic returns.</li>
                </ul>
            </div>

            <div style="text-align: center; padding: 40px; background: #ffffff; border: 2px dashed #ccc; border-radius: 6px;">
                <h3 style="font-size: 22px; font-weight: 800; margin: 0 0 10px;">Bạn đã sẵn sàng đổi trả sản phẩm?</h3>
                <p style="color: #666; margin-bottom: 20px;">Nhập mã đơn hàng và mã bưu chính thanh toán vào cổng đổi trả của chúng tôi.</p>
                <a href="<?php echo esc_url(home_url('/pages/contactus')); ?>" style="display: inline-block; background: #000; color: #fff; padding: 14px 30px; border-radius: 4px; font-weight: 800; text-decoration: none; text-transform: uppercase; font-size: 13px;">
                    Open Return Portal
                </a>
            </div>
        </div>

    <?php elseif (strpos($page_handle, 'size') !== false): ?>
        <!-- ==================== 5. SIZE GUIDE ==================== -->
        <div>
            <h1 style="font-size: 38px; font-weight: 900; text-transform: uppercase; margin-bottom: 16px;">Hướng dẫn chọn kích thước & Độ vừa vặn Smith</h1>
            <p style="color: #666; font-size: 16px; margin-bottom: 30px; line-height: 1.6;">
                Tìm kích cỡ hoàn hảo cho mũ bảo hiểm, kính râm và kính bảo hộ Smith để đảm bảo sự thoải mái và hiệu suất tối ưu nhất.
            </p>

            <h2 style="font-size: 24px; font-weight: 800; margin-bottom: 16px;">Bảng kích thước Mũ bảo hiểm</h2>
            <table style="width: 100%; border-collapse: collapse; margin-bottom: 40px; font-size: 14px;">
                <thead>
                    <tr style="background: #111; color: #fff; text-align: left;">
                        <th style="padding: 12px 16px;">Kích thước</th>
                        <th style="padding: 12px 16px;">Head Circumference (CM)</th>
                        <th style="padding: 12px 16px;">Head Circumference (IN)</th>
                        <th style="padding: 12px 16px;">Hat Size</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="border-bottom: 1px solid #eee; background: #fafafa;"><td style="padding: 12px 16px; font-weight: 700;">Small (S)</td><td style="padding: 12px 16px;">51 – 55 cm</td><td style="padding: 12px 16px;">20.1 – 21.7 in</td><td style="padding: 12px 16px;">6 3/8 – 6 7/8</td></tr>
                    <tr style="border-bottom: 1px solid #eee;"><td style="padding: 12px 16px; font-weight: 700;">Medium (M)</td><td style="padding: 12px 16px;">55 – 59 cm</td><td style="padding: 12px 16px;">21.7 – 23.2 in</td><td style="padding: 12px 16px;">6 7/8 – 7 3/8</td></tr>
                    <tr style="border-bottom: 1px solid #eee; background: #fafafa;"><td style="padding: 12px 16px; font-weight: 700;">Large (L)</td><td style="padding: 12px 16px;">59 – 63 cm</td><td style="padding: 12px 16px;">23.2 – 24.8 in</td><td style="padding: 12px 16px;">7 3/8 – 7 7/8</td></tr>
                    <tr style="border-bottom: 1px solid #eee;"><td style="padding: 12px 16px; font-weight: 700;">X-Large (XL)</td><td style="padding: 12px 16px;">63 – 67 cm</td><td style="padding: 12px 16px;">24.8 – 26.4 in</td><td style="padding: 12px 16px;">7 7/8 – 8 3/8</td></tr>
                </tbody>
            </table>

            <h2 style="font-size: 24px; font-weight: 800; margin-bottom: 16px;">Hướng dẫn độ vừa vặn của Kính bảo hộ & Kính mắt</h2>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 24px;">
                <div style="background: #fafafa; border: 1px solid #eee; border-radius: 6px; padding: 24px;">
                    <h4 style="font-size: 16px; font-weight: 800; margin: 0 0 10px;">Độ vừa vặn tiêu chuẩn (Standard Fit)</h4>
                    <p style="color: #555; font-size: 14px; line-height: 1.6; margin: 0;">Thiết kế chuẩn cho sống mũi và xương gò má tiêu chuẩn. Trang bị đệm mút xốp DriWix nhiều lớp ôm sát khuôn mặt.</p>
                </div>
                <div style="background: #fafafa; border: 1px solid #eee; border-radius: 6px; padding: 24px;">
                    <h4 style="font-size: 16px; font-weight: 800; margin: 0 0 10px;">Độ vừa vặn sống mũi thấp (Asian Fit)</h4>
                    <p style="color: #555; font-size: 14px; line-height: 1.6; margin: 0;">Thiết kế bổ sung đệm mút xốp ở phần sống mũi giúp loại bỏ khe hở đối với gò má cao và sống mũi thấp.</p>
                </div>
            </div>
        </div>

    <?php elseif (strpos($page_handle, 'about') !== false || strpos($page_handle, 'our-story') !== false): ?>
        <!-- ==================== 6. ABOUT US ==================== -->
        <div>
            <h1 style="font-size: 40px; font-weight: 900; text-transform: uppercase; margin-bottom: 16px;">Theo đuổi đam mê của bạn</h1>
            <p style="color: #444; font-size: 18px; line-height: 1.6; margin-bottom: 30px;">
                Khởi nguồn từ Sun Valley, Idaho vào năm 1965, Smith Optics đã tiên phong tạo ra tròng kính bảo hộ nhiệt hiện đại và không ngừng đổi mới công nghệ quang học ngoài trời suốt hơn 6 thập kỷ qua.
            </p>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; align-items: center; margin-bottom: 40px;">
                <div style="background: #fafafa; border: 1px solid #eee; border-radius: 6px; padding: 30px;">
                    <h3 style="font-size: 22px; font-weight: 800; margin-top: 0;">Di sản thương hiệu Smith</h3>
                    <p style="color: #555; font-size: 15px; line-height: 1.7; margin: 0;">
                        Được sáng lập bởi bác sĩ phẫu thuật nha khoa kiêm vận động viên trượt tuyết đam mê - Tiến sĩ Bob Smith, người đã tạo ra chiếc kính bảo hộ chống đọng sương kín nhiệt đầu tiên bằng các dụng cụ nha khoa và mút xốp. Ngày nay, Smith tiếp tục là chuẩn mực toàn cầu về kính bảo hộ tuyết, mũ bảo hiểm và kính râm phân cực hiệu năng cao.
                    </p>
                </div>
                <div style="background: #fafafa; border: 1px solid #eee; border-radius: 6px; padding: 30px;">
                    <h3 style="font-size: 22px; font-weight: 800; margin-top: 0;">Công nghệ ChromaPop™</h3>
                    <p style="color: #555; font-size: 15px; line-height: 1.7; margin: 0;">
                        Công nghệ tròng kính độc quyền ChromaPop™ lọc các bước sóng ánh sáng giao thoa giữa màu xanh lam, xanh lục và đỏ, mang lại độ phân giải màu sắc vượt trội, độ sắc nét tuyệt đối và tăng cường chiều sâu thị giác.
                    </p>
                </div>
            </div>
        </div>

    <?php else: ?>
        <!-- ==================== 7. GENERAL / WORDPRESS POST CONTENT ==================== -->
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <h1 class="main-page-title page-title h0" style="font-size: 36px; font-weight: 900; margin-bottom: 24px; text-transform: uppercase;"><?php the_title(); ?></h1>
            <div class="rte" style="font-size: 15px; line-height: 1.8; color: #333;"><?php the_content(); ?></div>
        <?php endwhile; else: ?>
            <h1 style="font-size: 36px; font-weight: 900; margin-bottom: 20px; text-transform: uppercase;">
                <?php echo esc_html($page_display_title); ?>
            </h1>
            <div style="font-size: 15px; line-height: 1.8; color: #444; background: #fafafa; border: 1px solid #eee; border-radius: 6px; padding: 30px;">
                <p>Chào mừng bạn đến với cổng thông tin chính thức của Smith Optics dành cho <strong><?php echo esc_html($page_display_title); ?></strong>.</p>
                <p>Để được hỗ trợ nhanh về đơn hàng hoặc sản phẩm, vui lòng truy cập trang <a href="<?php echo esc_url(home_url('/trang/lien-he')); ?>" style="color: #000; font-weight: 700;">Liên hệ chúng tôi</a> hoặc gọi đến số <strong>1-888-206-2995</strong>.</p>
                <div style="margin-top: 24px;">
                    <a href="<?php echo esc_url(home_url('/bo-suu-tap/san-pham-moi')); ?>" style="display: inline-block; background: #000; color: #fff; padding: 12px 24px; border-radius: 4px; font-weight: 800; text-decoration: none; text-transform: uppercase; font-size: 13px;">
                        Mua sắm sản phẩm Smith
                    </a>
                </div>
            </div>
        <?php endif; ?>

    <?php endif; ?>

    </div>
</main>

<?php
get_footer();
