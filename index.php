<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>

<div id="noticias" class="row" style="margin-top: -10px; padding-top: 10px;">
	<div class="container">
			<?php include(TEMPLATEPATH.'/mod-noticias-topo.php');?>


			<div  id="noticias"  class="row">
				<?php include(TEMPLATEPATH.'/mod-noticias-linha.php');?>
			</div>



			<?php include(TEMPLATEPATH.'/mod-colunas.php');?>




<!-- <div class="row blue-grey darken-4"  style="padding: 20px;">
	<div class="container">
		<div class="center-align titulo">
			<h5 class="white-text">Vídeos</h5>
			<div class="divider">

			</div>
		</div>
		<div class="col s12 m12 l12">

		        ?php if ( dynamic_sidebar('video-destaque') ) : else : endif; ?

		</div>

	</div>
	<div class="container" style="padding: 20px;">
				 ?php if ( dynamic_sidebar('video-lista') ) : else : endif; ?
	</div>

</div> -->
<div  id="noticias" class="row">
				<?php include(TEMPLATEPATH.'/mod-noticias.php');?>
</div>

</div>

</div>

<?php
get_footer();
