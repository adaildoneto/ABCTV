<div class="" style="margin-bottom: 20px;">
  <a href="<?php the_Permalink()?>" title="<?php the_title();?>" >
        <div class="card transparent horizontal z-depth-0">

              <div class="card-image">
                      <?php $image =  wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'big-quadrado' );?>
                <img class="responsive-img" src="<?php echo $image[0]; ?>" >
              </div>
              <div class="card-stacked">
                <div class="">
                                      <?php $categories = get_the_category();
                        if ( ! empty( $categories ) ) {
                            echo '<span class="chip principalchip blue-grey lighten-4 black-text">'. esc_html( $categories[0]->name ) . '</span>';
                            }?>
                </div>
                <div class="news2 blue-grey-text text-darken-4">
                  <?php the_title();?>

                  </div>
                  <?php echo do_shortcode("[widget id="a2a_share_save_widget-3"]"); ?>
                  <div class="news-text blue-grey-text text-darken-4 hide-on-med-and-down">
                                  <?php echo excerpt('30'); ?>
                                  </div>
              </div>

            </div>
</a>


</div>

              <div class="divider">

              </div>
