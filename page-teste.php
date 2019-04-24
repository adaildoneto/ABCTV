<?php
/**
 *Template Name: Página de Testes
 */

get_header(); ?>

<div id="noticias" class="row" style="margin-top: -10px; padding-top: 10px;">
	<div class="container">
			<?php include(TEMPLATEPATH.'/mod-noticias-topo.php');?>
	</div>

</div>

<div  id="noticias"  class="row">
	<div class="container">
			<?php include(TEMPLATEPATH.'/mod-noticias-linha.php');?>
	</div>

</div>


	<div class="container">
			<?php include(TEMPLATEPATH.'/mod-colunas.php');?>
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
<div  id="noticias" class="row">
	<div class="container">
			<?php include(TEMPLATEPATH.'/mod-noticias.php');?>
	</div>

</div>



<?php
get_footer();
