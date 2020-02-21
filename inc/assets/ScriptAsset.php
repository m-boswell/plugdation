<?php


namespace Plugdation\Plugdation\assets;





class ScriptAsset extends Asset
{
    /**
     * @var bool
     */
    protected $inFooter;

    /**
     * ScriptAsset constructor.
     * @param $handle
     * @param $src
     * @param array $deps
     * @param string $version
     * @param bool $inFooter
     */
    public function __construct($handle, $src, array $deps = array(), $version = '', $inFooter = false)
    {
        parent::__construct($handle, $src, $deps, $version);

        $this->inFooter = $inFooter;
    }

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
