<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-HK9XSRRTEB"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-HK9XSRRTEB');
  </script>
  <script type="text/javascript">
    (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "hzmoq5g5l5");
  </script>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php if(is_front_page()): ?>
    <?php if(get_the_excerpt()): ?>
      <meta name="description" content="<?php echo get_the_excerpt(); ?>">
    <?php else: ?>
      <meta name="description" content="U Change One Life (UC1L) is a 501(c)(3) nonprofit formed for you to unlock that inner perfect self by optimizing health and wellbeing in every major area.">
    <?php endif; ?>
    <title><?php bloginfo( 'name' ); ?></title>
  <?php else: ?>
    <?php if(get_the_excerpt()): ?>
      <meta name="description" content="<?php echo get_the_excerpt(); ?>">
    <?php else: ?>
      <meta name="description" content="<?php wp_title(''); echo ' | ';  bloginfo( 'name' ); ?>">
    <?php endif; ?>
    <title><?php wp_title(''); echo ' | ';  bloginfo( 'name' ); ?></title>
  <?php endif; ?>
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-TZGBBPK');</script>
  <!-- End Google Tag Manager -->
  <?php wp_head() ?>
</head>
<body class="body">
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TZGBBPK"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <header class="header">
    <div class="header-container">
      <a href="<?php echo site_url() ?>" class="custom-logo" rel="home">
        <img src="<?php echo get_template_directory_uri(); ?>/dist/images/logo.svg" alt="<?php bloginfo( 'name' ); ?>">
      </a>
      <div></div>
      <?php
        wp_nav_menu(
          array(
            'menu' => 'primary',
            'container' => '',
            'theme_location' => 'primary',
            'menu_class' => 'menu'
          )
        );
      ?>
      <button id="mobileMenuToggle" class="mobile-menu-toggle">
        <img id="mobileMenuClosed" src="<?php echo get_template_directory_uri(); ?>/dist/images/menu-toggle.svg" alt="">
        <img id="mobileMenuOpen" src="<?php echo get_template_directory_uri(); ?>/dist/images/close-menu.svg" alt="" class="hidden">
      </button>
      <?php
        wp_nav_menu(
          array(
            'menu' => 'primary',
            'menu_id' => 'mobileMenu',
            'container' => '',
            'theme_location' => 'primary',
            'menu_class' => 'mobile-menu hidden'
          )
        );
      ?>
    </div>
  </header>
  <?php
    $isPost = is_single() && 'post' == get_post_type();
    $categorySlug = get_the_category() ? get_the_category()[0]->slug : '';
  ?>
  <main class="<?php echo get_post_type() . ' ' . $categorySlug; ?>">
    <?php get_template_part('templates/content', 'social'); ?>

