<?php
namespace Plugdation\Plugdation;

use Plugdation\Plugdation\assets\ScriptAsset;
use Plugdation\Plugdation\assets\StyleAsset;
use Plugdation\Plugdation\hooks\RegisterHooks;

$Register_Hooks = new RegisterHooks();

/**
 * - - - - - - - - - - - - - - - - -
 *      FRONTEND ASSETS             |
 * - - - - - - - - - - - - - - - - -
 */

/** Register Frontend Assets */
// styles
$Frontend_Style = new StyleAsset('plugdation-frontend', 'build/frontend/css/frontend.css');
$Register_Hooks->register($Frontend_Style);

// javascript
$asset_file = include( \Plugdation\Plugdation\BUILD_PATH .
    DIRECTORY_SEPARATOR . 'frontend' . DIRECTORY_SEPARATOR . 'js' . DIRECTORY_SEPARATOR .'frontend.asset.php');
$Frontend_Script = new ScriptAsset(
    'plugdation-frontend',
    'build/frontend/js/frontend.js',
    $asset_file['dependencies'],
    $asset_file['version']
);
$Register_Hooks->register($Frontend_Script);

/**
 * Enqueue Frontend Assets
 *
 * Fires when scripts and styles are enqueued for the front-end.
 * @see https://developer.wordpress.org/reference/hooks/wp_enqueue_scripts/
 */
function enqueueFrontendAssets(){
    wp_enqueue_script('plugdation-frontend');
    wp_enqueue_style('plugdation-frontend');
}
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\\' . 'enqueueFrontendAssets' );



/**
 * - - - - - - - - - - - - - - - - -
 *         ADMIN ASSETS             |
 * - - - - - - - - - - - - - - - - -
 */

/** Register Admin Assets */
// styles
$Admin_Style = new StyleAsset('plugdation-admin', 'build/admin/css/admin.css');
$Register_Hooks->register($Admin_Style);

// javascript
$asset_file = include( \Plugdation\Plugdation\BUILD_PATH .
    DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR . 'js' . DIRECTORY_SEPARATOR. 'admin.asset.php');
$Admin_Script = new ScriptAsset(
    'plugdation-admin',
    'build/admin/js/admin.js',
    $asset_file['dependencies'],
    $asset_file['version']
);
$Register_Hooks->register($Admin_Script);

/**
 * Enqueue Admin Assets
 *
 * Fires when scripts and styles are enqueued for the editor.
 * @see https://developer.wordpress.org/reference/hooks/admin_enqueue_scripts/
 */
function enqueueAdminAssets() {
    wp_enqueue_script('plugdation-admin');
    wp_enqueue_style('plugdation-admin');
}
add_action( 'admin_enqueue_scripts', __NAMESPACE__ . '\\' . 'enqueueAdminAssets' );




/**
 * - - - - - - - - - - - - - - - - -
 *         BLOCK ASSETS             |
 * - - - - - - - - - - - - - - - - -
 */

/** Register Block Assets */
// styles
$Block_Style = new StyleAsset('plugdation-block-assets', 'build/block/css/block.css');
$Register_Hooks->register($Block_Style);

// javascript
$asset_file = include( \Plugdation\Plugdation\BUILD_PATH .
    DIRECTORY_SEPARATOR . 'block' . DIRECTORY_SEPARATOR . 'js' . DIRECTORY_SEPARATOR . 'block.asset.php');
$Block_Script = new ScriptAsset(
    'plugdation-block-assets',
    'build/block/js/block.js',
    $asset_file['dependencies'],
    $asset_file['version']
);
$Register_Hooks->register($Block_Script);

/**
 * Enqueue Block Assets
 *
 * Fires after enqueuing block assets for both editor and front-end.
 * @see https://developer.wordpress.org/reference/hooks/enqueue_block_assets/
 */
function enqueueBlockAssets() {
    wp_enqueue_script('plugdation-block-assets');
    wp_enqueue_style('plugdation-block-assets');
}
add_action( 'enqueue_block_assets', __NAMESPACE__ . '\\' . 'enqueueBlockAssets' );




/**
 * - - - - - - - - - - - - - - - - -
 *       BLOCK EDITOR ASSETS       |
 * - - - - - - - - - - - - - - - - -
 */

/** Register Block Editor Assets */
// styles
$Block_Editor_Style = new StyleAsset('plugdation-block-editor-assets', 'build/blockEditor/css/blockEditor.css');
$Register_Hooks->register($Block_Editor_Style);

// javascript
$asset_file = include( \Plugdation\Plugdation\BUILD_PATH .
    DIRECTORY_SEPARATOR . 'blockEditor' . DIRECTORY_SEPARATOR . 'js' . DIRECTORY_SEPARATOR. 'blockEditor.asset.php');
$Block_Editor_Script = new ScriptAsset(
    'plugdation-block-editor-assets',
    'build/blockEditor/js/blockEditor.js',
    $asset_file['dependencies'],
    $asset_file['version']
);

$Register_Hooks->register($Block_Editor_Script);

/**
 * Enqueue Block Editor Assets
 *
 * Fires after block assets have been enqueued for the editing interface.
 * @see https://developer.wordpress.org/reference/hooks/enqueue_block_editor_assets/
 */
function enqueueBlockEditorAssets() {
    wp_enqueue_script('plugdation-block-editor-assets');
    wp_enqueue_style('plugdation-block-editor-assets');
}
add_action( 'enqueue_block_editor_assets', __NAMESPACE__ . '\\' . 'enqueueBlockEditorAssets' );
