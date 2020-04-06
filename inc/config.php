<?php
namespace Plugdation\Plugdation;

const PLUGIN_NAME = 'plugdation';

/**
 * Private global file paths.
 *
 * * global constants used with define() are defined at runtime, thus they can use functions as values.
 * * __FILE__ The full path and filename of the file
 * * dirname() Returns a parent directory's path
 * * plugins_url() Retrieves a URL within the plugins or mu-plugins directory.
 */
define('_PLUGDATION_THIS_PATH', dirname(__FILE__));
define('_PLUGDATION_PLUGIN_DIR', dirname(_PLUGDATION_THIS_PATH));
define('_PLUGDATION_PLUGIN_URL', plugins_url(PLUGIN_NAME, _PLUGDATION_PLUGIN_DIR));

/**
 * public namespaced constants.
 */
const PLUGIN_MAIN_FILE = 'plugdation.php';
const PLUGIN_DIR = _PLUGDATION_PLUGIN_DIR;
const PLUGIN_URL = _PLUGDATION_PLUGIN_URL;
const BUILD_PATH =  PLUGIN_DIR . DIRECTORY_SEPARATOR . 'build';
const BUILD_URL = PLUGIN_URL . '/' . 'build';
