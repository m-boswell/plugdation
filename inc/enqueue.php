<?php
namespace Plugdation\Plugdation;

use Plugdation\Plugdation\assets\ScriptAsset;
use Plugdation\Plugdation\assets\StyleAsset;
use Plugdation\Plugdation\hooks\RegisterHooks;

$Register_Hooks = new RegisterHooks();

$Admin_Asset = new ScriptAsset('plugdation-admin', 'src/admin/index.js');
//$Admin_Asset = new StyleAsset('plugdation-admin', 'src/admin/style.css');
$Register_Hooks->register($Admin_Asset);
//$Register_Hooks->register($Admin_Asset);

$Blocks_Asset = new ScriptAsset('plugdation-blocks', 'src/blocks/index.js');
$Register_Hooks->register($Blocks_Asset);

$Frontend_Asset = new ScriptAsset('plugdation-frontend', 'src/frontend/index.js');
$Register_Hooks->register($Frontend_Asset);

function plugdation_enqueue_assets() {
    wp_enqueue_script('plugdation-admin');
//    wp_enqueue_script('plugdation-blocks');
    wp_enqueue_script('plugdation-frontend');
}
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\\' . 'plugdation_enqueue_assets' );

function plugdation_enqueue_admin_assets(  ) {
    wp_enqueue_script('plugdation-admin');
}
add_action( 'admin_enqueue_scripts', __NAMESPACE__ . '\\' . 'plugdation_enqueue_admin_assets' );
