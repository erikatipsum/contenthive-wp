<?php
/**
 * @package WordPress
 * @subpackage GGS WP
 */
?>
			<div id="primary" class="widget-area wrapper" role="complementary">
				<?php if ( ! dynamic_sidebar( 'primary-sidebar-1' ) ) : ?>



				<?php endif; // end sidebar widget area ?>
			</div><!-- #primary .widget-area -->

		<?php
			/* A sidebar in the footer? Yep. You can can customize
			 * your footer with TWO columns of widgets.
			 */
			get_sidebar( 'secondary' );
		?>

		<?php
			/* Another sidebar in the footer? Yep. You can can customize
			 * your footer with three columns of widgets.
			 */
			get_sidebar( 'tertiary' );
		?>

		<?php
			/* Another sidebar in the footer? Yep. You can can customize
			 * your footer with FOUR columns of widgets.
			 */
			get_sidebar( 'quarternary' );
		?>

