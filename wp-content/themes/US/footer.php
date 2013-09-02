<?php
/**
 *  footer template.
 *
 * @package WordPress
 * @subpackage 
 */
?>
<link rel="icon"
type="image/ico"
href="/wp-content/uploads/2012/04/icon-2.png" >
</div>
</div>
<div id="footer">
	<div id="barrel-footer"><img src="/wp-content/uploads/2012/04/barrel-footer.png"/></div>
	<div id="sign-footer"><img src="/wp-content/uploads/2012/04/sign-footer.png"/><a href="https://www.facebook.com/katy.radcliffe" target="_blank"><div id="facebook"><img id="fb" src="/wp-content/uploads/2012/04/fb.png"/><img id="fbk2" src="/wp-content/uploads/2012/04/fb2.png"/></div></a>
	<a href="http://www.twitter.com/urban_scrumping" target="_blank"><div id="twitter"><img id="twit" src="/wp-content/uploads/2012/04/twit.png"/><img id="twit2" src="/wp-content/uploads/2012/04/twit2.png"/></div></a></div>
<div id="fcontainer">
        <script type="text/javascript">
		var $j = jQuery.noConflict();

		$j(function(){
			$j(".i-comment").mouseover(function(){
				$j("#comment2").show();
				$j("#comment1").hide();
			}).mouseout(function(){
				$j("#comment1").show();
				$j("#comment2").hide();
			});
			$j(".i-date").mouseover(function(){
				$j("#date2").show();
				$j("#date1").hide();
			}).mouseout(function(){
				$j("#date1").show();
				$j("#date2").hide();
			});
			$j(".i-cat").mouseover(function(){
				$j("#cat2").show();
				$j("#cat1").hide();
			}).mouseout(function(){
				$j("#cat1").show();
				$j("#cat2").hide();
			});
			$j(".i-tag").mouseover(function(){
				$j("#tag2").show();
				$j("#tag1").hide();
			}).mouseout(function(){
				$j("#tag1").show();
				$j("#tag2").hide();
			});
		$j("#facebook").mouseover(function(){
				$j("#fbk2").show();
				$j("#fb").hide();
			}).mouseout(function(){
				$j("#fb").show();
				$j("#fbk2").hide();
			});
			$j("#twitter").mouseover(function(){
				$j("#twit2").show();
				$j("#twit").hide();
			}).mouseout(function(){
				$j("#twit").show();
				$j("#twit2").hide();
			}); 
		});
		</script>
		<div id="footer-txt">Urban Scrumping © 2012 Katy Radcliffe. All rights reserved.<br/>All design & development © 2012 Ruckus Media</div>
</div>
</div>
<?php wp_footer(); ?>

</body>
</html>