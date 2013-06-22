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
							<?php _e( 'Blog Archives', 'ggswp' ); ?>
						<?php endif; ?>
					</h2>
				</header>

				<?php rewind_posts(); ?>

				<?php /* Display navigation to next/previous pages when applicable */ ?>
				<?php if ( $wp_query->max_num_pages > 1 ) : ?>
					<nav id="nav-above">
						<h2 class="section-heading"><?php _e( 'Post navigation', 'ggswp' ); ?></h2>
						<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'ggswp' ) ); ?></div>
						<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'ggswp' ) ); ?></div>
					</nav><!-- #nav-above -->
				<?php endif; ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', get_post_format() ); ?>

				<?php endwhile; ?>

				<?php /* Display navigation to next/previous pages when applicable */ ?>
				<?php if (  $wp_query->max_num_pages > 1 ) : ?>
					<nav id="nav-below">
						<h2 class="section-heading"><?php _e( 'Post navigation', 'ggswp' ); ?></h2>
						<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'ggswp' ) ); ?></div>
						<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'ggswp' ) ); ?></div>
					</nav><!-- #nav-below -->
				<?php endif; ?>

			</div><!-- #content -->
		</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>