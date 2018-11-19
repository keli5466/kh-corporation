<script lang='coffee'>
module.exports =

	components:
		box: require './box'

	mounted: ->

</script>

<style lang='stylus'>

.home-page-featured-boxes
	position: relative
	.featured_box_container
		display: flex
		padding: rem(100px) 0;
		flex-wrap: wrap
		justify-content: space-between
		@media (max-width tablet)
			padding: rem(gutter) 0
			flex-wrap: wrap-reverse;
			justify-content: center

		@media (max-width mobile)
			// Safari 7 updates
			display block

</style>
