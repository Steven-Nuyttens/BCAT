<?php

function university_post_types() {

  // Event post type

  register_post_type('event', array(
    'has_archive' => true,
    'supports' => array('title', 'editor', 'excerpt'),
    'public' => true,
    'show_in_rest' => true,
    'labels' => array(
      'name' => 'Events',
      'add_new_item' => 'Add New Event',
      'edit_item' => 'Edit Event',
      'all_items' => 'All Events',
      'singular_name' => 'Event'
    ),
    'menu_icon' => 'dashicons-calendar'
  ));


  // Team post type

  register_post_type('team', array(
    'supports' => array('title', 'editor'),
    'rewrite' => array('slug' => 'teams'),
    'has_archive' => true,
    'public' => true,
    'labels' => array(
      'name' => 'Teams',
      'add_new_item' => 'Add New Team',
      'edit_item' => 'Edit Team',
      'all_items' => 'All Teams',
      'singular_name' => 'Team'
    ),
    'menu_icon' => 'dashicons-groups'
  ));

  // Coach post type

  register_post_type('coach', array(
    'supports' => array('title', 'editor'),
    'rewrite' => array('slug' => 'coaches'),
    'has_archive' => true,
    'public' => true,
    'labels' => array(
      'name' => 'Coaches',
      'add_new_item' => 'Add New Coach',
      'edit_item' => 'Edit Coach',
      'all_items' => 'All Coaches',
      'singular_name' => 'Coach'
    ),
    'menu_icon' => 'dashicons-businessman'
  ));

  // Sporthal post type

  register_post_type('sporthal', array(
    'supports' => array('title', 'editor'),
    'rewrite' => array('slug' => 'sporthallen'),
    'has_archive' => true,
    'public' => true,
    'labels' => array(
      'name' => 'Sporthallen',
      'add_new_item' => 'Add New Sporthal',
      'edit_item' => 'Edit Sporthal',
      'all_items' => 'All Sporthallen',
      'singular_name' => 'Sporthal',
    ),
    'menu_icon' => 'dashicons-bank'
  ));
}

add_action('init', 'university_post_types');