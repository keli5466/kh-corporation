<!--
The cookies popup
-->

<script lang='coffee'>

module.exports =

	data: ->
		visible: false
		nav: null
		moveDown: false

	mounted: ->
		cookieValue = document.cookie.replace(/(?:(?:^|.*;\s*)cookie-policy\s*\=\s*([^;]*).*$)|^.*$/, "$1")
		console.log cookieValue
		if cookieValue == '' then @visible = true

		window.addEventListener 'scroll', @handleScroll
		@nav = document.querySelector '.main-navigation'

	methods:
		handleScroll: ->
			if @nav.classList.contains 'visible' then @move()
			else @removeDown()

		removeDown: ->
			if @moveDown == true
				@moveDown = false

		move: ->
			if @moveDown == false
				@moveDown = true

		accept: ->
			document.cookie = 'cookie-policy=accepted'
			@visible = false

</script>

<!-- ––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––– -->

<style lang='stylus'>

.cookies-popup
	color white
	background rgba(black, 0.15)
	position fixed
	top 0
	left 0
	right 0
	z-index header-z - 1
	transition transform 1000ms ease-in-out

	&.moveDown
		transform translateY(74px)

		@media (max-width tablet)
			transform translateY(56px)

	.cookies-content
		position relative
		max-width 820px
		margin 0 auto
		padding 10px 40px

	p
		font-size 10px
		line-height 1.6
		color white
		letter-spacing 0.5px
		font-weight 200

	a
		text-decoration underline
		color white

	.icon-close
		position absolute
		right 20px
		top 50%
		transform translateY(-50%)
		cursor pointer

</style>
