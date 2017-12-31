const path = require('path');
const webpack = require('webpack');
const ExtractTextPlugin = require("extract-text-webpack-plugin");

const extractSass = new ExtractTextPlugin({
    filename: "css/[name].css",
    //disable: process.env.NODE_ENV === "development"
});


var inProduction = process.env.NODE_ENV === 'production';

module.exports = {
    entry: {
        main: ['./src/js/main.js', './src/sass/module.scss'],
        resume: ['./src/sass/pages/resume.scss'],
    },
    output: {
        path: path.resolve(__dirname, 'assets'),
        filename: 'js/[name].js'
    },
    module: {
        rules: [
            {
                test: /\.vue$/,
                loader: 'vue-loader',
                options: {
                    loaders: {
                    }
                    // other vue-loader options go here
                }
            },
            {
                test: /\.js$/,
                exclude: /node_modules/,
                loader: 'babel-loader'
            },
            {
                test: /\.scss$/,
                use: extractSass.extract({
                    use: [{
                        loader: "css-loader",
                        options: {minimize: true}
                    }, {
                        loader: "sass-loader",
                        query: {
                            includePaths: [path.resolve(__dirname, 'node_modules')]
                          }
                    }],
                    // use style-loader in development
                    fallback: "style-loader"
                })
            }
        ]
    },
    plugins: [
        extractSass,
        new webpack.ProvidePlugin({
            $: "jquery",
            jQuery: "jquery"
        })
    ],
    resolve: {
        alias: {
          'vue$': 'vue/dist/vue.esm.js' // 'vue/dist/vue.common.js' for webpack 1
        }
      }
};

if (inProduction) {
    module.exports.plugins.push(
        new webpack.optimize.UglifyJsPlugin()
    );
    module.exports.output.filename = '[name].min.js';
}