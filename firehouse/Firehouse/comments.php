<?php // Do not delete these lines
    if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
        die ('Please do not load this page directly. Thanks!');

        if (!empty($post->post_password)) { // if there's a password
            if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
                ?>
                
                <p class="nocomments"><?php _e("This post is password protected. Enter the password to view comments."); ?><p>
                
                <?php
                return;
            }
        }

        /* This variable is for alternating comment background */
        $oddcomment = "graybox";
        $commentcount = 1;
?>

<!-- You can start editing here. -->
<?php if( function_exists('spell_insert_headers'))spell_insert_headers();?>

<?php if ($comments) : ?>
    <h3 id="comments"><?php comments_number('No Responses', 'One Response', '% Responses' );?> to &#8220;<?php the_title(); ?>&#8221;</h3> 

    <ol class="commentlist">
    <?php foreach ($comments as $comment) : ?>

       <li class="<?php echo $oddcomment; ?>" id="comment-<?php comment_ID() ?>">
       
            <div class="commentnumber">comment number <?php echo $commentcount++;?> by: <?php comment_author_link() ?></div>
               <small class="commentmetadata"><a href="#comment-<?php comment_ID() ?>" title=""><?php comment_date('F jS, Y') ?> at <?php comment_time() ?></a> <?php edit_comment_link('e','',''); ?>
                
            <?php if ($comment->comment_approved == '0') : ?>
            <br /><em>This comment is awaiting moderation.</em>
            <?php endif; ?></small><br />
            <?php comment_text() ?>
            
        </li>
        
   <?php /* Changes every other comment to a different class */    
            if("graybox" == $oddcomment) {$oddcomment="non_graybox";}
            else { $oddcomment="graybox"; }
        ?>
      
    <?php endforeach; /* end for each comment */ ?>

    </ol>

 <?php else : // this is displayed if there are no comments so far ?>

  <?php if ('open' == $post-> comment_status) : ?> 
        <!-- If comments are open, but there are no comments. -->
        
     <?php else : // comments are closed ?>
        <!-- If comments are closed. -->
        <p class="nocomments">Comments are closed.</p>
        
    <?php endif; ?>
<?php endif; ?>


<?php if ('open' == $post-> comment_status) : ?>

<h3 id="respond">Join the Discussion!  Leave a Reply:</h3>
   
	<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
	<p class="move_it_on_over">You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">logged in</a> to post a comment.</p>
	<?php else : ?>



	<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
	<?php if( function_exists( 'osa_form' ) ) { osa_form(); } ?>
	<?php if( '' !== $comment_author ) { ?>
	<p>Welcome back <b><?php echo $comment_author; ?></b>
	<span id="showinfo">(<a href="javascript: ShowUtils();">Change</a>)</span>
	<span id="hideinfo" style="display:none;">(<a href="javascript: HideUtils();">Close</a>)</span>

	<div id="authorinfo" style="display:none;">
	<?php } ?>
	<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
	<input type="hidden" name="redirect_to" value="<?php echo htmlspecialchars($_SERVER["REQUEST_URI"]); ?>" />
	<p><input type="text" name="author" id="author" class="styled" value="<?php echo $comment_author; ?>" tabindex="1" onkeyup="ReloadName();" /> <span class="small_comments">Name</span></p>
	<p><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" tabindex="2" /> <span class="small_comments">Mail (never published)</span></p>
	<p><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" tabindex="3" onkeyup="ReloadName();" /> <span class="small_comments">Website</span></p>
	<?php if( '' !== $comment_author ) { ?>
	</div>
	<?php } ?>

	<div id="commenttext">
		<textarea name="comment" id="comment" cols="90%" rows="10" tabindex="4" onkeyup="ReloadTextDiv();"></textarea>
	</div>

	
		<input type="image" id="submit" name="submit"  tabindex="7" value="Submit Comment" src="<?php bloginfo('stylesheet_directory'); ?>/images/submit.jpg" class="buttons_no_b"  /> <?php if( function_exists('spell_insert_comment_button')) spell_insert_comment_button("spellerclass","6");?>


<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />

<?php do_action('comment_form', $post->ID); ?>

</form>



<?php endif; // If registration required and not logged in ?>

<?php endif; // if you delete this the sky will fall on your head ?> 