# Ghi chú dự án Smith Optics

Theme WordPress dành cho site Smith Optics, sử dụng WooCommerce.

## Khởi chạy tại Local

1. Tạo site WordPress trong Local by Flywheel.
2. Đặt thư mục theme này vào `app/public/wp-content/themes/theme_smith`.
3. Cài và kích hoạt WooCommerce cùng các plugin mà website sử dụng.
4. Mở **Appearance → Themes** và kích hoạt **Smith Optics**.
5. Nhập database và uploads của website nếu cần dữ liệu sản phẩm, trang và media giống môi trường gốc. Mã theme không bao gồm database WordPress.

Theme đọc danh mục từ `assets/products_index.json`, dữ liệu bộ sưu tập từ `assets/collections_catalog.json`, và nội dung trang/sản phẩm đã lưu ở thư mục `snapshots/`.

## Nội dung không đưa lên GitHub

File sao lưu `.bak`, cache sản phẩm có thể tái tạo, ảnh chụp/audit, kết quả test, file cục bộ và snapshot lớn hơn 90 MB được loại khỏi repo. Các snapshot quá lớn có thể được lấy lại từ database/nguồn dữ liệu website trước khi triển khai.
