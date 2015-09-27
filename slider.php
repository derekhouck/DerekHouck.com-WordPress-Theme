<div id="featuredcontainer">
	<div id="featured" class="cycle-slideshow" data-cycle-slides="> div"  data-cycle-pause-on-hover="true" data-cycle-speed="1000" data-cycle-pager="#navcontainer" data-cycle-pager-template="<li><a href=#>{{slideNum}}</a></li>">
		<?php
			$featured_query = new WP_Query('category_name=featured&showposts=5'); // We create the query.
			while ($featured_query->have_posts()) : $featured_query->the_post(); // Start our Custom Loop
			$do_not_duplicate[] = get_the_ID(); ?>
			<div class="featuredcontent">
				<?php the_post_thumbnail( '' ); ?>
				<div class="featuredtext">
					<h2><a href="<?php the_permalink() ?>">
						<?php
							$thetitle = $post->post_title; /* or you can use get_the_title() */
							$getlength = strlen($thetitle);
							$thelength = 42;
							echo substr($thetitle, 0, $thelength);
							if ($getlength > $thelength) echo "...";
						?>
					</a></h2>
					<?php the_excerpt(); ?>
					<p><a href="<?php the_permalink() ?>" rel="bookmark">Read More &#187;</a></p>
				</div>
			</div><!-- .featuredcontent -->
		<?php endwhile; ?>
	</div><!-- #featured -->
	<ul id="navcontainer"></ul>
</div><!-- #featuredcontainer -->