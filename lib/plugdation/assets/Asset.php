<?php


namespace Plugdation\assets;

require_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'config.php';

use Plugdation\hooks\actions;
use const Plugdation\PLUGIN_DIR;
use const Plugdation\PLUGIN_DIRECTORY_NAME;

/**
 * Class Asset
 *
 * Base abstract class for management of assets such as javascript scripts and CSS stylesheets.
 *
 * @package Plugdation\assets
 */
abstract class Asset implements actions
{
    /**
     * Wordpress Hook to register the asset.
     * @see https://developer.wordpress.org/plugins/hooks/
     * @var string
     */
    protected $tag = 'init';

    /**
     * Name of the asset. Should be unique.
     * @var string
     */
    protected $handle;

    /**
     * Asset path relative to \Plugdation\PLUGIN_DIR.
     * @var string
     */
    protected $src;

    /**
     * An array of asset handles this asset depends on.
     * @var string[]
     */
    protected $deps;

    /**
     * Version number. If no version number is provided
     * a random one is generated with each change to the
     * asset file. Each version is used for caching and
     * therefore each file change would cause "cache busting".
     *
     * @var string
     */
    protected $version;

    /**
     * Path to the asset file.
     * @var string
     */
    protected $path;

    /**
     * Assets constructor.
     * @param string $handle
     * @param string $src
     * @param string[] $deps
     * @param string $version
     */
    public function __construct(string $handle, string $src, array $deps = [], string $version = '')
    {
        $this->handle = $handle;
        $this->src = plugins_url( PLUGIN_DIRECTORY_NAME, PLUGIN_DIR ) . '/' . $src ;
        $this->deps = $deps;
        $this->path = PLUGIN_DIR . DIRECTORY_SEPARATOR  .  $src;
        $this->version = $version ?? filemtime( PLUGIN_DIR . DIRECTORY_SEPARATOR  .  $src );
    }

    /**
     * @return string
     */
    public function getHandle(): string
    {
        return $this->handle;
    }

    /**
     * Use this as wrapper to register a wordpress asset such as a script or stylesheet.
     * @return null
     */
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
