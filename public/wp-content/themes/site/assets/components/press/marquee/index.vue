<!--
The Press listing marquee
-->

<style lang='stylus' scoped>
blue= #2a7bc6
break = tablet

.press-marquee
	position relative
	z-index 2
	margin-bottom rem(115px)

	@media (min-width: break)
		margin-bottom 275px

	@media (min-width: break + 1)
		height 100vh
		margin-bottom 0

.image
	position relative
	margin-top rem(56px)
	margin-left auto
	margin-right auto

	@media (min-width: break + 1)
		margin-top 0

.tablet, .desktop
	display none

@media (min-width: mobile-landscape)
	.mobile
		display none

	.tablet
		display block

@media (min-width: break + 1)
	.tablet
		display none

	.desktop
		display block
		position absolute
		top 0
		right 0
		bottom 0
		left 0

.content
	position absolute
	left 0
	right 0
	top 57%
	z-index 1

.wrapper
	max-width 1000px + 32px * 2
	margin 0 auto
	transform translateY(100px)
	opacity 0
	transition transform slower-timing ease-out 200ms,
		opacity slower-timing ease-out 200ms

	&.in-viewport
		transform translateY(0)
		opacity 1

.content-header
	padding-bottom rem(14px)
	margin 0 0 rem(40px) rem(32px)
	position relative

	&::after
		content ''
		bottom 0
		left 0
		width 80px
		position absolute
		height 3px
		background blue

h1
	font-size rem(42px)
	font-family Fira
	line-height 1.26
	letter-spacing 2.4px
	margin 0
	color darkGrey
	font-weight 600

	@media (min-width: break)
		font-size rem(40px)

.box
	margin 0 0 0 rem(32px)
	font-size rem(24px)
	padding rem(25px) rem(70px)
	line-height 1.33
	list-style none
	display inline-block
	background rgba(255, 255, 255, 0.9)

	@media (max-width: mobile-landscape)
		background transparent
		padding rem(15px) rem(15px) rem(15px) rem(30px)
		font-size rem(18px)
		display block
		margin-right rem(32px)

	strong, p
		font-family Fira

	strong
		font-weight 600

	p
		font-weight 300

.item:first-of-type
	margin-bottom rem(30px)

</style>
