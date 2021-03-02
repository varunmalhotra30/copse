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

	<p>

	Quick Links 
	</p>
	<nav id="site-navigation" class="bottomMenu cell large-6 small-12">
	<?php wp_nav_menu( array( 'theme_location' => 'menu-secondary' ) ); ?>  
		
		</nav>

<div class="subscribe cell large-6 small-12">


<form class="example" action="/action_page.php" style="margin:auto;max-width:400px">
<p>Subscribe</p>
  <input type="text" placeholder="Search.." name="search2">
  <button type="submit"><i class="fa fa-search"></i></button>
</form>

</div>





		
	</footer><!-- #colophon -->




<?php wp_footer(); ?>



</body>
</html>
