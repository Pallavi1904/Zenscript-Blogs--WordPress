<header id="masthead" class="site-header header-one">
	<div class="bottom-header header-image-wrap fixed-header">
		<?php if( flextra_has_header_media() ){ flextra_header_media(); } ?>
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-3">
					<?php get_template_part( 'template-parts/site', 'branding' ); ?>
				</div>
				<div class="col-lg-7">
					<div class="toggle-menu menu text-center text-md-left">
						<button onclick="flextra_mobile_menu_open()" class="toggle p-2"><i class="fa-solid fa-bars"></i></button>
					</div>
					<div id="responsive" class="nav side_nav">
						<nav id="top_menu" class="nav_menu" role="navigation" aria-label="<?php esc_attr_e( 'Menu', 'flextra' ); ?>">
							<?php 
							    wp_nav_menu( array( 
									'theme_location' => 'menu-1',
									'container_class' => 'navigation clearfix' ,
									'menu_class' => 'clearfix',
									'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav m-0 px-0">%3$s</ul>',
									'fallback_cb' => 'wp_page_menu',
							    ) ); 
							?>
							<a href="javascript:void(0)" class="closebtn menu" onclick="flextra_mobile_menu_close()"><i class="fa-solid fa-xmark"></i></a>
						</nav>
					</div>
				</div>
					<div class="col-lg-2 phone_box text-center text-md-right my-4">
						<?php
							$flextra_button_url = get_theme_mod( 'flextra_button_url', '' );
							$flextra_button_txt = get_theme_mod( 'flextra_button_txt', '' );
							if ( ! empty( $flextra_button_url ) && ! empty( $flextra_button_txt ) ) { ?>
								<a href="<?php echo esc_url( $flextra_button_url ); ?>">
									<i class="fas fa-phone"></i> <?php echo esc_html( $flextra_button_txt ); ?>
								</a>
						<?php } ?>
					</div>

			</div>
		</div>
	</div>
</header>