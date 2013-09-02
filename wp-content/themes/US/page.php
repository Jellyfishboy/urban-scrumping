<?php
/**
 *  page template.
 *
 * @package WordPress
 * @subpackage 
 */
?>
<?php get_header(); ?>
		
	<div id="content">
    
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
    
	<?php the_content(); ?>
	
	
	<?php endwhile; else: ?>
	
	<h2>Woops...</h2>
	
	<p>Error in finding content.</p>
	
	<?php endif; ?>
		
	</div>

<?php get_footer(); ?>