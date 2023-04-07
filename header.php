<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php if(is_front_page()): ?>
    <meta name="description" content="U Change One Life (UC1L) is a 501(c)(3) nonprofit formed for you to unlock that inner perfect self by optimizing health and wellbeing in every major area.">
    <title><?php bloginfo( 'name' ); ?></title>
    <?php else: ?>
    <meta name="description" content="<?php wp_title(''); echo ' | ';  bloginfo( 'name' ); ?>">
    <title><?php wp_title(''); echo ' | ';  bloginfo( 'name' ); ?></title>
  <?php endif; ?>
  <?php wp_head() ?>
</head>
<body class="body">
  <header class="header">
    <div class="header-container">
      <a href="<?php echo site_url() ?>" class="custom-logo" rel="home">
        <img src="<?php echo get_site_icon_url(); ?>" alt="<?php bloginfo( 'name' ); ?>">
      </a>
      <h1>
        <a href="/">U Change 1 Life</a>
      </h1>
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
  <main>
