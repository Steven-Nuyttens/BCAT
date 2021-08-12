<?php

function bcat_files() {
  wp_enqueue_script('main-bcat-js', get_theme_file_uri('/js/scripts-bundled.js'), NULL, '1.0', true);
  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
  wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
  wp_enqueue_style('font-awesome2', 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css');
  wp_enqueue_style('bcat_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'bcat_files');

function bcat_features() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_image_size('coachLandscape', 400, 260, true);
  add_image_size('coachPortrait', 480, 650,true);
}

add_action('after_setup_theme', 'bcat_features');

function bcat_adjust_queries($query) {
  if (!is_admin() AND is_post_type_archive('team') AND is_main_query()) {
    $query->set('orderby', 'title');
    $query->set('posts_per_page', -1);
  }



  if (!is_admin() AND is_post_type_archive('event') AND is_main_query()) {
    $today = date('Ymd');
    $query->set('meta_key', 'event_date');
    $query->set('orderby', 'meta_value_num');
    $query->set('order', 'ASC');
    $query->set('meta_query', array(
      array(
        'key' => 'event_date',
        'compare' => '>=',
        'value' => $today,
        'type' => 'numeric'
      )
      ));
  }
}

add_action('pre_get_posts', 'bcat_adjust_queries');




