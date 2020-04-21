<?php
namespace Plugdation\Plugdation;

const PLUGIN_DIRECTORY_NAME = 'plugdation' ;

/**
 * Private global file paths.
 *
 * * global constants used with define() are defined at runtime, thus they can use functions as values.
 * * __FILE__ The full path and filename of the file
 * * dirname() Returns a parent directory's path
 * * plugins_url() Retrieves a URL within the plugins or mu-plugins directory.
 */
define('_PD_THIS_PATH', dirname(__FILE__));
define('_PD_PLUGDATION_PATH', dirname(_PD_THIS_PATH));
define('_PD_LIB_PATH', dirname(_PD_PLUGDATION_PATH));
define('_PD_PLUGIN_PATH', dirname(_PD_LIB_PATH));

/**
 * public namespaced constants.
 */
const PLUGIN_DIR = _PD_PLUGIN_PATH;
