document.addEventListener("DOMContentLoaded", function () {
  if (typeof gsap === "undefined" || typeof ScrollTrigger === "undefined")
    return;

  gsap.registerPlugin(ScrollTrigger);

  const section = document.querySelector(".js-scroll-story-trigger");
  const blocks = document.querySelectorAll(".story-block");
  const bgImages = document.querySelectorAll(
    ".js-scroll-story-bgs .floating-img",
  );

  if (!section || blocks.length === 0) return;

  // 初期状態を明示設定（filter: blur を廃止 → opacity + y のみ）
  gsap.set(blocks, { autoAlpha: 0 });
  blocks.forEach((block) => {
    gsap.set(block.querySelectorAll(".story-line"), {
      opacity: 0,
      y: 16,
      filter: "none", // CSSに残存するblur(12px)をインラインスタイルで上書き
      force3D: true,
    });
  });

  // --- タイムライン作成 ---
  const tl = gsap.timeline({
    scrollTrigger: {
      trigger: section,
      start: "top top",
      end: `+=${blocks.length * 100}%`,
      scrub: 1,
      pin: true,
      anticipatePin: 1,
    },
  });

  // ==========================================
  // A. テキストブロックのアニメーション
  //    blur 廃止 → opacity + translateY のみ（Composite層のみで処理）
  // ==========================================
  blocks.forEach((block, index) => {
    const lines = block.querySelectorAll(".story-line");

    tl.to(block, { autoAlpha: 1, duration: 0.2 });

    // 1行ずつフェードイン（blur なし → GPU Composite のみ）
    lines.forEach((line) => {
      tl.to(
        line,
        {
          opacity: 1,
          y: 0,
          duration: 1,
          ease: "power2.out",
          force3D: true,
        },
        ">-0.5",
      );
    });

    // 読ませるための「溜め」
    tl.to({}, { duration: 2 });

    // フェードアウト（blur なし → autoAlpha のみ）
    if (index < blocks.length - 1) {
      tl.to(block, {
        autoAlpha: 0,
        duration: 0.8,
        ease: "power2.inOut",
      });
    }
  });

  // ==========================================
  // B. 背景画像パララックス
  //    transform: translateY のみ（Composite層 → GPU負荷ほぼゼロ）
  //    各画像をスクロール全域に均等分散して出現させる
  // ==========================================
  const totalDuration = tl.duration();
  const imgCount = bgImages.length;
  const slotSize = totalDuration / imgCount;   // 1枚あたりのスロット幅
  const imgDuration = slotSize * 2.5;           // 1枚が画面を通過する時間（2.5スロット分）

  bgImages.forEach(function (img, i) {
    var start = i * slotSize;
    tl.fromTo(
      img,
      { y: "80vh", autoAlpha: 0, force3D: true },
      { y: "-80vh", autoAlpha: 0.15, ease: "none", duration: imgDuration, force3D: true },
      start,
    );
  });
});
