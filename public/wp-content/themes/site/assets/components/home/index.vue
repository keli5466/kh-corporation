<!--
The Home Page
-->

<script lang='coffee'>
parallax = require('scrollmonitor-parallax')
module.exports =
	components:

		'featured-boxes': require './featured-boxes'
		'home-hero': require './hero'
		'load-screen': require './load-screen'

	mounted: ->

		home = @$refs.homePge
		# Scroll to bottom of page, waiting a tick for CSS to render
		setTimeout ->
			window.scrollTo 0, home.offsetHeight - window.innerHeight
		, 3000

		# Register items to parallax
		@root = parallax.create(@$refs.homePge)
		@root.add(@$refs.topLeftCloud, -.3)
		@root.add(@$refs.topRightCloud, -.4)
		@root.add(@$refs.layer1Car,-.1)
		@root.add(@$refs.layer2Building, .1)
		@root.add(@$refs.layer3Sky, .2)

		# Loop through all the SpeedParallax instances and duck punch our inverted,
		# full page height handleScroll() method
		@root.items.forEach (item) -> item.handleScroll = (ratio, distance) ->
			# Determine how far down page we've scrolled
			scroll = window.pageYOffset
			height = home.offsetHeight - window.innerHeight
			perc = Math.min 1, scroll/height

			# Come up with an amount to translate based on the speed
			pixels = (1 - perc) * @speed * 1000
			@element.style.transform = "translate3d(0,#{pixels}px,0)"

	# Cleanup
	destroyed: ->
		@root.watcher.destroy()
		@root.items = []

	methods:

		smoothScroll: (hash) ->
			test = $(hash)
			$('html,body').animate({scrollTop: test.offset().top}, 1000)


</script>

<!-- ––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––– -->

<style lang='stylus'>


.layer1_car
.layer2_building
.layer3_sky
	position: absolute
	background-repeat: no-repeat
	background-size: contain
	background-position: bottom
	height: 100%
	width: 100%
	bottom: -132px
	left: 0
	backface-visibility hidden
	will-change transform
	// transform translateZ(0)
	@media (max-width mobile)
		width: 130%
		left -11%
		bottom: 0

	@media (min-width 1200px)
		background-size: cover
		padding-top: 30%


.layer1_car
	background-image: url(../../img/01_Foreground_optimized.png)
	z-index: -1

.layer2_building
	background-image: url(../../img/02_Middleground_optimized.png)
	z-index: -2

.layer3_sky
	background-image: url(../../img/03_Background_optimized.png)
	z-index: -3


.clouds_M
.clouds_TL
.clouds_TR
	position: absolute;
	background-size: contain
	background-repeat: no-repeat
	max-height: 450px
	height: 100%
	backface-visibility hidden
	will-change transform
	// transition-timing-function: transition ease;
	// transition: 0.1s
.clouds_TL
	background-image: url(../../img/cloud_top_left_optimized.png)
	width: 40%
	left: 0
	top: 28%
	z-index: -2

.clouds_M
	background-image: url(../../img/cloud_middle_optimized.png)
	width: 75%
	left: 25%
	top: 2%

.clouds_TR
	background-image: url(../../img/cloud_top_right_optimized.png)
	width: 40%
	top: 35%
	max-height: 441px
	max-width: 443px
	right: 0
</style>
