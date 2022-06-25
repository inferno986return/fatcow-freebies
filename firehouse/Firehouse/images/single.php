<?php get_header(); ?>


	<?php get_sidebar(); ?>



	<div id="wrapper">

	<div id="content">




		<img src="<?php bloginfo('stylesheet_directory'); ?>/images/line1.jpg" border="0" alt="one-on-one online personal training blog" />

		
	<hr class="featured_clear" />


<?php if (have_posts()) : ?>


	<?php while (have_posts()) : the_post(); ?>

		<div class="post" id="post-<?php the_ID(); ?>">

				 
						<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
						<small>Posted by <?php the_author() ?> on <?php the_time('F jS, Y') ?>  </small>

			<div class="entry">
				<?php the_content('Read the rest of this entry &raquo;'); ?>
			</div>
	
			<p class="postmetadata">
				Posted in <?php the_category(', ') ?> <strong> &bull; </strong> <?php edit_post_link('Edit','','<strong> &bull; </strong>'); ?>  <?php comments_popup_link('No Comments Posted Yet &raquo;', '1 Comment &raquo;', '% Comments &raquo;'); ?>

<br />

<span class="taggit">Tagged With:</span><?php the_tags(' &nbsp; ',' &bull; ','<br />'); ?> 

				<br />
			</p>




		</div>

<div class="move_the_comments">

	<?php comments_template(); ?>

</div>


	<?php endwhile; ?>

		<p align="center"><?php next_posts_link('&laquo; Previous Entries') ?>   <?php previous_posts_link('Next Entries &raquo;') ?></p>

	<?php else : ?>
		<h2 align="center">Not Found</h2>
		<p align="center">Sorry, but you are looking for something that isn't here.</p>
	<?php endif; ?>



		</div>
	</div>







	<?php get_footer(); ?>
