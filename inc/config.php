<?php
namespace Plugdation;

// disable direct file access
if ( ! defined( 'ABSPATH' ) ) { exit; }

/* Edit these config variables as you see fit. */
const PLUGIN_DIRECTORY_NAME = 'plugdation' ;
const PLUGIN_NAME = 'plugdation';
const PLUGIN_MAIN = 'plugdation.php';
const PLUGIN_PREFIX = 'pl';


/*
 * Private global file paths.
 *
 * * global constants used with define() are defined at runtime, thus they can use functions as values.
 * * __FILE__ The full path and filename of the file
 * * dirname() Returns a parent directory's path
 */
define('_PLUGDATION_DIR_INC_SEED', dirname(__FILE__));
define('_PLUGDATION_DIR_SEED', dirname(_PLUGDATION_DIR_INC_SEED));

/*
 * public namespaced constants.
 */
const PLUGIN_DIR = _PLUGDATION_DIR_SEED;
const PLUGIN_MAIN_PATH = PLUGIN_DIR . DIRECTORY_SEPARATOR . PLUGIN_MAIN;

// asset handles
const HANDLE_FRONTEND_BUNDLE = PLUGIN_PREFIX . '-' . 'frontend-bundle';
const HANDLE_FRONTEND_FOOTER_BUNDLE = PLUGIN_PREFIX . '-' . 'frontend-bundle-footer';
const HANDLE_ADMIN_BUNDLE = PLUGIN_PREFIX . '-' . 'admin-bundle-footer';
const HANDLE_ADMIN_BUNDLE_FOOTER = PLUGIN_PREFIX . '-' . 'admin-bundle-footer';
const HANDLE_BLOCK_BUNDLE = PLUGIN_PREFIX . '-' . 'block-bundle';
const HANDLE_BLOCK_EDITOR_BUNDLE = PLUGIN_PREFIX . '-' . 'block-editor-bundle';

