<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	
	<title>
<?php
if (is_home()) {
	echo bloginfo('name');
} elseif (is_404()) {
	echo '404 Not Found';
} elseif (is_category()) {
	echo 'Category:'; wp_title('');
} elseif (is_search()) {
	echo 'Search Results';
} elseif ( is_day() || is_month() || is_year() ) {
	echo 'Archives:'; wp_title('');
} else {
	echo wp_title('');
}
?>
</title>

	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php wp_get_archives('type=monthly&format=link'); ?>
	<?php wp_head(); ?>
</head>

<body>
<div id="container">

	<div id="rss_feed">
		<a href="<?php bloginfo('url'); ?>/?feed=rss2"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/rss_feed.jpg" border="0" alt="Firehou.se RSS Feed" /></a>
	</div>
	
	<div id="blog_name">

		<form id="searchform" method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
				<div>
					<input type="text" name="s"  id="search_box" /> 
					<input type="image" name="search" src="<?php bloginfo('stylesheet_directory'); ?>/images/search.jpg" class="search_no_b" />
				</div>
			</form>
	
	</div>
	




	<div id="blog_slogan"><?php bloginfo('description'); ?></div>


<div id="main_menu">
			<ul>
		<li><a href="<?php bloginfo('url'); ?>">Home Page</a></li>
		<?php wp_list_pages('depth=1&title_li='); ?>
		</ul>
	</div> 

	



 	<h1 id="header"><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>


