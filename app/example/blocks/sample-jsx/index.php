<?php

namespace Plugdation\app\blocks;

// disable direct file access
if ( ! defined( 'ABSPATH' ) ) { exit; }


namespace Plugdation\app\blocks;

// disable direct file access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Functions to register client-side assets (scripts and stylesheets) for the
 * Gutenberg block.
 *
 * @package Plugdation\app\blocks
 */

/**
 * Registers all block assets so that they can be enqueued through Gutenberg in
 * the corresponding context.
 *
 * @see https://wordpress.org/gutenberg/handbook/blocks/writing-your-first-block-type/#enqueuing-block-scripts
 */
function sampleJsxBlockInit()
{
    // Skip block registration if Gutenberg is not enabled/merged.
    if (!function_exists('register_block_type')) {
        return;
    }

    wp_register_script(
        'sample-jsx-block-editor',
        BUILD_URL . '/index.js',
        array(
            'wp-blocks',
            'wp-i18n',
            'wp-element',
            'wp-editor'
        ),
        filemtime(BUILD_PATH . '/index.js')
    );

    register_block_type('plugdation/sample-jsx', array(
        'editor_script' => 'sample-jsx-block-editor'
    ));
}

add_action('init', __NAMESPACE__ . DIRECTORY_SEPARATOR . 'sampleJsxBlockInit');
