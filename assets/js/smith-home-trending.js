(function () {
  'use strict';

  document.addEventListener('DOMContentLoaded', function () {
    var collections = document.querySelector('.main-index .section-collection-list');
    var communityHeading = document.querySelector('.main-index [id$="__rich_text_4i9r8Y"]');
    var communityGallery = document.querySelector('.main-index [id$="__178405198409ffe087"]');
    if (collections && communityHeading && communityGallery) {
      collections.after(communityHeading);
      communityHeading.after(communityGallery);
    }

    var productRecommendations = document.querySelector('.main-index [id$="__177982743349f05fc7"]');
    var campaignRows = document.querySelector('.main-index [id$="__multirow_UUdtmU"]');
    var featuredStories = document.querySelector('.main-index [id$="__featured_article_hydqEF"]');
    if (productRecommendations && campaignRows) {
      productRecommendations.after(campaignRows);
    }
    if (campaignRows && featuredStories) {
      campaignRows.after(featuredStories);
    }

    var featuredTrack = document.getElementById('Slider-template--23416234311918__featured_article_hydqEF');
    if (featuredTrack) {
      Array.from(featuredTrack.querySelectorAll(':scope > .featured-article-item')).forEach(function (item) {
        var title = (item.querySelector('.card__heading')?.textContent || '').replace(/\s+/g, ' ').trim();
        var keep = title.indexOf('Through the Lens: Zoe McDougall') === 0 ||
          title.indexOf('Pursue Your Thrill: Meet Oaxaca') === 0 ||
          title.indexOf('Breakfast of Champions') === 0;
        if (!keep) item.remove();
      });
    }

    var trending = document.querySelector('.main-index .smith-original-trending');
    if (!trending || trending.dataset.smithReady === 'true') return;
    trending.dataset.smithReady = 'true';
    trending.style.marginTop = '0';
    trending.style.marginBottom = '25px';

    var track = trending.querySelector('.slick-track');
    if (!track) return;

    track.querySelectorAll('.slick-cloned').forEach(function (el) { el.remove(); });
    track.querySelectorAll('.slick-slide').forEach(function (el) {
      el.classList.remove('slick-active', 'slick-current');
    });

    var wanted = ['riptide', 'guides-choice', 'wildcat', 'lowdown-2', 'forefront-3-mips-r-sale', 'network-mips-r', 'bobcat', 'backcast', 'venture', 'trace-mips-r', 'engage-mips-r', 'forefront-3-mips-r'];
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
      if (image && data.images?.[0]?.src) {
        image.removeAttribute('srcset');
        image.removeAttribute('sizes');
        image.src = data.images[0].src;
      }
    });

    track.innerHTML = '';
    chosen.forEach(function (slide) {
      track.appendChild(slide);
    });

    var pageSize = window.innerWidth < 768 ? 1 : (window.innerWidth < 1200 ? 2 : 4);
    var pageCount = Math.max(1, Math.ceil(chosen.length / pageSize));
    chosen.forEach(function (slide, index) {
      slide.dataset.smithTrendingPage = String(Math.floor(index / pageSize));
    });
    var dots = Array.from(trending.querySelectorAll('.slick-dots li')).slice(0, pageCount);
    function showPage(next) {
      pageIndex = (next + pageCount) % pageCount;
      chosen.forEach(function (slide) {
        slide.classList.toggle('smith-trending-page-active', Number(slide.dataset.smithTrendingPage) === pageIndex);
      });
      dots.forEach(function (dot, index) { dot.classList.toggle('slick-active', index === pageIndex); });
    }

    trending.querySelector('.boost-sd__prev-button button')?.addEventListener('click', function () { showPage(pageIndex - 1); });
    trending.querySelector('.boost-sd__next-button button')?.addEventListener('click', function () { showPage(pageIndex + 1); });
    dots.forEach(function (dot, index) { dot.addEventListener('click', function () { showPage(index); }); });
    trending.querySelectorAll('.boost-sd__product-swatch-option label').forEach(function (label) {
      label.addEventListener('click', function () {
        var image = label.closest('.boost-sd__product-item')?.querySelector('.boost-sd__product-image-img--main');
        var match = label.style.backgroundImage?.match(/url\(["']?(.*?)["']?\)/);
        if (image && match?.[1]) { image.removeAttribute('srcset'); image.src = match[1]; }
      });
    });
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
    showPage(0);
  });
})();
