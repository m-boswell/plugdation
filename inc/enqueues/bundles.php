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
 * Register bundled frontend asset files
 */
function registerFrontendBundleAssets() {
    /* config */
    $handle = HANDLE_FRONTEND_BUNDLE;
    $base_path = '../../build/frontend';

    // styles config
    $css_path = "$base_path/css/frontend.css";
    $css_deps = [];

    // javascript config
    $js_path = "$base_path/js/frontend.js";
    $js_deps = [PLUGIN_PREFIX . '-' . 'frontend-globals'];

    // registration procedure
    $js_asset_file = include __DIR__ . "/$base_path/js/frontend.asset.php";
    array_merge( $js_deps, $js_asset_file['dependencies'] );
    $dir = dirname( __FILE__ );

    wp_register_style(
        $handle,
        plugins_url( $css_path, __FILE__ ),
        $css_deps,
        filemtime( "$dir/$css_path" )
    );

    wp_register_script(
        $handle,
        plugins_url( $js_path, __FILE__ ),
        $js_deps,
        $js_asset_file['version']
    );

}

/**
 * Register bundled frontend asset footer files
 */
function registerFrontendBundleFooterAsset() {
    /* config */
    $handle = HANDLE_FRONTEND_FOOTER_BUNDLE;
    $base_path = '../../build/frontend-footer';

    // javascript config
    $js_path = "$base_path/js/frontend-footer.js";
    $js_deps = [];

    // registration procedure
    $js_asset_file = include __DIR__ . "/$base_path/js/frontend-footer.asset.php";
    array_merge( $js_deps, $js_asset_file['dependencies'] );

    wp_register_script(
        $handle,
        plugins_url( $js_path, __FILE__ ),
        $js_deps,
        $js_asset_file['version']
    );

}

/**
 * Enqueue bundled frontend asset files
 */
function enqueueFrontendBundleAssets() {
    wp_enqueue_script(HANDLE_FRONTEND_BUNDLE);
    wp_enqueue_style(HANDLE_FRONTEND_BUNDLE);
}

/**
 * Enqueue bundled frontend asset footer files
 */
function enqueueFrontendBundleFooterAssets() {
    wp_enqueue_script(HANDLE_FRONTEND_FOOTER_BUNDLE);
}

/*
 * - - - - - - - - - - - - - - - - -
 *      ADMIN ASSETS             |
 * - - - - - - - - - - - - - - - - -
 */

/**
 * Register bundled admin asset files
 */
function registerAdminBundleAssets() {
    /* config */
    $handle = HANDLE_ADMIN_BUNDLE;
    $base_path = '../../build/admin';

    // styles config
    $css_path = "$base_path/css/admin.css";
    $css_deps = [];

    // javascript config
    $js_path = "$base_path/js/admin.js";
    $js_deps = [PLUGIN_PREFIX . '-' . 'admin-globals'];

    // registration procedure
    $js_asset_file = include __DIR__ . "/$base_path/js/admin.asset.php";
    array_merge( $js_deps, $js_asset_file['dependencies'] );
    $dir = dirname( __FILE__ );

    wp_register_style(
        $handle,
        plugins_url( $css_path, __FILE__ ),
        $css_deps,
        filemtime( "$dir/$css_path" )
    );

    wp_register_script(
        $handle,
        plugins_url( $js_path, __FILE__ ),
        $js_deps,
        $js_asset_file['version']
    );

}

/**
 * Register bundled admin asset footer files
 */
function registerAdminBundleFooterAsset() {
    /* config */
    $handle = HANDLE_ADMIN_BUNDLE_FOOTER;
    $base_path = '../../build/admin-footer';

    // javascript config
    $js_path = "$base_path/js/admin-footer.js";
    $js_deps = [];

    // registration procedure
    $js_asset_file = include __DIR__ . "/$base_path/js/admin-footer.asset.php";
    array_merge( $js_deps, $js_asset_file['dependencies'] );

    wp_register_script(
        $handle,
        plugins_url( $js_path, __FILE__ ),
        $js_deps,
        $js_asset_file['version']
    );

}

/**
 * Enqueue bundled admin asset files
 */
function enqueueAdminBundleAssets() {
    wp_enqueue_script(HANDLE_ADMIN_BUNDLE);
    wp_enqueue_style(HANDLE_ADMIN_BUNDLE);
}

/**
 * Enqueue bundled admin asset footer files
 */
function enqueueAdminBundleFooterAssets() {
    wp_enqueue_script(HANDLE_ADMIN_BUNDLE_FOOTER);
}

/*
 * - - - - - - - - - - - - - - - - -
 *         BLOCK ASSETS             |
 * - - - - - - - - - - - - - - - - -
 */

/**
 * Register bundled block asset files
 */
function registerBlockBundleAssets() {
    /* config */
    $handle = HANDLE_BLOCK_BUNDLE;
    $base_path = '../../build/block';

    // styles config
    $css_path = "$base_path/css/block.css";
    $css_deps = [];

    // javascript config
    $js_path = "$base_path/js/block.js";
    $js_deps = [PLUGIN_PREFIX . '-' . 'block-globals'];

    // registration procedure
    $js_asset_file = include __DIR__ . "/$base_path/js/block.asset.php";
    array_merge( $js_deps, $js_asset_file['dependencies'] );
    $dir = dirname( __FILE__ );

    wp_register_style(
        $handle,
        plugins_url( $css_path, __FILE__ ),
        $css_deps,
        filemtime( "$dir/$css_path" )
    );

    wp_register_script(
        $handle,
        plugins_url( $js_path, __FILE__ ),
        $js_deps,
        $js_asset_file['version']
    );

}

/**
 * Enqueue bundled block asset files
 */
function enqueueBlockBundleAssets() {
    wp_enqueue_script(HANDLE_BLOCK_BUNDLE);
    wp_enqueue_style(HANDLE_BLOCK_BUNDLE);
}



/*
 * - - - - - - - - - - - - - - - - -
 *       BLOCK EDITOR ASSETS       |
 * - - - - - - - - - - - - - - - - -
 */


/**
 * Register bundled block editor asset files
 */
function registerBlockEditorBundleAssets() {
    /* config */
    $handle = HANDLE_BLOCK_EDITOR_BUNDLE;
    $base_path = '../../build/block-editor';

    // styles config
    $css_path = "$base_path/css/block-editor.css";
    $css_deps = [];

    // javascript config
    $js_path = "$base_path/js/block-editor.js";
    $js_deps = [PLUGIN_PREFIX . '-' . 'block-editor-globals', 'wp-editor'];

    // registration procedure
    $js_asset_file = include __DIR__ . "/$base_path/js/block-editor.asset.php";
    array_merge( $js_deps, $js_asset_file['dependencies'] );
    $dir = dirname( __FILE__ );

    wp_register_style(
        $handle,
        plugins_url( $css_path, __FILE__ ),
        $css_deps,
        filemtime( "$dir/$css_path" )
    );

    wp_register_script(
        $handle,
        plugins_url( $js_path, __FILE__ ),
        $js_deps,
        $js_asset_file['version']
    );

}

/**
 * Enqueue bundled block editor asset files
 */
function enqueueBlockEditorBundleAssets() {
    wp_enqueue_script(HANDLE_BLOCK_EDITOR_BUNDLE);
    wp_enqueue_style(HANDLE_BLOCK_EDITOR_BUNDLE);
}
