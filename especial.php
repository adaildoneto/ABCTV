    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '' );?>
<div class="row intro-container" style="background: linear-gradient(to bottom, rgba(0,0,0,0) 0%,rgba(0,0,0,0) 52%,rgba(0,0,0,0.65) 84%,rgba(0,0,0,0.65) 100%), url('<?php echo $image[0]; ?>'); background-position: center; background-size: cover; margin-top: -20px;" >
  <div class="container">
    <div class="row especial">
    <div class="col s12 l8 offset-l2 center-align" style="display: table-cell; vertical-align: middle;">
      <h1 class="white-text news-especial flow-text" >
        <?php the_title();?>
      </h1>

      <a href="<?php the_Permalink()?>" title="<?php the_title();?>" class="btn wave-effect grey darken-4 white-text" >Leia mais</a>

    </div>
  </div>

  </div>
</div>
