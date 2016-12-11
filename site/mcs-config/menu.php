<?php

$config = array(

	'menus' => array(

		'locations' => array(
			'footer-menu-location' => __( 'Footer Menu Location' ),
		),

		'menus' => array(
			'main-menu' => array(
				'name'=>__( 'Main Menu' ),
				'location'=>__( 'primary_navigation' ),
			),
			'footer-menu' => array(
				'name' => __( 'Footer Menu' ),
				'location' => __( 'footer-menu-location' ),
			),							

		)

	),

	'main_menu_id' => 13,
	'main_menu_name' => 'Main Menu',
);

return $config;
