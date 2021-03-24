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
<?php
$copse_args = array(  
    'post_type' => 'copse_recipe',
    'posts_per_page' => 3, 
);

?>


<?php
$copse_query = new WP_Query( $copse_args );


while ( $copse_query->have_posts() ) : $copse_query->the_post(); ?>
<div class="grid-x">
<div class="cell large-12 postThumbnail">
    <h4><?php print the_title(); ?></h4>
    <?php if (has_post_thumbnail() ) { ?>
        <?php the_post_thumbnail('medium'); ?>
    <?php } ?>

    <?php if ( get_the_excerpt()) { ?>
        <?php the_excerpt(); ?> 
    <a href="<?php the_permalink(); ?>">Read More</a>

 
    <?php }  ?>
</div>
</div>
<?php
endwhile;

wp_reset_postdata(); 

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
<button type="submit"><i class="fa fa-check-square"></i></button>
</form>


</div>

</footer><!-- #colophon -->
<?php wp_footer(); ?>



</body>
</html>
