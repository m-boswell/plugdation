<?php


namespace Plugdation\Plugdation\assets;


abstract class Asset
{
    /**
     * @var string
     */
    protected $handle;

    /**
     * @var string
     */
    protected $src;
    /**
     * @var array
     */
    protected $deps;
    /**
     * @var string
     */
    protected $version;

    /**
     * Assets constructor.
     * @param string $handle
     * @param string $src
     * @param array $deps
     * @param string $version
     */
    public function __construct($handle, $src, array $deps = array(), $version = '')
    {
        $this->handle = $handle;
        $this->src = $src;
        $this->deps = $deps;
        $this->version = $version ?? filemtime($src);
    }

    /**
     * @return string
     */
    public function getHandle(): string
    {
        return $this->handle;
    }

    abstract function registerAsset();

}
