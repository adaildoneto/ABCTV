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

<div class="container">
	<div class="row">
		<header class="page-header">
			<?php
				the_archive_title( '<h4 class="page-title">', '</h4>' );
				the_archive_description( '<div class="taxonomy-description">', '</div>' );
			?>
			</header><!-- .page-header -->
	  <div class="col s12 m8 l8">

	    <?php

	 
	      while ( $myquery->have_posts() ) {

	          $myquery->the_post();

	          echo ('<div>');

	          get_template_part( 'cardnews', 'hgrande' );

	          echo ('</div>')  ;
	                wp_reset_postdata();

	        }

	      ?>

	  </div>

	  <div class="col s12 m4 l4">
	    <?php get_sidebar(); ?>
	  </div>

	</div>
<?php 	echo ('<div class="s12 center-align">');
				wp_pagination();
						echo ('</div>');?>

</div>


<?php

get_footer();
