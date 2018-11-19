<!--
The Press listing page
-->

<script lang='coffee'>
Velocity = require 'velocity-animate'
module.exports =
	components:
		'press-marquee': require './marquee'
		'press-listing': require './listing'
		'press-about': require './about'


	mounted: ->
		if window.location.hash then @scrollToHash(window.location.hash)

	methods:
		scrollToHash: (hash) ->
			target = document.querySelector hash
			if hash == '#leadership' then hashDuration = 200 else hashDuration = 1000
			setTimeout (->
				Velocity document.documentElement, 'scroll', {
					offset: target.offsetTop - 98
				}, {
					duration: hashDuration
				}
			), 400


</script>

<!-- ––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––– -->

<style lang='stylus'>

.press-page
	background white
	position relative

.bkgd
	position absolute
	left 0
	right 0
	bottom 0
	height 20vh

	&::after
		content ''
		position absolute
		left 0
		right 0
		top -1px
		height 10vh
		background linear-gradient(to bottom, #fff, rgba(#fff, 0))
</style>
