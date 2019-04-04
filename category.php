<?php
/**
 * The template for displaying Category pages.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>

<div class="row">
	<div class="row">
	  <div class="col s12 m8 l8">

	    <?php

	      $myargs = array (
	        'pagination'             => false,
	        'cat'							   			=> '',
	        'posts_per_page'         => 10,
	          'offset'                  => 2,
	        'ignore_sticky_posts'    => true,

	      );
	      // The Query
	      $myquery = new WP_Query( $myargs );

	      // The Loop
	      while ( $myquery->have_posts() ) {

	          $myquery->the_post();

	          echo ('<div>');

	          get_template_part( 'cardnews', 'hgrande' );

	          echo ('</div>')  ;
	                wp_reset_postdata();

	        }

	      ?>

	  </div>

	  <div class="col s12 m4 l4">
	    <?php get_sidebar(); ?>
	  </div>

	</div>


</div>


<?php

get_footer();
