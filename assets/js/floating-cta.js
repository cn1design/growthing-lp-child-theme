document.addEventListener("DOMContentLoaded", function () {
  const floatingCta = document.querySelector(".floating-cta");
  const sentinel = document.querySelector("#js-floating-sentinel");

  if (!floatingCta || !sentinel) return;

  const observer = new IntersectionObserver(
    function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          // 番兵が見えている = まだ96px未満しかスクロールしていない → 非表示
          floatingCta.classList.remove("is-visible");
        } else {
          // 番兵が見切れた = 96px以上スクロール済み → 表示
          floatingCta.classList.add("is-visible");
        }
      });
    },
    { threshold: 0 },
  );

  observer.observe(sentinel);
});
