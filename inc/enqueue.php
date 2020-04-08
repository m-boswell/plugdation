<?php
namespace Plugdation\Plugdation;

use Plugdation\Plugdation\assets\ScriptAsset;
use Plugdation\Plugdation\assets\StyleAsset; //todo: get build implemented.
use Plugdation\Plugdation\hooks\RegisterHooks;

$Register_Hooks = new RegisterHooks();

/**
 * - - - - - - - - - - - - - - - - -
 *      FRONTEND ASSETS             |
 * - - - - - - - - - - - - - - - - -
 */

/** Register Frontend Assets */
$Frontend_Asset = new ScriptAsset('plugdation-frontend', 'src/frontend/index.js');
$Register_Hooks->register($Frontend_Asset);

/**
 * Enqueue Frontend Assets
 *
 * Fires when scripts and styles are enqueued for the front-end.
 * @see https://developer.wordpress.org/reference/hooks/wp_enqueue_scripts/
 */
function enqueueAssets() {
    wp_enqueue_script('plugdation-frontend');
}
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\\' . 'enqueueAssets' );



/**
 * - - - - - - - - - - - - - - - - -
 *         ADMIN ASSETS             |
 * - - - - - - - - - - - - - - - - -
 */

/** Register Admin Assets */
$Admin_Asset = new ScriptAsset('plugdation-admin', 'src/admin/index.js');
$Register_Hooks->register($Admin_Asset);

/**
 * Enqueue Admin Assets
 *
 * Fires when scripts and styles are enqueued for the editor.
 * @see https://developer.wordpress.org/reference/hooks/admin_enqueue_scripts/
 */
function enqueueAdminAssets() {
    wp_enqueue_script('plugdation-admin');
}
add_action( 'admin_enqueue_scripts', __NAMESPACE__ . '\\' . 'enqueueAdminAssets' );




/**
 * - - - - - - - - - - - - - - - - -
 *         BLOCK ASSETS             |
 * - - - - - - - - - - - - - - - - -
 */

/** Register Block Assets */
$Block_Asset = new ScriptAsset('plugdation-block-assets', 'src/blocks/block-assets/index.js');
$Register_Hooks->register($Block_Asset);

/**
 * Enqueue Block Assets
 *
 * Fires after enqueuing block assets for both editor and front-end.
 * @see https://developer.wordpress.org/reference/hooks/enqueue_block_assets/
 */
function enqueueBlockAssets() {
    wp_enqueue_script('plugdation-block-assets');
}
add_action( 'enqueue_block_assets', __NAMESPACE__ . '\\' . 'enqueueBlockAssets' );




/**
 * - - - - - - - - - - - - - - - - -
 *       BLOCK EDITOR ASSETS       |
 * - - - - - - - - - - - - - - - - -
 */

$asset_file = include( \Plugdation\Plugdation\BUILD_PATH . DIRECTORY_SEPARATOR . 'index.asset.php');

/** Register Block Editor Assets */
$Block_Editor_Asset = new ScriptAsset(
    'plugdation-block-editor-assets',
    'build/index.js',
    $asset_file['dependencies'],
    $asset_file['version']
);
$Register_Hooks->register($Block_Editor_Asset);


/**
 * Enqueue Block Editor Assets
 *
 * Fires after block assets have been enqueued for the editing interface.
 * @see https://developer.wordpress.org/reference/hooks/enqueue_block_editor_assets/
 */
function enqueueBlockEditorAssets() {

}
add_action( 'enqueue_block_editor_assets', __NAMESPACE__ . '\\' . 'enqueueBlockEditorAssets' );
