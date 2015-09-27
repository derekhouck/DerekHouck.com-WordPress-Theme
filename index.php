<?php get_header(); ?>
<div id="newscontainer">
	<h2>News</h2>
	<div id="content" class="column">
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
				<div class="post" id="post-<?php the_ID(); ?>">
					<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3>
					<?php the_content('Read the rest of this entry &raquo;'); ?>
					<p class="postmetadata">Posted <?php the_time('F jS, Y') ?> |  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
				</div>
			<?php endwhile; ?>
			<div class="navigation">
				<div class="alignleft"><?php next_posts_link('&laquo; Previous Entries') ?></div>
				<div class="alignright"><?php previous_posts_link('Next Entries &raquo;') ?></div>
			</div>
			<?php else : ?>
			<h3 class="center">Not Found</h3>
			<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<?php endif; ?>
	</div><!#-- #content -->
</div><!-- #newscontainer -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>