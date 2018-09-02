const path = require('path');
const webpack = require('webpack');
var ExtractTextPlugin = require('extract-text-webpack-plugin');

const config = {
    entry: path.resolve(__dirname, 'client/scripts/index.js'),
    output: {
        path: path.resolve(__dirname, 'public_html/assets'),
        filename: 'script.js',
        publicPath: '/assets/'
    },
    devtool: 'cheap-module',
    plugins: [
        new ExtractTextPlugin('style.css'),
    ],
    module: {
        rules: [
            {
                test: /\.js$/,
                exclude: /node_modules/,
                use: [{
                    loader: 'babel-loader',
                    options: {
                        presets: ['env'],
                    }
                },
                ]
            },
            {
                test: /\.scss$/,
                exclude: /node_modules/,
                use: ExtractTextPlugin.extract({
                    fallback: 'style-loader',
                    use: [
                        'css-loader',
                        {
                            loader: 'postcss-loader',
                        },
                        'sass-loader']
                })
            },
            {
                test: /\.(png|jpg|gif|svg)$/,
                exclude: /node_modules/,
                use: ['file-loader']
            },
        ]
    }
};

module.exports = config;
