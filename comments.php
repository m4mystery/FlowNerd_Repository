<div style="width:765px;">
<?php // Do not delete these lines
	if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

        if (!empty($post->post_password)) { // if there's a password
            if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
				?>

				<p class="nocomments">This post is password protected. Enter the password to view comments.<p>

				<?php
				return;
            }
        }

		/* This variable is for alternating comment background */
		$oddcomment = 'alt';
?>

<!-- You can start editing here. -->

<?php if ($comments) : ?>
	<h3 id="comments"><?php comments_number('0 COMMENTS', '1 COMMENT', '% COMMENTS' );?> to &#8220;<?php the_title(); ?>&#8221;</h3> 
	<br/>
	<br/>
	<ol class="commentlist">

	<?php foreach ($comments as $comment) : ?>

<li class="<?php echo $oddcomment; ?> 
<?php if ($comment->comment_author_email == get_the_author_email()) { echo 'author_comment'; } ?>" 
id="comment-<?php comment_ID() ?>">
			<cite><?php echo get_avatar( $comment, 27 ); ?> <?php comment_author_link() ?></cite> Says:
			<?php if ($comment->comment_approved == '0') : ?>
			<em>Your comment is awaiting moderation.</em>
			<?php endif; ?>
			<br />

			<small class="commentmetadata"><a href="#comment-<?php comment_ID() ?>" title=""><?php comment_date('d.m.Y') ?> at <?php comment_time() ?></a> <?php edit_comment_link('edit','',''); ?></small>

			<?php comment_text() ?>

		</li>

	<?php
		/* Changes every other comment to a different class */
		$oddcomment = ( empty( $oddcomment ) ) ? 'alt' : '';
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
<br/>
<br/>
<br/>
<img style="border: 0px; width:768px; " src="http://flownerds.co.uk//wp-content/themes/fighter/images/line2.png" /> 
<br/>
<br/>
<br/>
<p2 style="margin-left:410px;" id="respond">LEAVE A COMMENT</p2>

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">logged in</a> to post a comment.</p>
<?php else : ?>

<form style="margin-left:410px;" action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

<?php if ( $user_ID ) : ?>

<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Logout &raquo;</a></p>

<?php else : ?>

<p>
<label for="author">Name<?php if ($req) echo "(<i>required</i>):"; ?></label>
<br/><br/>
<input style="border: 1px solid #666666; margin-bottom:5px; width:345px; type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" />
</p>
<p>
<label style="margin-top:5px;" for="email">Email<?php if ($req) echo "(<i>required</i>):"; ?></label>
<br/><br/>
<input style="border: 1px solid #666666;  margin-bottom:5px; width:345px; type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" />
</p>
<p>
<label style="margin-top:5px; for="url">Website(<i>optional</i>):</label>
<br/><br/>
<input style="border: 1px solid #666666;  margin-bottom:5px; width:345px; type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
</p>

<?php endif; ?>

<!--<p><small><strong>XHTML:</strong> You can use these tags: <?php echo allowed_tags(); ?></small></p>-->

<p>
<label style="margin-top:5px; margin-bottom:5px; for="comment">Comments:</label>
<br/>
<textarea style="border: 1px solid #666666;  margin-top:5px; margin-bottom:5px;" name="comment" id="comment" cols="100%" rows="10" tabindex="4"></textarea></p>

<p><input style="margin-bottom:5px; name="submit" type="submit" id="submit" tabindex="5" value="Submit" />
<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
<input style="float:right;" type="reset" value="Reset">
</p>
<?php do_action('comment_form', $post->ID); ?>

</form>

<?php endif; // If registration required and not logged in ?>

<?php endif; // if you delete this the sky will fall on your head ?>
</div>