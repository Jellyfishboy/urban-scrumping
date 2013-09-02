<?php
/**
 *  header template.
 *
 * @package WordPress
 * @subpackage 
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes() ?>>
<head profile="http://gmpg.org/xfn/11">
<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen,projection" />
<link href='http://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
<?php wp_enqueue_script("jquery"); ?>
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>
<div id="wrapper">
		<div id="header">
			        <!-- IE CSS for sticky footer -->
<!--[if !IE 7]>
	<style type="text/css">
		#wrap {display:table;height:100%}
	</style>
<![endif]-->
				<h1></h1>
<style type="text/css">
	#megaMenu ul.megaMenu > li > a{
	font-size:1.3em;
	color:#000000;
	padding:0 40px 0 0;
	font-family: 'Oxygen', sans-serif;
}
#megaMenu ul.megaMenu > li:hover > a, #megaMenu ul.megaMenu > li > a:hover, #megaMenu ul.megaMenu > li.megaHover > a{
	color:#92bf3e;
}

</style>
				<div id="main-menu"><?php wp_nav_menu( array( 'theme_location' => 'primary-menu' ) ); ?></div>
		<br />
        <br />
		</div>