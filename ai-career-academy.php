<?php
/**
 * Template Name: AIキャリア・アカデミー
 */


// =============================================
// 画像パス
// =============================================
$base   = get_stylesheet_directory_uri();
$img    = $base . '/assets/images/hero/';
$img_pc = $img . 'hero_pc/';
$img_sp = $img . 'hero_sp/';
?>

<?php
// =============================================
// CTAボタンのHTMLをメモリに格納（共通化）
// =============================================
ob_start();
?>
<div class="common-cta-unit">
    <p class="hero-micro-copy">
        <img src="<?php echo esc_url($img . 'magnifying_glass.svg'); ?>" alt="" class="prefix-icon"
            aria-hidden="true" />
        あなたの市場価値、<br class="u-br-sp">AIでどこまで伸ばせるか診断します
    </p>
    <a href="https://line.me/ti/p/%40800ooixk" class="hero-btn-custom" target="_blank" rel="noopener noreferrer">
        <picture>
            <source media="(max-width: 599px)"
                srcset="<?php echo esc_url($base . '/assets/images/btn/cta_btn_line_sp.svg'); ?>">
            <img src="<?php echo esc_url($base . '/assets/images/btn/cta_btn_line_pc.svg'); ?>"
                alt="LINEで1分相談 無料キャリア相談会を予約する" />
        </picture>
    </a>
</div>
<?php
$common_cta_html = ob_get_clean();
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>AIキャリア・アカデミー</title>
    <meta name="description" content="40代・50代のためのAIキャリア・アカデミー。経験を活かし、AIスキルで「転職できる自分」に変わる。無料キャリア相談会受付中。">
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-PZZRQWLP');</script>
    <!-- End Google Tag Manager -->
    <?php wp_head(); ?>
</head>

