<?php
/**
 * Template part for displaying page content in about-us page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Family Medic
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <section class="about-image">
    <img src="<?php echo get_field('about_us_image'); ?>">
    <div class="about-text-wrapper">
      <h4><?php echo get_field('about_us_image_title'); ?></h4>
      <p><?php echo get_field('about_us_image_text'); ?></p>
    </div>
  </section>
  <section class="section-about">
    <div class="container">
      <h2><?php echo get_field('clinic_title'); ?> | <span><?php echo get_field('about_title'); ?></span></h2>
      <p class="about-us-adress"><?php echo get_field('about_adress'); ?></p>
      <hr>
      <p><?php echo the_content(); ?></p>
    </div>
  </section>
  <section class="section-about-advices">
    <div class="container-fluid">
        <?php 
        if( have_rows('about_advices') ):
          while( have_rows('about_advices') ): the_row(); 
            if( get_row_index() % 2 == 1):
        ?>
              <div class="row">
                <div class="col-sm-4 d-none d-sm-block">
                  <img src="<?php echo get_sub_field('advice_image'); ?>">
                </div> 
                <div class="col-sm-8">
                  <h3 class="margin-right"><?php echo get_sub_field('advice_title') ?></h3>
                  <p class="margin-right"><?php echo get_sub_field('advice_text') ?></p>
                </div>
            </div>
              <?php
            else: ?>
             <div class="advice-wrapper">
               <div class="row">
                 <div class="col-sm-8">
                   <h3 class="margin-left"><?php echo get_sub_field('advice_title') ?></h3>
                   <p class="margin-left"><?php echo get_sub_field('advice_text') ?></p>
                 </div>
                 <div class="col-sm-4 d-none d-sm-block">
                   <img src="<?php echo get_sub_field('advice_image'); ?>">
                 </div> 
               </div>
            </div>
              <?php
              endif;
          endwhile;
        endif; ?>
    </div>
  </section>
</article>
