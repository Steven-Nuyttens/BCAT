<!DOCTYPE html>
<html<?php language_attributes(); ?>>

  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>

  <body>
    <div class="">
      <h1 class="">BC Asse Ternat</h1>
      <nav class="main-navigation">

        <ul>
          <li <?php if (is_page('about-us') or wp_get_post_parent_id(0) == 11) echo 'class="current-menu-item"'; ?>><a href="<?php echo site_url('/about-us') ?>">About Us</a></li>
          <li <?php if (get_post_type() == 'program') echo 'class="current-menu-item"'; ?>><a href="<?php echo get_post_type_archive_link('program'); ?>">Programs</a></li>
          <li <?php if (get_post_type() == 'event' or is_page('past-events')) echo 'class="current-menu-item"'; ?>><a href="<?php echo get_post_type_archive_link('event'); ?>">Events</a></li>
          <li <?php if (get_post_type() == 'campus') echo 'class="current-menu-item"'; ?>><a href="<?php echo get_post_type_archive_link('campus') ?>">Campuses</a></li>
          <li <?php if (get_post_type() == 'post') echo 'class="current-menu-item"'; ?>><a href="<?php echo site_url('/blog'); ?>">Blog</a></li>
        </ul>
      </nav>
    </div>