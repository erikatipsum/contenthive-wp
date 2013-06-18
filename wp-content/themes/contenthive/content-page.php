<?php
/**
 * @package WordPress
 * @subpackage GGS WP
 */
?>



<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<?php the_field("main_intro_copy"); ?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
