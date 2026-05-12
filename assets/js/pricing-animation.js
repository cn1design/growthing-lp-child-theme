/**
 * Pricing Section — スクロール発火アニメーション
 * 1. 料金カード：通常料金 → 補助金 → 実質負担額の順にフェードイン
 * 2. 補助金SVG：立方体グラフ ナラティブアニメーション
 */
document.addEventListener('DOMContentLoaded', function () {
    if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') return;
    gsap.registerPlugin(ScrollTrigger);

    // =============================================
    // 1. 料金カード（早期returnを IIFE に閉じ込め、他ブロックに影響させない）
    // =============================================
    (function () {
        const calc = document.querySelector('.pricing-calculation');
        if (!calc) return;

        const cardNormal  = calc.querySelector('.price-card.type-normal');
        const cardSubsidy = calc.querySelector('.price-card.type-subsidy');
        const cardResult  = calc.querySelector('.price-card.type-result');
        const symbols     = calc.querySelectorAll('.calc-symbol');

        if (!cardNormal || !cardSubsidy || !cardResult) return;

        const tl = gsap.timeline({
            scrollTrigger: {
                trigger: calc,
                start: 'top 75%',
                once: true,
            }
        });

        // ① 通常料金：フェードインUp
        tl.from(cardNormal, { opacity: 0, y: 24, duration: 0.6, ease: 'power2.out' })

        // ② 「ー」記号
          .from(symbols[0], { opacity: 0, duration: 0.25, ease: 'power2.out' }, '-=0.2')

        // ③ 補助金：フェードインUp
          .from(cardSubsidy, { opacity: 0, y: 24, duration: 0.6, ease: 'power2.out' }, '-=0.1')

        // ④ 「＝」記号
          .from(symbols[1], { opacity: 0, duration: 0.25, ease: 'power2.out' }, '-=0.2')

        // ⑤ 実質負担額：フェードインしながらスケールアップ → 元サイズへ
          .fromTo(cardResult,
              { opacity: 0, y: 24, scale: 1 },
              { opacity: 1, y:  0, scale: 1.06, duration: 0.5, ease: 'power2.out' },
              '-=0.1'
          )
          .to(cardResult, { scale: 1, duration: 0.4, ease: 'power3.inOut' });
    })();

    // =============================================
    // 2. 補助金 立方体グラフ SVGアニメーション
    // ① 左の高い棒が下から伸び上がる
    // ② 点線が左から右へ描画される
    // ③ ゴールド矢印が落下
    // ④ 右の小さい棒がポップイン
    // =============================================
    (function () {
        const subsidySvg = document.querySelector('.subsidy-svg');
        if (!subsidySvg) return;

        const boxLeft    = subsidySvg.querySelector('.box-left');
        const boxRight   = subsidySvg.querySelector('.box-right');
        const dottedLine = subsidySvg.querySelector('.dotted-line');
        const arrowGold  = subsidySvg.querySelector('.arrow-gold');

        if (!boxLeft || !boxRight || !dottedLine || !arrowGold) return;

        // 点線の全長を取得（dashoffset描画アニメーション用）
        // ★ stroke-dasharray を全長の単一ダッシュにしてdashoffsetで隠す
        //   （CSSの "6 5" パターンはオフセットが効かないため、GSAPで上書き）
        const lineLen = Math.ceil(dottedLine.getTotalLength());
        gsap.set(dottedLine, {
            strokeDasharray:  lineLen,
            strokeDashoffset: lineLen,
        });

        // 初期状態
        gsap.set(boxLeft,   { scaleY: 0, transformOrigin: '50% 100%' });
        gsap.set(boxRight,  { scale: 0,  transformOrigin: '50% 50%', opacity: 0 });
        gsap.set(arrowGold, { y: -20, opacity: 0 });

        const tl = gsap.timeline({
            scrollTrigger: {
                trigger: subsidySvg,
                start: 'top 80%',
                once: true,
            }
        });

        tl
        // ① 左ボックス：下から伸び上がる
        .to(boxLeft, { scaleY: 1, duration: 0.7, ease: 'power2.out' })

        // ② 点線：dashoffset 0に（描画完了後に点線パターンを復元）
        .to(dottedLine, {
            strokeDashoffset: 0,
            duration: 0.6,
            ease: 'power2.inOut',
            onComplete: function () {
                gsap.set(dottedLine, { strokeDasharray: '6 5', strokeDashoffset: 0 });
            },
        }, '+=0.1')

        // ③ 矢印：落下
        .to(arrowGold, { y: 0, opacity: 1, duration: 0.4, ease: 'back.out(1.5)' }, '-=0.1')

        // ④ 右ボックス：ポップイン
        .to(boxRight, { scale: 1, opacity: 1, duration: 0.5, ease: 'back.out(2)' }, '-=0.1');
    })();
});
