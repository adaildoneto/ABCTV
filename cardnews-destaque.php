                      <?php $image =  wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'big-quadrado' );?>
                <div class="card destaque-post" style="background: url('<?php echo $image[0]; ?>'); background-size: cover; background-position: center;">
                  <div class="nocanto2">
                    <?php $categories = get_the_category();
                        if ( ! empty( $categories ) ) {
                            echo '<span class="chip principalchip cor white-text left">'. esc_html( $categories[0]->name ) . '</span>';
                            }?>
                  </div>
                  <div class="card-content">
                    <a href="<?php the_Permalink()?>" title="<?php the_title();?>" >
                    <span class="cor z-depth-2 white-text news-destaque" >
                      <?php
                        $tituloPost = get_the_title();
                        $tituloCapa = get_post_meta( $post->ID,'titulo_da_capa', true );
                        if(empty($tituloCapa)){
                           $titulo = $tituloPost;
                        }else{
                          $titulo = $tituloCapa;
                        }
                        echo $titulo;belowOrigin
                        ?>
                    </span>  </a>
                  </div>

                    </div>
