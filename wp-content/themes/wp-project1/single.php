<?php

get_header();

if (have_posts()) :
	while (have_posts()) : the_post(); ?>
	
	<article class="post">
		<h2><?php the_title(); ?></h2>
		
		<p class="post-info">Posted on <?php the_time('F j, Y'); ?> by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> 
		</p>
		
		<div class="banner-image">
			<?php the_post_thumbnail('banner-image'); ?>
		</div>

		<?php the_content(); ?>
	</article>
	
	<?php endwhile;
	
	else :
		echo '<p>No content found</p>';
	
	endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>