<?php // Do not delete these lines
if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) die ('Please do not load this page directly. Thanks!');
if (!empty($post->post_password)) { // if there's a password
	if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
?>

<h2><?php _e('Password Protected'); ?></h2>
<p><?php _e('Enter the password to view comments.'); ?></p>

<?php return;
	}
}

	/* This variable is for alternating comment background */

$oddcomment = 'alt';

?>

<!-- You can start editing here. -->

<?php if ($comments) : ?>
<h3 id="comments"><?php comments_number('No Comments', 'One Comment', '% Comments' );?></h3>
<ol id="commentlist">
		<?php foreach ($comments as $comment) : ?>
		<li class="comment <?php if($comment->comment_author_email == get_the_author_email()) {echo 'commenthost';} else { echo 'commentguest';} ?>" id="comment-<?php comment_ID() ?>">
			<div class="commenttop">
				<span class="gravatar">
					<?php echo get_avatar( get_comment_author_email(), '32' ); ?>
				</span>
				<span class="author"><?php comment_author_link() ?> <?php _e('&#58;'); ?></span>
			</div>
			<div class="commentcenter">
				<div class="text">
					<?php comment_text() ?>
				</div>
			</div>
			<div class="commentbottom">
				<div class="commentdate"><a href="#comment-<?php comment_ID() ?>" title=""><?php comment_date('F jS, Y') ?> <?php _e('at');?> <?php comment_time() ?></a>  <?php edit_comment_link('Edit Comment','',''); ?></div>
			</div>
			<?php if ($comment->comment_approved == '0') : ?>
			<em><?php _e('Your comment is awaiting moderation.'); ?></em>
			<?php endif; ?>
		</li>

		<?php /* Changes every other comment to a different class */
			if ('alt' == $oddcomment) $oddcomment = '';
			else $oddcomment = 'alt';
		?>

		<?php endforeach; /* end for each comment */ ?>
</ol>

<?php else : // this is displayed if there are no comments so far ?>

<?php if ('open' == $post->comment_status) : ?>
	<!-- If comments are open, but there are no comments. -->
	<?php else : // comments are closed ?>

	<!-- If comments are closed. -->
<p class="nocomments">Comments are closed.</p>

	<?php endif; ?>
<?php endif; ?>


<?php if ('open' == $post->comment_status) : ?>
<div id="pinglist"></div>
<h3 id="respond">leave a reply</h3>

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">logged in</a> to post a comment.</p>

<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
<?php if ( $user_ID ) : ?>

<p class="loginarea">Logged in as  <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Logout &raquo;</a></p>
<?php else : ?>


<?php if ( $comment_author != "" ) : ?>
<div id="welcome">
<?php printf(__('Welcome back <strong>%s</strong>...'), $comment_author) ?></div>
<?php endif; ?>

<div id="author_info">
<div>
	<input class="commentinput" type="text" name="author" id="authora" value="<?php echo $comment_author; ?>" tabindex="1" />
	<label class="cmlabel" for="author">Name <span class="red">*</span></label>
</div>

<div>
	<input class="commentinput" type="text" name="email" id="mail" value="<?php echo $comment_author_email; ?>" tabindex="2" />
	<label class="cmlabel" for="email">Mail (will not be published) <span class="red">*</span></label>
</div>

<div>
	<input class="commentinput" type="text" name="url" id="website" value="<?php echo $comment_author_url; ?>" tabindex="3" />
	<label class="cmlabel" for="url">Website </label>
</div>
</div>
<?php endif; ?>
<textarea name="comment" id="comment" cols="60" rows="10" tabindex="4"></textarea>





<!--<p><small><strong>XHTML:</strong> <?php _e('You can use these tags&#58;'); ?> <?php echo allowed_tags(); ?></small></p>-->


<div id="submi">
	<p><input name="submit" type="submit" id="submit" tabindex="5" value="" />
		<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
	</p>
</div>
<?php do_action('comment_form', $post->ID); ?>

</form>

<?php endif; // If registration required and not logged in ?>

<?php endif; // if you delete this the sky will fall on your head ?>