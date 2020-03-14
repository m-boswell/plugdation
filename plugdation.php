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

// disable direct file access
if ( ! defined( 'ABSPATH' ) ) { exit; }

require_once __DIR__ . './vendor/autoload.php';
//require_once __DIR__ . './inc/constants.php';                     //not currently being used.
include_once __DIR__ . './app/index.php';
//include_once __DIR__ . './tests/proofs.php';                        //testing proof of concepts.
