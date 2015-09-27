<ul id="sidebar">
<?php if ( !function_exists('dynamic_sidebar')
      || !dynamic_sidebar() ) : ?>
	<li>
<div id="pages_nav">
<?php if(function_exists("wp_pages_nav")) {
      wp_pages_nav("show_all_parents=1&sort_column=menu_order");
    } ?>
	<ul>
		<li><a href="/pictures/">Pictures</a></li>
	</ul>				
</div>
	</li>
	<li>
			<?php /* If this is a 404 page */ if (is_404()) { ?>
			<?php /* If this is a category archive */ } elseif (is_category()) { ?>
			<p>You are currently browsing the archives for the <?php single_cat_title(''); ?> category.</p>

			<?php /* If this is a yearly archive */ } elseif (is_day()) { ?>
			<p>You are currently browsing the <a href="<?php bloginfo('home'); ?>/"><?php echo bloginfo('name'); ?></a> weblog archives
			for the day <?php the_time('l, F jS, Y'); ?>.</p>

			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
			<p>You are currently browsing the <a href="<?php bloginfo('home'); ?>/"><?php echo bloginfo('name'); ?></a> weblog archives
			for <?php the_time('F, Y'); ?>.</p>

			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
			<p>You are currently browsing the <a href="<?php bloginfo('home'); ?>/"><?php echo bloginfo('name'); ?></a> weblog archives
			for the year <?php the_time('Y'); ?>.</p>

			<?php /* If this is a search */ } elseif (is_search()) { ?>
			<p>You have searched the <a href="<?php echo bloginfo('home'); ?>/"><?php echo bloginfo('name'); ?></a> weblog archives
			for <strong>'<?php the_search_query(); ?>'</strong>. If you are unable to find anything in these search results, you can try one of these links.</p>

			<?php /* If this is a monthly archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
			<p>You are currently browsing the <a href="<?php echo bloginfo('home'); ?>/"><?php echo bloginfo('name'); ?></a> weblog archives.</p>

			<?php } ?>
	</li>
			<?php /* If this is the frontpage */ if ( is_home() || is_page() ) { ?>
				<?php wp_list_bookmarks(); ?>
			<?php } ?>
	<li>
				<?php include (TEMPLATEPATH . '/searchform.php'); ?>
	</li>
<?php endif; ?>
			<?php /* If this is the News page */ if (is_page(News)) { ?>
	<li class="archives">
			<h3>Archives</h3>
		<ul>
				<?php wp_get_archives('type=monthly'); ?>
		</ul>
	</li>
			<?php } ?>
</ul>

