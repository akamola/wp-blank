<?php
/**
 * Template functions
 *
 * Functions are sorted alphabetical by their name.
 *
 * @package WordPress
 * @subpackage wp-blank
 * @since wp-blank 1.0
 * @date 2015-05-10
 * @edit 2015-08-03 Arne Kamola <a.kamola@psilab.de>
 */

/**
 * Check whether a page is a subpage or not.
 * @see http://codex.wordpress.org/Conditional_Tags#Testing_for_sub-Pages
 * @since wp-blank 1.0
 * @return False or the parent page object
 */
function is_subpage() {
	global $post;

	if ( is_page() && $post->post_parent ) {
		return $post->post_parent;
	} else {
		return false;
	}
}

/**
 * Custom markup for comments.
 * @see https://codex.wordpress.org/Function_Reference/wp_list_comments
 * @since wp-blank 1.0
 * @return void
 */
function blanktheme_comment($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment;

	extract($args, EXTR_SKIP);

?><article id="comment-<?php comment_ID(); ?>" <?php comment_class(); ?>>

	<aside class="meta">

		<p class="avatar"><?php echo get_avatar(get_comment_author_email(), 64); ?></p>

		<p class="info"><?php comment_author_link(); ?> <?php _e('on', 'blanktheme'); ?> <?php comment_date( get_option('date_format') ); ?>, <?php comment_date( get_option('time_format') ); ?>:</p>

	</aside>

	<div class="body">

		<?php comment_text(); ?>

		<?php if ( $comment->comment_approved == '0' ): ?>
			<p class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'blanktheme' ); ?></p>
		<?php endif; ?>

	</div>

</article><?php
}

function blanktheme_comment_end() {
	echo '';
}

/**
 * Add custom JavaScript that depends on jQuery.
 * @see https://codex.wordpress.org/Plugin_API/Action_Reference/wp_enqueue_scripts
 * @since wp-blank 1.0
 * @return void
 */
function blanktheme_js() {
	wp_enqueue_script(
		'custom-script',
		get_template_directory_uri() . '/app.js',
		array( 'jquery' )
	);
}
add_action( 'wp_enqueue_scripts', 'blanktheme_js' );

/**
 * Register theme support features.
 * @see http://codex.wordpress.org/Function_Reference/add_theme_support
 * @since wp-blank 1.0.3
 * @return void
 */
function blanktheme_support() {
	// Features
	// @see http://codex.wordpress.org/Function_Reference/add_theme_support#Addable_Features

	// HTML5
	// @see http://codex.wordpress.org/Function_Reference/add_theme_support#HTML5

	add_theme_support( 'html5', array(
		'caption',
		'comment-list',
		'comment-form',
		'gallery',
		'search-form'
	) );
}
add_action('after_setup_theme', 'blanktheme_support');

/**
 * Register theme menus for the WordPress menu feature.
 * @see https://codex.wordpress.org/Function_Reference/register_nav_menu
 * @since wp-blank 1.0
 * @return void
 */
function blanktheme_register_menus() {
	if ( function_exists('register_nav_menus') ) {
		register_nav_menus( array(
			'header'	=> __('Main Navigation', 'blanktheme')
		) );
	}
}
add_action('init', 'blanktheme_register_menus');

/**
 * Register theme sidebars for the WordPress widget feature.
 * @see https://codex.wordpress.org/Function_Reference/register_sidebars
 * @since wp-blank 1.0
 * @return void
 */
function blanktheme_register_sidebars() {
	// Primary
	register_sidebar( array(
		'name'			=> __('Sidebar', 'blanktheme'),
		'id'			=> 'blanktheme-widgetarea-primary',
		'before_widget'	=> '<div class="widget">',
		'after_widget'	=> '</div>'
	) );

	// Header
	register_sidebar( array(
		'name'			=> __('Header', 'blanktheme'),
		'id'			=> 'blanktheme-widgetarea-header',
		'before_widget'	=> '<div class="widget">',
		'after_widget'	=> '</div>'
	) );

	// Footer
	register_sidebar( array(
		'name'			=> __('Footer', 'blanktheme'),
		'id'			=> 'blanktheme-widgetarea-footer',
		'before_widget'	=> '<div class="widget">',
		'after_widget'	=> '</div>'
	) );
}
add_action('init', 'blanktheme_register_sidebars');

/**
 * Remove the generator meta tag with the WordPress version from the HTML for
 * better security.
 * @see https://developer.wordpress.org/reference/hooks/the_generator/
 * @since wp-blank 1.0.2
 * @return Empty string
 */
function blanktheme_remove_version() {
	return '';
}
add_filter('the_generator', 'blanktheme_remove_version');

/**
 * Replace the default login error message to hide any information that could
 * maybe used for cracking into the system.
 * @see https://codex.wordpress.org/Plugin_API/Filter_Reference/login_errors
 * @since wp-blank 1.0.2
 * @return Login error message
 */
function blanktheme_wrong_login() {
	return 'Wrong username or password.';
}
add_filter('login_errors', 'blanktheme_wrong_login');