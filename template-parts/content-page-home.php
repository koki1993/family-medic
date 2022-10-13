<?php
/**
 * Template part for displaying page content in home page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Family Medic
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <!-- Swiper -->
  <section class="slider-section hidden-xs">
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <?php
        if( have_rows('slider') ) :
          while( have_rows('slider') ) : the_row();
          $imageID = get_sub_field( 'slider-image' ); ?>
          <div class="swiper-slide"><img src="<?php echo $imageID['url']; ?>"></img>
          </div>
          <?php endwhile;
        endif;
        ?>
      </div><!-- .swiper-wrapper -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div><!-- .swiper -->
  </section> <!-- .slider-section -->
  <section class="welcome-text">
    <div class="container">
      <div class="row">
          <img src="<?php the_field('welcome_mobile_image') ?>"></img>
        <h1 class="welcome-title"><?php the_field('welcome_title'); ?></h1>
        <p class="welcome-textarea"><?php the_field('welcome_text'); ?><p>
        <div class="col-sm-4">
          <i class="fas fa-briefcase-medical"></i>
          <h3><?php echo get_field('service_1'); ?></h3>
        </div>
        <div class="col-sm-4">
          <i class="fas fa-heart"></i>
          <h3><?php echo get_field('service_2'); ?></h3>
        </div>
        <div class="col-sm-4">
          <i class="fas fa-vial"></i>
          <h3><?php echo get_field('service_3'); ?></h3>
        </div>
      </div><!-- .row -->
    </div><!-- .container -->
  </section><!-- .welcome-text -->
  <section>
    <div><?php echo get_field('map'); ?></div>
  </section>
    <section class="home-visit-desktop" style="background-image:url(<?php echo get_field('home_visit_background_image'); ?>)">
      <div class="container-fluid">
        <div class="col-sm-4 offset-sm-4">
          <h2><?php echo get_field('home_visit_title'); ?></h2>
          <p><?php echo get_field('home_visit_text'); ?></p></img>
        </div><!-- .row -->
      </div><!-- .container-fluid -->
    </section><!-- .home-visit-desktop -->
    <section class="home-visit-mobile" style="background-image:url(<?php echo get_field('home_visit_background_image_mobile'); ?>)">
    <div class="container">
      <div class="row">
          <h2><?php echo get_field('home_visit_title'); ?></h2>
          <p><?php echo get_field('home_visit_text'); ?></p></img>
        </div><!-- .row -->
      </div><!-- .container -->
    </section><!-- .home-visit-mobile -->
</article>
