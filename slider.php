<div class="card">
  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'slider' );?>
          <div class="card-image slider-post" style="background: linear-gradient(to bottom, rgba(0,0,0,0) 0%,rgba(0,0,0,0) 52%,rgba(0,0,0,0.65) 84%,rgba(0,0,0,0.65) 100%), url('<?php echo $image[0]; ?>'); background-size: cover; background-position: center;">

        </div>
  <div class="card-content">
    <a href="<?php the_Permalink()?>" title="<?php the_title();?>" >
    <span class="news-slider blue-grey-text text-darken-3" >
      <?php the_title();?>
    </span>  </a>

  </div>


</div>
