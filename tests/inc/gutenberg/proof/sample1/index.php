<?php


use Plugdation\Plugdation\assets\ScriptAsset;
use Plugdation\Plugdation\assets\StyleAsset;
use Plugdation\Plugdation\gutenberg\BlockBuilder;
use Plugdation\Plugdation\hooks\RegisterHooks;

$Register_Hooks = new RegisterHooks();
$Script_Asset = new ScriptAsset('test-block', 'tests/gutenberg/proof/sample1/index.js');
$Editor_Asset = new StyleAsset('test-block-editor', 'tests/gutenberg/proof/sample1/editor.css');
$Script_Front_Asset = new ScriptAsset('test-block-frontend', 'tests/gutenberg/proof/sample1/front.js');
$Style_Asset = new StyleAsset('test-block-frontend', 'tests/gutenberg/proof/sample1/style.css');



$Register_Hooks->register($Script_Asset);
$Register_Hooks->register($Style_Asset);
$Register_Hooks->register($Editor_Asset);
$Register_Hooks->register($Script_Front_Asset);


$Block = ( new BlockBuilder() )
    ->setName('plugdation/sample')
    ->setEditorScript($Script_Asset->getHandle())
    ->setEditorStyle($Editor_Asset->getHandle())
    ->setScript($Script_Front_Asset->getHandle())
    ->setStyle($Style_Asset->getHandle())
    ->build();

$Register_Hooks->register($Block);
