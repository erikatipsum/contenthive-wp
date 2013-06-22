<?php

/*
Template Name: Services
*/

/**
 * @package WordPress
 * @subpackage GGS WP
 */


get_header(); ?>

		<h2><?php the_title(); ?></h2>

		<article>

			<?php if(get_field('sections')): ?>

			<?php while(has_sub_field('sections')): ?>

				<section>

					<?php the_sub_field('section_content'); ?>

				</section>

			<?php endwhile; ?>

			<?php endif; ?>

		</article>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
