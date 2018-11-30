<?php
/*
Plugin Name: Historiador Custom Post Types Templates
Plugin URI: https://github.com/historiador/historiador-wp-theme-cpt-templates-plugin
Description: Custom Post Type Templates for the Historiador WordPress Theme
Version: 0.1.0
Author: Protesilaos Stavrou
Author URI: https://protesilaos.com
License: GPL3
License URI: https://www.gnu.org/licenses/gpl-3.0.html
Text Domain: historiador-cpt-templates
*/

// This plugin is intended to work in tandem with:
// 1. The Historiador WordPress theme.
// 2. The Historiador Custom Post Types plugin.
//
// The following snippet was originally abstracted from the theme's `functions.php`
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

function historiador_cpt_widgets_init() {
	// Sidebars for custom post types.
	register_sidebar(
		array(
			'name'          => __( 'Blog EN Sidebar', 'historiador' ),
			'id'            => 'sidebar-blog_en',
			'description'   => __( 'Add widgets here to appear in your sidebar on "The Man from Lisbon" posts and archive pages.', 'historiador' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Books Sidebar', 'historiador' ),
			'id'            => 'sidebar-books',
			'description'   => __( 'Add widgets here to appear in your sidebar on Book posts and archive pages.', 'historiador' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Europarl Sidebar', 'historiador' ),
			'id'            => 'sidebar-europarl',
			'description'   => __( 'Add widgets here to appear in your sidebar on Europarl posts and archive pages.', 'historiador' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Events Sidebar', 'historiador' ),
			'id'            => 'sidebar-events',
			'description'   => __( 'Add widgets here to appear in your sidebar on Event posts and archive pages.', 'historiador' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Podcast Sidebar', 'historiador' ),
			'id'            => 'sidebar-podcasts',
			'description'   => __( 'Add widgets here to appear in your sidebar on Podcast posts and archive pages.', 'historiador' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Videos Sidebar', 'historiador' ),
			'id'            => 'sidebar-videos',
			'description'   => __( 'Add widgets here to appear in your sidebar on Video posts and archive pages.', 'historiador' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'historiador_cpt_widgets_init' );

?>
