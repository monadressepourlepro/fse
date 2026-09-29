<?php
/**
 * Custom block styles.
 *
 * @package FSE
 */

defined( 'ABSPATH' ) || exit;

function fse_register_block_styles(): void {
	register_block_style(
		'core/button',
		array(
			'name'  => 'outline',
			'label' => __( 'Outline', 'fse' ),
		)
	);

	register_block_style(
		'core/image',
		array(
			'name'  => 'rounded',
			'label' => __( 'Rounded', 'fse' ),
		)
	);
}
add_action( 'init', 'fse_register_block_styles' );