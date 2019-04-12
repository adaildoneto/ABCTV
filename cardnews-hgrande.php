<div class="" style="margin-bottom: 20px;">
  <div class="">
      <?php $image =  wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'big-quadrado' );?>
      <img class="responsive-img show-on-small hide-on-med-and-up" src="<?php echo $image[0]; ?>" >
  </div>
  <a href="<?php the_Permalink()?>" title="<?php the_title();?>" >
        <div class="card transparent horizontal z-depth-0">

              <div class="card-image hide-on-small-only show-on-medium-and-up">
                      <?php $image =  wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'big-quadrado' );?>
                <img class="responsive-img" src="<?php echo $image[0]; ?>" >
              </div>
              <div class="card-stacked">
                <div class="">
					<?php $cabeca = get_post_meta( $post->ID,'cabeca', true );
				        echo '<span class="chip principalchip blue-grey lighten-4 black-text">'.$cabeca. '</span>';
                            ?>
                </div>
                <div class="news2 blue-grey-text text-darken-4">

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

                  <div class="news-text blue-grey-text text-darken-4 hide-on-med-and-down">
					   <?php $subtitulo = get_post_meta( $post->ID,'subtitulo', true );
						   echo $subtitulo; ?>
                                
                                </div>
              </div>

            </div>
</a>


</div>

              <div class="divider">

              </div>
