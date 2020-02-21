<?php


namespace Plugdation\Plugdation\assets;
require_once __DIR__ . './../constants.php';

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
    private $dir = PLUGIN_PATH;


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
        $this->src = PLUGIN_URL . "/$src" ;
        $this->deps = $deps;
        $this->version = $version ?? filemtime( PLUGIN_PATH . DIRECTORY_SEPARATOR  .  $src );
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
