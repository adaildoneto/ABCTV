<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till #main div
 *
 * @package Odin
 * @since 2.2.0
 */
?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<!--Import Google Icon Font-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!--Let browser know website is optimized for mobile-->
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php if ( ! get_option( 'site_icon' ) ) : ?>
		<link href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" rel="shortcut icon" />
	<?php endif; ?>
<script data-ad-client="ca-pub-1803151208547694" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<?php wp_head(); ?>
</head>

<body class="white">
<?php if (function_exists ('adinserter')) echo adinserter (1); ?>
		<nav class="nav-extended white" >

	<div class="float-panel" data-top="0" data-scroll="200">
				<div class="row white">
					<div class="col s1 m1 l1">
	<a href="#" data-target="mobile-menu" class="sidenav-trigger show-on-large">	<i class="fas fa-bars black-text"></i></a>


					</div>

						<div class="col s10 m9 l9">

							<?php if (has_custom_logo() ): ?>
<div class="nav-wrapper center-align">

									<?php odin_the_custom_logo();?>
</div>
							<?php else : ?>

<div class="nav-wrapper center-align">
<div class="logos">
	<a class="logomarca" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<?php bloginfo( 'name' ); ?>
		</a>
</div>
  <hr class="style-logo">
<div class="description">
	<?php bloginfo( 'description' ); ?>
</div>

</div>

							<?php endif ?>

						</div>

							<div class="col s1 m2 l2 right-align hide-on-small-only">

<a class="waves-effect waves-light btn-flat modal-trigger" href="#modal1">	<i class="fas fa-search"></i></a>

							</div>
		</div>
		</div>
	<div class="row grey lighten-4  hide-on-med-and-down esconder">
		<div class="container ">
		<div class="col s12 m12 l12">
			<?php
										wp_nav_menu( array(
				'theme_location'    => 'main-menu',
				'menu_id'           => 'primary-menu',
				'menu_class' 	    => 'left hide-on-med-and-down principal grey-text',
				'container'				=> 'ul',
				'container_class'	=>	'',
				'walker'		    =>	new Materialize_Walker_Nav_Menu(),
			) );
			?>
		</div>


		 </div>
	</div>

	</nav>


	<?php 	 wp_nav_menu( array(
				 'menu'              => 'main-menu',
				 'menu_id' 			=> 'mobile-menu',
				 'theme_location'    => 'main-menu',
				 'depth'             =>  2,
				 'container'			=> 'ul',
				 'menu_class' 		=> 'sidenav',
				 'walker'			=>	new Materialize_Walker_Nav_Menu(),
		 ));
		 ?>

		 <div id="modal1" class="modal">
		     <div class="modal-content">
		 			<?php include(TEMPLATEPATH.'/searchform.php');?>

		     </div>
		   </div>

			 <?php if (function_exists ('adinserter')) echo adinserter (2); ?>
