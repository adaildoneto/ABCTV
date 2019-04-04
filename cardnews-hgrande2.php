
  <a href="<?php the_Permalink()?>" title="<?php the_title();?>" >
        <div class="card transparent horizontal z-depth-0">
              <div class="card-stacked">
                <div class="">
                    <?php $categories = get_the_category();
                        if ( ! empty( $categories ) ) {
                            echo '<span class="chip principalchip blue-grey lighten-4 black-text">'. esc_html( $categories[0]->name ) . '</span>';
                            }?>
                </div>
                <div class="news2 blue-grey-text text-darken-4">
                  <?php the_title();?>

                  </div>

              </div>
            </div>
</a>
    <hr class="style-one">
