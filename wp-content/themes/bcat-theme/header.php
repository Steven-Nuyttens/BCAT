<!DOCTYPE html>
<html>
  <head>
    <?php wp_head(); ?>
  </head>
  <body>
  <header class="site-header">
      <div class="container">
        <h1 class="school-logo-text float-left">
          <a href="<?php echo site_url(); ?>"><strong>BC</strong> Asse-Ternat</a>
        </h1>
        <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
        <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
        <div class="site-header__menu group">
          <nav class="main-navigation">
            <ul>
            <li><a href="<?php echo site_url('/blog'); ?>">Nieuwtjes</a></li>
            <li><a href="<?php echo site_url('/event'); ?>">Events</a></li>
              <li><a href="#">Sporthallen</a></li>
              <li><a href="<?php echo site_url('/club-info'); ?>">Club Info</a></li>
              <li><a href="<?php echo site_url('/teams'); ?>">Ploegen</a></li>
              <li><a href="<?php echo site_url('/coaches'); ?>">Coaches</a></li>
              <li><a href="<?php echo site_url('/praktisch'); ?>">Praktisch</a></li>
              <li><a href="#">Medische Cel</a></li>
              <li><a href="#">Contact</a></li>
              <li><a href="<?php echo site_url('/shop'); ?>">Shop</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </header>
