
  <a href="<?php the_Permalink()?>" title="<?php the_title();?>" >
        <div class="card transparent horizontal z-depth-0">
              <div class="card-stacked">
                <div class="">
                  <?php $cabeca = get_post_meta( $post->ID,'cabeca', true );
                        echo '<span class="chip principalchip blue-grey lighten-4 black-text">'.$cabeca. '</span>';
                                    ?>
                </div>
                <div class="news3 blue-grey-text text-darken-4">
                  <?php
                    $tituloPost = get_the_title();
                    $tituloCapa = get_post_meta( $post->ID,'titulo_da_capa', true );
                    if(empty($tituloCapa)){
                       $titulo = $tituloPost;
                    }else{
                      $titulo = $tituloCapa;
                    }
                    echo $titulo;
                    ?>

                  </div>

              </div>
            </div>
            <?php $image =  wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'topo' );?>
      <img class="responsive-img" src="<?php echo $image[0]; ?>" >
</a>

    <hr class="style-one">
