<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Tony_Foundation
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(array('people-post-wrapper')); ?>>

	<header class="entry-header">
		<?php the_post_thumbnail('tonyfoundation-person', array('class' => 'circle-image')); ?>
		<div class="entry-meta">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="person-name">', '</h1>' );
		else :
			the_title( '<h2 class="person-name"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		// get_post_custom_values('title');
		$key="person-title";

		if ( is_singular() ) :
			echo '<h2 class="person-title">';
			echo get_post_meta($post->ID, $key, true);
			echo '</h2>';
		else :
			echo '<h3 class="person-title">';
			echo get_post_meta($post->ID, $key, true);
			echo '</h3>';
		endif;

		if ( 'post' === get_post_type() ) : ?>

		</div><!-- .entry-meta -->
		<?php
		endif; ?>
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

</article><!-- #post-<?php the_ID(); ?> -->
