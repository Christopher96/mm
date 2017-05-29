<?php

add_theme_support( 'custom-logo' );
add_theme_support( 'post-thumbnails' );

function theme_prefix_the_custom_logo() {
	
	if ( function_exists( 'the_custom_logo' ) ) {
		the_custom_logo();
	}
 
}

function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Right sidebar',
		'id'            => 'right_sidebar_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<p class="main-title txt-large">',
		'after_title'   => '</p>',
	) );

}

add_action( 'widgets_init', 'arphabet_widgets_init' );

function new_excerpt_more( $more ) {
	return '... <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">Läs mer &#187;</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

/* Widgets */

include "widgets/wpb_widget.php";

/* Menus */

include "walkers/wp-bootstrap-navwalker.php";

/* Scripts and styles */

function enqueue_scripts() {
	$scripts = get_template_directory_uri()."/js/";

	wp_enqueue_script('jquery-min', $scripts."jquery.min.js");
    wp_enqueue_script('bootstrap', $scripts."bootstrap.min.js");
    wp_enqueue_script('lightbox', $scripts."lightbox.min.js");
    wp_enqueue_script('main', $scripts."main.js");
}
add_action('wp_footer', 'enqueue_scripts');


function enqueue_styles() {
	$styles = get_template_directory_uri()."/css/";

    wp_enqueue_style( 'libs', $styles."libs.css" );
    wp_enqueue_style( 'main', $styles."main.css" );
}
add_action( 'wp_enqueue_scripts', 'enqueue_styles' );



?>
