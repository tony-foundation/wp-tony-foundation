<?php
/**
 * Template Name: Explore the Cancer Colors
 * @package Tony_Foundation
 * Template Post Type: tfcustompage
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

				
				<section class="explore-the-colors">

					<?php
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content-colors', 'page' );

					endwhile; // End of the loop.
					?>

					<div class="color-card-wrapper">
						<svg class="cancer-color-card" viewBox="0 0 240 50" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
							<g>
								<rect class="card-background" x="0" y="0" width="240" height="50" style="fill:#f6f6f6;"/>
								<rect class="card-swatch" x=".5" y=".5" width="59" height="49" style="fill:#9696C5;"/>
								<text class="card-cancer-name" x="75" y="20">all cancers</text>
								<text class="card-color-name" x="75" y="42">lavender</text>
							</g>
						</svg>

						<svg class="cancer-color-card" viewBox="0 0 240 50" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
							<g>
								<rect class="card-background" x="0" y="0" width="240" height="50" style="fill:#f6f6f6;"/>
								<rect class="card-swatch" x=".5" y=".5" width="59" height="49" style="fill:#F5AC40;"/>
								<text class="card-cancer-name" x="75" y="20">appendix</text>
								<text class="card-color-name" x="75" y="42">amber</text>
							</g>
						</svg>

						<svg class="cancer-color-card" viewBox="0 0 240 50" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
							<g>
								<rect class="card-background" x="0" y="0" width="240" height="50" style="fill:#f6f6f6;"/>
								<rect class="card-swatch" x=".5" y=".5" width="59" height="49" style="fill:url(#_Linear6);"/>
								<text class="card-cancer-name" x="75" y="20">bladder</text>
								<text class="card-color-name" x="75" y="42">marigold, purple &amp; blue</text>
							</g>
							<defs>
								<linearGradient id="_Linear6" x1="0" y1="0" x2="1" y2="0" gradientUnits="userSpaceOnUse" gradientTransform="matrix(63,0,0,50,0.0449201,124.786)"><stop offset="0" style="stop-color:#f1af92;stop-opacity:1"/>
								<stop offset="0.55" style="stop-color:#8d399f;stop-opacity:1"/>
								<stop offset="1" style="stop-color:#22269c;stop-opacity:1"/>
								</linearGradient>
							</defs>
						</svg>

						<svg class="cancer-color-card" viewBox="0 0 240 50" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
							<g>
								<rect class="card-background" x="0" y="0" width="240" height="50" style="fill:#f6f6f6;"/>
								<rect class="card-swatch" x=".5" y=".5" width="59" height="49" style="fill:#FBED4B;"/>
								<text class="card-cancer-name" x="75" y="20">bone</text>
								<text class="card-color-name" x="75" y="42">yellow</text>
							</g>
						</svg>

						<svg class="cancer-color-card" viewBox="0 0 240 50" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
							<g>
								<rect class="card-background" x="0" y="0" width="240" height="50" style="fill:#f6f6f6;"/>
								<rect class="card-swatch" x=".5" y=".5" width="59" height="49" style="fill:#929294;"/>
								<text class="card-cancer-name" x="75" y="20">brain</text>
								<text class="card-color-name" x="75" y="42">gray</text>
							</g>
						</svg>

						<svg class="cancer-color-card" viewBox="0 0 240 50" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
							<g>
								<rect class="card-background" x="0" y="0" width="240" height="50" style="fill:#f6f6f6;"/>
								<rect class="card-swatch" x=".5" y=".5" width="59" height="49" style="fill:#DA97AA;"/>
								<text class="card-cancer-name" x="75" y="20">breast</text>
								<text class="card-color-name" x="75" y="42">pink</text>
							</g>
						</svg>

						<svg class="cancer-color-card" viewBox="0 0 240 50" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
							<g>
								<rect class="card-background" x="0" y="0" width="240" height="50" style="fill:#f6f6f6;"/>
								<rect class="card-swatch" x=".5" y=".5" width="59" height="49" style="fill:url(#_Linear3);"/>
								<text class="card-cancer-name" x="75" y="20">carcinoid</text>
								<text class="card-color-name" x="75" y="42">zebra stripe</text>
							</g>
							<defs>
								<linearGradient id="_Linear3" x1="0" y1="0" x2="1" y2="0" gradientUnits="userSpaceOnUse" gradientTransform="matrix(63,0,0,50,0.0449201,324.786)"><stop offset="0" style="stop-color:#fefffe;stop-opacity:1"/>
								<stop offset="0.03" style="stop-color:#b8b9b8;stop-opacity:1"/>
								<stop offset="0.07" style="stop-color:#010001;stop-opacity:1"/>
								<stop offset="0.15" style="stop-color:#fefffe;stop-opacity:1"/>
								<stop offset="0.28" style="stop-color:#010001;stop-opacity:1"/>
								<stop offset="0.35" style="stop-color:#fefffe;stop-opacity:1"/>
								<stop offset="0.4" style="stop-color:#c6c6c6;stop-opacity:1"/>
								<stop offset="0.45" style="stop-color:#010001;stop-opacity:1"/>
								<stop offset="0.55" style="stop-color:#fefffe;stop-opacity:1"/>
								<stop offset="0.65" style="stop-color:#101010;stop-opacity:1"/>
								<stop offset="0.74" style="stop-color:#fefffe;stop-opacity:1"/>
								<stop offset="0.78" style="stop-color:#505050;stop-opacity:1"/>
								<stop offset="0.81" style="stop-color:#010001;stop-opacity:1"/>
								<stop offset="0.88" style="stop-color:#fefffe;stop-opacity:1"/>
								<stop offset="1" style="stop-color:#010001;stop-opacity:1"/>
								</linearGradient>
							</defs>
						</svg>

						<svg class="cancer-color-card" viewBox="0 0 240 50" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
							<g>
								<rect class="card-background" x="0" y="0" width="240" height="50" style="fill:#f6f6f6;"/>
								<rect class="card-swatch" x=".5" y=".5" width="59" height="49" style="fill:url(#_Linear5);"/>
								<text class="card-cancer-name" x="75" y="20">cervical</text>
								<text class="card-color-name" x="75" y="42">teal &amp; white</text>
							</g>
							<defs>
								<linearGradient id="_Linear5" x1="0" y1="0" x2="1" y2="0" gradientUnits="userSpaceOnUse" gradientTransform="matrix(63,0,0,50,0.0449201,374.786)"><stop offset="0" style="stop-color:#18706f;stop-opacity:1"/>
									<stop offset="0.27" style="stop-color:#18706f;stop-opacity:1"/>
									<stop offset="0.34" style="stop-color:#18706f;stop-opacity:1"/>
									<stop offset="0.4" style="stop-color:#18706f;stop-opacity:1"/>
									<stop offset="0.65" style="stop-color:#619d9c;stop-opacity:1"/>
									<stop offset="1" style="stop-color:#fefffe;stop-opacity:1"/>
								</linearGradient>
							</defs>
						</svg>

						<svg class="cancer-color-card" viewBox="0 0 240 50" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
							<g>
								<rect class="card-background" x="0" y="0" width="240" height="50" style="fill:#f6f6f6;"/>
								<rect class="card-swatch" x=".5" y=".5" width="59" height="49" style="fill:#D8A477;"/>
								<text class="card-cancer-name" x="75" y="20">childhood</text>
								<text class="card-color-name" x="75" y="42">gold</text>
							</g>
						</svg>

						<svg class="cancer-color-card" viewBox="0 0 240 50" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
							<g>
								<rect class="card-background" x="0" y="0" width="240" height="50" style="fill:#f6f6f6;"/>
								<rect class="card-swatch" x=".5" y=".5" width="59" height="49" style="fill:#252C99;"/>
								<text class="card-cancer-name" x="75" y="20">colon</text>
								<text class="card-color-name" x="75" y="42">dark blue</text>
							</g>
						</svg>
						<svg class="cancer-color-card" viewBox="0 0 240 50" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
							<g>
								<rect class="card-background" x="0" y="0" width="240" height="50" style="fill:#f6f6f6;"/>
								<rect class="card-swatch" x=".5" y=".5" width="59" height="49" style="fill:#AEAFCC;"/>
								<text class="card-cancer-name" x="75" y="20">esophageal &amp; stomach</text>
								<text class="card-color-name" x="75" y="42">periwinkle</text>
							</g>
						</svg>
						<svg class="cancer-color-card" viewBox="0 0 240 50" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
							<g>
								<rect class="card-background" x="0" y="0" width="240" height="50" style="fill:#f6f6f6;"/>
								<rect class="card-swatch" x=".5" y=".5" width="59" height="49" style="fill:#289D4D;"/>
								<text class="card-cancer-name" x="75" y="20">gallbladder &amp; bile duct</text>
								<text class="card-color-name" x="75" y="42">kelly green</text>
							</g>
						</svg>

						<svg class="cancer-color-card" viewBox="0 0 240 50" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
							<g>
								<rect class="card-background" x="0" y="0" width="240" height="50" style="fill:#f6f6f6;"/>
								<rect class="card-swatch" x=".5" y=".5" width="59" height="49" style="fill:url(#_Linear2);"/>
								<text class="card-cancer-name" x="75" y="20">head &amp; neck</text>
								<text class="card-color-name" x="75" y="42">ivory &amp; burgundy</text>
							</g>
							<defs>
								<linearGradient id="_Linear2" x1="0" y1="0" x2="1" y2="0" gradientUnits="userSpaceOnUse" gradientTransform="matrix(63,0,0,50,0.0449201,624.786)"><stop offset="0" style="stop-color:#fed;stop-opacity:1"/>
									<stop offset="0.24" style="stop-color:#e4beb4;stop-opacity:1"/>
									<stop offset="0.55" style="stop-color:#a64d53;stop-opacity:1"/>
									<stop offset="0.64" style="stop-color:#9f4249;stop-opacity:1"/>
									<stop offset="0.73" style="stop-color:#98373f;stop-opacity:1"/>
									<stop offset="1" style="stop-color:#95323b;stop-opacity:1"/>
								</linearGradient>
							</defs>
						</svg>

						<svg class="cancer-color-card" viewBox="0 0 240 50" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
							<g>
								<rect class="card-background" x="0" y="0" width="240" height="50" style="fill:#f6f6f6;"/>
								<rect class="card-swatch" x=".5" y=".5" width="59" height="49" style="fill:#5735B8;"/>
								<text class="card-cancer-name" x="75" y="20">hodgkin's lymphoma</text>
								<text class="card-color-name" x="75" y="42">violet</text>
							</g>
						</svg>

						<svg class="cancer-color-card" viewBox="0 0 240 50" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
							<g>
								<rect class="card-background" x="0" y="0" width="240" height="50" style="fill:#f6f6f6;"/>
								<rect class="card-swatch" x=".5" y=".5" width="59" height="49" style="fill:#683566;"/>
								<text class="card-cancer-name" x="75" y="20">honors caregivers</text>
								<text class="card-color-name" x="75" y="42">plum</text>
							</g>
						</svg>

						<svg class="cancer-color-card" viewBox="0 0 240 50" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
							<g>
								<rect class="card-background" x="0" y="0" width="240" height="50" style="fill:#f6f6f6;"/>
								<rect class="card-swatch" x=".5" y=".5" width="59" height="49" style="fill:#EB563F;"/>
								<text class="card-cancer-name" x="75" y="20">kidney</text>
								<text class="card-color-name" x="75" y="42">orange</text>
							</g>
						</svg>

						<svg class="cancer-color-card" viewBox="0 0 240 50" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
							<g>
								<rect class="card-background" x="0" y="0" width="240" height="50" style="fill:#f6f6f6;"/>
								<rect class="card-swatch" x=".5" y=".5" width="59" height="49" style="fill:#8C3D9D;"/>
								<text class="card-cancer-name" x="75" y="20">leiomyosarcoma</text>
								<text class="card-color-name" x="75" y="42">purple</text>
							</g>
						</svg>

						<svg class="cancer-color-card" viewBox="0 0 240 50" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
							<g>
								<rect class="card-background" x="0" y="0" width="240" height="50" style="fill:#f6f6f6;"/>
								<rect class="card-swatch" x=".5" y=".5" width="59" height="49" style="fill:#EB563F;"/>
								<text class="card-cancer-name" x="75" y="20">leukemia</text>
								<text class="card-color-name" x="75" y="42">orange</text>
							</g>
						</svg>

						<svg class="cancer-color-card" viewBox="0 0 240 50" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
							<g>
								<rect class="card-background" x="0" y="0" width="240" height="50" style="fill:#f6f6f6;"/>
								<rect class="card-swatch" x=".5" y=".5" width="59" height="49" style="fill:#15693E;"/>
								<text class="card-cancer-name" x="75" y="20">liver</text>
								<text class="card-color-name" x="75" y="42">emerald green</text>
							</g>
						</svg>

						<svg class="cancer-color-card" viewBox="0 0 240 50" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
							<g>
								<rect class="card-background" x="0" y="0" width="240" height="50" style="fill:#f6f6f6;"/>
								<rect class="card-swatch" x=".5" y=".5" width="59" height="49" style="fill:#FFFFFF;"/>
								<text class="card-cancer-name" x="75" y="20">lung</text>
								<text class="card-color-name" x="75" y="42">white</text>
							</g>
						</svg>

						<svg class="cancer-color-card" viewBox="0 0 240 50" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
							<g>
								<rect class="card-background" x="0" y="0" width="240" height="50" style="fill:#f6f6f6;"/>
								<rect class="card-swatch" x=".5" y=".5" width="59" height="49" style="fill:#B8CF52;"/>
								<text class="card-cancer-name" x="75" y="20">lymphoma</text>
								<text class="card-color-name" x="75" y="42">lime</text>
							</g>
						</svg>

						<svg class="cancer-color-card" viewBox="0 0 240 50" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
							<g>
								<rect class="card-background" x="0" y="0" width="240" height="50" style="fill:#f6f6f6;"/>
								<rect class="card-swatch" x=".5" y=".5" width="59" height="49" style="fill:#000000;"/>
								<text class="card-cancer-name" x="75" y="20">melanoma</text>
								<text class="card-color-name" x="75" y="42">black</text>
							</g>
						</svg>

						<svg class="cancer-color-card" viewBox="0 0 240 50" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
							<g>
								<rect class="card-background" x="0" y="0" width="240" height="50" style="fill:#f6f6f6;"/>
								<rect class="card-swatch" x=".5" y=".5" width="59" height="49" style="fill:#93333D;"/>
								<text class="card-cancer-name" x="75" y="20">multiple myeloma</text>
								<text class="card-color-name" x="75" y="42">burgundy</text>
							</g>
						</svg>

						<svg class="cancer-color-card" viewBox="0 0 240 50" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
							<g>
								<rect class="card-background" x="0" y="0" width="240" height="50" style="fill:#f6f6f6;"/>
								<rect class="card-swatch" x=".5" y=".5" width="59" height="49" style="fill:#18706E;"/>
								<text class="card-cancer-name" x="75" y="20">ovarian</text>
								<text class="card-color-name" x="75" y="42">teal</text>
							</g>
						</svg>

						<svg class="cancer-color-card" viewBox="0 0 240 50" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
							<g>
								<rect class="card-background" x="0" y="0" width="240" height="50" style="fill:#f6f6f6;"/>
								<rect class="card-swatch" x=".5" y=".5" width="59" height="49" style="fill:#8C3D9D;"/>
								<text class="card-cancer-name" x="75" y="20">pancreatic</text>
								<text class="card-color-name" x="75" y="42">purple</text>
							</g>
						</svg>

						<svg class="cancer-color-card" viewBox="0 0 240 50" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
							<g>
								<rect class="card-background" x="0" y="0" width="240" height="50" style="fill:#f6f6f6;"/>
								<rect class="card-swatch" x=".5" y=".5" width="59" height="49" style="fill:#9DD2E1;"/>
								<text class="card-cancer-name" x="75" y="20">prostate</text>
								<text class="card-color-name" x="75" y="42">light blue</text>
							</g>
						</svg>

						<svg class="cancer-color-card" viewBox="0 0 240 50" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
							<g>
								<rect class="card-background" x="0" y="0" width="240" height="50" style="fill:#f6f6f6;"/>
								<rect class="card-swatch" x=".5" y=".5" width="59" height="49" style="fill:#FBED4B;"/>
								<text class="card-cancer-name" x="75" y="20">sarcoma</text>
								<text class="card-color-name" x="75" y="42">yellow</text>
							</g>
						</svg>

						<svg class="cancer-color-card" viewBox="0 0 240 50" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
							<g>
								<rect class="card-background" x="0" y="0" width="240" height="50" style="fill:#f6f6f6;"/>
								<rect class="card-swatch" x=".5" y=".5" width="59" height="49" style="fill:#8F91B3;"/>
								<text class="card-cancer-name" x="75" y="20">testicular</text>
								<text class="card-color-name" x="75" y="42">orchid</text>
							</g>
						</svg>

						<svg class="cancer-color-card" viewBox="0 0 240 50" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
							<g>
								<rect class="card-background" x="0" y="0" width="240" height="50" style="fill:#f6f6f6;"/>
								<rect class="card-swatch" x=".5" y=".5" width="59" height="49" style="fill:url(#_Linear4);"/>
								<text class="card-cancer-name" x="75" y="20">thyroid</text>
								<text class="card-color-name" x="75" y="42">teal, pink &amp; blue</text>
							</g>
							<defs>
								<linearGradient id="_Linear4" x1="0" y1="0" x2="1" y2="0" gradientUnits="userSpaceOnUse" gradientTransform="matrix(63,0,0,50,0.0449201,1374.79)"><stop offset="0" style="stop-color:#db96aa;stop-opacity:1"/>
								<stop offset="0.27" style="stop-color:#a58c9a;stop-opacity:1"/>
								<stop offset="0.56" style="stop-color:#18706f;stop-opacity:1"/>
								<stop offset="0.81" style="stop-color:#1f3d8e;stop-opacity:1"/>
								<stop offset="1" style="stop-color:#22269c;stop-opacity:1"/>
								</linearGradient>
							</defs>
						</svg>

						<svg class="cancer-color-card" viewBox="0 0 240 50" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
							<g>
								<rect class="card-background" x="0" y="0" width="240" height="50" style="fill:#f6f6f6;"/>
								<rect class="card-swatch" x=".5" y=".5" width="59" height="49" style="fill:#F0AF94;"/>
								<text class="card-cancer-name" x="75" y="20">uterine</text>
								<text class="card-color-name" x="75" y="42">peach</text>
							</g>
						</svg>


					</div><!--color-key-wrapper-->
				</section>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
