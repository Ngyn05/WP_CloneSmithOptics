# Checklist bàn giao SEO, GEO và hậu triển khai — SmithOptics VN

Cập nhật: 15/09/2026. Nguồn đối chiếu đầy đủ: `Huong_dan_kiem_tra_SEO_GEO_website_truoc_ban_giao_cho_dev.pdf` (22 trang) và `SOP_Hau_Trien_Khai_Website_Cho_Nhan_Vien.pdf` (23 trang).

Kết quả crawl local cuối ngày 15/09/2026: `sitemap_index.xml` và 5 sitemap con đều HTTP 200; 861/861 URL trong sitemap trả HTTP 200; 861/861 URL có SEO title, meta description, self-canonical và bộ Open Graph; không còn schema JSON-LD dẫn về domain Smith gốc; các ngoại lệ H1 đã được sửa và kiểm tra lại riêng. Có 40 nhóm SEO title sản phẩm trùng do các bản ghi/model nhập khẩu trùng tên; cần chủ dữ liệu xác nhận SKU nào giữ, gộp hoặc redirect trước khi xóa sản phẩm, tránh làm mất dữ liệu thương mại.

## Quy ước trạng thái

- `[x] LOCAL — ĐẠT`: đã kiểm tra trực tiếp trên `http://smith-vn.local`.
- `[~] LOCAL — ĐÃ LÀM, PHẢI RETEST HOST`: đã triển khai trong theme nhưng domain/HTTPS/cache/CDN production có thể thay đổi kết quả.
- `[ ] HOST/TÀI KHOẢN`: chỉ hoàn tất sau khi có domain, DNS, hosting hoặc tài khoản dịch vụ.
- `[!] NỘI DUNG/PHÁP LÝ`: cần chủ doanh nghiệp xác nhận; dev không được tự bịa.
- `[P0]`: chỉ một mục chưa đạt cũng chặn nghiệm thu production. `[P1]`: phải đạt trước bàn giao thông thường. `[P2]`: backlog 7–30 ngày.

## 00. Nguyên tắc nghiệm thu và phân công

- [x] Mỗi mục trong biên bản có trạng thái, phạm vi và bằng chứng; không dùng câu “đã cài” thay cho “đã test”.
- [ ] Khi nghiệm thu production, ghi URL/property, người test, ngày giờ và ảnh/link bằng chứng cho từng nhóm.
- [x] Dev chịu crawl/index, head, schema, canonical, sitemap, status, rendering, responsive và lỗi kỹ thuật.
- [!] Content/quản lý xác nhận brand, pháp nhân, giá, tồn kho, bảo hành, tư cách phân phối, địa chỉ và căn cứ pháp lý.
- [ ] Marketing chịu GA4, GTM, key events, conversion, UTM và đối soát lead/đơn hàng.
- [ ] PM/QA tổng hợp bằng chứng, kiểm thử hành trình, mobile và ký nghiệm thu.
- [x] Không dùng text/keyword ẩn hoặc schema để ép AI hiểu; GEO dựa trên khả năng truy cập, SEO, thực thể và dữ liệu đáng tin cậy.
- [x] Không coi `llms.txt`, `meta keywords`, `geo.position`, `geo.region`, `ICBM`, `ai-content`, `geo-ai` hay `official-dealer` tự đặt là yêu cầu/xác nhận SEO.

## 01. Domain, HTTPS, URL chuẩn và redirect

