<?php


use Plugdation\Plugdation\assets\ScriptAsset;
use Plugdation\Plugdation\assets\StyleAsset;
use Plugdation\Plugdation\hooks\RegisterHooks;
use Plugdation\Plugdation\gutenberg\Block;

$Register_Hooks = new RegisterHooks();
$Script_Asset = new ScriptAsset('test-block', 'tests/gutenberg/proof/sample1/index.js');
$Editor_Asset = new StyleAsset('test-block-editor', 'tests/gutenberg/proof/sample1/editor.css');
$Script_Front_Asset = new ScriptAsset('test-block-frontend', 'tests/gutenberg/proof/sample1/front.js');
$Style_Asset = new StyleAsset('test-block-frontend', 'tests/gutenberg/proof/sample1/style.css');



$Register_Hooks->register($Script_Asset);
$Register_Hooks->register($Style_Asset);
$Register_Hooks->register($Editor_Asset);
$Register_Hooks->register($Script_Front_Asset);


$Block = new Block('plugdation/sample');
$Block->setEditorScript($Script_Asset->getHandle());
$Block->setEditorStyle($Editor_Asset->getHandle());
$Block->setScript($Script_Front_Asset->getHandle());
$Block->setStyle($Style_Asset->getHandle());
$Register_Hooks->register($Block);



//function sample_block_init() {
//    // Skip block registration if Gutenberg is not enabled/merged.
//    if ( ! function_exists( 'register_block_type' ) ) {
//        return;
//    }
//
//    register_block_type( 'plugdation/sample', array(
//        'editor_script' => 'test-block',
//        'editor_style'  => 'test-block-frontend',
//        'style'         => 'test-block-editor',
//        'script'        => 'test-block-frontend',
//        'render_callback' =>  ''
//    ) );
//}
//add_action( 'init', 'sample_block_init' );
