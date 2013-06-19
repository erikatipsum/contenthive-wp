<?php
/**
 * @package WordPress
 * @subpackage GGS WP
 */
?>

	</div><!-- #main -->

	<footer role="contentinfo">

		<?php if( get_field( 'address_heading', 51 ) ): ?>

			<h3><?php the_field('address_heading', 51); ?></h3>

		<?php endif; ?>

		<address>

			<?php the_field('address', 51); ?>

		</address>

		<?php if(get_field('phone_numbers', 51)): ?>

			<?php if( get_field( 'phone_heading', 51 ) ): ?>

				<h3><?php the_field('phone_heading', 51); ?></h3>

			<?php endif; ?>

			<ul class="phone_numbers">

			<?php while(has_sub_field('phone_numbers', 51)): ?>

				<li>

					<?php the_sub_field('number'); ?>

				</li>

			<?php endwhile; ?>

			</ul>

		<?php endif; ?>


		<?php if(get_field('email_addresses', 51)): ?>

			<?php if( get_field( 'email_heading', 51 ) ): ?>

				<h3><?php the_field('email_heading', 51); ?></h3>

			<?php endif; ?>

			<ul class="email">

			<?php while(has_sub_field('email_addresses', 51)): ?>

				<li>

					<a href="mailto:<?php the_sub_field('address'); ?>"><?php the_sub_field('name'); ?></a>

				</li>

			<?php endwhile; ?>

			</ul>

		<?php endif; ?>

		<figure class="footer_logo">
		</figure>


		<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container_id' => 'footer-nav', 'container_class' => 'footer-nav', 'menu_id' => 'footer-nav-ul' ) ); ?>


	</footer><!-- #colophon -->

<?php wp_footer(); ?>


</body>
</html>