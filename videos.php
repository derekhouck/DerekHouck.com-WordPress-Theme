<?php
/*
Template Name: Videos
*/
?>

<?php get_header(); ?>
<div id="content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
		<h2><?php the_title(); ?></h2>
			<div class="entry">
				<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
				<?php
					$child_pages = $wpdb->get_results(
						"
						SELECT *    
						FROM $wpdb->posts 
						WHERE post_parent = ".$post->ID."    
						AND post_type = 'page' 
						ORDER BY post_date DESC
						", 
						'OBJECT'
					);    ?>
				<?php if ( $child_pages ) : foreach ( $child_pages as $pageChild ) : setup_postdata( $pageChild ); ?>
					<ul class="child-thumb">
						<li class="videothumb">
							<a href="<?php echo  get_permalink($pageChild->ID); ?>" rel="bookmark" title="<?php echo $pageChild->post_title; ?>"><?php echo get_the_post_thumbnail($pageChild->ID, 'thumbnail'); ?><?php echo $pageChild->post_title; ?></a>
						</li>
					</ul>
				<?php endforeach; endif; ?>
				<br class="clear" />
			</div>
		</div>
	<?php endwhile; endif; ?>
</div><!-- #content -->
<?php get_footer(); ?>