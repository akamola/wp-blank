<?php
/**
 * Main template
 *
 * @package WordPress
 * @subpackage wp-blank
 * @since wp-blank 1.0
 * @date 2015-05-10
 * @edit 2019-10-24 Arne Kamola <arne@arne.xyz>
 */

get_header(); ?>

	<main id="content" role="main">

		<?php /* Headlines */ ?>

		<?php if ( is_category() ): ?>

			<h1><?php single_cat_title(); ?></h1>

		<?php elseif ( is_tag() ): ?>

			<h1><?php _e('Tag', 'wpblank'); ?>: <?php single_tag_title(); ?></h1>

		<?php elseif ( is_search() ): ?>

			<h1><?php _e('Search', 'wpblank'); ?>: <?php echo esc_html( get_search_query(false) ); ?></h1>

		<?php elseif ( is_year() ): ?>

		<?php elseif ( is_month() ): ?>

			<h1><?php single_month_title(' '); ?></h1>

		<?php elseif ( is_day() ): ?>

		<?php endif; ?>

		<?php /* Posts */ ?>

		<?php if ( have_posts() ): ?>
			<?php while ( have_posts() ): the_post(); ?>

				<?php get_template_part('post'); ?>

			<?php endwhile; ?>
		<?php endif; ?>

		<?php /* Pagination */ ?>

		<?php if ( !is_page() ): // Don't show pagination on single pages ?>

			<?php // Only show pagination if there are more pages
				$prev_link = get_previous_posts_link();
				$next_link = get_next_posts_link();

				if ( is_single() || $prev_link || $next_link ):
			?>

				<?php get_template_part('pagination'); ?>

			<?php endif; ?>

		<?php endif; ?>

	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>