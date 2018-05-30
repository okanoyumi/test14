<?php
/**
 *
 * Functions
 *
 * @package WordPress
 **/

/** Add Theme Support */
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnail' );

/** Custom posts */
function news_init() {
	register_post_type(
		'news', array(
			'label'         => 'news',
			'public'        => true,
			'supports'      => array( 'title', 'editor', 'thumbanil', 'excerpt', 'custom-field' ),
			'menu_position' => 3,
			'has_archive'   => true,
			'taxonomies'    => array( 'news' ),
			'show_in_rest'  => true,
			'singular_name' => 'news',
    ) );
		$args = array(
			'label'        => 'NEWS',
			'public'       => true,
			'show_ul'      => true,
			'hierarchical' => true,
		);
		register_taxonomy( 'news', $args );
}
add_action( 'init', 'news_init' );

/** Load stylesheet, script */
function add_files() {
	wp_enqueue_script( 'mainjs', get_theme_file_uri( 'assets/main.js' ) );
	wp_enqueue_style( 'maincss', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'add_files' );

/**
 *
 * Base loop
 *
 * @param string $template_name Set template name.
 */
function base_loop( $template_name ) {
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post();
			get_template_part( $template_name );
		}
	}
}

/**
 *
 * Post loop
 *
 * @param string $template_name Set template name.
 */
