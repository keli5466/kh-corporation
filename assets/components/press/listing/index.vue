<style lang="stylus" scoped>
grey = #727272
blue = #2a7bc6
break = tablet

animationStart()
	transform translateY(100px)
	opacity 0
	transition transform slower-timing ease-out,
		opacity slower-timing ease-out

	.name, .job-title, .description
		opacity 0
		transform translateX(-30px)
		transition transform slower-timing ease-out,
			opacity slower-timing ease-out

	.header:after
		width 0
		transition width slower-timing ease-out 200ms

	.name
		transition-delay 100ms

	.job-title, .description
		transition-delay 200ms

animationEnd()
	transform translateY(0)
	opacity 1

	.name, .job-title, .description
		opacity 1
		transform translateX(0)

	.header:after
		width 80px

.press-listing
	@media (min-width: break)
		margin-top -175px

	@media (min-width: break + 1)
		margin-top 0

.bios
	max-width 1000px + 32px * 2
	padding-top rem(70px)
	padding-bottom rem(75px)
	margin 0 auto

	@media (max-width: break)
		max-width 80%
		padding-top 0

.block-header
	padding-bottom rem(18px)
	margin-left rem(32px)
	position relative
	margin-bottom rem(50px)

	@media (max-width: break)
		margin-left 0

	&::after
		content ''
		bottom 0
		left 0
		width 0
		position absolute
		height 3px
		background blue
		transition width slower-timing ease-out

	&.in-viewport::after
		width 80px

h2
	font-size rem(42px)
	font-family Fira
	line-height 1.26
	letter-spacing 1.2px
	margin 0
	color darkGrey
	font-weight 600
	transform translateX(-50px)
	opacity 0
	transition transform slower-timing ease-out,
		opacity slower-timing ease-out

	.in-viewport &
		opacity 1
		transform translateX(0)

	@media (max-width: break)
		font-size rem(40px)

.group
	list-style none
	margin 0

.bio
	display flex
	padding 0 rem(32px)
	animationStart()

	&:not(:last-child)
		margin-bottom rem(75px)

	@media (max-width: break)
		flex-wrap wrap
		padding 0

.image
	aspect-ratio(1)
	flex 0 1 percentage(387/1000)
	position relative

	@media (max-width: break)
		flex 0 1 100%
		margin-bottom rem(30px)

.inner-image
	position absolute
	top 0
	right 0
	bottom 0
	left 0

.content
	flex 0 1 percentage(613/1000)
	padding-left percentage(41/1000)

	@media (max-width: break)
		flex 0 1 100%
		padding-left 0

.header
	position relative
	padding-bottom rem(18px)
	margin-bottom rem(30px)

	&::after
		content ''
		position absolute
		left 0
		bottom 0
		height 3px
		background rgba(144, 144, 144, 0.5)

.name, .job-title
	font-size rem(32px)
	font-family Fira
	letter-spacing 1px
	margin 0
	line-height 1.5625
	font-weight 600

	@media (max-width: break)
		font-size rem(30px)

.job-title
	font-weight 300

.description
	font-size rem(16px)
	letter-spacing 0.5px
	line-height 1.625

	> p
		color grey

// Transitions
.in-viewport
	&.bio
		animationEnd()
</style>
