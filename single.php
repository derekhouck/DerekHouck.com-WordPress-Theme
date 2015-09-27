<?php get_header(); ?>
<div id="newscontainer">
	<h2>News</h2>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="entry" id="post-<?php the_ID(); ?>">
			<h3><a href="<?php echo get_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><?php the_title(); ?></a></h3>
			<div class="post">
				<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
				<p class="postmetadata">Posted <?php the_time('F jS, Y') ?> |  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
			</div>
			<?php comments_template(); ?>
		</div>
	<?php endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>
</div><!-- #newscontainer -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
