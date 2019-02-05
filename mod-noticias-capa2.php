<div class="container">
	<div class="col S12 m6 l3">

		<?php

			$myargs = array (
				'pagination'             => false,
				'category_name'					=> 'geral, economia',
				'posts_per_page'         => 1,
				'ignore_sticky_posts'    => true,

			);
			// The Query
			$myquery = new WP_Query( $myargs );

			// The Loop
			while ( $myquery->have_posts() ) {

					$myquery->the_post();



					get_template_part( 'cardnews', '' );


								wp_reset_postdata();

				}

			?>
			<?php if ( dynamic_sidebar('vpublicidade') ) : else : endif; ?>

	</div>
	<div class="col S12 m6 push-l6 l3">

		<?php

			$myargs = array (
				'pagination'             => false,
				'category_name'					=> 'seguranca',
				'posts_per_page'         => 5,
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

<div class="col S12 m12 l6 pull-l3">


	<?php

		$myargs = array (
			'pagination'             => false,
			'category_name'					 => 'meio-ambiente',
			'offset'									=> 1,
			'posts_per_page'         => 3,
			'ignore_sticky_posts'    => true,

		);
		// The Query
		$myquery = new WP_Query( $myargs );

		// The Loop
		while ( $myquery->have_posts() ) {

				$myquery->the_post();

				get_template_part( 'cardnews', 'hgrande' );

							wp_reset_postdata();

			}

		?>
</div>



	<div class="row">
				<?php if ( dynamic_sidebar('publicidade') ) : else : endif; ?>
			</div>


</div>
