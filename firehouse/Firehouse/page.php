<?php get_header(); ?>


	<?php get_sidebar(); ?>



	<div id="wrapper">

	<div id="content">




<?php if (have_posts()) : ?>

	<?php while (have_posts()) : the_post(); ?>

		<div class="post" id="post-<?php the_ID(); ?>">

					<div class="post_heading">
				 
						<h2><?php the_title(); ?></h2>

						</div>

			<div class="entry">
				<?php the_content('Read the rest of this entry &raquo;'); ?>

<?php if(function_exists('wp_email')) { email_link(); } ?>

			</div>

			<hr class="clearing" />
	
			




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
