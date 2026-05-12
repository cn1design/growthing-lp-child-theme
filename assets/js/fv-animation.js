/**
 * FV（ヒーローセクション）— ページロード後アニメーション
 * PC: 要素別に段階的登場 / SP: タイトル+ローリエ+バッジを1ブロックとして登場
 */
document.addEventListener('DOMContentLoaded', function () {
    if (typeof gsap === 'undefined') return;

    const isSP = window.matchMedia('(max-width: 1024px)').matches;

    const bg         = document.querySelector('.hero-bg-image');
    const titleArea  = document.querySelector('.hero-title-area');
    const cards      = document.querySelector('.hero-cards');
    const cardItems  = document.querySelectorAll('.hero-cards picture');
    const mainCopySp = document.querySelector('.hero-main-copy-sp-area');
    const ctaUnit    = document.querySelector('.hero-cta-unit');
    const badge      = document.querySelector('.hero-badge-off');

    // 背景は PC/SP 共通：即時フェードイン
    if (bg) {
        gsap.from(bg, { opacity: 0, duration: 0.8, ease: 'power2.out' });
    }

    if (isSP) {
        // ----------------------------
        // SP: タイトル+ローリエを1ブロックで登場
        // ----------------------------
        const spBlock = [titleArea, cards, mainCopySp].filter(Boolean);
        if (spBlock.length) {
            gsap.from(spBlock, {
                opacity: 0,
                y: 24,
                duration: 0.7,
                ease: 'power2.out',
                delay: 0.3,
            });
        }

        // CTA + 経産省ロゴ + バッジ
        if (ctaUnit) {
            gsap.from(ctaUnit, {
                opacity: 0,
                y: 20,
                duration: 0.6,
                ease: 'power2.out',
                delay: 0.8,
            });
        }

    } else {
        // ----------------------------
        // PC: 要素別に段階的登場
        // ----------------------------

        // ① タイトル
        if (titleArea) {
            gsap.from(titleArea, {
                opacity: 0,
                y: 24,
                duration: 0.6,
                ease: 'power2.out',
                delay: 0.2,
            });
        }

        // ② ローリエ3枚：左から順にstagger
        if (cardItems.length) {
            gsap.from(cardItems, {
                opacity: 0,
                x: -16,
                duration: 0.4,
                ease: 'power2.out',
                stagger: 0.15,
                delay: 0.6,
            });
        }

        // ③ CTAボタン
        if (ctaUnit) {
            gsap.from(ctaUnit, {
                opacity: 0,
                y: 20,
                duration: 0.5,
                ease: 'power2.out',
                delay: 1.0,
            });
        }

        // ④ バッジ：最後にスケールポップ
        if (badge) {
            gsap.from(badge, {
                opacity: 0,
                scale: 0.75,
                duration: 0.4,
                ease: 'back.out(1.5)',
                delay: 1.2,
            });
        }
    }
});
