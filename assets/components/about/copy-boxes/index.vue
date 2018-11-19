<script lang='coffee'>
module.exports =
	components:
		box: require './box'

	data: -> current: 0

	watch:
		current: ->
			$('.copy-box').removeClass('visible')
			$("[index="+@current+"]").addClass('visible')

</script>

<style lang="stylus">

.copy-boxes
	padding: 20% 0 0
	@media (max-width mobile)
		padding: 40% 0
	display: flex
	flex-wrap: wrap;
	flex-direction: column
</style>
