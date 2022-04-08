<?php get_header();
$vblApi = "http://vblcb.wisseq.eu/VBLCB_WebService/data/OrgMatchesByGuid?issguid=BVBL1232";
$herenA = "http://vblcb.wisseq.eu/VBLCB_WebService/data/TeamMatchesByGuid?teamguid=BVBL1232HSE++1";

?>
<div class="page-banner">
  <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/bcat-bannercrop.jpg'); ?>);"></div>
  <div class="page-banner__content container t-center c-white">
    <h1 class="headline headline--large">Welcome BCAT Enthousiast!</h1>
    <h2 class="headline headline--medium">This is your spot for everything about BCAT </h2>
    <h3 class="headline headline--small">Have a look around and learn about the Club</h3>

  </div>
</div>

<div class="full-width-split group">
  <div class="full-width-split__one">
    <div class="full-width-split__inner">
      <h2 class="headline headline--small-plus t-center">Upcoming Events</h2>

      <?php
      $homepageEvents = new WP_Query(array(
        'posts_per_page' => 2,
        'post_type' => 'event'
      ));

      while ($homepageEvents->have_posts()) {
          $homepageEvents->the_post(); ?>
        <div class="event-summary">
          <a class="event-summary__date event-summary__date--blue t-center" href="<?php the_permalink(); ?>">
            <span class="event-summary__month"><?php the_time('M'); ?></span>
            <span class="event-summary__day"><?php the_time('d'); ?></span>
          </a>
          <div class="event-summary__content">
            <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
            <p><?php echo wp_trim_words(get_the_content(), 18); ?> <a href="<?php the_permalink(); ?>" class="nu gray">Read more</a></p>
          </div>
        </div>
      <?php
      }
      wp_reset_postdata();
      ?>

      <p class="t-center no-margin"><a href="<?php echo site_url('/event'); ?>" class="btn btn--blue">View All Events</a></p>

    </div>
  </div>
  <div class="full-width-split__two">
    <div class="full-width-split__inner">
      <h2 class="headline headline--small-plus t-center">Nieuwtjes</h2>
      <?php
      $homepagePosts = new WP_Query(array(
        'posts_per_page' => 2
      ));

      while ($homepagePosts->have_posts()) {
          $homepagePosts->the_post(); ?>
        <div class="event-summary">
          <a class="event-summary__date event-summary__date--beige t-center" href="<?php the_permalink(); ?>">
            <span class="event-summary__month"><?php the_time('M'); ?></span>
            <span class="event-summary__day"><?php the_time('d'); ?></span>
          </a>
          <div class="event-summary__content">
            <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
            <p><?php echo wp_trim_words(get_the_content(), 18); ?> <a href="<?php the_permalink(); ?>" class="nu gray">Read more</a></p>
          </div>
        </div>
      <?php
      }
      wp_reset_postdata();
      ?>




      <p class="t-center no-margin"><a href="<?php echo site_url('/blog'); ?>" class="btn btn--yellow">Alle Nieuwtjes</a></p>
    </div>
  </div>
</div>

<!-- upcoming games card set for next 2 weekends with link to full calendar  -->
<div class="container upcoming-gameCard">

<div class="title">Standard</div>

<div class="icon">
  <img class="teamLogo" src="C:\wamp64\www\BCAT\wp-content\themes\bcat-theme\images\bcatlogo2.png">
</div><!--/icon-->

<div class="features">
  <h4>TeamName</h4>
</div><!--/features-->

<a href="#" class="btn">Check it out</a>

</div><!--/card-->



<div class="full-width-split group">
  <div class="full-width-split__two">
    <div class="full-width-split__inner">
      <h2 class="headline headline--small-plus t-center">Heren A</h2>
      <table>
        <tr>
          <th>Game Day</th>
          <th>Home</th>
          <th>Away</th>
        </tr>
        <?php


        $json = file_get_contents($herenA);
        $info = json_decode($json);

        for ($i = 0; $i < count($info); $i++) {
            $gameDay = $info[$i]->datumString;
            $homeTeam = $info[$i]->tTNaam;
            $awayTeam = $info[$i]->tUNaam; ?>

          <tr>

            <td><?php echo $gameDay; ?></td>
            <td><?php echo $homeTeam; ?></td>
            <td><?php echo $awayTeam; ?></td>
          </tr>

        <?php
        };
        ?>
      </table>
      <?php
      //echo $info{0}->datumString;
      echo strtotime("10 September 2000"), "\n";

      ?>
    </div>
  </div>

  <div class="full-width-split__one">
    <div class="full-width-split__inner">
      <h2 class="headline headline--small-plus t-center">Dames A</h2>
      <table>
        <td>
          <tr>
            <th>Game Day</th>
            <th>Home</th>
            <th>Away</th>
          </tr>
          <?php
          $vblApi = "http://vblcb.wisseq.eu/VBLCB_WebService/data/OrgMatchesByGuid?issguid=BVBL1232";
          $damesA = "http://vblcb.wisseq.eu/VBLCB_WebService/data/TeamMatchesByGuid?teamguid=BVBL1232DSE++1";

          $json = file_get_contents($damesA);
          $info = json_decode($json);

          for ($i = 0; $i < count($info); $i++) {
              $gameDay = $info[$i]->datumString;
              $homeTeam = $info[$i]->tTNaam;
              $awayTeam = $info[$i]->tUNaam; ?>

            <tr>

              <td><?php echo $gameDay; ?></td>
              <td><?php echo $homeTeam; ?></td>
              <td><?php echo $awayTeam; ?></td>
            </tr>

        </td>
      <?php
          };
      ?>
      </table>
      <?php
      //echo $info{0}->datumString;
      //echo strtotime("10 September 2000"), "\n";

      ?>





    </div>
  </div>
</div>


<!--<div class="hero-slider">
    <div data-glide-el="track" class="glide__track">
    <div class="glide__slides">
    <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/Basketball-Sports.jpg'); ?>);">
    <div class="hero-slider__interior container">
      <div class="hero-slider__overlay">
        <h2 class="headline headline--medium t-center">BCAT</h2>
        <p class="t-center">Impossible is nothing</p>
        <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
      </div>
    </div>
  </div>
  <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/basketball-banner.jpg'); ?>);">
    <div class="hero-slider__interior container">
      <div class="hero-slider__overlay">
        <h2 class="headline headline--medium t-center">Team spirit</h2>
        <p class="t-center">It is in our DNA</p>
        <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
      </div>
    </div>
  </div>
  <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/basketball-banner2.jpg'); ?>);">
    <div class="hero-slider__interior container">
      <div class="hero-slider__overlay">
        <h2 class="headline headline--medium t-center">Basketschool</h2>
        <p class="t-center">Basketbal vanaf x jaar</p>
        <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
      </div>
    </div>
  </div>
    </div>
      <div class="slider__bullets glide__bullets" data-glide-el="controls[nav]">
      </div>
    </div>
  </div>
          -->
<?php
get_footer();

?>