<?php get_header(); ?>

	<div id="content">
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
			<div class="entry">
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
				<span class="date">by  <?php the_author() ?>,   <?php the_time('m jS, Y') ?>,  <?php comments_popup_link('No Comments ', '1 Comment ', '% Comments '); ?></span>
				<div class="entrybody">
					<?php the_excerpt(__('Read more &raquo;'));?>
				</div>
				<div class="entryinfo">
					<span class="category"><?php the_category(', ') ?></span>
				</div>
			</div>
				<?php endwhile; ?>
				<?php else : ?>
				<?php endif; ?>
	</div>
<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>	
<?php get_sidebar(); ?>
<?php get_footer(); ?>
