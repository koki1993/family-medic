<?php
/**
 * Template part for displaying page content in contact page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Family Medic
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <section class="contact-section">
    <div class="container">
      <div class="row">
        <div class="contact-map-container">
          <?php echo the_content(); ?>
        </div>
        <h1><?php the_title(); ?></h1>
        <hr>
          <div class="contact-form-container">
            <?php echo do_shortcode('[contact-form-7 id="5" title="Contact form 1"]') ?>
          </div> <!-- contant form container -->
      </div><!-- .row -->
    </div><!-- .container -->
  </section><!-- .contact-section -->
</article>
