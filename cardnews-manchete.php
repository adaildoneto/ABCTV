<div class="card-content">
  <div class="nocanto1">
    <?php $categories = get_the_category();
        if ( ! empty( $categories ) ) {
            echo '<span class="new badge blue-grey darken-5" data-badge-caption="'. esc_html( $categories[0]->name ) . '"></span>';
            }?>
  </div>
  <a href="<?php the_Permalink()?>" title="<?php the_title();?>" >
  <span class="news-slider blue-grey-text text-darken-3" >
    <?php the_title();?>
  </span>  </a>

</div>
    <hr class="style-one">
