<div class="row">
<div class="col s12 m12 l6">


    <?php

      $myargs = array (
        'pagination'             => false,
        'category_name'					=> 'saude, geral',
        'posts_per_page'         => 2,
        'ignore_sticky_posts'    => true,

      );
      // The Query
      $myquery = new WP_Query( $myargs );

      // The Loop
      while ( $myquery->have_posts() ) {

          $myquery->the_post();

            echo ('<div class="col s12 ">');
          get_template_part( 'cardnews', 'hgrande' );
              echo ('</div>')  ;

                wp_reset_postdata();

        }

      ?>

</div>
    <div class="col s12 m12 l6">
      <?php

        $myargs = array (
          'pagination'             => false,
          'category_name'					=> 'economia',
          'posts_per_page'         => 1,
          'offset'                  => 2,
          'ignore_sticky_posts'    => true,

        );
        // The Query
        $myquery = new WP_Query( $myargs );

        // The Loop
        while ( $myquery->have_posts() ) {

            $myquery->the_post();



            get_template_part( 'slider', '' );


                  wp_reset_postdata();

          }

        ?>
    </div>
</div>

<div class="row">
  <?php

    $myargs = array (
      'pagination'             => false,
      'cat'							   			=> 'turismo, cultura',
      'posts_per_page'         => 4,
        'offset'                  => 2,
      'ignore_sticky_posts'    => true,

    );
    // The Query
    $myquery = new WP_Query( $myargs );

    // The Loop
    while ( $myquery->have_posts() ) {

        $myquery->the_post();

        echo ('<div class="col s12 m6 l3">');

        get_template_part( 'cardnews', 'destaque' );

        echo ('</div>')  ;
              wp_reset_postdata();

      }

    ?>


</div>

<div class="row">
			<?php if ( dynamic_sidebar('publicidade') ) : else : endif; ?>
		</div>
