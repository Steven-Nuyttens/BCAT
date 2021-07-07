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
              <li><a href="#">Sporthallen</a></li>
              <li><a href="<?php echo site_url('/club-info'); ?>">Club Info</a></li>
              <li><a href="<?php echo site_url('/ploegen'); ?>">Ploegen</a></li>
              <li><a href="#">Coaching Staff</a></li>
              <li><a href="#">Praktisch</a></li>
              <li><a href="#">Medische Cel</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
          </nav>
          <div class="site-header__util">
            <a href="#" class="btn btn--small btn--orange float-left push-right">Login</a>
            <a href="#" class="btn btn--small btn--dark-orange float-left">Sign Up</a>
            <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
          </div>
        </div>
      </div>
    </header>
