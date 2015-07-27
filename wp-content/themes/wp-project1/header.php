<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width">
		<title><?php bloginfo('name'); ?></title>
		<?php wp_head(); ?>
		<link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
	</head>

<body <?php body_class(); ?>>
			
		<!-- site-header -->
		<header class="site-header">
			<div class="logo">
				<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
			</div>
			<nav class="site-nav">

				<?php

				$args = array(
					'theme_location' => 'primary'
				);

				?>

				<?php wp_nav_menu(  $args ); ?>
				
			</nav>
		</header> <!-- /site-header -->

<?php
    if ( function_exists( 'easingslider' ) ) {
        easingslider( 64 );
    }
?>
	<!-- container -->
<div class="container">