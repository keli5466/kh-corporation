<script lang='coffee'>
mounted: ->

</script>

<style lang="stylus">

.featured-box
	position: relative;
	&:after
	&:before
		position: absolute
		z-index: -1
		bottom: 15px;
		content: ''
		left: 10px;
		width: 50%;
		top: 30%
		max-width:300px;
		transform: rotate(3deg);
		box-shadow: 0 23px 100px rgba(0,0,0,0.4)


	&:after
		transform: rotate(-3deg)
		right: 10px
		left: auto


.featured-box
	background: white
	flex:1
	height: 50%
	width: 100%
	// max-width: rem(550px)
	min-width: rem(300px)
	margin: 5px 20px
	text-align: center

	// Safari 7 Workaround
	@media (max-width mobile-landscape)
		display inline-block
		width auto


	@media (min-width tablet)
		&:first-child
			margin-left: 0
		&:last-child
			margin-right: 0
	@media (max-width tablet)
		height: 100%
	@media (max-width mobile)
		margin: 20px 20px

	.featured-video
	.featured-logo
	.featured-btn
	p
		margin: 0 auto;

	.featured-video
			margin: 0
			padding: 0
			.vv-visual
				max-width: 100%

	.featured-logo
		max-width: 250px;
		line-height: 130px;
		display: flex;
		align-items: center;
		@media (max-width mobile)
			line-height: 8vh
		img
			vertical-align: middle;
			width: 80%
			@media (max-width mobile)
				width: 50%


	p.copy
		padding: 0 3vw 5%
		height: auto
		text-align: center;
		font(Fira, 23px, lightGrey,400,-0.3px,1.6)
		@media (max-width tablet)
			font(Fira, 18px, ,400,-0.3px,1.33)
			height: 10%

		@media (max-width mobile)
			height: 10%

	.featured-btn
		text-align: center
		margin: 0 auto 5%
		font(Fira, 15px, white, 300, 3px, 2.5)
		background-color: #2A7BC6
		padding: 0 rem(27px)
		text-transform: uppercase
		display: inline-block
		vertical-align: middle
		@media (max-width tablet)
			font(Fira, 12px,,, 3px, 3.3)
		.icon-plus
			line-height: 2.5
			&:before
				font-size rem(16px)
				margin-left rem(10px)
				line-height: 2.5
				vertical-align: middle
				@media (max-width tablet)
					font-size rem(10px)


</style>
