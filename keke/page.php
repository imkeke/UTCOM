<?php get_header(); ?>

	<div id="content">
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
			<div class="entry">
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
				<div class="entrybody">
					<?php the_content(__('Read more &raquo;'));?>
					<?php link_pages('<p><strong>Pages:</strong>','</p>','number'); ?>
				</div>
			</div>
				<?php endwhile; ?>
				<?php else : ?>
				<?php endif; ?>
	</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
