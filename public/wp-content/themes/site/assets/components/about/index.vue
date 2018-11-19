<!--
The About Page
-->

<script lang='coffee'>
parallax = require('scrollmonitor-parallax')
module.exports =
	components:
		'copy-boxes': require './copy-boxes'

</script>


<style lang="stylus">
.about-page
	position: relative
	.content
		background-image: linear-gradient(to top, #baceee, #195195);
		height: 100%
	.bg
		.image
			display: block;
			@media (max-width tablet)
				display: none
		.mobile
			display: none
			@media (max-width tablet)
				display: block
		.vv-visual
			z-index: -2
			margin-top: -1%
		img
			width: 100%
			
</style>
