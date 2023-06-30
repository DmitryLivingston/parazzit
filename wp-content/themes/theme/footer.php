<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Company
 */



?>

	<footer class="footer">
		<div class="footer__img">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer_img.png" alt="">
		</div>
		<div class="footer__img mobile">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer_img-m.png" alt="">
		</div>
		<?php if(theme('footer_text')) { ?>
			<p class="footer__text"><?php echo theme('footer_text'); ?></p>
		<?php } ?>
	</footer>

<?php wp_footer(); ?>

</body>
</html>
