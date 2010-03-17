<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes() ?>>
<head>
	<title><?php if (is_single() || is_page() || is_archive()) : ?><?php wp_title('',true); ?> | <?php bloginfo('name'); ?><?php else : ?><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?><?php endif; ?></title>
	<meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url') ?>" title="<?php echo wp_specialchars(get_bloginfo('name'), 1) ?> <?php _e('Posts RSS feed', 'sandbox'); ?>" />
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php echo wp_specialchars(get_bloginfo('name'), 1) ?> <?php _e('Comments RSS feed', 'sandbox'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url') ?>" />
	<link rel="Shortcut Icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" type="image/x-icon" />
	<?php wp_head() ?>
</head>
<body>
<div id="container">

	<div id="header">
				<h1><a href="<?php bloginfo('url') ?>"><?php bloginfo('name'); ?></a></h1>
				<h2><?php bloginfo('description'); ?></h2>
				<ul>
					<li><a href="<?php echo get_settings('home'); ?>/" title="Home">Home</a></li>
					<li><a href="<?php echo get_settings('home'); ?>/pictures/index.html" title="pictures">Pictures</a></li>
					<?php wp_list_pages('sort_column=menu_order&depth=1&title_li=0'); ?>
				</ul>
				<div id="search">
					<?php include (TEMPLATEPATH . '/searchform.php'); ?>
				</div>
	</div>
