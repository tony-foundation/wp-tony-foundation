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
					<p class="mission-banner">The Tony Foundation meets immediate needs for families affected by cancer.</p>
			</div><!--hero-wrapper-->

			<section id="about" class="about-text">
				<p>We are a non-profit corporation based in Austin, Texas. Our goal is to focus on the immediate, existing needs families face when a parent has with cancer and becomes unable to continue employment.</p>

				<p>To learn more about our strategy for supporting local families affected by cancer, read <a href="#">Our Journey Begins</a>.</p>
			</section><!--about-->


			<section class="sticky-section-wrapper">

				<?php
					global $post;
					$args = array(
						'posts_per_page' => 3,
					);
					$latests_posts = get_posts( $args );
				?>

				<?php
					foreach ( $latests_posts as $post ) {
						setup_postdata( $post );
				?>
						<a href="<?php the_permalink(); ?>" class="sticky-thumbnail-link">
							<div <?php post_class( array( 'sticky-thumbnail-wrapper' ) ); ?> >
								<?php the_post_thumbnail( 'tonyfoundation-sticky' ); ?>
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
								echo '</h3>';
							?>
						</div><!--profile-wrapper-->
					</a><!--person-thumbnail-link-->

					<?php wp_reset_postdata(); ?>
					<?php endwhile;?>
					</div><!--profile-list-wrapper-->

				</section><!--leadership-->


				<section id="volunteers" class="about-section">

					<!-- <h2 class="leadership-section">Volunteers</h2> -->

					<div class="profile-list-wrapper">

						<?php $volunteer_query = new WP_Query( array(
							'post_type' => 'tfpeople',
							'posts_per_page' => -1,
							'meta_query'     => array(
								array(
									'key'       => 'person-is-volunteer',
									'value'     => '1',
									'compare'   => '='
								),
							'orderby'  => 'meta_value',
							'meta_key' => 'person-display-order',
							'order'    => 'ASC')
						)); ?>

						<?php while ( $volunteer_query->have_posts() ) : $volunteer_query->the_post(); ?>

						<a href="<?php the_permalink($post->ID) ?>" class="person-thumbnail-link">
							<div class="profile-wrapper">
								<?php the_post_thumbnail('tonyfoundation-person', array('class' => 'circle-image')); ?>
								<?php
									the_title( '<h2 class="person-name">', '</h2>');
								?>
							</div><!--profile-wrapper-->
						</a><!--person-thumbnail-link-->

						<?php wp_reset_postdata(); ?>
						<?php endwhile;?>
						</div><!--profile-list-wrapper-->

					</section><!--volunteers-->




		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
