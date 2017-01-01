<?php

namespace Roots\Sage\Customizer;

use Roots\Sage\Assets;

/**
 * Add postMessage support
 */
function customize_register($wp_customize) {
  $wp_customize->get_setting('blogname')->transport = 'postMessage';
}
add_action('customize_register', __NAMESPACE__ . '\\customize_register');

/**
 * Customizer JS
 */
function customize_preview_js() {
  wp_enqueue_script('sage/customizer', Assets\asset_path('scripts/customizer.js'), ['customize-preview'], null, true);
}
add_action('customize_preview_init', __NAMESPACE__ . '\\customize_preview_js');





function customizer_images( $wp_customize ) {

  $wp_customize->add_section( 'sage-timber-wbba-logo-section' , array(
      'title'       => __( 'Media', 'sage-timber-wbba' ),
      'priority'    => 30,
      'description' => 'Upload a logo to replace the default site name and description in the header',
  ) );
  
  $wp_customize->add_setting( 'sage-timber-wbba-logo' );
  $wp_customize->add_setting( 'sage-timber-wbba-bg-image' );

  $wp_customize->add_control( 

    new \WP_Customize_Image_Control(

      $wp_customize, 'sage-timber-wbba-logo', 
      array(
        'label'    => __( 'Logo', 'sage-timber-wbba' ),
        'section'  => 'sage-timber-wbba-logo-section',
        'settings' => 'sage-timber-wbba-logo',
      )
    )
  );

  $wp_customize->add_control( 

    new \WP_Customize_Image_Control(

      $wp_customize, 'sage-timber-wbba-bg-image', 
      array(
        'label'    => __( 'Background Image', 'sage-timber-wbba' ),
        'section'  => 'sage-timber-wbba-logo-section',
        'settings' => 'sage-timber-wbba-bg-image',
      ) 
    ) 
    
  );

}

add_action( 'customize_register', __NAMESPACE__ . '\\customizer_images' );




function customizer_company_info_config( ) {

  \Kirki::add_config( 'company_info_config', array(
    'capability'    => 'edit_theme_options',
    'option_type'   => 'theme_mod',
  ) );

  \Kirki::add_panel( 'company_info_panel', array(
      'priority'    => 10,
      'title'       => __( 'Company Info', 'textdomain' ),
      //'description' => __( 'Company address & contact info', 'textdomain' ),
  ) );
}

add_action( 'customize_register', __NAMESPACE__ . '\\customizer_company_info_config' );




function customizer_company_address_section( ) {

  \Kirki::add_section( 'company_address_section', array(
      'title'          => __( 'Address' ),
      //'description'    => __( 'Fill out the company address' ),
      'panel'          => 'company_info_panel', // Not typically needed.
      'priority'       => 5,
      'capability'     => 'edit_theme_options',
      'theme_supports' => '', // Rarely needed.
  ) );

  \Kirki::add_field( 'company_info_config', array(
    'type'     => 'text',
    'settings' => 'company_name',
    'label'    => __( 'Company Name', 'my_textdomain' ),
    'section'  => 'company_address_section',
    'default'  => esc_attr__(''),
    'priority' => 10,
  ) );

  \Kirki::add_field( 'company_info_config', array(
    'type'     => 'text',
    'settings' => 'address1',
    'label'    => __( 'Address 1', 'my_textdomain' ),
    'section'  => 'company_address_section',
    'default'  => esc_attr__(''),
    'priority' => 10,
  ) );

  \Kirki::add_field( 'company_info_config', array(
    'type'     => 'text',
    'settings' => 'address2',
    'label'    => __( 'Address 2', 'my_textdomain' ),
    'section'  => 'company_address_section',
    'default'  => esc_attr__(''),
    'priority' => 10,
  ) );

  \Kirki::add_field( 'company_info_config', array(
    'type'     => 'text',
    'settings' => 'address3',
    'label'    => __( 'Address 3', 'my_textdomain' ),
    'section'  => 'company_address_section',
    'default'  => esc_attr__(''),
    'priority' => 10,
  ) );

  \Kirki::add_field( 'company_info_config', array(
    'type'     => 'text',
    'settings' => 'town_city',
    'label'    => __( 'Town / City', 'my_textdomain' ),
    'section'  => 'company_address_section',
    'default'  => esc_attr__(''),
    'priority' => 10,
  ) );

  \Kirki::add_field( 'company_info_config', array(
    'type'     => 'text',
    'settings' => 'postcode',
    'label'    => __( 'Postcode', 'my_textdomain' ),
    'section'  => 'company_address_section',
    'default'  => esc_attr__(''),
    'priority' => 10,
  ) );

}

