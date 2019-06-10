<?php
/**
 * Asset component.
 *
 * @package HiveTheme\Components
 */

namespace HiveTheme\Components;

use HiveTheme\Helpers as ht;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/**
 * Asset component class.
 *
 * @class Asset
 */
final class Asset {

	/**
	 * Class constructor.
	 */
	public function __construct() {

		// Enqueue styles.
		add_action( 'admin_enqueue_scripts', [ $this, 'enqueue_styles' ] );
		add_action( 'wp_enqueue_scripts', [ $this, 'enqueue_styles' ] );
		add_action( 'admin_init', [ $this, 'enqueue_editor_styles' ] );

		// Enqueue scripts.
		add_action( 'admin_enqueue_scripts', [ $this, 'enqueue_scripts' ] );
		add_action( 'wp_enqueue_scripts', [ $this, 'enqueue_scripts' ] );

		// Filter scripts.
		add_filter( 'script_loader_tag', [ $this, 'filter_script' ], 10, 2 );
	}

	/**
	 * Enqueues styles.
	 */
	public function enqueue_styles() {

		// Get styles.
		$styles = hivetheme()->get_config( 'styles' );

		// Filter styles.
		$styles = array_filter(
			$styles,
			function( $style ) {
				return ! is_admin() xor ht\get_array_value( $style, 'admin', false );
			}
		);

		// Enqueue styles.
		foreach ( $styles as $style ) {
			wp_enqueue_style( $style['handle'], $style['src'], ht\get_array_value( $style, 'deps', [] ), ht\get_array_value( $style, 'version', HT_THEME_VERSION ) );
		}
	}

	/**
	 * Enqueues editor styles.
	 */
	public function enqueue_editor_styles() {
		foreach ( hivetheme()->get_config( 'styles' ) as $style ) {
			if ( ht\get_array_value( $style, 'editor', false ) ) {
				add_editor_style( $style['src'] );
			}
		}
	}

	/**
	 * Enqueues scripts.
	 */
	public function enqueue_scripts() {

		// Get scripts.
		$scripts = hivetheme()->get_config( 'scripts' );

		// Filter scripts.
		$scripts = array_filter(
			$scripts,
			function( $script ) {
				return ! is_admin() xor ht\get_array_value( $script, 'admin', false );
			}
		);

		// Enqueue scripts.
		foreach ( $scripts as $script ) {
			wp_enqueue_script( $script['handle'], $script['src'], ht\get_array_value( $script, 'deps', [] ), ht\get_array_value( $script, 'version', HT_THEME_VERSION ), ht\get_array_value( $script, 'in_footer', true ) );

			// Add script data.
			if ( isset( $script['data'] ) ) {
				wp_localize_script( $script['handle'], lcfirst( str_replace( ' ', '', ucwords( str_replace( '-', ' ', $script['handle'] ) ) ) ) . 'Data', $script['data'] );
			}
		}
	}

	/**
	 * Filters script HTML.
	 *
	 * @param string $tag Script tag.
	 * @param string $handle Script handle.
	 * @return string
	 */
	public function filter_script( $tag, $handle ) {

		// Set attributes.
		$atts = [ 'async', 'defer' ];

		foreach ( $atts as $att ) {
			if ( wp_scripts()->get_data( $handle, $att ) ) {
				$tag = str_replace( '></', ' ' . $att . '></', $tag );
			}
		}

		return $tag;
	}
}
