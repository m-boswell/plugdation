<?php

namespace Plugdation\tests\inc\hooks\proof;

use Plugdation\Plugdation\hooks\RegisterHooks;



$Filter_Test = new FilterHooks();
$Register_Hooks = new RegisterHooks();
$Register_Hooks->register($Filter_Test);
