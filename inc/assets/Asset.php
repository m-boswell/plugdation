<?php


namespace Plugdation\Plugdation\assets;

use Plugdation\Plugdation\hooks\actions;

abstract class Asset implements actions
{
    /**
     * string
     */
    protected $tag = 'init';
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
     * @var string
     */
    private $dir = \Plugdation\Plugdation\PLUGIN_DIR;


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
        $this->src = \Plugdation\Plugdation\PLUGIN_URL . "/$src" ;
        $this->deps = $deps;
        $this->version = $version ?? filemtime( \Plugdation\Plugdation\PLUGIN_DIR . DIRECTORY_SEPARATOR  .  $src );
    }

    /**
     * @return string
     */
    public function getHandle(): string
    {
        return $this->handle;
    }

    abstract function registerAsset();

    /**
     * @inheritDoc
     */
    public function getActions()
    {
        return array(
            $this->tag => ['registerAsset']
        );
    }

}
