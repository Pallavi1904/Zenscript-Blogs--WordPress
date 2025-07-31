<?php
/**
 * The template that archives pages are shown in
 *
 * @package Flextra
 */

get_header();
?>
<div id="content" class="site-content">
	<div class="container">
		<section class="wrap-detail-page">
			<?php flextra_page_title_display(); ?>
			<div class="row">
				<div class="col-lg-8">
					<div id="primary" class="content-area">
						<?php
							if ( have_posts() ) :

								if ( is_home() && !is_front_page() ) :
									?>
									<header>
										<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
									</header>
									<?php
								endif;

								/* Start the Loop */
								while ( have_posts() ) :
									the_post();

									get_template_part( 'template-parts/content', get_post_type() );

								endwhile;

							elseif ( !is_sticky() && ! have_posts() ):
								get_template_part( 'template-parts/content', 'none' );
							endif;
						?>
						<?php
							the_posts_pagination( array(
								'next_text' => '<span>'.esc_html__( 'Next', 'flextra' ) .'</span><span class="screen-reader-text">' . esc_html__( 'Next page', 'flextra' ) . '</span>',
								'prev_text' => '<span>'.esc_html__( 'Prev', 'flextra' ) .'</span><span class="screen-reader-text">' . esc_html__( 'Previous page', 'flextra' ) . '</span>',
								'before_page_number' => '<span class="meta-nav screen-reader-text">' . esc_html__( 'Page', 'flextra' ) . ' </span>',
							));
						?>
					</div>
				</div>
				<div class="col-lg-4">
					<div id="secondary" class="sidebar left-sidebar">
						<?php dynamic_sidebar('right-sidebar'); ?>
					</div>
				</div>
			</div>
		</section>
	</div>
</div>
<?php
get_footer();