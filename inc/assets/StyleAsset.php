<?php


namespace Plugdation\Plugdation\assets;


class StyleAsset extends Asset
{
    /**
     * @var bool
     */
    protected $media;

    /**
     * ScriptAsset constructor.
     * @param $handle
     * @param $src
     * @param array $deps
     * @param string $version
     * @param string $media
     */
    public function __construct($handle, $src, array $deps = array(), $version = '', $media = '')
    {
        parent::__construct($handle, $src, $deps, $version);

        $this->inFooter = $media;
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
