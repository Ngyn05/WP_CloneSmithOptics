(function () {
  'use strict';
  var section = document.querySelector('.smith-product-reviews');
  if (!section || section.dataset.reviewReady) return;
  section.dataset.reviewReady = '1';
  section.querySelector('.smith-review-open')?.addEventListener('click', function () {
    var form = section.querySelector('.smith-review-form');
    form.hidden = !form.hidden;
    if (!form.hidden) form.querySelector('input[name="author"]')?.focus();
  });
  section.querySelector('.smith-review-form')?.addEventListener('submit', async function (event) {
    event.preventDefault();
    var form = event.currentTarget;
    var submit = form.querySelector('.smith-review-submit');
    var message = form.querySelector('.smith-review-message');
    submit.disabled = true;
    message.textContent = 'Đang gửi đánh giá…';
    try {
      var response = await fetch('/wp-admin/admin-ajax.php', { method: 'POST', body: new FormData(form), credentials: 'same-origin' });
      var payload = await response.json();
      if (!payload.success) throw new Error(payload.data?.message || 'Không thể gửi đánh giá.');
      document.querySelectorAll('.smith-review-count').forEach(function (node) { node.textContent = '(' + payload.data.count + ' đánh giá)'; });
      document.querySelectorAll('.smith-rating-stars').forEach(function (node) { node.style.setProperty('--smith-rating', (payload.data.average * 20) + '%'); node.setAttribute('aria-label', payload.data.average + ' trên 5 sao'); });
      section.querySelector('.smith-review-empty')?.setAttribute('hidden', '');
      section.querySelector('.smith-review-list')?.insertAdjacentHTML('afterbegin', payload.data.html);
      section.querySelector('.smith-review-open').textContent = 'GỬI ĐÁNH GIÁ';
      form.reset();
      message.textContent = payload.data.message;
    } catch (error) {
      message.textContent = error.message;
    } finally {
      submit.disabled = false;
    }
  });
})();
