document.addEventListener("DOMContentLoaded", function () {
  document.querySelectorAll(".js-faq-toggle").forEach(function (btn) {
    btn.addEventListener("click", function () {
      const item = btn.closest(".faq-item");
      if (!item) return;

      const isOpen = item.classList.contains("is-open");

      // 開閉トグル
      item.classList.toggle("is-open", !isOpen);
      btn.setAttribute("aria-expanded", String(!isOpen));
    });
  });
});
