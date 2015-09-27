		<div id="footer">
			<div id="recentnews">
				<h2>Recent News</h2>
				<div class="column">
					<?php $recentnews = new WP_Query('cat=-20&posts_per_page=3'); ?>
					<ul>
						<?php while ($recentnews->have_posts()) : $recentnews->the_post(); ?>
							<li>
								<h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
								<p><?php echo excerpt(25); ?></p>
							</li>
						<?php endwhile; ?>
					</ul>
					<a href="/news/">More News &#187;</a>
				</div><!-- .column -->
			</div><!-- #recentnews -->
			<div id="about">
				<h2>About Derek</h2>
				<div class="column">
					<?php
						$include = get_pages('include=2');
						$content = apply_filters('the_content',$include[0]->post_content);
						echo $content;
					?>
				</div><!-- .column -->
			</div><!-- #about -->
			<br class="clear" />
		</div>	
		<?php wp_footer(); ?>
	</div><!-- #container -->
<!-- Google Analytics code -->
<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript">
_uacct = "UA-1434230-1";
urchinTracker();
</script>
<!-- End of Google Analytics code -->
</body>
</html>
