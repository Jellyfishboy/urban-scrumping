<?php
/**
 * Ruckus Media category template
 *
 * @package WordPress
 * @subpackage RuckusMedia
 */
?>
<?php get_header(); ?>
<div id="content">
<div id="blogposts">
	<div id="cat"><img src="/wp-content/uploads/2012/04/cat.png"/></div>
<?php
$cats2 = get_cat_id( single_cat_title("",false) ); ?>
<h2>Category: <?php get_cat_id( single_cat_title("",true) ); ?></h2>
<br/>
<?php $wp_query = new WP_Query();
$wp_query->query('cat='.$cats2.''.'&showposts=5'.'&paged='.$paged);
while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
<div class="blog-exe">
<h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
<?php the_post_thumbnail();?>
<div class="the-exe"><?php the_excerpt(); ?></div>
<br/>
<br/>
<div class="blog-info">
<div class="i-comment"><img src="/wp-content/uploads/2012/04/comment.png"/><span class="text-nudge"><?php comments_number(); ?></span></div>
<div class="i-date"><img src="/wp-content/uploads/2012/04/time.png"/><span class="text-nudge"><?php the_date() ?></span></div>
<div class="i-cat"><img src="/wp-content/uploads/2012/04/category.png"/><span class="text-nudge"><?php
$output = '';
foreach((get_the_category()) as $category) {
    if($category->name==$homecat) continue;
    $category_id = get_cat_ID( $category->cat_name );
    $category_link = get_category_link( $category_id );

    if(!empty($output))
        $output .= ', ';
    $output .= '<span class="cat"><a href="'.$category_link.'">'.$category->cat_name.'</a></span>';
}
echo $output;
?></span></div>
</div>
</div>
<br />
<?php endwhile;?>
</div>
</div>
<?php get_footer(); ?>