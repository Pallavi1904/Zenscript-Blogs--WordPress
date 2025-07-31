<?php
/**
 * Section of the template used to display results on search pages
 * 
 * @package Flextra
 */

?>
<div class="col-md-6 col-lg-4 grid-post">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php if ( has_post_thumbnail() ) : ?>
	        <figure class="featured-image">
	            <a href="<?php the_permalink(); ?>">
	                <?php flextra_image_size( 'flextra-420-300' ) ?>
	            </a>
	        </figure>
	    <?php endif; ?>
	    <div class="entry-content">
	    	<header class="entry-header">
	    		<?php
	    		flextra_entry_header();
	    		the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); 
	    		?>
	    	</header>
	    	<?php if ( 'post' === get_post_type() ) : ?>
	    		<div class="entry-meta">
	    			<?php flextra_entry_footer(); ?>
	    		</div>
	    	<?php endif; ?>

			<div class="entry-summary">
				<?php flextra_excerpt( 15, true ); ?>
			</div>
		</div>
	</article>
</div>