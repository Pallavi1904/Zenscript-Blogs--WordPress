<?php
/**
 * The template used to show pages with an error code of 404
 *
 * @package Flextra
 */

get_header();
?>	
	<div id="content" class="site-content">
		<div class="container">
			<section class="error-404 not-found">
				<div class="inner-content">
					<header class="page-header">
						<h1 class="title-404"><?php echo esc_html__( '404', 'flextra' ); ?></h1>
						<h2 class="page-title"><?php echo esc_html__( 'Oops! that page can&rsquo;t be found.', 'flextra' ); ?></h2>
						<p><?php echo esc_html__( 'It appears that nothing was discovered here. Could you try a search or one of the sites below?', 'flextra' ); ?></p>
					</header>
					<div class="error-404-form">
						<?php get_search_form(); ?>
					</div>
				</div>
			</section>
		</div>
	</div>
<?php
get_footer();