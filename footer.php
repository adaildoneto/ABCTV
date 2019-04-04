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



	<footer id="footer" role="contentinfo">
		<div class="container">
			<div class="row">
		            <?php if ( dynamic_sidebar('publicidade') ) : else : endif; ?>
		          </div>



		        <div class="row">

		            <div class="col l4 m12 s12">
		                <?php dynamic_sidebar( 'rodape1' ); ?>
		                <!-- Chamando formulario do Odin -->

		            </div>
		            <div class="col l5 m12 s12">
		                <?php dynamic_sidebar( 'rodape2' ); ?>
		            </div>
		            <div class="col l3 m12 s12">
		                <?php dynamic_sidebar( 'rodape3' ); ?>
		            </div>
		        </div>

			<p class="center-align">&copy; <?php echo date( 'Y' ); ?> <a href="<?php echo esc_url( home_url() ); ?>"><?php bloginfo( 'name' ); ?></a> - <?php _e( 'All rights reserved', 'odin' ); ?> | <?php echo sprintf( __( 'Powered by the <a href="%s" rel="nofollow" target="_blank">Odin</a> forces and <a href="%s" rel="nofollow" target="_blank">WordPress</a>.', 'odin' ), 'http://wpod.in/', 'http://wordpress.org/' ); ?></p>
		</div><!-- .container -->
	</footer><!-- #footer -->

	<?php wp_footer(); ?>
</body>
</html>
