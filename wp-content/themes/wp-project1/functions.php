<?php 

function wpProject1_resources() {

	wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'wpProject1_resources');


// Add Widget Areas
function ourWidgetsInit() {
	
	register_sidebar( array(
		'name' => 'Sidebar',
		'id' => 'sidebar1',
		'before_widget' => '<div class="widget-item">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	));
	
}

add_action('widgets_init', 'ourWidgetsInit');

// Theme setup
function wpProject1_setup() {
	
	// Navigation Menus
	register_nav_menus(array(
		'primary' => __( 'Primary Menu'),
	));
	
	// Add featured image support
	add_theme_support('post-thumbnails');
	add_image_size('small-thumbnail', 160, 160, true);
	add_image_size('banner-image', 560, 420, true);

	// Add post format support
	add_theme_support('post-formats', array('aside', 'gallery', 'link'));

}

add_action('after_setup_theme', 'wpProject1_setup');

// Excerpt lenght
function custom_excerpt_length( $length ) {
	return 30;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

// Customize Appearence Options
function wpProject1_customize_register( $wp_customize ) {

	$wp_customize->add_setting('wpp_link_color', array(
		'default' =>'#0f692d',
		'transport' => 'refresh',
	));

	$wp_customize->add_setting('wpp_header_color', array(
		'default' =>'#1a8435',
		'transport' => 'refresh',
	));

	$wp_customize->add_setting('wpp_hover_color', array(
		'default' =>'#125222',
		'transport' => 'refresh',
	));

	$wp_customize->add_section('wpp_standard_colors', array(
		'title' => __('Standard Colors', 'WPProject1'),
		'priority' => 30,
	));

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpp_link_color_control', array(
		'label' => __('Link Color', 'WPProject1'),
		'section' => 'wpp_standard_colors',
		'settings' => 'wpp_link_color',
		) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpp_header_color_control', array(
		'label' => __('Header & Footer', 'WPProject1'),
		'section' => 'wpp_standard_colors',
		'settings' => 'wpp_header_color',
		) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpp_hover_color_control', array(
		'label' => __('Hover Color', 'WPProject1'),
		'section' => 'wpp_standard_colors',
		'settings' => 'wpp_hover_color',
		) ) );
}

add_action('customize_register', 'WPProject1_customize_register');

// Output Customize CSS
function wpProject1_customize_css() { ?>

	<style type="text/css">

		a:link,
		a:visited,
		.site-nav ul li.current-menu-item a:link,
		.site-nav ul li.current-menu-item a:visited {
			color: <?php echo get_theme_mod('wpp_link_color'); ?>;
		}
		.site-header,
		.site-footer {
			background-color: <?php echo get_theme_mod('wpp_header_color'); ?>;
		}
		.site-nav ul li a:hover {
			background-color: <?php echo get_theme_mod('wpp_hover_color'); ?>;
		}
	</style>

<?php }

add_action('wp_head', 'wpProject1_customize_css');