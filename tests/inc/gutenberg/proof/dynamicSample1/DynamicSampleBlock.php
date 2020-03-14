<?php


namespace Plugdation\tests\inc\gutenberg\proof\dynamicSample1;


use Plugdation\Plugdation\gutenberg\DynamicBlock;

/**
 * Class DynamicSampleBlock
 * Example of a dynamic block being made with a concrete class.
 * 
 * @package Plugdation\tests\inc\gutenberg\proof\dynamicSample1
 */
class DynamicSampleBlock extends DynamicBlock
{

    protected function setAttributes()
    {
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
