<?php
/**
 * The template for displaying Author archive pages.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>

<div class="row">
	<div class="container">
		<div id="content" class="col s12 m8 l8" tabindex="-1" role="main">

				<?php if ( have_posts() ) : ?>
					<header class="page-header">
						<?php
							the_archive_title( '<h4 class="page-title">', '</h4>' );
							the_archive_description( '<div class="taxonomy-description">', '</div>' );

							/*
							 * Queue the first post, that way we know what author
							 * we're dealing with (if that is the case).
							 *
							 * We reset this later so we can run the loop properly
							 * with a call to rewind_posts().
							 */
							the_post();
						?>
						<?php if ( get_the_author_meta( 'description' ) ) : ?>
							<div class="author-biography">
								<span class="author-avatar"><?php echo get_avatar( get_the_author_meta( 'ID' ), 60 ); ?></span>
								<span class="author-description"><?php the_author_meta( 'description' ); ?></span>
							</div><!-- .author-biography -->
						<?php endif; ?>
					</header><!-- .archive-header -->

					<?php
							/*
							 * Since we called the_post() above, we need to rewind
							 * the loop back to the beginning that way we can run
							 * the loop properly, in full.
							 */
							rewind_posts();

							// Start the Loop.
							while ( have_posts() ) : the_post();

								/*
								 * Include the post format-specific template for the content. If you want to
								 * use this in a child theme, then include a file called content-___.php
								 * (where ___ is the post format) and that will be used instead.
								 */
								get_template_part( 'cardnews', 'hgrande');

							endwhile;

							// Page navigation.
							echo ('<div class="s12 center-align">');
					wp_pagination();
							echo ('</div>');

						else :
							// If no content, include the "No posts found" template.
							get_template_part( 'content', 'none' );

					endif;
				?>

		</div><!-- #main -->

		<?php
		get_sidebar(); ?>
	</div>

</div>


<?php
get_footer();
