

<?php $cabeca = get_post_meta( $post->ID,'cabeca', true );
      echo '<span class="chip principalchip blue-grey lighten-4 black-text">'.$cabeca. '</span>';
                  ?>

    <a href="<?php the_Permalink()?>" title="<?php the_title();?>" >
      <div class="card white z-depth-0 newscard">

        <div class="card-image">
                      <?php $image =  wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'cardnews' );?>
          <img class="responsive-img" src="<?php echo $image[0]; ?>" >

            </div>
        <div class="news grey-text text-darken-4">
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
    </a>
