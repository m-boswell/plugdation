<?php


namespace Plugdation\assets;

/**
 * Class StyleAsset
 *
 * Used for registering stylesheet assets. Thin wrapper of \wp_register_script().
 *
 * @see https://developer.wordpress.org/reference/functions/wp_enqueue_style/
 * @package Plugdation\assets
 */
class StyleAsset extends Asset
{
    /**
     * The media for which this stylesheet has been defined.
     *
     * @see https://developer.wordpress.org/reference/functions/wp_enqueue_style/
     * @var bool
     */
    protected $media;

    /**
     * ScriptAsset constructor.
     * @param string $handle
     * @param string $src
     * @param string[] $deps
     * @param string $version
     * @param string $media
     */
    public function __construct(string $handle, string $src, array $deps = [], $version = '', string $media = 'all')
    {
        parent::__construct($handle, $src, $deps, $version);

        $this->media = $media;
    }

    public function registerAsset(){
        wp_register_style(
            $this->handle,
            $this->src,
            $this->deps,
            $this->version,
            $this->media
        );
    }

}
