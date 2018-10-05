<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Tony_Foundation
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class(array('post-thumbnail-wrapper')); ?>>
	<?php the_post_thumbnail('tonyfoundation-preview'); ?>
	<div class="thumbnail-text-wrapper">
		<div class="post-meta-wrapper">
			<?php
				the_title( '<a class="entry-title" href="' . esc_url( get_permalink() ) . '" rel="bookmark">' .'<h2>', '</h2></a>' );
				if ( 'post' === get_post_type() ) :
			?>

			<?php
				tonyfoundation_posted_on();
				// tonyfoundation_posted_by();
			?>

		</div><!-- .entry-meta -->
		<?php endif; ?>

	<div class="post-content-wrapper">
		<?php
			the_excerpt( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'tonyfoundation' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );

			// wp_link_pages( array(
			// 	'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'tonyfoundation' ),
			// 	'after'  => '</div>',
			// ) );
		echo '<a class="thumbnail-continue-reading" href="' . esc_url( get_permalink() ) . '">Continue reading...</a>'?>

	</div><!-- .entry-content -->

	</div><!--preview-text-wrapper-->

</div><!--post-thumbnail-wrapper-->
