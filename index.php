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

<div id="noticias" class="row blue-grey darken-4" style="margin-top: -10px; padding-top: 10px;">
	<div class="container">
			<?php include(TEMPLATEPATH.'/mod-noticias-topo.php');?>
	</div>

</div>

<div id="noticias" class="row">
	<div class="container">
			<?php include(TEMPLATEPATH.'/mod-noticias-capa.php');?>
	</div>

</div>
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

<div id="politica" class="row grey lighten-5" style="margin-top: -20px;">
	<div class="container">
		<div class="center-align titulo blue-text text-darken-4">
			<h4>Política</h4> <hr class="style-one">

		</div>
		<div class="row">
			<?php include(TEMPLATEPATH.'/mod-noticias-linha.php');?>
		</div>

	</div>
</div>


<div id="nacional" class="row grey lighten-4" style="margin-top: -20px;">
<div class="container">
	<div class="center-align titulo orange-text orange-darken-4">
		<h4>Nacional</h4> <hr class="style-one">

	</div>
	<div class="row">
		<?php include(TEMPLATEPATH.'/mod-noticias-linha.php');?>
	</div>

</div>

</div>

<div id="policia" class="row grey lighten-5" style="margin-top: -20px;">
<div class="container">
	<div class="center-align titulo red-text red-darken-4">
		<h4>Polícia</h4> <hr class="style-one">

	</div>
	<div class="row">
		<?php include(TEMPLATEPATH.'/mod-noticias-linha.php');?>
	</div>

</div>

</div>

<div id="acre" class="row grey lighten-4" style="margin-top: -20px;">
<div class="container">
	<div class="center-align titulo green-text green-darken-4">
		<h4>Acre</h4> <hr class="style-one">

	</div>
	<div class="row">
		<?php include(TEMPLATEPATH.'/mod-noticias-linha.php');?>
	</div>

</div>

</div>

<div  id="esporte" class="row grey lighten-5" style="margin-top: -20px;">
<div class="container">
	<div class="center-align titulo purple-text purple-darken-4">
		<h4>Esporte</h4> <hr class="style-one">

	</div>
	<div class="row">
		<?php include(TEMPLATEPATH.'/mod-noticias-linha.php');?>
	</div>

</div>

</div>


<?php
get_footer();
