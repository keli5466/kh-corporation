<!--
The main app
-->

<script lang='coffee'>
module.exports =
	name: 'App'

	data: -> ready: false

	# Wait for HMR styles to be injected before rendering.  Fixes issue with
	# tables calculating their width
	mounted: ->
		setTimeout (=> @ready = true), 100
</script>

<!-- ––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––– -->

<style lang='stylus'>
.icon-kh-logo
	@media (max-width tablet)
		&:before{
			font-size: rem(14px)
		}

a
	color: darkGrey
	text-decoration: none
#main
	// max-width: max-w
	margin: 0 auto;
	z-index: 0
	position: relative;
	overflow: hidden;
	background-image: linear-gradient(to top, rgba(236, 231, 225, 0.0), #96b1d1 42%, #195195)
	@media (max-width tablet)
		  background-image: linear-gradient(to top, rgba(236, 231, 225, 0), #96b1d1 25%, #195195);
.text-container
	// width: 60%
	// vertical_fluid()
	// padding-left 50%
	@media (max-width tablet)
		width: auto
		padding: rem(100px) rem(0)
	p
		text-align: center
		// padding: rem(10px) 0

ul
	padding: 0
	-webkit-padding-start:0
body
img
	max-width: 100%
	max-height: 100%

.wrapped
	wrapped()

.home-page
	@media (max-width tablet)
		position: relative
// html
// 	font-size: body-font-size
// 	@media (max-width tablet)
// 		font-size 14px
// 	@media (max-width mobile)
// 		font-size 12px
body
h1
p
	font-family: 'Fira Sans', sans-serif
	font-weight: normal
	color: darkGrey
	margin: 0

</style>