- [ ] [P0][HOST] HTTPS hoạt động, chứng chỉ hợp lệ và tự gia hạn; không có cảnh báo/mixed content.
- [ ] [P0][HOST] HTTP chuyển 301/308 trực tiếp sang HTTPS.
- [ ] [P0][HOST] Chọn www hoặc non-www; phiên bản còn lại redirect một bước về bản chuẩn.
- [~] Quy tắc trailing slash đã thống nhất bằng WordPress/canonical; retest sau đổi domain.
- [x] URL public viết thường, mô tả nội dung, không dùng ID/query làm URL sản phẩm chính.
- [x] Mỗi route chuẩn có self-canonical động; query tracking không đổi canonical.
- [~] Internal link, Open Graph và sitemap dùng URL local chuẩn; thay domain bằng migration WordPress rồi crawl lại.
- [x] Bài viết tiếng Anh trùng nội dung được loại khỏi sitemap và có cơ chế 301 sang bài tiếng Việt tương ứng.
- [ ] [HOST] Kiểm tra không có redirect chain A→B→C; sửa về A→C.
- [ ] [HOST/GSC] Kiểm tra Google-selected canonical bằng URL Inspection.
- [ ] [P0][HOST] URL không tồn tại trả 404/410 thật, không soft 404.
- [x] Search/cart/checkout/account và URL filter/query vô hạn không nằm trong sitemap.
- [ ] Chỉ index trang lọc nếu có nhu cầu tìm kiếm, nội dung riêng và self-canonical; mặc định không đưa filter vào sitemap.
- [x] Không canonical hàng loạt route về trang chủ.

## 02. HTML head, title, description, robots và Open Graph

- [x] `<html lang="vi">`, charset và viewport tồn tại.
- [x] Title được sinh riêng theo URL, tiếng Việt và kết thúc bằng `| SmithOptics VN`; không chứa `...`/`…`.
- [x] Title ưu tiên tên model/chủ đề trước, brand cuối; không nhồi tỉnh thành/năm/từ khóa.
- [x] Meta description động theo URL; mô tả đúng nội dung, không dùng meta keywords.
- [x] Robots meta trang SEO: `index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1`.
- [x] Canonical duy nhất và động theo URL chuẩn.
- [x] `og:locale=vi_VN`, `og:type`, `og:title`, `og:description`, `og:url`, `og:site_name`, `og:image`, `og:image:alt` được sinh động.
- [x] Twitter card/title/description/image được sinh động.
- [~] Ảnh sản phẩm được ưu tiên làm `og:image`; trang không có ảnh dùng ảnh nhận diện dự phòng. Nên chuẩn bị ảnh chia sẻ riêng 1200×630 trên host.
- [ ] [HOST] Dùng social debugger kiểm tra ảnh/title/description thực tế sau public.
- [x] Logo header không còn đóng vai H1 nội dung.
- [x] Trang sản phẩm có một H1 model; trang chủ dùng heading nội dung đầu tiên làm H1.
- [ ] Rà từng trang nội dung đặc biệt để bảo đảm đúng một H1 nhìn thấy và H2/H3 theo thứ bậc, không chọn heading chỉ vì cỡ chữ.

## 03. Favicon, logo, site name, PWA

- [x] Có favicon SVG vuông, URL ổn định và PNG fallback.
- [x] Có `rel=icon`, `apple-touch-icon`, `site.webmanifest` và `theme-color`.
- [x] Manifest khai báo tên, short name, tiếng Việt, màu nền/màu theme và icon vector responsive.
- [~] `WebSite.name = SmithOptics VN`, alternateName gồm “Smith Việt Nam” và “Smith Optics Việt Nam”; retest schema trên host.
- [~] `og:site_name`, header/footer và schema dùng cùng nhận diện SmithOptics VN.
- [ ] [P1] Tạo PNG 48×48, Apple 180×180 và PWA 192×192/512×512 chất lượng gốc; hiện PNG cũ chỉ 32×32, SVG là tài sản chính.
- [ ] [HOST] Mở trực tiếp từng icon/logo/manifest bằng Googlebot-Image; xác nhận 200 và không bị CDN chặn.
- [ ] Chuẩn bị logo schema vuông tối thiểu 112×112, rõ trên nền trắng nếu thay icon hiện tại.

## 04. Robots.txt, sitemap và bot AI/search

