<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package IWU_Scores
 */

?>
	
	
	<footer id="colophon" class="site-footer">
	<div class="footer-widgets">
		
		<?php
			echo '<div class="footer-widget">';
			dynamic_sidebar( 'footer1' );
			echo '</div>';

			echo '<div class="footer-widget">';
			dynamic_sidebar( 'footer2' );
			echo '</div>';

			echo '<div class="footer-widget">';
			dynamic_sidebar( 'footer3' );
			echo '</div>';
		?>
	</div>
		
	</footer><!-- #colophon -->
	
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
