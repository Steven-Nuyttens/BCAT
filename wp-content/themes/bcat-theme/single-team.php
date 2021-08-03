<?php
  
  get_header();

  while(have_posts()) {
    the_post(); ?>
    <div class="page-banner">
      <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg') ?>);"></div>
      <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title"><?php the_title(); ?></h1>
        <div class="page-banner__intro">
          <p>DONT FORGET TO REPLACE ME</p>
        </div>
      </div>  
    </div>

    <div class="container container--narrow page-section">
          <div class="metabox metabox--position-up metabox--with-home-link">
        <p><a class="metabox__blog-home-link" href="<?php echo get_post_type_archive_link('team'); ?>"><i class="fa fa-users" aria-hidden="true"></i> All Teams</a> <span class="metabox__main"><?php the_title(); ?></span></p>
      </div>

      <div class="generic-content"><?php the_content(); ?></div>

        <?php
            $relatedCoaches = get_field('related_coaches');
            


            echo '<hr>';
            foreach($relatedCoaches as $coach) { ?>
            <p>coached by <a href="<?php echo get_the_permalink($coach) ?>"><?php echo get_the_title($coach); ?></a></p>
                
            <?php
            }
        ?>
    </div>
    

    
  <?php }

  get_footer();

?>