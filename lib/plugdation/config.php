<?php
namespace Plugdation;

const PLUGIN_DIRECTORY_NAME = 'plugdation' ;

/**
 * Private global file paths.
 *
 * * global constants used with define() are defined at runtime, thus they can use functions as values.
 * * __FILE__ The full path and filename of the file
 * * dirname() Returns a parent directory's path
 * * plugins_url() Retrieves a URL within the plugins or mu-plugins directory.
 */
define('_PD_PLUGDATION_DIR', dirname(__FILE__));
define('_PD_PLUGDATION_LIB_DIR', dirname(_PD_PLUGDATION_DIR));
define('_PD_PLUGIN_DIR', dirname(_PD_PLUGDATION_LIB_DIR));

/**
 * public namespaced constants.
 */
const PLUGIN_DIR = _PD_PLUGIN_DIR;
