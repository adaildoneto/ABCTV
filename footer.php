<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main div element.
 *
 * @package Odin
 * @since 2.2.0
 */
?>


<div class="row grey lighten-2" style="margin: 0px;">
		 <?php if (function_exists ('adinserter')) echo adinserter (9); ?>
	<footer id="footer" role="contentinfo">
		<div class="container">

						<div class="row">

									<div class="col l4 m12 s12">
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
										<?php dynamic_sidebar( 'rodape1' ); ?>
										<!-- Chamando formulario do Odin -->

								</div>
								<div class="col l4 m12 s12">
										<?php dynamic_sidebar( 'rodape2' ); ?>
								</div>
								<div class="col l4 m12 s12">
								<?php dynamic_sidebar( 'rodape3' ); ?>
						</div>

		</div>	<!-- .container -->

	</footer><!-- #footer -->
</div>
</div>

<p class="center-align">&copy; <?php echo date( 'Y' ); ?> <a href="<?php echo esc_url( home_url() ); ?>"><?php bloginfo( 'name' ); ?></a> - <?php _e( 'All rights reserved', 'odin' ); ?> | <?php echo sprintf( __( 'Powered by the <a href="%s" rel="nofollow" target="_blank">Odin</a> forces and <a href="%s" rel="nofollow" target="_blank">WordPress</a>.', 'odin' ), 'http://wpod.in/', 'http://wordpress.org/' ); ?></p>


	<?php wp_footer(); ?>
</body>
</html>
