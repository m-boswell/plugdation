const defaultConfig = require("@wordpress/scripts/config/webpack.config");
const path = require("path");

module.exports = {
    ...defaultConfig,
    entry: {
        index: path.resolve( process.cwd(), 'src/blocks/block-editor-assets/', 'index.js' ),
    },
    output: {
        filename: '[name].js',
        path: path.resolve( process.cwd(), 'build' ),
    },
    module: {
        ...defaultConfig.module,
        rules: [
            ...defaultConfig.module.rules,
            {
                test: /\.css$/,
                use: ["css-loader", "style-loader"],
            }
        ]
    }
};
