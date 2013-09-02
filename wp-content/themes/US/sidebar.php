<?php 
/* 
Sidebar
*/ 
?>

<div id="sidebar">

<?php if ( !function_exists('dynamic_sidebar')
        || !dynamic_sidebar() ) : ?>
        
 
<div id="lw"><img src="http://ruckusmedia.co.uk/wp-content/uploads/2011/12/sideban.png" /><h5>Latest Tweet</h5></div>
<div id="tb"><img src="http://ruckusmedia.co.uk/wp-content/uploads/2011/12/twitback.png"/></div>
<div id="lp"><img src="http://ruckusmedia.co.uk/wp-content/uploads/2011/12/sideban.png" /><h5>Latest Posts</h5></div>
<div id="pb"><img src="http://ruckusmedia.co.uk/wp-content/uploads/2011/12/postback.png" /></div>
<div id="lt"><img src="http://ruckusmedia.co.uk/wp-content/uploads/2011/12/sideban.png" /><h5>Latest Tags</h5></div>
<div id="pt"><img src="http://ruckusmedia.co.uk/wp-content/uploads/2011/12/tagback.png" /></div>
<?php endif; ?>
</div>
<div class="clear"></div>