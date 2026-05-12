<?php $options = get_design_plus_option(); ?>
<!DOCTYPE html>
<html class="pc" <?php language_attributes(); ?>>
<?php if($options['use_ogp']) { ?>
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">
<?php } else { ?>
<head>
<?php }; ?>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PZZRQWLP');</script>
<!-- End Google Tag Manager -->
<meta charset="<?php bloginfo('charset'); ?>">
<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
<meta name="viewport" content="width=device-width">
<title><?php wp_title('|', true, 'right'); ?></title>
<meta name="description" content="<?php seo_description(); ?>">
<meta name="facebook-domain-verification" content="byp50r96u1ue8904e5ry8ikf1xq665" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
<?php
     if ( $options['favicon'] ) {
       $favicon_image = wp_get_attachment_image_src( $options['favicon'], 'full');
       if(!empty($favicon_image)) {
?>
<link rel="shortcut icon" href="<?php echo esc_url($favicon_image[0]); ?>">
<?php }; }; ?>
<?php wp_enqueue_style('style', get_stylesheet_uri(), false, version_num(), 'all'); wp_enqueue_script( 'jquery' ); if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>
<link rel='stylesheet' id='su-shortcodes-css' href='https://growthing.co.jp/sys/wp-content/plugins/shortcodes-ultimate/includes/css/shortcodes.css?ver=5.12.5' type='text/css' media='all' />
	</head>
<body id="body" <?php body_class(); ?>>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PZZRQWLP"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<?php
     if ($options['show_load_screen'] == 'type2') {
       if(is_front_page()){
         load_icon();
       }
     } elseif ($options['show_load_screen'] == 'type3') {
       if(is_front_page() || is_home() || is_archive() ){
         load_icon();
       }
     };
?>

