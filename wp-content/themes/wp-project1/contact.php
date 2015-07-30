<?php /* Template Name: Contact Page
*/ ?>

<?php

get_header();


if (have_posts()) :
	while (have_posts()) : the_post();

	get_template_part('content-contact', get_post_format());

	endwhile;

	else :
		echo '<p>No content found</p>';

	endif; ?>

<?php get_footer();

?>