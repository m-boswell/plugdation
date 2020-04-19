<?php


namespace Plugdation\Plugdation\assets;


use const Plugdation\Plugdation\PLUGIN_DIR;

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
     * Set the version and add dependencies from a asset data file.
     *
     * If no asset file is provided the asset file will be assumed
     * to be in the same directory as the script file. An asset file
     * is generated from the @wordpress/scripts webpack build.
     *
     * @see https://developer.wordpress.org/block-editor/packages/packages-scripts/
     * @param string $path (optional) - Path to asset data file.
     */
    public function includeAssetInfoFile(string $path = '')  {
        if (!$path) {

            // remove the .js postfix from the file path.
            $base = substr($this->path, 0, strlen($this->path)-3);

            // Add the default .asset.php postfix.
            $path = $base . '.asset.php';

        }

        if (file_exists($path)) {
            // include the asset file.
            $asset_file = include($path);

            // set the version as the generated version from the asset file.
            $this->version = $asset_file['version'];

            // merge dependencies with the generated dependencies from the asset file.
            array_merge($this->deps, $asset_file['dependencies']);
        }

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