<body <?php body_class('lp-page'); ?>>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PZZRQWLP"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div class="lp-onetime-wrap">

        <header class="hero-header">
            <a href="<?php echo esc_url(home_url('/ai-career-academy-lp')); ?>">
                <img src="<?php echo esc_url($img . 'header_logo.webp'); ?>" alt="AIキャリア・アカデミー" class="header-logo"
                    width="260" height="58" loading="eager">
            </a>
        </header>

        <!-- =========================================
       SECTION 01 | FV（ヒーローセクション）
       ========================================= -->
        <section class="hero-section">

            <!-- フローティングCTA表示トリガー -->
            <div id="js-floating-sentinel" aria-hidden="true"></div>

            <!-- 背景画像（mix-blend-mode: multiply） -->
            <div class="hero-bg-image">
                <picture>
                    <source media="(max-width: 1024px)"
                        srcset="<?php echo esc_url($img_sp . 'hero_main_visual_sp.webp'); ?>">
                    <img src="<?php echo esc_url($img_pc . 'hero_main_visual_pc.webp'); ?>" alt="" loading="eager" />
                </picture>
            </div>

            <div class="hero-container">

                <div class="hero-content">

                    <div class="hero-title-area">
                        <h1 class="hero-title">
                            <span class="visually-hidden">40代・50代からでも遅くない。AIスキルで「転職できる自分」に変わる。</span>
                            <picture>
                                <source media="(max-width: 1024px)"
                                    srcset="<?php echo esc_url($img_sp . 'hero_main_title_sp.svg'); ?>">
                                <img src="<?php echo esc_url($img_pc . 'hero_main_title_pc.svg'); ?>" alt=""
                                    aria-hidden="true" loading="eager" />
                            </picture>
                        </h1>
                    </div>

                    <div class="hero-cards">
                        <picture>
                            <source media="(max-width: 1024px)"
                                srcset="<?php echo esc_url($img_sp . 'hero_laurier_sp_01.svg'); ?>">
                            <img src="<?php echo esc_url($img_pc . 'hero_laurier_pc_01.svg'); ?>" alt="未経験からAI資格を取得"
                                loading="eager" />
                        </picture>
                        <picture>
                            <source media="(max-width: 1024px)"
                                srcset="<?php echo esc_url($img_sp . 'hero_laurier_sp_02.svg'); ?>">
                            <img src="<?php echo esc_url($img_pc . 'hero_laurier_pc_02.svg'); ?>" alt="自分専用AIアプリが作れる"
                                loading="eager" />
                        </picture>
                        <picture>
                            <source media="(max-width: 1024px)"
                                srcset="<?php echo esc_url($img_sp . 'hero_laurier_sp_03.svg'); ?>">
                            <img src="<?php echo esc_url($img_pc . 'hero_laurier_pc_03.svg'); ?>"
                                alt="転職に使える職務経歴書をAIが自動作成" loading="eager" />
                        </picture>
                    </div>

                    <div class="hero-main-copy-sp-area">
                        <img src="<?php echo esc_url($img_sp . 'hero_main_copy_sp.svg'); ?>" alt="" aria-hidden="true"
                            loading="eager" />
                    </div>

                    <div class="hero-cta-unit">
                        <div class="hero-cta-row">

                            <!-- 共通CTAユニット -->
                            <?php echo $common_cta_html; ?>

                            <div class="hero-keisansho-row u-gap-s">
                                <!-- SP専用バッジ（PCでは非表示） -->
                                <div class="hero-micro-copy-sp">
                                    <img src="<?php echo esc_url($img_sp . 'hero_btn_micro_copy_sp.svg'); ?>"
                                        alt="あなたの市場価値、AIでどこまで伸ばせるか診断します" class="prefix-icon" aria-hidden="true" />
                                </div>
                                <div class="hero-keisansho-logo">
                                    <img src="<?php echo esc_url($img . 'logo_keisansho_reskilling.svg'); ?>"
                                        alt="経済産業省 リスキリングを通じたキャリアアップ支援事業" loading="eager" />
                                </div>
                                <!-- 70%OFFバッジ（右上・absolute / PC↔SP画像切替） -->
                                <div class="hero-badge-off">
                                    <picture>
                                        <source media="(max-width: 1024px)"
                                            srcset="<?php echo esc_url($img_sp . 'hero_badge_sp.svg'); ?>">
                                        <img src="<?php echo esc_url($img_pc . 'hero_badge_pc.svg'); ?>"
                                            alt="国の制度で最大70%OFFで受講可能" loading="eager" />
                                    </picture>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- /SECTION 01 FV -->

        <!-- =========================================
       SECTION 02 | 問題提起セクション
       ========================================= -->
        <section class="lp-sec-wrap problem-section bg-navy">
            <div class="lp-container">
                <div class="lp-content problem-container-inner">

                    <header class="lp-sec-header">
                        <div class="lp-sec-header-bg">ISSUE</div>
                        <h2 class="lp-sec-header-title">このまま今の会社にいて、<br>5年後も「<span
                                class="lp-hl-yellow">選ばれる側</span>」で<br class="u-br-sp">いられますか？</h2>
                        <p class="lp-sec-header-lead">40代・50代になると、ふとした瞬間に、<br class="u-br-pc">こんな不安が頭をよぎることはありませんか。</p>
                    </header>

                    <ul class="problem-list u-counter-list">
                        <li class="problem-item u-gap-xl">
                            <div class="problem-img-area">
                                <img src="<?php echo esc_url($base . '/assets/images/problem/problem_list_01.webp'); ?>"
                                    alt="転職サイトの通知イメージ" />
                            </div>
                            <div class="problem-text-area">
                                <p>
                                    転職サイトに登録しても、<br class="u-br-pc">届くのは「<span
                                        class="lp-hl-yellow">今回は見送らせていただきます</span>」の通知ばかり。<br
                                        class="u-br-pc">届く求人は、今より年収が下がるものばかり。
                                </p>
                            </div>
                        </li>
                        <li class="problem-item u-gap-xl">
                            <div class="problem-img-area">
                                <img src="<?php echo esc_url($base . '/assets/images/problem/problem_list_02.webp'); ?>"
                                    alt="同期と自分を比較するイメージ" />
                            </div>
                            <div class="problem-text-area">
                                <p>
                                    気づけば同期は役職についている。<br class="u-br-pc">自分は、<span
                                        class="lp-hl-yellow">誰でもできる仕事を任され続けている</span>気がする。
                                </p>
                            </div>
                        </li>
                        <li class="problem-item u-gap-xl">
                            <div class="problem-img-area">
                                <img src="<?php echo esc_url($base . '/assets/images/problem/problem_list_03.webp'); ?>"
                                    alt="会議でAIの話をするイメージ" />
                            </div>
                            <div class="problem-text-area">
                                <p>
                                    会議で若手が「AI」の話をしている。<br class="u-br-pc">正直よく分からないが、<span
                                        class="lp-hl-yellow">分かったフリをして話を合わせている。</span>
                                </p>
                            </div>
                        </li>
                        <li class="problem-item u-gap-xl">
                            <div class="problem-img-area">
                                <img src="<?php echo esc_url($base . '/assets/images/problem/problem_list_04.webp'); ?>"
                                    alt="将来への不安イメージ" />
                            </div>
                            <div class="problem-text-area">
                                <p>
                                    <span class="lp-hl-yellow">「55歳役職定年」「60歳再雇用」</span><br
                                        class="u-br-pc">その言葉が、いよいよ他人事ではなくなってきた。
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- /SECTION 02 問題提起 -->

        <!-- =========================================
       SECTION 03 | 橋渡しセクション
       ========================================= -->
        <section class="lp-sec-wrap problem-bridge-section bg-navy">
            <div class="lp-container">
                <div class="lp-content">

                    <div class="bridge-title-area">
                        <h2 class="bridge-title">それでも</h2>
                    </div>

                    <div class="bridge-image-area">
                        <div class="bridge-image-item bubble-area">
                            <span class="bubble-item bubble-01" aria-label="守るべき家族がいる。"></span>
                            <span class="bubble-item bubble-02" aria-label="住宅ローンもある。"></span>
                            <span class="bubble-item bubble-03" aria-label="子どもの教育費も、これからが本番。"></span>
                        </div>
                        <span class="bubble-item bubble-sp" aria-label="守るべき家族がいる。住宅ローンもある。子どもの教育費も、これからが本番。"></span>
                        </span>


                        <div class="bridge-image-item main-image-area">
                            <img src="<?php echo esc_url($base . '/assets/images/problem/problem_paerson_01.webp'); ?>"
                                alt="家族や住まいのイメージ" class="main-image">
                            <img src="<?php echo esc_url($base . '/assets/images/problem/problem_paerson_02.webp'); ?>"
                                alt="家族や住まいのイメージ" class="main-image">
                        </div>
                    </div>

                    <div class="bridge-text-area">
                        <div class="text-content">
                            <h3 class="catch-copy">
                                だからこそ、<br>
                                <span class="lp-hl-yellow">「年収が下がる未来」</span><br class="u-br-sp">だけは、<br class="u-br-pc">
                                絶対に避けたい。
                            </h3>
                            <p class="description">
                                けれど現実は、年齢を重ねるほど<br>
                                <span class="lp-fw-bold">「選ばれにくくなる」</span>という<br>
                                厳しい現実を突きつけてきます。<br>
                                <br>
                                もし今、会社という看板が<br class="u-br-sp">外れたとしたら。<br>
                                あなたは、<span class="lp-fw-bold">「次も選ばれる人材だ」</span>と<br>
                                胸を張って言えるでしょうか。
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /SECTION 03 橋渡し -->

        <!-- =========================================
       SECTION 04 | リーズンセクション
       ========================================= -->
        <section class="lp-sec-wrap reason-section">
            <div class="lp-container">
                <div class="lp-content">

                    <header class="lp-sec-header">
                        <div class="lp-sec-header-bg">REASON</div>
                        <h2 class="lp-sec-header-title">
                            あなたの価値が下がった<br class="u-br-sp">わけではありません。<br><br class="u-br-sp">
                            <span class="lp-marker-yellow">「評価のされ方」</span>が<br class="u-br-sp">変わっただけです。
                        </h2>
                    </header>

                    <div class="reason-step-wrapper">
                        <div class="reason-step-list">

                            <div class="reason-step-item u-gap-xl">
                                <div class="step-image">
                                    <img src="<?php echo esc_url($base . '/assets/images/reason/reason_01.webp'); ?>"
                                        alt="イメージ">
                                </div>
                                <div class="step-text">
                                    <p>これまでのあなたは、<br><span class="lp-fw-bold">責任あるポジションで経験を積み、<br>会社の中で役割を<br
                                                class="u-br-sp">果たしてきたはずです。</span></p>
                                    <p>トラブルにも対応し、<br>
                                        部下や後輩を支え、<br>
                                        数字や結果にも向き合ってきた。</p>
                                </div>
                            </div>

                            <div class="reason-step-item u-gap-xl">
                                <div class="step-image">
                                    <img src="<?php echo esc_url($base . '/assets/images/reason/reason_02.webp'); ?>"
                                        alt="イメージ">
                                </div>
                                <div class="step-text">
                                    <p>それでも今、<br>
                                        <span class="lp-fw-bold">「選ばれにくくなっている」<br class="u-br-sp">と感じるのは、<br>
                                            あなたの能力が<br class="u-br-sp">落ちたからではありません。</span>
                                    </p>
                                    <p>
                                        本当の原因は、<br class="u-br-sp">もっと別のところにあります。<br>
                                        それは——
                                    </p>
                                </div>
                            </div>

                            <div class="reason-step-item u-gap-xl">
                                <div class="step-image">
                                    <img src="<?php echo esc_url($base . '/assets/images/reason/reason_03.webp'); ?>"
                                        alt="イメージ">
                                </div>
                                <div class="step-text">
                                    <p><span class="lp-fw-bold">「価値の伝え方」が変わったこと。</span></p>
                                    <p>
                                        これまでの時代は、<br>
                                        「経験年数」や「肩書き」で<br>
                                        評価されることが多くありました。</p>
                                    <p>
                                        しかし今は違います。
                                    </p>
                                </div>
                            </div>

                            <div class="reason-step-item u-gap-xl">
                                <div class="step-image">
                                    <img src="<?php echo esc_url($base . '/assets/images/reason/reason_04.webp'); ?>"
                                        alt="イメージ">
                                </div>
                                <div class="step-text">
                                    <p>
                                    <p class="lp-fw-bold">企業が求めているのは、<br>
                                        「この人は何ができるのか」</span><br>
                                        それを目に見える形で<br class="u-br-sp">証明できる人材です。</p>
                                    <p>つまり——</p>
                                </div>
                            </div>

                            <div class="reason-step-item u-gap-xl">
                                <div class="step-image">
                                    <img src="<?php echo esc_url($base . '/assets/images/reason/reason_05.webp'); ?>"
                                        alt="イメージ">
                                </div>
                                <div class="step-text">
                                    <p>あなたに価値がないのではなく、<br>
                                        <span class="lp-fw-bold">価値が“見える形”に<br class="u-br-sp">なっていないだけ。</span>
                                    </p>
                                    <p>
                                        それが、<br>
                                        <span class="lp-fw-bold">40代・50代が直面している</span><br>
                                        本当の壁なのです。
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- /SECTION 04 リーズン -->

        <!-- =========================================
       SECTION 04 | リーズン・ブリッジセクション
       ========================================= -->
        <section class="lp-sec-wrap reason-bridge-section bg-navy">
            <div class="lp-container">
                <div class="lp-content">

                    <div class="bridge-content-inner">
                        <p class="text-top">
                            そして今、<br class="u-br-pc">
                            その価値を<br class="u-br-sp">「見える形にする手段」として<br>
                            急速に広がっているのが
                        </p>

                        <p class="text-ai-large">AI<span>です。</span></p>

                        <p class="text-declare">はっきり言います。</p>

                        <div class="highlight-box">
                            <p>
                                40代・50代こそ、<br>
                                AIを使える人材が<br class="u-br-sp">求められています。
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /SECTION 04 リーズン・ブリッジ -->

        <!-- =========================================
       SECTION 05 | CTAセクション
       ========================================= -->
        <section class="lp-sec-wrap cta-section">
            <div class="lp-container">
                <div class="lp-content cta-content-inner">

                    <h2 class="cta-main-copy">
                        あなたの経験で<br class="u-br-sp">どんなAIが作れるのか<br>知りたくありませんか？ </h2>
                    <div class="vertical-line"></div>
                    <!-- 共通CTAユニット -->
                    <?php echo $common_cta_html; ?>

                </div>
            </div>
        </section>

        <!-- /SECTION 05 CTA -->

        <!-- =========================================
       SECTION 06 | ソリューションセクション
       ========================================= -->
        <section class="lp-sec-wrap solution-section">
            <div class="lp-container">
                <div class="lp-content">

                    <header class="lp-sec-header">
                        <div class="lp-sec-header-bg">SOLUTION</div>
                        <h2 class="lp-sec-header-title">
                            AIは「若い人の武器」<br class="u-br-sp">ではありません。<br><br class="u-br-sp">
                            <span class="lp-marker-yellow">あなたの経験を<br class="u-br-sp">活かすための武器です。</span>
                        </h2>
                        <p class="lp-sec-header-lead">
                            「AI」と聞くと、ITに強い若い人や、プログラミングができる人のもの。<br class="u-br-pc">
                            そんなイメージを持っていないでしょうか。<br class="u-br-sp"><br class="u-br-sp">しかし実際には
                            ――<br>
                            <span class="lp-fw-bold">企業が本当に求めているのは、若さではありません。</span>
                        </p>
                    </header>
                    <div class="comparison-block">
                        <div class="compare-col compare-left lp-stack-sm">
                            <div class="compare-box">
                                <h3>若手が持つもの</h3>
                                <ul>
                                    <li>AIツールの操作スキル</li>
                                    <li>新しい技術への適応力</li>
                                    <li>デジタルへの抵抗感のなさ</li>
                                </ul>
                            </div>
                            <div class="compare-content-area">
                                <p class="compare-caption">しかし、現場の課題を<br>深く理解しているとは限らない。</p>
                                <figure class="image-bg-white">
                                    <img src="<?php echo esc_url($base . '/assets/images/solution/solution_compare_01.webp'); ?>"
                                        alt="イメージ" class="compare-image">
                                </figure>
                            </div>
                        </div>
                        <div class="compare-col compare-right lp-stack-sm">
                            <div class="compare-box">
                                <h3>40〜50代が持つもの</h3>
                                <ul>
                                    <li>どこに無駄があるかを知っている</li>
                                    <li>どこをどう改善すれば成果が出るか</li>
                                    <li>人と組織の動きを見てきた経験</li>
                                </ul>
                            </div>
                            <div class="compare-content-area">
                                <p class="compare-caption">あなたの経験を<br>「仕組み」に変える道具がAIです。</p>
                                <figure class="image-bg-white">
                                    <img src="<?php echo esc_url($base . '/assets/images/solution/solution_compare_02.webp'); ?>"
                                        alt="イメージ" class="compare-image">
                                </figure>
                            </div>
                        </div>
                    </div>

                    <h3 class="solution-mid-title">
                        AIは、新しい仕事を<br class="u-br-sp">覚えるためのものでは<br class="u-br-sp">ありません。<br><br class="u-br-sp">
                        あなたの経験を、「仕組み」<br class="u-br-sp">に変えるための道具です。 </h3>

                    <div class="task-list-wrap">
                        <p class="task-list-title">たとえば、<br class="u-br-sp">これまで時間をかけていた業務</p>

                        <div class="task-list">
                            <div class="task-item">
                                <div class="task-icon-circle">
                                    <img src="<?php echo esc_url($base . '/assets/images/solution/icon_solusion_01.webp'); ?>"
                                        alt="報告書の作成">
                                    <span class="task-name">報告書の作成</span>
                                </div>
                            </div>
                            <div class="task-item">
                                <div class="task-icon-circle">
                                    <img src="<?php echo esc_url($base . '/assets/images/solution/icon_solusion_02.webp'); ?>"
                                        alt="見積書の作成">
                                    <span class="task-name">見積書の作成</span>
                                </div>
                            </div>
                            <div class="task-item">
                                <div class="task-icon-circle">
                                    <img src="<?php echo esc_url($base . '/assets/images/solution/icon_solusion_03.webp'); ?>"
                                        alt="メールの返信">
                                    <span class="task-name">メールの返信</span>
                                </div>
                            </div>
                            <div class="task-item">
                                <div class="task-icon-circle">
                                    <img src="<?php echo esc_url($base . '/assets/images/solution/icon_solusion_04.webp'); ?>"
                                        alt="データの整理">
                                    <span class="task-name">データの整理</span>
                                </div>
                            </div>
                        </div>

                        <p class="task-result-text">こうした作業を、<br class="u-br-sp"> <span
                                class="lp-fw-bold">AIが瞬時に処理</span><br class="u-br-sp">できるようになります。
                        </p>
                    </div>

                    <div class="bottom-2col-block u-gap-xl">
                        <img src="<?php echo esc_url($base . '/assets/images/solution/solution_bottom.webp'); ?>"
                            alt="イメージ" class="col-image">
                        <div class="col-text">
                            <p>
                                つまり――<br><br>
                                AIを使えるようになるとは、<br>
                                「仕事が速くなる」だけでは<br class="u-br-sp">ありません。<br>
                                「仕事を仕組みに変えられる人」に<br class="u-br-sp">
                                なるということです。<br><br>
                                そして企業が求めているのは、<br>
                                まさにそのような人材なのです。
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- /SECTION 06 ソリューション -->

        <!-- =========================================
       SECTION 07 | 証拠セクション
       ========================================= -->
        <section class="lp-sec-wrap evidence-section bg-navy">
            <div class="lp-container">
                <div class="lp-content evidence-container-inner">

                    <header class="lp-sec-header is-left evidence-header">
                        <div class="lp-sec-header-bg is-vertical">EVIDENCE</div>

                        <h2 class="lp-sec-header-title">
                            私たちは、「選ばれる価値」を証明するための<br class="u-br-pc">
                            2つの武器を提供します。
                        </h2>

                        <div class="lp-sec-header-lead">
                            <p>
                                AIを学ぶだけでは、<br class="u-br-sp">市場価値は変わりません。<br>
                                職務経歴書を書き直すだけでも、<br class="u-br-sp">本当の意味で選ばれるようには<br class="u-br-sp">なりません。
                            </p>
                            <p>
                                必要なのは――「証拠」です。
                            </p>
                            <p>
                                あなたの価値を、<br class="u-br-sp">誰が見ても理解できる形で示す<br class="u-br-sp">確かな証拠。<br><br
                                    class="u-br-sp">
                                そのために私たちは、<br class="u-br-sp">あなたの価値を証明する<br class="u-br-sp">2つの武器を提供します。
                            </p>
                        </div>
                    </header>

                    <div class="weapon-cards-wrap">

                        <div class="weapon-card u-flex-col u-gap-sm bg-white">
                            <img src="<?php echo esc_url($base . '/assets/images/evidence/evidence_wepon_01.webp'); ?>"
                                alt="アイコン" class="card-icon">
                            <span class="card-sub-title">WEAPON 01 — キャリアの証拠</span>
                            <h3 class="card-title">あなたの経験を、<br>「勝てる職務経歴書」<br class="u-br-sp">に変える</h3>
                            <span class="card-badge">AIによる強み抽出 × プロの磨き上げ</span>
                            <p class="card-text">
                                多くの人が、自分の経験を正しく言語化できていません。本来は価値がある経験も、<span
                                    class="lp-fw-bold">伝え方を間違えるだけで「評価されない経歴」になってしまう。それは非常にもったいないことです。</span>だから私たちは、感覚や思い込みではなく、データとプロの視点を使って、あなたの<span
                                    class="lp-fw-bold">本当の強みを明確にしていきます。</span>こうして完成するのが、「選ばれるための職務経歴書」です。
                            </p>
                            <ul class="card-check-list">
                                <li>適性診断による客観的な強みの抽出</li>
                                <li>AIによる職務経歴書の自動生成</li>
                                <li>プロとの対話による徹底的なブラッシュアップ</li>
                            </ul>
                        </div>

                        <div class="weapon-card u-flex-col u-gap-sm bg-white">
                            <img src="<?php echo esc_url($base . '/assets/images/evidence/evidence_wepon_02.webp'); ?>"
                                alt="アイコン" class="card-icon">
                            <span class="card-sub-title">WEAPON 02 — AIの証拠</span>
                            <h3 class="card-title">あなた専用の<br class="u-br-sp">「分身AI」を<br>作れるようになります。</h3>
                            <span class="card-badge">ノーコード × マンツーマン伴走</span>
                            <p class="card-text">
                                履歴書に書かれたスキルだけでは、もう選ばれない時代です。企業が本当に見たいのは、<span
                                    class="lp-fw-bold">「この人は何ができるのか」それを、目の前で証明できる人材です。</span>だから私たちは、あなたの経験をもとに、「自分専用のAI」を作れるようになるまで伴走します。難しいプログラミングは必要ありません。コードを書かずに作れるノーコードツールを使うため、<span
                                    class="lp-fw-bold">IT未経験の方でも、自分専用のAIを作ることが可能です。</span>
                            </p>
                            <ul class="card-check-list">
                                <li>ノーコードツールを活用</li>
                                <li>職種別の分身AI設計（営業・事務・管理等・現場職）</li>
                                <li>面接で実際に「見せられる状態」まで完成</li>
                            </ul>
                        </div>

                    </div>

                    <div class="ai-examples-wrap u-gap-m">
                        <h3 class="examples-title">あなたのキャリア経験で、<br class="u-br-sp">こんなAIが作れます。</h3>

                        <div class="tab-buttons u-gap-s">
                            <button class="tab-btn is-active">営業・販売</button>
                            <button class="tab-btn">事務・庶務・経理</button>
                            <button class="tab-btn">管理職・<br class="u-br-sp">マネジメント</button>
                            <button class="tab-btn">現場職・技術職</button>
                        </div>

                        <div class="tab-content-box u-gap-xl bg-white">
                            <figure class="image-bg-white">
                                <img src="<?php echo esc_url($base . '/assets/images/evidence/evidence_tab_01.webp'); ?>"
                                    alt="営業・販売経験がある方" class="content-image">
                            </figure>
                            <div class="content-text-area u-gap-s">
                                <h4 class="content-title">営業・販売経験がある方</h4>
                                <ul class="content-check-list">
                                    <li>提案書を自動で作るAI</li>
                                    <li>顧客ごとの提案内容を整理するAI</li>
                                    <li>商談メモを瞬時にまとめるAI</li>
                                </ul>
                                <p class="content-desc">これまで1時間かかっていた資料作成が、<br>数分で完成するようになります。</p>
                            </div>
                        </div>

                        <div class="tab-content-box u-gap-xl bg-white">
                            <figure class="image-bg-white">
                                <img src="<?php echo esc_url($base . '/assets/images/evidence/evidence_tab_02.webp'); ?>"
                                    alt="事務・庶務・経理経験がある方" class="content-image">
                            </figure>
                            <div class="content-text-area u-gap-s">
                                <h4 class="content-title">事務・庶務・経理経験がある方</h4>
                                <ul class="content-check-list">
                                    <li>報告書を自動作成するAI</li>
                                    <li>社内資料を整理するAI</li>
                                    <li>定型メールを自動生成するAI</li>
                                </ul>
                                <p class="content-desc">毎日繰り返していた作業が、一瞬で終わる仕組みになります。</p>
                            </div>
                        </div>

                        <div class="tab-content-box u-gap-xl bg-white">
                            <figure class="image-bg-white">
                                <img src="<?php echo esc_url($base . '/assets/images/evidence/evidence_tab_03.webp'); ?>"
                                    alt="管理職・マネジメント経験がある方" class="content-image">
                            </figure>
                            <div class="content-text-area u-gap-s">
                                <h4 class="content-title">管理職・マネジメント経験がある方</h4>
                                <ul class="content-check-list">
                                    <li>部下への指示内容を整理するAI</li>
                                    <li>業務改善の提案をまとめるAI</li>
                                    <li>会議内容を要約するAI</li>
                                </ul>
                                <p class="content-desc">あなたの判断力が、「再現できる仕組み」になります。</p>
                            </div>
                        </div>

                        <div class="tab-content-box u-gap-xl bg-white">
                            <figure class="image-bg-white">
                                <img src="<?php echo esc_url($base . '/assets/images/evidence/evidence_tab_04.webp'); ?>"
                                    alt="現場職・技術職経験がある方" class="content-image">
                            </figure>
                            <div class="content-text-area u-gap-s">
                                <h4 class="content-title">現場職・技術職の方</h4>
                                <ul class="content-check-list">
                                    <li>作業マニュアルを作るAI</li>
                                    <li>新人教育をサポートするAI</li>
                                    <li>トラブル対応手順を整理するAI</li>
                                </ul>
                                <p class="content-desc">あなたのノウハウが、会社の資産レベルの仕組みになります。</p>
                            </div>
                        </div>
                    </div>

                    <div class="evidence-bottom-wrap">
                        <div class="bottom-text">
                            <p>この「分身AI」があることで、<br>
                                あなたは、<br>
                                「経験がある人」から<br class="u-br-sp">「仕組みを作れる人」<br>
                                へと変わります。</p>
                            <p>
                                つまり ――</p>
                            <p>
                                あなたの経験は、<br>
                                「消えるもの」ではなく<br>
                                「残せるもの」に変わります。</p>
                            <p>
                                そして面接の場で、<br class="u-br-sp">スマートフォンを取り出し、<br>
                                「これが私の作ったAIです」<br>
                                そう見せた瞬間、<br class="u-br-sp">あなたの評価は大きく変わります。
                            </p>
                        </div>
                        <video class="bottom-image js-observe-video" muted loop playsinline preload="metadata">
                            <source
                                src="<?php echo esc_url($base . '/assets/images/evidence/video_01_compressed.mp4'); ?>"
                                type="video/mp4">
                        </video>
                    </div>

                </div>
            </div>
        </section>
        <!-- /SECTION 07 証拠 -->


        <!-- =========================================
       SECTION 08 | CTAセクション
       ========================================= -->
        <section class="lp-sec-wrap cta-section">
            <div class="lp-container">
                <div class="lp-content cta-content-inner">

                    <h2 class="cta-main-copy">
                        あなたの経験で<br class="u-br-sp">どんなAIが作れるのか<br>知りたくありませんか？
                    </h2>
                    <div class="vertical-line"></div>

                    <!-- 共通CTAユニット -->
                    <?php echo $common_cta_html; ?>

                </div>
            </div>
        </section>
        <!-- /SECTION 08 CTA -->

        <!-- =========================================
       SECTION 09 | サービスセクション
       ========================================= -->
        <section class="lp-sec-wrap service-section bg-white">
            <div class="lp-container">
                <div class="lp-content service-container-inner">

                    <header class="lp-sec-header">
                        <div class="lp-sec-header-bg">STRUCTURE</div>
                        <h2 class="lp-sec-header-title">
                            だからこそ私たちは、<br>
                            <span class="lp-marker-yellow">「絶対に挫折させない<br class="u-br-sp">仕組み」</span><br class="u-br-pc">
                            を用意しました。
                        </h2>
                        <div class="lp-sec-header-lead">
                            <p>AIを学ぶことも、キャリアを変えることも、決して簡単な挑戦ではありません。</p>
                            <p>だからこそ、「一人で頑張る」仕組みにはしていません。<br class="u-br-pc">私たちは、あなたが確実に「分身AI」を作り、<br
                                    class="u-br-pc">「選ばれる価値」を手に入れるまで、<br class="u-br-pc">徹底的に伴走します。</p>
                        </div>
                    </header>

                    <ul class="service-list u-counter-list u-flex-col u-gap-sm">
                        <li class="service-item">
                            <h3 class="service-item-title">完全マンツーマン指導</h3>
                            <p class="service-item-desc">
                                動画を渡して終わり、そんなスクールではありません。<br>
                                あなた一人に対して、<span class="lp-fw-bold">キャリアのプロ＋AIのプロ</span>が専属で伴走します。<br>
                                わからないことがあれば、その場で解決。「置いていかれる」ことはありません。
                            </p>
                        </li>
                        <li class="service-item">
                            <h3 class="service-item-title">24時間いつでも質問OK</h3>
                            <p class="service-item-desc">
                                AIを作る中で、「ここが分からない」そんな瞬間は必ず訪れます。<br>
                                そのとき、すぐに聞ける環境があるかどうか、それが挫折を防ぐ最大のポイントです。<br>
                                私たちは、<span class="lp-fw-bold">チャットを通じていつでも質問できる環境を用意しています。</span><br class="u-br-pc">
                                分からないまま、手が止まることはありません。
                            </p>
                        </li>
                        <li class="service-item">
                            <h3 class="service-item-title">キャリアまで含めた伴走</h3>
                            <p class="service-item-desc">
                                AIを作ることが、ゴールではありません。<br class="u-br-pc">
                                本当のゴールは――<br class="u-br-sp"><span class="lp-fw-bold">「選ばれるキャリア」</span>を手に入れること。<br>
                                だから私たちは、<span class="lp-fw-bold">職務経歴書のブラッシュアップ・求人の探し方の指導・面接対策</span>まで、<br
                                    class="u-br-pc">
                                キャリア全体をサポートします。
                            </p>
                        </li>
                    </ul>

                    <div class="service-bottom-box">
                        <p>「AIを学ぶ場所」ではなく<br class="u-br-sp"><span
                                class="lp-hl-gold">「キャリアを変える場所」</span><br>それが、このAIキャリア・<br class="u-br-sp">アカデミーです。</p>
                    </div>

                </div>
            </div>
        </section>
        <!-- /SECTION 09 サービス -->

        <!-- =========================================
       SECTION 10 | Caseセクション
       ========================================= -->
        <section class="lp-sec-wrap case-section bg-navy">
            <div class="lp-container">
                <div class="lp-content case-container-inner">

                    <header class="lp-sec-header is-left">
                        <div class="lp-sec-header-bg is-vertical">CASE</div>
                        <h2 class="lp-sec-header-title">
                            実際に、「選ばれる側」へ<br class="u-br-sp">変わった方がいます。
                        </h2>
                        <div class="lp-sec-header-lead">
                            <p>ここまで読んで、<br class="u-br-sp">「本当に変われるのか？」<br class="u-br-sp">そう思われた方もいるかもしれません。</p>
                            <p>しかし――<br class="u-br-sp">このプログラムを通じて、<br class="u-br-sp">実際にキャリアを変えた方がいます。</p>
                            <p>年齢は関係ありません。<br class="u-br-sp">必要なのは、<br class="u-br-sp">経験を活かす意思だけです。</p>
                        </div>
                    </header>

                    <div class="case-cards-wrap">

                        <div class="case-card bg-navy">
                            <img src="<?php echo esc_url($base . '/assets/images/case/case_01.webp'); ?>" alt=""
                                class="card-bg-image" aria-hidden="true">

                            <div class="case-card-top">
                                <span class="case-label">CASE 01</span>
                                <span class="case-meta">48歳 男性（東京都）</span>
                            </div>

                            <div class="case-card-bottom">
                                <h3 class="case-title">「代替可能な作業員」から<br>「仕組みを作る側」へ。</h3>
                                <div class="case-prev-job">
                                    <span>中小メーカー 営業事務</span>
                                    <span>450万円</span>
                                </div>

                                <div class="case-new-job">
                                    <div class="badge-change"><span>転</span><span>職</span></div>
                                    <div class="new-job-info">
                                        <div class="new-job-role">中堅卸売業<br>管理部IT推進</div>
                                        <div class="new-job-salary">480万円</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="case-card bg-navy">
                            <img src="<?php echo esc_url($base . '/assets/images/case/case_02.webp'); ?>" alt=""
                                class="card-bg-image" aria-hidden="true">

                            <div class="case-card-top">
                                <span class="case-label">CASE 02</span>
                                <span class="case-meta">51歳 女性（東京都）</span>
                            </div>

                            <div class="case-card-bottom">
                                <h3 class="case-title">「年齢」と「雇用形態」の<br>壁を越え、念願の正社員へ。</h3>
                                <div class="case-prev-job">
                                    <span>契約社員 データ入力</span>
                                    <span>350万円</span>
                                </div>

                                <div class="case-new-job">
                                    <div class="badge-change"><span>転</span><span>職</span></div>
                                    <div class="new-job-info">
                                        <div class="new-job-role">成長企業<br>バックオフィス</div>
                                        <div class="new-job-salary">350万円<span
                                                style="font-size: 14px; letter-spacing: 0;">（正社員化）</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="case-card bg-navy">
                            <img src="<?php echo esc_url($base . '/assets/images/case/case_03.webp'); ?>" alt=""
                                class="card-bg-image" aria-hidden="true">

                            <div class="case-card-top">
                                <span class="case-label">CASE 03</span>
                                <span class="case-meta">45歳 男性（神奈川県）</span>
                            </div>

                            <div class="case-card-bottom">
                                <h3 class="case-title">「年齢の壁」を越え、<br>新しいキャリアを手に入れた。</h3>
                                <div class="case-prev-job">
                                    <span>ルート営業・店舗管理</span>
                                    <span>550万円</span>
                                </div>

                                <div class="case-new-job">
                                    <div class="badge-change"><span>転</span><span>職</span></div>
                                    <div class="new-job-info">
                                        <div class="new-job-role">中小企業<br>営業企画アシスタント</div>
                                        <div class="new-job-salary">480万円</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="case-bottom-box">
                        <p>年齢が評価を下げた<br class="u-br-sp">のではなく、<span class="lp-hl-yellow">「証拠」</span>が<br
                                class="u-br-sp">評価を変えたのです。</p>
                    </div>

                </div>
            </div>
        </section>
        <!-- /SECTION 10 Case -->

        <!-- =========================================
       SECTION 11 | Stepセクション
       ========================================= -->
        <section class="lp-sec-wrap step-section bg-white">
            <div class="lp-container">
                <div class="lp-content step-container-inner">

                    <header class="lp-sec-header">
                        <div class="lp-sec-header-bg">ROADMAP</div>
                        <h2 class="lp-sec-header-title">
                            最短3ヶ月で<br>
                            <span class="lp-marker-yellow">「選ばれる人材」になる<br class="u-br-sp">ロードマップ</span>
                        </h2>
                        <div class="lp-sec-header-lead">
                            <p>AI学習とキャリア戦略を同時に進めることで、効率的に「証拠」を完成させていきます。</p>
                        </div>
                    </header>

                    <div class="step-white-box">
                        <ul class="step-list u-counter-list">

                            <li class="step-item is-visible">
                                <div class="step-line"></div>
                                <div class="step-content">
                                    <div class="step-img-area">
                                        <img src="<?php echo esc_url($base . '/assets/images/step/step_01.webp'); ?>"
                                            alt="イメージ">
                                    </div>

                                    <div class="step-text-area u-flex-col u-gap-s">

                                        <div class="step-title-area">
                                            <span class="step-label">基礎＋キャリア戦略</span>
                                            <h3 class="step-title">自分の強みを見つける</h3>
                                        </div>

                                        <ul class="step-check-list">
                                            <li>AIの基本操作を習得</li>
                                            <li>適性診断で「強み」を明確化</li>
                                            <li>狙うべきキャリア方向を決定</li>
                                        </ul>

                                        <div class="step-msg-box">
                                            まずは、あなたの価値を<br>言語化することから始めます。
                                        </div>
                                    </div>

                                </div>
                            </li>

                            <li class="step-item is-visible">
                                <div class="step-line"></div>
                                <div class="step-content">
                                    <div class="step-img-area">
                                        <img src="<?php echo esc_url($base . '/assets/images/step/step_02.webp'); ?>"
                                            alt="イメージ">
                                    </div>
                                    <div class="step-text-area u-flex-col u-gap-s">

                                        <div class="step-title-area">
                                            <span class="step-label">AIスキル＋書類構築</span>
                                            <h3 class="step-title">武器となるスキルを身につける</h3>
                                        </div>

                                        <ul class="step-check-list">
                                            <li>AIツールの実践活用</li>
                                            <li>分身AIの設計スタート</li>
                                            <li>職務経歴書の作成</li>
                                        </ul>
                                        <div class="step-msg-box">
                                            ここで「キャリアの証拠」<br>が形になります。
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="step-item is-visible">
                                <div class="step-line"></div>
                                <div class="step-content">
                                    <div class="step-img-area">
                                        <img src="<?php echo esc_url($base . '/assets/images/step/step_03.webp'); ?>"
                                            alt="イメージ">
                                    </div>
                                    <div class="step-text-area u-flex-col u-gap-s">

                                        <div class="step-title-area">
                                            <span class="step-label">最大の成果づくり</span>
                                            <h3 class="step-title">「分身AI」を完成させる</h3>
                                        </div>

                                        <ul class="step-check-list">
                                            <li>自分専用AIの完成</li>
                                            <li>ポートフォリオ作成</li>
                                            <li>面接で見せられる状態へ</li>
                                        </ul>
                                        <div class="step-msg-box">
                                            ここで、「AIの証拠」<br>が完成します。
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="step-item is-visible">
                                <div class="step-line"></div>
                                <div class="step-content">
                                    <div class="step-img-area">
                                        <img src="<?php echo esc_url($base . '/assets/images/step/step_04.webp'); ?>"
                                            alt="イメージ">
                                    </div>
                                    <div class="step-text-area u-flex-col u-gap-s">

                                        <div class="step-title-area">
                                            <span class="step-label">内定まで完全伴走</span>
                                            <h3 class="step-title">面接突破まで伴走</h3>
                                        </div>

                                        <ul class="step-check-list">
                                            <li>面接対策</li>
                                            <li>応募サポート</li>
                                            <li>内定獲得支援</li>
                                        </ul>
                                        <div class="step-msg-box is-main">
                                            ここまでが、<br>完全伴走のロードマップです。
                                        </div>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- /SECTION 11 Step -->

        <!-- =========================================
       SECTION 12 | Profileセクション
       ========================================= -->
        <section class="lp-sec-wrap profile-section bg-white">
            <div class="lp-container">
                <div class="lp-content">

                    <header class="lp-sec-header">
                        <div class="lp-sec-header-bg">CONSULTANT</div>
                        <h2 class="lp-sec-header-title">
                            あなたのキャリアを支えるのは<br class="u-br-pc">
                            <span class="lp-marker-yellow">現場を知り尽くした<br class="u-br-sp">プロフェッショナルです。</span>
                        </h2>
                        <div class="lp-sec-header-lead">
                            <p>AIを学ぶことも、キャリアを変えることも、<br class="u-br-pc">「誰に教わるか」で結果は大きく変わります。</p>
                            <p>
                                私たちは、AIだけの専門家でも、転職だけの専門家でもありません。<br class="u-br-pc">
                                「キャリア」と「AI」両方のプロが伴走します。
                            </p>
                        </div>
                    </header>

                    <div class="profile-navy-box bg-navy">
                        <div class="profile-cols">

                            <div class="profile-card">
                                <div class="profile-card-head">
                                    <img src="<?php echo esc_url($base . '/assets/images/profile/consultant_mori.webp'); ?>"
                                        alt="森 徹織" loading="lazy">
                                    <div class="profile-info">
                                        <div class="profile-info-main">
                                            <span class="profile-role">キャリア担当</span>
                                            <h3 class="profile-name">森 徹織</h3>
                                        </div>
                                        <ul class="profile-cert">
                                            <li>国家資格キャリア<br class="u-br-sp">コンサルタント</li>
                                            <li>AIコンサルタント</li>
                                            <li>心理カウンセラー</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="profile-card-body">
                                    <p>スポーツ量販店の多店舗マネージャーとして2,000名以上の採用・育成を経験後、キャリアコンサルタントへ転身。</p>
                                    <p>行政の就労支援事業では、設立1年で全国ベスト10の就労実績を達成。これまで23年以上、45,000人以上のキャリア支援に携わってきました。</p>
                                    <p>キャリア・心理・AIの専門資格を掛け合わせた、独自の支援スタイルが強み。</p>
                                    <p>自身も50代として、ミドル・シニア世代の悩みに寄り添った「現実的で実行できる支援」に定評があります。</p>
                                </div>
                            </div>

                            <div class="profile-card">
                                <div class="profile-card-head">
                                    <img src="<?php echo esc_url($base . '/assets/images/profile/consultant_ueda.webp'); ?>"
                                        alt="上田 知孝" loading="lazy">
                                    <div class="profile-info">
                                        <div class="profile-info-main">
                                            <span class="profile-role">AI担当</span>
                                            <h3 class="profile-name">上田 知孝</h3>
                                        </div>
                                        <ul class="profile-cert">
                                            <li>AIコンサルタント</li>
                                            <li>Google認定 AI資格保持者</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="profile-card-body">
                                    <p>大手通信企業にて、多数の企業向けAI導入・業務効率化プロジェクトを牽引。</p>
                                    <p>その確かな技術力と指導力が評価され、海外グループ企業へ招かれてAI研修の講師を務めるなど、グローバルな現場でも活躍中。</p>
                                    <p>現場業務を理解したうえで、「使えるAI」を設計することを得意としています。難しい専門用語を使わず、「誰でも使えるAI」として落とし込む指導スタイルが特徴。</p>
                                    <p>IT未経験の方でも、自分専用のAIを作れるようになるまで、徹底して伴走します。</p>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="profile-bottom-box">
                        <p><span class="gold">「AIを教える人」</span>と<br class="u-br-sp"><span
                                class="lp-hl-gold">「キャリアを変える人」</span><br>両方がそろっているからこそ、<br
                                class="u-hidden-sp">結果が変わるのです。</p>
                    </div>

                </div>
            </div>
        </section>
        <!-- /SECTION 12 Profile -->

        <!-- =========================================
       SECTION 13 | Pricingセクション
       ========================================= -->
        <section class="lp-sec-wrap pricing-section bg-navy">
            <div class="lp-container">
                <div class="lp-content">

                    <header class="lp-sec-header is-left">
                        <div class="lp-sec-header-bg is-vertical">SUBSIDY</div>
                        <h2 class="lp-sec-header-title">
                            「自己投資」のハードルを<br class="u-br-pc">
                            極限まで下げる、国の支援制度。
                        </h2>
                        <div class="lp-sec-header-lead">
                            <p>「AIを学ぶのは大切だと分かっている。でも――<span class="lp-fw-bold">正直、費用が気になる。</span>」<br>
                                そう感じる方も、多いのではないでしょうか。<br class="u-br-pc">
                                だからこそ私たちは、<span class="lp-fw-bold">国の支援制度を活用できる体制</span>を整えています。</p>
                        </div>
                    </header>

                    <div class="pricing-white-box bg-pure-white u-flex-col u-gap-l">

                        <div class="pricing-top-area">
                            <!-- 補助金SVGアニメーション（subsidy.png 置き換え） -->
                            <div class="pricing-bg-img" aria-hidden="true">
                                <svg class="subsidy-svg" viewBox="0 0 320 360" xmlns="http://www.w3.org/2000/svg">
                                    <!-- ① 左：背の高い直方体 -->
                                    <g class="box-left">
                                        <polygon class="face-top" points="15,45 110,45 142,29 47,29" />
                                        <polygon class="face-right" points="110,45 142,29 142,299 110,315" />
                                        <polygon class="face-front" points="15,45 110,45 110,315 15,315" />
                                    </g>
                                    <!-- ② 点線（左ボックス右上→右ボックス左上） -->
                                    <path class="dotted-line" d="M 110,45 L 185,268" stroke-linecap="round" />
                                    <!-- ③ ゴールド矢印（下向き） -->
                                    <path class="arrow-gold"
                                        d="M 219,188 L 233,188 L 233,238 L 245,238 L 226,262 L 207,238 L 219,238 Z" />
                                    <!-- ④ 右：小さい直方体 -->
                                    <g class="box-right">
                                        <polygon class="face-top" points="185,268 267,268 295,254 213,254" />
                                        <polygon class="face-right" points="267,268 295,254 295,326 267,340" />
                                        <polygon class="face-front" points="185,268 267,268 267,340 185,340" />
                                    </g>
                                </svg>
                            </div>
                            <div class="pricing-top-text u-flex-col u-gap-m">
                                <h3 class="subsidy-title">
                                    <span class="title-small">経済産業省の補助金により</span>
                                    <span class="title-large">最大<span class="title-num lp-hl-gold">70</span><span
                                            class="lp-hl-gold">%</span>の補助が<br class="u-br-sp">受けられます。</span>
                                </h3>
                                <div class="subsidy-desc">
                                    <p>本プログラムは、一定条件を満たすことで、<br class="u-br-pc">
                                        <span class="lp-hl-gold">国の補助金制度の対象</span>となります。<br class="u-br-pc">
                                        そのため、通常のスクールと比べて、<br class="u-br-pc">
                                        大幅に<span class="lp-hl-gold">自己負担を抑える</span>ことが可能です。
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="u-flex-col u-gap-s">
                            <div class="pricing-calculation">
                                <div class="price-card type-normal">
                                    <div class="card-head">通常受講料 <span class="tax-text">（税込）</span></div>
                                    <div class="card-body">
                                        <span class="price-num">660,000</span><span class="yen-text">円</span>
                                    </div>
                                </div>

                                <div class="calc-symbol">ー</div>

                                <div class="price-card type-subsidy">
                                    <div class="card-head">経済産業省 補助金</div>
                                    <div class="card-body">
                                        <span class="max-label"><span>最</span><span>大</span></span>
                                        <span class="price-num">420,000</span><span class="yen-text">円</span>
                                    </div>
                                </div>

                                <div class="calc-symbol">＝</div>

                                <div class="price-card type-result">
                                    <div class="card-head">実質負担額 <span class="tax-text">（税込）</span></div>
                                    <div class="card-body">
                                        <span class="price-num">240,000</span><span class="yen-text">円</span>
                                    </div>
                                </div>
                            </div>

                            <ul class="pricing-notes u-flex-col u-gap-xs">
                                <li>※ 対象条件については、無料相談にて個別にご案内いたします。</li>
                                <li>※ 国の予算には限りがあるため、早期終了する場合があります。</li>
                            </ul>

                            <div class="pricing-attention bg-navy">
                                <img src="<?php echo esc_url($base . '/assets/images/pricing/icon_exclamation.svg'); ?>"
                                    alt="注意" class="attn-icon">
                                <div class="attn-text u-flex-col u-gap-xs">
                                    <p class="attn-main">現在、補助金対象枠には<br class="u-br-sp"><span
                                            class="hl-yellow">限りがあります。</span></p>
                                    <p class="attn-sub">そのため、対象となるかどうかだけでも、早めに確認しておくことをおすすめしています。</p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- /SECTION 13 Pricing -->


        <!-- =========================================
       SECTION 14 | CTAセクション
       ========================================= -->
        <section class="lp-sec-wrap cta-section">
            <div class="lp-container">
                <div class="lp-content cta-content-inner">

                    <h2 class="cta-main-copy">
                        あなたの経験で<br class="u-br-sp">どんなAIが作れるのか<br>知りたくありませんか？
                    </h2>
                    <div class="vertical-line"></div>

                    <!-- 共通CTAユニット -->
                    <?php echo $common_cta_html; ?>

                </div>
            </div>
        </section>
        <!-- /SECTION 14 CTA -->

        <!-- =========================================
       SECTION 15 | Scroll Storyセクション
       ========================================= -->
        <section class="scroll-story-section js-scroll-story-trigger">

            <div class="scroll-story-sticky-wrap">

                <div class="scroll-story-bg-area js-scroll-story-bgs">
                    <!-- 1周目 -->
                    <img src="<?php echo esc_url($base . '/assets/images/reason/reason_05.webp'); ?>" alt=""
                        class="floating-img pos-1">
                    <img src="<?php echo esc_url($base . '/assets/images/evidence/evidence_wepon_02.webp'); ?>" alt=""
                        class="floating-img pos-2">
                    <img src="<?php echo esc_url($base . '/assets/images/reason/reason_02.webp'); ?>" alt=""
                        class="floating-img pos-3">
                    <img src="<?php echo esc_url($base . '/assets/images/reason/reason_01.webp'); ?>" alt=""
                        class="floating-img pos-4">
                    <img src="<?php echo esc_url($base . '/assets/images/reason/reason_04.webp'); ?>" alt=""
                        class="floating-img pos-5">
                    <img src="<?php echo esc_url($base . '/assets/images/reason/reason_03.webp'); ?>" alt=""
                        class="floating-img pos-6">
                    <!-- 2周目 -->
                    <img src="<?php echo esc_url($base . '/assets/images/reason/reason_05.webp'); ?>" alt=""
                        class="floating-img pos-1">
                    <img src="<?php echo esc_url($base . '/assets/images/evidence/evidence_wepon_02.webp'); ?>" alt=""
                        class="floating-img pos-2">
                    <img src="<?php echo esc_url($base . '/assets/images/reason/reason_02.webp'); ?>" alt=""
                        class="floating-img pos-3">
                    <img src="<?php echo esc_url($base . '/assets/images/reason/reason_01.webp'); ?>" alt=""
                        class="floating-img pos-4">
                    <img src="<?php echo esc_url($base . '/assets/images/reason/reason_04.webp'); ?>" alt=""
                        class="floating-img pos-5">
                    <img src="<?php echo esc_url($base . '/assets/images/reason/reason_03.webp'); ?>" alt=""
                        class="floating-img pos-6">
                </div>

                <div class="scroll-story-text-area js-scroll-story-blocks">

                    <div class="story-block is-title">
                        <p class="story-line">理想のキャリアは、</p>
                        <p class="story-line">「待つもの」ではなく<br class="u-br-sp">「作るもの」です。</p>
                    </div>

                    <div class="story-block">
                        <p class="story-line">ここまで読んでくださった<br class="u-br-sp">あなたは、</p>
                        <p class="story-line">きっとすでに<br class="u-br-sp">気づいているはずです。</p>
                    </div>

                    <div class="story-block">
                        <p class="story-line">これからの時代、</p>
                        <p class="story-line">年齢だけで評価される<br class="u-br-sp">ことはありません。</p>
                    </div>

                    <div class="story-block">
                        <p class="story-line">そして同時に――</p>
                        <p class="story-line">経験がある人ほど、</p>
                        <p class="story-line">AIによって<br class="u-br-sp">価値を高められる<br class="u-br-sp">時代になっています。</p>
                    </div>

                    <div class="story-block">
                        <p class="story-line">もしこのまま、</p>
                        <p class="story-line">何も変えずに</p>
                        <p class="story-line">今と同じ働き方を<br class="u-br-sp">続けたら——</p>
                    </div>

                    <div class="story-block">
                        <p class="story-line">5年後、</p>
                        <p class="story-line">あなたの市場価値は</p>
                        <p class="story-line">どうなっているでしょうか。</p>
                    </div>

                    <div class="story-block">
                        <p class="story-line">収入は。</p>
                        <p class="story-line">働き方は。</p>
                        <p class="story-line">家族との時間は。</p>
                    </div>

                    <div class="story-block">
                        <p class="story-line">不安を抱えたまま</p>
                        <p class="story-line">働き続けている<br class="u-br-sp">かもしれません。</p>
                    </div>

                    <div class="story-block is-title">
                        <p class="story-line">しかし、もし今、</p>
                        <p class="story-line">一歩踏み出したとしたら。</p>
                    </div>

                    <div class="story-block">
                        <p class="story-line">あなたの経験は、</p>
                        <p class="story-line">「ただの過去」ではなく、</p>
                        <p class="story-line">「武器」になります。</p>
                    </div>

                    <div class="story-block">
                        <p class="story-line">そして——</p>
                        <p class="story-line">あなたは、<br class="u-br-sp">「選ばれる人材」として、</p>
                        <p class="story-line">これからの時代を生きていく<br class="u-br-sp">ことができるでしょう。</p>
                    </div>

                </div>

            </div>
        </section>
        <!-- /SECTION 15 Scroll Story -->

        <!-- =========================================
       SECTION 16 | CTA Lastセクション
       ========================================= -->
        <section class="lp-sec-wrap cta-last-section bg-navy">
            <div class="lp-container">
                <div class="lp-content cta-last-inner">

                    <header class="cta-last-header">
                        <p class="sub-title">まずは</p>
                        <h2 class="main-title">
                            あなたの<span class="hl-large">市場価値を<br class="u-br-sp">「見える化」<br
                                    class="u-br-sp"></span>してみませんか？
                        </h2>
                    </header>

                    <div class="cta-last-box">
                        <p class="box-text">無料相談では、<br class="u-br-sp">あなたのこれまでの経験をもとに、</p>

                        <div class="feature-list">
                            <div class="feature-item">
                                <img src="<?php echo esc_url($base . '/assets/images/cta/cta_last_01.webp'); ?>"
                                    alt="あなたの強み" loading="lazy">
                                <span class="feature-name">あなたの強み</span>
                            </div>

                            <div class="list-divider"></div>

                            <div class="feature-item">
                                <img src="<?php echo esc_url($base . '/assets/images/cta/cta_last_02.webp'); ?>"
                                    alt="活かせるAIスキル" loading="lazy">
                                <span class="feature-name">活かせるAIスキル</span>
                            </div>

                            <div class="list-divider"></div>

                            <div class="feature-item">
                                <img src="<?php echo esc_url($base . '/assets/images/cta/cta_last_03.webp'); ?>"
                                    alt="将来の可能性" loading="lazy">
                                <span class="feature-name">将来の可能性</span>
                            </div>
                        </div>

                        <p class="box-text">を整理し、「これからのキャリアの方向性」を明確にしていきます。</p>
                    </div>

                    <div class="cta-last-footer">
                        <h2 class="footer-copy">
                            あなたの<span class="hl-yellow">経験</span>を<br class="u-br-sp"><span
                                class="hl-large">「武器」</span>に<br class="u-br-sp">変える準備はできていますか？
                        </h2>

                        <div class="vertical-line"></div>

                        <!-- 共通CTAユニット -->
                        <?php echo $common_cta_html; ?>
                    </div>

                </div>
            </div>
        </section>
        <!-- /SECTION 16 CTA Last -->

        <!-- =========================================
       SECTION 17 | Presentセクション
       ========================================= -->
        <section class="lp-sec-wrap present-section bg-navy">
            <div class="lp-sec-header-bg is-vertical is-present">PRESENT</div>
            <div class="lp-container">
                <div class="lp-content u-flex-col u-gap-xl">

                    <header class="present-title-box lp-sec-header is-left">
                        <img src="<?php echo esc_url($base . '/assets/images/present/icon_present.svg'); ?>" alt="プレゼント"
                            class="present-icon">
                        <h2 class="present-title">
                            <span>相談会参加者プレゼント</span>
                            <span class="divider"></span>
                            <span class="lp-hl-yellow">限定5大特典</span>
                        </h2>
                    </header>

                    <ol class="present-list u-gap-l">

                        <li class="present-item">
                            <div class="item-icon">
                                <img src="<?php echo esc_url($base . '/assets/images/present/present_01.webp'); ?>"
                                    alt="" loading="lazy">
                            </div>
                            <div class="item-banner">
                                <div class="banner-label"></div>
                                <div class="banner-text"><span class="lp-hl-gold">転職軸</span>再発見AIツール</div>
                            </div>
                        </li>

                        <li class="present-item">
                            <div class="item-icon">
                                <img src="<?php echo esc_url($base . '/assets/images/present/present_02.webp'); ?>"
                                    alt="" loading="lazy">
                            </div>
                            <div class="item-banner">
                                <div class="banner-label"></div>
                                <div class="banner-text"><span class="lp-hl-gold">40代・50代のための<br
                                            class="u-br-sp"></span>キャリアの健康診断<br class="u-br-sp">AIツール</div>
                            </div>
                        </li>

                        <li class="present-item">
                            <div class="item-icon">
                                <img src="<?php echo esc_url($base . '/assets/images/present/present_03.webp'); ?>"
                                    alt="" loading="lazy">
                            </div>
                            <div class="item-banner">
                                <div class="banner-label"></div>
                                <div class="banner-text"><span class="lp-hl-gold">40代からでも<br
                                            class="u-br-sp">年収を下げない</span>転職戦略</div>
                            </div>
                        </li>

                        <li class="present-item">
                            <div class="item-icon">
                                <img src="<?php echo esc_url($base . '/assets/images/present/present_04.webp'); ?>"
                                    alt="" loading="lazy">
                            </div>
                            <div class="item-banner">
                                <div class="banner-label"></div>
                                <div class="banner-text"><span class="lp-hl-gold">40代からの</span><br
                                        class="u-br-sp">面接突破マニュアル</div>
                            </div>
                        </li>

                        <li class="present-item">
                            <div class="item-icon">
                                <img src="<?php echo esc_url($base . '/assets/images/present/present_05.webp'); ?>"
                                    alt="" loading="lazy">
                            </div>
                            <div class="item-banner">
                                <div class="banner-label"></div>
                                <div class="banner-text">40代からの転職で<br class="u-br-sp"><span
                                        class="lp-hl-gold">心が折れそうになったら</span><br class="u-br-sp">読む本</div>
                            </div>
                        </li>

                    </ol>


                    <!-- 共通CTAユニット -->
                    <?php echo $common_cta_html; ?>

                </div>
            </div>
        </section>
        <!-- /SECTION 17 Present -->

        <!-- =========================================
       SECTION 18 | FAQセクション
       ========================================= -->
        <section class="lp-sec-wrap faq-section bg-bg">
            <div class="lp-container">
                <div class="lp-content u-flex-col u-gap-l">

                    <header class="lp-sec-header">
                        <div class="lp-sec-header-bg">FAQ</div>
                        <h2 class="lp-sec-header-title">よくある質問</h2>
                        <div class="lp-sec-header-lead">
                            <p>受講前に多くの方が感じる不安や疑問にお答えします。</p>
                        </div>
                    </header>

                    <div class="faq-list">

                        <div class="faq-item">
                            <button class="faq-q js-faq-toggle" aria-expanded="false">
                                <span class="faq-icon-q">Q.</span>
                                <span class="faq-q-text">ITやプログラミングは全く未経験ですが、本当にAIが作れますか？</span>
                                <span class="faq-toggle-icon"></span>
                            </button>
                            <div class="faq-a-wrap">
                                <div class="faq-a-content">
                                    <div class="faq-a-inner">
                                        <span class="faq-icon-a">A.</span>
                                        <p class="faq-a-text">
                                            はい、未経験の方でも作れるようになります。<br>本プログラムでは、コードを書かない「ノーコードツール」を使用します。<br>また、専属のAI担当がマンツーマンで伴走するため、「分からないまま進む」ということはありません。<br>必要なのは、あなたのこれまでの業務経験だけです。
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q js-faq-toggle" aria-expanded="false">
                                <span class="faq-icon-q">Q.</span>
                                <span class="faq-q-text">40代・50代からでも遅くありませんか？</span>
                                <span class="faq-toggle-icon"></span>
                            </button>
                            <div class="faq-a-wrap">
                                <div class="faq-a-content">
                                    <div class="faq-a-inner">
                                        <span class="faq-icon-a">A.</span>
                                        <p class="faq-a-text">
                                            むしろ、40代・50代の方にこそ最適な内容です。<br>AIは、「経験がない人」よりも「経験がある人」の方が価値を出しやすいツールです。<br>長年の現場経験がある方ほど、AIを使ったときの成果は大きくなります。<br>年齢は不利ではなく、最大の武器になります。
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q js-faq-toggle" aria-expanded="false">
                                <span class="faq-icon-q">Q.</span>
                                <span class="faq-q-text">働きながらでも受講できますか？</span>
                                <span class="faq-toggle-icon"></span>
                            </button>
                            <div class="faq-a-wrap">
                                <div class="faq-a-content">
                                    <div class="faq-a-inner">
                                        <span class="faq-icon-a">A.</span>
                                        <p class="faq-a-text">
                                            はい、無理なく続けられる設計になっています。<br>完全オンラインのため、お仕事や家庭の予定に合わせて受講することが可能です。<br>また、マンツ
                                            ーマン形式のため、あなたのペースに合わせて無理なく進めることができます。
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q js-faq-toggle" aria-expanded="false">
                                <span class="faq-icon-q">Q.</span>
                                <span class="faq-q-text">転職する予定がなくても受講する意味はありますか？</span>
                                <span class="faq-toggle-icon"></span>
                            </button>
                            <div class="faq-a-wrap">
                                <div class="faq-a-content">
                                    <div class="faq-a-inner">
                                        <span class="faq-icon-a">A.</span>
                                        <p class="faq-a-text">もちろんあります。AIスキルと分身AIを持つことで、<br>✔ 今の会社での評価が上がる<br>✔
                                            業務効率が改善される<br>✔
                                            キャリアの選択肢が増える<br>といった効果が期待できます。<br>「今すぐ転職しない」という方にとっても、将来への備え（キャリアの保険）として価値があります。
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q js-faq-toggle" aria-expanded="false">
                                <span class="faq-icon-q">Q.</span>
                                <span class="faq-q-text">給付金の手続きは難しくありませんか？</span>
                                <span class="faq-toggle-icon"></span>
                            </button>
                            <div class="faq-a-wrap">
                                <div class="faq-a-content">
                                    <div class="faq-a-inner">
                                        <span class="faq-icon-a">A.</span>
                                        <p class="faq-a-text">
                                            <strong>面倒な申請手続きは、すべて事務局にお任せください。</strong><br>
                                            複雑な書類作成や事務局への申請手続きは、当スクールの専任スタッフが代行いたします。<br>受講者の皆様に煩雑な作業をお願いすることはございませんので、「難しそうで不安」という方でも、どうぞ安心してお任せください。
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-q js-faq-toggle" aria-expanded="false">
                                <span class="faq-icon-q">Q.</span>
                                <span class="faq-q-text">パソコンが得意でなくても大丈夫ですか？</span>
                                <span class="faq-toggle-icon"></span>
                            </button>
                            <div class="faq-a-wrap">
                                <div class="faq-a-content">
                                    <div class="faq-a-inner">
                                        <span class="faq-icon-a">A.</span>
                                        <p class="faq-a-text">
                                            はい、大丈夫です。実際に受講される方の多くが、ITやAIに触れたことがない状態からスタートされています。<br>基本操作から丁寧にサポートするため、安心して取り組んでいただけます。
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>
        <!-- /SECTION 18 FAQ -->

        <!-- =========================================
       FOOTER | フッターセクション
       ========================================= -->
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

    <!-- FLOATING CTA -->
    <?php $btn = $base . '/assets/images/btn/'; ?>
    <div class="floating-cta">
        <div class="floating-cta__label">
            <img src="<?php echo esc_url($btn . 'floating_cta_btn_label.svg'); ?>" alt="" />
        </div>
        <a href="https://line.me/ti/p/%40800ooixk" class="floating-cta__btn" target="_blank" rel="noopener noreferrer">
            <img src="<?php echo esc_url($btn . 'floating_cta_btn.svg'); ?>" alt="無料キャリア相談会を予約する" />
        </a>
    </div>
    <!-- /FLOATING CTA -->

    <?php wp_footer(); ?>
</body>

</html>