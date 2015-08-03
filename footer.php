<?php
/**
 * Footer template
 *
 * @package WordPress
 * @subpackage wp-blank
 * @since wp-blank 1.0
 * @date 2015-05-10
 * @edit 2015-08-03 Arne Kamola <a.kamola@psilab.de>
 */

?>
	<hr>

	<footer role="contentinfo">

		<?php if ( function_exists('dynamic_sidebar') && is_active_sidebar('blanktheme-widgetarea-footer') ): ?>

			<?php dynamic_sidebar('blanktheme-widgetarea-footer'); ?>

		<?php endif; ?>

	</footer>

<?php wp_footer(); ?>

</body>
</html>