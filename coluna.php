

    <a href="<?php the_Permalink()?>" title="<?php the_title();?>" >

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
    </a>
