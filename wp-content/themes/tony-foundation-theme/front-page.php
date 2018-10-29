<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Tony_Foundation
 */

get_header(); ?>

	<div id="primary" class="content-area front-page">
		<main id="main" class="front-page-main">
			<div class="hero-wrapper">
					<p class="mission-banner">The Tony Foundation meets immediate needs for families whose sole income earner is impacted by cancer.</p>
			</div><!--hero-wrapper-->

			<div class="site-features-wrapper">
				<a class="site-feature-wrapper-with-link" href="<?php echo site_url(); ?>/about#tonys-story">
					<div class="site-feature">
						<img id="icon-family" class="site-feature-icon" src="<?php echo site_url(); ?>/wp-content/themes/tony-foundation-theme/images/icon-family.png"/>
						<h2 class="site-feature-label">Tony's Story</h2>
					</div><!--site-feature-->
				</a>
				<a class="site-feature-wrapper-with-link" href="<?php echo site_url(); ?>#">
					<div class="site-feature coming-soon">
						<img id="icon-apply" class="site-feature-icon" src="<?php echo site_url(); ?>/wp-content/themes/tony-foundation-theme/images/icon-apply.png"/>
						<h2 class="site-feature-label">Apply for Assistance</h2>
					</div><!--site-feature-->
			</a><!--site-feature-wrapper-with-link-->
			<a class="site-feature-wrapper-with-link" href="<?php echo site_url(); ?>/get-involved/">
				<div class="site-feature">
					<img id="icon-get-involved" class="site-feature-icon" src="<?php echo site_url(); ?>/wp-content/themes/tony-foundation-theme/images/icon-get-involved.png"/>
					<h2 class="site-feature-label">Get Involved</h2>
				</div><!--site-feature-->
			</a><!--site-feature-wrapper-with-link-->
			</div><!--site-features-wrapper-->

			<section class="sticky-section-wrapper">

				<?php $sticky_posts = get_option( 'sticky_posts' );
					$args = array(
						'posts_per_page' => 4,
						'post__in'  => $sticky_posts,
						'ignore_sticky_posts' => 1
					);
					$sticky_query = new WP_Query( $args );
				?>

				<?php while ( $sticky_query->have_posts() ) : $sticky_query->the_post(); ?>

					<a href="<?php the_permalink($post->ID) ?>" class="sticky-thumbnail-link">
						<div <?php post_class(array('sticky-thumbnail-wrapper')); ?> >
							<?php the_post_thumbnail('tonyfoundation-sticky'); ?>
							<div class="sticky-title-wrapper"><!--wrapper helps override anchor styles-->
								<?php the_title( '<h2 class="sticky-title"></h2>' ); ?>
							</div><!--sticky-title-wrapper-->
							<div class="sticky-excerpt-wrapper"><!--wrapper helps override anchor styles-->
									<?php the_excerpt(); ?><span class="sticky-continue-reading">...continue reading</span>
							</div><!--sticky-excerpt-wrapper-->
						</div><!--all-the-post-classes+sticky-thumbnail-wrapper-->
					</a><!--sticky-thumbnail-link-->
					<?php wp_reset_postdata(); ?>
				<?php } ?>

			</section><!--sticky-posts-wrapper-->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
