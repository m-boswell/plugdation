<?php


namespace Plugdation\Plugdation\utils\gutenberg;

//todo consider extending this class with WP_Block_Type
use Plugdation\Plugdation\hooks\actions;

class Block implements actions
{

    /**
     * Block type key.
     *
     * @var string
     */
    public $name;

    /**
     * Block type render callback.
     *
     * @var callable
     */
    public $render_callback;

    /**
     * Block type attributes property schemas.
     *
     * @var array
     */
    public $attributes;

    /**
     * Block type editor script handle.
     *
     * @var string
     */
    public $editor_script;

    /**
     * Block type front end script handle.
     *
     * @var string
     */
    public $script;

    /**
     * Block type editor style handle.
     *
     * @var string
     */
    public $editor_style;

    /**
     * Block type front end style handle.
     *
     * @var string
     */
    public $style;


    public function __construct( $block_type, $args = array() ) {
        $this->name = $block_type;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @param callable $render_callback
     */
    public function setRenderCallback(callable $render_callback)
    {
        $this->render_callback = $render_callback;
    }

    /**
     * @param array $attributes
     */
    public function setAttributes(array $attributes)
    {
        $this->attributes = $attributes;
    }

    /**
     * @param string $editor_script
     */
    public function setEditorScript(string $editor_script)
    {
        $this->editor_script = $editor_script;
    }

    /**
     * @param string $script
     */
    public function setScript(string $script)
    {
        $this->script = $script;
    }

    /**
     * @param string $editor_style
     */
    public function setEditorStyle(string $editor_style)
    {
        $this->editor_style = $editor_style;
    }

    /**
     * @param string $style
     */
    public function setStyle(string $style)
    {
        $this->style = $style;
    }

    public function registerBlockType()
    {
        register_block_type( $this->name, array(
            'editor_script' => $this->editor_script,
            'editor_style'  => $this->editor_style,
            'style'         => $this->style,
        ) );
    }

    /**
     * @inheritDoc
     */
    public function getActions()
    {
        return array(
            'sample_block_init' => 'registerBlockType'
        );
    }


}
