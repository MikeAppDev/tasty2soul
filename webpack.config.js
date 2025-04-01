/* eslint-disable */
const path = require('path');
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const CopyWebpackPlugin = require('copy-webpack-plugin');

let config = {
	entry: './resources/index.js',
	output: {
		path: path.resolve(__dirname, 'html/dist'),
		filename:  './assets/js/bundle.js',
	},
	watch: false,
	module: {
		rules: [
			{
				test: /\.s?css$/,
				use: [
					MiniCssExtractPlugin.loader,
					"css-loader",
					"postcss-loader",
					"sass-loader"
				]
			},
			{
				type: 'javascript/auto',
				test: /\.json$/,
				loader: 'file-loader',
				options: {
					name: '[name].[ext]'
				}
			},
			{
				test: /\.m?js$/,
				exclude: /(node_modules)/,
				use: {
					loader: 'babel-loader',
					options: {
						presets: ['@babel/preset-env']
					}
				}
			}
		]
    },
	plugins: [
		new CopyWebpackPlugin({
			patterns: [
				{ from: "./resources/img", to: "./assets/img" },
			  	{ from: "./resources/fonts", to: "./assets/fonts" },
			],
		}),
		new MiniCssExtractPlugin({
			filename: "assets/styles/[name].css",
			chunkFilename: "[id].css"
		})
	],
	
};

module.exports = config;