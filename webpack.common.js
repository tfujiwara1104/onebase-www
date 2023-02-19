const path = require('path');
const { CleanWebpackPlugin } = require('clean-webpack-plugin');
const RemoveEmptyScriptsPlugin = require('webpack-remove-empty-scripts');
const { ProvidePlugin } = require('webpack');

module.exports = ({ outputFile, assetFile }) => ({
  entry: {
    main: './src/js/main.js',
    sub: './src/js/sub.js',
    secondStyle: './src/scss/main.scss',
    thirdStyle: './src/scss/footer.scss',
  },
  output: {
    path: path.resolve(__dirname, 'dist'),
    filename: `js/${outputFile}.js`,
    publicPath: '/',
    chunkFilename: `js/${outputFile}.js`,
  },
  optimization: {
    splitChunks: {
      chunks: 'all',
      cacheGroups: {
        vendor: {
          chunks: 'initial',
          test: /node_modules/,
          name: 'vendor',
        },
        utils: {
          chunks: 'async', //async：非同期処理
          test: /src[\\/]/,
          name: 'utils',
          minSize: 0,
          minChunks: 2,
        },
      },
    },
  },
  resolve: {
    alias: {
      '@scss': path.resolve(__dirname, 'src/scss'),
      '@img': path.resolve(__dirname, 'src/img'),
    },
    extensions: ['.js', '.scss'],
    modules: [path.resolve(__dirname, 'src'), 'node_modules'],
  },
  module: {
    rules: [
      {
        test: /\.(ts|tsx)$/,
        exclude: /node_modules/,
        use: [
          {
            loader: 'ts-loader',
          },
        ],
      },
      {
        test: /\.(js|jsx)$/,
        exclude: /node_modules/,
        use: [
          {
            loader: 'babel-loader',
            options: {
              presets: [
                ['@babel/preset-env', { targets: '>0.25%,not dead' }],
                '@babel/preset-react',
              ],
            },
          },
        ],
      },
      {
        test: /\.(png|gif|svg|jpe?g|woff2?|ttf|eot)$/,
        type: 'asset/resource',
        generator: {
          filename: `img/${assetFile}[ext]`,
        },
        use: [
          {
            loader: 'image-webpack-loader',
          },
        ],
      },
      {
        test: /\.pug$/,
        use: [
          {
            loader: 'html-loader',
          },
          {
            loader: 'pug-html-loader',
            options: {
              pretty: true,
            },
          },
        ],
      },
    ],
  },
  plugins: [
    new CleanWebpackPlugin(),
    new RemoveEmptyScriptsPlugin(),
    new ProvidePlugin({
      //eslintrc.jsにも追記
      $: 'jquery',
      jQuery: 'jquery',
      utils: [path.resolve(__dirname, 'src/js/utils'), 'default'],
      velocity: 'velocity-animate',
    }),
  ],
});
