<?php get_header(); ?>
	<div id="content">
		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
		<div class="entry">
		<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
		<span class="date">by  <?php the_author() ?>,   <?php the_time('m jS, Y') ?>, <span class="category"><?php the_category(', ') ?></span></span>
		<div class="commentcount">{ <?php comments_popup_link('0', '1', '%'); ?> }</div>
		<div class="entrybody">
		<?php the_content(__('Read more &raquo;'));?>
		</div>
		<div class="date tags"><?php the_tags('<div class="firsttag"><em>Tags: </em>', '<span></span><div class="blank"></div></div><div>', '<span></span><div class="blank"></div></div>'); ?></div>
		<div class="blank"></div>
		</div>
		<?php endwhile; ?>
		<?php else : ?>
		<p><?php _e('No Entries found.'); ?></p>
		<?php endif; ?><?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
	</div>
	
<?php get_sidebar(); ?>
<?php get_footer(); ?>	
