<?php
namespace Plugdation;

// disable direct file access
if ( ! defined( 'ABSPATH' ) ) { exit; }
/*
 * - - - - - - - - - - - - - - - - -
 *      FRONTEND ASSETS             |
 * - - - - - - - - - - - - - - - - -
 */

/**
 * Enqueue Frontend Global Assets
 */
function enqueueFrontendGlobalAsset() {

    /* config */
    $base_path = '../../assets/globals/frontend';
    $js_path = "$base_path/index.js";
    $handle = PLUGIN_PREFIX . '-' . 'frontend-globals';

    /* init global */
    $global = PLUGIN_PREFIX;
    $script = "if ( typeof $global === 'undefined' )" . '{'.
        $global . ' = {}; '.
        '}' ;
    wp_enqueue_script(
        $handle,
        plugins_url( $js_path, __FILE__ )
    );
    wp_add_inline_script($handle, $script, 'before');

}


/*
 * - - - - - - - - - - - - - - - - -
 *      ADMIN ASSETS             |
 * - - - - - - - - - - - - - - - - -
 */


/**
 * Enqueue Admin Global Assets
 */
function enqueueAdminGlobalAsset() {

    /* config */
    $base_path = '../../assets/globals/admin';
    $js_path = "$base_path/index.js";
    $handle = PLUGIN_PREFIX . '-' . 'admin-globals';

    /* init global */
    $global = PLUGIN_PREFIX;
    $script = "if ( typeof $global === 'undefined' )" . '{'.
        $global . ' = {}; '.
        '}' ;

    wp_enqueue_script(
        $handle,
        plugins_url( $js_path, __FILE__ )
    );
    wp_add_inline_script($handle, $script, 'before');

}

/*
 * - - - - - - - - - - - - - - - - -
 *         BLOCK ASSETS             |
 * - - - - - - - - - - - - - - - - -
 */

/**
 * Enqueue Block Global Assets
 */
function enqueueBlockGlobalAsset() {

    /* config */
    $base_path = '../../assets/globals/blocks/block-assets';
    $js_path = "$base_path/index.js";
    $handle = PLUGIN_PREFIX . '-' . 'block-globals';

    /* init global */
    $global = PLUGIN_PREFIX;
    $script = "if ( typeof $global === 'undefined' )" . '{'.
        $global . ' = {}; '.
        '}' ;

    wp_enqueue_script(
        $handle,
        plugins_url( $js_path, __FILE__ )
    );
    wp_add_inline_script($handle, $script, 'before');

}

/*
 * - - - - - - - - - - - - - - - - -
 *       BLOCK EDITOR ASSETS       |
 * - - - - - - - - - - - - - - - - -
 */

/**
 * Enqueue Block Editor Global Asset
 */
function enqueueBlockEditorGlobalAsset() {

    /* config */
    $base_path = '../../assets/globals/blocks/block-editor-assets';
    $js_path = "$base_path/index.js";
    $handle = PLUGIN_PREFIX . '-' . 'block-editor-globals';

    /* init global */
    $global = PLUGIN_PREFIX;
    $script = "if ( typeof $global === 'undefined' )" . '{'.
        $global . ' = {}; '.
        '}' ;

    wp_enqueue_script(
        $handle,
        plugins_url( $js_path, __FILE__ )
    );
    wp_add_inline_script($handle, $script, 'before');

}