- [x] Robots không có `Disallow: /` khi site public.
- [x] `User-agent: *` cho phép trang công khai và chặn admin, dữ liệu WooCommerce, cart, checkout, account, search, add-to-cart query.
- [x] Nhóm `OAI-SearchBot` được khai báo riêng và lặp lại toàn bộ đường dẫn riêng tư cần chặn.
- [x] Sitemap index được khai báo bằng `home_url`, tự đổi sang domain production sau migration đúng cách.
- [x] Sitemap index và 5 sitemap con hiện mở được bằng HTTP 200.
- [x] Loại post sitemap tiếng Anh trùng nội dung; loại sample-page/cart/checkout/my-account khỏi page sitemap.
- [ ] [QUẢN LÝ] Quyết định cho phép hay chặn `GPTBot` training. Không gộp quyết định GPTBot với OAI-SearchBot.
- [x] Googlebot và bingbot dùng nhóm `*`; OAI-SearchBot phục vụ ChatGPT Search; ChatGPT-User không dùng để kiểm soát Search.
- [ ] [HOST/CDN] Allow verified Googlebot, OAI-SearchBot và bingbot; không chỉ tin chuỗi User-Agent giả.
- [ ] [P0][HOST] CDN/WAF/Bot Fight Mode không trả 403/429/challenge cho bot hợp lệ.
- [ ] [HOST] Không CAPTCHA/login/cookie wall/JS challenge trước nội dung công khai; không geoblock bot quốc tế.
- [ ] [HOST] Ảnh, CSS, JS, favicon và JSON-LD không bị chặn; kiểm tra WAF/server log 403/429/5xx.
- [ ] [HOST] Sitemap chỉ chứa canonical 200/index; `lastmod` chỉ đổi khi nội dung quan trọng đổi.
- [ ] [GSC] Submit sitemap index và lưu trạng thái Success/số URL discovered.

## 05. Rendering, HTML ngữ nghĩa và internal link

- [x] Nội dung snapshot là SSR/pre-render trong HTML, không phải `div#app` rỗng chờ API.
- [x] View Source/curl thấy tên, mô tả, trạng thái hàng và liên kết nội bộ; JSON-LD có trong HTML server.
- [x] Menu, danh mục, sản phẩm và breadcrumb dùng thẻ `a` có `href` thật.
- [x] Link điều hướng từ Smith/Shopify gốc được đổi về URL nội bộ; CDN ảnh/CSS không bị đổi nhầm.
- [x] Có sơ đồ trang nội bộ cho các Page database để tránh page mồ côi.
- [ ] Crawl lại production để xác nhận không còn sản phẩm mồ côi: trang chủ→danh mục→sản phẩm và bài viết→sản phẩm liên quan.
- [ ] Rà anchor text mô tả đúng nội dung; tránh “bấm vào đây” ở các liên kết quan trọng.
- [x] BreadcrumbList được sinh cho route database; cấu trúc phải khớp breadcrumb nhìn thấy.
- [x] Header, nav, main/article theo template và footer có semantic cơ bản; logo đã tách khỏi H1.
- [ ] [P0] Test URL lỗi trả status 404/410 từ server, không chỉ hiển thị chữ lỗi.

## 06. Schema và dữ liệu thực thể

- [x] JSON-LD được dùng; không nhồi mọi schema vào mọi trang.
- [x] Hai schema Organization/WebSite của website Mỹ đã bị loại khỏi HTML public.
- [x] Trang chủ có `OnlineStore` local với `@id=#organization`, tên, URL, logo, mô tả, điện thoại, email, Việt Nam và hai địa chỉ đang hiển thị trên site.
- [x] WebSite có name/alternateName và URL động.
- [x] Route nội dung có CollectionPage + BreadcrumbList; route sản phẩm có Product + BreadcrumbList.
- [x] Product.brand là `Smith Optics`, không phải tên cửa hàng; seller tham chiếu `#organization`.
- [x] SKU chỉ thêm khi WooCommerce có dữ liệu thật; không tự tạo GTIN/MPN/manufacturer/review/aggregateRating.
- [x] Không phát Offer giả vì frontend đang ẩn giá. Không dùng giá 0/1/“Liên hệ” để vượt Rich Results Test.
- [!] Nếu muốn Product rich result/Merchant Center: phải công khai giá thật, tiền tệ, tồn kho, tình trạng và chính sách; sau đó mới thêm Offer đồng bộ frontend/feed.
- [!] Chỉ khai manufacturer khi có dữ liệu chính xác; seller không mặc nhiên là manufacturer.
- [!] Không khai authorized dealer/nhà phân phối độc quyền/chính hãng chỉ bằng schema hoặc badge khi chưa có bằng chứng.
- [ ] [HOST] Rich Results Test từng template: không critical error với loại đủ điều kiện.
- [ ] [HOST] Schema Markup Validator: cú pháp và quan hệ @id hợp lệ.
- [ ] [GSC] URL Inspection live thấy structured data; theo dõi Enhancements sau deploy.
- [ ] Nếu dùng LocalBusiness, chọn subtype đúng và chỉ khai địa điểm công khai có thật; hiện dùng OnlineStore an toàn hơn.

