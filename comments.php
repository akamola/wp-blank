<?php
/**
 * Comment area template
 *
 * @package WordPress
 * @subpackage wp-blank
 * @since wp-blank 1.0
 * @date 2015-05-10
 * @edit 2019-10-24 Arne Kamola <arne@arne.xyz>
 */

if ( comments_open() ): ?>

	<aside id="comments">

		<?php if ( have_comments() ): ?>

			<?php /* Actual comments */ ?>

			<?php $comments = wp_list_comments( array('type' => 'comment', 'echo' => false) ); ?>

				<?php if ( count($comments) > 0 ): ?>

				<h1><?php _e('Comments', 'wpblank'); ?></h1>

				<?php wp_list_comments(array(
					'walker'			=> null,
					'max_depth'			=> '',
					'style'				=> 'div',
					'callback'			=> 'wpblank_comment',
					'end-callback'		=> 'wpblank_comment_end',
					'type'				=> 'comment',
					'reply_text'		=> 'Reply',
					'page'				=> '',
					'per_page'			=> '',
					'avatar_size'		=> 64,
					'reverse_top_level'	=> null,
					'reverse_children'	=> '',
					'format'			=> 'html5',
					'short_ping'		=> false,
					'echo'				=> true
				)); ?>

			<?php endif; ?>

			<?php /* Pingbacks/Trackbacks */ ?>

			<?php $pings = wp_list_comments( array('type' => 'pings', 'echo' => false) ); ?>

			<?php if ( count($pings) > 0 ): ?>

				<h1><?php _e('Trackbacks', 'wpblank'); ?></h1>

				<?php wp_list_comments(array(
					'walker'			=> null,
					'max_depth'			=> '',
					'style'				=> 'ul',
					'callback'			=> null,
					'end-callback'		=> null,
					'type'				=> 'pings',
					'reply_text'		=> 'Ping back',
					'page'				=> '',
					'per_page'			=> '',
					'avatar_size'		=> 32,
					'reverse_top_level'	=> null,
					'reverse_children'	=> '',
					'format'			=> 'html5',
					'short_ping'		=> true,
					'echo'				=> true
				)); ?>

			<?php endif; ?>

		<?php endif; ?>

		<?php comment_form(); ?>

	</aside>

<?php endif; ?>