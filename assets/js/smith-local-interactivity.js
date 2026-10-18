
// WordPress Smith Optics Interactivity Adapter
(function () {
    function localUrl(raw) {
        var url;
        try { url = new URL(raw, window.location.href); } catch (_) { return ''; }
        if (!/(^|\.)smithoptics\.com$|(^|\.)myshopify\.com$/i.test(url.hostname)) return '';
        if (/^support\.smithoptics\.com$/i.test(url.hostname)) return '/trang/ho-tro/';
        var path = url.pathname.replace(/^\/(?:en-us|en-ca|en-eu)(?=\/|$)/i, '');
        var match;
        if ((match = path.match(/^\/products?\/([^/]+)/i))) return '/san-pham/' + match[1] + '/';
        if ((match = path.match(/^\/collections?\/([^/]+)/i))) return '/bo-suu-tap/' + match[1] + '/';
        if ((match = path.match(/^\/pages?\/technologies\/([^/]+)/i))) return '/trang/cong-nghe/' + match[1] + '/';
        if ((match = path.match(/^\/pages?\/athletes\/([^/]+)/i))) return '/trang/van-dong-vien/' + match[1] + '/';
        if ((match = path.match(/^\/pages?\/([^/]+)/i))) return '/trang/' + match[1] + '/';
        if ((match = path.match(/^\/(?:blogs?\/[^/]+|b)\/([^/]+)/i))) return '/bai-viet/' + match[1] + '/';
        return '/';
    }
    document.addEventListener('click', function (event) {
        var link = event.target && event.target.closest ? event.target.closest('a[href]') : null;
        if (!link) return;
        var local = localUrl(link.href);
        if (!local) return;
        event.preventDefault();
        window.location.assign(local);
    }, true);
})();

(function() {
    window.Shopify = window.Shopify || {};
    window.Shopify.shop = "smithoptics.com";
    window.Shopify.currency = { active: "USD", rate: "1.0" };
    window.Shopify.customerPrivacy = { userCanBeTracked: () => true, getTrackingConsent: () => "yes" };
    window.trekkie = { push: function() {}, track: function() {} };

    // Tự động tìm URL JSON sản phẩm
    let jsonUrl = '/assets/products_index.json';
    if (typeof smithData !== 'undefined') {
        jsonUrl = smithData.products_ajax_url || smithData.products_index || jsonUrl;
    } else {
        const themeScript = document.querySelector('script[src*="theme_smith"]');
        if (themeScript) {
            const baseUri = themeScript.src.split('/assets/')[0];
            jsonUrl = baseUri + '/assets/products_index.json';
        }
    }
    window.__SMITH_PRODUCTS_JSON_URL = jsonUrl;
})();
/**
 * Smith Optics Cloned Site - Robust Global Stub, Interactivity & Instant Collection Grid
 */
