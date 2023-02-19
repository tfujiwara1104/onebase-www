const { merge } = require('webpack-merge');
const commonConfig = require('./webpack.common.js');
const path = require('path');
const HtmlWebpackPlugin = require('html-webpack-plugin');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const outputFile = '[name]';
const assetFile = '[name]';

module.exports = () =>
  merge(commonConfig({ outputFile, assetFile }), {
    mode: 'development',
    devtool: 'source-map',
    devServer: {
      open: true,
      port: 9000,
      static: {
        directory: path.join(__dirname, 'dist'),
      },
    },
    module: {
      rules: [
        {
          test: /\.(css|sass|scss)$/,
          use: [
            {
              loader: MiniCssExtractPlugin.loader,
            },
            {
              loader: 'css-loader',
              options: {
                sourceMap: true, //開発時true,本番false
              },
            },
            {
              loader: 'sass-loader',
              options: {
                sassOptions: {
                  outputStyle: 'expanded',
                },
              },
            },
          ],
        },
      ],
    },
    plugins: [
      new MiniCssExtractPlugin({
        filename: `./css/${outputFile}.css`,
      }),
      new HtmlWebpackPlugin({
        template: './src/tmp/index.pug',
        filename: 'index.html',
        chunks: ['main'],
        //inject:'body' //読み込み箇所の設定
      }),
      new HtmlWebpackPlugin({
        template: './src/tmp/second.pug',
        filename: 'second.html',
        chunks: ['main'],
      }),
      new HtmlWebpackPlugin({
        template: './src/tmp/members/taro.pug',
        filename: 'members/taro.html',
        chunks: ['main'],
      }),
      new HtmlWebpackPlugin({
        template: './src/tmp/sub.pug',
        filename: 'member/sub.html',
        chunks: ['sub'],
      }),
    ],
  });
