<?php


namespace Plugdation\Plugdation\gutenberg;

class BlockBuilder
{
    /** @var string */
    protected $name;

    /** @var string */
    protected $editor_script;

    /** @var string */
    protected $script;

    /** @var string */
    protected $editor_style;

    /** @var string */
    protected $style;

    /** @var callable */
    protected $render_callback;

    /** @var array */
    protected $attributes;

    /**
     * @param string $name
     * @return BlockBuilder
     */
    public function setName(string $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @param callable $render_callback
     * @return BlockBuilder
     */
    public function setRenderCallback(callable $render_callback)
    {
        $this->render_callback = $render_callback;
        return $this;
    }

    /**
     * @param array $attributes
     * @return BlockBuilder
     */
    public function setAttributes(array $attributes)
    {
        $this->attributes = $attributes;
        return $this;
    }

    /**
     * @param string $editor_script
     * @return BlockBuilder
     */
    public function setEditorScript(string $editor_script)
    {
        $this->editor_script = $editor_script;
        return $this;
    }

    /**
     * @param string $script
     * @return BlockBuilder
     */
    public function setScript(string $script)
    {
        $this->script = $script;
        return $this;
    }

    /**
     * @param string $editor_style
     * @return BlockBuilder
     */
    public function setEditorStyle(string $editor_style)
    {
        $this->editor_style = $editor_style;
        return $this;
    }

    /**
     * @param string $style
     * @return BlockBuilder
     */
    public function setStyle(string $style)
    {
        $this->style = $style;
        return $this;
    }

    /**
     * @return Block
     */
    public function build()
    {
        return new Block(
            $this->name,
            $this->editor_script,
            $this->script,
            $this->editor_style,
            $this->style,
            $this->render_callback,
            $this->attributes
        );
    }
}
