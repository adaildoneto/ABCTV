  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'slider' );?>
<div class="card slider-post-topo2" style="background: linear-gradient(to bottom, rgba(0,0,0,0) 0%,rgba(0,0,0,0) 52%,rgba(0,0,0,0.65) 84%,rgba(0,0,0,0.65) 100%), url('<?php echo $image[0]; ?>'); background-size: cover; background-position: center;">

          <div class="center center-align" style="position: absolute; bottom: 20px; padding-right: 10%; padding-left: 10%;">
            <a href="<?php the_Permalink()?>" title="<?php the_title();?>" >
            <h5 id="responsive_headline" class="white-text" >
              <b> <?php
                $tituloPost = get_the_title();
                $tituloCapa = get_post_meta( $post->ID,'titulo_da_capa', true );
                if(empty($tituloCapa)){
                   $titulo = $tituloPost;
                }else{
                  $titulo = $tituloCapa;
                }
                echo $titulo;
                ?></b>
            </h5>  </a>
        </div>

    <div class="nocanto2">
      <?php $categories = get_the_category();
          if ( ! empty( $categories ) ) {
              echo '<span class="chip principalchip cor white-text left">'. esc_html( $categories[0]->name ) . '</span>';
              }?>
    </div>




</div>
