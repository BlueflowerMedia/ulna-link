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
	<div class="image">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"
			<?php echo file_get_contents(get_template_directory_uri()."/images/ulna-link-final-logo.svg") ?>
		</a>
		<div class="text flex">ULNA LINK</div>
	</div>	
	<div id="footer_bottom" class="footer-bottom flex">
		<p>&copy; <?php the_time('Y') ?> Ulna Link Corp. All rights reserved.</p>
	</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
