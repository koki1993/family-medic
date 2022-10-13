<?php
/**
 * Template part for displaying page content in services page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Family Medic
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <section class="services-text-section">
    <div class="container">
      <h1><?php echo get_field('services_title'); ?></h1>
      <p><?php echo get_field('services_text'); ?></p>
    </div> <!-- .container -->
  </section><!-- .services-text-section -->
  <section class="services-table-section">
    <div class="container">
      <table>
        <tr class="table-header">
          <th>Usluga</th>
          <th>Cena</th>
        </tr>
        <?php 
        if(have_rows('services_table') ) :
          while( have_rows('services_table') ) : the_row(''); ?>
        <tr class="table-body">
          <td><?php echo get_sub_field( 'service_title' );?></td>
          <td><?php echo get_sub_field( 'service_price' ); ?></td>
        </tr>
        <?php 
          endwhile;
        endif; ?>
      </table>
      <p class="note"><?php echo get_field('services_note'); ?></p>
    </div><!-- .container -->
  </section><!-- .services-table-section -->
</article>
