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
if ( ! defined( 'ABSPATH' ) ) {

    exit;

}

require_once __DIR__ . './vendor/autoload.php';
include_once __DIR__ . './src/index.php';


/**
 * Class Plugdation
 */
class Plugdation implements \Plugdation\Plugdation\utils\hooked {


    /**
     * Plugdation constructor.
     */
    public function __construct()
    {

    }

	/**
	 * @inheritDoc
	 */
	public function hook_into_wordpress(): void {
		$asset_file = include(plugin_dir_path(__FILE__) . 'build/index.asset.php');
		wp_enqueue_script(
			'plugdation-blocks',
			plugins_url('build/index.js', __File__),
			$asset_file['dependencies'],
			$asset_file['version'],
			true
		);
	}
}

add_filter('the_content', 'wpautop');