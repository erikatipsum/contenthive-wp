<?php

/**
 * @package WordPress
 * @subpackage GGS WP
 */
?>

		<h2><?php the_title(); ?></h2>

		<article>

			<section>

				<?php the_field("intro_copy"); ?>

			</section>

			<section class="services-list">

				<?php if(get_field('work_categories')): ?>

					<ul>

						<?php while(has_sub_field('work_categories')): ?>

							<li>
								<h5><?php the_sub_field('category_name'); ?></h5>

								<a href="<?php the_sub_field('category_url'); ?>">
									<img alt="<?php the_sub_field('category_name'); ?>" src="<?php the_sub_field('category_image'); ?>"/>
								</a>

							</li>

						<?php endwhile; ?>

					</ul>

				<?php endif; ?>

				<!-- Category Nav -->

			</section>

			<h3>Clients</h3>

			<section class="client-list">

				<h5>Ellen Berkovitch<br><br></h5>

				<?php if(get_field('ellens_clients')): ?>

					<ul>

						<?php while(has_sub_field('ellens_clients')): ?>

							<li>

								<?php the_sub_field('client'); ?>

							</li>

						<?php endwhile; ?>

					</ul>

				<?php endif; ?>

			</section>

			<section class="client-list">

				<h5>Michelle Mosser / <br>GraceCommunications</h5>

				<?php if(get_field('michelles_clients')): ?>

					<ul>

						<?php while(has_sub_field('michelles_clients')): ?>

							<li>

								<?php the_sub_field('client'); ?>

							</li>

						<?php endwhile; ?>

					</ul>

				<?php endif; ?>

			</section>

		</article>

