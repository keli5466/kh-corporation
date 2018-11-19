<script lang='coffee'>
module.exports =

	data: ->
		test: true

	mounted: ->
		setTimeout (=> @test = false), 3500

</script>

<style lang='stylus'>

.preloadScreen

	.load-screen
		background-color: white

		position: fixed;
		left: 0
		right 0
		top: 0
		z-index: 1000
		height: 100%
		visibility: visible
		&:before
			position: fixed
			left: 0
			right: 0

		&.active {
			visibility: hidden
		}

	svg
		position: relative;
		overflow: visible;
		position: absolute;

		animation getOut 1s forwards
		top: 50%
		left: 50%
		height: 100px
		transform: translate(-50%,-50%)
		width: 100%
		max-width: 300px
		margin: 0 auto

		.cls-2

			#Fill-1-2
				fill white
				animation moveUp 1s forwards

	@keyframes moveUp
		0%
			opacity: 0
			height: 0
			transform translateY(100%)
		60%
			opacity: 0
			height: 10px
			stroke-dashoffset: 1000;
			transform translateY(100%)
		100%
			opacity: 1
			height: 0
			stroke-dashoffset: 10;
			transform translateY(0%)


	@keyframes getOut
			0%
				max-width: 400px

			100%
				max-width: 300px

</style>
