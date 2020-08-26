<?php
/**
 * Theme mods configuration.
 *
 * @package HiveTheme\Configs
 */
// todo.
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

return [
	'colors'       => [
		'fields' => [
			'primary_color'   => [
				'default' => '#ffc107',
			],

			'secondary_color' => [
				'default' => '#15cd72',
			],
		],
	],

	'fonts'        => [
		'fields' => [
			'heading_font' => [
				'default' => 'Poppins:500',
			],

			'body_font'    => [
				'default' => 'Open Sans:400,600',
			],
		],
	],

	'header_image' => [
		'fields' => [
			'header_image_parallax' => [
				'label'   => esc_html__( 'Enable parallax effect', 'listinghive' ),
				'type'    => 'checkbox',
				'default' => true,
			],
		],
	],
];
