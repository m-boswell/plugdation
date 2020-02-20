<?php


use Plugdation\Plugdation\hooks\RegisterHooks;
use Plugdation\tests\hooks\proof\FilterHooks;


$Filter_Test = new FilterHooks();
$Register_Hooks = new RegisterHooks();
$Register_Hooks->register($Filter_Test);
