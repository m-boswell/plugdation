<?php


namespace Plugdation\gutenberg;


use Plugdation\gutenberg\Block;

abstract class DynamicBlock extends Block
{
    /**
     * DynamicBlock constructor.
     * @inheritDoc
     */
    public function __construct(...$args) {
        parent::__construct(...$args);
        $this->setAttributes();
        $this->render_callback = [$this, 'dynamic_render_callback'];
    }

    abstract protected function setAttributes();

    abstract public function dynamic_render_callback($attributes, $content);

}
