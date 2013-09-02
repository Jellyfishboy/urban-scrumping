<?php
/**
 * Tarzan comments template
 *
 * @package WordPress
 * @subpackage Tarzan
 */
?>
<?php
// Do not delete these lines
if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
die ('Please do not load this page directly. Thanks!');
 
if ( post_password_required() ) { ?>
<p class="nocomments">This post is password protected. Enter the password to view comments.</p>
<?php
return;
}
?>
 
<!-- You can start editing here. -->
 
<?php if ( have_comments() ) : ?>
<br />
<h3><?php comments_number('No comments', 'One comment', '% comments'); //shows number of comments, if any ?></h3>
<ol class="commentlist">
<?php wp_list_comments(); //handles the styling and listing of all comments ?>
</ol>
<?php else : // this is displayed if there are no comments so far ?>
 
<?php if ('open' == $post->comment_status) : ?>
<!-- If comments are open, but there are no comments. -->
 
<?php else : // comments are closed ?>
<!-- If comments are closed. -->
Comments are closed.
 
<?php endif; ?>
<?php endif; ?>
 
<?php if ('open' == $post->comment_status) : ?>
 
<div id="respond">
 
<?php comment_form_title(''); //handles reply form popup?> 
 
<div class="cancel-comment-reply">
<?php cancel_comment_reply_link(); //cancels the reply form ?>
</div>
 
<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p>
<?php else : ?>
 
<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
 
<br/>
 <div id="c-box">
<p><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22"  />
<label for="author">Name <?php if ($req) echo "(required)"; ?></label></p>
 <br />
<p id="f2"><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22"  <?php if ($req) echo "aria-required='true'"; ?> />
<label for="email">Mail (will not be published) <?php if ($req) echo "(required)"; ?></label></p>
 <br />
<p id="f3"><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22"  />
<label for="url">Website</label></p>
 <br />
 
<!--<p><small><strong>XHTML:</strong> You can use these tags: <code><?php echo allowed_tags(); ?></code></small></p>-->
 
<p><textarea name="comment" id="comment" cols="100%" rows="10" tabindex="4"></textarea></p>
 
<p><input name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment" />
<?php comment_id_fields(); ?>
</p>
<?php do_action('comment_form', $post->ID); ?>
 
</form>
 </div>
<?php endif; // If registration required and not logged in ?>
</div>
 
<?php endif; // if you delete this the sky will fall on your head ?>