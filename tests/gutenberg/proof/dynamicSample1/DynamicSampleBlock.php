<?php


namespace Plugdation\tests\gutenberg\proof\dynamicSample1;


use Plugdation\Plugdation\gutenberg\DynamicBlock;

class DynamicSampleBlock extends DynamicBlock
{

    public function __construct(string $name)
    {
        parent::__construct($name);
        $this->attributes = array(
            'myMessage' => array(
                'type' => 'String',
                'default' => 'Hello from the editor! I am a dynamic block'
            )
        );
    }


    public function dynamic_render_callback($attributes, $content)
    {
        return "<p>{$attributes['myMessage']}</p>";
    }
}
