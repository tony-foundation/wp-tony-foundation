<?php
/**
 * Template Name: Subscribe
 * @package Tony_Foundation
 * Template Post Type: tfcustompage
 */

get_header(); ?>

<section id="primary" class="subscribe-form-wrapper">

<h2>Subscribe to our mailing list</h2>

<?php
while ( have_posts() ) : the_post();

	the_content();

endwhile; // End of the loop.
?>

	<!-- Begin MailChimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">

<div id="mc_embed_signup">
<form action="https://wordpress.us17.list-manage.com/subscribe/post?u=33f69fccbfedf2f974900f158&amp;id=362de29c61" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate style="padding:0;">
    <div id="mc_embed_signup_scroll">
<div class="indicates-required" style="display:none;"><span class="asterisk">*</span> indicates required</div>
<div class="mc-field-group">
	<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
</label>
	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
</div>
<div class="mc-field-group">
	<label for="mce-FNAME">First Name </label>
	<input type="text" value="" name="FNAME" class="" id="mce-FNAME">
</div>
<div class="mc-field-group">
	<label for="mce-MMERGE17">Postal Code </label>
	<input type="text" value="" name="MMERGE17" class="" id="mce-MMERGE17">
</div>
<div class="mc-field-group input-group">
    <strong>Email Format </strong>
    <ul><li><input type="radio" value="html" name="EMAILTYPE" id="mce-EMAILTYPE-0"><label for="mce-EMAILTYPE-0">html</label></li>
<li><input type="radio" value="text" name="EMAILTYPE" id="mce-EMAILTYPE-1"><label for="mce-EMAILTYPE-1">text</label></li>
</ul>
</div>
	<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_33f69fccbfedf2f974900f158_362de29c61" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button" style="font-size:1em;height:50px;"></div>
    </div>
</form>
</div>
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='BIRTHDAY';ftypes[3]='birthday';fnames[4]='MMERGE4';ftypes[4]='text';fnames[5]='MMERGE5';ftypes[5]='text';fnames[6]='MMERGE6';ftypes[6]='text';fnames[7]='MMERGE7';ftypes[7]='text';fnames[8]='MMERGE8';ftypes[8]='text';fnames[9]='MMERGE9';ftypes[9]='text';fnames[10]='MMERGE10';ftypes[10]='text';fnames[11]='MMERGE11';ftypes[11]='text';fnames[12]='MMERGE12';ftypes[12]='text';fnames[13]='MMERGE13';ftypes[13]='text';fnames[14]='MMERGE14';ftypes[14]='text';fnames[15]='MMERGE15';ftypes[15]='text';fnames[16]='MMERGE16';ftypes[16]='text';fnames[17]='MMERGE17';ftypes[17]='text';fnames[18]='MMERGE18';ftypes[18]='text';fnames[19]='MMERGE19';ftypes[19]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<!--End mc_embed_signup-->

</section><!-- #primary -->

<?php
get_footer();
