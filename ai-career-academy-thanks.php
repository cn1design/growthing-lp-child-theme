<?php
/**
 * Template Name: AIキャリア・アカデミー サンクス
 */

// =============================================
// 画像パス
// =============================================
$base   = get_stylesheet_directory_uri();
$img    = $base . '/assets/images/hero/';
$img_pc = $img . 'hero_pc/';
$img_sp = $img . 'hero_sp/';
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ご登録ありがとうございます | AIキャリア・アカデミー</title>
    <meta name="robots" content="noindex, nofollow">

    <!-- Google Tag Manager -->
    <script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-PZZRQWLP');
    </script>
    <!-- End Google Tag Manager -->

    <?php wp_head(); ?>
</head>

<body <?php body_class('lp-page lp-thanks-page'); ?>>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PZZRQWLP" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div class="lp-onetime-wrap">


        <!-- =========================================
             SECTION | サンクスメインコンテンツ
             ========================================= -->
        <section class="lp-sec-wrap thanks-section bg-navy">

            <!-- 背景画像（FVと同一素材・オーバーレイ処理） -->
            <div class="thanks-bg-image" aria-hidden="true">
                <img src="<?php echo esc_url($base . '/assets/images/thanks/thanks_bg.jpg'); ?>" alt="" loading="eager">
            </div>

            <div class="lp-container">
                <div class="lp-content thanks-content-inner">

                    <!-- チェックマークアイコン（ゴールドグラデーション） -->
                    <div class="thanks-icon-wrap" aria-hidden="true">
                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7 18L15 26L29 10" stroke="white" stroke-width="3.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </div>

                    <header class="lp-sec-header thanks-header">
                        <h1 class="lp-sec-header-title thanks-title">
                            LINEへのご登録<br>ありがとうございます。
                        </h1>
                        <p class="lp-sec-header-lead thanks-lead">
                            AIキャリア・アカデミーの無料キャリア相談会のご予約を承りました。<br>
                            まもなく、LINEにメッセージをお送りします。
                        </p>
                    </header>

                    <div class="thanks-steps-box bg-white">

                        <p class="thanks-steps-title">今後の流れ</p>

                        <ol class="thanks-steps-list">
                            <li class="thanks-step-item">
                                <div class="thanks-step-label">
                                    <span class="thanks-step-num">STEP 01</span>
                                    <span class="thanks-step-icon" aria-hidden="true">
                                        <img src="<?php echo esc_url($base . '/assets/images/thanks/thanks_01.png'); ?>"
                                            alt="" height="40" loading="lazy">
                                    </span>
                                </div>
                                <div class="thanks-step-body">
                                    <strong>LINEにご案内メッセージが届きます</strong>
                                    <p>登録後すぐに、相談会の詳細と日程調整のご案内をLINEにてお送りします。</p>
                                </div>
                            </li>
                            <li class="thanks-step-item">
                                <div class="thanks-step-label">
                                    <span class="thanks-step-num">STEP 02</span>
                                    <span class="thanks-step-icon" aria-hidden="true">
                                        <img src="<?php echo esc_url($base . '/assets/images/thanks/thanks_02.png'); ?>"
                                            alt="" height="40" loading="lazy">
                                    </span>
                                </div>
                                <div class="thanks-step-body">
                                    <strong>担当者より日程のご確認</strong>
                                    <p>ご都合の良い日時をお知らせください。完全オンライン・所要時間は約60分です。</p>
                                </div>
                            </li>
                            <li class="thanks-step-item">
                                <div class="thanks-step-label">
                                    <span class="thanks-step-num">STEP 03</span>
                                    <span class="thanks-step-icon" aria-hidden="true">
                                        <img src="<?php echo esc_url($base . '/assets/images/thanks/thanks_03.png'); ?>"
                                            alt="" height="40" loading="lazy">
                                    </span>
                                </div>
                                <div class="thanks-step-body">
                                    <strong>無料キャリア相談会（オンライン）</strong>
                                    <p>あなたの経験をもとに、強み・活かせるAIスキル・これからのキャリアの方向性を整理します。</p>
                                </div>
                            </li>
                        </ol>

                    </div>

                    <!-- ご案内メッセージ -->
                    <div class="thanks-guide-box">
                        <p class="thanks-guide-label">ご案内</p>
                        <p>このページは閉じていただいて問題ございません。</p>
                        <p>LINEアプリに戻り、届いているご案内メッセージをご確認ください。</p>
                    </div>

                </div>
            </div>
        </section>
        <!-- /SECTION サンクスメインコンテンツ -->

        <!-- FOOTER -->
        <footer class="lp-footer bg-navy">
            <div class="lp-container">
                <div class="lp-footer-inner">

                    <p class="footer-company">AIキャリア・アカデミー<br class="u-br-sp">（運営：株式会社Growthing）</p>

                    <ul class="footer-links">
                        <li class="footer-link-item">
                            <a href="https://growthing.co.jp/privacy-policy" target="_blank"
                                rel="noopener noreferrer">プライバシーポリシー</a>
                        </li>
                        <li class="footer-link-item">
                            <a href="https://growthing.co.jp/commerce" target="_blank"
                                rel="noopener noreferrer">特定商取引に基づく表記</a>
                        </li>
                    </ul>

                    <p class="footer-copyright">&copy; AIキャリア・アカデミー</p>

                </div>
            </div>
        </footer>
        <!-- /FOOTER -->

    </div><!-- /.lp-onetime-wrap -->

    <?php wp_footer(); ?>
</body>

</html>