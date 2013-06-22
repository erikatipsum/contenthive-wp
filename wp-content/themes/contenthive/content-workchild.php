<?php

 /**
 * @package WordPress
 * @subpackage GGS WP
 */

?>

		<h5><a href="/contenthive/work"><< Work</a></h5>
		<h2><?php the_title(); ?></h2>

		<article>

			<section>

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<!-- post -->

				<?php the_content(); ?>

				<?php endwhile; ?>
				<!-- post navigation -->
				<?php else: ?>
				<!-- no posts found -->
				<?php endif; ?>



			</section>


			<section>

			</section>


			<section>

			</section>

		</article>

