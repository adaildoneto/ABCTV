
  <a href="<?php the_Permalink()?>" title="<?php the_title();?>" >


          <div class="card horizontal white hnewscard z-depth-0">

            <div class="card-image">

                          <?php $image =  wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'quadrado' );?>
              <img class="responsive-img" src="<?php echo $image[0]; ?>" >
            </div>
                <div class="card-stacked" style="margin-top: 10px;">
                  <div class="nocanto 1" style="margin-top: -20px;">
                    <?php $categories = get_the_category();
                        if ( ! empty( $categories ) ) {
                            echo '<span class="chip principalchip cor white-text">'. esc_html( $categories[0]->name ) . '</span>';
                            }?>

                  </div>
                  <div class="news-h grey-text text-darken-4 espacoh">
                    <?php the_title();?>
                  </div>
                </div>

              </div>


</a>
