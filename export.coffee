###
Export a zip of the package for handing off to AG
###

# Deps
os = require 'os'
child_process = require 'child_process'

# Setup the options
argv = require('yargs')
	.options
		start:
			describe: 'inclusive of starting git hash'
			type: 'string'
			demandOption: true
		end:
			describe: 'exlusive of ending git hash'
			type: 'string'
			default: 'HEAD'
	.argv

# Settings
tar = "#{os.homedir}/Desktop/kittyhawk.tar" # build directory
manifest = "./changedfiles.txt"

# Helper executing function
spawn = (cmd) ->
	console.info "⚡️ #{cmd}"
	new Promise (resolve, reject) ->

		# Split th command up into multiple parameters
		args = cmd.split ' '
		cmd = args.shift()

		# Run the command and pass through the output
		child = child_process.spawn cmd, args
		child.stdout.pipe process.stdout
		child.stderr.pipe process.stderr

		# Done!
		child.on 'close', resolve

# Helper for simpler exec-ing, which is needed for more complex commands
exec = (cmd) ->
	console.info "⚡️ #{cmd}"
	new Promise (resolve, reject) ->
		child_process.exec cmd, (error, stdout, stderr) ->
			console.error error if error
			console.log stdout if stdout
			console.log stderr if stderr
			resolve()

# Export the changed files
exec "git diff-tree -r --no-commit-id --name-only --diff-filter=ACMRT
	#{argv.start} #{argv.end} | xargs tar -rf #{tar}"

# Minify the assets
.then -> spawn 'yarn minify'

# Copy the minified assets in
.then -> spawn "tar rvf #{tar} public/wp-content/themes/site/dist"

# Write manifest file of all changed files
.then -> exec "tar --list --file #{tar}
	| awk '!/\\/$/ { print $NF }'
	> #{manifest}"

# Add the manifest to the tar
.then -> spawn "tar rvf #{tar} #{manifest}"

# Delete the manifest
.then -> spawn "rm #{manifest}"
