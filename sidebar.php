<?php
/**
 * Sidebar template
 *
 * @package WordPress
 * @subpackage wp-blank
 * @since wp-blank 1.0
 * @date 2015-05-10
 * @edit 2019-10-24 Arne Kamola <arne@arne.xyz>
 */

?><hr>

<aside class="sidebar primary">

	<?php if ( function_exists('dynamic_sidebar') && is_active_sidebar('wpblank-widgetarea-primary') ): ?>

		<?php dynamic_sidebar('wpblank-widgetarea-primary'); ?>

	<?php endif; ?>

</aside>