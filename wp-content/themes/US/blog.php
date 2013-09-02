<?php 
/* 
Template Name: BlogTemp1
*/ 
?>
<?php get_header(); ?>

<div id="content">
<div id="blogposts">
<div id="cat"><img src="/wp-content/uploads/2012/04/cat.png"/></div>
<?php $wp_query = new WP_Query();
$wp_query->query('&showposts=20'.'&paged='.$paged);
while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
<div class="blog-exe">
<h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
<?php the_post_thumbnail();?>
<div class="the-exe"><?php the_excerpt(); ?></div>
<br/>
<br/>
<div class="blog-info">
<div class="i-comment"><img id="comment1" src="/wp-content/uploads/2012/04/comment.png"/><img id="comment2" src="/wp-content/uploads/2012/04/comment2.png"/><span class="text-nudge"><?php comments_number(); ?></span></div>
<div class="i-date"><img id="date1" src="/wp-content/uploads/2012/04/time.png"/><img id="date2" src="/wp-content/uploads/2012/04/time2.png"/><span class="text-nudge"><?php the_date() ?></span></div>
<div class="i-cat"><img id="cat1" src="/wp-content/uploads/2012/04/category.png"/><img id="cat2" src="/wp-content/uploads/2012/04/category2.png"/><span class="text-nudge"><?php
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
<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'twentyten' ) ); ?></div>
<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'twentyten' ) ); ?></div>
</div>
</div>
<?php get_footer(); ?>
