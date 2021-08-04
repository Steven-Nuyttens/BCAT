<?php
  
  get_header();

  while(have_posts()) {
    the_post(); ?>
    <div class="page-banner">
      <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/panoramic-basketball.jpg') ?>);"></div>
      <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title"><?php the_title(); ?></h1>
        <div class="page-banner__intro">
          <p>DONT FORGET TO REPLACE ME</p>
        </div>
      </div>  
    </div>

    <div class="container container--narrow page-section">
          <div class="metabox metabox--position-up metabox--with-home-link">
        <p><a class="metabox__blog-home-link" href="<?php echo get_post_type_archive_link('event'); ?>"><i class="fa fa-home" aria-hidden="true"></i> Events Home</a> <span class="metabox__main"><?php the_title(); ?></span></p>
      </div>

      <div class="generic-content"><?php the_content(); ?></div>

      <?php

          // custom field relation between events and teams

            $relatedTeams = get_field('teams');
            
            if($relatedTeams) {

            echo '<hr>';
            foreach($relatedTeams as $team) { ?>
            <p>Team Tag <a href="<?php echo get_the_permalink($team) ?>"><?php echo get_the_title($team); ?></a></p>
                
            <?php
            }
            }
            
          // custom field relation between events and coaches
            
            $relatedCoaches = get_field('related_coaches');
            
            if($relatedCoaches) {

            echo '<hr>';
            foreach($relatedCoaches as $coach) { ?>
            <p>Coach Tag <a href="<?php echo get_the_permalink($coach) ?>"><?php echo get_the_title($coach); ?></a></p>
                
            <?php
            }
            }
        ?>

    </div>
    

    
  <?php }

  get_footer();

?>