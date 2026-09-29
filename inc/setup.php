<?php
/**
 * Theme setup.
 *
 * @package FSE
 */

defined( 'ABSPATH' ) || exit;

function fse_setup(): void {
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );

	load_theme_textdomain( 'fse', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'fse_setup' );