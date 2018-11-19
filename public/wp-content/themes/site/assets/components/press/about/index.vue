


<style lang="stylus" scoped>
break = tablet
grey = #727272
blue = #2a7bc6

animationStart()
	.block-header:after
		width 0
		transition width slower-timing ease-out 200ms

	h2
		opacity 0
		transform translateX(-50px)
		transition transform slower-timing ease-out,
			opacity slower-timing ease-out

	.header:after
		width 0
		transition width slower-timing ease-out

	.copy
		opacity 0
		transform translateX(-50px)
		transition transform slower-timing ease-out,
			opacity slower-timing ease-out

	.about-box
		transform translateY(100px)
		opacity 0
		transition transform slower-timing ease-out,
			opacity slower-timing ease-out

		delay = 100
		for i in (1..3)
			&:nth-of-type({i}n)
				transition-delay (delay * i)ms

				stagger = 200
				.header:after
					transition-delay ((stagger + 50) * i)ms

				.copy
					transition-delay ((stagger + 50) * i)ms

animationEnd()
	.block-header:after
		width 80px

	h2
		opacity 1
		transform translateX(0)

	.about-box
		transform translateY(0)
		opacity 1

	.header:after
		width 76px

	.copy
		opacity 1
		transform translateX(0)

.about
	max-width 1000px + 32px * 2
	margin 0 auto
	padding-bottom rem(310px)
	animationStart()

	&.in-viewport
		animationEnd()

	@media (max-width: break)
		max-width 80%

	@media (max-width: tablet-landscape)
		padding-bottom 250px

.block-header
	padding-bottom rem(14px)
	margin-left rem(32px)
	position relative

	@media (max-width: break)
		margin-left 0

	&::after
		content ''
		bottom 0
		left 0
		position absolute
		height 3px
		background blue

h2
	font-size rem(42px)
	font-family Fira
	line-height 1.26
	letter-spacing 1.2px
	margin 0
	color darkGrey
	font-weight 600

.group
	list-style none
	display flex

	@media (max-width: break)
		flex-wrap wrap

.about-box
	flex 0 1 percentage(1/3)
	padding 0 rem(32px)

	@media (max-width: break)
		flex 0 1 100%
		padding 0

.header
	position relative
	padding-bottom rem(33px)
	// Force line break
	padding-right 15px

	&::after
		content ''
		left 0
		width rem(76px)
		height 3px
		position absolute
		background rgba(114, 114, 114, 0.5)

.title
	font-size rem(32px)
	line-height 1.25
	letter-spacing 1px
	font-family Fira
	color dark-grey
	font-weight 600

.copy
	> p
		color grey
		letter-spacing 0.5px
		line-height 1.63
</style>
