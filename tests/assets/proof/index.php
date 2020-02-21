<?php

use Plugdation\Plugdation\assets\ScriptAsset;
use Plugdation\Plugdation\assets\StyleAsset;
use Plugdation\Plugdation\hooks\RegisterHooks;

$Register_Hooks = new RegisterHooks();
$Script_Asset = new ScriptAsset('asset-test', 'tests/assets/proof/test.js');
$Style_Asset = new StyleAsset('asset-test', 'tests/assets/proof/test.css');

$Register_Hooks->register($Script_Asset);
$Register_Hooks->register($Style_Asset);

function my_enqueue_assets() {
    wp_enqueue_script('asset-test');
    wp_enqueue_style('asset-test');
}

add_action( 'wp_enqueue_scripts', 'my_enqueue_assets' );
