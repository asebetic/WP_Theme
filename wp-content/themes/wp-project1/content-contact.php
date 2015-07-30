<article class="contact-page <?php if ( has_post_thumbnail() ) { ?>has-thumbnail <?php } ?>">
		
		<!-- post-thumbnail -->
		<div class="post-thumbnail">
	    	<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('small-thumbnail'); ?></a>
		</div><!-- /post-thumbnail -->

			<h2>
				<a href="<?php the_permalink(); ?>">
					<?php the_title(); ?>
				</a>
			</h2>

			<p>
				<?php the_content('Više...'); ?>
			</p>

		</article>