<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package family_medic
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<div class="footer">
				<div class="container">
					<div class="row">
						<?php if( is_active_sidebar( 'menu-footer' ) ) : ?>
							<div class="col-sm-3 offset-sm-2">
								<?php dynamic_sidebar( 'menu-footer' ); ?>
							</div>
						<?php endif; ?>
						<div class="col-sm-4">
							<h6><?php the_field('contact_title','option');?></h6>
							<a href="<?php the_field('adress_link','option'); ?>"><i class="fas fa-map-marker-alt"></i> <?php the_field('adress','option');?></a>
							<a href="tel:<?php the_field('phone','option'); ?>"><i class="fas fa-phone-alt"></i> <?php the_field('phone','option');?></a>
							<a href="emailto:<?php the_field('email','option'); ?>"><i class="fas fa-envelope"></i> <?php the_field('email','option');?></a>
						</div>
						<div class="padding-social col-sm-3">
						<h6><?php the_field('social_media_title','option');?></h6>
							<a href="<?php the_field('facebook_link','option'); ?>"><i class="fab fa-facebook"></i> <?php the_field('facebook_title','option');?></a>
							<a href="<?php the_field('instagram_link','option'); ?>"><i class="fab fa-instagram-square"></i> <?php the_field('instagram_title','option');?></a>
						</div>
						<p class="copyright-text">&copy; <?php echo date('Y'); ?> Family Medic</p>
					</div><!-- .row -->
				</div><!-- .container -->
			</div><!-- .footer -->
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
