document.addEventListener("DOMContentLoaded", function () {
  if (typeof gsap === "undefined") return;

  document.querySelectorAll(".ai-examples-wrap").forEach(function (wrap) {
    const buttons = wrap.querySelectorAll(".tab-btn");
    const contents = wrap.querySelectorAll(".tab-content-box");

    if (buttons.length === 0 || contents.length === 0) return;

    let isAnimating = false;

    // --- 初期化：最初のコンテンツのみ表示 ---
    contents.forEach(function (content, i) {
      gsap.set(content, i === 0
        ? { display: "flex", opacity: 1 }
        : { display: "none",  opacity: 0 }
      );
    });

    buttons.forEach(function (btn, nextIndex) {
      btn.addEventListener("click", function () {
        if (btn.classList.contains("is-active") || isAnimating) return;

        // 現在アクティブなインデックスを特定
        let currentIndex = 0;
        buttons.forEach(function (b, i) {
          if (b.classList.contains("is-active")) currentIndex = i;
        });

        if (!contents[nextIndex]) return;

        isAnimating = true;

        // --- ボタン切り替え ---
        buttons.forEach(function (b) { b.classList.remove("is-active"); });
        btn.classList.add("is-active");

        const currentContent = contents[currentIndex];
        const nextContent    = contents[nextIndex];

        // Step1: 旧コンテンツをフェードアウト
        gsap.to(currentContent, {
          opacity: 0,
          duration: 0.2,
          ease: "power2.in",
          onComplete: function () {
            // フェードアウト完了後に非表示化 → レイアウトから除外
            gsap.set(currentContent, { display: "none" });

            // Step2: 新コンテンツをフェードイン（この時点でドキュメントに1枚だけ存在）
            gsap.set(nextContent, { display: "flex", opacity: 0 });
            gsap.to(nextContent, {
              opacity: 1,
              duration: 0.3,
              ease: "power2.out",
              onComplete: function () {
                isAnimating = false;
              },
            });
          },
        });
      });
    });
  });
});
