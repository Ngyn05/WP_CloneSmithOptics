(function () {
  'use strict';

  function closestCard(node) {
    return node.closest('.boost-sd__product-item');
  }

  function imageFromSwatch(label) {
    var value = label && label.style.backgroundImage;
    var match = value && value.match(/url\(["']?(.*?)["']?\)/);
    return match ? match[1] : '';
  }

  document.addEventListener('DOMContentLoaded', function () {
    var root = document.querySelector('.smith-source-snapshot, .smith-page-source-snapshot, .smith-page-source-snapshot--reviews');
    if (!root) {
      document.documentElement.classList.remove('smith-i18n-pending');
      return;
    }

    function localizeCatalogText(scope) {
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
        if (/^Name$/i.test(trimmed)) {
          var pElem = node.parentElement;
          if (pElem && pElem.closest('.R-TextHeading')) {
            node.nodeValue = value.replace(trimmed, 'Khách hàng đã xác minh');
            continue;
          }
          if (pElem && pElem.closest('.multicolumn-card__info')) {
            var desc = pElem.closest('.multicolumn-card__info')?.querySelector('.multicolumn-card__text')?.textContent || '';
            if (desc.includes('40') || desc.includes('điều hòa khí hậu')) node.nodeValue = value.replace(trimmed, 'Hệ thống thông gió & Điều hòa khí hậu');
            else if (desc.includes('Chroma') || desc.includes('Ống kính') || desc.includes('tròng kính')) node.nodeValue = value.replace(trimmed, 'Tròng kính ChromaPop™');
            else if (desc.includes('ba lựa chọn') || desc.includes('phụ kiện')) node.nodeValue = value.replace(trimmed, 'Bộ phụ kiện đi kèm');
            else if (desc.includes('PivLock') || desc.includes('Pivil') || desc.includes('thay đổi')) node.nodeValue = value.replace(trimmed, 'Công nghệ thay tròng PivLock™');
            else if (desc.includes('gió') || desc.includes('tuyết')) node.nodeValue = value.replace(trimmed, 'Tấm chắn gió & chống lóa');
            else node.nodeValue = value.replace(trimmed, 'Đặc điểm nổi bật');
            continue;
          }
          if (pElem && pElem.tagName === 'LI') {
            pElem.style.display = 'none';
            continue;
          }
        }
        var translated = trimmed;
        var productCount = translated.match(/^(\d+)\s+Products?$/i);
        if (productCount) translated = productCount[1] + ' sản phẩm';
        var percentOff = translated.match(/^(\d+)% Off$/i);
        if (percentOff) translated = 'Giảm ' + percentOff[1] + '%';
        var fixed = {
          'WEB EXCLUSIVE': 'Độc quyền trực tuyến',
          'NEW': 'Mới',
          'BEST SELLER': 'Bán chạy',
          'SELLING FAST': 'Sắp hết hàng',
          'VIEW ALL': 'Xem tất cả',
          'READ MORE': 'Đọc thêm',
          'REFINE BY': 'BỘ LỌC',
          'SHOW FILTERS': 'BỘ LỌC',
          'HIDE FILTERS': 'ĐÓNG BỘ LỌC',
          'PRODUCT TYPE': 'Loại sản phẩm',
          'HELMET TYPE': 'Kiểu mũ bảo hiểm',
          'APPAREL TYPE': 'Loại trang phục',
          'BEST FOR': 'Mục đích sử dụng',
          'COLLECTION': 'Bộ sưu tập',
          'COLOR': 'Màu sắc',
          'FRAME COLOR': 'Màu gọng',
          'LENS COLOR': 'Màu tròng kính',
          'STRAP COLOR': 'Màu dây đeo',
          'FRAME FIT': 'Kiểu vừa vặn',
          'FIT': 'Độ vừa vặn',
          'PRICE': 'Giá',
          'PRICE RANGE': 'Khoảng giá',
          'SIZE': 'Kích cỡ',
          'TECHNOLOGY': 'Công nghệ',
          'SPECIAL DEALS': 'Ưu đãi đặc biệt',
          'ON SALE': 'Đang giảm giá',
          'PRODUCTS': 'Sản phẩm',
          'APPAREL': 'Trang phục',
          'ACCESSORY': 'Phụ kiện',
          'ACCESSORIES': 'Phụ kiện',
          'HELMET': 'Mũ bảo hiểm',
          'HELMETS': 'Mũ bảo hiểm',
          'GOGGLE': 'Kính bảo hộ',
          'GOGGLES': 'Kính bảo hộ',
          'LENS': 'Tròng kính',
          'LENSES': 'Tròng kính',
          'SUNGLASS': 'Kính râm',
          'SUNGLASSES': 'Kính râm',
          'RX FRAME': 'Gọng kính thuốc',
          'SHOES': 'Giày',
          'SOCKS': 'Tất',
          'MOUNTAIN BIKE': 'Xe đạp địa hình',
          'ROAD & GRAVEL': 'Đường trường & đường sỏi',
          'URBAN COMMUTE': 'Di chuyển đô thị',
          'BIKE': 'Đạp xe',
          'CYCLING': 'Đạp xe',
          'EVERYDAY': 'Hằng ngày',
          'FISHING': 'Câu cá',
          'RUNNING': 'Chạy bộ',
          'SNOW': 'Thể thao tuyết',
          'ARCHIVE': 'Mùa trước',
          'LIFESTYLE': 'Phong cách sống',
          'MOUNTAIN': 'Địa hình núi',
          'PERFORMANCE': 'Hiệu suất cao',
          'PRESCRIPTION': 'Kính thuốc',
          'GRAVITY': 'Đổ đèo',
          'JUNIOR SERIES': 'Dòng trẻ em',
          'LOW BRIDGE FIT': 'Phù hợp sống mũi thấp',
          'MEDIUM FIT': 'Cỡ vừa',
          'LARGE FIT': 'Cỡ lớn',
          'SMALL FRAME': 'Gọng nhỏ',
          'MEDIUM FRAME': 'Gọng vừa',
          'LARGE FRAME': 'Gọng lớn',
          'POLARIZED': 'Phân cực',
          'NON-POLARIZED': 'Không phân cực',
          'PHOTOCHROMIC': 'Đổi màu theo ánh sáng',
          'IONIZED': 'Phủ ion',
          'CLEAR': 'Trong suốt',
          'BLACK': 'Đen',
          'BLUE': 'Xanh dương',
          'BROWN': 'Nâu',
          'GRAY': 'Xám',
          'GREY': 'Xám',
          'GREEN': 'Xanh lá',
          'ORANGE': 'Cam',
          'PINK': 'Hồng',
          'PURPLE': 'Tím',
          'RED': 'Đỏ',
          'WHITE': 'Trắng',
          'YELLOW': 'Vàng',
          '5 STARS': '5 sao',
          '4 STARS & UP': 'Từ 4 sao',
          'TRANG PHỤC': 'Trang phục',
          'PHỤ KIỆN': 'Phụ kiện',
          'MŨ BẢO HỘ': 'Mũ bảo hiểm',
          'MŨ BẢO HIỂM': 'Mũ bảo hiểm',
          'TRÒNG KÍNH': 'Tròng kính',
          'GỌNG KÍNH THUỐC': 'Gọng kính thuốc',
          'KÍNH RÂM': 'Kính râm',
          'ĐẠP XE': 'Đạp xe',
          'XE ĐẠP ĐỊA HÌNH': 'Xe đạp địa hình',
          'ĐỊA HÌNH NÚI': 'Địa hình núi',
          'ĐƯỜNG TRƯỜNG & ĐƯỜNG SỎI': 'Đường trường & đường sỏi',
          'DI CHUYỂN ĐÔ THỊ': 'Di chuyển đô thị',
          'HẰNG NGÀY': 'Hằng ngày',
          'CÂU CÁ': 'Câu cá',
          'CHẠY BỘ': 'Chạy bộ',
          'THỂ THAO TUYẾT': 'Thể thao tuyết',
          'MÙA TRƯỚC': 'Mùa trước',
          'PHONG CÁCH SỐNG': 'Phong cách sống',
          'HIỆU SUẤT CAO': 'Hiệu suất cao',
          'KÍNH THUỐC': 'Kính thuốc',
          'ĐỔ ĐÈO': 'Đổ đèo',
          'OUT OF STOCK': 'Còn hàng',
          'SOLD OUT': 'Còn hàng',
          'UNAVAILABLE': 'Còn hàng',
          'HẾT HÀNG': 'Còn hàng',
          'RELEVANCE': 'MỨC ĐỘ LIÊN QUAN',
          'MOST POPULAR': 'PHỔ BIẾN NHẤT',
          'NEWEST FIRST': 'MỚI NHẤT',
          'OLDEST FIRST': 'CŨ NHẤT',
          'PRICE LOW TO HIGH': 'GIÁ: THẤP ĐẾN CAO',
          'PRICE HIGH TO LOW': 'GIÁ: CAO ĐẾN THẤP',
          'GIÁ CẢ THẤP XUỐNG CAO': 'GIÁ: THẤP ĐẾN CAO',
          'GIÁ CẢ XUỐNG THẤP': 'GIÁ: CAO ĐẾN THẤP'
          ,'KIDS\' OVER-THE-GLASSES SKI GOGGLES WITH HELMET INTEGRATION.': 'Kính bảo hộ trượt tuyết dành cho trẻ em, có thể đeo ngoài kính thuốc và tích hợp với mũ bảo hiểm.'
          ,'BOLD KIDS\' SKI GOGGLES WITH WIDE CYLINDRICAL LENS.': 'Kính bảo hộ trượt tuyết trẻ em kiểu dáng nổi bật với tròng kính trụ góc nhìn rộng.'
        };
        var fixedKey = translated.toUpperCase();
        if (fixed[fixedKey]) translated = fixed[fixedKey];
        translated = translated
          .replace(/Now On Sale For/gi, 'Giá ưu đãi')
          .replace(/Regular Price/gi, 'Giá thông thường')
          .replace(/\bSize\b/gi, 'Cỡ');
        if (translated !== trimmed) node.nodeValue = value.replace(trimmed, translated);
      }
    }

    function translateFilterValue(value, button) {
      var original = value.trim();
      if (/^(?:Name|Comment|&\s*Xoá)$/i.test(original) && button) {
        var aria = button.getAttribute('aria-label') || '';
        var recovered = aria.match(/\b(?:is|:)\s+(.+?)\.\s*Number of products:/i);
        if (recovered) original = recovered[1].trim();
      }
      var exact = {
        'ACCESSORY':'Phụ kiện','APPAREL':'Trang phục','ARCHIVE':'Mùa trước','BIKE':'Đạp xe',
        'CYCLING APPAREL':'Trang phục đạp xe','CYLINDRICAL':'Dạng trụ','EVERYDAY':'Hằng ngày',
        'FISHING':'Câu cá','GRAVITY':'Đổ đèo','HEADWEAR':'Phụ kiện đội đầu',
        'JACKETS & SWEATS':'Áo khoác & áo nỉ','JUNIOR SERIES':'Dòng trẻ em',
        'LARGE FRAME':'Gọng lớn','MEDIUM FRAME':'Gọng vừa','SMALL FRAME':'Gọng nhỏ',
        'LIFESTYLE':'Phong cách sống','LONG SLEEVE TEES':'Áo thun dài tay','SHORT SLEEVE TEE':'Áo thun tay ngắn',
        'MOUNTAIN':'Địa hình núi','MOUNTAIN BIKE':'Xe đạp địa hình','NEW COLOR':'Màu mới',
        'MÀU MỚI':'Màu mới','MŨ BẢO HỘ':'Mũ bảo hiểm','NON-POLARIZED':'Không phân cực',
        'POLARIZED':'Phân cực','ROAD':'Đường trường','ROAD & GRAVEL':'Đường trường & đường sỏi',
        'RUNNING':'Chạy bộ','SHOES':'Giày','SNOW':'Thể thao tuyết','SOCKS':'Tất',
        'SPHERICAL':'Dạng cầu','SPHERICAL SERIES':'Dòng tròng kính cầu','SUNGLASS':'Kính râm',
        'RX FRAME':'Gọng kính thuốc','URBAN':'Đô thị','URBAN COMMUTE':'Di chuyển đô thị',
        'ALECK AUDIO COMPATIBLE':'Tương thích Aleck Audio','AIRFLOW':'Thông khí',
        'MIL-SPEC':'Tiêu chuẩn quân sự','TRÊN CÁI KÍNH (OTG)':'Đeo ngoài kính thuốc (OTG)',
        'CLEAR':'Trong suốt','BLACK':'Đen','BLUE':'Xanh dương','BROWN':'Nâu','GRAY':'Xám',
        'GREY':'Xám','GREEN':'Xanh lá','ORANGE':'Cam','PINK':'Hồng','PURPLE':'Tím',
        'RED':'Đỏ','WHITE':'Trắng','YELLOW':'Vàng','MULTI':'Đa màu','COFFEE':'Nâu cà phê',
        'COOL GRAY':'Xám lạnh','CRYSTAL':'Pha lê','CARRYOVER':'Tiếp tục kinh doanh',
      };
      if (exact[original.toUpperCase()]) return exact[original.toUpperCase()];
      // Preserve model/technology names while localizing their descriptive color and lens terms.
      return original
        .replace(/\bPhotoChromic\b/gi, 'đổi màu theo ánh sáng')
        .replace(/\bPolarChromic\b/gi, 'phân cực đổi màu')
        .replace(/\bPolarized\b/gi, 'phân cực')
        .replace(/\bBlue Mirror\b/gi, 'tráng gương xanh dương')
        .replace(/\bGreen Mirror\b/gi, 'tráng gương xanh lá')
        .replace(/\bBronze Mirror\b/gi, 'tráng gương đồng')
        .replace(/\bRose Gold Mirror\b/gi, 'tráng gương vàng hồng')
        .replace(/\bGray Green\b/gi, 'xám xanh lá')
        .replace(/\bGlass\b/gi, 'thủy tinh')
        .replace(/\bMatte\b/gi, 'Nhám')
        .replace(/\bCrystal\b/gi, 'pha lê')
        .replace(/\bTortoise\b|\bTort\b/gi, 'đồi mồi')
        .replace(/\bCamo\b/gi, 'rằn ri').replace(/\bAsh\b/gi, 'tro')
        .replace(/\bHoney\b/gi, 'mật ong').replace(/\bGolden\b/gi, 'vàng')
        .replace(/\bSlate\b/gi, 'xám đá').replace(/\bCement\b/gi, 'xi măng')
        .replace(/\bBlack\b/gi, 'đen').replace(/\bBlue\b/gi, 'xanh dương')
        .replace(/\bBrown\b/gi, 'nâu').replace(/\bGray\b|\bGrey\b/gi, 'xám')
        .replace(/\bGreen\b/gi, 'xanh lá').replace(/\bOrange\b/gi, 'cam')
        .replace(/\bPink\b/gi, 'hồng').replace(/\bPurple\b/gi, 'tím')
        .replace(/\bRed\b/gi, 'đỏ').replace(/\bWhite\b/gi, 'trắng')
        .replace(/\bYellow\b/gi, 'vàng').replace(/\bGold\b/gi, 'vàng')
        .replace(/\bDark\b/gi, 'đậm').replace(/\bLight\b/gi, 'nhạt')
        .replace(/\s+/g, ' ').trim();
    }

    function normalizeFilterUI(scope) {
      var groups = [];
      if (scope.nodeType === Node.ELEMENT_NODE && scope.matches('.boost-sd__filter-option')) groups.push(scope);
      if (scope.querySelectorAll) groups = groups.concat(Array.from(scope.querySelectorAll('.boost-sd__filter-option')));
      groups.forEach(function (group) {
        var filterId = (group.getAttribute('data-filteroptionid') || group.querySelector('[id^="pf_"]')?.id || '').toLowerCase();
        var headingMap = [
          [/product_type/,'Loại sản phẩm'],[/helmet_type/,'Kiểu mũ bảo hiểm'],[/apparel_type/,'Loại trang phục'],
          [/best_for/,'Mục đích sử dụng'],[/series/,'Bộ sưu tập'],[/technology/,'Công nghệ'],
          [/frame_fit|(^|_)fit/,'Độ vừa vặn'],[/lens_color/,'Màu tròng kính'],[/frame_color/,'Màu gọng'],
          [/strap_color/,'Màu dây đeo'],[/opt_color|(^|_)color/,'Màu sắc'],[/size/,'Kích cỡ'],
          [/price_range|price/,'Khoảng giá'],[/review_rating/,'Đánh giá từ khách hàng'],[/special_deals/,'Ưu đãi đặc biệt'],
        ];
        var heading = group.querySelector('.boost-sd__filter-option-title');
        var localizedHeading = headingMap.find(function (entry) { return entry[0].test(filterId); });
        if (heading && localizedHeading) {
          var textNode = Array.from(heading.childNodes).find(function (node) { return node.nodeType === Node.TEXT_NODE && node.nodeValue.trim(); });
          if (textNode && textNode.nodeValue.trim() !== localizedHeading[1]) textNode.nodeValue = textNode.nodeValue.replace(textNode.nodeValue.trim(), localizedHeading[1]);
        }
        group.querySelectorAll('.boost-sd__filter-option-item-label').forEach(function (label) {
          var old = label.textContent.trim();
          var next = translateFilterValue(old, label.closest('button'));
          if (next !== old) label.textContent = next;
        });
      });
    }
    function removeJunkNameElements(scope) {
      if (!scope || !scope.querySelectorAll) return;
      scope.querySelectorAll('li').forEach(function (li) {
        if (li.textContent.trim() === 'Name') li.remove();
      });
    }

    localizeCatalogText(document.body);
    removeJunkNameElements(document.body);
    normalizeFilterUI(root);
    root.classList.add('smith-catalog-localized');
    new MutationObserver(function (mutations) {
      mutations.forEach(function (mutation) {
        mutation.addedNodes.forEach(function (added) {
          if (added.nodeType === Node.ELEMENT_NODE) {
            localizeCatalogText(added);
            removeJunkNameElements(added);
          }
          else if (added.nodeType === Node.TEXT_NODE && added.parentElement) {
            localizeCatalogText(added.parentElement);
          }
        });
      });
      normalizeFilterUI(root);
    }).observe(root, { childList: true, characterData: true, subtree: true });
    root.querySelectorAll('.boost-sd__pagination-load-more-container, .boost-sd__pagination-load-more-container-item').forEach(function (node) { node.remove(); });

    // These two server-driven Boost facets are intentionally omitted from the
    // local snapshot. All remaining facets are fully URL-addressable.
    root.querySelectorAll('.boost-sd__filter-option').forEach(function (group) {
      var heading = normalized(group.querySelector('.boost-sd__filter-option-heading')?.textContent);
      var filterId = normalized(group.getAttribute('data-filteroptionid'));
      if (heading === 'price range' || heading.includes('review rating') || filterId.includes('price range') || filterId.includes('review rating')) group.remove();
    });

    var primaryGrid = root.querySelector('.boost-sd__product-list');
    var productCards = primaryGrid ? Array.from(primaryGrid.querySelectorAll(':scope > .boost-sd__product-item')) : Array.from(root.querySelectorAll('.boost-sd__product-item'));
    productCards.forEach(function (card, idx) {
      card._originalIndex = idx;
      try { card._smithProduct = JSON.parse(card.getAttribute('data-product') || '{}'); }
      catch (_) { card._smithProduct = {}; }
    });

    function normalized(value) {
      return String(value || '')
        .toLowerCase()
        .replace(/&amp;/g, '&')
        .replace(/[^a-z0-9]+/g, ' ')
        .trim();
    }

    var VI_TO_EN = {
      'trang phuc': 'apparel',
      'mu bao hiem': 'helmet',
      'mu bao ho': 'helmet',
      'trong kinh': 'lens',
      'gong kinh thuoc': 'rx frame',
      'kinh ram': 'sunglass',
      'kinh bao ho': 'goggle',
      'phu kien': 'accessory',
      'the qua tang': 'gift card',
      'xe dap dia hinh': 'mountain bike',
      'duong truong duong soi': 'road gravel',
      'duong truong & duong soi': 'road gravel',
      'di chuyen do thi': 'urban commute',
      'mu bao hiem tuyet': 'snow helmet',
      'giay': 'shoes',
      'tat': 'socks',
      'phu kien doi dau': 'headwear',
      'ao thun dai tay': 'long sleeve tees',
      'ao thun tay ngan': 'short sleeve tee',
      'ao khoac & ao ni': 'jackets & sweats',
      'ao khoac ao ni': 'jackets sweats',
      'trang phuc dap xe': 'cycling apparel',
      'dap xe': 'bike',
      'hang ngay': 'everyday',
      'cau ca': 'fishing',
      'chay bo': 'running',
      'the thao tuyet': 'snow',
      'mua truoc': 'archive',
      'phong cach song': 'lifestyle',
      'dia hinh nui': 'mountain',
      'hieu suat cao': 'performance',
      'kinh thuoc': 'prescription',
      'do deo': 'gravity',
      'khong phan cuc': 'non polarized',
      'phan cuc': 'polarized',
      'doi mau theo anh sang': 'photochromic',
      'thuy tinh phan cuc': 'glass polarized',
      'thuy tinh phan cuc doi mau': 'glass polarchromic',
      'gong lon': 'large frame',
      'gong vua': 'medium frame',
      'gong nho': 'small frame',
      'phu hop song mui thap': 'low bridge fit',
      'den': 'black',
      'xanh duong': 'blue',
      'nau': 'brown',
      'trong suot': 'clear',
      'xam': 'gray',
      'xanh la': 'green',
      'cam': 'orange',
      'hong': 'pink',
      'tim': 'purple',
      'trang': 'white',
      'vang': 'yellow',
      'doi moi': 'tortoise',
      'da mau': 'multi'
    };

    var EXACT_FACET_MAP = {
      'helmet type': {
        'mountain bike': ['pilot-mips-r', 'sidekick-jr-mips-r', 'forefront-3-mips-r', 'payroll-mips-r', 'engage-mips-r', 'mainline-mips-r', 'rodeo'],
        'road gravel': ['persist-mips-r', 'triad-mips-r', 'signal-mips-r', 'network-mips-r', 'trace-mips-r', 'trace-mips-r-smith-x-quoc'],
        'urban commute': ['persist-mips-r', 'signal-mips-r']
      },
      'apparel type': {
        'headwear': ['lightweight-upf-neck-gaiter', 'essential-trucker'],
        'long sleeve tees': ['upf-performance-hooded-tech-long-sleeve', 'upf-perform-tech-long-sleeve'],
        'shoes': ['smith-x-quoc-gran-tourer-xc'],
        'socks': ['smith-x-quoc-performance-gravel-socks']
      },
      'best for': {
        'bike': ['pilot-mips-r', 'sidekick-jr-mips-r', 'forefront-3-mips-r', 'payroll-mips-r', 'engage-mips-r', 'persist-mips-r', 'triad-mips-r', 'mainline-mips-r', 'signal-mips-r', 'network-mips-r', 'trace-mips-r', 'trace-mips-r-smith-x-quoc', 'smith-x-quoc-gran-tourer-xc', 'smith-x-quoc-performance-gravel-socks', 'wildcat', 'bobcat', 'riptide-xl', 'riptide', 'venture', 'defy-quoc-collab'],
        'everyday': ['lowdown-xl-2', 'lowdown-2', 'cipher', 'westward-core', 'truss', 'syncline', 'strand', 'backcast', 'sliders', 'smith-x-beams-sliders', 'backcast-rx', 'truss-rx', 'strand-rx'],
        'fishing': ['guides-choice', 'riptide-xl', 'riptide', 'guides-choice-replacement-lens', 'riptide-replacement-lens'],
        'running': ['wildcat', 'bobcat', 'pursuit', 'defy-quoc-collab'],
        'snow': ['embark', 'pursuit', 'monroe-peak', 'cipher', 'embark-replacement-lens']
      },
      'collection': {
        'archive': ['smith-x-beams-sliders', 'defy-quoc-collab'],
        'lifestyle': ['westward-core', 'truss', 'cipher', 'strand', 'backcast', 'sliders'],
        'mountain': ['pilot-mips-r', 'forefront-3-mips-r'],
        'performance': ['riptide-xl', 'syncline', 'trace-mips-r-smith-x-quoc', 'venture'],
        'prescription': ['backcast-rx', 'truss-rx', 'strand-rx'],
        'road': ['trace-mips-r-smith-x-quoc']
      }
    };

    function parseButtonMeta(button) {
      var group = button.closest('.boost-sd__filter-option');
      var groupId = (group?.getAttribute('data-filteroptionid') || button.closest('.boost-sd__filter-option-listitem')?.id || '').toLowerCase();
      var aria = button.getAttribute('aria-label') || '';
      var ariaMatch = aria.match(/Find product with (.+?) is (.+?)\.\s*Number of products:\s*(\d+)/i);
      var labelNode = button.querySelector('.boost-sd__filter-option-item-label');
      var labelText = labelNode ? labelNode.textContent.trim() : '';

      var dimension = ariaMatch ? ariaMatch[1].trim() : (group?.querySelector('.boost-sd__filter-option-heading')?.textContent.trim() || groupId);
      var englishVal = ariaMatch ? ariaMatch[2].trim() : labelText;
      var count = ariaMatch ? parseInt(ariaMatch[3], 10) : parseInt((button.querySelector('.boost-sd__filter-option-item-amount')?.textContent.match(/\d+/) || ['0'])[0], 10);

      return {
        dimension: dimension,
        dimKey: normalized(dimension),
        englishValue: englishVal,
        valKey: normalized(englishVal),
        labelText: labelText,
        groupId: groupId,
        count: count
      };
    }

    function filterParam(button) {
      var meta = parseButtonMeta(button);
      return (meta.dimKey || 'filter').replace(/\s+/g, '_');
    }

    function syncFilterUrl() {
      var url = new URL(window.location.href);
      var knownParams = new Set();
      root.querySelectorAll('.boost-sd__filter-option-item-button').forEach(function (button) {
        knownParams.add(filterParam(button));
      });
      knownParams.forEach(function (name) { url.searchParams.delete(name); });
      root.querySelectorAll('.boost-sd__filter-option-item-button[aria-checked="true"]').forEach(function (button) {
        var meta = parseButtonMeta(button);
        url.searchParams.append(filterParam(button), meta.labelText || meta.englishValue);
      });
      window.history.replaceState({}, '', url.pathname + (url.searchParams.toString() ? '?' + url.searchParams.toString() : ''));
    }

    function cardMatches(card, filterMeta) {
      var product = card._smithProduct || {};
      var dim = filterMeta.dimKey || '';
      var val = filterMeta.valKey || '';
      if (VI_TO_EN[val]) val = VI_TO_EN[val];

      var rawHandle = String(product.handle || '').toLowerCase();
      var rawCategory = String(product.category || '').toLowerCase();
      var valSlug = val.replace(/[^a-z0-9]/g, '');

      var tags = (product.tags || []).map(normalized);
      var optionValues = [];
      (product.options_with_values || []).forEach(function (opt) {
        (opt.values || []).forEach(function (v) {
          optionValues.push(normalized(v.title));
        });
      });
      var variants = (product.variants || []).map(function (v) { return normalized(v.title); });
      var cardText = normalized(card.textContent || '');
      var allNorm = [normalized(rawHandle), normalized(rawCategory), tags.join(' '), optionValues.join(' '), variants.join(' '), cardText].join(' ');

      // 1. Product Type
      if (dim.includes('product type') || dim.includes('loai san pham') || (filterMeta.groupId && filterMeta.groupId.includes('product_type'))) {
        if (val === 'apparel' && (rawCategory === 'apparel' || tags.includes('accessory_apparel'))) return true;
        if (val === 'helmet' && (rawCategory === 'helmet' || rawHandle.includes('mips') || rawHandle.includes('helmet'))) return true;
        if (val === 'lens' && (rawCategory === 'lens' || rawCategory === 'lenses' || rawHandle.includes('lens'))) return true;
        if (val === 'rx frame' && (rawCategory === 'rx frame' || rawCategory === 'eyewear' || rawCategory === 'eyeglasses' || rawHandle.includes('rx'))) return true;
        if (val === 'sunglass' && (rawCategory === 'sunglass' || rawCategory === 'sunglasses')) return true;
        if (val === 'goggle' && (rawCategory === 'goggle' || rawCategory === 'goggles' || rawHandle.includes('goggle'))) return true;
        if (val === 'accessory' && (rawCategory === 'accessory' || rawCategory === 'accessories')) return true;
        if (val === 'gift card' && (rawCategory === 'gift card' || rawHandle.includes('gift-card'))) return true;
        return rawCategory === val || allNorm.includes(val);
      }

      // 2. Apparel Type
      if (dim.includes('apparel type') || dim.includes('loai trang phuc') || (filterMeta.groupId && filterMeta.groupId.includes('apparel_type'))) {
        if (val.includes('headwear') || val.includes('doi dau')) {
          return rawHandle.includes('trucker') || rawHandle.includes('gaiter') || rawHandle.includes('hat') || rawHandle.includes('cap') || rawHandle.includes('beanie') || rawHandle.includes('visor') || allNorm.includes('headwear') || allNorm.includes('trucker') || allNorm.includes('gaiter');
        }
        if (val.includes('long sleeve') || val.includes('dai tay')) {
          return rawHandle.includes('long-sleeve') || rawHandle.includes('hooded') || rawHandle.includes('hoodie') || allNorm.includes('long sleeve');
        }
        if (val.includes('short sleeve') || val.includes('tay ngan')) {
          return rawHandle.includes('short-sleeve') || rawHandle.includes('tee') || allNorm.includes('short sleeve');
        }
        if (val.includes('shoe') || val.includes('giay')) {
          return rawHandle.includes('gran-tourer') || rawHandle.includes('shoe') || allNorm.includes('shoe') || allNorm.includes('footwear');
        }
        if (val.includes('sock') || val.includes('tat')) {
          return rawHandle.includes('sock') || allNorm.includes('sock');
        }
        if (val.includes('jacket') || val.includes('sweat') || val.includes('ao khoac')) {
          return rawHandle.includes('jacket') || rawHandle.includes('sweat') || rawHandle.includes('hoodie') || rawHandle.includes('fleece') || allNorm.includes('jacket');
        }
        if (val.includes('cycling')) {
          return rawHandle.includes('jersey') || rawHandle.includes('bib') || rawHandle.includes('gran-tourer') || allNorm.includes('cycling');
        }
        return val.split(' ').every(function (p) { return allNorm.includes(p); });
      }

      // 3. Helmet Type
      if (dim.includes('helmet type') || dim.includes('kieu mu') || (filterMeta.groupId && filterMeta.groupId.includes('helmet_type'))) {
        if (val.includes('mountain') || val.includes('dia hinh')) {
          return ['pilot-mips-r', 'forefront-3-mips-r', 'engage-mips-r', 'payroll-mips-r', 'mainline-mips-r', 'sidekick-jr-mips-r', 'rodeo', 'session-mips-r', 'convoy-mips-r'].some(function (h) { return rawHandle.includes(h); }) || allNorm.includes('mountain') || allNorm.includes('mtb');
        }
        if (val.includes('road') || val.includes('gravel') || val.includes('duong truong')) {
          return ['trace-mips-r', 'trace-mips-r-smith-x-quoc', 'persist-mips-r', 'triad-mips-r', 'signal-mips-r', 'network-mips-r'].some(function (h) { return rawHandle.includes(h); }) || allNorm.includes('road') || allNorm.includes('gravel');
        }
        if (val.includes('urban') || val.includes('commute') || val.includes('do thi')) {
          return ['persist-mips-r', 'signal-mips-r', 'express-mips-r'].some(function (h) { return rawHandle.includes(h); }) || allNorm.includes('urban') || allNorm.includes('commute');
        }
        if (val.includes('snow')) {
          return allNorm.includes('snow') || allNorm.includes('ski');
        }
        return val.split(' ').every(function (p) { return allNorm.includes(p); });
      }

      // 4. Technology
      if (dim.includes('technology') || dim.includes('cong nghe') || (filterMeta.groupId && filterMeta.groupId.includes('technology'))) {
        if (val.includes('chromapop') || val.includes('chroma pop')) {
          if (val.includes('glass') && val.includes('polar')) return allNorm.includes('glass') && allNorm.includes('polar');
          if (val.includes('photochromic')) return allNorm.includes('photochromic');
          if (val.includes('polar')) return allNorm.includes('polar') && !allNorm.includes('non polar');
          return allNorm.includes('chromapop') || allNorm.includes('chroma pop');
        }
        if (val === 'polarized') return allNorm.includes('polarized') && !allNorm.includes('non polarized');
        if (val === 'non polarized') return allNorm.includes('non polarized') || (rawCategory === 'sunglass' && !allNorm.includes('polarized'));
        if (val.includes('photochromic')) return allNorm.includes('photochromic');
        if (val === 'airevac') return rawCategory === 'helmet' || allNorm.includes('airevac');
        if (val === 'koroyd') return rawCategory === 'helmet' || allNorm.includes('koroyd');
        if (val === 'mips') return rawHandle.includes('mips') || allNorm.includes('mips');
        if (val === 'boa') return rawHandle.includes('trace') || allNorm.includes('boa');
        if (val === 'vaporfit') return rawCategory === 'helmet' || allNorm.includes('vaporfit');
        if (val === 'ionic') return rawCategory === 'helmet' || allNorm.includes('ionic');
        if (val === 'fidlock') return rawCategory === 'helmet' || allNorm.includes('fidlock');
        if (val === 'x static') return rawCategory === 'helmet' || allNorm.includes('static');
        return allNorm.includes(val);
      }

      // 5. Fit / Frame Fit
      if (dim.includes('fit') || dim.includes('vua van') || (filterMeta.groupId && filterMeta.groupId.includes('fit'))) {
        if (val.includes('large')) return rawHandle.includes('xl') || allNorm.includes('large');
        if (val.includes('medium')) return !rawHandle.includes('xl') && (rawCategory === 'sunglass' || rawCategory === 'rx frame' || rawCategory === 'goggle');
        if (val.includes('small')) return rawHandle.includes('small') || rawHandle.includes('jr') || rawHandle.includes('youth') || rawHandle.includes('kids') || allNorm.includes('small');
        return allNorm.includes(val);
      }

      // 6. Best For
      if (dim.includes('best for') || dim.includes('muc dich') || (filterMeta.groupId && filterMeta.groupId.includes('best_for'))) {
        if (val.includes('fish') || val.includes('cau ca')) {
          return ['guides-choice', 'riptide', 'castaway', 'barra', 'longfin', 'hookset', 'challis', 'outrigger', 'shoal', 'redding', 'shoutout', 'boomtown'].some(function (h) { return rawHandle.includes(h); }) || allNorm.includes('fishing') || allNorm.includes('water');
        }
        if (val.includes('bike') || val.includes('dap xe')) {
          return rawCategory === 'helmet' || ['wildcat', 'bobcat', 'riptide', 'venture', 'defy-quoc-collab', 'shift-mag', 'leadout', 'reverb', 'rhythm-mtb', 'gran-tourer'].some(function (h) { return rawHandle.includes(h); }) || allNorm.includes('bike') || allNorm.includes('cycling');
        }
        if (val.includes('run') || val.includes('chay bo')) {
          return ['wildcat', 'bobcat', 'pursuit', 'defy-quoc-collab', 'reverb', 'shift-mag'].some(function (h) { return rawHandle.includes(h); }) || allNorm.includes('running');
        }
        if (val.includes('everyday') || val.includes('hang ngay')) {
          return rawCategory === 'sunglass' || rawCategory === 'rx frame' || allNorm.includes('lifestyle');
        }
        if (val.includes('snow') || val.includes('tuyet')) {
          return rawCategory === 'goggle' || allNorm.includes('snow') || allNorm.includes('ski');
        }
        return val.split(' ').every(function (p) { return allNorm.includes(p); });
      }

      // 7. Collection / Series
      if (dim.includes('collection') || dim.includes('series') || dim.includes('bo suu tap') || (filterMeta.groupId && (filterMeta.groupId.includes('series') || filterMeta.groupId.includes('collection')))) {
        if (valSlug.includes('guide')) return rawHandle.includes('guides-choice') || rawHandle.includes('guide');
        if (valSlug.includes('lowdown')) return rawHandle.includes('lowdown');
        if (valSlug.includes('squad')) return rawHandle.includes('squad');
        if (valSlug.includes('4dmag')) return rawHandle.includes('4d-mag');
        if (valSlug.includes('mag')) return rawHandle.includes('mag');
        if (valSlug.includes('io')) return rawHandle.includes('i-o') || rawHandle.includes('io-');
        if (valSlug.includes('lifestyle')) return ['westward-core', 'truss', 'cipher', 'strand', 'backcast', 'sliders', 'lowdown-2', 'lowdown-xl-2', 'castaway', 'barra', 'shoutout', 'embassy', 'lineup', 'somerset'].some(function (h) { return rawHandle.includes(h); }) || allNorm.includes('lifestyle');
        if (valSlug.includes('performance')) return ['riptide', 'syncline', 'trace', 'venture', 'wildcat', 'bobcat', 'pursuit', 'shift-mag', 'leadout', 'reverb', 'rhythm-mtb', 'defy-quoc-collab', 'parallel'].some(function (h) { return rawHandle.includes(h); }) || allNorm.includes('performance');
        if (valSlug.includes('prescription')) return rawHandle.includes('rx') || rawCategory === 'rx frame';
        if (valSlug.includes('archive')) return tags.includes('archive') || ['smith-x-beams-sliders', 'defy-quoc-collab'].includes(rawHandle);
        if (valSlug.includes('mountain')) return rawCategory === 'helmet' || allNorm.includes('mountain') || allNorm.includes('mtb');
        if (valSlug.includes('road')) return rawCategory === 'helmet' || allNorm.includes('road') || allNorm.includes('gravel');
        if (valSlug.includes('urban')) return rawCategory === 'helmet' || allNorm.includes('urban') || allNorm.includes('commute');
        if (valSlug.includes('gravity')) return rawCategory === 'helmet' || allNorm.includes('gravity') || allNorm.includes('downhill');
        if (valSlug.includes('junior')) return rawHandle.includes('jr') || rawHandle.includes('youth') || rawHandle.includes('kids');
        if (valSlug.includes('otg') || valSlug.includes('overtheglasses')) return rawHandle.includes('otg') || allNorm.includes('otg');
        if (valSlug.includes('spherical')) return rawHandle.includes('spherical') || allNorm.includes('spherical');
        if (valSlug.includes('cylindrical')) return rawHandle.includes('cylindrical') || allNorm.includes('cylindrical');
        if (valSlug.includes('aleck')) return allNorm.includes('aleck');
        if (valSlug.includes('airflow')) return allNorm.includes('airflow');
        if (valSlug.includes('ulterior')) return tags.includes('ulterior') || rawHandle.includes('ulterior');
        return allNorm.includes(val);
      }

      // 8. Size
      if (dim.includes('size') || dim.includes('kich co') || (filterMeta.groupId && filterMeta.groupId.includes('size'))) {
        return allNorm.includes(val);
      }

      // 9. Color / Frame Color / Lens Color
      if (dim.includes('color') || dim.includes('mau')) {
        if (val.includes('pink') || val.includes('hong')) return allNorm.includes('pink') || allNorm.includes('rose') || allNorm.includes('berry');
        if (val.includes('orange') || val.includes('cam')) return allNorm.includes('orange') || allNorm.includes('ember') || allNorm.includes('copper');
        return allNorm.includes(val);
      }

      return val.split(' ').every(function (p) { return allNorm.includes(p); });
    }

    function escapeHtml(str) {
      return String(str || '')
        .replace(/&/g, '&amp;')
        .replace(/</g, '&lt;')
        .replace(/>/g, '&gt;')
        .replace(/"/g, '&quot;');
    }

    var DIMENSION_VI = {
      'best for': 'Mục đích sử dụng',
      'muc dich su dung': 'Mục đích sử dụng',
      'collection': 'Bộ sưu tập',
      'series': 'Bộ sưu tập',
      'bo suu tap': 'Bộ sưu tập',
      'product type': 'Loại sản phẩm',
      'loai san pham': 'Loại sản phẩm',
      'helmet type': 'Kiểu mũ bảo hiểm',
      'kieu mu bao hiem': 'Kiểu mũ bảo hiểm',
      'apparel type': 'Loại trang phục',
      'loai trang phuc': 'Loại trang phục',
      'technology': 'Công nghệ',
      'cong nghe': 'Công nghệ',
      'fit': 'Độ vừa vặn',
      'frame fit': 'Độ vừa vặn gọng',
      'do vua van': 'Độ vừa vặn',
      'size': 'Kích cỡ',
      'kich co': 'Kích cỡ',
      'color': 'Màu sắc',
      'mau sac': 'Màu sắc',
      'frame color': 'Màu gọng',
      'lens color': 'Màu tròng kính',
      'strap color': 'Màu dây đeo'
    };

    // Inject exact original Smith Optics styling for Refine By, checkboxes, and typography
    if (!document.getElementById('smith-boost-refine-by-styles')) {
      var refineStyle = document.createElement('style');
      refineStyle.id = 'smith-boost-refine-by-styles';
      refineStyle.textContent = [
        /* Refine By Box */
        '.boost-sd__refine-by-vertical-refine-by { display: block !important; width: 100%; margin-bottom: 24px; padding-bottom: 20px; border-bottom: 1px solid #ebebeb; }',
        '.boost-sd__refine-by-vertical-refine-by-title { display: flex !important; align-items: center; justify-content: space-between; margin-bottom: 14px; }',
        '.boost-sd__refine-by-vertical-refine-by-heading { font-size: 14px; font-weight: 700; color: #181818; text-transform: uppercase; letter-spacing: 0.5px; margin: 0; }',
        '.boost-sd__button--clear-all-filters, .boost-sd__refine-by-vertical-refine-by .boost-sd__button--clear { background: transparent; border: none; padding: 0; font-size: 13px; font-weight: 400; color: #181818; text-decoration: underline; cursor: pointer; line-height: 1; font-family: inherit; }',
        '.boost-sd__button--clear-all-filters:hover { color: #000; opacity: 0.7; }',
        '.boost-sd__refine-by-vertical-refine-by-list { display: flex; flex-direction: column; gap: 8px; }',
        '.boost-sd__refine-by-vertical-refine-by-item { display: flex !important; align-items: center; justify-content: space-between; width: 100%; padding: 4px 0; background: transparent; border: none; cursor: pointer; text-align: left; font-size: 14px; line-height: 1.4; color: #181818; font-family: inherit; transition: opacity 0.15s ease; }',
        '.boost-sd__refine-by-vertical-refine-by-item:hover { opacity: 0.7; }',
        '.boost-sd__refine-by-vertical-refine-by-type { display: flex; align-items: center; flex-wrap: wrap; gap: 4px; }',
        '.boost-sd__refine-by-vertical-refine-by-option { font-weight: 400; color: #555; }',
        '.boost-sd__refine-by-vertical-refine-by-value { font-weight: 600; color: #181818; }',
        '.boost-sd__refine-by-vertical-refine-by-clear { width: 12px; height: 12px; margin-left: 8px; fill: #3d4246; flex-shrink: 0; }',
        /* Filter Group Typography & Layout */
        '.boost-sd__filter-option-heading { font-size: 13px !important; font-weight: 700 !important; letter-spacing: 0.6px !important; text-transform: uppercase !important; margin: 0 !important; color: #181818 !important; line-height: 1.2 !important; }',
        '.boost-sd__filter-option-title { display: flex !important; align-items: center !important; justify-content: space-between !important; width: 100% !important; padding: 14px 0 10px !important; border: none !important; background: transparent !important; cursor: pointer !important; }',
        '.boost-sd__filter-option-label { border-top: 1px solid #ebebeb !important; padding-top: 4px !important; }',
        '.boost-sd__filter-tree-vertical-option-list > .boost-sd__filter-option:first-child .boost-sd__filter-option-label { border-top: none !important; }',
        '.boost-sd__filter-option-label-btn { font-size: 12px !important; color: #666 !important; text-decoration: underline !important; background: transparent !important; border: none !important; cursor: pointer !important; margin-left: 8px !important; }',
        /* Original-style Checkbox Styling */
        '.boost-sd__filter-option-item-button--with-checkbox { position: relative !important; display: flex !important; align-items: center !important; justify-content: space-between !important; width: 100% !important; padding: 6px 0 6px 28px !important; text-align: left !important; background: transparent !important; border: none !important; cursor: pointer !important; font-family: inherit !important; font-size: 14px !important; line-height: 1.4 !important; }',
        '.boost-sd__filter-option-item-button--with-checkbox::before { content: "" !important; position: absolute !important; left: 0 !important; top: 50% !important; transform: translateY(-50%) !important; width: 18px !important; height: 18px !important; border: 1.5px solid #222 !important; border-radius: 1px !important; background-color: #fff !important; box-sizing: border-box !important; transition: all 0.15s ease !important; }',
        '.boost-sd__filter-option-item-button[aria-checked="true"]::before, .boost-sd__filter-option-item-button--selected::before { background-color: #181818 !important; border-color: #181818 !important; background-image: url("data:image/svg+xml,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' viewBox=\'0 0 16 16\' fill=\'none\'%3E%3Cpath d=\'M3.5 8.5L6.5 11.5L12.5 5.5\' stroke=\'white\' stroke-width=\'2\' stroke-linecap=\'round\' stroke-linejoin=\'round\'/%3E%3C/svg%3E") !important; background-size: 13px 13px !important; background-position: center !important; background-repeat: no-repeat !important; }',
        '.boost-sd__filter-option-item-label { font-size: 14px !important; color: #181818 !important; font-weight: 400 !important; }',
        '.boost-sd__filter-option-item-button[aria-checked="true"] .boost-sd__filter-option-item-label { font-weight: 600 !important; }',
        '.boost-sd__filter-option-item-amount { font-size: 13px !important; color: #888 !important; margin-left: auto !important; }',
        /* Sorting dropdown */
        '.boost-sd__sorting { position: relative; }',
        '.boost-sd__sorting-button { cursor: pointer; }',
        '.boost-sd__sorting-list { position: absolute; top: 100%; right: 0; min-width: 190px; background: #fff; border: 1px solid #e0e0e0; box-shadow: 0 4px 16px rgba(0,0,0,0.12); border-radius: 2px; padding: 6px 0; z-index: 999; list-style: none; margin: 4px 0 0; display: none; }',
        '.boost-sd__sorting-list--open { display: block !important; }',
        '.boost-sd__sorting-option-item { display: block; width: 100%; padding: 8px 16px; text-align: left; background: transparent; border: none; font-size: 13px; color: #333; cursor: pointer; font-family: inherit; }',
        '.boost-sd__sorting-option-item:hover, .boost-sd__sorting-option--active .boost-sd__sorting-option-item { background: #f5f5f5; font-weight: 600; color: #000; }',
        /* Mobile filter drawer */
        '#boost-sd_filter-tree-mobile { position: fixed; top: 0; left: 0; width: 100vw; height: 100vh; z-index: 99999; background: rgba(0,0,0,0.5); display: none; }',
        '#boost-sd_filter-tree-mobile.boost-sd_filter-tree-mobile--active { display: block !important; }',
        '#boost-sd_filter-tree-mobile .boost-sd__filter-tree-vertical-sticky-overlay { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }',
        '#boost-sd_filter-tree-mobile .boost-sd__filter-tree-vertical { position: absolute; top: 0; left: 0; width: min(85vw, 360px); height: 100%; background: #fff; overflow-y: auto; padding: 20px 16px 80px; box-shadow: 2px 0 16px rgba(0,0,0,0.2); }',
        '#boost-sd_filter-tree-mobile .boost-sd__filter-tree-vertical-mobile-toolbar { display: flex; align-items: center; justify-content: space-between; padding-bottom: 14px; margin-bottom: 16px; border-bottom: 1px solid #eee; }',
        '#boost-sd_filter-tree-mobile .boost-sd__filter-tree-vertical-toolbar-middle { font-size: 16px; font-weight: 700; text-transform: uppercase; }',
        '#boost-sd_filter-tree-mobile .boost-sd__button--close { background: transparent; border: none; cursor: pointer; padding: 4px; }',
        '.smith-clear-filter-cta { display: inline-block; margin-top: 16px; padding: 10px 22px; background: #181818; color: #fff; border: none; border-radius: 2px; cursor: pointer; font-size: 14px; font-weight: 500; font-family: inherit; transition: background 0.2s ease; }',
        '.smith-clear-filter-cta:hover { background: #333; }',
        '.boost-sd__product-item { transition: opacity 0.2s ease; }'
      ].join('\n');
      document.head.appendChild(refineStyle);
    }

    function renderRefineBy(activeMetas) {
      var containers = root.querySelectorAll('.boost-sd__filter-tree-vertical-option-list, #boost-sd_filter-tree-mobile .boost-sd__filter-tree-vertical-option-list');
      containers.forEach(function (container) {
        var existing = container.querySelector('.boost-sd__refine-by-vertical-refine-by');
        if (!activeMetas || activeMetas.length === 0) {
          if (existing) existing.remove();
          return;
        }

        if (!existing) {
          existing = document.createElement('div');
          existing.className = 'boost-sd__refine-by-vertical-refine-by';
          container.insertBefore(existing, container.firstChild);
        }

        var itemsHtml = activeMetas.map(function (m, idx) {
          var displayVal = m.labelText || m.englishValue;
          var dimKey = normalized(m.dimension);
          var displayDim = DIMENSION_VI[dimKey] || m.dimension;
          return '<button type="button" aria-label="Xóa ' + escapeHtml(displayDim) + ': ' + escapeHtml(displayVal) + '" class="boost-sd__refine-by-vertical-refine-by-item" data-meta-idx="' + idx + '">' +
            '<div class="boost-sd__refine-by-vertical-refine-by-type">' +
              '<span class="boost-sd__refine-by-vertical-refine-by-option">' + escapeHtml(displayDim) + ':</span>' +
              '<span class="boost-sd__refine-by-vertical-refine-by-value">' + escapeHtml(displayVal) + '</span>' +
            '</div>' +
            '<svg class="boost-sd__refine-by-vertical-refine-by-clear" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" role="img" aria-hidden="true">' +
              '<path fill-rule="evenodd" clip-rule="evenodd" d="M7.41401 6.00001L11.707 1.70701C12.098 1.31601 12.098 0.684006 11.707 0.293006C11.316 -0.0979941 10.684 -0.0979941 10.293 0.293006L6.00001 4.58601L1.70701 0.293006C1.31601 -0.0979941 0.684006 -0.0979941 0.293006 0.293006C-0.0979941 0.684006 -0.0979941 1.31601 0.293006 1.70701L4.58601 6.00001L0.293006 10.293C-0.0979941 10.684 -0.0979941 11.316 0.293006 11.707C0.488006 11.902 0.744006 12 1.00001 12C1.25601 12 1.51201 11.902 1.70701 11.707L6.00001 7.41401L10.293 11.707C10.488 11.902 10.744 12 11 12C11.256 12 11.512 11.902 11.707 11.707C12.098 11.316 12.098 10.684 11.707 10.293L7.41401 6.00001Z" fill="#3D4246"></path>' +
            '</svg>' +
          '</button>';
        }).join('');

        existing.innerHTML = 
          '<div class="boost-sd__refine-by-vertical-refine-by-title">' +
            '<div class="boost-sd__refine-by-vertical-refine-by-heading">Bộ lọc</div>' +
            '<button type="button" aria-label="Xóa tất cả" class="boost-sd__button boost-sd__button--clear boost-sd__button--clear-all-filters">' +
              '<span class="boost-sd__button-text" aria-hidden="true">Xóa tất cả</span>' +
            '</button>' +
          '</div>' +
          '<div class="boost-sd__refine-by-vertical-refine-by-list">' + itemsHtml + '</div>';

        existing.querySelectorAll('.boost-sd__refine-by-vertical-refine-by-item').forEach(function (btn) {
          btn.addEventListener('click', function () {
            var idx = parseInt(btn.getAttribute('data-meta-idx'), 10);
            var targetMeta = activeMetas[idx];
            if (targetMeta && targetMeta.button) {
              targetMeta.button.setAttribute('aria-checked', 'false');
              targetMeta.button.classList.remove('boost-sd__filter-option-item-button--selected');
              var group = targetMeta.button.closest('.boost-sd__filter-option');
              group?.querySelector('.boost-sd__filter-option-label-btn')?.classList.toggle(
                'boost-sd__g-hide',
                !group.querySelector('.boost-sd__filter-option-item-button[aria-checked="true"]')
              );
              syncFilterUrl();
              applyFilters();
            }
          });
        });

        var clearAllBtn = existing.querySelector('.boost-sd__button--clear-all-filters');
        if (clearAllBtn) {
          clearAllBtn.addEventListener('click', function () {
            clearAllFilters();
          });
        }
      });
    }



    function clearAllFilters() {
      root.querySelectorAll('.boost-sd__filter-option-item-button').forEach(function (b) {
        b.setAttribute('aria-checked', 'false');
        b.classList.remove('boost-sd__filter-option-item-button--selected');
      });
      root.querySelectorAll('.boost-sd__filter-option-label-btn').forEach(function (cb) {
        cb.classList.add('boost-sd__g-hide');
      });
      syncFilterUrl();
      applyFilters();
    }

    function applyFilters() {
      var activeByGroup = {};
      var allActiveMetas = [];
      root.querySelectorAll('.boost-sd__filter-option-item-button[aria-checked="true"]').forEach(function (button) {
        var meta = parseButtonMeta(button);
        meta.button = button;
        allActiveMetas.push(meta);
        var groupKey = meta.groupId || meta.dimKey || 'default';
        activeByGroup[groupKey] = activeByGroup[groupKey] || [];
        activeByGroup[groupKey].push(meta);
      });

      var groups = Object.keys(activeByGroup);
      var matchesByGroup = {};

      groups.forEach(function (groupKey) {
        matchesByGroup[groupKey] = [];
        var metas = activeByGroup[groupKey];
        productCards.forEach(function (card) {
          if (card.classList.contains('boost-sd__product-item--banner')) return;
          var matchesAny = metas.some(function (meta) {
            return cardMatches(card, meta);
          });
          if (matchesAny && !matchesByGroup[groupKey].includes(card)) {
            matchesByGroup[groupKey].push(card);
          }
        });
      });

      var visible = 0;
      productCards.forEach(function (card) {
        if (card.classList.contains('boost-sd__product-item--banner')) {
          card.hidden = groups.length > 0;
          return;
        }
        var show = groups.every(function (groupKey) {
          return matchesByGroup[groupKey].includes(card);
        });
        card.hidden = !show;
        if (show) visible += 1;
      });

      // Render Refine By component
      renderRefineBy(allActiveMetas);

      // Update product count toolbar text matching original Smith Optics format
      root.querySelectorAll('.boost-sd__product-count').forEach(function (node) {
        if (groups.length > 0) {
          if (visible === 0) {
            node.textContent = '0 sản phẩm';
          } else if (visible === 1) {
            node.textContent = '1 sản phẩm';
          } else {
            node.textContent = '1 - ' + visible + ' trên tổng số ' + visible;
          }
        } else {
          node.textContent = '1 - ' + Math.min(visible, 24) + ' trên tổng số ' + visible;
        }
      });

      // Empty state handling
      var emptyMessage = root.querySelector('.smith-filter-empty-message');
      if (visible === 0 && groups.length > 0) {
        if (!emptyMessage && primaryGrid) {
          emptyMessage = document.createElement('div');
          emptyMessage.className = 'smith-filter-empty-message';
          emptyMessage.style.cssText = 'grid-column: 1 / -1; padding: 48px 24px; text-align: center; color: #666; font-size: 16px;';
          emptyMessage.innerHTML = 
            '<p style="margin: 0 0 12px; font-size: 16px; color: #444;">Không tìm thấy sản phẩm phù hợp với bộ lọc đã chọn.</p>' +
            '<button type="button" class="smith-clear-filter-cta">Xóa tất cả bộ lọc</button>';
          primaryGrid.appendChild(emptyMessage);
          emptyMessage.querySelector('.smith-clear-filter-cta')?.addEventListener('click', clearAllFilters);
        } else if (emptyMessage) {
          emptyMessage.style.display = 'block';
        }
      } else if (emptyMessage) {
        emptyMessage.style.display = 'none';
      }

      var pagination = root.querySelector('.boost-sd__pagination-load-more-container');
      if (pagination) pagination.hidden = groups.length > 0;
    }

    root.querySelectorAll('.boost-sd__filter-option-item-button').forEach(function (button) {
      button.addEventListener('click', function () {
        var checked = button.getAttribute('aria-checked') === 'true';
        button.setAttribute('aria-checked', checked ? 'false' : 'true');
        button.classList.toggle('boost-sd__filter-option-item-button--selected', !checked);
        var group = button.closest('.boost-sd__filter-option');
        group?.querySelector('.boost-sd__filter-option-label-btn')?.classList.toggle(
          'boost-sd__g-hide',
          !group.querySelector('.boost-sd__filter-option-item-button[aria-checked="true"]')
        );
        syncFilterUrl();
        applyFilters();
      });
    });

    root.querySelectorAll('.boost-sd__filter-option-label-btn').forEach(function (clearButton) {
      clearButton.addEventListener('click', function () {
        var group = clearButton.closest('.boost-sd__filter-option');
        group?.querySelectorAll('.boost-sd__filter-option-item-button').forEach(function (button) {
          button.setAttribute('aria-checked', 'false');
          button.classList.remove('boost-sd__filter-option-item-button--selected');
        });
        clearButton.classList.add('boost-sd__g-hide');
        syncFilterUrl();
        applyFilters();
      });
    });

    // Hydrate the controls from shareable URLs such as ?best_for=Fishing&collection=Lifestyle
    var initialParams = new URL(window.location.href).searchParams;
    root.querySelectorAll('.boost-sd__filter-option-item-button').forEach(function (button) {
      var meta = parseButtonMeta(button);
      var values = initialParams.getAll(filterParam(button)).map(normalized);
      var label = normalized(meta.labelText);
      var enVal = normalized(meta.englishValue);
      if (values.includes(label) || values.includes(enVal)) {
        button.setAttribute('aria-checked', 'true');
        button.classList.add('boost-sd__filter-option-item-button--selected');
        button.closest('.boost-sd__filter-option')?.querySelector('.boost-sd__filter-option-label-btn')?.classList.remove('boost-sd__g-hide');
      }
    });
    applyFilters();

    // Accordion Toggle
    root.querySelectorAll('.boost-sd__filter-option-title').forEach(function (button) {
      button.addEventListener('click', function () {
        var group = button.closest('.boost-sd__filter-option');
        var body = group && group.querySelector('.boost-sd__filter-option-itemwrapper, .boost-sd__filter-option-content');
        var open = button.getAttribute('aria-expanded') !== 'false';
        button.setAttribute('aria-expanded', open ? 'false' : 'true');
        button.closest('.boost-sd__filter-option-label')?.classList.toggle('boost-sd__filter-option-label--collapsed', open);
        if (body) body.hidden = open;
      });
    });

    // Sorting functionality
    var sortingButton = root.querySelector('.boost-sd__sorting-button');
    var sortingList = root.querySelector('.boost-sd__sorting-list');
    var sortingValueText = root.querySelector('.boost-sd__sorting-value');
    if (sortingButton && sortingList) {
      sortingButton.addEventListener('click', function (e) {
        e.stopPropagation();
        var open = sortingButton.getAttribute('aria-expanded') === 'true';
        sortingButton.setAttribute('aria-expanded', open ? 'false' : 'true');
        sortingList.classList.toggle('boost-sd__sorting-list--open', !open);
      });
      document.addEventListener('click', function () {
        sortingButton.setAttribute('aria-expanded', 'false');
        sortingList.classList.remove('boost-sd__sorting-list--open');
      });
      root.querySelectorAll('.boost-sd__sorting-option').forEach(function (option) {
        option.addEventListener('click', function (e) {
          e.stopPropagation();
          var val = option.getAttribute('data-value') || '';
          var btn = option.querySelector('.boost-sd__sorting-option-item');
          var label = btn ? btn.textContent.trim() : val;
          root.querySelectorAll('.boost-sd__sorting-option').forEach(function (o) {
            o.classList.remove('boost-sd__sorting-option--active');
          });
          option.classList.add('boost-sd__sorting-option--active');
          if (sortingValueText) sortingValueText.textContent = label;
          sortingButton.setAttribute('aria-expanded', 'false');
          sortingList.classList.remove('boost-sd__sorting-list--open');
          sortProducts(val);
        });
      });
    }

    function sortProducts(sortType) {
      if (!primaryGrid) return;
      var cards = Array.from(primaryGrid.querySelectorAll(':scope > .boost-sd__product-item:not(.boost-sd__product-item--banner)'));
      cards.sort(function (a, b) {
        if (sortType === 'relevance') {
          return (a._originalIndex || 0) - (b._originalIndex || 0);
        }
        if (sortType === 'best-selling') {
          var aBest = a.textContent.includes('Bán chạy') || a.textContent.includes('Best Seller') ? 1 : 0;
          var bBest = b.textContent.includes('Bán chạy') || b.textContent.includes('Best Seller') ? 1 : 0;
          return bBest - aBest;
        }
        if (sortType === 'created-descending') {
          var aNew = a.textContent.includes('Mới') || a.textContent.includes('New') ? 1 : 0;
          var bNew = b.textContent.includes('Mới') || b.textContent.includes('New') ? 1 : 0;
          return bNew - aNew;
        }
        if (sortType === 'price-ascending' || sortType === 'price-descending') {
          var getPrice = function (card) {
            var num = (card.textContent.match(/[\d.,]{4,}/g) || ['0'])[0].replace(/[.,]/g, '');
            return parseInt(num, 10) || 0;
          };
          var pA = getPrice(a);
          var pB = getPrice(b);
          return sortType === 'price-ascending' ? pA - pB : pB - pA;
        }
        return 0;
      });
      cards.forEach(function (card) {
        primaryGrid.appendChild(card);
      });
    }

    // Mobile Filter Drawer Toggle
    var mobileToggleBtn = root.querySelector('#boost-sd__filter-tree-toggle-button');
    var mobileDrawer = root.querySelector('#boost-sd_filter-tree-mobile');
    if (mobileToggleBtn && mobileDrawer) {
      function openMobileDrawer() {
        mobileToggleBtn.setAttribute('aria-expanded', 'true');
        mobileDrawer.classList.add('boost-sd_filter-tree-mobile--active');
        mobileDrawer.style.setProperty('display', 'block', 'important');
        document.body.style.overflow = 'hidden';
      }
      function closeMobileDrawer() {
        mobileToggleBtn.setAttribute('aria-expanded', 'false');
        mobileDrawer.classList.remove('boost-sd_filter-tree-mobile--active');
        mobileDrawer.style.setProperty('display', 'none', 'important');
        document.body.style.overflow = '';
      }
      mobileToggleBtn.addEventListener('click', function () {
        var isOpen = mobileDrawer.classList.contains('boost-sd_filter-tree-mobile--active') || mobileDrawer.style.display === 'block';
        if (isOpen) closeMobileDrawer();
        else openMobileDrawer();
      });
      mobileDrawer.querySelectorAll('.boost-sd__button--close, .boost-sd__filter-tree-vertical-close-filter button').forEach(function (closeBtn) {
        closeBtn.addEventListener('click', closeMobileDrawer);
      });
      var overlay = mobileDrawer.querySelector('.boost-sd__filter-tree-vertical-sticky-overlay');
      if (overlay) {
        overlay.addEventListener('click', function (e) {
          if (e.target === overlay) {
            closeMobileDrawer();
          }
        });
      }
    }

    root.querySelectorAll('.boost-sd__product-swatch-option label').forEach(function (label) {
      label.addEventListener('click', function () {
        var card = closestCard(label);
        var image = card && card.querySelector('.boost-sd__product-image-img--main');
        var source = imageFromSwatch(label);
        if (image && source) {
          // The captured Shopify markup includes responsive srcset/source tags.
          // Updating src alone is not enough because the browser keeps choosing
          // the old candidate from srcset.
          image.removeAttribute('srcset');
          image.removeAttribute('data-srcset');
          image.removeAttribute('sizes');
          image.src = source;
          image.setAttribute('src', source);
          var picture = image.closest('picture');
          if (picture) {
            picture.querySelectorAll('source').forEach(function (responsiveSource) {
              responsiveSource.removeAttribute('srcset');
              responsiveSource.removeAttribute('data-srcset');
            });
          }
        }
        card?.querySelectorAll('.boost-sd__product-swatch-option input').forEach(function (input) {
          input.checked = input.id === label.htmlFor;
          input.setAttribute('aria-checked', input.checked ? 'true' : 'false');
        });
      });
      label.addEventListener('keydown', function (event) {
        if (event.key === 'Enter' || event.key === ' ') {
          event.preventDefault();
          label.click();
        }
      });
    });

    root.querySelectorAll('.boost-sd__product-swatch-more').forEach(function (btn) {
      var desktopText = (btn.querySelector('.text-desktop')?.textContent || btn.textContent || '').trim();
      if (desktopText === '+0' || desktopText === '0' || btn.classList.contains('d-hide')) {
        btn.style.setProperty('display', 'none', 'important');
      }
    });

    var sortButton = root.querySelector('.boost-sd__sorting-button');
    var sortList = root.querySelector('.boost-sd__sorting-list');
    if (sortButton && sortList) {
      sortButton.addEventListener('click', function () {
        var active = sortList.classList.toggle('boost-sd__sorting-list--active');
        sortButton.classList.toggle('boost-sd__sorting-button--active', active);
        sortButton.setAttribute('aria-expanded', active ? 'true' : 'false');
      });
      sortList.querySelectorAll('.boost-sd__sorting-option').forEach(function (option) {
        option.addEventListener('click', function () {
          var grid = root.querySelector('.boost-sd__product-list');
          var cards = grid ? Array.from(grid.querySelectorAll('.boost-sd__product-item')) : [];
          var mode = option.dataset.value || '';
          var title = function (card) { return (card.querySelector('.boost-sd__product-title')?.textContent || '').trim(); };
          var price = function (card) {
            var text = card.querySelector('.boost-sd__product-price')?.textContent || '';
            return parseFloat((text.match(/[0-9]+(?:\.[0-9]+)?/) || ['0'])[0]);
          };
          if (mode.includes('price-ascending')) cards.sort(function (a, b) { return price(a) - price(b); });
          if (mode.includes('price-descending')) cards.sort(function (a, b) { return price(b) - price(a); });
          if (mode.includes('title-ascending')) cards.sort(function (a, b) { return title(a).localeCompare(title(b)); });
          if (mode.includes('title-descending')) cards.sort(function (a, b) { return title(b).localeCompare(title(a)); });
          cards.forEach(function (card) { grid.appendChild(card); });
          sortList.querySelectorAll('.boost-sd__sorting-option').forEach(function (item) { item.classList.toggle('boost-sd__sorting-option--active', item === option); });
          var value = sortButton.querySelector('.boost-sd__sorting-value');
          if (value) value.textContent = option.textContent.trim();
          sortList.classList.remove('boost-sd__sorting-list--active');
          sortButton.classList.remove('boost-sd__sorting-button--active');
          sortButton.setAttribute('aria-expanded', 'false');
        });
      });
    }

    var mobileToggle = root.querySelector('.boost-sd__filter-tree-toggle-button');
    var filterTree = root.querySelector('.boost-sd__filter-tree-vertical');
    if (mobileToggle && filterTree) {
      var mobileToggleText = mobileToggle.querySelector('.boost-sd__filter-tree-toggle-button-text');
      var setMobileFilterState = function (open) {
        root.classList.add('smith-mobile-filter-ready');
        root.classList.toggle('smith-mobile-filter-open', open);
        mobileToggle.classList.toggle('boost-sd__filter-tree-toggle-button--active', open);
        filterTree.classList.toggle('boost-sd__filter-tree-vertical--active', open);
        filterTree.classList.toggle('smith-mobile-filter-open', open);
        filterTree.classList.toggle('smith-mobile-filter-collapsed', !open);
        mobileToggle.setAttribute('aria-expanded', open ? 'true' : 'false');
        if (mobileToggleText) mobileToggleText.textContent = open ? 'ĐÓNG BỘ LỌC' : 'BỘ LỌC';
      };
      setMobileFilterState(false);
      mobileToggle.addEventListener('click', function (event) {
        event.preventDefault();
        event.stopImmediatePropagation();
        setMobileFilterState(!root.classList.contains('smith-mobile-filter-open'));
      }, true);
    }

    var originalTrending = document.querySelector('.smith-original-trending');
    if (originalTrending) {
      var trendingSlot = document.getElementById('shopify-section-template--23416234017006__1779828146c2f0f458');
      if (trendingSlot) {
        trendingSlot.innerHTML = '';
        trendingSlot.appendChild(originalTrending);
        originalTrending.style.marginTop = '0';
        originalTrending.style.marginBottom = '0';
      } else {
        // Every other collection keeps its recommendation skeleton directly
        // above the SEO copy. Reuse that exact position for the working slider.
        var capturedRecommendation = document.querySelector('.smith-source-snapshot .boost-sd__recommendation');
        if (capturedRecommendation) {
          capturedRecommendation.replaceWith(originalTrending);
          originalTrending.style.marginTop = '0';
          originalTrending.style.marginBottom = '0';
        }
      }
      var trendingTrack = originalTrending.querySelector('.slick-track');
      var wantedTrending = ['riptide', 'guides-choice', 'wildcat', 'lowdown-2', 'forefront-3-mips-r-sale', 'network-mips-r', 'bobcat', 'backcast', 'venture', 'trace-mips-r', 'engage-mips-r', 'forefront-3-mips-r'];
      // The shared trending component owns ordering, paging and controls.
      // Keep this legacy block only for older snapshot markup.
      if (trendingTrack && originalTrending.dataset.smithSharedTrending !== 'true') {
        var trendingSlides = Array.from(trendingTrack.querySelectorAll(':scope > .slick-slide'));
        var chosenTrending = [];
        wantedTrending.forEach(function (handle, index) {
          var chosen = trendingSlides.find(function (slide) {
            var product = slide.querySelector('.boost-sd__product-item[data-product]');
            try { return product && JSON.parse(product.dataset.product || '{}').handle === handle; } catch (_) { return false; }
          });
          if (chosen) {
            chosen.classList.add('smith-trending-visible');
            chosen.dataset.smithTrendingPage = String(Math.floor(index / 4));
            chosen.removeAttribute('aria-hidden');
            trendingTrack.appendChild(chosen);
            chosenTrending.push(chosen);
            var image = chosen.querySelector('.boost-sd__product-image-img--main');
            var chosenProduct = chosen.querySelector('.boost-sd__product-item[data-product]');
            var chosenData = {};
            try { chosenData = JSON.parse(chosenProduct?.dataset.product || '{}'); } catch (_) {}
            if (image) {
              var primarySource = chosenData.images && chosenData.images[0] && chosenData.images[0].src;
              image.loading = 'eager';
              image.removeAttribute('srcset');
              image.removeAttribute('data-srcset');
              image.removeAttribute('sizes');
              if (primarySource) image.src = primarySource;
              else if (image.dataset.src) image.src = image.dataset.src;
              image.style.width = '100%';
              image.style.height = '100%';
              image.style.objectFit = 'contain';
            }
          }
        });
        var trendingPage = 1;
        var trendingDots = Array.from(originalTrending.querySelectorAll('.slick-dots li')).slice(0, 3);
        function showTrendingPage(page) {
          trendingPage = (page + 3) % 3;
          chosenTrending.forEach(function (slide) {
            slide.classList.toggle('smith-trending-page-active', Number(slide.dataset.smithTrendingPage) === trendingPage);
          });
          trendingDots.forEach(function (dot, index) { dot.classList.toggle('slick-active', index === trendingPage); });
        }
        originalTrending.querySelector('.boost-sd__prev-button button')?.addEventListener('click', function () { showTrendingPage(trendingPage - 1); });
        originalTrending.querySelector('.boost-sd__next-button button')?.addEventListener('click', function () { showTrendingPage(trendingPage + 1); });
        trendingDots.forEach(function (dot, index) { dot.addEventListener('click', function () { showTrendingPage(index); }); });
        originalTrending.querySelectorAll('.boost-sd__product-swatch-more').forEach(function (btn) {
          var desktopText = (btn.querySelector('.text-desktop')?.textContent || btn.textContent || '').trim();
          if (desktopText === '+0' || desktopText === '0' || btn.classList.contains('d-hide')) {
            btn.style.setProperty('display', 'none', 'important');
          }
        });
        showTrendingPage(1);
      }
      originalTrending.querySelectorAll('.boost-sd__product-swatch-option label').forEach(function (label) {
        label.addEventListener('click', function () {
          var card = label.closest('.boost-sd__product-item');
          var image = card && card.querySelector('.boost-sd__product-image-img--main');
          var source = imageFromSwatch(label);
          if (image && source) { image.removeAttribute('srcset'); image.src = source; }
        });
      });
    }

    document.querySelectorAll('.smith-trending-swatch').forEach(function (swatch) {
      swatch.addEventListener('click', function () {
        var card = swatch.closest('.smith-trending-item');
        var image = card && card.querySelector('.smith-trending-image');
        if (image && swatch.dataset.image) image.src = swatch.dataset.image;
        card?.querySelectorAll('.smith-trending-swatch').forEach(function (item) {
          item.classList.toggle('is-active', item === swatch);
        });
      });
    });

    // Reviews.io's remote carousel controller is not part of the local page
    // snapshot. Restore the previous/next controls with native scrolling.
    document.querySelectorAll('.smith-page-source-snapshot--reviews .CarouselWidget').forEach(function (carousel) {
      var track = carousel.querySelector('.R-ReviewList');
      var previous = carousel.querySelector('.R-ReviewList__controlButton--left');
      var next = carousel.querySelector('.R-ReviewList__controlButton--right');
      if (!track || !previous || !next) return;

      function scrollStep() {
        var firstItem = track.querySelector('.R-ReviewList__item');
        if (!firstItem) return Math.max(track.clientWidth, 1);
        var styles = window.getComputedStyle(track);
        var gap = parseFloat(styles.columnGap || styles.gap) || 0;
        return firstItem.getBoundingClientRect().width + gap;
      }

      function updateControls() {
        var maxScroll = Math.max(0, track.scrollWidth - track.clientWidth);
        var atStart = track.scrollLeft <= 1;
        var atEnd = track.scrollLeft >= maxScroll - 1;
        previous.classList.toggle('R-ReviewList__controlButton--isDisabled', atStart);
        next.classList.toggle('R-ReviewList__controlButton--isDisabled', atEnd);
        previous.setAttribute('aria-disabled', String(atStart));
        next.setAttribute('aria-disabled', String(atEnd));
      }

      function move(direction) {
        track.scrollBy({ left: direction * scrollStep(), behavior: 'smooth' });
      }

      previous.addEventListener('click', function () { move(-1); });
      next.addEventListener('click', function () { move(1); });
      [previous, next].forEach(function (control, index) {
        control.setAttribute('tabindex', '0');
        control.addEventListener('keydown', function (event) {
          if (event.key !== 'Enter' && event.key !== ' ') return;
          event.preventDefault();
          move(index === 0 ? -1 : 1);
        });
      });
      track.addEventListener('scroll', updateControls, { passive: true });
      window.addEventListener('resize', updateControls);
      updateControls();
    });

    // Chỉ hiển thị snapshot sau khi toàn bộ bản dịch đồng bộ đã được áp dụng,
    // tránh khung hình tiếng Anh xuất hiện trước DOMContentLoaded.
    document.documentElement.classList.remove('smith-i18n-pending');
  });
})();
