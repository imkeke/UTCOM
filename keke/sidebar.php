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
		<div class="recentcm">
			<h2>Recent comments</h2>
			<ul><?php wp_recentcomments('limit=5&post=false&avatar_size=26&avatar_position=left&length=12&pingback=false&navigator=true&smilies=true'); ?></ul>
		</div>
		<div class="sideblock">
			<h2>Popular Posts</h2>
			<ul>
				<?php $result = $wpdb->get_results("SELECT comment_count,ID,post_title FROM $wpdb->posts ORDER BY comment_count DESC LIMIT 0 , 10");  
				foreach ($result as $post) {
				setup_postdata($post);
				$postid = $post->ID;
				$title = $post->post_title;
				$commentcount = $post->comment_count;
				if ($commentcount != 0) { ?>
				<li><a href="<?php echo get_permalink($postid); ?>" title="<?php echo $title ?>">
				<?php echo $title ?></a> {<?php echo $commentcount ?>}</li>
				<?php } } ?>
			</ul> 
		</div>
		<div class="sideblock">
			<h2>Tags</h2>
			<!--st_tag_cloud-->
			<div id="sidetags"><?php wp_tag_cloud('smallest=8&largest=17&number=33'); ?></div>
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
