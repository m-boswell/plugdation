<?php

namespace Plugdation\app\blocks;

// disable direct file access
if ( ! defined( 'ABSPATH' ) ) { exit; }

/**
 * Functions to register client-side assets (scripts and stylesheets) for the
 * Gutenberg block.
 *
 * @package plugdation
 */

/**
 * Registers all block assets so that they can be enqueued through Gutenberg in
 * the corresponding context.
 *
 * @see https://wordpress.org/gutenberg/handbook/blocks/writing-your-first-block-type/#enqueuing-block-scripts
 */
function sample_block_init() {
	// Skip block registration if Gutenberg is not enabled/merged.
	if ( ! function_exists( 'register_block_type' ) ) {
		return;
	}
	$dir = dirname( __FILE__ );

	$index_js = 'assets/index.js';
	wp_register_script(
		'sample-block-editor',
		plugins_url( $index_js, __FILE__ ),
		array(
			'wp-blocks',
			'wp-i18n',
			'wp-element',
		),
		filemtime( "$dir/$index_js" )
	);

	$editor_css = 'assets/editor.css';
	wp_register_style(
		'sample-block-editor',
		plugins_url( $editor_css, __FILE__ ),
		array(),
		filemtime( "$dir/$editor_css" )
	);

	$style_css = 'assets/style.css';
	wp_register_style(
		'sample-block',
		plugins_url( $style_css, __FILE__ ),
		array(),
		filemtime( "$dir/$style_css" )
	);

	register_block_type( 'plugdation/sample', array(
		'editor_script' => 'sample-block-editor',
		'editor_style'  => 'sample-block-editor',
		'style'         => 'sample-block',
	) );
}
add_action( 'init', __NAMESPACE__ . '\\' .'sample_block_init' );
