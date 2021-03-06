<?php

namespace example;

// disable direct file access
use const Plugdation\HANDLE_BLOCK_EDITOR_BUNDLE;

if ( ! defined( 'ABSPATH' ) ) { exit; }

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

    register_block_type('plugdation/sample-jsx', array(
        'editor_script' => HANDLE_BLOCK_EDITOR_BUNDLE
    ));

}

add_action('init', __NAMESPACE__ . '\\' . 'sampleJsxBlockInit');
