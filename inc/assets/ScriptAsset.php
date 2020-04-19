<?php


namespace Plugdation\Plugdation\assets;


/**
 * Class ScriptAsset
 *
 * Used for registering script assets. Thin wrapper of \wp_register_script().
 *
 * @see https://developer.wordpress.org/reference/functions/wp_enqueue_script/
 * @package Plugdation\Plugdation\assets
 */
class ScriptAsset extends Asset
{
    /**
     * Whether to enqueue the script before </body> instead of in the <head>.
     * @var bool
     */
    protected $inFooter;

    /**
     * ScriptAsset constructor.
     * @param string $handle
     * @param string $src
     * @param string[] $deps
     * @param string $version
     * @param bool $inFooter
     */
    public function __construct(string $handle, string $src, array $deps = [], $version = '', bool $inFooter = false)
    {
        parent::__construct($handle, $src, $deps, $version);

        $this->inFooter = $inFooter;
    }

    /**
     * @inheritDoc
     */
    public function registerAsset() {
        wp_register_script(
            $this->handle,
            $this->src,
            $this->deps,
            $this->version,
            $this->inFooter
        );
    }
}
