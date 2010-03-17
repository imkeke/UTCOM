	<div id="sidebar">
		<div class="rssandtw">
			<div class="rss"><a href="http://feeds.feedburner.com/kekeblog">Rss</a></div>
			<div class="tw"><a href="http://twitter.com/imkeke">Followme</a></div>
			<div class="blank"></div>
		</div>
		<div class="sideblock">
		<h2>Categories</h2>
			<ul>
				<?php wp_list_categories('title_li=&show_count=1&hierarchical=1') ?> 
			</ul>
		</div>
		<div class="sideblock">
			<?php wp_list_bookmarks('category_before=&category_after=&category_name=links'); ?>
		</div>
		<div class="sideblock">
		<h2>Metas</h2>
		<ul>
			<?php wp_register(); ?>
			<li><?php wp_loginout(); ?></li>
			<?php wp_meta(); ?>
			<li><a href="http://www.imkeke.net/sitemap.xml">Sitemap</a></li>
			<li><a href="http://jigsaw.w3.org/css-validator/check/referer">CSS 3.0</a></li>
			<li><a href="http://validator.w3.org/check?uri=referer">XHTML 1.0</a></li>
		</ul>
		</div>
	</div>
