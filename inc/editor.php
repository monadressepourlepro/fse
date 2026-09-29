<?php
/**
 * Editor configuration.
 *
 * @package FSE
 */

defined( 'ABSPATH' ) || exit;

function fse_enqueue_editor_assets(): void {
	$theme_version = wp_get_theme()->get( 'Version' );
	$dist_path     = get_template_directory() . '/assets/dist';
	$dist_uri      = get_template_directory_uri() . '/assets/dist';

	if ( file_exists( $dist_path . '/main.css' ) ) {
		wp_enqueue_style(
			'fse-editor',
			$dist_uri . '/main.css',
			array(),
			$theme_version
		);
	}
}
add_action( 'enqueue_block_editor_assets', 'fse_enqueue_editor_assets' );