<?php
/**
 * Theme mods configuration.
 *
 * @package HiveTheme\Configs
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

return [
	'title_tagline' => [
		'fields' => [
			'copyright_notice' => [
				'label' => esc_html__( 'Copyright Notice', 'listinghive' ),
				'type'  => 'textarea',
			],
		],
	],

	'colors'        => [
		'title'  => esc_html__( 'Colors', 'listinghive' ),

		'fields' => [
			'primary_color'   => [
				'label'   => esc_html__( 'Primary Color', 'listinghive' ),
				'type'    => 'color',
				'default' => '#ffc107',
			],

			'secondary_color' => [
				'label'   => esc_html__( 'Secondary Color', 'listinghive' ),
				'type'    => 'color',
				'default' => '#15cd72',
			],
		],
	],

	'fonts'         => [
		'title'  => esc_html__( 'Fonts', 'listinghive' ),

		'fields' => [
			'heading_font' => [
				'label'   => esc_html__( 'Heading Font', 'listinghive' ),
				'type'    => 'font',
				'default' => 'Poppins:500',
			],

			'body_font'    => [
				'label'   => esc_html__( 'Body Font', 'listinghive' ),
				'type'    => 'font',
				'default' => 'Open Sans:400,600',
			],
		],
	],
];
