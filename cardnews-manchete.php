<div class="row">

    <?php $categories = get_the_category();
        if ( ! empty( $categories ) ) {
            echo '<span class="chip principalchip cor white-text">'. esc_html( $categories[0]->name ) . '</span>';
            }?>

  <div class="card-content">

    <a href="<?php the_Permalink()?>" title="<?php the_title();?>" >
    <h4 class="blue-grey-text text-darken-3" >
      <b><?php the_title();?></b>
    </h4>  </a>

  </div>
      <hr class="style-one">

</div>
