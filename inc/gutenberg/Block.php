<?php


namespace Plugdation\Plugdation\gutenberg;

use Plugdation\Plugdation\hooks\actions;

/**
 * Class Block
 * @package Plugdation\Plugdation\gutenberg
 */
class Block implements actions
{

    /**
     * Block type key.
     *
     * @var string
     */
    protected $name;

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
     * Block constructor.
     * @param string $name
     * @param string|null $editor_script
     * @param string|null $script
     * @param string|null $editor_style
     * @param string|null $style
     * @param callable|null $render_callback
     * @param array|null $attributes
     */
    public function __construct(
    	string $name,
	    ?string $editor_script = null,
	    ?string $script = null,
	    ?string $editor_style = null,
	    ?string $style = null,
	    ?callable $render_callback = null,
	    ?array $attributes = null
    ) {
        $this->name = $name;
        $this->editor_script = $editor_script;
        $this->script = $script;
        $this->editor_style = $editor_style;
        $this->style = $style;
        $this->render_callback = $render_callback;
        $this->attributes = $attributes;
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
