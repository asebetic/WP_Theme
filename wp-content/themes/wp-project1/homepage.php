<?php /* Template Name: Home Page
*/ ?>

<?php

get_header();

if (have_posts()) :
	while (have_posts()) : the_post();

	get_template_part('content', get_post_format());

	endwhile;

	else :
		echo '<p>No content found</p>';

	endif; ?>

	<div class="postpage column">
		<div class="news-link">
			<a href="<?php echo get_category_link(5); ?>">
				Novosti
			</a>
		</div>

		<?php // news posts loop begins here
		$newsPosts = new WP_Query('cat=5&posts_per_page=2');

		if ($newsPosts->have_posts()) : ?>
			<?php $i=1; ?>
				<?php while ($newsPosts->have_posts()) : $newsPosts->the_post(); ?>
				<div class="post-<?php echo $i++ ?>">
                    <?php if(has_post_thumbnail()) : ?>
                        <div class="square-thumbnail">
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('small-thumbnail'); ?></a>
                        </div><!-- /post-thumbnail -->
                    <?php endif; ?>
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<?php the_excerpt(); ?>
				</div>
			<?php endwhile;
		endif;
		wp_reset_postdata();
		?>

	</div>



<?php get_sidebar(); ?>

<?php get_footer();

?>