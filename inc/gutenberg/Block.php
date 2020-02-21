<?php


namespace Plugdation\Plugdation\gutenberg;

//todo consider extending this class with WP_Block_Type
use Plugdation\Plugdation\hooks\actions;

class Block implements actions
{

    /**
     * Block type key.
     *
     * @var string
     */
    protected $name;

    /**
     * Block type render callback.
     *
     * @var callable
     */
    protected $render_callback;

    /**
     * Block type attributes property schemas.
     *
     * @var array
     */
    protected $attributes;

    /**
     * Block type editor script handle.
     *
     * @var string
     */
    protected $editor_script;

    /**
     * Block type front end script handle.
     *
     * @var string
     */
    protected $script;

    /**
     * Block type editor style handle.
     *
     * @var string
     */
    protected $editor_style;

    /**
     * Block type front end style handle.
     *
     * @var string
     */
    protected $style;

    /**
     * Block constructor.
     * @param string $name
     * @param string $editor_script
     */
    public function __construct( string $name ) {
        $this->name = $name;
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
        // Skip block registration if Gutenberg is not enabled/merged.
        if ( ! function_exists( 'register_block_type' ) ) {
            return;
        }
        
        register_block_type( $this->name, array(
            'editor_script'     =>  $this->editor_script,
            'editor_style'      =>  $this->editor_style ?? '',
            'style'             =>  $this->style ?? '',
            'script'            =>  $this->script ?? '',
            'attributes'        =>  $this->attributes ?? '',
            'render_callback'   =>  $this->render_callback ?? ''
        ) );
    }

    /**
     * @inheritDoc
     */
    public function getActions()
    {
        return array(
            'init' => ['registerBlockType']
        );
    }


}