(function() {
    var dummyFn = function() {};
    var trueFn = function() { return true; };

    // 1. Stub Callable Trekkie
    var trekkieHandler = function() {};
    trekkieHandler.push = function() {};
    trekkieHandler.track = dummyFn;
    trekkieHandler.page = dummyFn;
    trekkieHandler.ready = function(cb) { if (typeof cb === "function") try { cb(); } catch(e){} };
    trekkieHandler.load = dummyFn;
    trekkieHandler.integrations = {};
    window.trekkie = trekkieHandler;

    // 2. Stub Shopify
    window.Shopify = window.Shopify || {};
    window.Shopify.shop = "v8pti0-6j.myshopify.com";
    window.Shopify.currency = { active: "USD", rate: "1.0" };
    window.Shopify.theme = { id: 165441208558, name: "Smith Optics Main", role: "main" };
    window.Shopify.money_format = "${{amount}}";
    window.Shopify.analyticsProcessingAllowed = true;
    window.Shopify.marketingAllowed = true;
    window.Shopify.preferencesProcessingAllowed = true;
    window.Shopify.saleOfDataAllowed = true;

    window.Shopify.customerPrivacy = {
        getTrackingConsent: function() { return "yes"; },
        setTrackingConsent: function(c, cb) { if(cb) cb({ error: null }); },
        userCanBeTracked: trueFn,
        getRegulation: function() { return ""; },
        getShopPrefs: function() { return {}; },
        shouldShowGDPRBanner: function() { return false; },
        userDataCanBeSold: trueFn,
        analyticsProcessingAllowed: trueFn,
        marketingAllowed: trueFn,
        preferencesProcessingAllowed: trueFn,
        saleOfDataAllowed: trueFn,
        analyticsAllowed: trueFn,
        marketingProcessingAllowed: trueFn,
        currentVisitorConsent: function() {
            return { analytics: "yes", marketing: "yes", preferences: "yes", sale_of_data: "yes" };
        }
    };

    window.Shopify.formatMoney = function(cents) {
        if (typeof cents === "string") cents = cents.replace(".", "");
        var val = "";
        var placeholderRegex = /\{\{\s*(\w+)\s*\}\}/;
        function defaultOption(opt, def) { return typeof opt == "undefined" ? def : opt; }
        function formatWithDelimiters(num, prec, thou, dec) {
            prec = defaultOption(prec, 2); thou = defaultOption(thou, ","); dec = defaultOption(dec, ".");
            if (isNaN(num) || num == null) return 0;
            num = (num / 100.0).toFixed(prec);
            var parts = num.split(".");
            var dollars = parts[0].replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1" + thou);
            var cents = parts[1] ? dec + parts[1] : "";
            return dollars + cents;
        }
        return "$" + formatWithDelimiters(cents, 2);
    };

    window.ShopifyAnalytics = window.ShopifyAnalytics || {};
    window.ShopifyAnalytics.lib = { track: dummyFn, page: dummyFn, identify: dummyFn, trackForm: dummyFn };
    window.ShopifyAnalytics.merchantGoogleAnalytics = dummyFn;

    window.ga = dummyFn;
    window.gtag = dummyFn;
    window.dataLayer = window.dataLayer || [];
    window._learnq = window._learnq || [];
    window.fbq = dummyFn;
    window.loomi_ctx = {};
    window.vslyAntiFlickerReveal = dummyFn;
    window.BOOMR = { init: dummyFn, subscribe: dummyFn, addVar: dummyFn };
    window.__chat_provider = "smith";
    window.ShopifyChat = { init: dummyFn };

    // 3. Local Cart
    const CART_KEY = "smith_cloned_cart";
    function getCart() {
        try {
            let cart = JSON.parse(localStorage.getItem(CART_KEY)) || { items: [], item_count: 0, total_price: 0 };
            cart.items = (cart.items || []).map(function(item) {
                if (!item.properties) item.properties = {};
                return item;
            });
            return cart;
        } catch(e) {
            return { items: [], item_count: 0, total_price: 0 };
        }
    }

    function saveCart(cart) {
        cart.item_count = cart.items.reduce((sum, item) => sum + (item.quantity || 1), 0);
        cart.total_price = cart.items.reduce((sum, item) => sum + ((item.price || 0) * (item.quantity || 1)), 0);
        localStorage.setItem(CART_KEY, JSON.stringify(cart));
        updateCartCountUI(cart.item_count);
        return cart;
    }

    function updateCartCountUI(count) {
        document.querySelectorAll("[data-cart-count], .cart-count, .cart-count-bubble, [cart-count]").forEach(el => {
            el.textContent = count;
            el.style.display = count > 0 ? "" : "none";
        });
    }

    // 4. Fetch Interceptor
    const originalFetch = window.fetch;
    window.fetch = async function(resource, init) {
        const url = typeof resource === "string" ? resource : (resource ? resource.url : "");
        
        if (url.includes("/cart.js") || url.includes("/cart/update.js") || url.includes("/cart/change.js")) {
            return new Response(JSON.stringify(getCart()), { status: 200, headers: { "Content-Type": "application/json" } });
        }
        
        if (url.includes("/cart/add.js") || url.includes("/cart/add")) {
            const cart = getCart();
            let newItem = { id: Date.now(), title: document.title || "Smith Optics Item", quantity: 1, price: 18000, properties: {} };
            try {
                if (init && init.body) {
                    const parsedBody = typeof init.body === "string" ? JSON.parse(init.body) : {};
                    Object.assign(newItem, parsedBody);
                }
            } catch(e) {}
            cart.items.push(newItem);
            saveCart(cart);
            return new Response(JSON.stringify(newItem), { status: 200, headers: { "Content-Type": "application/json" } });
        }

        if (url.includes("/search/suggest")) {
            return new Response(JSON.stringify({
                resources: {
                    results: {
                        products: [
                            { title: "Smith 4D MAG Goggles", url: "/products/4d-mag", price: "$340.00" },
                            { title: "Smith Squad XL Goggles", url: "/products/squad-xl", price: "$150.00" },
                            { title: "Smith Lowdown 2 Sunglasses", url: "/products/lowdown-2", price: "$189.00" },
                            { title: "Smith Vantage MIPS Helmet", url: "/products/vantage-mips", price: "$270.00" }
                        ]
                    }
                }
            }), { status: 200, headers: { "Content-Type": "application/json" } });
        }

        if (url.startsWith("http") && !url.includes("127.0.0.1") && !url.includes("localhost")) {
            return new Response(JSON.stringify({ status: "ok" }), { status: 200, headers: { "Content-Type": "application/json" } });
        }

        try {
            return await originalFetch.apply(this, arguments);
        } catch (err) {
            return new Response(JSON.stringify({ status: "ok" }), { status: 200, headers: { "Content-Type": "application/json" } });
        }
    };

    // 5. TỰ ĐỘNG THAY THẾ TOÀN BỘ SKELETON XÁM BẰNG LƯỚI SẢN PHẨM THỰC TẾ
    function renderCollectionGridNow() {
        const isCollection = window.location.pathname.toLowerCase().includes("/collections") || document.querySelector(".boost-sd-layout, .boost-sd__product-list-placeholder, .main-collection");
        if (!isCollection) return;

        // Xóa ngay lập tức tất cả các placeholder xám
        const placeholders = document.querySelectorAll(".boost-sd__filter-tree-vertical-placeholder, .boost-sd__product-list-placeholder, .boost-sd__rc-pl");
        if (placeholders.length === 0) return;

        // Tải index sản phẩm
        var jsonEndpoint = window.__SMITH_PRODUCTS_JSON_URL || "/assets/products_index.json";
        fetch(jsonEndpoint)
            .then(r => r.json())
            .then(allProducts => {
                if (!Array.isArray(allProducts) || allProducts.length === 0) return;

                const path = window.location.pathname.toLowerCase();
                let filtered = allProducts;
                if (path.includes("sunglass") || path.includes("prescription") || path.includes("eyewear")) {
                    filtered = allProducts.filter(p => p.category === "sunglasses" || p.category === "accessories");
                } else if (path.includes("goggle") || path.includes("snow")) {
                    filtered = allProducts.filter(p => p.category === "goggles" || p.category === "lenses");
                } else if (path.includes("helmet") || path.includes("bike") || path.includes("ski")) {
                    filtered = allProducts.filter(p => p.category === "helmets");
                } else if (path.includes("apparel") || path.includes("cloth")) {
                    filtered = allProducts.filter(p => p.category === "apparel");
                }

                if (filtered.length === 0) filtered = allProducts;

                // Render Filter Sidebar
                const filterArea = document.querySelector("#boost-sd__filter-tree-wrapper, .boost-sd-left, .boost-sd__filter-tree-vertical");
                if (filterArea) {
                    filterArea.innerHTML = `
                        <div style="padding: 20px; background: #fafafa; border-radius: 8px; border: 1px solid #e8e8e8; margin-bottom: 24px;">
                            <h3 style="font-size: 15px; font-weight: 700; margin: 0 0 16px 0; text-transform: uppercase; letter-spacing: 0.5px;">Filter By</h3>
                            <div style="margin-bottom: 20px;">
                                <div style="font-weight: 600; font-size: 13px; margin-bottom: 10px; color: #111;">Category</div>
                                <label style="display: flex; align-items: center; gap: 8px; font-size: 13px; margin-bottom: 6px; cursor: pointer;"><input type="checkbox" checked> All Items (${filtered.length})</label>
                                <label style="display: flex; align-items: center; gap: 8px; font-size: 13px; margin-bottom: 6px; cursor: pointer;"><input type="checkbox"> ChromaPop™ Polarized</label>
                                <label style="display: flex; align-items: center; gap: 8px; font-size: 13px; margin-bottom: 6px; cursor: pointer;"><input type="checkbox"> Low Bridge Fit</label>
                                <label style="display: flex; align-items: center; gap: 8px; font-size: 13px; margin-bottom: 6px; cursor: pointer;"><input type="checkbox"> Standard Fit</label>
                            </div>
                            <div>
                                <div style="font-weight: 600; font-size: 13px; margin-bottom: 10px; color: #111;">Price Range</div>
                                <label style="display: flex; align-items: center; gap: 8px; font-size: 13px; margin-bottom: 6px; cursor: pointer;"><input type="checkbox"> Under $150</label>
                                <label style="display: flex; align-items: center; gap: 8px; font-size: 13px; margin-bottom: 6px; cursor: pointer;"><input type="checkbox"> $150 - $250</label>
                                <label style="display: flex; align-items: center; gap: 8px; font-size: 13px; margin-bottom: 6px; cursor: pointer;"><input type="checkbox"> $250 & Above</label>
                            </div>
                        </div>
                    `;
                }

                // Render Product Grid Cards
                const gridArea = document.querySelector(".boost-sd-right, .boost-sd__product-list-wrapper, .boost-sd__product-list-placeholder, .boost-sd__filter-product-list");
                if (gridArea) {
                    var themeUrl = (typeof smithData !== 'undefined' && smithData.theme_url) ? smithData.theme_url : '';
                    let html = `
                        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 24px; padding-bottom: 12px; border-bottom: 1px solid #eee;">
                            <div style="font-size: 15px; color: #444; font-weight: 600;">Showing <strong>${filtered.length}</strong> Products</div>
                            <div style="display: flex; align-items: center; gap: 8px; font-size: 13px;">
                                <span>Sort By:</span>
                                <select style="padding: 6px 12px; border: 1px solid #ccc; border-radius: 4px; background: #fff; font-weight: 500;">
                                    <option>Featured</option>
                                    <option>Best Selling</option>
                                    <option>Price: Low to High</option>
                                    <option>Price: High to Low</option>
                                </select>
                            </div>
                        </div>
                        <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(260px, 1fr)); gap: 24px; width: 100%;">
                    `;

                    filtered.forEach(p => {
                        var pImg = p.image || '/assets/images/placeholder_product.webp';
                        if (pImg.startsWith('/assets/')) {
                            pImg = themeUrl + pImg;
                        }
                        var pUrl = p.url || ('/products/' + p.handle);
                        html += `
                            <div class="smith-product-card" style="background: #ffffff; border: 1px solid #e8e8e8; border-radius: 8px; overflow: hidden; display: flex; flex-direction: column; transition: transform 0.2s, box-shadow 0.2s; box-shadow: 0 2px 8px rgba(0,0,0,0.03);">
                                <a href="${pUrl}" style="text-decoration: none; color: inherit; display: flex; flex-direction: column; height: 100%;">
                                    <div style="width: 100%; height: 260px; background: #f8f8f8; display: flex; align-items: center; justify-content: center; overflow: hidden; padding: 16px;">
                                        <img src="${pImg}" alt="${p.title}" style="max-width: 100%; max-height: 100%; object-fit: contain; transition: transform 0.3s;" onmouseover="this.style.transform='scale(1.06)'" onmouseout="this.style.transform='scale(1)'">
                                    </div>
                                    <div style="padding: 16px; flex: 1; display: flex; flex-direction: column; justify-content: space-between;">
                                        <div>
                                            <div style="font-size: 11px; color: #888; text-transform: uppercase; font-weight: 600; letter-spacing: 0.5px; margin-bottom: 4px;">Smith Optics</div>
                                            <h4 style="font-size: 15px; font-weight: 600; margin: 0 0 8px 0; color: #111; line-height: 1.35;">${p.title}</h4>
                                        </div>
                                        <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 14px; padding-top: 10px; border-top: 1px solid #f2f2f2;">
                                            <span style="font-size: 16px; font-weight: 700; color: #111;">${p.price}</span>
                                            <span style="font-size: 12px; background: #111; color: #fff; padding: 6px 14px; border-radius: 4px; font-weight: 600;">View</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        `;
                    });

                    html += `</div>`;
                    gridArea.innerHTML = html;
                }

                // Ẩn tất cả skeleton còn lại
                document.querySelectorAll(".boost-sd__rc-pl, .boost-sd__skeleton, .boost-sd__placeholder-item").forEach(e => e.remove());
            })
            .catch(err => console.log("Grid load error:", err));
    }

    // 6. Chạy ngay lập tức và khi DOM sẵn sàng
    if (document.readyState === "loading") {
        document.addEventListener("DOMContentLoaded", function() {
            initUI();
            renderCollectionGridNow();
        });
    } else {
        initUI();
        renderCollectionGridNow();
    }

    function initUI() {
        const cart = getCart();
        updateCartCountUI(cart.item_count);
        syncMobileNavigationFromDesktop();
        mountSmithContactWidget();

        document.querySelectorAll("img[data-src], img[data-srcset], source[data-srcset]").forEach(img => {
            if (img.dataset.src && !img.src) img.src = img.dataset.src;
            if (img.dataset.srcset && !img.srcset) img.srcset = img.dataset.srcset;
        });

        document.querySelectorAll("iframe[src*='shop.app']").forEach(iframe => {
            iframe.remove();
        });
    }

    // Polling nhẹ trong 3 giây đầu để đảm bảo bắt được các container sinh ra trễ
    // Reviews.io creates this gallery and its popup asynchronously. Rewrite the
    // copied Smith US product links so visitors remain on the Vietnamese store.
    function localizeCommunityGalleryLinks(scope) {
        var scanRoot = scope && scope.querySelectorAll ? scope : document;
        scanRoot.querySelectorAll('.MediaGalleryWidget-prefix a[href*="smithoptics.com"], .R-GlobalModal a[href*="smithoptics.com"]').forEach(function(link) {
            try {
                var source = new URL(link.getAttribute('href'), window.location.href);
                var productMatch = source.pathname.match(/\/(?:[a-z]{2}_[A-Z]{2}\/)?products\/([^/?#]+)/i);
                link.href = productMatch ? '/products/' + productMatch[1] + source.search : '/';
                link.removeAttribute('target');
                link.removeAttribute('rel');
                if (/^Shop Now$/i.test(link.textContent.trim())) link.textContent = 'MUA HÀNG';
            } catch (_) {}
        });
    }

    // Keep the mobile drawer link-for-link identical to the desktop dropdowns.
    // Desktop remains the single source of truth, so mobile cannot invent or omit items.
    function syncMobileNavigationFromDesktop() {
        var menus = [
            ['#MegaMenu-Content-1', '#Details-menu-drawer-menu-item-1'],
            ['#MegaMenu-Content-2', '#Details-menu-drawer-eyewear'],
            ['#MegaMenu-Content-3', '#Details-menu-drawer-helmets'],
            ['#MegaMenu-Content-4', '#Details-menu-drawer-goggles'],
            ['#HeaderMenu-MenuList-7', '#Details-menu-drawer-sport'],
            ['#HeaderMenu-MenuList-9', '#Details-menu-drawer-menu-item-9']
        ];

        menus.forEach(function(menu) {
            var source = document.querySelector(menu[0]);
            var targetDetails = document.querySelector(menu[1]);
            var target = targetDetails && targetDetails.querySelector('.menu-drawer__inner-submenu > ul.menu-drawer__menu');
            if (!source || !target) return;

            var links = source.querySelectorAll('a.mega-menu__link, a.header__menu-item');
            var fragment = document.createDocumentFragment();
            links.forEach(function(sourceLink) {
                var label = sourceLink.textContent.replace(/\s+/g, ' ').trim();
                var href = sourceLink.getAttribute('href');
                if (!label || !href) return;

                var item = document.createElement('li');
                var link = document.createElement('a');
                link.href = href;
                link.textContent = label;
                link.className = 'menu-drawer__menu-item link link--text list-menu__item focus-inset';
                if (sourceLink.classList.contains('mega-menu__link--level-2')) {
                    link.classList.add('smith-mobile-menu-level-2');
                }
                item.appendChild(link);
                fragment.appendChild(item);
            });

            target.replaceChildren(fragment);
        });
    }

    function mountSmithContactWidget() {
        if (document.querySelector('.smith-contact-widget')) return;

        var widget = document.createElement('div');
        widget.className = 'smith-contact-widget';
        widget.innerHTML = `
            <button type="button" class="smith-contact-trigger" aria-label="Mở thông tin liên hệ" aria-expanded="false" aria-controls="smith-contact-panel">
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M6.6 10.8a15.5 15.5 0 0 0 6.6 6.6l2.2-2.2a1 1 0 0 1 1-.24c1.1.36 2.3.54 3.5.54a1 1 0 0 1 1 1V20a1 1 0 0 1-1 1C10.6 21 3 13.4 3 4a1 1 0 0 1 1-1h3.5a1 1 0 0 1 1 1c0 1.2.18 2.4.54 3.5a1 1 0 0 1-.25 1L6.6 10.8Z" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </button>
            <section id="smith-contact-panel" class="smith-contact-panel" aria-label="Liên hệ Smith Việt Nam" aria-hidden="true">
                <header class="smith-contact-panel__header">
                    <div><span>SMITH VIỆT NAM</span><strong>Liên hệ tư vấn</strong></div>
                    <button type="button" class="smith-contact-close" aria-label="Đóng cửa sổ liên hệ">×</button>
                </header>
                <div class="smith-contact-panel__body">
                    <a class="smith-contact-action" href="tel:1900638400">
                        <span class="smith-contact-action__icon">☎</span>
                        <span><small>HOTLINE TỔNG ĐÀI</small><strong>1900.63.8400</strong></span>
                    </a>
                    <a class="smith-contact-action" href="https://zalo.me/0917834532" target="_blank" rel="noopener noreferrer">
                        <span class="smith-contact-action__icon smith-contact-action__icon--zalo">Zalo</span>
                        <span><small>Chat qua Zalo</small><strong>Nhắn tin tư vấn ngay</strong></span>
                    </a>
                    <a class="smith-contact-action" href="mailto:contact@smithoptics.vn">
                        <span class="smith-contact-action__icon">✉</span>
                        <span><small>Email</small><strong>contact@smithoptics.vn</strong></span>
                    </a>
                    <a class="smith-contact-stores" href="/trang/tim-cua-hang">
                        <strong>Hệ thống văn phòng</strong>
                        <span><b>Hà Nội:</b> 226 Đường Láng, Phường Thịnh Quang, Quận Đống Đa</span>
                        <span><b>TP. Hồ Chí Minh:</b> 137 Hòa Hưng, Phường Hòa Hưng</span>
                        <small>Xem bản đồ và thông tin cửa hàng →</small>
                    </a>
                </div>
            </section>`;
        document.body.appendChild(widget);

        var trigger = widget.querySelector('.smith-contact-trigger');
        var panel = widget.querySelector('.smith-contact-panel');
        var close = widget.querySelector('.smith-contact-close');
        function setOpen(open) {
            widget.classList.toggle('is-open', open);
            trigger.setAttribute('aria-expanded', open ? 'true' : 'false');
            panel.setAttribute('aria-hidden', open ? 'false' : 'true');
            if (open) close.focus();
        }
        trigger.addEventListener('click', function() { setOpen(!widget.classList.contains('is-open')); });
        close.addEventListener('click', function() { setOpen(false); trigger.focus(); });
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape' && widget.classList.contains('is-open')) setOpen(false);
        });
        document.addEventListener('click', function(event) {
            if (widget.classList.contains('is-open') && !widget.contains(event.target)) setOpen(false);
        });
    }

    localizeCommunityGalleryLinks(document);
    new MutationObserver(function(mutations) {
        mutations.forEach(function(mutation) {
            mutation.addedNodes.forEach(function(node) {
                if (node.nodeType === Node.ELEMENT_NODE) localizeCommunityGalleryLinks(node);
            });
        });
    }).observe(document.documentElement, { childList: true, subtree: true });

    // Some support widgets inject their content after the server-rendered page.
    // Normalize email text and mailto links as soon as those nodes appear.
    function localizeContactEmails(scope) {
        var scanRoot = scope && scope.querySelectorAll ? scope : document;
        var emailPattern = /[A-Z0-9._%+\-]+@[A-Z0-9.\-]+\.[A-Z]{2,}/gi;
        var walker = document.createTreeWalker(scanRoot, NodeFilter.SHOW_TEXT);
        var textNode;
        while ((textNode = walker.nextNode())) {
            if (textNode.parentElement && textNode.parentElement.closest('script, style, template')) continue;
            if (emailPattern.test(textNode.nodeValue)) {
                textNode.nodeValue = textNode.nodeValue.replace(emailPattern, 'contact@smithoptics.vn');
            }
            emailPattern.lastIndex = 0;
        }
        scanRoot.querySelectorAll('a[href^="mailto:"]').forEach(function(link) {
            link.href = 'mailto:contact@smithoptics.vn';
            var structuredLabel = link.querySelector('strong');
            if (structuredLabel) structuredLabel.textContent = 'contact@smithoptics.vn';
            else link.textContent = 'contact@smithoptics.vn';
            link.removeAttribute('aria-describedby');
        });
        scanRoot.querySelectorAll('input[type="email"]').forEach(function(input) {
            if (emailPattern.test(input.placeholder || '')) input.placeholder = 'contact@smithoptics.vn';
            emailPattern.lastIndex = 0;
        });
    }

    localizeContactEmails(document);
    new MutationObserver(function(mutations) {
        mutations.forEach(function(mutation) {
            mutation.addedNodes.forEach(function(node) {
                if (node.nodeType === Node.ELEMENT_NODE) localizeContactEmails(node);
                if (node.nodeType === Node.TEXT_NODE && node.parentElement) localizeContactEmails(node.parentElement);
            });
        });
    }).observe(document.documentElement, { childList: true, subtree: true });

    var checkCount = 0;
    var interval = setInterval(function() {
        checkCount++;
        renderCollectionGridNow();
        if (checkCount > 10) clearInterval(interval);
    }, 300);

})();
