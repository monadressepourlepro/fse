<?php
/**
 * Front-end assets.
 *
 * @package FSE
 */

defined( 'ABSPATH' ) || exit;

function fse_enqueue_assets(): void {
	$theme_version = wp_get_theme()->get( 'Version' );
	$dist_path     = get_template_directory() . '/assets/dist';
	$dist_uri      = get_template_directory_uri() . '/assets/dist';

	if ( file_exists( $dist_path . '/main.css' ) ) {
		wp_enqueue_style(
			'fse-main',
			$dist_uri . '/main.css',
			array(),
			$theme_version
		);
	}

	if ( file_exists( $dist_path . '/main.js' ) ) {
		wp_enqueue_script(
			'fse-main',
			$dist_uri . '/main.js',
			array(),
			$theme_version,
			true
		);
	}
}
add_action( 'wp_enqueue_scripts', 'fse_enqueue_assets' );