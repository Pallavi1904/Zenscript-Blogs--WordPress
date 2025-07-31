<?php
/**
 * The format used to show the footer
 *
 * @package Flextra
 */

?>
	<footer id="colophon" class="site-footer">
		<div class="site-footer-inner">
			<?php if( flextra_is_active_footer_sidebar() ): ?>
				<div class="top-footer">
					<div class="wrap-footer-sidebar">
						<div class="container">
							<div class="footer-widget-wrap">
								<div class="row">
									<?php 
										get_template_part( 'template-parts/footer/footer-widget', 'one' );
									?>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php endif;
				get_template_part( 'template-parts/footer/footer', 'one' );
			?>
		</div>
	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>