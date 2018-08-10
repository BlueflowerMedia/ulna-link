<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blueflowedmedia
 */

?>


	<!-- #content -->

<div class="margin-for-footer"></div>
<footer id="colophon" class="site-footer">
	<div class="container flex-column">
		<div class="flex-row">
			<div class="flex-column">
				<img id="img-logo" src="<?php echo get_template_directory_uri(); ?>/images/ulna-link-final-logo.svg" alt="ULNA LINK logo">
			</div>
			<div class="flex-column">
				ULNA LINK
			</div>
		</div>
		<div class="">

		</div>
		<div id="footer_bottom"class="footer-bottom flex">
			<p>&copy; <?php the_time('Y') ?> Ulna Link Corp. All rights reserved.</p>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
