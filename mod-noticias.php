	 <?php if (function_exists ('adinserter')) echo adinserter (6); ?>
<div class="row">
  <div class="col s12 m8 l8">

    <?php

      $myargs = array (
        'pagination'             => false,
        'cat'					 => array (''),
        'posts_per_page'         => 10,
        'ignore_sticky_posts'    => true,

      );
      // The Query
      $myquery = new WP_Query( $myargs );

      // The Loop
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

      ?>

  </div>

  <div class="col s12 m4 l4">
    <?php get_sidebar(); ?>
    <?php if (function_exists ('adinserter')) echo adinserter (8); ?>
  </div>

</div>
