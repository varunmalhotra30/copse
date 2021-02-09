<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package copse
 */

?>

	<footer id="colophon" class="site-footer">

	<nav id="site-navigation" class="bottomMenu">
			<button class="menu-toggle" aria-controls="Footer-menu" aria-expanded="false"><?php esc_html_e( 'Footer Menu', 'copse' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-footer',
					'menu_id'        => 'footer-menu',
				)
			);
			?>
		</nav>






		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'copse' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'copse' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'copse' ), 'copse', '<a href="http://malhotrasweb.com">Varun Malhotra</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<nav id="site-navigation" class="bottomMenu">
			<button class="menu-toggle" aria-controls="Footer-menu" aria-expanded="false"><?php esc_html_e( 'Footer Menu', 'copse' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-footer',
					'menu_id'        => 'footer-menu',
				)
			);
			?>
		</nav>

<?php wp_footer(); ?>



</body>
</html>
