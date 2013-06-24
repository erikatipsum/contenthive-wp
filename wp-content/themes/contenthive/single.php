<?php
/**
 * @package WordPress
 * @subpackage GGS WP
 */

get_header(); ?>

		<div id="container" class="wrapper">
			<div id="content" role="main">

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'single' ); ?>

			<?php endwhile; ?>

			<?php else : ?>

				<h3>Sorry, something went wrong.</h3>

			<?php endif; ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>