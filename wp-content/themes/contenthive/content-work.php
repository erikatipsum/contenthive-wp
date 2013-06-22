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

			<h3>Clients</h3>

			<section>

				<h5>Ellen</h5>

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

			<section>

				<h5>Michelle</h5>

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

