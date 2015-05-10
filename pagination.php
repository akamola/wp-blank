<?php
/**
 * Pagination template
 *
 * @package WordPress
 * @subpackage Blank
 * @since Blank 1.0
 * @date 2015-05-10
 * @edit 2015-05-10 Arne Kamola <a.kamola@psilab.de>
 */

?>
<nav class="pagination">

	<?php if ( is_single() ): ?>

		<ul>
			<li class="prev"><?php previous_post_link( '%link' ); ?></li>
			<li class="next"><?php next_post_link( '%link' ); ?></li>
		</ul>

	<?php elseif ( $wp_query->max_num_pages > 1 ): ?>

		<ul>
			<li class="prev"><?php next_posts_link( __('Back') ); ?></li>
			<li class="next"><?php previous_posts_link( __('Next') ); ?></li>
		</ul>

	<?php endif ?>

</nav>