add_action( 'customize_register', __NAMESPACE__ . '\\customizer_company_address_section' );



function customizer_company_contact_section( ) {

  \Kirki::add_section( 'company_contact_section', array(
      'title'          => __( 'Contact Details' ),
      //'description'    => __( 'Fill out the company address' ),
      'panel'          => 'company_info_panel', // Not typically needed.
      'priority'       => 5,
      'capability'     => 'edit_theme_options',
      'theme_supports' => '', // Rarely needed.
  ) );

  \Kirki::add_field( 'company_info_config', array(
    'type'     => 'text',
    'settings' => 'phone1',
    'label'    => __( 'Phone 1', 'my_textdomain' ),
    'section'  => 'company_contact_section',
    'default'  => esc_attr__(''),
    'priority' => 10,
  ) );

  \Kirki::add_field( 'company_info_config', array(
    'type'     => 'text',
    'settings' => 'phone2',
    'label'    => __( 'Phone 2', 'my_textdomain' ),
    'section'  => 'company_contact_section',
    'default'  => esc_attr__(''),
    'priority' => 10,
  ) );

  \Kirki::add_field( 'company_info_config', array(
    'type'     => 'text',
    'settings' => 'email',
    'label'    => __( 'Email', 'my_textdomain' ),
    'section'  => 'company_contact_section',
    'default'  => esc_attr__(''),
    'priority' => 10,
  ) );


}

add_action( 'customize_register', __NAMESPACE__ . '\\customizer_company_contact_section' );



function customizer_social_media_section( ){

  \Kirki::add_section( 'social_media_section', array(
      'title'          => __( 'Social Media Links' ),
      //'description'    => __( 'Add your' ),
      'panel'          => 'company_info_panel', // Not typically needed.
      'priority'       => 10,
      'capability'     => 'edit_theme_options',
      'theme_supports' => '', // Rarely needed.
  ) );


  \Kirki::add_field( 'company_info_config', array(
    'type'        => 'repeater',
    'label'       => esc_attr__( 'Social Media Accounts', 'my_textdomain' ),
    'section'     => 'social_media_section',
    'priority'    => 1,
    'settings'    => 'social_media_setting',
    /*'default'     => array(
      array(
        'link_text' => esc_attr__( 'Facebook', 'my_textdomain' ),
        'link_url'  => 'https://aristath.github.io/kirki/',
      ),
      array(
        'link_text' => esc_attr__( 'Kirki Repository', 'my_textdomain' ),
        'link_url'  => 'https://github.com/aristath/kirki',
      ),
    ),*/
    'fields' => array(
      'link_text' => array(
        'type'        => 'text',
        'label'       => esc_attr__( 'Social Media Name' ),
        'description' => esc_attr__( 'For e.g. Facebook' ),
        'default'     => '',
      ),
      'link_url' => array(
        'type'        => 'text',
        'label'       => esc_attr__( 'Account URL', 'my_textdomain' ),
        'description' => esc_attr__( 'Use full address including https://...'),
        'default'     => '',
      ),
      'css_classes' => array(
        'type'        => 'text',
        'label'       => esc_attr__( 'CSS Classes', 'my_textdomain' ),
        'description' => esc_attr__( 'For e.g. font awesome uses fa fa-facebook '),
        'default'     => '',
      ),
    ),
    'row_label'     => array(
      'type'          => 'field',
      'value'         => 'Social Media Link',
      'field'         => 'section_header',
    ),
    'choices' => array(
      'limit' => 5
    ),
  ) 
  );


}


add_action( 'customize_register', __NAMESPACE__ . '\\customizer_social_media_section' );

