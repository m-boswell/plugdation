const defaultConfig = require("@wordpress/scripts/config/webpack.config");
const path = require("path");
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const { CleanWebpackPlugin } = require('clean-webpack-plugin');
const autoprefixer = require('autoprefixer');

module.exports = {
    ...defaultConfig,
    entry: {
        block: path.resolve( process.cwd(), 'src/blocks/block-assets/', 'index.js' ),
        blockEditor: path.resolve( process.cwd(), 'src/blocks/block-editor-assets/', 'index.js' ),
        frontend: path.resolve( process.cwd(), 'src/frontend/', 'index.js' ),
        admin: path.resolve( process.cwd(), 'src/admin/', 'index.js' ),
    },
    output: {
        filename: '[name]/js/[name].js',
        path: path.resolve( process.cwd(), 'build' ),
    },
    module: {
        ...defaultConfig.module,
        rules: [
            ...defaultConfig.module.rules,
            {
                test: /\.css$/,
                use: [
                    'style-loader',
                    'css-loader',
                ]
            },
            {
                test: /\.s[ac]ss$/i,
                use: [
                    MiniCssExtractPlugin.loader,
                    'css-loader',
                    {
                        loader: 'postcss-loader',
                        options: {
                            plugins: [
                                autoprefixer()
                            ]
                        }
                    },
                    'sass-loader',
                ],
            }
        ]
    },
    plugins: [
        ...defaultConfig.plugins,
        new CleanWebpackPlugin(),
        new MiniCssExtractPlugin({
            filename: "[name]/css/[name].css"
        })
    ]
};
