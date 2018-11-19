<script lang='coffee'>
module.exports =

	mounted: ->

	methods:

		smoothScroll: (hash) =>
			test = $(hash)
			$('html,body').animate({scrollTop: test.offset().top},1000)

</script>

<!-- ––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––– -->

<style lang='stylus'>

.home-hero
	height: 100vh
	width: 100%
	bottom: 0
	position: relative
	left: 0
	.wrapped
		height: 100%

	.text-container
		cursor: pointer
		text-align: center
		position: absolute
		right:12%
		width: auto
		left: 56%
		top 20%
		bottom: 0
		@media (max-width tablet)
			top 0
			right 0
			left 0
		@media (min-width 1400px)
			padding-bottom: 35%

		transition opacity 500ms ease-in-out
		&:not(.in-viewport)
			opacity 0
		p
			text-transform: uppercase
			margin: 0
			padding-top: rem(25px)
			padding-bottom: rem(10px)
			font(Fira, 14px, null, null, 7px, null)

			@media(max-width tablet-landscape)
				display none

				@media (max-width tablet-landscape)
					display block

		@keyframes mymove {
			0% {
				opacity 0
				transform translateY(20px)
			}
			20% {
				opacity .5
			}
			30% {
				opacity 1
				transform translateY(0)
			}
			70% {
				opacity 1
				transform translateY(0)
			}
			80% {
				opacity .5
			}
			100% {
				opacity 0
				transform translateY(-20px)
			}
		}

		.icon-up-arrow
			overflow hidden
			height 30px
			display block
			width 14px
			margin 0 auto
			&:after
				position absolute
				display block
				color black
				animation mymove 2850ms infinite ease-in-out

			@media (max-width tablet-landscape)
				display none

	.mobile.scroller
		display none
		max-width 20px
		@media (max-width tablet-landscape)
			display inline-block

	.headline
		padding-top rem(25px)
		h1
			font(Fira, 60px,, 300, 6px, 1.1)
			text-transform: uppercase
			max-width: 400px
			margin: 0 auto
			@media (max-width tablet)
				font(Fira, 50px,null,, 4.2px,)


.home-page-middle-content
.home-hero
.home-page-featured-boxes
	z-index: 4

.home-page-middle-content
	position: relative
	padding 10vh 0
	@media (max-width mobile)
			padding 5vh 0

</style>
