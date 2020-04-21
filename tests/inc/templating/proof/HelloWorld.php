<?php


namespace Plugdation\tests\templating\proof;


use Plugdation\templating\Render;

class HelloWorld extends Render
{

    /**
     * @inheritDoc
     */
    public function getMarkup(): string
    {
        return '<p>Testing Render with a concrete class. Check check, 1, 2, 3...check check...CHEEEEEEECCCCCKKKKKKK.</p>';
    }
}
