<?php get_header(); ?>

	<div id="content">
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
			<div class="entry">
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
				<span class="date">by  <?php the_author() ?>,   <?php the_time('m jS, Y') ?>,  <?php comments_popup_link('No Comments ', '1 Comment ', '% Comments '); ?>	,  <?php the_category(', ') ?></span>
				<div class="entrybody">
					<?php the_content(__('Read more &raquo;'));?>
					<?php link_pages('<p><strong>Pages:</strong>','</p>','number'); ?>
				</div>
				<div id="tags">
					<?php the_tags('tags: ', ' , ' , ''); ?>
				</div>
			</div>
			<div class="comments-template">
				<?php comments_template(); ?>
			</div>
				<?php endwhile; ?>
				<?php else : ?>
				<?php endif; ?>
	</div>

<?php include_once("sidebar-single.php"); ?>
<?php get_footer(); ?>
