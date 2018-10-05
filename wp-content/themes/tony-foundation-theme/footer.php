<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tony_Foundation
 */

?>

	</div><!-- #content -->

	<footer class="site-footer">
		<img class="footer-logo" src="<?php echo site_url(); ?>/wp-content/themes/tony-foundation-theme/images/tf-ribbon.png">
		<a class="join-link" href="<?php echo site_url(); ?>/subscribe/">Join our mailing list</a>
		<ul class="page-list">
			<li><a href="<?php echo site_url(); ?>/about/">About</a></li>
			<li><a href="<?php echo site_url(); ?>/about#tonys-story">Tony's Story</a></li>
			<li><a href="<?php echo site_url(); ?>/news/">News</a></li>
			<!-- <li><a href="#">Apply for Support</a></li> -->
			<li><a href="<?php echo site_url(); ?>/contact/">Contact</a></li>
		</ul>
			<div class="social-wrapper">
				<a href="https://www.facebook.com/tonyfoundation">
					<img src="<?php echo site_url(); ?>/wp-content/themes/tony-foundation-theme/images/icon-facebook.png"/>
				</a>
				<a href="https://www.twitter.com/tony_foundation">
					<img src="<?php echo site_url(); ?>/wp-content/themes/tony-foundation-theme/images/icon-twitter.png"/>
				</a>
				<a href="https://www.linkedin.com/company/27192820">
					<img src="<?php echo site_url(); ?>/wp-content/themes/tony-foundation-theme/images/icon-linkedin.png"/>
				</a>
			</div><!--social-wrapper-->
			<div class="legal-wrapper">
				<p class="copyright-notice">Copyright 2018 Tony Foundation. Tony Foundation's 501(c)3 tax exempt status is pending.</p>
				<!-- <p><a href="#">Site Terms of Use</a> | <a href="#">Privacy Policy</a></p> -->
			</div><!--legal-wrapper-->


	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
