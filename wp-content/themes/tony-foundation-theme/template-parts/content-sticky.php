<?php
/**
 * Template part for displaying excerpts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Tony_Foundation
 */

?>

<!-- wordpress will add the class 'sticky' to article element when user sets post visibility to sticky -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php tonyfoundation_post_thumbnail('tonyfoundation-sticky'); ?>
	<header class="entry-header">
		<div class="entry-meta">
		<?php
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );

		if ( 'post' === get_post_type() ) : ?>

		</div><!-- .entry-meta -->
		<?php
		endif; ?>
		<?php
			tonyfoundation_posted_on();
			// tonyfoundation_posted_by();
		?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_content( sprintf(
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

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'tonyfoundation' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<div class="continue-reading">
		<?php
		$read_more_link = sprintf(
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
		);
		?>
		<a href="<?php esc_url( get_permalink() ) ?> rel='bookmark'"><?php echo $read_more_link; ?></a>
	</div><!-- .continue-reading -->

</article><!-- #post-<?php the_ID(); ?> -->