## 07. Nội dung sản phẩm và GEO “mua ở đâu”

- [x] Đầu trang có H1 model, ảnh, trạng thái và CTA; nội dung có trong HTML sớm.
- [!] Mỗi sản phẩm cần câu nhìn thấy: ai bán/cung cấp tại Việt Nam, cách đặt mua, pháp nhân chịu trách nhiệm.
- [!] Bổ sung/duyệt hãng, model, SKU và chỉ thêm MPN/GTIN/phiên bản/màu khi có dữ liệu thật.
- [!] Nội dung riêng cần có công dụng, thông số, tương thích, bộ sản phẩm và hướng dẫn; không sao chép nguyên toàn bộ từ hãng.
- [!] Duyệt giá/tồn kho/giao hàng/thanh toán/đổi trả/bảo hành và bảo đảm khớp schema/feed.
- [!] Duyệt pháp nhân, hotline, địa chỉ, hóa đơn, nguồn gốc và bằng chứng ủy quyền nếu tuyên bố có ủy quyền.
- [!] Có ngày cập nhật thật và người/bộ phận chịu trách nhiệm; không tự đổi ngày mỗi lần bot truy cập.
- [!] Nội dung nên trả lời đủ: sản phẩm là gì/phù hợp ai; phiên bản và biến thể; mua ở đâu tại Việt Nam; ai bán/bảo hành; giá–hàng–giao–đổi trả; cách nhận đúng model/phụ kiện.
- [x] Có thể dùng FAQ nhìn thấy nhưng không lạm dụng FAQ schema/nhồi câu hỏi hàng loạt.

## 08. Tuyên bố chính hãng, pháp nhân và tín hiệu tin cậy

- [!] Chỉ dùng “chính hãng” khi có căn cứ nguồn hàng; dev không tự quyết nội dung pháp lý.
- [!] Nếu có ủy quyền: công bố đúng công ty, hãng ủy quyền và liên kết bằng chứng công khai.
- [!] Nếu chỉ nhập khẩu/bán: diễn đạt “cung cấp sản phẩm chính hãng” kèm hóa đơn/bảo hành thực tế, không tự nhận độc quyền.
- [!] Nếu chỉ bán lẻ: ghi sản phẩm được bán bởi công ty, không tự nhận được ủy quyền.
- [!] Chưa có bằng chứng thì bỏ “đại lý chính thức/độc quyền” và chuyển quản lý duyệt.
- [!] Trang Giới thiệu phải nêu pháp nhân và vai trò thật; chính sách bảo hành, đổi trả, hóa đơn và nguồn hàng phải được duyệt.
- [!] Brand, pháp nhân, hotline, địa chỉ và social profile phải nhất quán; không dùng logo chứng nhận chưa được phép.

## 09. Footer và trang pháp lý

