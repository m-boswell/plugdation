<?php
/**
 * plugin constants
 */
define("PLUGIN_NAME", 'plugdation');
define("PLUGIN_MAIN_FILE", 'plugdation.php');

/**
 * Assign file paths.
 *
 * * __FILE__ The full path and filename of the file
 * * dirname() Returns a parent directory's path
 */
define("_THIS_PATH", dirname(__FILE__));
define("PLUGIN_DIR", dirname(_THIS_PATH));
define("PLUGIN_PATH", PLUGIN_DIR);
define("PLUGIN_URL", plugins_url(PLUGIN_NAME, PLUGIN_PATH));

