<?php
/**
 * @package WordPress
 * @subpackage GGS WP
 */
?>



<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<span class="hero" data-picture data-alt="Content Hive">
	        <span class="sml" data-src="<?php echo TEMPLATE_DIR . '/img/logo-white-small.png' ?>"></span>
	        <span class="sml" data-src="<?php echo TEMPLATE_DIR . '/img/logo-white-small@2x.png'?>" data-media="(min-device-pixel-ratio: 2.0)"></span>
	        <span class="lrg" data-src="<?php echo TEMPLATE_DIR . '/img/logo-white-large.png'?>" data-media="(min-width: 28.12em)"></span>
	        <span class="lrg" data-src="<?php echo TEMPLATE_DIR . '/img/logo-white-large@2x.png'?>" data-media="(min-width: 28.12em) and (min-device-pixel-ratio: 2.0)"></span>

	        <!--[if (lt IE 9) & (!IEMobile)]>
	            <span class="lrg" data-src="<?php echo TEMPLATE_DIR . '/img/logo-white-large.png'?>"></span>
	        <![endif]-->

			<!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
			<noscript><img class="sml" src="<?php echo TEMPLATE_DIR . '/img/logo-white-small.png'?>" alt="Content Hive"></noscript>
		</span>

		<h2 class="hide-text tagline">Brand Placemaking for a social media ecosystem</h2>

		<?php the_field("main_intro_copy"); ?>

</article><!-- #post-<?php the_ID(); ?> -->
