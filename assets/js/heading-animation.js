/**
 * Section Heading — スクロール発火フェードインアニメーション
 * .lp-sec-header-title の各h2が表示領域に入ったタイミングで個別発火
 */
document.addEventListener('DOMContentLoaded', function () {
    if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') return;
    gsap.registerPlugin(ScrollTrigger);

    const headings = document.querySelectorAll('.lp-sec-header-title');
    if (headings.length === 0) return;

    headings.forEach(function (heading) {
        gsap.from(heading, {
            opacity: 0,
            y: 20,
            duration: 0.7,
            ease: 'power2.out',
            scrollTrigger: {
                trigger: heading,
                start: 'top 80%',
                once: true,
            }
        });
    });
});
