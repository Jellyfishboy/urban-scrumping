<?php 
/* 
 * Content for single blog posts
 *
 * @package WordPress
 * @subpackage 
*/ 
?>
<div class="blog-exe">
<h1><?php the_title(); ?></h1>
<?php the_content(); ?>
<br />
<div class="blog-info">
<div class="i-date"><img id="date1" src="/wp-content/uploads/2012/04/time.png"/><img id="date2" src="/wp-content/uploads/2012/04/time2.png"/><span class="text-nudge"><?php the_date() ?></span></div>
<?php $separator=','; ?>
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
?></span></div><div class="i-tag"><img id="tag1" src="/wp-content/uploads/2012/04/dogtags.png"/><img id="tag2" src="/wp-content/uploads/2012/04/dogtags2.png"/><div class="text-nudge2"><?php the_tags('', ', ', ''); ?> </div></div></div>
</div>
