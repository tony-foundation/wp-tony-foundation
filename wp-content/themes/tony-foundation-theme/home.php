<?php
/**
 *
 * The template for displaying the main blog post index
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Tony_Foundation
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main blog-index">

		<?php
		if ( have_posts() ) : ?>

			<header class="page-header blog-index-title">
				<h1>News and Posts</h1>
			</header><!-- .page-header -->

			<section class="post-loop-wrapper">

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content-thumbnail', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content-thumbnail', 'none' );

		endif; ?>

		</section><!--post-loop-wrapper-->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
