<?php
/**
 * Error 404 template
 *
 * @package WordPress
 * @subpackage wp-blank
 * @since wp-blank 1.0
 * @date 2015-05-10
 * @edit 2016-01-27 Arne Kamola <a.kamola@psilab.de>
 */

get_header(); ?>

	<div id="content" role="main">

		<article class="page error404">

			<h1><?php _e('Page not found', 'wpblank'); ?></h1>

			<p><!-- Insert your error text here --></p>

			<p><code class="error"><?php _e('Error Code 404', 'wpblank'); ?></code></p>

		</article>

	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>