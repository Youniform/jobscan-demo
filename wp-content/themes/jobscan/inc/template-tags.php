<?php
/**
 * Custom template tags for this theme.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Jobscan 1.0
 */

/**
 * Table of Contents:
 * Logo & Description
 * Comments
 * Post Meta
 * Menus
 * Classes
 * Archives
 * Miscellaneous
 */


/**
 * Displays the site description.
 *
 * @param boolean $echo Echo or return the html.
 * @return string The HTML to display.
 */
function jobscan_site_description( $echo = true ) {
	$description = get_bloginfo( 'description' );

	if ( ! $description ) {
		return;
	}

	$wrapper = '<div class="site-description">%s</div><!-- .site-description -->';

	$html = sprintf( $wrapper, esc_html( $description ) );

	/**
	 * Filters the HTML for the site description.
	 *
	 * @since Jobscan 1.0
	 *
	 * @param string $html         The HTML to display.
	 * @param string $description  Site description via `bloginfo()`.
	 * @param string $wrapper      The format used in case you want to reuse it in a `sprintf()`.
	 */
	$html = apply_filters( 'jobscan_site_description', $html, $description, $wrapper );

	if ( ! $echo ) {
		return $html;
	}

	echo $html; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
}


/**
 * Logo & Description
 */

/**
 * Displays the site logo, either text or image.
 *
 * @param array   $args Arguments for displaying the site logo either as an image or text.
 * @param boolean $echo Echo or return the HTML.
 * @return string Compiled HTML based on our arguments.
 */
function jobscan_site_logo( $args = array(), $echo = true ) {
	$logo       = get_custom_logo();
	$site_title = get_bloginfo( 'name' );
	$contents   = '';
	$classname  = '';

	$defaults = array(
		'logo'        => '%1$s<span class="screen-reader-text">%2$s</span>',
		'logo_class'  => 'site-logo',
		'title'       => '<a href="%1$s">%2$s</a>',
		'title_class' => 'site-title',
		'home_wrap'   => '<h1 class="%1$s">%2$s</h1>',
		'single_wrap' => '<div class="%1$s faux-heading">%2$s</div>',
		'condition'   => ( is_front_page() || is_home() ) && ! is_page(),
	);

	$args = wp_parse_args( $args, $defaults );

	/**
	 * Filters the arguments for `jobscan_site_logo()`.
	 *
	 * @param array  $args     Parsed arguments.
	 * @param array  $defaults Function's default arguments.
	 */
	$args = apply_filters( 'jobscan_site_logo_args', $args, $defaults );

	if ( has_custom_logo() ) {
		$contents  = sprintf( $args['logo'], $logo, esc_html( $site_title ) );
		$classname = $args['logo_class'];
	} else {
		$contents  = sprintf( $args['title'], esc_url( get_home_url( null, '/' ) ), esc_html( $site_title ) );
		$classname = $args['title_class'];
	}

	$wrap = $args['condition'] ? 'home_wrap' : 'single_wrap';

	$html = sprintf( $args[ $wrap ], $classname, $contents );
}

/**
 * Displays a custom logo, linked to home unless the theme supports removing the link on the home page.
 *
 * @since 4.5.0
 *
 * @param int $blog_id Optional. ID of the blog in question. Default is the ID of the current blog.
 */
function the_custom_logo( $blog_id = 0 ) {
	echo get_custom_logo( $blog_id );
}
