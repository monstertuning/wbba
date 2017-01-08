<?php


function add_to_context( $data ) {

    global $post;

    require_once('wp_bootstrap_navwalker.php');


    // Overrides / Fixes for default WordPress functions for use in Twig templates

    #$data['header_menu'] = get_the_widget( 'Medusa_Widgets_Menu', 'menu_src=menu&menu_location=main-menu-location&classes=navbar-nav, nav&id=nav&container_classes=navbar-collapse,collapse ' );
    #$data['footer_menu'] = get_the_widget( 'Medusa_Widgets_Menu', 'menu_src=menu&menu_location=footer-menu-location' );

    #needs if post is available

    $attr = array(
        'class' => 'image img-responsive',
        'alt'   => 'Leicester College Blogs',
        'title'   => 'Leicester College Blogs',
    );

    $headerImgId = attachment_url_to_postid( get_theme_mod( 'sage-timber-wbba-logo' ) );
    $footerImgId = attachment_url_to_postid( get_theme_mod( 'sage-timber-wbba-bg-image' ) );

    $data['site_logo'] = wp_get_attachment_image( $headerImgId, '', false,  $attr );
    $data['bg_image'] = wp_get_attachment_image( $footerImgId, '', false,  $attr );

    require_once( 'wp_bootstrap_navwalker.php' );

    ob_start( );

    wp_nav_menu( array(
            'menu'              => 'main-menu',
            'theme_location'    => 'primary_navigation',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'navbar-collapse',
            'container_id'      => '',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
            'walker'            => new \wp_bootstrap_navwalker())
    );

    $data['primary_menu'] = ob_get_clean( );

    $args = array(
        'posts_per_page' => -1,
        'post_type' => 'program',
    );

    $programs = query_posts( $args );

    wp_reset_query( );

    wp_reset_postdata();

    $programs_left = [];
    $programs_right = [];
    $x = 0;

    if( ! empty( $programs ) ) :

        foreach( $programs as $p ) {

            if ($x < 4) {
                if (has_post_thumbnail($p->ID)) {
                    $programs_left[$x]['title'] = $p->post_title;
                    $programs_left[$x]['link'] = $p->guid;
                    $programs_left[$x]['image'] = get_the_post_thumbnail($p->ID, '400square');
                    $programs_left[$x]['ages'] = get_post_meta($p->ID, '_cmb_program_options_suitable_ages', true);
                    $x++;
                }
            } elseif($x >= 4 && $x < 8) {
                if (has_post_thumbnail($p->ID)) {
                    $programs_right[$x]['title'] = $p->post_title;
                    $programs_right[$x]['link'] = $p->guid;
                    $programs_right[$x]['image'] = get_the_post_thumbnail($p->ID, '400square');
                    $programs_right[$x]['ages'] = get_post_meta($p->ID, '_cmb_program_options_suitable_ages', true);
                    $x++;
                }

            }

        }

        $data['programs_left'] = $programs_left;
        $data['programs_right'] = $programs_right;

    endif;




    $social_links = get_theme_mod( 'social_media_setting', '' );
    $data['social_links'] = $social_links;

    $tagline = get_option( 'blogdescription' );
    $data['tagline'] = $tagline;

    $phone1 = get_theme_mod( 'phone1', '' );
    $data['phone1'] = $phone1;

    $phone2 = get_theme_mod( 'phone2', '' );
    $data['phone2'] = $phone2;

    $email = get_theme_mod( 'email', '' );
    $data['email'] = $email;




    $company_address['company_name'] = get_theme_mod( 'company_name', '' );
    $data['company_address']['company_name'] = $company_address['company_name'];

    $company_address['address1'] = get_theme_mod( 'address1', '' );
    $data['company_address']['address1'] = $company_address['address1'];

    $company_address['address2'] = get_theme_mod( 'address2', '' );
    $data['company_address']['address2'] = $company_address['address2'];

    $company_address['address3'] = get_theme_mod( 'address3', '' );
    $data['company_address']['address3'] = $company_address['address3'];

    $company_address['town_city'] = get_theme_mod( 'town_city', '' );
    $data['company_address']['town_city'] = $company_address['town_city'];

    $company_address['postcode'] = get_theme_mod( 'postcode', '' );
    $data['company_address']['postcode'] = $company_address['postcode'];



    $address_str = "";

    foreach( $company_address as $ca ) :
        if( ! empty( $ca ) ) :
            $address_str .= $ca . ', ';
        endif;
    endforeach;

    $address_str = substr( $address_str, 0, strlen( $address_str ) -2 );

    $address_str .= ' Tel: ' . $phone1;

    $data['address_str'] = $address_str;


    return $data;

}

add_filter( 'timber_context',  'add_to_context' );


