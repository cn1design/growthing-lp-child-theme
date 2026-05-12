<?php

// =========================================
// 親テーマスタイルの読み込み
// =========================================
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style(
        'parent-style',
        get_template_directory_uri() . '/style.css'
    );
});


// =========================================
// AIキャリア・アカデミー LP 専用アセット
// =========================================

function ai_career_academy_enqueue_styles() {
    $css_dir = get_stylesheet_directory_uri() . '/assets/css/';
    $css_path = get_stylesheet_directory() . '/assets/css/lp-main.css';
    $version = file_exists( $css_path ) ? filemtime( $css_path ) : '1.0.0';

    // 1. Google Fonts の読み込み（既存）
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&family=Noto+Serif+JP:wght@400;700&family=Roboto:wght@400;700&display=swap', array(), null );

    // ★ ここを追加！ Material Symbols の読み込み
    wp_enqueue_style( 'material-symbols', 'https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined', array(), null );

    // 2. メインCSS（全SCSSが合体した最強の1ファイル）
    wp_enqueue_style( 'lp-main', $css_dir . 'lp-main.css', array(), $version );
}
add_action( 'wp_enqueue_scripts', 'ai_career_academy_enqueue_styles' );

// =========================================
// スクリプトとスタイルの読み込み
// =========================================

function enqueue_lp_scripts() {
    // ★修正1：get_template_directory_uri() から get_stylesheet_directory_uri() に変更
    $theme_uri = get_stylesheet_directory_uri();

    // 1. GSAP本体とScrollTriggerをCDNから読み込み（依存関係の解決のため）
    wp_enqueue_script('gsap-cdn', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js', array(), null, true);
    wp_enqueue_script('gsap-scroll-trigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js', array('gsap-cdn'), null, true);

    // 2. カスタムスクリプトの読み込み（GSAPに依存させる）
    wp_enqueue_script(
        'scroll-story-script',
        $theme_uri . '/assets/js/scroll-story.js',
        array('gsap-cdn', 'gsap-scroll-trigger'),
        // ★修正2：get_template_directory() から get_stylesheet_directory() に変更
        filemtime(get_stylesheet_directory() . '/assets/js/scroll-story.js'),
        true
    );

    // 3. タブ切り替えスクリプト（GSAPのフェードアニメーションを使用）
    wp_enqueue_script(
        'tab-switch-script',
        $theme_uri . '/assets/js/tab-switch.js',
        array('gsap-cdn'),
        filemtime(get_stylesheet_directory() . '/assets/js/tab-switch.js'),
        true
    );

    // 4. FAQアコーディオン
    wp_enqueue_script(
        'faq-accordion-script',
        $theme_uri . '/assets/js/faq-accordion.js',
        array(),
        filemtime(get_stylesheet_directory() . '/assets/js/faq-accordion.js'),
        true
    );

    // 5. フローティングCTA（IntersectionObserver）
    wp_enqueue_script(
        'floating-cta-script',
        $theme_uri . '/assets/js/floating-cta.js',
        array(),
        filemtime(get_stylesheet_directory() . '/assets/js/floating-cta.js'),
        true
    );

    // 5-b. 動画 ビューポート連動 再生/停止（IntersectionObserver）
    wp_enqueue_script(
        'video-observer-script',
        $theme_uri . '/assets/js/video-observer.js',
        array(),
        filemtime(get_stylesheet_directory() . '/assets/js/video-observer.js'),
        true
    );

    // 6. FVアニメーション（ページロード後・PC/SP分岐）
    wp_enqueue_script(
        'fv-animation-script',
        $theme_uri . '/assets/js/fv-animation.js',
        array('gsap-cdn'),
        filemtime(get_stylesheet_directory() . '/assets/js/fv-animation.js'),
        true
    );

    // 9. リーズン・ブリッジ ナラティブアニメーション
    wp_enqueue_script(
        'reason-bridge-animation-script',
        $theme_uri . '/assets/js/reason-bridge-animation.js',
        array('gsap-cdn', 'gsap-scroll-trigger'),
        filemtime(get_stylesheet_directory() . '/assets/js/reason-bridge-animation.js'),
        true
    );

    // 8. CTAアニメーション（スクロール発火フェードイン + pulse）
    wp_enqueue_script(
        'cta-animation-script',
        $theme_uri . '/assets/js/cta-animation.js',
        array('gsap-cdn', 'gsap-scroll-trigger'),
        filemtime(get_stylesheet_directory() . '/assets/js/cta-animation.js'),
        true
    );

    // 7. セクション見出し 一括フェードインアニメーション
    wp_enqueue_script(
        'heading-animation-script',
        $theme_uri . '/assets/js/heading-animation.js',
        array('gsap-cdn', 'gsap-scroll-trigger'),
        filemtime(get_stylesheet_directory() . '/assets/js/heading-animation.js'),
        true
    );

    // 7. 料金セクション アニメーション（GSAPのScrollTrigger使用）
    wp_enqueue_script(
        'pricing-animation-script',
        $theme_uri . '/assets/js/pricing-animation.js',
        array('gsap-cdn', 'gsap-scroll-trigger'),
        filemtime(get_stylesheet_directory() . '/assets/js/pricing-animation.js'),
        true
    );
}
add_action('wp_enqueue_scripts', 'enqueue_lp_scripts');