- [x] Footer/popup có brand, hotline, email và địa chỉ Hà Nội/TP.HCM.
- [!] Bổ sung tên pháp nhân đầy đủ, mã số thuế nếu công bố và giờ làm việc sau khi quản lý cung cấp.
- [x] Có mô tả ngắn nhóm sản phẩm và khu vực Việt Nam.
- [ ] Rà link hoạt động: Giới thiệu, Liên hệ, Bảo mật, Điều khoản, Vận chuyển, Thanh toán, Đổi trả/Hoàn tiền, Bảo hành.
- [!] Chỉ thêm Facebook/YouTube/TikTok chính thức thuộc đơn vị vận hành; không nhận social của hãng Mỹ làm tài khoản cửa hàng.
- [ ] Copyright/năm đúng; không tự tuyên bố sở hữu logo/hình ảnh nếu không có quyền.
- [!] NAP nhất quán: Name/legalName, cách viết địa chỉ, hotline; schema dùng số `+84`.
- [x] Footer chỉ tóm tắt và liên kết, không thay thế trang Giới thiệu/chính sách chi tiết; không nhồi tỉnh/từ khóa.

## 10. Ảnh, responsive và Core Web Vitals

- [ ] Rà tên file ảnh có ý nghĩa khi CMS cho phép; các snapshot còn nhiều tên hash từ nguồn.
- [ ] Rà toàn bộ `alt`: ảnh nội dung mô tả đúng, ảnh trang trí alt rỗng, không spam từ khóa.
- [ ] Xác nhận ảnh đúng model, đủ lớn và không chứa logo cửa hàng khác.
- [ ] Rà `width`/`height` cho ảnh/iframe để tránh CLS; không khai `width="auto" height="auto"`.
- [~] Snapshot đã giữ `srcset` và dùng kích thước CDN phù hợp; cần xác nhận WebP/AVIF tự động trên CDN production.
- [ ] Không ép `loading` toàn cục trên snapshot: đã hoàn tác vì làm ảnh chính của lưới sản phẩm không hiển thị ổn định.
- [ ] Tối ưu URL/CDN ảnh chỉ thực hiện lại sau khi kiểm thử đầy đủ từng template trên staging/host.
- [ ] [HOST] URL ảnh Product schema/OG trả 200 công khai.
- [x] Đã kiểm tra 75 tổ hợp gồm 15 loại trang ở 320, 375, 768, 1024 và 1440 px; kiểm tra xác nhận bổ sung các template chính ở 1920 px. Sau bản vá, tràn ngang bằng 0 tại cả 320/375/768/1024/1440/1920 px.
- [x] Menu mobile, submenu, quốc gia và filter mobile đã được sửa/test; vùng bấm menu tối thiểu 48px.
- [x] Đã kiểm tra và sửa riêng breakpoint trung gian 800/820/880/912/991/1024/1199px: PDP xếp một cột, ảnh gallery chính rộng đủ 100%, heading dài co theo tablet; từ 1200px trở lên trở lại bố cục desktop hai cột.
- [x] CSS của các trang mẫu đều tải thành công; không còn trạng thái chờ dịch; hình ảnh và vùng nội dung chính hiển thị ở các template có nội dung.
- [~] Script CDN Boost Commerce còn phát sinh lỗi Promise không chặn giao diện khi tìm template Shopify cũ; bộ lọc và danh sách sản phẩm vẫn hoạt động. Retest sau khi cấu hình lại/xóa tích hợp CDN trên host.
- [ ] Test CTA/hotline/giá không bị popup che; test bàn phím, focus và form ở production.
- [ ] [HOST] PageSpeed/Lighthouse mobile và desktop: trang chủ, danh mục và ít nhất 3 sản phẩm/template chính.
- [ ] [HOST] Mục tiêu LCP ≤2,5s, INP ≤200ms, CLS ≤0,1 tại p75; không dùng một lần lab làm bằng chứng duy nhất.
- [ ] [HOST] Tối ưu TTFB, hero/preload, CSS/JS chặn render, long task, font/banner; bật cache, Brotli/Gzip, CDN ảnh.
- [ ] [GSC] Theo dõi Core Web Vitals field data khi đủ dữ liệu; test lại sau đổi theme/plugin/tag.

## 11. QA hành trình và crawl kỹ thuật

