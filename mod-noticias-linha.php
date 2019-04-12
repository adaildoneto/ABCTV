<div class="row">
  <h6 class="wtitle"> Destaques </h6><hr class="style-one">
</div>

<div class="row">
  <?php

    $myargs = array (
      'pagination'             => false,
      'cat'			  		         => array ('12'),
      'posts_per_page'         => 4,
      'ignore_sticky_posts'    => true,

    );
    // The Query
    $myquery = new WP_Query( $myargs );

    // The Loop
    while ( $myquery->have_posts() ) {

        $myquery->the_post();

        echo ('<div class="col s12 m6 l3">');

        get_template_part( 'cardnews', '' );

        echo ('</div>')  ;
              wp_reset_postdata();

      }

    ?>


</div>

	 <?php if (function_exists ('adinserter')) echo adinserter (4); ?>
