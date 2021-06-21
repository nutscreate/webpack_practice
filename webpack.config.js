const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const HtmlWebpackPlugin = require('html-webpack-plugin');
const {CleanWebpackPlugin} = require('clean-webpack-plugin');

// production or development
module.exports = {
    mode: 'production',
    devtool: 'source-map',
    entry:'./src/js/main.js',
    output:{
        path:path.resolve(__dirname, './dist'),
        filename:'./js/main.js',
        publicPath: '/',
    },
    module:{
        rules:[
            {
                test: /\.js/,
                exclude: /node_modules/,
                use: [
                  {
                    loader: 'babel-loader',
                    options: {
                      presets: [
                        ['@babel/preset-env', { "targets": "> 0.25%, not dead" }],
                      ],
                    },
                  },
                ],
              },
            {
                test: /\.(css|scss|sass)$/,
                use:[
                    {
                        loader:MiniCssExtractPlugin.loader,
                    },
                    {
                        loader:'css-loader',
                        options: { sourceMap: true },
                    },
                    {
                      loader: "postcss-loader",
                      options: {
                        // PostCSS側でもソースマップを有効にする
                        // sourceMap: true,
                        postcssOptions: {
                          plugins: [
                            // Autoprefixerを有効化
                            // ベンダープレフィックスを自動付与する
                            ["autoprefixer", { grid: true }],
                          ],
                        },
                      },
                    },
                    {
                        loader:'sass-loader',
                    },
                ],
            },
            {
                test:/\.gif|png|jpg|jpeg|svg|webp/,
                type:'asset/resource',
                generator:{
                    filename:'img/[name][ext]',
                },
            },
            {
              test: /\.(woff|woff2|eot|ttf)$/,
              type:'asset/resource',
              generator:{
                  filename:'fonts/[name][ext]',
              },
            },
            {
                loader: 'image-webpack-loader',
                options: {
                  mozjpeg: {
                    progressive: true,
                    quality: 65,
                  },
                },
            },
        ],
    },
    plugins: [
        new MiniCssExtractPlugin({
          filename: './css/main.css',
        }),
        new CleanWebpackPlugin(),
    ],
};
