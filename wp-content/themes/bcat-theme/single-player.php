<?php

get_header();

while (have_posts()) {
  the_post(); ?>
  <div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/panoramic-basketball.jpg') ?>);"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title"><?php the_title(); ?></h1>
      <div class="page-banner__intro">
        <p>DONT FORGET TO REPLACE ME LATER</p>
      </div>
    </div>
  </div>

  <div class="container container--narrow page-section">
    <div class="metabox metabox--position-up metabox--with-home-link">
      <p><a class="metabox__blog-home-link" href="<?php echo get_post_type_archive_link('coach'); ?>"><i class="fa fa-user" aria-hidden="true"></i> Coaches</a> <span class="metabox__main"><?php the_title(); ?></span></p>
    </div>

    <div class="generic-content">
      <div class="row group">
        <div class="one-third">
          <?php the_post_thumbnail('coachPortrait'); ?>
        </div>
        <div class="two-thirds">
          <?php the_content(); ?>
        </div>
      </div>
    </div>

    <?php
    $relatedTeams = get_field('teams');

    if ($relatedTeams) {

      echo '<hr>';
      foreach ($relatedTeams as $team) { ?>
        <p>Head Coach <a href="<?php echo get_the_permalink($team) ?>"><?php echo get_the_title($team); ?></a></p>

    <?php
      }
    }
    ?>

  </div>



<?php }

get_footer();

?>