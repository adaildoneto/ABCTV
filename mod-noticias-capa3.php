<div class="container">
	<div class="col S12 m6 l3">

		<?php

			$myargs = array (
				'pagination'             => false,
				'category_name'					=> 'geral, educacao',
				'posts_per_page'         => 3,
				'ignore_sticky_posts'    => true,

			);
			// The Query
			$myquery = new WP_Query( $myargs );

			// The Loop
			while ( $myquery->have_posts() ) {

					$myquery->the_post();

	          	if ( $myquery->current_post == 0 )  {
					          	get_template_part( 'cardnews', '' );
					          } else {
					              	get_template_part( 'cardnews', 'horizontal' );

					          }

								wp_reset_postdata();

				}

			?>
	</div>
	<div class="col S12 m6 l3">

		<?php

			$myargs = array (
				'pagination'             => false,
				'category_name'					=> 'saude',
				'posts_per_page'         => 3,
				'ignore_sticky_posts'    => true,

			);
			// The Query
			$myquery = new WP_Query( $myargs );

			// The Loop
			while ( $myquery->have_posts() ) {

					$myquery->the_post();

	          	if ( $myquery->current_post == 0 )  {
					          	get_template_part( 'cardnews', '' );
					          } else {
					              	get_template_part( 'cardnews', 'horizontal' );

					          }

								wp_reset_postdata();

				}

			?>
	</div>
	<div class="col S12 m6 l3">

		<?php if ( dynamic_sidebar('vpublicidade') ) : else : endif; ?>

	</div>
	<div class="col S12 m6 l3">

		<?php

			$myargs = array (
				'pagination'             => false,
				'category_name'					=> 'cultura',
				'posts_per_page'         => 3,
				 'offset'                  => 0,
				'ignore_sticky_posts'    => true,

			);
			// The Query
			$myquery = new WP_Query( $myargs );

			// The Loop
			while ( $myquery->have_posts() ) {

					$myquery->the_post();

							if ( $myquery->current_post == 0 )  {
											get_template_part( 'cardnews', 'destaque' );
										} else {
													get_template_part( 'cardnews', 'horizontal' );

										}

								wp_reset_postdata();

				}

			?>
	</div>
</div>
