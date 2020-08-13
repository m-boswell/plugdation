<?php
namespace Plugdation;

// disable direct file access
if ( ! defined( 'ABSPATH' ) ) { exit; }

function pluginActivation() {

    if ( ! current_user_can( 'activate_plugins' ) ) return;

    add_option(PLUGIN_NAME . '_version', 0.0);

    flush_rewrite_rules();

}

function pluginDeactivation() {

    if ( ! current_user_can( 'activate_plugins' ) ) return;

    delete_option(PLUGIN_NAME . '_version');

}


