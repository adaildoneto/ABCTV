
  <div id="noticias" class="row">

        <div class="col s12 m6 l7">
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


                            echo ('<div>');
                            get_template_part( 'slider', '' );
                            echo ('</div>');

                                  wp_reset_postdata();

                          }

                        ?>
          </div>

          <div class="col s12">

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

                      get_template_part( 'cardnews', 'hgrande' );

                  wp_reset_postdata();

              }

            ?>
        </div>

        </div>



        <div class="col S12 m6 l3">

            <?php

              $myargs = array (
                'pagination'             => false,
                'category_name'					=> 'meio ambiente, mundo',
                'posts_per_page'         => 5,
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
                  get_template_part( 'cardnews', '' );


                }



                        wp_reset_postdata();

                }

              ?>
          </div>



      <div class="col S12 m6 l2">

        <?php
        echo do_shortcode('[wpc-weather id="159085"]');
         if ( dynamic_sidebar('vpublicidade') ) : else : endif; ?>
      </div>


    </div>
  <div class="row">
        <?php if ( dynamic_sidebar('publicidade') ) : else : endif; ?>
      </div>
