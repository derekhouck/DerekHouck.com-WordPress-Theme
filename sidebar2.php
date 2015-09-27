<ul id="sidebar" class="column">
	<li class="flexipages_widget widget">
<div id="pages_nav">
<?php if(function_exists("wp_pages_nav")) {
      wp_pages_nav("show_all_parents=1&exclude=27");
    } ?>		
</div>
	</li>
	<li class="widget_text widget">
		<a href="/pictures/">Pictures</a>
	</li>		
	<li class="widget widget_search">
				<?php include (TEMPLATEPATH . '/searchform.php'); ?>
	</li>
	<li class="archives widget">
			<h3>Archives</h3>
		<ul>
				<?php wp_get_archives('type=monthly'); ?>
		</ul>
	</li>
</ul>