- [x] Menu desktop/mobile và bộ lọc mobile đã test bằng trình duyệt tự động.
- [ ] Search nội bộ: kết quả, bàn phím và không tạo URL index rác.
- [ ] Form liên hệ: validation→backend→email/CRM nhận thật; không chỉ đo click/báo thành công.
- [ ] Nút điện thoại/Zalo/Messenger/WhatsApp đúng số/tài khoản và hoạt động trên thiết bị thật.
- [ ] Nếu dùng: đăng ký, đăng nhập, khôi phục mật khẩu.
- [ ] Nếu dùng: giỏ hàng, mã giảm giá, vận chuyển, checkout và payment bằng đơn test.
- [ ] Trang 404 có status thật và điều hướng hợp lý.
- [ ] Không còn lorem ipsum, chữ test, placeholder, link `#`, domain staging hoặc điều hướng về domain gốc.
- [ ] Test Chrome desktop và Chrome/Safari mobile thật.
- [ ] Crawl production tìm 404/5xx, redirect chain, tham số bất thường, title/H1 trống/trùng, canonical/noindex sai, asset lỗi/mixed content, internal link tới redirect/404 và orphan page.
- [ ] Lưu ảnh headers của ít nhất 5 URL; URL mẫu tối thiểu: home, danh mục, 3 sản phẩm khác template, bài viết, Giới thiệu, Liên hệ, bảo hành/đổi trả, 404, redirect cũ, robots, sitemap index và sitemap con.
- [ ] Test cả có và không JavaScript; nếu HTML đầu không có nội dung thương mại quan trọng thì phải giải trình hoặc SSR/pre-render.

## 12. GA4 — làm sau khi có host và Measurement ID

- [ ] Tạo/chọn đúng GA4 Property và Web Data Stream cho URL production.
- [ ] Cân nhắc Enhanced Measurement theo nhu cầu/consent.
- [ ] Chọn một luồng cài: Google tag trực tiếp **hoặc** qua GTM; không cài trùng gây nhân đôi page_view/event.
- [ ] Realtime nhận đúng một `page_view` khi mở trang bằng cửa sổ test.
- [ ] Thiết kế/test mỗi event đúng thời điểm, đúng tham số, không lặp: `generate_lead`, `form_submit`, `click_phone`, `click_zalo`.
- [ ] Ecommerce nếu thực sự dùng: `view_item`, `add_to_cart`, `begin_checkout`, `purchase`.
- [ ] Content nếu áp dụng: `sign_up`, `newsletter_signup`, `file_download`, `video_start`.
- [ ] Lead form xuất hiện một lần sau gửi thành công thật; phone/Zalo chỉ bắn khi click.
- [ ] Purchase có `transaction_id`, `value`, currency/items đúng và không bắn lại khi refresh.
- [ ] Đối soát lead/purchase GA4 với CRM/đơn hàng, không chỉ nhìn Realtime.

## 13. GTM và conversion tracking — làm sau khi có host/container

- [ ] Tạo GTM Account + Web Container đúng doanh nghiệp.
- [ ] Cài snippet GTM đầu tiên càng cao càng tốt trong `<head>` và noscript ngay sau `<body>`.
- [ ] Không chèn `GTM-XXXX`/ID placeholder vào production.
- [ ] Preview/Tag Assistant trên domain production; kiểm tra consent/ad blocker nếu tag không chạy.
- [ ] Thêm Google tag đúng Tag ID và trigger; test từng tag/event trước Publish.
- [ ] Quy ước tên: `TAG - GA4 - Google Tag`, `TAG - GA4 - Generate Lead`, `TRG - Form - Success`, `TRG - Click - Phone`, `VAR - DL - transaction_id`.
- [ ] Publish version với ngày + nội dung thay đổi + người thực hiện; lưu ảnh/version bằng chứng.

## 14. Google Search Console và indexing — sau khi có domain

