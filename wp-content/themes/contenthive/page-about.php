<?php

/*
Template Name: About
*/

/**
 * @package WordPress
 * @subpackage GGS WP
 */


get_header(); ?>

		<h2><?php the_title(); ?></h2>

		<article>

			<section>

				<?php the_field("first_bio"); ?>

			</section>

			<section>

				<?php the_field("second_bio"); ?>

			</section>

		</article>

<?php get_sidebar(); ?>
<?php get_footer(); ?>