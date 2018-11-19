<!--
The global navigation
-->

<script lang='coffee'>
module.exports =

	data: ->
		menuVisible: false
		menuActive: false
		pageHeight: null
		windowWidth: null
		links: null

	mounted: ->
		@windowWidth = window.outerWidth
		if window.location.pathname == '/'
			window.addEventListener('scroll', @handleScroll)
			setTimeout =>
				d = document.getElementById('home')
				@pageHeight = d.offsetHeight
			, 3000
		else
			@menuVisible = true

		# adding events to anchors in submenu
		# add conditional to fix for IE
		if window.location.pathname == '/press/'
			@links = @$el.querySelectorAll('.menu-item-has-children .sub-menu a')
			link.addEventListener('click', @scrollToTarget) for link in @links
		else
			return

	destroyed: ->	window.removeEventListener('scroll', @handleScroll)

	methods:

		# scroll method from submenu to anchor'd parts on press page
		scrollToTarget: (e) ->
			target = e.currentTarget.hash
			loc = window.location
			loc.href = loc.href.replace(loc.hash, target)
			window.location.reload()

		menuToggle: ->
			@menuActive = !@menuActive


		handleScroll: ->
			# Get the current offset of the window
			currentWinOffset = window.scrollY
			# console.log(currentWinOffset)

			if @windowWidth > 750
				if currentWinOffset >= (@pageHeight - window.outerHeight)
					@menuVisible = false

				else
					@menuVisible = true
			else
				if currentWinOffset >= (@pageHeight - window.innerHeight)
					@menuVisible = false

				else
					@menuVisible = true


</script>

<!-- ––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––– -->

<style lang='stylus'>
	.main-navigation
		position: fixed
		top: 0
		left: 0
		right: 0
		z-index: header-z
		background-color rgba(255, 255, 255, 0.9)
		margin: 0 auto

	.main-navigation
		transition opacity 1000ms ease-in-out

		&:not(.visible)
			opacity 0
			pointer-events none

		@media (max-width mobile)
			.logo.icon-kh-logo
				&:before
					font-size: rem(10px)


	.main-navigation
	.footer-nav
		display: flex
		flex-direction: row
		align-items: center
		padding: rem(28px) rem(gutter)
		margin: 0 auto

		@media (max-width tablet)
			padding: rem(mobileGutter)

		.mobile-links
			display: none
			@media(max-width tablet)
				display: block
				padding: rem(20px)
				position fixed
				top 0
				bottom 0
				left 0
				right 0
				background: url(../../img/NavBG_optimized.png) no-repeat bottom center / cover
			.mobile-wrapper
				padding: 5vh rem(0px)
				.mobile_logo
					margin: 0 auto
					display: block
					margin-bottom: 5vh
					text-align: center


				li
					list-style: none
					display: block
					padding 5vh 0
					text-align center

					a
						text-transform: uppercase
						font(Fira,24px,white,200,6px,)
						margin: 0


		.logo
			text-align: left
			width: 35%
			@media (max-width tablet)
				width: 50%

		.menu-toggle
			display: none
			&.active
				width 100%
			@media(max-width tablet)
				display: block
				width 50%
				.bars
					float right

		.links
			width: 100%
			text-align: right
			vertical-align: middle
			@media(max-width tablet)
				display: none

		ul
			margin: 0
			padding: 0
			text-align: right
			@media (max-width tablet)
				text-align: center

			li
				list-style: none
				line-height: 1rem
				display: inline-block
				text-align center
				position relative
				margin-left 25px

				a
					text-decoration: none
					text-transform: uppercase
					font(Fira,16px,,300,4px,)
					position relative
					z-index 1

		// dropdown menu
		.sub-menu
			left 50%
			min-width rem(130px)
			opacity 0
			pointer-events none
			position absolute
			text-align center
			top calc(100% + 40px)
			transform translate(-50%, -10px)
			box-shadow 0 4px 20px 6px rgba(128, 128, 128,.1)
			transition opacity 0.3s ease, transform 0.3s ease

			// white arrow above
			chip = 8px

			&:before
				border-bottom chip solid transparent
				border-bottom-color white
				border-left chip solid transparent
				border-right chip solid transparent
				border-top chip solid transparent
				content ' '
				left calc(50% - 6px)
				position absolute
				top (chip * -2px) + 1px

			// styling submenu
			li
				background white
				display block
				font-weight normal
				margin -1px 0 !important
				min-width rem(160px)
				padding rem(10px) rem(28px)

				a
					font-weight 400
					transition color 0.35s ease

					&:hover
						color darkGrey

				&:first-of-type
					padding-top rem(20px)

				&:last-of-type
					padding-bottom rem(20px)


				&:after
					content none

				a
					color #999

			&:after
				content ' '
				fill(transparent)
				display block
				height auto
				top rem(-70px)
				z-index -1

		.menu-item-has-children
			&:hover, &.open
				.sub-menu
					opacity 1
					pointer-events all
					transform translate(-50%, 0)

</style>
