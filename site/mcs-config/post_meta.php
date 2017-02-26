<?php


$config = array();


#_cmb_media_options_

$prefix = '_cmb_media_options_';
$config[] = array(
    'id' => 'metabox_media_options',
    'prefix' => $prefix,
    'title' => 'Media Options',
    'object_types' => array('attachment'), // post type
    'context' => 'side',
    'priority' => 'low',
    'show_names' => true, // Show field names on the left
    'fields' => array(
        array(
            'name' => 'Protected Media?',
            'desc' => 'Select if you would like this file to be protected from deletion',
            'id' => $prefix . 'protected_media',
            'type' => 'select',
            'options' => array(
                'no' => __('No', 'cmb2'),
                'yes' => __('Yes', 'cmb2'),
            ),
        ),
    )
);


#_cmb_photo_gallery_options_

$prefix = '_cmb_photo_gallery_options_';
$config[] = array(
    'id' => 'metabox_photo_gallery_options',
    'prefix' => $prefix,
    'title' => 'Photo Gallery Details',
    'object_types' => array('photo_gallery'), // post type
    'context' => 'normal',
    'priority' => 'low',
    'show_names' => true, // Show field names on the left
    'fields' => array(

        array(
            'name' => 'Description',
            'desc' => 'Type your description for the photo galleries',
            'id' => 'description',
            'type' => 'wysiwyg',
            'options' => array(
                'wpautop' => true,
                'media_buttons' => false,
                'textarea_name' => 'sdfgh',#$editor_id,
                'textarea_rows' => get_option('default_post_edit_rows', 10), // rows="..."
                'tabindex' => '',
                'editor_css' => '',
                'editor_class' => '',
                'teeny' => false,
                'dfw' => false,
                'tinymce' => true,
                'quicktags' => true
            ),
        ),
    )
);


#_cmb_news_article_options_

$prefix = '_cmb_news_article_options_';
$config[] = array(
    'id' => 'metabox_news_article_options',
    'prefix' => $prefix,
    'title' => 'News Article Details',
    'object_types' => array('news_article'), // post type
    'context' => 'normal',
    'priority' => 'low',
    'show_names' => true, // Show field names on the left
    'fields' => array(

        array(
            'name' => 'Featured News Article?',
            'desc' => 'Select if you would like this article to feature on the home page',
            'id' => $prefix . 'featured_news_article',
            'type' => 'select',
            'options' => array(
                'no' => __('No', 'cmb2'),
                'yes' => __('Yes', 'cmb2'),
            ),
        ),

        array(
            'name' => 'Related Galleries',
            'desc' => 'Choose Related Galleries',
            'id' => $prefix . 'related_galleries',
            'type' => 'post_search_text',
            //'sanitization_cb' => 'pw_select2_sanitise',
            'post_type' => 'photo_galleries',
            'select_type' => 'radio',
            'select_behavior' => 'replace',
        ),

    )
);


#_cmb_fighter_details_

