<?php

function theme_scripts() {
  wp_enqueue_style('uc1l-css', get_template_directory_uri() . '/dist/style/main.css');
  wp_enqueue_script( 'uc1l-js', get_template_directory_uri() . '/dist/js/main.js', array(), '1.0', true );
}

function add_editor_styles() {
    add_editor_style( get_theme_file_uri( '/dist/style/style-editor.css' ) );
}

function event_post_type() {
  register_post_type('event',
    array(
      'rewrite' => array('slug' => 'event'),
      'labels' => array(
        'name' => 'Events',
        'singular_name' => 'Event',
        'add_new_item' => 'Add New Event',
        'edit_item' => 'Edit Event'
      ),
      'menu_icon' => 'dashicons-calendar',
      'public' => true,
      'has_archive' => false,
      'show_in_rest' => false,
      'supports' => array(
        'title', 'thumbnail', 'editor', 'excerpt'
      ),
      'taxonomies' => array('post_tag')
    )
  );
}

function setup_menus() {
  $locations = array(
    'primary' => 'Main Menu',
  );
  register_nav_menus($locations);
}

add_action('wp_enqueue_scripts', 'theme_scripts');
add_action('admin_init', 'add_editor_styles');
add_action( 'init', 'event_post_type' );
add_action( 'init', 'setup_menus' );
