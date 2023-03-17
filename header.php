<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php if(is_front_page()): ?>
    <title><?php bloginfo( 'name' ); ?></title>
  <?php else: ?>
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
    </div>
  </header>
  <main>
