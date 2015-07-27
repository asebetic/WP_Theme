<?php

get_header();

if (have_posts()) :
	while (have_posts()) : the_post(); ?>
	
	<article class="postpage">
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		
		<p class="post-info"><?php the_time('F j, Y g:i a'); ?> | by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> 
		</p>
		
		<?php the_post_thumbnail('banner-image'); ?>
		
		<?php the_content(); ?>
	</article>
	
	<?php endwhile;
	
	else :
		echo '<p>No content found</p>';
	
	endif; ?>

<?php get_sidebar(); ?>

<?php get_footer();

?>

?>