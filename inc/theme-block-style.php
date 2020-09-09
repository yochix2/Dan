<?php
/**
 * Gutenberg Block Styles.
 *
 * @package Dan
 * @since 1.1.5
 */

wp_register_style( 'dan-theme-block-style', get_template_directory_uri() . '/assets/css/theme-block-style.css' );


// Entry content
register_block_style(
	'core/heading',
	array(
		'name'         => 'bottom-border',
		'label'        => __( 'Bottom Border', 'dan' ),
		'style_handle' => 'dan-theme-block-style',
	)
);

register_block_style(
	'core/heading',
	array(
		'name'         => 'left-border',
		'label'        => __( 'Left Border', 'dan' ),
		'style_handle' => 'dan-theme-block-style',
	)
);

//register_block_style(
//	'core/quote',
//	array(
//		'name'         => 'dan-quote',
//		'label'        => __( 'Dan Quote', 'dan' ),
//		'style_handle' => 'dan-theme-block-style',
//	)
//);

//register_block_style(
//	'core/table',
//	array(
//		'name'         => 'dan-table',
//		'label'        => __( 'Dan Table', 'dan' ),
//		'style_handle' => 'dan-theme-block-style',
//	)
//);

register_block_style(
	'core/button',
	array(
		'name'         => 'dan-button',
		'label'        => __( 'Dan Button', 'dan' ),
		'style_handle' => 'dan-theme-block-style',
	)
);