- [ ] Tạo Domain Property bằng domain không kèm protocol/path; xác minh TXT DNS. Chỉ dùng URL-prefix khi có lý do.
- [ ] Thêm ít nhất hai owner/admin phù hợp; lưu property verified, email owner và ngày xác minh.
- [ ] Submit `sitemap_index.xml`; trạng thái Success và số URL discovered hợp lý.
- [ ] URL Inspection cho home, danh mục, sản phẩm chính và 1–2 bài viết: crawl/index allowed, canonical đúng.
- [ ] Live Test sau sửa; Request Indexing chỉ cho URL quan trọng, không coi là bảo đảm index.
- [ ] Xử lý đúng nguyên nhân: robots block, noindex, duplicate canonical, crawled/discovered not indexed, 5xx.
- [ ] Theo dõi hàng tuần: Performance, Page indexing, sitemap; hàng tháng: CWV; kiểm tra Manual actions/Security issues khi bất thường.
- [ ] Hiểu “URL is on Google” không bảo đảm luôn hiển thị/xếp hạng cho mọi truy vấn.

## 15. Bing Webmaster Tools và IndexNow

- [ ] Verify site trên Bing Webmaster Tools, submit sitemap và theo dõi crawl/index/SEO reports.
- [ ] Nếu nội dung cập nhật thường xuyên, tạo key IndexNow đúng domain và submit URL mới/sửa/xóa.
- [ ] Không coi IndexNow là bảo đảm index/xếp hạng.

## 16. Security, HTTPS, dữ liệu nhạy cảm và backup

- [x] `WP_DEBUG` local hiện `false`; xác nhận lại production và không hiển thị lỗi chi tiết.
- [ ] [HOST] TLS tự gia hạn, HTTP→HTTPS, không mixed content.
- [ ] Admin không dùng mật khẩu mặc định; mật khẩu mạnh, MFA nếu hỗ trợ; quyền theo vai trò.
- [ ] Cập nhật WordPress/plugin/theme/dependency; loại plugin không dùng.
- [ ] Không public `.env`, `.env.production`, `backup.zip`, `database.sql`, `config.php.bak`, `debug.log`, `.git/`, `old-site.zip`.
- [!] Hai PDF nội bộ đang nằm trong thư mục theme; trước production phải chuyển khỏi webroot hoặc chặn truy cập trực tiếp.
- [ ] Kiểm tra HSTS, CSP, X-Content-Type-Options, Referrer-Policy, frame-ancestors/X-Frame-Options; không copy CSP cứng khi chưa test font/script/payment.
- [ ] Backup database tự động + retention; backup files/uploads; ít nhất một bản off-site.
- [ ] Mã hóa/giới hạn quyền backup; có runbook ai restore, ở đâu, thứ tự nào.
- [ ] Thử restore định kỳ trên môi trường an toàn. Có file backup nhưng chưa test restore = chưa đạt.

## 17. Merchant Center và tối ưu P2

- [ ] [P2] Merchant Center/feed chỉ triển khai khi giá, currency, availability, shipping và return policy đã sẵn sàng và khớp frontend/schema.
- [ ] [P2] ProductGroup cho biến thể phức tạp khi có dữ liệu chuẩn.
- [ ] [P2] Bổ sung bài hướng dẫn, so sánh và trải nghiệm thực tế; tăng internal link và giá trị riêng thay vì sao chép hãng.
- [ ] [P2] Theo dõi GSC, Bing, crawler log và Core Web Vitals thực tế sau index.

## 18. Lịch vận hành sau launch

### Trong 24 giờ

- [ ] Hoàn tất 100% P0; GSC verified + sitemap submitted.
- [ ] URL Inspection home, danh mục/sản phẩm chính và 1–2 bài viết.
- [ ] GA4 Realtime + conversion chính; form/checkout/contact end-to-end.
- [ ] Crawl 404/5xx/redirect/noindex/canonical; tạo backup đầu tiên sau launch.

### Sau 7 ngày

- [ ] Rà Page indexing, query/impression ban đầu, URL quan trọng chưa index và lý do.
- [ ] Rà schema/rich result errors; đối soát lead/purchase với CRM/đơn hàng.
- [ ] Test performance lại sau khi cài tag/plugin production.

### Sau 30 ngày

- [ ] So sánh landing page theo click, impression, CTR, conversion.
- [ ] Rà index quality: URL cần index chưa index và URL rác bị index.
- [ ] Rà CWV field data, 404 từ backlink/link cũ, backup/restore runbook và update dependency.
- [ ] Lập backlog technical SEO/content tháng tiếp theo.

