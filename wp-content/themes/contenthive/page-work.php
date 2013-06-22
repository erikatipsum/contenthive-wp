<?php

/*
Template Name: Work
*/

/**
 * @package WordPress
 * @subpackage GGS WP
 */


get_header();

	 if( $post->post_parent !== 0 ) {// If the page is a child of the Work page, use the child template. If not, use the main work template.
		    get_template_part('content', 'workchild');
		} else {
		    get_template_part('content', 'work');
		};

 get_footer(); ?>
