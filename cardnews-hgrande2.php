<div class="">
  <?php $cabeca = get_post_meta( $post->ID,'cabeca', true );
        echo '<span class="chip principalchip blue-grey lighten-4 black-text">'.$cabeca. '</span>';
                    ?>
</div>



        <div class="card transparent horizontal z-depth-0">

              <div class="textot">

                <div class="news2">
                      <a class="blue-grey-text text-darken-4" href="<?php the_Permalink()?>" title="<?php the_title();?>" >
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
                                </a>
                  </div>

              </div>

              <div class="">

                            <?php $image =  wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'toponews' );?>


                <img class="responsive-img hide-on-small-only show-on-medium-and-up" src="<?php echo $image[0]; ?>" >
                      </a>
                  </div>
            </div>

            <div class="">
                <?php $image =  wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'topo' );?>
                <img class="responsive-img show-on-small hide-on-med-and-up" src="<?php echo $image[0]; ?>" >
            </div>
