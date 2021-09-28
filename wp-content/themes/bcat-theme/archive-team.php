<?php

get_header(); ?>

<div class="page-banner">
  <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/panoramic-basketball.jpg') ?>);"></div>
  <div class="page-banner__content container container--narrow">
    <h1 class="page-banner__title">All Teams</h1>
    <div class="page-banner__intro">
      <p>Find your #1 player.</p>
    </div>
  </div>  
</div>

<div class="container container--narrow page-section">
<ul class="professor-cards">
<?php
  while(have_posts()) {
    the_post(); ?>
    <li class="professor-card__list-item">
      <a class="professor-card" href="<?php the_permalink(); ?>">
      <img class="professor-car__image" src="<?php the_post_thumbnail_url('teamLandscape'); ?>">
      <span class="professor-card__name"><?php the_title(); ?></span>
    </a>
  </li>
    
  <?php }
  echo paginate_links();
?>

  </ul>
</div>

<?php get_footer();

?>