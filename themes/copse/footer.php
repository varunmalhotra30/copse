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
$args = array(  
    'post_type' => 'copse_recipe',
    'posts_per_page' => 3, 
);

?>

<div class="large-12 custom_posts"> <h1>Posts</h1> </div>

<?php
$loop = new WP_Query( $args );


while ( $loop->have_posts() ) : $loop->the_post(); ?>
<div class="cell large-4 box">
    
    <h4><?php print the_title(); ?></h4>
	
        <?php the_post_thumbnail('medium'); ?>
    <
        <?php the_excerpt(); ?> 
    <?php }  ?>


    <a href="<?php the_permalink(); ?>">Read More</a>

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
