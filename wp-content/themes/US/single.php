<?php 
/* 
 * single blog post template.
 *
 * @package WordPress
 * @subpackage 
*/ 
?>

<?php get_header(); ?>
<div id="content">
<div id="blogposts">
<div id="cat"><img src="/wp-content/uploads/2012/04/cat.png"/></div>
<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', 'single' ); ?>

					<br/>
					<div id="comment-p"><?php comments_template( '', true ); ?></div>
                  

				<?php endwhile; // end of the loop. ?>
                </div>
                </div>
<?php get_footer(); ?>
