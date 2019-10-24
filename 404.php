<?php
/**
 * Error 404 template
 *
 * @package WordPress
 * @subpackage wp-blank
 * @since wp-blank 1.0
 * @date 2015-05-10
 * @edit 2019-10-24 Arne Kamola <arne@arne.xyz>
 */

get_header(); ?>

	<div id="content" role="main">

		<article class="page error404">

			<h1><?php _e('Page not found', 'wpblank'); ?></h1>

			<p><!-- Insert your error message here --></p>

			<p><code class="error"><?php _e('Error Code 404', 'wpblank'); ?></code></p>

		</article>

	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>