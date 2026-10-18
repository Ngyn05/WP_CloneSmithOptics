(function () {
  'use strict';
  var buttons = document.querySelectorAll('.size-chart-button');
  if (!buttons.length) return;
  var title = String(document.querySelector('.product__title')?.textContent || '').toLowerCase();
  var sizes = [...document.querySelectorAll('input[type="radio"]')].map(function (input) { return input.value; }).join(' ').toLowerCase();
  var helmet = /mips|helmet|mũ bảo hiểm/.test(title);
  var apparel = /shirt|jersey|hoodie|pant|sock|áo|quần/.test(title);
  function content() {
    if (helmet) return '<p>Đo chu vi vòng đầu tại vị trí rộng nhất, cao hơn lông mày khoảng 2,5 cm.</p><table><thead><tr><th>Kích thước</th><th>Chu vi vòng đầu</th></tr></thead><tbody><tr><td>XS</td><td>48–52 cm</td></tr><tr><td>S</td><td>51–55 cm</td></tr><tr><td>M</td><td>55–59 cm</td></tr><tr><td>L</td><td>59–63 cm</td></tr><tr><td>XL</td><td>61–65 cm</td></tr></tbody></table>';
    if (apparel || /\bxs\b|\bxl\b/.test(sizes)) return '<p>Đo sát cơ thể và chọn cỡ lớn hơn nếu số đo nằm giữa hai kích thước.</p><table><thead><tr><th>Kích thước</th><th>Vòng ngực</th><th>Vòng eo</th></tr></thead><tbody><tr><td>XS</td><td>81–86 cm</td><td>66–71 cm</td></tr><tr><td>S</td><td>86–94 cm</td><td>71–79 cm</td></tr><tr><td>M</td><td>94–102 cm</td><td>79–86 cm</td></tr><tr><td>L</td><td>102–109 cm</td><td>86–94 cm</td></tr><tr><td>XL</td><td>109–117 cm</td><td>94–102 cm</td></tr></tbody></table>';
    return '<p>Chọn độ vừa vặn dựa trên chiều rộng khuôn mặt và mức độ che phủ mong muốn.</p><table><thead><tr><th>Độ vừa vặn</th><th>Phù hợp</th></tr></thead><tbody><tr><td>Nhỏ</td><td>Khuôn mặt hẹp</td></tr><tr><td>Trung bình</td><td>Khuôn mặt trung bình</td></tr><tr><td>Lớn</td><td>Khuôn mặt rộng</td></tr></tbody></table>';
  }
  function open() {
    var modal = document.querySelector('.smith-size-modal');
    if (!modal) {
      modal = document.createElement('div');
      modal.className = 'smith-size-modal';
      modal.innerHTML = '<div class="smith-size-backdrop"></div><section class="smith-size-dialog" role="dialog" aria-modal="true" aria-label="Bảng kích thước"><div class="smith-size-heading"><strong>BẢNG KÍCH THƯỚC</strong><button type="button" aria-label="Đóng bảng kích thước">×</button></div><div class="smith-size-content">' + content() + '</div></section>';
      document.body.appendChild(modal);
      var close = function () { modal.classList.remove('is-open'); document.documentElement.classList.remove('smith-size-open'); };
      modal.querySelector('.smith-size-heading button').addEventListener('click', close);
      modal.querySelector('.smith-size-backdrop').addEventListener('click', close);
      document.addEventListener('keydown', function (event) { if (event.key === 'Escape' && modal.classList.contains('is-open')) close(); });
    }
    modal.classList.add('is-open');
    document.documentElement.classList.add('smith-size-open');
  }
  buttons.forEach(function (button) {
    if (button.dataset.smithSizeReady) return;
    button.dataset.smithSizeReady = '1';
    button.addEventListener('click', function (event) { event.preventDefault(); event.stopPropagation(); open(); });
  });
})();
