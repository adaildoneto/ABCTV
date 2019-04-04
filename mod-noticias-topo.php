<div class="row">
  <div class="col s12 m6 l6">
    <?php

      $myargs = array (
        'pagination'             => false,
        'category_name'					=> 'geral, policia, mundo, meio ambiente',
        'posts_per_page'         => 1,
        'offset'                  => 2,
        'ignore_sticky_posts'    => true,

      );
      // The Query
      $myquery = new WP_Query( $myargs );

      // The Loop
      while ( $myquery->have_posts() ) {

          $myquery->the_post();



          get_template_part( 'slider', 'topo' );


                wp_reset_postdata();

        }

      ?>
  </div>

<div class="col s12 m6 l6">


    <?php

      $myargs = array (
        'pagination'             => false,
        'category_name'					=> 'saude, geral',
        'posts_per_page'         => 3,
        'ignore_sticky_posts'    => true,

      );
      // The Query
      $myquery = new WP_Query( $myargs );

      // The Loop
      while ( $myquery->have_posts() ) {

          $myquery->the_post();

            echo ('<div class="col s12 ">');
          get_template_part( 'cardnews', 'hgrande2' );
              echo ('</div>')  ;

                wp_reset_postdata();

        }

      ?>

</div>



</div>



<div class="row">
			<?php if ( dynamic_sidebar('publicidade') ) : else : endif; ?>
		</div>
