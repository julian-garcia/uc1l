<?php

function theme_scripts() {
  $version = wp_get_theme()->get('Version');
  wp_enqueue_style('uc1l', get_template_directory_uri() . '/dist/style/main.css', '', $version);
  wp_enqueue_script('uc1l', get_template_directory_uri() . '/dist/js/main.js', '', $version, true);
}

function add_editor_styles() {
    add_editor_style( get_theme_file_uri( '/dist/style/style-editor.css' ) );
}

function testimonial_post_type() {
  register_post_type('testimonial',
    array(
      'rewrite' => array('slug' => 'testimonial'),
      'labels' => array(
        'name' => 'Testimonials',
        'singular_name' => 'Testimonial',
        'add_new_item' => 'Add New Testimonial',
        'edit_item' => 'Edit Testimonial'
      ),
      'menu_icon' => 'dashicons-groups',
      'public' => true,
      'has_archive' => false,
      'show_in_rest' => false,
      'supports' => array(
        'title', 'editor'
      )
    )
  );
}

function team_member_post_type() {
  register_post_type('team',
    array(
      'rewrite' => array('slug' => 'team'),
      'labels' => array(
        'name' => 'Team Members',
        'singular_name' => 'Team Member',
        'add_new_item' => 'Add New Team Member',
        'edit_item' => 'Edit Team Member'
      ),
      'menu_icon' => 'dashicons-admin-users',
      'public' => true,
      'has_archive' => false,
      'show_in_rest' => false,
      'supports' => array(
        'title', 'editor', 'thumbnail'
      )
    )
  );
}

function setup_menus() {
  $locations = array(
    'primary' => 'Main Menu',
  );
  register_nav_menus($locations);
}

function cards_shortcode() {
  ob_start();
  get_template_part('templates/content', 'cards');
  return ob_get_clean();
}

function text_image_blocks_shortcode() {
  ob_start();
  get_template_part('templates/content', 'text-image-block');
  return ob_get_clean();
}

function mission_shortcode() {
  ob_start();
  get_template_part('templates/content', 'mission');
  return ob_get_clean();
}

function triad_shortcode() {
  ob_start();
  get_template_part('templates/content', 'triad');
  return ob_get_clean();
}

function shortcodes_init() {
  add_shortcode( 'cards', 'cards_shortcode' );
  add_shortcode( 'blocks', 'text_image_blocks_shortcode' );
  add_shortcode( 'mission', 'mission_shortcode' );
  add_shortcode( 'triad', 'triad_shortcode' );
}

function page_excerpt() {
  add_post_type_support( 'page', 'excerpt' );
}

add_action('wp_enqueue_scripts', 'theme_scripts');
add_action('admin_init', 'add_editor_styles');
add_action( 'init', 'testimonial_post_type' );
add_action( 'init', 'team_member_post_type' );
add_action( 'init', 'setup_menus' );
add_action( 'init', 'shortcodes_init' );
add_action( 'init', 'page_excerpt' );
add_theme_support( 'post-thumbnails' );
