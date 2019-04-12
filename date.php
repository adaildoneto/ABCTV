<?php
/**
 * The template for displaying Category pages.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>

<div class="row">
		<div class="container">
			<?php if ( have_posts() ) : ?>

				<header class="page-header">
				<?php
					the_archive_title( '<h4 class="page-title">', '</h4>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
				</header><!-- .page-header -->
				<?php
						// Start the Loop.
						while ( have_posts() ) : the_post();

						/*
						 * Include the post format-specific template for the content. If you want to
						 * use this in a child theme, then include a file called content-___.php
						 * (where ___ is the post format) and that will be used instead.
						 */
						   echo ('<div class="col s12 m6 l3">');
						get_template_part( 'cardnews', 'destaque' );
							      echo ('</div>');
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

			</div>

		</div>

</div>


<?php

get_footer();
