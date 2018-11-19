# Configure the webpack config and export it
config = require 'benchpress/tools/webpack'
module.exports = config()
path = require 'path'

# Load mp4s using file-loader
module.exports.module.rules.push
	test: /\.(mp4)$/
	use: [
		loader: 'file-loader'
		options: name: 'video/[hash:8].[ext]'
	]

# Use the full build for inline templates
module.exports.resolve.alias.vue$ = 'vue/dist/vue.common.js'

# Expose Sentry DSN
Dotenv = require 'dotenv-webpack'
module.exports.plugins.push new Dotenv()
