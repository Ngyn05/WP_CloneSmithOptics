<?php $fragment = get_template_directory() . '/snapshots/trending-best-sellers.html'; if (is_file($fragment)) : ?>
<section class="smith-original-trending page-width" data-smith-shared-trending="true"><?php readfile($fragment); ?></section>
<style>
.smith-original-trending { box-sizing: border-box; width: 100vw; max-width: 100vw; margin: 72px 0 55px calc(50% - 50vw); padding: 0 32px; font-family: inherit; }
.smith-original-trending .boost-sd__recommendation,
.smith-original-trending .boost-sd__recommendation-title,
.smith-original-trending .boost-sd__slider { display: block !important; visibility: visible !important; opacity: 1 !important; }
.smith-original-trending[data-smith-shared-trending="true"] .boost-sd__recommendation { width: 100% !important; max-width: none !important; margin-left: 0 !important; margin-right: 0 !important; }
.smith-original-trending .boost-sd__recommendation-title-text { display: block !important; text-align: center !important; font-size: 32px !important; font-weight: 700 !important; line-height: 1.2 !important; color: #181818 !important; margin: 0 0 28px !important; text-transform: capitalize !important; }
.smith-original-trending[data-smith-shared-trending="true"] .boost-sd__recommendation .boost-sd__slider { padding-left: 0 !important; padding-right: 0 !important; }
.smith-original-trending .boost-sd__slider-container,
.smith-original-trending .slick-slider { position: relative !important; margin-left: 0 !important; margin-right: 0 !important; }
.smith-original-trending .slick-slider,
.smith-original-trending .slick-list { overflow: hidden !important; }
.smith-original-trending .slick-list,
.smith-original-trending .slick-track { height: 605px !important; min-height: 605px !important; max-height: 605px !important; }
.smith-original-trending .slick-track { display: grid !important; grid-template-columns: repeat(4, minmax(0, 1fr)) !important; grid-template-rows: 1fr !important; gap: 14px !important; width: 100% !important; left: 0 !important; transform: none !important; }
.smith-original-trending .slick-track:before,
.smith-original-trending .slick-track:after { display: none !important; content: none !important; }
.smith-original-trending .slick-slide { display: none !important; width: auto !important; height: 605px !important; min-height: 605px !important; max-height: 605px !important; }
.smith-original-trending .slick-slide.smith-trending-visible.smith-trending-page-active { display: block !important; }
.smith-original-trending .slick-slide.smith-trending-visible > div,
.smith-original-trending .slick-slide.smith-trending-visible .boost-sd__slide,
.smith-original-trending .slick-slide.smith-trending-visible .boost-sd__product-item { height: 605px !important; min-height: 605px !important; max-height: 605px !important; }
.smith-original-trending .boost-sd__product-item { position: relative !important; background: #f4f4f4 !important; padding: 18px 19px 20px !important; margin-left: 0 !important; margin-right: 0 !important; border-radius: 4px !important; box-sizing: border-box !important; display: flex !important; flex-direction: column !important; justify-content: flex-start !important; }
.smith-original-trending .boost-sd__product-image-wrapper { height: 340px !important; min-height: 340px !important; max-height: 340px !important; aspect-ratio: auto !important; display: flex !important; align-items: center !important; justify-content: center !important; }
.smith-original-trending .boost-sd__product-image { height: 340px !important; width: 100% !important; display: flex !important; align-items: center !important; justify-content: center !important; }
.smith-original-trending .boost-sd__product-image-img,
.smith-original-trending .boost-sd__product-image-img--main { max-height: 250px !important; max-width: 100% !important; width: auto !important; height: auto !important; object-fit: contain !important; }
.smith-original-trending .boost-sd__product-image-row--top {
  position: absolute !important;
  top: 12px !important;
  right: 12px !important;
  bottom: auto !important;
  left: 12px !important;
  z-index: 5 !important;
  display: flex !important;
  justify-content: flex-end !important;
  align-items: flex-start !important;
  pointer-events: none !important;
}
.smith-original-trending .boost-sd__product-image-row--top .boost-sd__product-image-column,
.smith-original-trending .boost-sd__product-image-row--top .product-badges { display: flex !important; justify-content: flex-end !important; }
.smith-original-trending .boost-sd__product-info-wrapper { height: auto !important; min-height: 0 !important; margin-top: auto !important; }
.smith-original-trending .boost-sd__product-info {
  display: block !important;
  width: 100% !important;
  height: auto !important;
  min-height: 0 !important;
}
.smith-original-trending .boost-sd__product-info-content {
  width: 100% !important;
  margin: 0 !important;
}
.smith-original-trending .product-card-wrapper {
  padding: 0 !important;
}

/* Remove radio borders, pseudo elements and hidden text */
.smith-original-trending .boost-sd__radio-input { display: none !important; opacity: 0 !important; visibility: hidden !important; width: 0 !important; height: 0 !important; pointer-events: none !important; }
.smith-original-trending .boost-sd__tooltip-content { display: none !important; visibility: hidden !important; opacity: 0 !important; height: 0 !important; width: 0 !important; font-size: 0 !important; overflow: hidden !important; }
.smith-original-trending .boost-sd__radio,
.smith-original-trending .boost-sd__tooltip { display: flex !important; align-items: center !important; justify-content: center !important; width: 100% !important; height: 100% !important; position: relative !important; margin: 0 !important; padding: 0 !important; border: 0 !important; background: transparent !important; }
.smith-original-trending .boost-sd__radio::before,
.smith-original-trending .boost-sd__radio::after,
.smith-original-trending .boost-sd__tooltip::before,
.smith-original-trending .boost-sd__tooltip::after,
.smith-original-trending .boost-sd__radio-label::before,
.smith-original-trending .boost-sd__radio-label::after { display: none !important; content: none !important; }

/* Swatch container & option circles */
.smith-original-trending .boost-sd__product-swatch { width: 100% !important; max-width: 100% !important; margin: 6px 0 10px !important; }
.smith-original-trending .boost-sd__product-swatch-options { display: flex !important; align-items: center !important; justify-content: flex-start !important; flex-wrap: nowrap !important; gap: 8px !important; width: 100% !important; height: 48px !important; min-height: 48px !important; max-height: 48px !important; overflow: hidden !important; margin: 0 !important; padding: 0 !important; }
.smith-original-trending .boost-sd__product-swatch-option { flex: 0 0 44px !important; width: 44px !important; max-width: 44px !important; height: 44px !important; max-height: 44px !important; overflow: hidden !important; margin: 0 !important; padding: 0 !important; display: flex !important; align-items: center !important; justify-content: center !important; }
.smith-original-trending .boost-sd__product-swatch-option label,
.smith-original-trending .boost-sd__radio-label { display: block !important; width: 44px !important; height: 44px !important; min-width: 44px !important; max-width: 44px !important; min-height: 44px !important; max-height: 44px !important; flex: 0 0 44px !important; padding: 0 !important; margin: 0 !important; border-radius: 50% !important; border: 1px solid #dcdcdc !important; overflow: hidden !important; color: transparent !important; font-size: 0 !important; line-height: 0 !important; text-indent: -9999px !important; white-space: nowrap !important; cursor: pointer !important; background-size: 90% auto !important; background-position: center center !important; background-repeat: no-repeat !important; background-color: #fff !important; box-sizing: border-box !important; }
.smith-original-trending .boost-sd__product-swatch-option label:hover,
.smith-original-trending .boost-sd__product-swatch-option.is-active label,
.smith-original-trending .boost-sd__radio-input:checked + .boost-sd__radio-label { border-color: #181818 !important; }
.smith-original-trending .boost-sd__product-swatch-more { display: inline-flex !important; align-items: center !important; justify-content: center !important; width: 44px !important; height: 44px !important; min-width: 44px !important; max-width: 44px !important; min-height: 44px !important; max-height: 44px !important; flex: 0 0 44px !important; border-radius: 50% !important; border: 1px solid #181818 !important; background: #fff !important; color: #181818 !important; font-size: 13px !important; font-weight: 500 !important; line-height: 1 !important; padding: 0 !important; margin: 0 !important; box-sizing: border-box !important; cursor: pointer !important; text-align: center !important; text-decoration: none !important; outline: none !important; }
.smith-original-trending .boost-sd__product-swatch-more:hover { background: #181818 !important; color: #fff !important; }
.smith-original-trending .boost-sd__product-swatch-more.d-hide { display: none !important; }
.smith-original-trending .boost-sd__product-swatch-more .text-mobile { display: none !important; }
.smith-original-trending .boost-sd__product-swatch-more .text-desktop { display: inline !important; }

/* Keep exactly up to 4 items in swatch row */
.smith-original-trending .boost-sd__product-swatch-options:has(.boost-sd__product-swatch-more:not(.d-hide):not([style*="display: none"])) .boost-sd__product-swatch-option:nth-of-type(n+4) { display: none !important; }

.smith-original-trending .boost-sd__product-title { margin: 6px 0 8px !important; font-size: 15px !important; font-weight: 600 !important; line-height: 1.3 !important; color: #181818 !important; text-decoration: none !important; }
.smith-original-trending .boost-sd__product-title a { color: inherit !important; text-decoration: underline !important; text-underline-offset: 3px !important; }
.smith-original-trending .smith-stock-label { display: inline-block !important; color: #18743a !important; font-size: 14px !important; font-weight: 600 !important; text-transform: uppercase !important; line-height: 1.4 !important; }
.smith-original-trending .boost-sd__prev-button button,
.smith-original-trending .boost-sd__next-button button { position: absolute !important; top: 50% !important; transform: translateY(-50%) !important; width: 42px !important; height: 42px !important; border-radius: 50% !important; background: #e5e5e5 !important; border: 0 !important; color: #181818 !important; font-size: 24px !important; display: flex !important; align-items: center !important; justify-content: center !important; cursor: pointer !important; z-index: 10 !important; }
.smith-original-trending .boost-sd__prev-button button { left: -21px !important; }
.smith-original-trending .boost-sd__next-button button { right: -21px !important; }
.smith-original-trending .boost-sd__prev-button button:hover,
.smith-original-trending .boost-sd__next-button button:hover { background: #d0d0d0 !important; }
.smith-original-trending .slick-dots { display: flex !important; justify-content: center !important; gap: 8px !important; margin: 24px 0 0 !important; padding: 0 !important; list-style: none !important; }
.smith-original-trending .slick-dots li { display: inline-block !important; margin: 0 !important; padding: 0 !important; }
.smith-original-trending .slick-dots li button { width: 10px !important; height: 10px !important; padding: 0 !important; border-radius: 50% !important; background: #ccc !important; border: 0 !important; font-size: 0 !important; line-height: 0 !important; color: transparent !important; cursor: pointer !important; }
.smith-original-trending .slick-dots li.slick-active button { background: #181818 !important; }
@media (max-width: 1199px) and (min-width: 768px) {
  .smith-original-trending .slick-track { grid-template-columns: repeat(2, minmax(0, 1fr)) !important; }
}
@media (max-width: 767px) {
  .smith-original-trending .slick-list,
  .smith-original-trending .slick-track { height: 410px !important; min-height: 410px !important; max-height: 410px !important; }
  .smith-original-trending .slick-slide.smith-trending-visible,
  .smith-original-trending .slick-slide.smith-trending-visible > div,
  .smith-original-trending .slick-slide.smith-trending-visible .boost-sd__slide,
  .smith-original-trending .slick-slide.smith-trending-visible .boost-sd__product-item { height: 410px !important; min-height: 410px !important; max-height: 410px !important; }
  .smith-original-trending .boost-sd__product-image-wrapper,
  .smith-original-trending .boost-sd__product-image { height: 220px !important; min-height: 220px !important; }
  .smith-original-trending .slick-track { grid-template-columns: repeat(1, minmax(0, 1fr)) !important; }
  .smith-original-trending .boost-sd__prev-button button { left: 4px !important; }
  .smith-original-trending .boost-sd__next-button button { right: 4px !important; }
}
</style>
<script>
(function() {
  function initTrending(trending) {
    if (!trending || trending.dataset.smithInitialized === 'true') return;
    trending.dataset.smithInitialized = 'true';

    var trendingTitle = trending.querySelector('.boost-sd__recommendation-title-text');
    if (trendingTitle) trendingTitle.textContent = 'Sản Phẩm Thịnh Hành';

    trending.querySelectorAll('.boost-sd__product-price').forEach(function(price) {
      price.innerHTML = '<span class="smith-stock-label">CÒN HÀNG</span>';
    });

    var track = trending.querySelector('.slick-track');
    if (!track) return;

    // Remove all cloned slides and default active flags
    track.querySelectorAll('.slick-cloned').forEach(function(el) { el.remove(); });
    track.querySelectorAll('.slick-slide').forEach(function(el) {
      el.classList.remove('slick-active', 'slick-current');
    });

    // Keep the collection-style selection as the first page everywhere,
    // including the homepage. The previous order put the sunglasses page
    // first on home and made this shared component look inconsistent.
    var wanted = ['forefront-3-mips-r-sale', 'network-mips-r', 'bobcat', 'backcast', 'riptide', 'guides-choice', 'wildcat', 'lowdown-2', 'venture', 'trace-mips-r', 'engage-mips-r', 'forefront-3-mips-r'];
    var allSlides = Array.from(track.querySelectorAll(':scope > .slick-slide'));
    var chosen = [];

    wanted.forEach(function(handle) {
      var slide = allSlides.find(function(candidate) {
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
      if (image && data.images?.[0]?.src) {
        image.removeAttribute('srcset');
        image.removeAttribute('sizes');
        image.src = data.images[0].src;
      }
    });

    // Re-populate track with ONLY the chosen unique 12 slides
    track.innerHTML = '';
    chosen.forEach(function(slide) {
      track.appendChild(slide);
    });

    var pageSize = window.innerWidth < 768 ? 1 : (window.innerWidth < 1200 ? 2 : 4);
    var pageCount = Math.max(1, Math.ceil(chosen.length / pageSize));
    chosen.forEach(function(slide, index) {
      slide.dataset.smithTrendingPage = String(Math.floor(index / pageSize));
    });

    var pageIndex = 0;
    var dotsContainer = trending.querySelector('.slick-dots');
    if (dotsContainer) {
      dotsContainer.innerHTML = '';
      for (var i = 0; i < pageCount; i++) {
        var li = document.createElement('li');
        if (i === 0) li.className = 'slick-active';
        var btn = document.createElement('button');
        btn.type = 'button';
        btn.setAttribute('aria-label', 'Trang ' + (i + 1));
        li.appendChild(btn);
        (function(targetIdx) {
          li.addEventListener('click', function() { showPage(targetIdx); });
        })(i);
        dotsContainer.appendChild(li);
      }
    }

    var dots = Array.from(trending.querySelectorAll('.slick-dots li'));

    function showPage(next) {
      pageIndex = (next + pageCount) % pageCount;
      chosen.forEach(function(slide) {
        var isActive = Number(slide.dataset.smithTrendingPage) === pageIndex;
        slide.classList.toggle('smith-trending-page-active', isActive);
      });
      dots.forEach(function(dot, idx) {
        dot.classList.toggle('slick-active', idx === pageIndex);
      });
    }

    trending.querySelector('.boost-sd__prev-button button')?.addEventListener('click', function() { showPage(pageIndex - 1); });
    trending.querySelector('.boost-sd__next-button button')?.addEventListener('click', function() { showPage(pageIndex + 1); });

    // Enforce max 4 circles per card in JS (3 swatches + 1 more button if more exists)
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

    trending.querySelectorAll('.boost-sd__product-swatch-option label').forEach(function(label) {
      label.addEventListener('click', function() {
        var image = label.closest('.boost-sd__product-item')?.querySelector('.boost-sd__product-image-img--main');
        var match = label.style.backgroundImage?.match(/url\(["']?(.*?)["']?\)/);
        if (image && match?.[1]) {
          image.removeAttribute('srcset');
          image.src = match[1];
        }
      });
    });

    var swipeStartX = null;
    trending.addEventListener('touchstart', function(event) {
      swipeStartX = event.touches[0]?.clientX ?? null;
    }, { passive: true });
    trending.addEventListener('touchend', function(event) {
      if (swipeStartX === null) return;
      var endX = event.changedTouches[0]?.clientX ?? swipeStartX;
      var delta = endX - swipeStartX;
      swipeStartX = null;
      if (Math.abs(delta) < 45) return;
      showPage(pageIndex + (delta < 0 ? 1 : -1));
    }, { passive: true });

    showPage(0);
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', function() {
      document.querySelectorAll('.smith-original-trending').forEach(initTrending);
    });
  } else {
    document.querySelectorAll('.smith-original-trending').forEach(initTrending);
  }
  window.smithInitTrending = initTrending;
})();
</script>
<?php endif; return; ?>
