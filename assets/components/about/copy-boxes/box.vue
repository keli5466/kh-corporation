<script lang=>
</script>
<script lang='coffee'>
module.exports =

	props: ['index']

	created: -> window.addEventListener('scroll', @handleScroll)
	destroyed: -> window.removeEventListener('scroll', @handleScroll)
	mounted: ->
		setTimeout (=>
			@handleScroll()
			$("[index=0]").addClass('visible')
		), 1

	methods:
		handleScroll: ->
			topOffset = @$el.offsetTop
			bottomOffset = topOffset + @$el.offsetHeight
			windowHalf = window.pageYOffset + (window.innerHeight / 2)

			if window.pageYOffset <= 100
				@$parent.$data.current = 0
			else if bottomOffset >= windowHalf and topOffset <= windowHalf
				@$parent.$data.current = parseInt @$el.getAttribute 'index'

</script>

<style lang="stylus">

.copy-box
	transition opacity 500ms ease-in-out

	@media (max-width mobile)
		opacity 1 !important

	&:not(.visible)
		opacity: .1

	@media (max-width tablet)
		margin: 0 auto
		padding: 5%
		width: 75%
	@media (max-width mobile)
		width: 90%
		padding: 15% 0

	@media (min-width desktop)
		width: 40%
		&:nth-child(even)
			align-self: flex-end

		&:nth-child(odd)
			align-self: flex-start

		&:nth-child(2)
			padding-left: 101px
			margin-top: -10%
		&:nth-child(3)
			padding-left: 101px
	h1
		text-align: left
		max-width: 330px
		text-transform: uppercase
		font(Fira, 42px, white, 500, 0.5, 1.19)
		margin-bottom: 5%
	p
		text-align: left
		padding-left: 20%
		font(Fira, 16px, white, 300, 0.3px, 2)

.left_line
	position: relative;
	&:before
		content ''
		position absolute
		left 0
		top 10px
		height 3px
		width 15%
		background white

	.arrow
		overflow hidden
		display block
		position absolute
		top 20%
		left 0
		height 20px
		width 11px
		&:after
			content "\e905"
			color white
			position absolute
			font(icon,20px,,,,,)
			animation aboutArrows 2850ms infinite ease-in-out

	@keyframes aboutArrows {
		0% {
			opacity 0
			transform translateY(-20px) rotate(180deg)
		}
		20% {
			opacity .5
		}
		30% {
			opacity 1
			transform translateY(0) rotate(180deg)
		}
		70% {
			opacity 1
			transform translateY(0) rotate(180deg)
		}
		80% {
			opacity .5
		}
		100% {
			opacity 0
			transform translateY(20px) rotate(180deg)
		}
	}

</style>
