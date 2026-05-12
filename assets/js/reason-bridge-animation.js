/**
 * Reason Bridge Section — ナラティブ順次フェードインアニメーション
 * ① text-top → ② text-ai-large → ③ text-declare → ④ highlight-box
 */
document.addEventListener('DOMContentLoaded', function () {
    if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') return;
    gsap.registerPlugin(ScrollTrigger);

    const section = document.querySelector('.reason-bridge-section');
    if (!section) return;

    const textTop     = section.querySelector('.text-top');
    const textAi      = section.querySelector('.text-ai-large');
    const textDeclare = section.querySelector('.text-declare');
    const highlight   = section.querySelector('.highlight-box');

    const elements = [textTop, textAi, textDeclare, highlight].filter(Boolean);
    if (elements.length === 0) return;

    const tl = gsap.timeline({
        scrollTrigger: {
            trigger: section,
            start: 'top 85%',  // 早めに発火
            once: true,
        }
    });

    // ① text-top：フェードインUp
    tl.from(textTop, {
        opacity: 0,
        y: 16,
        duration: 0.5,
        ease: 'power2.out',
    })

    // ② text-ai-large：フェードインUp + スケール（存在感を強調）
    .from(textAi, {
        opacity: 0,
        y: 16,
        scale: 0.9,
        duration: 0.5,
        ease: 'power2.out',
    }, '+=0.05')

    // ③ text-declare：フェードインUp
    .from(textDeclare, {
        opacity: 0,
        y: 12,
        duration: 0.4,
        ease: 'power2.out',
    }, '+=0.05')

    // ④ highlight-box：フェードインUp → スケールポップ
    .from(highlight, {
        opacity: 0,
        y: 16,
        duration: 0.4,
        ease: 'power2.out',
    }, '+=0.08')
    .from(highlight, {
        scale: 0.96,
        duration: 0.35,
        ease: 'back.out(2)',
    }, '<');
});
