
  <div class="row">



    <div class="col s12 m6 l3 push-l4">
    <div class="sl1der">
                <?php

                  $myargs = array (
                    'pagination'             => false,
                    'category_name'					 => 'cultura, mundo, concurso',
                    'posts_per_page'         => 3,
                    'ignore_sticky_posts'    => true,

                  );
                  // The Query
                  $myquery = new WP_Query( $myargs );

                  // The Loop
                  while ( $myquery->have_posts() ) {

                      $myquery->the_post();


                      echo ('<div class="row">');
                      get_template_part( 'slider', '' );
                      echo ('</div>');

                            wp_reset_postdata();

                    }

                  ?>
    </div>
    <?php

      $myargs = array (
        'pagination'             => false,
        'category_name'					=> '',
        'posts_per_page'         => 3,
        'ignore_sticky_posts'    => true,

      );
      // The Query
      $myquery = new WP_Query( $myargs );

      // The Loop
      while ( $myquery->have_posts() ) {

          $myquery->the_post();

                get_template_part( 'cardnews', 'horizontal' );

            wp_reset_postdata();

        }

      ?>
</div>

<div class="col S12 m6 l4 pull-l3">

    <?php

      $myargs = array (
        'pagination'             => false,
        'category_name'					=> 'saude, policia, politica, meio ambiente',
        'posts_per_page'         => 4,
        'ignore_sticky_posts'    => true,

      );
      // The Query
      $myquery = new WP_Query( $myargs );

      // The Loop
      while ( $myquery->have_posts() ) {

          $myquery->the_post();

          if ( $myquery->current_post == 0 )  {
          get_template_part( 'cardnews', 'manchete' );
        } else {
          get_template_part( 'cardnews', 'hgrande' );


        }



                wp_reset_postdata();

        }

      ?>
  </div>

<div class="col S12 m6 l3">

		<?php

			$myargs = array (
				'pagination'             => false,
				'category_name'					=> 'meio ambiente, mundo',
				'posts_per_page'         => 4,
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
          get_template_part( 'cardnews', '' );


        }



								wp_reset_postdata();

				}

			?>
	</div>

	<div class="col S12 m6 l2">
    <?php if ( dynamic_sidebar('vpublicidade') ) : else : endif; ?>
	</div>

    </div>
  <div class="row">
        <?php if ( dynamic_sidebar('publicidade') ) : else : endif; ?>
      </div>
