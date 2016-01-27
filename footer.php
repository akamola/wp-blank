<?php
/**
 * Footer template
 *
 * @package WordPress
 * @subpackage wp-blank
 * @since wp-blank 1.0
 * @date 2015-05-10
 * @edit 2016-01-27 Arne Kamola <a.kamola@psilab.de>
 */

?>
	<hr>

	<footer role="contentinfo">

		<?php if ( function_exists('dynamic_sidebar') && is_active_sidebar('wpblank-widgetarea-footer') ): ?>

			<?php dynamic_sidebar('wpblank-widgetarea-footer'); ?>

		<?php endif; ?>

	</footer>

<?php wp_footer(); ?>

</body>
</html>