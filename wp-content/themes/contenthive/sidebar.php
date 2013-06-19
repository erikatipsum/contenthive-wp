<?php
/**
 * @package WordPress
 * @subpackage GGS WP
 */
?>
			<div id="primary" class="primary-sidebar" role="complementary">
				<?php if ( ! dynamic_sidebar( 'primary-sidebar-1' ) ) : ?>

					<?php if(get_field('sidebar_items', 36)): ?>

						<ul>

						<?php while(has_sub_field('sidebar_items', 36)): ?>

							<li>

								<figure>

									<a href="<?php the_sub_field('page_link'); ?>">

										<img src="<?php the_sub_field('image'); ?>">

										<figcaption class="<?php the_sub_field('caption_alignment'); ?>">
											<?php the_sub_field('image_caption'); ?>
										</figcaption>

									</a>

								</figure>

							</li>

						<?php endwhile; ?>

						</ul>

					<?php endif; ?>

				<?php endif; // end sidebar widget area ?>
			</div><!-- #primary .widget-area -->
