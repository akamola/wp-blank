<?php
/**
 * Error 404 template
 *
 * @package WordPress
 * @subpackage wp-blank
 * @since wp-blank 1.0
 * @date 2015-05-10
 * @edit 2015-08-03 Arne Kamola <a.kamola@psilab.de>
 */

get_header(); ?>

	<div id="content" role="main">

		<article class="page error404">

			<h1><?php _e('Page not found', 'blanktheme'); ?></h1>

			<p><!-- Insert your error text here --></p>

			<p><code class="error"><?php _e('Error Code 404', 'blanktheme'); ?></code></p>

		</article>

	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>