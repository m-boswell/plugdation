<?php


namespace Plugdation\Plugdation\gutenberg;


use Plugdation\Plugdation\gutenberg\Block;

abstract class DynamicBlock extends Block
{
    public function __construct(string $name)
    {
        parent::__construct($name);
        $this->render_callback = [$this, 'dynamic_render_callback'];
    }

    abstract public function dynamic_render_callback($attributes, $content);

}
