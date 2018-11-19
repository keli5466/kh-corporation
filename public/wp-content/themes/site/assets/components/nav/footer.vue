<style lang="stylus">

.footer
	// position: relative
	z-index 5
	color: white
	position: absolute
	bottom: 0
	width: 100%
	@media (max-width tablet)
		position: relative;


	//mobile
	@media (max-width tablet)
		background black
		ul
			padding: rem(15px) 0
			margin: 0 auto

	.footer-nav
		background: transparent
		padding: rem(15px) rem(120px)
		@media (max-width tablet)
			padding: rem(20px)
			flex-direction: column;
			text-align: center
		a
			font(Fira, 14px, white, 200, 1.8px, null)
			@media (max-width tablet)
				font(Fira,,,200,2.3px,)

		.icon-kh-logo
			@media (max-width tablet)
				padding: rem(20px) 0


		.links
			@media (max-width tablet)
				display: block!important
				text-align: center

			.menu-footer-container
			.menu
			.socials
				display: inline-block
				vertical-align: middle
				@media (max-width tablet)
					display: block

			.menu-footer-container
			.menu
				a
					font(Fira, 14px, white, 200, 1.8px, null)
					@media (max-width tablet)
						font(Fira,,,200,2.3px,)

			.socials
				margin-left: 2vw
				@media (max-width tablet)
					margin-left: 0
					padding: rem(15px) 0;
				a
					padding: 0 rem(5px)
					&:before
						font(icon,25px, white ,null,null,null)
						@media (max-width tablet)
							font-size: rem(40px)




	.bottomFooter
		padding: rem(10px) rem(120px)
		text-transform: uppercase;
		position: relative
		text-align: right
		margin: 0

		@media (max-width tablet)
			padding: 0 rem(20px) rem(20px)
			text-align: center
			&:before
				visibility: hidden

		&:before
			content ""
			border-top: rem(1px) solid white
			position: absolute
			top: 0
			left: 0
			right: 0

		li
			padding: 0 rem(14px)
			font(Fira,10px, white,200, 1px, null)
			display: inline-block
			border-left 2px solid white
			a
				color: white
			// font-weight: 300
			// font-size: rem(10px)
			// letter-spacing: rem(1px)
			&:first-child
				padding-left: 0
				border: 0





</style>
