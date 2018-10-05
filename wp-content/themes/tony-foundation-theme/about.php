<?php
/**
 * Template Name: About
 * @package Tony_Foundation
 * Template Post Type: tfcustompage
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

				<div class="about-hero-wrapper">
					<img class="about-hero-sm" src="<?php echo site_url(); ?>/wp-content/themes/tony-foundation-theme/images/tony-colors-banner-sm.jpg">
					<img class="about-hero-lg" src="<?php echo site_url(); ?>/wp-content/themes/tony-foundation-theme/images/tony-colors-banner.jpg">
					<a href="<?php echo site_url(); ?>/cancer-colors" class="explore-colors">Explore more colors >></a>
				</div><!--hero-wrapper-->


			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content-about', 'page' );

			endwhile;
			?>

			<section id="leadership" class="about-section">

				<h2 class="leadership-section">Board of Directors</h2>

				<div class="profile-list-wrapper">

					<?php $board_query = new WP_Query( array(
						'post_type' => 'tfpeople',
						'posts_per_page' => -1,
						'meta_query'     => array(
							array(
								'key'       => 'person-is-on-board-of-directors',
								'value'     => '1',
								'compare'   => '='
							),
						'orderby'  => 'meta_value',
						'meta_key' => 'person-display-order',
						'order'    => 'ASC')
					)); ?>

					<?php while ( $board_query->have_posts() ) : $board_query->the_post(); ?>

						<a href="<?php the_permalink($post->ID) ?>" class="person-thumbnail-link">
							<div class="profile-wrapper">

								<?php the_post_thumbnail('tonyfoundation-person', array('class' => 'circle-image')); ?>
								<?php
									the_title( '<h2 class="person-name">', '</h2>');
									echo '<h3 class="person-title">';
									echo get_post_meta($post->ID, 'person-title', true);
									echo '</h3>';?>

							</div><!--profile-wrapper-->
						</a><!--person-thumbnail-link-->

					<?php endwhile;?>
				</div><!--profile-list-wrapper-->

			</section>


		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
