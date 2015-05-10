<?php
/*
 * Template Name: Archive
 */
/**
 * Archive template
 *
 * @package WordPress
 * @subpackage Blank
 * @since Blank 1.0
 * @date 2015-05-10
 * @edit 2015-05-10 Arne Kamola <a.kamola@psilab.de>
 */

get_header(); ?>

	<div id="content" role="main">

		<h1><?php _e('Archive', 'blanktheme'); ?></h1>

		<article class="page archive">

			<div class="tagcloud">

				<h2><?php _e('Tag Cloud', 'blanktheme'); ?></h2>

				<?php wp_tag_cloud(array(
					'smallest'					=> 9,
					'largest'					=> 25,
					'unit'						=> 'pt',
					'number'					=> 0,
					'format'					=> 'flat',
					'separator'					=> "\n",
					'orderby'					=> 'name',
					'order'						=> 'ASC',
					'exclude'					=> null,
					'include'					=> null,
					'topic_count_text_callback'	=> 'default_topic_count_text',
					'link'						=> 'view',
					'taxonomy'					=> 'post_tag',
					'echo'						=> true,
					'child_of'					=> null
				)); ?>

			</div>

			<div class="archive-list months">

				<h2><?php _e('Monthly', 'blanktheme'); ?></h2>

      			<ul>
					<?php wp_get_archives(array(
						'type'				=> 'monthly',
						'limit'				=> '',
						'format'			=> 'html',
						'before'			=> '',
						'after'				=> '',
						'show_post_count'	=> true,
						'echo'				=> 1,
						'order'				=> 'DESC'
					)); ?>
      			</ul>

			</div>

			<div class="archive-list categories">

				<h2><?php _e('Categories', 'blanktheme'); ?></h2>

				<ul>
					<?php wp_list_categories(array(
						'show_option_all'		=> '',
						'orderby'				=> 'name',
						'order'					=> 'ASC',
						'style'					=> 'list',
						'show_count'			=> 1,
						'hide_empty'			=> 1,
						'use_desc_for_title'	=> 1,
						'child_of'				=> 0,
						'feed'					=> '',
						'feed_type'				=> '',
						'feed_image'			=> '',
						'exclude'				=> '',
						'exclude_tree'			=> '',
						'include'				=> '',
						'hierarchical'			=> 1,
						'title_li'				=> '',
						'show_option_none'		=> __('Keine Kategorien'),
						'number'				=> null,
						'echo'					=> 1,
						'depth'					=> 0,
						'current_category'		=> 0,
						'pad_counts'			=> 0,
						'taxonomy'				=> 'category',
						'walker'				=> null
					)); ?>
				</ul>

			</div>

		</article>

	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>