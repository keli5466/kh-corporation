###
Settings
###

# App level config
config =
	appName:      'kittyhawk'
	slackChannel: '#kitty-hawk-internal'

# Staging config
config.staging =
	servers:  'av04473@162.247.141.174'
	deployTo: "/storage/av04473/#{config.appName}/staging" # Must be absolute
	url:      "http://#{config.appName}.stage.bukwild.com"
	keepReleases: 2

	# Production config
config.production =
	servers:  'xxxx@xxxxxxxx'
	deployTo: "/path/to/#{config.appName}/production" # Must be absolute
	url:      'http://www.xxxxxxxx.com'

###
Execute
###

deploy = require 'benchpress/tools/shipit'
request = require 'request-promise'
module.exports = (shipit) ->

	# # On published hooks
	shipit.on 'published', -> shipit.start [ 'opcache:reset' ]

	# # Clear opcache after symlink chnanged
	shipit.blTask 'opcache:reset', ->
		request
			uri: shipit.config.url + '/wp-content/themes/site/utils/opcache.php'
			auth:
				user: 'utils'
				pass: 'please, be my guest friend'
		.then (body) -> shipit.log body
		.catch (err) -> shipit.log err

	# Finish config
	deploy.init(shipit, config)
