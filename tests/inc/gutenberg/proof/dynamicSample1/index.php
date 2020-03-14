<?php


use Plugdation\Plugdation\assets\ScriptAsset;
use Plugdation\Plugdation\assets\StyleAsset;
use Plugdation\Plugdation\gutenberg\BlockBuilder;
use Plugdation\Plugdation\hooks\RegisterHooks;
use Plugdation\tests\gutenberg\proof\dynamicSample1\DynamicSampleBlock;

/**
 * Config
 */
$name = 'plugdation/sampledynamic';
$editor_script = 'test-dynamicSample-block';
$script = 'test-dynamicSample-block-frontend';
$editor_style = 'test-dynamicSample-block-editor';
$style = 'test-dynamicSample-block-frontend';



$Register_Hooks = new RegisterHooks();
$Script_Asset = new ScriptAsset( $editor_script, 'tests/gutenberg/proof/dynamicSample1/index.js');
$Editor_Asset = new StyleAsset($editor_style, 'tests/gutenberg/proof/dynamicSample1/editor.css');
$Script_Front_Asset = new ScriptAsset($script, 'tests/gutenberg/proof/dynamicSample1/front.js');
$Style_Asset = new StyleAsset($style, 'tests/gutenberg/proof/dynamicSample1/style.css');



$Register_Hooks->register($Script_Asset);
$Register_Hooks->register($Style_Asset);
$Register_Hooks->register($Editor_Asset);
$Register_Hooks->register($Script_Front_Asset);

$Block = new DynamicSampleBlock(
        $name,
	    $editor_script,
	    $script,
	    $editor_style,
	    $style
);
$Register_Hooks->register($Block);
