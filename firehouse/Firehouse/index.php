<?php get_header(); ?>


	<?php if(is_home() ) { ?>
    
	<div id="home_page_only_top"> </div>
	

		<div id="home_page_only"> 

			<div id="home_page_only_left">
			<img src="<?php bloginfo('stylesheet_directory'); ?>/images/about.jpg" border="0" alt="About Firehou.se" /><br />

		        <?php if ( !function_exists('dynamic_sidebar')|| !dynamic_sidebar('about_area') ) : ?>

					<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
					</p>
					<p>
					Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>

				<?php endif; ?> 

			</div>

			<div id="home_page_only_right">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/images/latest.jpg" border="0" alt="The Latest Posts from Firehou.se" /><br />
					<ul>
						<?php get_archives(postbypost, '10'); ?>
					</ul>
			</div>

		
		<hr class="clearing" />

		</div>

		<img src="<?php bloginfo('stylesheet_directory'); ?>/images/home_page_only_bottom.jpg" border="0" alt="Firehou.se - Tech and Firefighting" />

	<?php } else { ?>

    <?php } ?>   


	<?php get_sidebar(); ?>



	<div id="wrapper">

	<div id="content">




<?php if (have_posts()) : ?>

	<?php while (have_posts()) : the_post(); ?>

		<div class="post" id="post-<?php the_ID(); ?>">

		<?php if ( in_category(24) ) {
				 include (TEMPLATEPATH . '/the_tech_category_heading.php'); 
			} elseif (in_category(25)) {
				include (TEMPLATEPATH . '/the_fire_category_heading.php');
			}else {
				include (TEMPLATEPATH . '/the_other_category_heading.php');
			}
		?>

					

			<div class="entry">
				<?php the_content('Read the rest of this entry &raquo;'); ?>

			</div>

	
			<p class="postmetadata">
				Posted in <?php the_category(', ') ?> <strong> &bull; </strong>  <?php comments_popup_link('No Comments Posted Yet &raquo;', '1 Comment &raquo;', '% Comments &raquo;'); ?><br />
				Tagged With: <?php the_tags(' &nbsp; ',' &bull; ','<br />'); ?> 
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
