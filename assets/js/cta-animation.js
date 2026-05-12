/**
 * CTA アニメーション
 * - FV以外の .common-cta-unit: スクロール発火でフェードインUp
 * - .hero-btn-custom 全箇所: フェードイン完了後にpulse（繰り返し）
 */
document.addEventListener('DOMContentLoaded', function () {
    if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') return;
    gsap.registerPlugin(ScrollTrigger);

    // FV以外の common-cta-unit にスクロール発火フェードイン
    const ctaUnits = document.querySelectorAll('.common-cta-unit');

    ctaUnits.forEach(function (unit) {
        // FV内（.hero-section 配下）はスキップ
        if (unit.closest('.hero-section')) return;

        gsap.from(unit, {
            opacity: 0,
            y: 24,
            duration: 0.7,
            ease: 'power2.out',
            scrollTrigger: {
                trigger: unit,
                start: 'top 80%',
                once: true,
            },
            onComplete: function () {
                startPulse(unit.querySelector('.hero-btn-custom'));
            }
        });
    });

    // FV内のボタンは fv-animation 完了後に pulse 開始
    const fvBtn = document.querySelector('.hero-section .hero-btn-custom');
    if (fvBtn) {
        gsap.delayedCall(1.8, function () {
            startPulse(fvBtn);
        });
    }

    // pulse: 微細なスケールアップ→戻る（繰り返し）
    function startPulse(btn) {
        if (!btn) return;
        gsap.to(btn, {
            scale: 1.03,
            duration: 0.7,
            ease: 'sine.inOut',
            yoyo: true,
            repeat: -1,
            repeatDelay: 1.5,
        });
    }
});
