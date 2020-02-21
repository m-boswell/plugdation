<?php


use Plugdation\Plugdation\assets\ScriptAsset;
use Plugdation\Plugdation\assets\StyleAsset;
use Plugdation\Plugdation\hooks\RegisterHooks;
use Plugdation\tests\gutenberg\proof\dynamicSample1\DynamicSampleBlock;

/**
 * Config
 */

$Register_Hooks = new RegisterHooks();
$Script_Asset = new ScriptAsset('test-dynamicSample-block', 'tests/gutenberg/proof/dynamicSample1/index.js');
$Editor_Asset = new StyleAsset('test-dynamicSample-block-editor', 'tests/gutenberg/proof/dynamicSample1/editor.css');
$Script_Front_Asset = new ScriptAsset('test-dynamicSample-block-frontend', 'tests/gutenberg/proof/dynamicSample1/front.js');
$Style_Asset = new StyleAsset('test-dynamicSample-block-frontend', 'tests/gutenberg/proof/dynamicSample1/style.css');



$Register_Hooks->register($Script_Asset);
$Register_Hooks->register($Style_Asset);
$Register_Hooks->register($Editor_Asset);
$Register_Hooks->register($Script_Front_Asset);


$Block = new DynamicSampleBlock('plugdation/sampledynamic');
$Block->setEditorScript($Script_Asset->getHandle());
$Block->setEditorStyle($Editor_Asset->getHandle());
$Block->setScript($Script_Front_Asset->getHandle());
$Block->setStyle($Style_Asset->getHandle());
$Register_Hooks->register($Block);
