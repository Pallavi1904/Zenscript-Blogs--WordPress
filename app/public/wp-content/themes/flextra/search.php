<?php
/**
 * The layout of the search results page template
 *
 * @package Flextra
 */

get_header();
?>
<div id="content" class="site-content">
	<div class="container">
		<div class="wrap-detail-page">
			<?php
				flextra_page_title_display();
			?>
			<div class="search-post-wrap">
				<?php if ( have_posts() ) : ?>
				<div class="row masonry-wrapper">
					<?php
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();

						get_template_part( 'template-parts/content', 'search' );

					endwhile; ?>
					</div>
						<?php
							the_posts_pagination( array(
								'next_text' => '<span>'.esc_html__( 'Next', 'flextra' ) .'</span><span class="screen-reader-text">' . esc_html__( 'Next page', 'flextra' ) . '</span>',
								'prev_text' => '<span>'.esc_html__( 'Prev', 'flextra' ) .'</span><span class="screen-reader-text">' . esc_html__( 'Previous page', 'flextra' ) . '</span>',
								'before_page_number' => '<span class="meta-nav screen-reader-text">' . esc_html__( 'Page', 'flextra' ) . ' </span>',
							) );
						?>
					<?php
				else :

					get_template_part( 'template-parts/content', 'none' );

				endif;
				?>
			</div>
		</div>
	</div>
</div>
<?php
get_footer();
