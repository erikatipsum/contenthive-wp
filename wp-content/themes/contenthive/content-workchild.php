<?php

 /**
 * @package WordPress
 * @subpackage GGS WP
 */

?>

		<h5><a href="/contenthive/work"><< Work</a></h5>
		<h2><?php the_title(); ?></h2>

		<article class="work-child">

			<section class="slideshow">

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<!-- post -->

				<?php the_content(); ?>

				<?php endwhile; ?>
				<!-- post navigation -->
				<?php else: ?>
				<!-- no posts found -->
				<?php endif; ?>

				<h4 class="enlarge">Click an item to enlarge</h4>

			</section>

		</article>