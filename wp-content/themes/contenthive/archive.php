<?php

/*
Template Name: Blog
*/


/**
 * @package WordPress
 * @subpackage GGS WP
 */

get_header(); ?>

		<section id="container" class="wrapper">
			<div id="content" role="main">

				<?php the_post(); ?>

				<header class="page-header">
					<h2 class="page-title">
						<?php if ( is_day() ) : ?>
							<?php printf( __( 'Daily Archives: <span>%s</span>', 'ggswp' ), get_the_date() ); ?>
						<?php elseif ( is_month() ) : ?>
							<?php printf( __( 'Monthly Archives: <span>%s</span>', 'ggswp' ), get_the_date( 'F Y' ) ); ?>
						<?php elseif ( is_year() ) : ?>
							<?php printf( __( 'Yearly Archives: <span>%s</span>', 'ggswp' ), get_the_date( 'Y' ) ); ?>
						<?php else : ?>
							Blog
						<?php endif; ?>
					</h2>
				</header>

				<?php rewind_posts(); ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', get_post_format() ); ?>

				<?php endwhile; ?>

			</div><!-- #content -->
		</section><!-- #primary -->
<?php get_footer(); ?>