<?php

namespace Plugdation\tests\inc\gutenberg\proof\glob;

use Plugdation\Plugdation\gutenberg\BlockBuilder;
use Plugdation\Plugdation\hooks\RegisterHooks;

$Register_Hooks = new RegisterHooks();
$dir = 'tests/inc/gutenberg/proof/glob';


$Block = BlockBuilder::glob('plugdation', 'glob', $dir);


$Register_Hooks->register($Block);
