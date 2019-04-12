<?php
/**
 * The default template for displaying content.
 *
 * Used for both single and index/archive/author/catagory/search/tag.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

<div class="row">
		<div class="container">
				<div id="content" class="col s12 m8 l8 offset-l2 offset-m1" role="main" >


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php $cabeca = get_post_meta( $post->ID,'cabeca', true );
				        echo '<span class="chip principalchip blue-grey lighten-4 black-text">'.$cabeca. '</span>';
                            ?>
		<?php
			if ( is_single() ) :
				the_title( '<h1 class="entry-title titulo-post">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title titulo-post"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;
		?>

		<?php if ( 'post' == get_post_type() ) : ?>
			<div class="entry-meta">
				<div>
					<?php $subtitulo = get_post_meta( $post->ID,'subtitulo', true );
				        echo '<h6 class="center-align grey-text text-darken-4">'.$subtitulo. '</h6>';
                            ?>
				</div>
				<div>
					<hr class="style-one"></div><br>



				  <span class=""><i class="far fa-user"></i>
                      <?php
                          $alias = get_post_meta($post->ID,'author_alias',true);
                      if(empty($alias)){
                        echo  $author = get_the_author_link();
                      }else{
                        echo $author = $alias;
                      }
                      ?>

                    </span></br>
                    <span class="data-post"><i class="far fa-calendar-alt"></i><?php the_time('d.m.Y');?> </span>
                    <span class="hora-post"><i class="far fa-hourglass"></i><?php the_time('G:i');?></span></br>
										<?php echo do_shortcode( '[ssba-buttons]' );
										?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php if ( is_search() ) : ?>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
	<?php else : ?>
		<div class="entry-content">

			<?php
				the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'odin' ) );
				wp_link_pages( array(
					'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'odin' ) . '</span>',
					'after'       => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
				) );
			?>
		</div><!-- .entry-content -->
	<?php endif; ?>

	<footer class="entry-meta">
		<?php if ( in_array( 'category', get_object_taxonomies( get_post_type() ) ) ) : ?>
			<span class="cat-links"><?php echo __( 'Posted in:', 'odin' ) . ' ' . get_the_category_list( _x( ', ', 'Used between list items, there is a space after the comma.', 'odin' ) ); ?></span>
		<?php endif; ?>
		<?php the_tags( '<span class="tag-links">' . __( 'Tagged as:', 'odin' ) . ' ', ', ', '</span>' ); ?>

	</footer>
</article><!-- #post-## -->
</div>
</div>

</div>
