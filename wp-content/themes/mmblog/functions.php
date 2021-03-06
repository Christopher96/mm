<?php

add_theme_support( 'custom-logo' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'nav-menus' );

function theme_prefix_the_custom_logo() {

	if ( function_exists( 'the_custom_logo' ) ) {
		the_custom_logo();
	}

}

add_action( "init", "register_my_menus" );

function register_my_menus() {
	register_nav_menus(
			array(
				"primary" => __( "primary" )
			)
	);
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

  wp_enqueue_style( 'main', $styles."main.css" );
}
add_action( 'wp_enqueue_scripts', 'enqueue_styles' );


function get_thumbnail($size){
	if(has_post_thumbnail()){
		echo "<a href='";
		the_post_thumbnail_url('full');
		echo "' data-lightbox='images'>";
		the_post_thumbnail($size);
		echo "</a>";
	}
}

function wpdocs_custom_excerpt_length( $length ) {
    return 30;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );


function get_language_buttons(){
	$menu = wp_get_nav_menu_items("langs");

	$buttons = "";
	foreach( $menu as $item ){
		if( !empty($item->lang) ){

			$classes = "btn btn-default";
			if( in_array("current-lang", $item->classes) ){
				$classes .= " active";
			}

			$buttons .= "<a href='" .$item->url. "' class='" .$classes. "'>";
			$buttons .= $item->title;
			$buttons .= "</a>";
		}
	}

	return $buttons;
}

?>
