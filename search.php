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
		<div id="content" class="col s12 l8 offset-l2" tabindex="-1" role="main">
				<?php if ( have_posts() ) : ?>

					<header class="page-header">
						<h4 class="page-title"><?php printf( __( 'Search Results for: %s', 'odin' ), get_search_query() ); ?></h4>
					</header><!-- .page-header -->

						<?php
							// Start the Loop.
							while ( $myquery->have_posts() ) {

				          $myquery->the_post();

				          if ( $myquery->current_post == 5 ) {  // first post

				                              if (function_exists ('adinserter')) echo adinserter (7);

				                    } else {

				          echo ('<div>');

				          get_template_part( 'cardnews', 'hgrande' );

				          echo ('</div>')  ;
				                wp_reset_postdata();
				              }
				        }

					endif;
				?>

		</div><!-- #main -->

	</div>

</div>


<?php

get_footer();