### Hàng tháng

- [ ] Search: performance, indexing, sitemap, manual actions, security issues.
- [ ] Tracking: event/conversion và đối soát CRM/đơn hàng.
- [ ] Technical: 404/5xx, redirect, canonical, robots/noindex, sitemap quality.
- [ ] Performance: CWV/tốc độ template; Security: update, access, backup, log/cảnh báo.
- [ ] Content: trang tăng/giảm traffic, nội dung cũ, internal link và CTR.

## 19. Hồ sơ bàn giao bắt buộc

- [ ] Domain, hosting, CDN, DNS, production/staging và người quản lý.
- [ ] Quy tắc URL/canonical/redirect/trailing slash/www.
- [ ] Link robots, sitemap index/con, nơi cấu hình Yoast sitemap.
- [ ] URL map: URL, loại trang, title, H1, canonical, index, schema.
- [ ] Rich Results Test/Schema Validator theo template; URL Inspection Live Test theo URL mẫu.
- [ ] PageSpeed mobile/desktop; bot/CDN/WAF rules và quyết định GPTBot.
- [ ] Plugin/module SEO và vị trí cấu hình title/schema/sitemap/redirect.
- [ ] Quyền GSC, GA4, GTM, Merchant Center, Bing nếu có; tối thiểu hai owner phù hợp.
- [ ] Danh sách lỗi P1/P2 còn lại, người phụ trách và deadline.
- [ ] Hướng dẫn backup, restore, rollback và retest sau cập nhật.

## 20. Cổng ký nghiệm thu production

- [ ] [P0] Không password/maintenance/CAPTCHA/geoblock trên nội dung public; không robots `Disallow: /`/noindex/nosnippet nhầm.
- [ ] [P0] Không 4xx/5xx/loop/soft-404 ở URL quan trọng; canonical không trỏ staging/sai domain/home hàng loạt.
- [ ] [P0] Sitemap không staging/noindex/redirect/404 và mở được; bot hợp lệ không bị 403/429/challenge.
- [ ] [P0] Nội dung sản phẩm có trong HTML server; title/H1/schema đúng hãng/model.
- [ ] [P0] Brand/seller/manufacturer đúng vai trò; không GTIN/MPN/review/rating giả.
- [ ] [P0] Giá/tồn kho schema khớp frontend/feed nếu dùng Offer; HTTPS/assets SEO không lỗi.
- [ ] [P0] Liên hệ/pháp nhân tối thiểu nhất quán.
- [ ] [P1] Mỗi template đủ title/description/H1/self-canonical, WebSite/OnlineStore/Product/Breadcrumb phù hợp và 0 critical schema error.
- [ ] [P1] Favicon/site name/OG/internal link/ảnh/footer/chính sách/mobile đạt.
- [ ] [P1] GSC verified, sitemap Success, URL mẫu vượt Live Test.
- [ ] [P1] GA4/GTM và conversion đã test, không nhân đôi.
- [ ] [P1] 100% URL mẫu status/canonical đúng; 100% brand/model/seller/giá/tồn kho khớp; 0 P0.
- [ ] Footer, pháp nhân, liên hệ, chính sách được quản lý duyệt; toàn bộ bằng chứng/quyền/backlog đã bàn giao.

## Bằng chứng và công cụ local

- Audit toàn sitemap: `node tools/audit-seo-handover.js`.
- Audit responsive: `node tools/audit-responsive-matrix.js`.
- Audit menu mobile: `node tools/audit-mobile-menu.js`.
- Audit filter mobile: `node tools/audit-filter-mobile.js`.
- Audit điều hướng ra ngoài: `node tools/audit-external-navigation.js`.
- Kiểm tra PHP: dùng PHP 8.3 của Local với `-l functions.php` và các file PHP đã sửa.
- Production cần bổ sung: curl/View Source, DevTools, GSC URL Inspection, Rich Results Test, Schema Validator, PageSpeed, Bing và WAF/CDN logs.
