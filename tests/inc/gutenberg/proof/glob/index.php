<?php

use Plugdation\Plugdation\gutenberg\BlockBuilder;
use Plugdation\Plugdation\hooks\RegisterHooks;

$Register_Hooks = new RegisterHooks();
$dir = 'tests/gutenberg/proof/glob';


$Block = BlockBuilder::glob('plugdation', 'glob', $dir);


$Register_Hooks->register($Block);
