
	<div id="sidebar">



		<ul>






           <?php if ( !function_exists('dynamic_sidebar')|| !dynamic_sidebar('sidebar1') ) : ?>


         <!--  start categories  -->
				<li>
					<ul><li><h2>Topics/Categories:</h2></li>
						<li><ul>
							<?php wp_list_cats(); ?>
						</ul></li>
					</ul>
				</li>
	

		<!--  start blogroll  -->
				<li>
					<ul><li><h2>Blog Roll:</h2></li>
						<li><ul>
							<?php get_links('-1', '<li>', '</li>', '<br />', FALSE, 'id', FALSE, FALSE, -1, TRUE); ?>
						</ul></li>
					</ul>
				</li>


		<!--  start archives  -->
				<li>
					<ul><li><h2>Monthly Archives:</h2></li>
						<li><ul>
							<?php wp_get_archives('type=monthly'); ?>
						</ul></li>
					</ul>
				</li>
		

		<!--  start meta -->
				<li>
					<ul><li><h2><?php _e('Meta Information:'); ?></h2></li>
						<li><ul>
							<?php wp_register(); ?>
								<li><?php wp_loginout(); ?></li>
								<li><a href="feed:<?php bloginfo('rss2_url'); ?>" title="<?php _e('Syndicate this site using RSS'); ?>"><?php _e('<abbr title="Really Simple Syndication">RSS</abbr>'); ?></a></li>
								<li><a href="feed:<?php bloginfo('comments_rss2_url'); ?>" title="<?php _e('The latest comments to all posts in RSS'); ?>"><?php _e('Comments <abbr title="Really Simple Syndication">RSS</abbr>'); ?></a></li>
								<li><a href="http://validator.w3.org/check/referer" title="<?php _e('This page validates as XHTML 1.0 Transitional'); ?>"><?php _e('Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr>'); ?></a></li>
								<li><a href="http://gmpg.org/xfn/"><abbr title="XHTML Friends Network">XFN</abbr></a></li>
								<li><a href="http://wordpress.org/" title="<?php _e('Powered by WordPress, state-of-the-art semantic personal publishing platform.'); ?>"><abbr title="WordPress">WP</abbr></a></li>
									<?php wp_meta(); /* do not remove this line */ ?>
						</ul></li>
					</ul>
				</li>
	


             	<?php endif; ?>   

		  </ul>


	

	</div>