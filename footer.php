
		<site-footer ref="footer" inline-template>
			<div class="footer" id="footer">

				<div class="footer-nav">
					<a class="icon-kh-logo white" href="<?php echo esc_url(home_url()); ?>">
						</a>
					<div class="links">
					<?php echo wp_nav_menu(array('menu' => 'footer')); ?>
					<div class="socials">
						<a	href="https://www.facebook.com/kittyhawkaero"
							target="_blank"
							class="icon-facebook"></a>
						<a	href="https://www.youtube.com/channel/UC8b-KER9YNFLJXGWPWykFAQ"
							target="_blank"
							class="icon-youtube"></a>
						<a	href="https://twitter.com/kittyhawkcorp"
							target="_blank"
							class="icon-twitter"></a>
					</div>
							</div>
				</div>
								<ul class="bottomFooter">
									<li class="copyright">Copyright Kitty Hawk  <?php echo date('Y'); ?></li>
									<li class="terms"> <a href="/terms-of-use"> terms </a></li>
									<li class="privacy"> <a href="/privacy"> Privacy</a></li>
								</ul>

			</div>
		</site-footer>
		</template>
	</div>
	<?php wp_footer(); ?>
	</body>
</html>
