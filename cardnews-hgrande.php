
  <a href="<?php the_Permalink()?>" title="<?php the_title();?>" >
        <div class="card transparent horizontal z-depth-0">

              <div class="card-image">
                      <?php $image =  wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'big-quadrado' );?>
                <img class="responsive-img img-hgrande" src="<?php echo $image[0]; ?>" >
              </div>
              <div class="card-stacked">
                <div class="news blue-grey-text text-darken-4">
                  <?php the_title();?>
              
                  </div>

              </div>
            </div>
</a>
    <hr class="style-one">
