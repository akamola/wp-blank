<?php
/**
 * Sidebar template
 *
 * @package WordPress
 * @subpackage wp-blank
 * @since wp-blank 1.0
 * @date 2015-05-10
 * @edit 2015-08-03 Arne Kamola <a.kamola@psilab.de>
 */

?><hr>

<aside class="sidebar primary">

	<?php if ( function_exists('dynamic_sidebar') && is_active_sidebar('blanktheme-widgetarea-primary') ): ?>

		<?php dynamic_sidebar('blanktheme-widgetarea-primary'); ?>

	<?php endif; ?>

</aside>