$prefix = '_cmb_fighter_details_';
$config[] = array(
    'id' => 'metabox_fighter_details',
    'prefix' => $prefix,
    'title' => 'Fighter Details',
    'object_types' => array('fighter'), // post type
    'context' => 'normal',
    'priority' => 'low',
    'show_names' => true, // Show field names on the left
    'fields' => array(

        array(
            'name' => 'Featured Fighter?',
            'desc' => 'Select if you would like this fighter to appear at the top of lists',
            'id' => $prefix . 'featured_fighter',
            'type' => 'select',
            'options' => array(
                'no' => __('No', 'cmb2'),
                'yes' => __('Yes', 'cmb2'),
            ),
        ),

        array(
            'name' => __('Weight', 'cmb2'),
            'desc' => __('Type weight in kg', 'cmb2'),
            'id' => $prefix . 'weight',
            'type' => 'text',
        ),

        array(
            'name' => __('Height', 'cmb2'),
            'desc' => __('Type height in cm', 'cmb2'),
            'id' => $prefix . 'height',
            'type' => 'text',
        ),

        array(
            'name' => 'Fighting Styles',
            'desc' => 'Select the fighter styles',
            'id' => $prefix . 'fighter_styles',
            'type' => 'pw_multiselect',
            'options' => array(
                'light_continuous' => 'Light Continuous',
                'full_contact' => 'Full Contact',
                'boxing' => 'Boxing',
                'strike_and_grapple' => 'Strike &amp; Grapple',
            ),
        ),

        array(
            'name' => __('Achievements', 'cmb2'),
            'id' => $prefix . 'achievements',
            'type' => 'group',
            'description' => __('Add your achievements below', 'cmb2'),
            'options' => array(
                'group_title' => __('Achievement {#}', 'cmb2'),
                'add_button' => __('Add Another Achievement', 'cmb2'),
                'remove_button' => __('Remove Achievement', 'cmb2'),
                'sortable' => true,
            ),
            'fields' => array(
                array(
                    'name' => __('Achievement', 'cmb2'),
                    'desc' => __('Type in the fighters achievement', 'cmb2'),
                    'id' => 'achievement',
                    'type' => 'text',

                ),
            ),
        ),


        array(
            'name' => 'Current Grade',
            'desc' => 'Choose Current Grade',
            'id' => $prefix . 'current_grade',
            'type' => 'select',
            'show_option_none' => true,
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
$config[] = array(
    'id' => 'metabox_program_options',
    'prefix' => $prefix,
    'title' => 'Program Options',
    'object_types' => array('program'), // post type
    'context' => 'normal',
    'priority' => 'low',
    'show_names' => true, // Show field names on the left

    'fields' => array(

        array(
            'name' => __('Suitable ages', 'cmb2'),
            'desc' => __('Type in the suitable ages for this program', 'cmb2'),
            'id' => $prefix . 'suitable_ages',
            'type' => 'text',
        ),

        array(
            'name' => __('Program Icon Image', 'cmb2'),
            'desc' => __('Upload or add program icon image.', 'cmb2'),
            'id' => $prefix . 'program_icon_image',
            'type' => 'file',
            'preview_size' => array(100, 100),
        ),

        /*array(
            'name' => __('Program Image', 'cmb2'),
            'desc' => __('Upload or add program image.', 'cmb2'),
            'id' => $prefix . 'program_image',
            'type' => 'file',
            'preview_size' => array(100, 100),
        ),*/


        array(
            'name' => __('Classes', 'cmb2'),
            'id' => $prefix . 'classes',
            'type' => 'group',
            'description' => __('Add the classes below', 'cmb2'),
            'options' => array(
                'group_title' => __('Class {#}', 'cmb2'),
                'add_button' => __('Add Another Class', 'cmb2'),
                'remove_button' => __('Remove Class', 'cmb2'),
                'sortable' => true,
            ),

            'fields' => array(

                array(
                    'name' => 'Day',
                    'desc' => 'Select a day',
                    'id' => 'day_of_week',
                    'type' => 'select',
                    'show_option_none' => false,
                    'default' => 'monday',
                    'options' => array(
                        'monday' => __('Monday', 'cmb2'),
                        'tuesday' => __('Tuesday', 'cmb2'),
                        'wednesday' => __('Wednesday', 'cmb2'),
                        'thursday' => __('Thursday', 'cmb2'),
                        'friday' => __('Friday', 'cmb2'),
                        'saturday' => __('Saturday', 'cmb2'),
                        'sunday' => __('Sunday', 'cmb2'),
                    ),
                ),

                array(
                    'name' => 'Start Time',
                    'id' => 'start_ime',
                    'type' => 'text_time'
                    // 'time_format' => 'h:i:s A',
                ),

                array(
                    'name' => 'Finish Time',
                    'id' => 'finish_time',
                    'type' => 'text_time'
                    // 'time_format' => 'h:i:s A',
                ),


            ),
        ),


    )

);

/*
$prefix = '_cmb_test_meta_field_types_';
$config[] = array(
    'id' => 'metabox_cmb_test_meta_field_types',
    'prefix' => $prefix,
    'title' => 'Test Meta Field Types',
    'object_types' => array('coach'), // post type
    'context' => 'normal',
    'priority' => 'low',
    'show_names' => true, // Show field names on the left
    'fields' => array(

        array(
            'name' => __('test-text', 'cmb2'),
            'id' => $prefix . 'test-text',
            'type' => 'text',
        ),

        array(
            'name' => 'CMB2_RGBa_Picker',
            'id' => $prefix . 'CMB2_RGBa_Picker',
            'type' => 'rgba_colorpicker',
            'options' => array(
                'test1' => 'Test 1',
                'test2' => 'Test 2',
                'test3' => 'Test 3',
                'test4' => 'Test 4',
            ),
        ),

        array(
            'name' => __('CMB2-User-Search-field', 'cmb2'),
            'id' => $prefix . 'CMB2-User-Search-field',
            'type' => 'user_search_text',
            //'roles' => array( 'administrator', 'author', 'editor' )
        ),

        array(
            'name' => __('CMB2-Date-Range-Field', 'cmb2'),
            'id' => $prefix . 'CMB2-Date-Range-Field',
            'type' => 'date_range',
        ),

        array(
            'name' => __('cmb2-field-slider', 'cmb2'),
            'id' => $prefix . 'cmb2-field-slider',
            'type'        => 'own_slider',
            'min'         => '0',
            'max'         => '200',
            'step'        => '5',
            'default'     => '0', // start value
            'value_label' => 'Value:',
        ),


        array(
            'name'        => __( 'Related post' ),
            'id'          => 'prefix_related_post',
            'type'        => 'post_search_text', // This field type
            // post type also as array
            'post_type'   => ['post', 'fighter'],
            // Default is 'checkbox', used in the modal view to select the post type
            'select_type' => 'radio',
            // Will replace any selection with selection from modal. Default is 'add'
            'select_behavior' => 'replace',
        ),

        array(
            'name'    => 'pw_multiselect',
            'id'      => $prefix . 'pw_multiselect',
            'type'    => 'pw_multiselect',
            'options' => array(
                'flour'  => 'Flour',
                'salt'   => 'Salt',
                'eggs'   => 'Eggs',
                'milk'   => 'Milk',
                'butter' => 'Butter',
            ),
        ),

        array(
            'name' => 'Gallery Images',
            'desc' => 'Upload and manage gallery images',
            'button' => 'Manage gallery', // Optionally set button label
            'id'   => $prefix . 'gallery_images',
            'type' => 'pw_gallery',
            'sanitization_cb' => 'pw_gallery_field_sanitise',
        ),

    )

);*/


return $config;