<?php
/**
 * Scripts configuration.
 *
 * @package HiveTheme\Configs
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

return [
	'focus_visible'  => [
		'handle' => 'focus-visible',
		'src'    => HT_THEME_URL . '/assets/js/focus-visible.min.js',
	],

	'hoverintent'    => [
		'handle' => 'hoverintent',
		'src'    => HT_THEME_URL . '/assets/js/jquery.hoverIntent.min.js',
	],

	'waitforimages'  => [
		'handle' => 'waitforimages',
		'src'    => HT_THEME_URL . '/assets/js/jquery.waitforimages.min.js',
	],

	'fitvids'        => [
		'handle' => 'fitvids',
		'src'    => HT_THEME_URL . '/assets/js/jquery.fitvids.min.js',
	],

	'sticky_sidebar' => [
		'handle' => 'sticky-sidebar',
		'src'    => HT_THEME_URL . '/assets/js/jquery.sticky-sidebar.min.js',
	],

	'frontend'       => [
		'handle' => 'ht-frontend',
		'src'    => HT_THEME_URL . '/assets/js/frontend.js',
		'deps'   => [ 'jquery', 'hoverintent', 'waitforimages', 'fitvids', 'sticky-sidebar', 'comment-reply' ],
	],
];
