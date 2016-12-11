<?php


$config = array();




	#_cmb_media_options_

		$prefix = '_cmb_media_options_';
		$config[]=array(
			'id' => 'metabox_media_options',
			'prefix' => $prefix,
			'title' => 'Media Options',
			'object_types' => array( 'attachment' ), // post type
			'context' => 'normal',
			'priority' => 'low',
			'show_names' => true, // Show field names on the left
			'fields' => array(
				array(
					'name' => 'Protected Media?',
					'desc' => 'Select if you would like this file to be protected from deletion',
					'id' => $prefix . 'protected_media',
					'type'    => 'select',
					'options' => array(
						'no' => __( 'No', 'cmb2' ),
						'yes'   => __( 'Yes', 'cmb2' ),
					),
				),
			)
		);







	#_cmb_news_article_options_

		$prefix = '_cmb_news_article_options_';
		$config[]=array(
			'id' => 'metabox_news_article_options',
			'prefix' => $prefix,
			'title' => 'News Article Details',
			'object_types' => array( 'news_articles' ), // post type
			'context' => 'normal',
			'priority' => 'low',
			'show_names' => true, // Show field names on the left
			'fields' => array(

				array(
					'name' => 'Featured News Article?',
					'desc' => 'Select if you would like this article to feature on the home page',
					'id' => $prefix . 'featured_news_article',
					'type'    => 'select',
					'options' => array(
						'no' => __( 'No', 'cmb2' ),
						'yes'   => __( 'Yes', 'cmb2' ),
					),
				),
			)
		);





	#_cmb_fighter_details_

		$prefix = '_cmb_fighter_details_';
		$config[]=array(
			'id' => 'metabox_fighter_details',
			'prefix' => $prefix,
			'title' => 'Fighter Details',
			'object_types' => array( 'fighters' ), // post type
			'context' => 'normal',
			'priority' => 'low',
			'show_names' => true, // Show field names on the left
			'fields' => array(

				array(
					'name' => 'Featured Fighter?',
					'desc' => 'Select if you would like this fighter to appear at the top of lists',
					'id' => $prefix . 'featured_fighter',
					'type'    => 'select',
					'options' => array(
						'no' => __( 'No', 'cmb2' ),
						'yes'   => __( 'Yes', 'cmb2' ),
					),
				),

				array(
					'name' => __( 'Weight', 'cmb2' ),
					'desc' => __( 'Type weight in kg', 'cmb2' ),
					'id' => $prefix . 'weight',
					'type'    => 'text',	
				),

				array(
					'name' => __( 'Height', 'cmb2' ),
					'desc' => __( 'Type height in cm', 'cmb2' ),
					'id' => $prefix . 'height',
					'type'    => 'text',	
				),

				array(
				    'name'     => 'Fighting Styles',
				    'desc'     => 'Select the fighter styles',
				    'id' 	   => $prefix . 'fighter_styles',
				    'type'     => 'pw_multiselect',
				    'options' => array(
				        'light_continous' => 'Light Continous',
				        'full_contact' => 'Full Contact',
				        'boxing' => 'Boxing',
				        'strike_and_grapple' => 'Strike &amp; Grapple',
				    ),
				),

				array(
					'name' => __( 'Achievements', 'cmb2' ),
					'id'          => $prefix . 'achievements',
					'type'        => 'group',
					'description' => __( 'Add your achievements below', 'cmb2' ),
					'options'     => array(
						'group_title'   => __( 'Achievement {#}', 'cmb2' ), 
						'add_button'    => __( 'Add Another Achievement', 'cmb2' ),
						'remove_button' => __( 'Remove Achievement', 'cmb2' ),
						'sortable'      => true,
					),
					'fields'  => array(
						array(
							'name' => __( 'Achievement', 'cmb2' ),
							'desc' => __( 'Type in the fighters achievment', 'cmb2' ),
							'id' => $prefix . 'achievement',
							'type'    => 'text',
			
						),
					),
				),


				array(
					'name' => 'Current Grade',
					'desc' => 'Choose Current Grade',
					'id' => $prefix . 'current_grade',
					'type' => 'select',
					'options' => array(
						'white_belt' => __('White Belt'),
						'blue_belt' => __('Blue Belt'),
						'blue_stripe' => __('Blue Stripe'),
						'green_stripe' => __('Green Stripe'),
						'red_belt' => __('Red Belt'),
						'brown_belt' => __('Brown Belt'),
						'black_belt' => __('Black Belt'),
						'black_belt_1st_dan' => __('Black Belt 1st Dan'),
						'black_belt_2nd_dan' => __('Black Belt 2nd Dan'),

					),
				    'select_type' => 'radio',
				    //'sanitization_cb' => 'pw_select2_sanitise',
				),









			)

		);





	#_cmb_program_options_

		$prefix = '_cmb_program_options_';
		$config[]=array(
			'id' => 'metabox_program_options',
			'prefix' => $prefix,
			'title' => 'Program Options',
			'object_types' => array( 'programs' ), // post type
			'context' => 'normal',
			'priority' => 'low',
			'show_names' => true, // Show field names on the left

			'fields' => array(

				array(
					'name' => __( 'Suitable ages', 'cmb2' ),
					'desc' => __( 'Type in the suitable ages for this program', 'cmb2' ),
					'id' => $prefix . 'suitable_ages',
					'type'    => 'text',	
				),

				array(
					'name'         => __( 'Program Icon Image', 'cmb2' ),
					'desc'         => __( 'Upload or add program icon image.', 'cmb2' ),
					'id'           => $prefix . 'program_icon_image',
					'type'         => 'file',
					'preview_size' => array( 100, 100 ),
				),

				array(
					'name'         => __( 'Program Image', 'cmb2' ),
					'desc'         => __( 'Upload or add program image.', 'cmb2' ),
					'id'           => $prefix . 'program_image',
					'type'         => 'file',
					'preview_size' => array( 100, 100 ),
				),


				array(
					'name' => __( 'Classes', 'cmb2' ),
					'id'          => $prefix . 'classes',
					'type'        => 'group',
					'description' => __( 'Add the classes below', 'cmb2' ),
					'options'     => array(
						'group_title'   => __( 'Class {#}', 'cmb2' ), 
						'add_button'    => __( 'Add Another Class', 'cmb2' ),
						'remove_button' => __( 'Remove Class', 'cmb2' ),
						'sortable'      => true,
					),

					'fields'  => array(

						array(
						    'name'             => 'Day',
						    'desc'             => 'Select a day',
						    'id'               => $prefix . 'day_of_week',
						    'type'             => 'select',
						    'show_option_none' => false,
						    'default'          => 'monday',
						    'options'          => array(
						        'monday' => __( 'Monday', 'cmb2' ),
						        'tuesday'   => __( 'Tuesday', 'cmb2' ),
						        'wednesday'     => __( 'Wednesday', 'cmb2' ),
						        'thursday'     => __( 'Thursday', 'cmb2' ),
						        'friday'     => __( 'Friday', 'cmb2' ),
						        'saturday'     => __( 'Saturday', 'cmb2' ),
						        'sunday'     => __( 'Sunday', 'cmb2' ),
						    ),
						),

						array(
							'name' => 'Start Time',
							'id' => $prefix . 'start_ime',
							'type' => 'text_time'
							// 'time_format' => 'h:i:s A',
						),
						
						array(
							'name' => 'Finish Time',
							'id' => $prefix . 'finish_time',
							'type' => 'text_time'
							// 'time_format' => 'h:i:s A',
						),



					),
				),


			)

		);


return $config;