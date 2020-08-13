<?php
namespace Plugdation;

// disable direct file access
if ( ! defined( 'ABSPATH' ) ) { exit; }

/* - - - - */
/* Actions */
/* - - - - */

/* Assets */

// Frontend
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\\' . 'enqueueFrontendGlobalAsset' );
add_action( 'init', __NAMESPACE__ . '\\' . 'registerFrontendBundleAssets' );
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\\' . 'enqueueFrontendBundleAssets' );
add_action( 'init', __NAMESPACE__ . '\\' . 'registerFrontendBundleFooterAsset' );
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\\' . 'enqueueFrontendBundleFooterAssets' );

// Admin
add_action( 'admin_enqueue_scripts', __NAMESPACE__ . '\\' . 'enqueueAdminGlobalAsset' );
add_action( 'init', __NAMESPACE__ . '\\' . 'registerAdminBundleAssets' );
add_action( 'admin_enqueue_scripts', __NAMESPACE__ . '\\' . 'enqueueAdminBundleAssets' );
add_action( 'init', __NAMESPACE__ . '\\' . 'registerAdminBundleFooterAsset' );
add_action( 'admin_enqueue_scripts', __NAMESPACE__ . '\\' . 'enqueueAdminBundleFooterAssets' );

// Block
add_action( 'enqueue_block_assets', __NAMESPACE__ . '\\' . 'enqueueBlockGlobalAsset' );
add_action( 'init', __NAMESPACE__ . '\\' . 'registerBlockBundleAssets' );
add_action( 'enqueue_block_assets', __NAMESPACE__ . '\\' . 'enqueueBlockBundleAssets' );

// Block editor
add_action( 'enqueue_block_editor_assets', __NAMESPACE__ . '\\' . 'enqueueBlockEditorGlobalAsset' );
add_action( 'init', __NAMESPACE__ . '\\' . 'registerBlockEditorBundleAssets' );
add_action( 'enqueue_block_editor_assets', __NAMESPACE__ . '\\' . 'enqueueBlockEditorBundleAssets' );

/* Activation */
register_activation_hook( PLUGIN_MAIN_PATH, __NAMESPACE__ . '\\' . 'pluginActivation' );

/* Deactivation */
register_deactivation_hook( PLUGIN_MAIN_PATH, __NAMESPACE__ . '\\' . 'pluginDeactivation' );

/* - - - - */
/* Filters */
/* - - - - */
