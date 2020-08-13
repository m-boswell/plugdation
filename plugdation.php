<?php
/*
Plugin Name:  Plugdation
Description:  A starting foundation for your wordpress plugin.
Plugin URI:   https://WEBSITE
Author:       Matthew Boswell
Version:      1.0
Text Domain:  plugdation
Domain Path:  /languages
License:      MIT License
License URI:  https://opensource.org/licenses/MIT
*/

namespace Plugdation;


// disable direct file access
if ( ! defined( 'ABSPATH' ) ) { exit; }

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/inc/config.php';
require_once __DIR__ . '/inc/enqueues/globals.php';
require_once __DIR__ . '/inc/enqueues/bundles.php';
require_once __DIR__ . '/inc/hooks.php';
require_once __DIR__ . '/inc/activation-deactivation.php';
require_once __DIR__ . '/app/index.php';
