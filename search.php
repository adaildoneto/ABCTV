<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>
<div class="container">
	<div class="row">
		<div id="content" class="col s12 m8 l8" tabindex="-1" role="main">
				<?php if ( have_posts() ) : ?>

					<header class="page-header">
						<h4 class="page-title"><?php printf( __( 'Search Results for: %s', 'odin' ), get_search_query() ); ?></h4>
					</header><!-- .page-header -->


						 <?php if (have_posts()): while (have_posts()) : the_post();

						          echo ('<div>');

						          get_template_part( 'cardnews', 'hgrande' );

						          echo ('</div>')  ;
						                wp_reset_postdata();

														endwhile;endif;

						      ?>

						  </div>

						  <div class="col s12 m4 l4">
						    <?php get_sidebar(); ?>
						  </div>

						</div>
					<?php 	echo ('<div class="s12 center-align">');
									wp_pagination();
											echo ('</div>');?>




		</div><!-- #main -->




<?php

get_footer();
