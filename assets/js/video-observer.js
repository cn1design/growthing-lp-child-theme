/**
 * Video Observer — ビューポート連動 再生 / 停止制御
 * .js-observe-video を持つ video 要素を対象に
 * 20%以上表示されたら play()、外れたら pause()
 */
document.addEventListener('DOMContentLoaded', function () {
    const videos = document.querySelectorAll('video.js-observe-video');
    if (!videos.length) return;

    const observer = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                entry.target.play();
            } else {
                entry.target.pause();
            }
        });
    }, { threshold: 0.2 });

    videos.forEach(function (video) {
        observer.observe(video);
    });
});
