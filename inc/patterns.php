<?php
/**
 * Pattern registration.
 *
 * @package FSE
 */

defined( 'ABSPATH' ) || exit;

function fse_register_pattern_categories(): void {
	register_block_pattern_category(
		'fse-layout',
		array(
			'label' => __( 'FSE — Layout', 'fse' ),
		)
	);

	register_block_pattern_category(
		'fse-sections',
		array(
			'label' => __( 'FSE — Sections', 'fse' ),
		)
	);

	register_block_pattern_category(
		'fse-content',
		array(
			'label' => __( 'FSE — Content', 'fse' ),
		)
	);
}
add_action( 'init', 'fse_register_pattern_categories' );