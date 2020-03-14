<?php

namespace Plugdation\tests\inc\gutenberg\proof\sample1;

use Plugdation\Plugdation\assets\ScriptAsset;
use Plugdation\Plugdation\assets\StyleAsset;
use Plugdation\Plugdation\gutenberg\BlockBuilder;
use Plugdation\Plugdation\hooks\RegisterHooks;

/**
 * Config
 */
$Register_Hooks = new RegisterHooks();
$Script_Asset = new ScriptAsset('test-block', 'tests/inc/gutenberg/proof/sample1/index.js');
$Editor_Asset = new StyleAsset('test-block-editor', 'tests/inc/gutenberg/proof/sample1/editor.css');
$Script_Front_Asset = new ScriptAsset('test-block-frontend', 'tests/inc/gutenberg/proof/sample1/front.js');
$Style_Asset = new StyleAsset('test-block-frontend', 'tests/inc/gutenberg/proof/sample1/style.css');


/**
 * Enqueuing Assets
 */
$Register_Hooks->register($Script_Asset);
$Register_Hooks->register($Style_Asset);
$Register_Hooks->register($Editor_Asset);
$Register_Hooks->register($Script_Front_Asset);

/**
 * Register Assets
 */
$Block = ( new BlockBuilder() )
    ->setName('plugdation/sample1')
    ->setEditorScript($Script_Asset->getHandle())
    ->setEditorStyle($Editor_Asset->getHandle())
    ->setScript($Script_Front_Asset->getHandle())
    ->setStyle($Style_Asset->getHandle())
    ->build();

$Register_Hooks->register($Block);
