(function () {
  'use strict';

  document.addEventListener('DOMContentLoaded', function () {
    var root = document.querySelector('.smith-product-source-snapshot, .smith-unified-pdp');
    if (!root) return;
    var isUnifiedPdp = root.classList.contains('smith-unified-pdp');

    function enableMobileGalleryProgressDrag() {
      var gallery = root.querySelector('.product__media-list');
      var progress = root.querySelector('.slider-progress--pdp');
      var current = root.querySelector('.slider-counter--current');
      var total = root.querySelector('.slider-counter--total');
      if (!gallery || !progress || progress.dataset.smithDraggable === '1') return;
      progress.dataset.smithDraggable = '1';
      progress.setAttribute('role', 'slider');
      progress.setAttribute('tabindex', '0');
      progress.setAttribute('aria-label', 'Chọn ảnh sản phẩm');
      progress.setAttribute('aria-valuemin', '1');

      function visibleSlides() {
        return Array.from(gallery.children).filter(function (slide) {
          return !slide.classList.contains('inactive-variant') && slide.getBoundingClientRect().width > 0;
        });
      }
      function syncAria() {
        progress.setAttribute('aria-valuenow', current ? current.textContent.trim() : '1');
        progress.setAttribute('aria-valuemax', total ? total.textContent.trim() : String(visibleSlides().length || 1));
      }
      function selectAt(clientX, smooth) {
        if (window.innerWidth >= 750) return;
        var slides = visibleSlides();
        if (!slides.length) return;
        var rect = progress.getBoundingClientRect();
        var ratio = Math.max(0, Math.min(1, (clientX - rect.left) / rect.width));
        var index = Math.round(ratio * (slides.length - 1));
        gallery.scrollTo({ left: slides[index].offsetLeft, behavior: smooth ? 'smooth' : 'auto' });
        progress.setAttribute('aria-valuenow', String(index + 1));
      }

      var dragging = false;
      progress.addEventListener('pointerdown', function (event) {
        if (window.innerWidth >= 750) return;
        dragging = true;
        progress.setPointerCapture?.(event.pointerId);
        selectAt(event.clientX, false);
        event.preventDefault();
      });
      progress.addEventListener('pointermove', function (event) {
        if (!dragging) return;
        selectAt(event.clientX, false);
        event.preventDefault();
      });
      function stopDragging(event) {
        if (!dragging) return;
        dragging = false;
        progress.releasePointerCapture?.(event.pointerId);
      }
      progress.addEventListener('pointerup', stopDragging);
      progress.addEventListener('pointercancel', stopDragging);
      progress.addEventListener('keydown', function (event) {
        if (!['ArrowLeft', 'ArrowRight', 'Home', 'End'].includes(event.key)) return;
        var slides = visibleSlides();
        if (!slides.length) return;
        var index = Math.max(0, parseInt(current?.textContent || '1', 10) - 1);
        if (event.key === 'ArrowLeft') index--;
        if (event.key === 'ArrowRight') index++;
        if (event.key === 'Home') index = 0;
        if (event.key === 'End') index = slides.length - 1;
        index = Math.max(0, Math.min(slides.length - 1, index));
        gallery.scrollTo({ left: slides[index].offsetLeft, behavior: 'smooth' });
        event.preventDefault();
      });
      if (current) new MutationObserver(syncAria).observe(current, { childList: true, characterData: true, subtree: true });
      syncAria();
    }
    enableMobileGalleryProgressDrag();

    function localizeProductText(scope) {
      var walker = document.createTreeWalker(scope, NodeFilter.SHOW_TEXT);
      var node;
      while ((node = walker.nextNode())) {
        if (node.parentElement && node.parentElement.closest('script, style, template, svg')) continue;
        var value = node.nodeValue;
        var trimmed = value.trim();
        if (/^Smith helmets are covered by a 3-year limited warranty against manufacturer defects\.?$/i.test(trimmed)) {
          node.nodeValue = value.replace(trimmed, 'Mũ bảo hiểm Smith được bảo hành giới hạn 3 năm đối với các lỗi từ nhà sản xuất.');
          continue;
        }
        if (/^Full price orders are eligible to be returned within 30 days/i.test(trimmed)) {
          node.nodeValue = value.replace(trimmed, 'Đơn hàng mua theo giá niêm yết có thể được trả lại trong vòng 30 ngày kể từ ngày mua, với điều kiện sản phẩm còn mới, chưa qua sử dụng và giữ nguyên bao bì ban đầu. Sản phẩm giảm giá cuối cùng và sản phẩm thuộc chương trình Pro Deals hiện không được áp dụng chính sách đổi trả.');
          continue;
        }
        if (/free\s+(?:standard\s+)?shipping|miễn phí vận chuyển/i.test(trimmed)) {
          node.nodeValue = value.replace(trimmed, trimmed.length > 40 ? 'Đơn hàng đủ điều kiện được miễn phí vận chuyển tiêu chuẩn.' : 'Miễn phí vận chuyển');
          continue;
        }
        if (/(?:\$\s*\d|\d[.,]?\d*\s*(?:₫|VND))/i.test(trimmed)) {
          var priceElement = node.parentElement;
          var priceRoot = priceElement.closest('.price') || priceElement.parentElement;
          priceElement.style.setProperty('display', 'none', 'important');
          if (priceRoot && !priceRoot.querySelector('.smith-stock-label, .price__badge-sold-out, .product-badge')) {
            var stockLabel = document.createElement('span');
            stockLabel.className = 'smith-stock-label';
            stockLabel.textContent = 'Còn hàng';
            priceRoot.appendChild(stockLabel);
          }
          continue;
        }
        var translated = trimmed
          .replace(/Now On Sale For/gi, 'Giá ưu đãi')
          .replace(/Regular Price/gi, 'Giá thông thường')
          .replace(/^(\d+)% Off$/i, 'Giảm $1%')
          .replace(/^Web Exclusive$/i, 'Độc quyền trực tuyến')
          .replace(/^New$/i, 'Mới')
          .replace(/^Best Seller$/i, 'Bán chạy')
          .replace(/^Selling Fast$/i, 'Sắp hết hàng')
          .replace(/^(?:Out of Stock|Sold Out|Unavailable|Hết hàng)$/i, 'Còn hàng')
          .replace(/^View All$/i, 'Xem tất cả')
          .replace(/^Read More$/i, 'Đọc thêm')
          .replace(/^RELEVANCE$/i, 'MỨC ĐỘ LIÊN QUAN')
          .replace(/^MOST POPULAR$/i, 'PHỔ BIẾN NHẤT')
          .replace(/^NEWEST FIRST$/i, 'MỚI NHẤT')
          .replace(/^OLDEST FIRST$/i, 'CŨ NHẤT')
          .replace(/^PRICE LOW TO HIGH$/i, 'GIÁ: THẤP ĐẾN CAO')
          .replace(/^PRICE HIGH TO LOW$/i, 'GIÁ: CAO ĐẾN THẤP')
          .replace(/^GIÁ CẢ THẤP XUỐNG CAO$/i, 'GIÁ: THẤP ĐẾN CAO')
          .replace(/^GIÁ CẢ XUỐNG THẤP$/i, 'GIÁ: CAO ĐẾN THẤP')
          .replace(/\bSnow Goggles?\b/gi, 'kính bảo hộ tuyết')
          .replace(/\bMTB Goggles?\b/gi, 'kính bảo hộ xe đạp địa hình')
          .replace(/\bGoggles?\b/gi, 'kính bảo hộ')
          .replace(/\bSize\b/gi, 'Cỡ');
        if (translated !== trimmed) node.nodeValue = value.replace(trimmed, translated);
      }
    }
    if (!isUnifiedPdp) {
      localizeProductText(document.body);
      document.querySelectorAll('.product__gallery-view-more').forEach(function (button) { button.remove(); });
      new MutationObserver(function (mutations) {
        mutations.forEach(function (mutation) {
          mutation.addedNodes.forEach(function (added) {
            if (added.nodeType === Node.ELEMENT_NODE) localizeProductText(added);
            else if (added.nodeType === Node.TEXT_NODE && added.parentElement) localizeProductText(added.parentElement);
          });
        });
      }).observe(document.body, { childList: true, characterData: true, subtree: true });
    }

    var reviewSection = document.querySelector('.smith-product-reviews');
    if (reviewSection && !reviewSection.dataset.reviewReady) {
      reviewSection.dataset.reviewReady = '1';
      reviewSection.querySelector('.smith-review-open')?.addEventListener('click', function () {
        var form = reviewSection.querySelector('.smith-review-form');
        form.hidden = !form.hidden;
        if (!form.hidden) form.querySelector('input[name="author"]')?.focus();
      });

      reviewSection.querySelector('.smith-review-form')?.addEventListener('submit', async function (event) {
        event.preventDefault();
        var form = event.currentTarget;
        var submit = form.querySelector('.smith-review-submit');
        var message = form.querySelector('.smith-review-message');
        submit.disabled = true;
        message.textContent = 'Đang gửi đánh giá…';
        try {
          var response = await fetch(window.smithData?.ajax_url || '/wp-admin/admin-ajax.php', { method: 'POST', body: new FormData(form), credentials: 'same-origin' });
          var payload = await response.json();
          if (!payload.success) throw new Error(payload.data?.message || 'Không thể gửi đánh giá.');
          document.querySelectorAll('.smith-review-count').forEach(function (node) { node.textContent = '(' + payload.data.count + ' đánh giá)'; });
          document.querySelectorAll('.smith-rating-stars').forEach(function (node) { node.style.setProperty('--smith-rating', (payload.data.average * 20) + '%'); node.setAttribute('aria-label', payload.data.average + ' trên 5 sao'); });
          reviewSection.querySelector('.smith-review-empty')?.setAttribute('hidden', '');
          reviewSection.querySelector('.smith-review-list')?.insertAdjacentHTML('afterbegin', payload.data.html);
          reviewSection.querySelector('.smith-review-open').textContent = 'GỬI ĐÁNH GIÁ';
          form.reset();
          message.textContent = payload.data.message;
        } catch (error) {
          message.textContent = error.message;
        } finally {
          submit.disabled = false;
        }
      });
    }

    function swatchFallbackColor(label) {
      var value = String(label || '').toLowerCase();
      if (value.includes('rose gold')) return '#c58f91';
      if (value.includes('copper')) return '#a76543';
      if (value.includes('red') || value.includes('crimson')) return '#9d2f38';
      if (value.includes('blue') || value.includes('navy')) return '#31577b';
      if (value.includes('green') || value.includes('forest')) return '#48634c';
      if (value.includes('gold') || value.includes('yellow')) return '#b89543';
      if (value.includes('orange')) return '#c86d38';
      if (value.includes('purple') || value.includes('aura') || value.includes('lavender')) return '#aa91b5';
      if (value.includes('white') || value.includes('chalk')) return '#ecebe6';
      if (value.includes('black')) return '#202020';
      if (value.includes('brown') || value.includes('tortoise') || value.includes('gravy')) return '#745a48';
      if (value.includes('gray') || value.includes('grey') || value.includes('slate') || value.includes('cement') || value.includes('flint')) return '#777a7d';
      return '#a8a8a3';
    }

    root.querySelectorAll('.swatch-with-image').forEach(function (swatch) {
      var label = swatch.closest('label');
      var name = label?.getAttribute('title') || label?.textContent || '';
      var background = swatch.style.getPropertyValue('--swatch--background') || '';
      var match = background.match(/url\(["']?([^"')]+)["']?\)/i);
      if (!match || !match[1]) return;
      var source = match[1].startsWith('//') ? 'https:' + match[1] : match[1];
      var probe = new Image();
      var timer = window.setTimeout(useFallback, 4500);
      function useFallback() {
        window.clearTimeout(timer);
        swatch.classList.add('smith-swatch-fallback');
        swatch.style.setProperty('--swatch--background', swatchFallbackColor(name));
      }
      probe.onload = function () { window.clearTimeout(timer); };
      probe.onerror = useFallback;
      probe.src = source;
    });

    var payloadNode = root.querySelector('[data-la-product-json]');
    if (!payloadNode) {
      var payloadTemplate = root.querySelector('template[id^="lensadvizor-quick-buy-template"]');
      payloadNode = payloadTemplate?.content.querySelector('[data-la-product-json]') || null;
    }
    var product = {};
    try { product = JSON.parse(payloadNode?.getAttribute('data-la-product-json') || '{}'); } catch (_) {}
    var variants = Array.isArray(product.variants) ? product.variants : [];

    function openSizeGuide() {
      var modal = document.querySelector('.smith-size-modal');
      if (!modal) {
        var productKind = String(product.product_type || product.title || document.querySelector('.product__title')?.textContent || '').toLowerCase();
        var isHelmet = /helmet|mips|mũ bảo hiểm/.test(productKind);
        var isApparel = /apparel|shirt|jersey|hoodie|pant|trang phục/.test(productKind);
        var content = '';
        if (isHelmet) {
          content = '<p>Đo chu vi vòng đầu tại vị trí rộng nhất, cao hơn lông mày khoảng 2,5 cm.</p><table><thead><tr><th>Kích thước</th><th>Chu vi vòng đầu</th></tr></thead><tbody><tr><td>XS</td><td>48–52 cm</td></tr><tr><td>S</td><td>51–55 cm</td></tr><tr><td>M</td><td>55–59 cm</td></tr><tr><td>L</td><td>59–63 cm</td></tr><tr><td>XL</td><td>61–65 cm</td></tr></tbody></table>';
        } else if (isApparel) {
          content = '<p>Đo sát cơ thể và chọn cỡ lớn hơn nếu số đo nằm giữa hai kích thước.</p><table><thead><tr><th>Kích thước</th><th>Vòng ngực</th><th>Vòng eo</th></tr></thead><tbody><tr><td>XS</td><td>81–86 cm</td><td>66–71 cm</td></tr><tr><td>S</td><td>86–94 cm</td><td>71–79 cm</td></tr><tr><td>M</td><td>94–102 cm</td><td>79–86 cm</td></tr><tr><td>L</td><td>102–109 cm</td><td>86–94 cm</td></tr><tr><td>XL</td><td>109–117 cm</td><td>94–102 cm</td></tr></tbody></table>';
        } else {
          content = '<p>Chọn độ vừa vặn dựa trên chiều rộng khuôn mặt và mức độ che phủ mong muốn.</p><table><thead><tr><th>Độ vừa vặn</th><th>Phù hợp</th></tr></thead><tbody><tr><td>Nhỏ</td><td>Khuôn mặt hẹp</td></tr><tr><td>Trung bình</td><td>Khuôn mặt trung bình</td></tr><tr><td>Lớn</td><td>Khuôn mặt rộng</td></tr></tbody></table>';
        }
        modal = document.createElement('div');
        modal.className = 'smith-size-modal';
        modal.innerHTML = '<div class="smith-size-backdrop"></div><section class="smith-size-dialog" role="dialog" aria-modal="true" aria-label="Bảng kích thước"><div class="smith-size-heading"><strong>BẢNG KÍCH THƯỚC</strong><button type="button" aria-label="Đóng bảng kích thước">×</button></div><div class="smith-size-content">' + content + '</div></section>';
        document.body.appendChild(modal);
        var close = function () { modal.classList.remove('is-open'); document.documentElement.classList.remove('smith-size-open'); };
        modal.querySelector('.smith-size-heading button').addEventListener('click', close);
        modal.querySelector('.smith-size-backdrop').addEventListener('click', close);
        document.addEventListener('keydown', function (event) { if (event.key === 'Escape' && modal.classList.contains('is-open')) close(); });
      }
      modal.classList.add('is-open');
      document.documentElement.classList.add('smith-size-open');
      modal.querySelector('.smith-size-heading button').focus();
    }

    root.querySelectorAll('.size-chart-button').forEach(function (button) {
      if (button.dataset.smithSizeReady) return;
      button.dataset.smithSizeReady = '1';
      button.addEventListener('click', function (event) { event.preventDefault(); event.stopPropagation(); openSizeGuide(); });
    });

    function money(cents) {
      return new Intl.NumberFormat('en-US', { style: 'currency', currency: 'USD' }).format((Number(cents) || 0) / 100);
    }

    function translateColorValue(value) {
      var exact = {
        'Black / Cement Stripe': 'Đen / Sọc màu xi măng',
        'Black': 'Đen',
        'White': 'Trắng',
        'Grey': 'Xám',
        'Gray': 'Xám',
        'Blue': 'Xanh dương',
        'Green': 'Xanh lá',
        'Red': 'Đỏ',
        'Yellow': 'Vàng'
      };
      return exact[String(value || '').trim()] || String(value || '').trim();
    }

    function activateVariant(variant, input) {
      if (!variant) return;
      var id = String(variant.id);
      root.querySelectorAll('.product-variant-id, input[name="id"]').forEach(function (field) { field.value = id; });
      root.querySelectorAll('[data-la-variant-id], pickup-availability[data-variant-id]').forEach(function (node) { node.setAttribute('data-variant-id', id); });
      // Update each option label from the checked input in its own fieldset.
      // Previously this always targeted the first label (Color), so selecting
      // size L/XL incorrectly changed the displayed color to L/XL as well.
      root.querySelectorAll('.product-form__input').forEach(function (fieldset) {
        var selected = fieldset.querySelector('.product-form__input--swatch-value');
        var checked = fieldset.querySelector('input[type="radio"]:checked');
        if (!selected || !checked) return;
        var isColor = String(checked.name || '').trim().toLowerCase().indexOf('color') === 0;
        selected.textContent = isColor ? translateColorValue(checked.value) : (checked.value || '');
        selected.dataset.selectedValue = checked.value || '';
      });

      var price = root.querySelector('[id^="price-"] .price-item--regular, .product__info-wrapper .price-item--regular');
      if (price) price.textContent = money(variant.price);

      var url = new URL(window.location.href);
      url.searchParams.set('variant', id);
      history.replaceState({}, '', url.pathname + '?' + url.searchParams.toString());

      var media = Array.from(root.querySelectorAll('.product__media-item[data-variant-ids]'));
      var thumbs = Array.from(root.querySelectorAll('.thumbnail-list__item[data-variant-ids]'));
      function belongsToVariant(item) {
        return String(item.dataset.variantIds || '')
          .split(',')
          .map(function (value) { return value.trim(); })
          .includes(id);
      }
      var variantMedia = media.filter(belongsToVariant);
      if (!variantMedia.length) {
        var featuredId = variant.featured_media?.id || variant.featured_image?.id || variant.image_id || '';
        var featuredUrl = variant.featured_image?.src || variant.featured_image?.url || variant.image?.src || variant.image?.url || '';
        variantMedia = media.filter(function(item) {
          if (featuredId && (item.id || '').includes(String(featuredId))) return true;
          var image = item.querySelector('img');
          if (!featuredUrl || !image) return false;
          return image.src.split('?')[0] === String(featuredUrl).split('?')[0];
        });
      }
      media.forEach(function (item) {
        var isActive = variantMedia.includes(item);
        item.classList.toggle('inactive-variant', !isActive);
        if (isActive) item.classList.remove('scroll-trigger--offscreen');
        item.classList.remove('product__media-item--desktop-featured');
      });
      if (variantMedia[0]) {
        variantMedia[0].classList.add('product__media-item--desktop-featured');
        if (window.innerWidth >= 750 && window.innerWidth < 1200) {
          variantMedia[0].style.setProperty('width', '100%', 'important');
          variantMedia[0].style.setProperty('min-width', '100%', 'important');
          variantMedia[0].style.setProperty('max-width', '100%', 'important');
        }
      }
      thumbs.forEach(function (item) { item.classList.toggle('inactive-variant', !belongsToVariant(item)); });
      var first = variantMedia[0];
      if (!first) {
        var fallbackUrl = variant.featured_image?.src || variant.featured_image?.url || variant.image?.src || variant.image?.url || '';
        var fallbackImage = root.querySelector('.product__media-item img');
        if (fallbackUrl && fallbackImage) {
          fallbackImage.src = fallbackUrl;
          fallbackImage.removeAttribute('srcset');
          fallbackImage.closest('picture')?.querySelectorAll('source').forEach(function(source) { source.remove(); });
          first = fallbackImage.closest('.product__media-item');
          if (first) {
            first.classList.remove('inactive-variant');
            first.classList.add('product__media-item--desktop-featured');
            if (window.innerWidth >= 750 && window.innerWidth < 1200) {
              first.style.setProperty('width', '100%', 'important');
              first.style.setProperty('min-width', '100%', 'important');
              first.style.setProperty('max-width', '100%', 'important');
            }
          }
        }
      }
      if (first) first.scrollIntoView({ behavior: 'smooth', block: 'nearest', inline: 'start' });
    }

    function findSelectedVariant() {
      var colorInput = root.querySelector('.swatch-input__input:checked');
      var sizeInput = root.querySelector('input[type="radio"][name^="Size"]:checked');
      var color = colorInput ? colorInput.value.trim() : '';
      var size = sizeInput ? sizeInput.value.trim() : '';

      return variants.find(function (item) {
        var options = [item.option1, item.option2, item.option3].map(function(value) { return String(value || '').trim(); });
        var colorMatches = !color || options.includes(color);
        var sizeMatches = !size || options.includes(size);
        return colorMatches && sizeMatches;
      }) || variants.find(function (item) {
        var options = [item.option1, item.option2, item.option3].map(function(value) { return String(value || '').trim(); });
        return !color || options.includes(color);
      });
    }

    root.querySelectorAll('.swatch-input__input, input[type="radio"][name^="Size"]').forEach(function (input) {
      input.addEventListener('change', function () {
        activateVariant(findSelectedVariant(), input);
      });
    });

    root.querySelectorAll('.thumbnail-list__item .thumbnail').forEach(function (button) {
      button.addEventListener('click', function () {
        var item = button.closest('.thumbnail-list__item');
        var target = item && document.getElementById('Slide-' + item.dataset.target);
        root.querySelectorAll('.thumbnail[aria-current="true"]').forEach(function (node) { node.removeAttribute('aria-current'); });
        button.setAttribute('aria-current', 'true');
        target?.scrollIntoView({ behavior: 'smooth', block: 'nearest', inline: 'start' });
      });
    });

    var requested = new URL(window.location.href).searchParams.get('variant');
    var initial = variants.find(function (item) { return String(item.id) === requested; }) || variants[0];
    if (initial) {
      var initialInput = Array.from(root.querySelectorAll('.swatch-input__input')).find(function (input) {
        return [initial.option1, initial.option2, initial.option3]
          .map(function(value) { return String(value || '').trim(); })
          .includes(input.value.trim());
      });
      if (initialInput) initialInput.checked = true;
      var initialSizeInput = Array.from(root.querySelectorAll('input[type="radio"][name^="Size"]')).find(function (input) {
        return [initial.option1, initial.option2, initial.option3]
          .map(function(value) { return String(value || '').trim(); })
          .includes(input.value.trim());
      });
      if (initialSizeInput) initialSizeInput.checked = true;
      activateVariant(initial, initialInput);
    }

    var returnLabel = Array.from(root.querySelectorAll('.icon-tooltip-label')).find(function (node) { return /30 ngày|30 day/i.test(node.textContent || ''); });
    var trustRow = returnLabel?.parentElement?.parentElement;
    function openCheckoutModal(productInfo) {
      var modal = document.querySelector('.smith-checkout-modal');
      if (!modal) {
        modal = document.createElement('div');
        modal.className = 'smith-checkout-modal';
        modal.setAttribute('aria-hidden', 'true');
        modal.innerHTML = '<div class="smith-checkout-backdrop"></div><section class="smith-checkout-dialog" role="dialog" aria-modal="true" aria-label="Đặt hàng"><div class="smith-checkout-heading"><strong>ĐẶT HÀNG NHANH</strong><button type="button" class="smith-checkout-close" aria-label="Đóng cửa sổ đặt hàng">×</button></div><div class="smith-quick-order-body"><div class="smith-quick-product"><img class="smith-quick-product-image" alt=""><div class="smith-quick-product-info"><strong class="smith-quick-product-name"></strong><div class="smith-quick-product-meta"></div><span>Còn hàng</span><div class="smith-quick-quantity"><span>Số lượng:</span><button type="button" data-qty="minus">−</button><input type="number" name="quantity" value="1" min="1" max="99" readonly><button type="button" data-qty="plus">+</button></div></div></div><form class="smith-quick-order-form"><label>Số điện thoại <em>*</em><input name="phone" type="tel" required placeholder="Nhập số điện thoại nhận hàng"></label><div class="smith-quick-order-grid"><label>Địa chỉ email<input name="email" type="email" placeholder="Nhập email nhận thông báo"></label><label>Họ và tên <em>*</em><input name="name" type="text" required placeholder="Nhập họ và tên"></label></div><label>Địa chỉ nhận hàng <em>*</em><input name="address" type="text" required placeholder="Số nhà, tên đường, phường/xã, quận/huyện, tỉnh/thành"></label><label>Ghi chú đơn hàng<textarea name="note" rows="3" placeholder="Ghi chú cho người giao hàng"></textarea></label><div class="smith-quick-phone-notice"><span aria-hidden="true">i</span><p><strong>Vui lòng điền số điện thoại thật chính xác.</strong> Nhân viên Smith Optics sẽ liên hệ xác nhận đơn giá và tư vấn hình thức nhận hàng thuận tiện nhất.</p></div><button type="submit" class="smith-quick-order-submit">XÁC NHẬN ĐẶT HÀNG</button><p class="smith-quick-order-message" role="status"></p></form><div class="smith-quick-order-success" hidden><strong>ĐẶT HÀNG THÀNH CÔNG</strong><p></p><button type="button" class="smith-quick-order-done">ĐÓNG</button></div></div></section>';
        document.body.appendChild(modal);
        ['name', 'address'].forEach(function (fieldName) {
          var optionalInput = modal.querySelector('[name="' + fieldName + '"]');
          if (optionalInput) {
            optionalInput.removeAttribute('required');
            var requiredMark = optionalInput.closest('label')?.querySelector('em');
            if (requiredMark) requiredMark.remove();
          }
        });
        var closeModal = function () {
          modal.classList.remove('is-open');
          modal.setAttribute('aria-hidden', 'true');
          document.documentElement.classList.remove('smith-checkout-open');
        };
        modal.querySelector('.smith-checkout-close').addEventListener('click', closeModal);
        modal.querySelector('.smith-quick-order-done').addEventListener('click', closeModal);
        modal.querySelector('.smith-checkout-backdrop').addEventListener('click', closeModal);
        document.addEventListener('keydown', function (event) { if (event.key === 'Escape' && modal.classList.contains('is-open')) closeModal(); });
        modal.querySelectorAll('[data-qty]').forEach(function (control) {
          control.addEventListener('click', function () {
            var quantity = modal.querySelector('input[name="quantity"]');
            quantity.value = Math.max(1, Math.min(99, Number(quantity.value) + (control.dataset.qty === 'plus' ? 1 : -1)));
          });
        });
        modal.querySelector('.smith-quick-order-form').addEventListener('submit', async function (event) {
          event.preventDefault();
          var form = event.currentTarget;
          var submit = form.querySelector('.smith-quick-order-submit');
          var message = form.querySelector('.smith-quick-order-message');
          var data = new URLSearchParams(new FormData(form));
          data.set('action', 'smith_create_quick_order');
          data.set('nonce', window.smithData?.buy_nonce || '');
          data.set('handle', modal.dataset.handle || '');
          data.set('variant_id', modal.dataset.variantId || '');
          data.set('color', modal.dataset.color || '');
          data.set('size', modal.dataset.size || '');
          data.set('variant_title', modal.dataset.variantTitle || '');
          data.set('sku', modal.dataset.sku || '');
          data.set('quantity', modal.querySelector('input[name="quantity"]').value);
          submit.disabled = true;
          submit.textContent = 'ĐANG TẠO ĐƠN…';
          message.textContent = '';
          try {
            var result = await new Promise(function (resolve, reject) {
              var request = new XMLHttpRequest();
              request.open('POST', window.smithData?.ajax_url || '/wp-admin/admin-ajax.php', true);
              request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
              request.onload = function () { try { resolve(JSON.parse(request.responseText)); } catch (_) { reject(new Error('Phản hồi tạo đơn không hợp lệ.')); } };
              request.onerror = function () { reject(new Error('Không thể kết nối hệ thống đặt hàng.')); };
              request.send(data.toString());
            });
            if (!result.success) throw new Error(result.data?.message || 'Không thể tạo đơn hàng.');
            form.hidden = true;
            modal.querySelector('.smith-quick-product').hidden = true;
            var success = modal.querySelector('.smith-quick-order-success');
            success.querySelector('p').textContent = result.data.message;
            success.hidden = false;
          } catch (error) {
            message.textContent = error.message;
          } finally {
            submit.disabled = false;
            submit.textContent = 'XÁC NHẬN ĐẶT HÀNG';
          }
        });
      }
      modal.dataset.handle = productInfo.handle || '';
      modal.dataset.variantId = productInfo.variant_id || '';
      modal.dataset.color = productInfo.color || '';
      modal.dataset.size = productInfo.size || '';
      modal.dataset.variantTitle = productInfo.variant_title || '';
      modal.dataset.sku = productInfo.sku || '';

      modal.querySelector('.smith-quick-product-name').textContent = productInfo.name || productInfo.display_name || '';
      modal.querySelector('.smith-quick-product-image').src = productInfo.image || '';
      
      var metaEl = modal.querySelector('.smith-quick-product-meta');
      if (metaEl) {
        var metaItems = [];
        if (productInfo.color) metaItems.push('<span class="smith-meta-item">Màu: <strong>' + productInfo.color + '</strong></span>');
        if (productInfo.size) metaItems.push('<span class="smith-meta-item">Size: <strong>' + productInfo.size + '</strong></span>');
        if (productInfo.sku) metaItems.push('<span class="smith-meta-item">SKU: <strong>' + productInfo.sku + '</strong></span>');
        metaEl.innerHTML = metaItems.join('');
        metaEl.style.display = metaItems.length ? 'flex' : 'none';
      }

      modal.querySelector('input[name="quantity"]').value = 1;
      modal.querySelector('.smith-quick-order-form').hidden = false;
      modal.querySelector('.smith-quick-product').hidden = false;
      modal.querySelector('.smith-quick-order-success').hidden = true;
      modal.classList.add('is-open');
      modal.setAttribute('aria-hidden', 'false');
      document.documentElement.classList.add('smith-checkout-open');
      modal.querySelector('.smith-checkout-close').focus();
    }
    root.querySelectorAll('.smith-dynamic-buy-now').forEach(function (button) {
      if (button.dataset.smithBuyReady) return;
      button.dataset.smithBuyReady = '1';
      button.addEventListener('click', async function () {
        var originalText = button.textContent;
        button.disabled = true;
        button.textContent = 'ĐANG XỬ LÝ…';
        var selected = typeof findSelectedVariant === 'function' ? findSelectedVariant() : null;
        var currentVariantId = window.smithCurrentState?.activeVariantId || selected?.id || '';
        var currentColor = window.smithCurrentState?.activeColor || selected?.option1 || '';
        var currentSize = window.smithCurrentState?.activeSize || selected?.option2 || '';
        var body = new URLSearchParams({
          action: 'smith_buy_now',
          nonce: window.smithData?.buy_nonce || '',
          handle: window.smithCurrentState?.handle || window.location.pathname.split('/').filter(Boolean).pop(),
          variant_id: currentVariantId,
          color: currentColor,
          size: currentSize
        });
        try {
          var payload = await new Promise(function (resolve, reject) {
            var request = new XMLHttpRequest();
            request.open('POST', window.smithData?.ajax_url || '/wp-admin/admin-ajax.php', true);
            request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
            request.withCredentials = true;
            request.onload = function () {
              try { resolve(JSON.parse(request.responseText)); }
              catch (_) { reject(new Error('Phản hồi mua hàng không hợp lệ.')); }
            };
            request.onerror = function () { reject(new Error('Không thể kết nối hệ thống đặt hàng.')); };
            request.send(body.toString());
          });
          if (!payload.success) throw new Error(payload.data?.message || 'Không thể mở cửa sổ đặt hàng.');
          openCheckoutModal(payload.data);
        } catch (error) {
          window.alert(error.message || 'Không thể mở cửa sổ đặt hàng.');
        } finally {
          button.disabled = false;
          button.textContent = originalText;
        }
      });
    });
    if (trustRow && !root.querySelector('.smith-buy-now-wrap')) {
      var buyNowWrap = document.createElement('div');
      buyNowWrap.className = 'smith-buy-now-wrap';
      buyNowWrap.innerHTML = '<button type="button" class="smith-buy-now-button">MUA NGAY</button><p class="smith-buy-now-message" role="status"></p>';
      trustRow.insertAdjacentElement('afterend', buyNowWrap);
      buyNowWrap.querySelector('.smith-buy-now-button').addEventListener('click', async function () {
        var button = this;
        var message = buyNowWrap.querySelector('.smith-buy-now-message');
        var selected = findSelectedVariant() || initial;
        var handle = window.location.pathname.split('/').filter(Boolean).pop();
        var currentColor = selected?.option1 || '';
        var currentSize = selected?.option2 || '';
        button.disabled = true;
        button.textContent = 'ĐANG XỬ LÝ…';
        message.textContent = '';
        var body = new URLSearchParams({
          action: 'smith_buy_now',
          nonce: window.smithData?.buy_nonce || '',
          handle: handle,
          variant_id: selected?.id || '',
          color: currentColor,
          size: currentSize
        });
        try {
          var payload = await new Promise(function (resolve, reject) {
            var request = new XMLHttpRequest();
            request.open('POST', window.smithData?.ajax_url || '/wp-admin/admin-ajax.php', true);
            request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
            request.withCredentials = true;
            request.onload = function () { try { resolve(JSON.parse(request.responseText)); } catch (_) { reject(new Error('Phản hồi mua hàng không hợp lệ.')); } };
            request.onerror = function () { reject(new Error('Không thể kết nối giỏ hàng.')); };
            request.send(body.toString());
          });
          if (!payload.success) throw new Error(payload.data?.message || 'Không thể mua sản phẩm.');
          openCheckoutModal(payload.data);
          button.disabled = false;
          button.textContent = 'MUA NGAY';
        } catch (error) {
          message.textContent = error.message;
          button.disabled = false;
          button.textContent = 'MUA NGAY';
        }
      });
    }

    function mountCallbackForm() {
      if (root.querySelector('.smith-callback-form')) return;
      var buyTarget = isUnifiedPdp
        ? root.querySelector('.smith-buybox-add-row')
        : root.querySelector('.smith-buy-now-wrap');
      if (!buyTarget) return;

      var form = document.createElement('form');
      form.className = 'smith-callback-form';
      form.noValidate = true;
      form.innerHTML = '<p class="smith-callback-heading"><span aria-hidden="true">☎</span> Hãy để lại số điện thoại, chúng tôi sẽ gọi ngay cho bạn tư vấn miễn phí!</p>'
        + '<div class="smith-callback-controls">'
        + '<label class="screen-reader-text" for="smith-callback-phone">Số điện thoại</label>'
        + '<input id="smith-callback-phone" type="tel" name="phone" inputmode="tel" autocomplete="tel" placeholder="Nhập SĐT tư vấn miễn phí..." required>'
        + '<input class="smith-callback-honeypot" type="text" name="website" tabindex="-1" autocomplete="off" aria-hidden="true">'
        + '<button type="submit">GỬI ĐI</button>'
        + '</div><p class="smith-callback-message" role="status" aria-live="polite"></p>';
      buyTarget.insertAdjacentElement('afterend', form);

      form.addEventListener('submit', async function (event) {
        event.preventDefault();
        var phoneInput = form.querySelector('input[name="phone"]');
        var button = form.querySelector('button[type="submit"]');
        var status = form.querySelector('.smith-callback-message');
        var digits = phoneInput.value.replace(/\D/g, '');
        status.className = 'smith-callback-message';
        if (digits.length < 9 || digits.length > 11) {
          status.textContent = 'Vui lòng nhập số điện thoại hợp lệ.';
          status.classList.add('is-error');
          phoneInput.focus();
          return;
        }

        var selected = typeof findSelectedVariant === 'function' ? findSelectedVariant() : null;
        var currentVariantId = window.smithCurrentState?.activeVariantId || selected?.id || new URLSearchParams(window.location.search).get('variant') || '';
        var currentColor = window.smithCurrentState?.activeColor || selected?.option1 || '';
        var currentSize = window.smithCurrentState?.activeSize || selected?.option2 || '';
        var title = root.querySelector('.smith-buybox-title, .product__title h1, h1.product__title, .product__title');
        var originalText = button.textContent;
        var body = new URLSearchParams({
          action: 'smith_request_sales_callback',
          nonce: window.smithData?.buy_nonce || '',
          phone: phoneInput.value.trim(),
          website: form.querySelector('input[name="website"]').value,
          handle: window.smithCurrentState?.handle || window.location.pathname.split('/').filter(Boolean).pop(),
          variant_id: currentVariantId,
          color: currentColor,
          size: currentSize,
          product_name: title ? title.textContent.trim() : '',
          product_url: window.location.href
        });

        button.disabled = true;
        button.textContent = 'ĐANG GỬI…';
        status.textContent = '';
        try {
          var payload = await new Promise(function (resolve, reject) {
            var request = new XMLHttpRequest();
            request.open('POST', window.smithData?.ajax_url || '/wp-admin/admin-ajax.php', true);
            request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
            request.withCredentials = true;
            request.onload = function () {
              try { resolve(JSON.parse(request.responseText)); }
              catch (_) { reject(new Error('Phản hồi từ hệ thống không hợp lệ.')); }
            };
            request.onerror = function () { reject(new Error('Không thể kết nối hệ thống. Vui lòng thử lại.')); };
            request.send(body.toString());
          });
          if (!payload.success) throw new Error(payload.data?.message || 'Chưa thể gửi yêu cầu.');
          status.textContent = payload.data.message;
          status.classList.add('is-success');
          phoneInput.value = '';
        } catch (error) {
          status.textContent = error.message || 'Chưa thể gửi yêu cầu. Vui lòng thử lại.';
          status.classList.add('is-error');
        } finally {
          button.disabled = false;
          button.textContent = originalText;
        }
      });
    }
    mountCallbackForm();

    function findTrendingSlot() {
      if (isUnifiedPdp) {
        return root.querySelector('.smith-you-may-like-section');
      }
      var byRecommendationId = root.querySelector('[id$="__1779839257ac618e81"]');
      if (byRecommendationId) return byRecommendationId;

      var recommendationBlock = root.querySelector(
        '[data-block-handle="recommendation-ssr"], [data-block-handle="discovery-recommendation-block"]'
      );
      if (recommendationBlock) {
        return recommendationBlock.closest('.shopify-section, section') || recommendationBlock;
      }

      var reviews = root.querySelector(
        '.shopify-section[id*="__reviews"], section[id*="__reviews"], [class*="__reviews-padding"]'
      );
      if (reviews && !reviews.matches('.shopify-section, section')) {
        reviews = reviews.closest('.shopify-section, section');
      }
      var candidate = reviews && reviews.previousElementSibling;
      while (candidate && (candidate.getBoundingClientRect().height < 120 || /video/i.test(candidate.id || ''))) {
        candidate = candidate.previousElementSibling;
      }
      if (candidate) return candidate;

      var sections = Array.from(root.querySelectorAll('.shopify-section, main > section'));
      return sections.reverse().find(function (section) {
        var rect = section.getBoundingClientRect();
        var text = (section.textContent || '').replace(/\s+/g, ' ').trim();
        var paleBlocks = Array.from(section.querySelectorAll('div')).filter(function (node) {
          var box = node.getBoundingClientRect();
          var color = getComputedStyle(node).backgroundColor;
          return box.width > 100 && box.height > 100 && /rgb\((?:24[0-9]|25[0-5]),\s*(?:24[0-9]|25[0-5]),\s*(?:24[0-9]|25[0-5])\)/.test(color);
        });
        return rect.height > 220 && text.length < 80 && paleBlocks.length >= 4;
      }) || null;
    }

    var trending = document.querySelector('.smith-original-trending');
    var trendingSlot = findTrendingSlot();
    if (trending && trendingSlot) {
      trendingSlot.innerHTML = '';
      trendingSlot.appendChild(trending);
      var trendingTitle = trending.querySelector('.boost-sd__recommendation-title-text');
      if (trendingTitle) trendingTitle.textContent = 'Sản Phẩm Thịnh Hành';
      trending.querySelectorAll('.boost-sd__product-price').forEach(function (price) {
        price.innerHTML = '<span class="smith-stock-label">CÒN HÀNG</span>';
      });
      trending.style.marginTop = '0';
      trending.style.marginBottom = '0';
      var track = trending.querySelector('.slick-track');
      var wanted = ['riptide', 'guides-choice', 'wildcat', 'lowdown-2', 'forefront-3-mips-r-sale', 'network-mips-r', 'bobcat', 'backcast', 'venture', 'trace-mips-r', 'engage-mips-r', 'forefront-3-mips-r'];
      // The shared trending component owns ordering, paging and controls.
      // Keep this legacy block only for older snapshot markup.
      if (track && trending.dataset.smithSharedTrending !== 'true') {
        track.querySelectorAll('.slick-cloned').forEach(function (el) { el.remove(); });
        track.querySelectorAll('.slick-slide').forEach(function (el) {
          el.classList.remove('slick-active', 'slick-current');
        });

        var slides = Array.from(track.querySelectorAll(':scope > .slick-slide'));
        var chosen = [];
        wanted.forEach(function (handle) {
          var slide = slides.find(function (candidate) {
            var item = candidate.querySelector('.boost-sd__product-item[data-product]');
            try { return item && JSON.parse(item.dataset.product || '{}').handle === handle; } catch (_) { return false; }
          });
          if (!slide) return;
          slide.classList.add('smith-trending-visible');
          slide.classList.remove('slick-active', 'slick-current', 'slick-cloned');
          slide.removeAttribute('aria-hidden');
          chosen.push(slide);
          var item = slide.querySelector('.boost-sd__product-item[data-product]');
          var image = slide.querySelector('.boost-sd__product-image-img--main');
          var data = {};
          try { data = JSON.parse(item?.dataset.product || '{}'); } catch (_) {}
          var productTitle = slide.querySelector('.boost-sd__product-title');
          if (productTitle && handle === 'forefront-3-mips-r-sale') {
            productTitle.textContent = 'Forefront 3 Mips® – Mùa trước';
          }
          if (image) {
            image.removeAttribute('srcset');
            image.removeAttribute('sizes');
            if (data.images?.[0]?.src) image.src = data.images[0].src;
          }
        });

        track.innerHTML = '';
        chosen.forEach(function (slide) {
          track.appendChild(slide);
        });

        var pageSize = window.innerWidth < 750 ? 1 : (window.innerWidth < 1200 ? 2 : 4);
        var pageCount = Math.ceil(chosen.length / pageSize);
        chosen.forEach(function (slide, index) {
          slide.dataset.smithTrendingPage = String(Math.floor(index / pageSize));
        });
        var pageIndex = 0;
        var dots = Array.from(trending.querySelectorAll('.slick-dots li')).slice(0, pageCount);
        trending.querySelectorAll('.slick-dots li').forEach(function (dot, index) {
          dot.style.display = index < pageCount ? '' : 'none';
        });
        function showPage(next) {
          pageIndex = (next + pageCount) % pageCount;
          chosen.forEach(function (slide) { slide.classList.toggle('smith-trending-page-active', Number(slide.dataset.smithTrendingPage) === pageIndex); });
          dots.forEach(function (dot, index) { dot.classList.toggle('slick-active', index === pageIndex); });
        }
        trending.querySelector('.boost-sd__prev-button button')?.addEventListener('click', function () { showPage(pageIndex - 1); });
        trending.querySelector('.boost-sd__next-button button')?.addEventListener('click', function () { showPage(pageIndex + 1); });
        dots.forEach(function (dot, index) { dot.addEventListener('click', function () { showPage(index); }); });
        trending.querySelectorAll('.boost-sd__product-swatch-options').forEach(function(optionsContainer) {
          var moreBtn = optionsContainer.querySelector('.boost-sd__product-swatch-more');
          var desktopText = (moreBtn?.querySelector('.text-desktop')?.textContent || moreBtn?.textContent || '').trim();
          var isMoreHidden = !moreBtn || desktopText === '+0' || desktopText === '0' || moreBtn.classList.contains('d-hide');
          
          if (isMoreHidden && moreBtn) {
            moreBtn.style.setProperty('display', 'none', 'important');
          }

          var options = Array.from(optionsContainer.querySelectorAll('.boost-sd__product-swatch-option'));
          if (!isMoreHidden) {
            options.forEach(function(opt, idx) {
              if (idx < 3) {
                opt.style.setProperty('display', 'flex', 'important');
              } else {
                opt.style.setProperty('display', 'none', 'important');
              }
            });
          } else {
            options.forEach(function(opt, idx) {
              if (idx < 4) {
                opt.style.setProperty('display', 'flex', 'important');
              } else {
                opt.style.setProperty('display', 'none', 'important');
              }
            });
          }
        });
        var swipeStartX = null;
        trending.addEventListener('touchstart', function (event) {
          swipeStartX = event.touches[0]?.clientX ?? null;
        }, { passive: true });
        trending.addEventListener('touchend', function (event) {
          if (swipeStartX === null) return;
          var endX = event.changedTouches[0]?.clientX ?? swipeStartX;
          var delta = endX - swipeStartX;
          swipeStartX = null;
          if (Math.abs(delta) < 45) return;
          showPage(pageIndex + (delta < 0 ? 1 : -1));
        }, { passive: true });
        showPage(0);
      }
      trending.querySelectorAll('.boost-sd__product-swatch-option label').forEach(function (label) {
        label.addEventListener('click', function () {
          var image = label.closest('.boost-sd__product-item')?.querySelector('.boost-sd__product-image-img--main');
          var match = label.style.backgroundImage?.match(/url\(["']?(.*?)["']?\)/);
          if (image && match?.[1]) { image.removeAttribute('srcset'); image.src = match[1]; }
        });
      });
    }
  });
})();