<div id="container">

 <?php
      // Message --------------------------------------------------------------------
      if($options['show_header_message'] && $options['header_message']) {
        if( (is_front_page() && $options['show_header_message_top']) || (!is_front_page() && $options['show_header_message_sub']) ) {
 ?>
 <div id="header_message" class="<?php echo esc_attr($options['header_message_width']); if($options['show_header_message_close']) { echo ' show_close_button'; }; ?>" <?php if($options['show_header_message_close'] && isset($_COOKIE['close_header_message'])) { echo 'style="display:none;"'; }; ?>>
  <div class="post_content clearfix">
   <?php echo apply_filters('the_content', $options['header_message'] ); ?>
  </div>
  <?php if($options['show_header_message_close']) { ?>
  <div id="close_header_message"></div>
  <?php }; ?>
 </div>
 <?php }; }; ?>

 <?php if( (is_page() && get_post_meta($post->ID, 'page_hide_header', true)) || is_404() && $options['hide_header_404']) { } else { ?>

 <header id="header">
  <?php
       // Logo --------------------------------------------------------------------
  ?>
  <div id="header_logo">
   <?php header_logo(); ?>
  </div>
  <?php
       // Description --------------------------------------------------------------------
       if( $options['show_header_desc'] || $options['show_header_desc_mobile'] && get_bloginfo('description')) {
         if(is_single() || is_page() && !is_front_page() ) {
  ?>
  <h3 id="site_description" class="<?php if($options['show_header_desc']){ echo 'show_desc_pc'; }; ?> <?php if($options['show_header_desc_mobile']){ echo 'show_desc_mobile'; }; ?>"><span><?php echo esc_html(get_bloginfo('description')); ?></span></h3>
  <?php } else { ?>
  <h3 id="site_description" class="<?php if($options['show_header_desc']){ echo 'show_desc_pc'; }; ?> <?php if($options['show_header_desc_mobile']){ echo 'show_desc_mobile'; }; ?>"><span><?php echo esc_html(get_bloginfo('description')); ?></span></h2>
  <?php
         };
       };
  ?>
  <?php
       // header button -----------------------------------------
       if($options['show_header_button1'] || $options['show_header_button2'] || $options['show_header_button3'] ) {
  ?>
  <div id="header_button" class="clearfix">
   <?php
        for($i = 1; $i <= 3; $i++) {
          if($options['show_header_button'.$i]) {
   ?>
   <a class="num<?php echo $i; ?>" href="<?php echo esc_html($options['header_button_url'.$i]); ?>" <?php if($options['header_button_target'.$i]){ echo 'target="_blank"'; }; ?>>
    <span><?php echo esc_html($options['header_button_label'.$i]); ?></span>
   </a>
  <?php }; }; ?>
  </div>
  <?php }; ?>
  <?php
       // drawer menu button --------------------------------------
       if (has_nav_menu('drawer-menu')) {
  ?>
  <a id="menu_button" href="#"><span></span><span></span><span></span></a>
  <?php }; ?>
 </header>

 <?php
      // drawer menu --------------------------------------------------
      if (has_nav_menu('drawer-menu')) {
 ?>
 <div id="drawer_menu">
  <div id="drawer_menu_inner">
   <?php // global memu ------------------------------------ ?>
   <nav id="global_menu">
    <?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'theme_location' => 'drawer-menu' , 'container' => '' ) ); ?>
   </nav>
   <div id="drawer_menu_footer">
    <?php
         // footer sns ------------------------------------
         if($options['show_footer_sns']) {
           $facebook = $options['header_facebook_url'];
           $twitter = $options['header_twitter_url'];
           $insta = $options['header_instagram_url'];
           $pinterest = $options['header_pinterest_url'];
           $youtube = $options['header_youtube_url'];
           $contact = $options['header_contact_url'];
           $show_rss = $options['header_show_rss'];
    ?>
    <ul id="drawer_footer_sns" class="footer_sns clearfix">
     <?php if($insta) { ?><li class="insta"><a href="<?php echo esc_url($insta); ?>" rel="nofollow" target="_blank" title="Instagram"><span>Instagram</span></a></li><?php }; ?>
     <?php if($twitter) { ?><li class="twitter"><a href="<?php echo esc_url($twitter); ?>" rel="nofollow" target="_blank" title="Twitter"><span>Twitter</span></a></li><?php }; ?>
     <?php if($facebook) { ?><li class="facebook"><a href="<?php echo esc_url($facebook); ?>" rel="nofollow" target="_blank" title="Facebook"><span>Facebook</span></a></li><?php }; ?>
     <?php if($pinterest) { ?><li class="pinterest"><a href="<?php echo esc_url($pinterest); ?>" rel="nofollow" target="_blank" title="Pinterest"><span>Pinterest</span></a></li><?php }; ?>
     <?php if($youtube) { ?><li class="youtube"><a href="<?php echo esc_url($youtube); ?>" rel="nofollow" target="_blank" title="Youtube"><span>Youtube</span></a></li><?php }; ?>
     <?php if($contact) { ?><li class="contact"><a href="<?php echo esc_url($contact); ?>" rel="nofollow" target="_blank" title="Contact"><span>Contact</span></a></li><?php }; ?>
     <?php if($show_rss) { ?><li class="rss"><a href="<?php esc_url(bloginfo('rss2_url')); ?>" rel="nofollow" target="_blank" title="RSS"><span>RSS</span></a></li><?php }; ?>
    </ul>
    <?php }; ?>
    <?php
         // footer menu --------------------------------------------------------------------
         if (has_nav_menu('footer-menu-bottom')) {
    ?>
    <div id="drawer_footer_menu" class="clearfix">
     <?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'theme_location' => 'footer-menu-bottom' , 'container' => '' , 'depth' => '1') ); ?>
    </div>
    <?php }; ?>
    <?php
         // Search --------------------------------------------------------------------
         if( $options['show_header_search']) {
    ?>
    <div id="drawer_search">
     <form role="search" method="get" id="drawer_searchform" action="<?php echo esc_url(home_url()); ?>">
      <div class="input_area"><input type="text" value="" id="drawer_search_input" name="s"></div>
      <div class="button"><label for="drawer_search_button"></label><input type="submit" id="drawer_search_button" value=""></div>
     </form>
    </div>
    <?php }; ?>
   </div>
  </div>
 </div>
 <?php get_template_part( 'template-parts/megamenu' ); ?>
 <?php }; ?>

 <?php }; // END hide header ?>

 <?php
      //  Header slider -------------------------------------------------------------------------
      if(is_front_page()) {

        $index_slider = '';
        $display_header_content = '';

        if(is_mobile() && ($options['mobile_show_index_slider'] == 'type1')){
          $device = 'mobile_';
        } else {
          $device = '';
        }

        if(!is_mobile() && $options['show_index_slider']) {
          $index_slider = $options['index_slider'];
          $slider_type = $options['index_slider_type'];
          $display_header_content = 'show';
        } elseif(is_mobile() && ($options['mobile_show_index_slider'] == 'type1') ) {
          $index_slider = $options['mobile_index_slider'];
          $slider_type = $options['mobile_index_slider_type'];
          $display_header_content = 'show';
        } elseif(is_mobile() && ($options['mobile_show_index_slider'] == 'type2') ) {
          $index_slider = $options['index_slider'];
          $slider_type = $options['index_slider_type'];
          $display_header_content = 'show';
        }

        if($display_header_content == 'show'){
 ?>
 <div id="header_slider_wrap" class="<?php echo esc_attr($slider_type); ?> position_<?php echo esc_attr($options['index_slider_catch_position']); ?>">

  <?php // Catchphrase for type1 ----------------------------------------------------------------- ?>
  <?php if($slider_type == 'type1') { ?>
  <div id="header_slider_catch">
   <div class="caption">
    <?php if(!empty($options[$device . 'index_slider_sub_title'])) { ?>
    <p class="sub_title rich_font_<?php echo esc_attr($options[$device . 'index_slider_sub_title_font_type']); ?>"><?php echo wp_kses_post(nl2br($options[$device . 'index_slider_sub_title'])); ?></p>
    <?php }; ?>
    <?php if(!empty($options[$device . 'index_slider_catch'])) { ?>
    <h2 class="catch rich_font_<?php echo esc_attr($options[$device . 'index_slider_catch_font_type']); ?>"><?php echo wp_kses_post(nl2br($options[$device . 'index_slider_catch'])); ?></h2>
    <?php }; ?>
   </div>
  </div>
  <?php }; ?>

  <?php // Slider ----------------------------------------------------------------- ?>
  <div id="header_slider">
   <?php
        $i = 1;
        $slider_item_total = count($index_slider);
        foreach ( $index_slider as $key => $value ) :
          $animation_type = $value['animation_type'];
          $item_type = $value['slider_type'];
          if($item_type == 'type1') {
            // image slider ------------------------------------------------------
            if(is_mobile() && ($options['mobile_show_index_slider'] == 'type1') ) {
              $image = wp_get_attachment_image_src( $value['image'], 'full');
              $image_mobile = '';
              $desc_mobile = '';
            } else {
              $image = wp_get_attachment_image_src( $value['image'], 'full');
              $image_mobile = wp_get_attachment_image_src( $value['image_mobile'], 'full');
              $desc_mobile = $value['desc_mobile'];
            }
   ?>
   <div class="item image_item item<?php echo $i; ?> slick-slide bg_animation_<?php echo esc_attr($animation_type); ?>">
    <?php if($slider_type == 'type1' && $value['item_link_url']) { ?>
    <a class="item_link" href="<?php echo esc_url($value['item_link_url']); ?>" <?php if($value['item_link_target']){ echo 'target="_blank"'; }; ?>>
    <?php }; ?>
    <div class="caption">
     <?php
          if($slider_type == 'type1') {
            $catch = $value['item_list'];
            if(!empty($catch)){
     ?>
     <h3 class="catch_list">
      <?php
           foreach ( $catch as $key2 => $value2 ) :
             $catch_text = $value2['catch'];
             $catch_font_type = $value2['font_type'];
      ?>
      <div class="parent num<?php echo $key2; ?> animate_item rich_font_<?php echo esc_attr($catch_font_type); ?>"><?php echo sepText2($catch_text); ?><div class="bg_item"></div></div>
      <?php endforeach; ?>
     </h3>
     <?php
            };
          } else {
            if(!empty($value['catch'])){
     ?>
     <h3 class="animate_item catch rich_font_<?php echo esc_attr($value['catch_font_type']); ?>"><?php echo wp_kses_post(nl2br($value['catch'])); ?></h3>
     <?php }; ?>
     <?php if(!empty($value['desc'])){ ?>
     <div class="animate_item desc">
      <p<?php if($desc_mobile){ echo ' class="pc"'; }; ?>><?php echo wp_kses_post(nl2br($value['desc'])); ?></p>
      <?php if($desc_mobile) { ?><p class="mobile"><?php echo wp_kses_post(nl2br($desc_mobile)); ?></p><?php }; ?>
     </div>
     <?php }; ?>
     <?php if($value['show_button']){ ?><a class="animate_item button button_animation_<?php echo esc_attr($value['button_animation_type']); ?>" href="<?php echo esc_attr($value['button_url']); ?>" <?php if($value['button_target']){ echo 'target="_blank"'; }; ?>><span><?php echo esc_html($value['button_label']); ?></span></a><?php }; ?>
     <?php
          };
     ?>
    </div>
    <?php if($slider_type == 'type1' && $value['item_link_url']) { ?>
    </a>
    <?php }; ?>
    <?php if($value['use_overlay'] == 1) { ?><div class="overlay"></div><?php }; ?>
    <?php if($image) { ?><div class="bg_image <?php if($image_mobile) { echo 'pc'; }; ?>" style="background:url(<?php echo esc_attr($image[0]); ?>) no-repeat center center; background-size:cover;"></div><?php }; ?>
    <?php if($image_mobile) { ?><div class="bg_image mobile" style="background:url(<?php echo esc_attr($image_mobile[0]); ?>) no-repeat center center; background-size:cover;"></div><?php }; ?>
   </div><!-- END .item -->
   <?php
          // video slider ------------------------------------------------------
          } elseif($item_type == 'type2') {
            $video = $value['video'];
            $image = wp_get_attachment_image_src( $value['video_image'], 'full');
            if(is_mobile() && ($options['mobile_show_index_slider'] == 'type1') ) {
              $desc_mobile = '';
            } else {
              $desc_mobile = $value['desc_mobile'];
            }
   ?>
   <div class="item <?php if($video && auto_play_movie()) { echo 'video'; } else { echo 'image_item'; }; ?> item<?php echo $i; ?> slick-slide">
    <?php if($slider_type == 'type1' && $value['item_link_url']) { ?>
    <a class="item_link" href="<?php echo esc_url($value['item_link_url']); ?>" <?php if($value['item_link_target']){ echo 'target="_blank"'; }; ?>>
    <?php }; ?>
    <div class="caption">
     <?php
          if($slider_type == 'type1') {
            $catch = $value['item_list'];
            if(!empty($catch)){
     ?>
     <h3 class="catch_list">
      <?php
           foreach ( $catch as $key2 => $value2 ) :
             $catch_text = $value2['catch'];
             $catch_font_type = $value2['font_type'];
      ?>
      <div class="parent num<?php echo $key2; ?> animate_item rich_font_<?php echo esc_attr($catch_font_type); ?>"><?php echo sepText2($catch_text); ?><div class="bg_item"></div></div>
      <?php endforeach; ?>
     </h3>
     <?php
            };
          } else {
            if(!empty($value['catch'])){
     ?>
     <h3 class="animate_item catch rich_font_<?php echo esc_attr($value['catch_font_type']); ?>"><?php echo wp_kses_post(nl2br($value['catch'])); ?></h3>
     <?php }; ?>
     <?php if(!empty($value['desc'])){ ?>
     <div class="animate_item desc">
      <p<?php if($desc_mobile){ echo ' class="pc"'; }; ?>><?php echo wp_kses_post(nl2br($value['desc'])); ?></p>
      <?php if($desc_mobile) { ?><p class="mobile"><?php echo wp_kses_post(nl2br($desc_mobile)); ?></p><?php }; ?>
     </div>
     <?php }; ?>
     <?php if($value['show_button']){ ?><a class="animate_item button button_animation_<?php echo esc_attr($value['button_animation_type']); ?>" href="<?php echo esc_attr($value['button_url']); ?>" <?php if($value['button_target']){ echo 'target="_blank"'; }; ?>><span><?php echo esc_html($value['button_label']); ?></span></a><?php }; ?>
     <?php
          };
     ?>
    </div>
    <?php if($slider_type == 'type1' && $value['item_link_url']) { ?>
    </a>
    <?php }; ?>
    <?php if($value['use_overlay'] == 1) { ?><div class="overlay"></div><?php }; ?>
    <?php if($video && auto_play_movie()) { ?>
    <video class="slide-video slide-media" preload="auto" muted playsinline <?php if($slider_item_total == 1) { echo "loop"; }; ?>>
     <source src="<?php echo esc_url(wp_get_attachment_url($video)); ?>" type="video/mp4" />
    </video>
    <?php } else { ?>
    <?php if($image) { ?><div class="bg_image" style="background:url(<?php echo esc_attr($image[0]); ?>) no-repeat center center; background-size:cover;"></div><?php }; ?>
    <?php }; ?>
   </div><!-- END .item -->
   <?php
          // youtube slider ------------------------------------------------------
          } elseif($item_type == 'type3') {
            $youtube_url = $value['youtube'];
            if(is_mobile() && ($options['mobile_show_index_slider'] == 'type1') ) {
              $desc_mobile = '';
            } else {
              $desc_mobile = $value['desc_mobile'];
            }
   ?>
   <div class="item <?php if($youtube_url && auto_play_movie()) { echo 'youtube'; } else { echo 'image_item'; }; ?> item<?php echo $i; ?> slick-slide">
    <?php if($slider_type == 'type1' && $value['item_link_url']) { ?>
    <a class="item_link" href="<?php echo esc_url($value['item_link_url']); ?>" <?php if($value['item_link_target']){ echo 'target="_blank"'; }; ?>>
    <?php }; ?>
    <div class="caption">
     <?php
          if($slider_type == 'type1') {
            $catch = $value['item_list'];
            if(!empty($catch)){
     ?>
     <h3 class="catch_list">
      <?php
           foreach ( $catch as $key2 => $value2 ) :
             $catch_text = $value2['catch'];
             $catch_font_type = $value2['font_type'];
      ?>
      <div class="parent num<?php echo $key2; ?> animate_item rich_font_<?php echo esc_attr($catch_font_type); ?>"><?php echo sepText2($catch_text); ?><div class="bg_item"></div></div>
      <?php endforeach; ?>
     </h3>
     <?php
            };
          } else {
            if(!empty($value['catch'])){
     ?>
     <h3 class="animate_item catch rich_font_<?php echo esc_attr($value['catch_font_type']); ?>"><?php echo wp_kses_post(nl2br($value['catch'])); ?></h3>
     <?php }; ?>
     <?php if(!empty($value['desc'])){ ?>
     <div class="animate_item desc">
      <p<?php if($desc_mobile){ echo ' class="pc"'; }; ?>><?php echo wp_kses_post(nl2br($value['desc'])); ?></p>
      <?php if($desc_mobile) { ?><p class="mobile"><?php echo wp_kses_post(nl2br($desc_mobile)); ?></p><?php }; ?>
     </div>
     <?php }; ?>
     <?php if($value['show_button']){ ?><a class="animate_item button button_animation_<?php echo esc_attr($value['button_animation_type']); ?>" href="<?php echo esc_attr($value['button_url']); ?>" <?php if($value['button_target']){ echo 'target="_blank"'; }; ?>><span><?php echo esc_html($value['button_label']); ?></span></a><?php }; ?>
     <?php
          };
     ?>
    </div>
    <?php if($slider_type == 'type1' && $value['item_link_url']) { ?>
    </a>
    <?php }; ?>
    <?php if($value['use_overlay'] == 1) { ?><div class="overlay"></div><?php }; ?>
    <?php if($youtube_url && auto_play_movie()) { ?>
    <?php if(preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[\w\-?&!#=,;]+/[\w\-?&!#=/,;]+/|(?:v|e(?:mbed)?)/|[\w\-?&!#=,;]*[?&]v=)|youtu\.be/)([\w-]{11})(?:[^\w-]|\Z)%i', $youtube_url, $matches)) { ?>
    <div class="youtube_wrap">
     <div class="youtube_inner">
      <iframe id="youtube-player-<?php echo $i; ?>" class="youtube-player slide-youtube" src="https://www.youtube.com/embed/<?php echo esc_attr($matches[1]); ?>?enablejsapi=1&controls=0&fs=0&iv_load_policy=3&rel=0&showinfo=0&<?php if($slider_item_total > 1) { echo "loop=0"; } else { echo "playlist=" . esc_attr($matches[1]); }; ?>&playsinline=1" frameborder="0"></iframe>
     </div>
    </div>
    <?php }; ?>
    <?php } else { ?>
    <?php if($image) { ?><div class="bg_image" style="background:url(<?php echo esc_attr($image[0]); ?>) no-repeat center center; background-size:cover;"></div><?php }; ?>
    <?php }; ?>
   </div><!-- END .item -->
   <?php
          }; // END slider type
        $i++;
        endforeach;
   ?>
  </div><!-- END #header_slider -->
  <a id="header_slider_button" href="#index_content_builder"></a>
 </div><!-- END #header_slider_wrap -->
 <?php
        };
      }; // END front page
 ?>
