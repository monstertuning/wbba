<?php

namespace App;

use Sober\Controller\Controller;
use MedusaContentSuite\Config\Globals as McsGlobals;
use MedusaContentSuite\CMB\Meta\PostMeta as McsMeta;
use MedusaContentSuite\Helpers as Helpers;
use MedusaContentSuite\Config\Menus;


class Base extends Controller
{
    protected $programs = null;
    protected $menu = null;
    protected $companyInfo = null;

    public function __construct()
    {
        parent::__construct();
        $this->setCompanyInfo();
    }




    /**
     * @return array
     */
    public function programs()
    {
        if(null == $this->programs)
            $this->programs = $this->setPrograms();
        return $this->programs;
    }


    /**
     * @return array
     */
    public function primary_menu()
    {
        if(null == $this->menu)
            $this->menu = $this->setMenu();
        return $this->menu;
    }


    /**
     * @return array
     */
    public function company_info()
    {
        if(null == $this->companyInfo)
            $this->companyInfo = $this->setCompanyInfo();
        return $this->companyInfo;
    }


    public function title()
    {
        return $this->getHelpers()->mmcTitle();
    }


    protected function setMenu()
    {
        $bs4NavWalker = Menus::getBs4NavWalker();
        require_once ($bs4NavWalker);

        ob_start( );

        wp_nav_menu( array(
                'menu_id'           => 'main-menu',
                'menu'              => 'main-menu',
                'theme_location'    => 'primary_navigation',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'navbar-collapse ',
                'container_id'      => '',
                'menu_class'        => 'nav navbar-nav ',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new \wp_bootstrap_navwalker())
        );

        return ob_get_clean( );
    }


    protected function setPrograms()
    {
        $args = array(
            'posts_per_page'   => 10,
            'offset'           => 0,
            'category'         => '',
            'category_name'    => '',
            'orderby'          => 'date',
            'order'            => 'DESC',
            'include'          => '',
            'exclude'          => '',
            'meta_key'         => '',
            'meta_value'       => '',
            'post_type'        => 'program',
            'post_mime_type'   => '',
            'post_parent'      => '',
            'author'	   => '',
            'author_name'	   => '',
            'post_status'      => 'publish',
            'suppress_filters' => true,

        );

        $programs = get_posts( $args );
        $programs2 = [];

        $x = 0;
        foreach ( $programs as $program ){

            //$test = new McsMeta;
            //$key = $test->formatKey("_cmb_program_options__cmb_program_options_program_icon_image_id", 'program');

            $programs2[$x]['id'] = $program->ID;
            $programs2[$x]['title'] = $program->post_title;
            $programs2[$x]['link'] = get_permalink( $program->ID );

            $iconId = get_post_meta($program->ID, '_cmb_program_options__cmb_program_options_program_icon_image_id', true);

            $programs2[$x]['image'] = wp_get_attachment_image(
                $iconId,
                array( 150, 150),
                false,
                array( "class" => "img-fluid" )
            );

            $programs2[$x]['ages'] = get_post_meta( $program->ID, '_cmb_program_options__cmb_program_options_suitable_ages', true) . ' years';

            $x++;
        }

        return $programs2;
    }


    protected function setCompanyInfo()
    {
        $attr = array(
            'class' => 'image img-fluid',
            'alt'   => 'vvvvvvvvvvv',
            'title'   => 'vvvvvvvvvvv',
        );

        $mmcData = get_option('mmc');
        $headerImgId = attachment_url_to_postid( $mmcData['company_logo'] );
        $companyBgImgId = attachment_url_to_postid( $mmcData['company_bg_image'] );

        $data['site_logo'] = wp_get_attachment_image( $headerImgId, 'thumb-width-400', false,  $attr );
        $data['bg_image'] = wp_get_attachment_image_url( $companyBgImgId, '' );
        $data['social_links'] = $mmcData['social_media_setting'];
        $data['site_description'] = get_bloginfo('description');
        $data['site_title'] = get_bloginfo('name');
        $data['site_url'] = get_bloginfo('url');
        $data['phone1'] = $mmcData['phone1'];
        $data['phone2'] = $mmcData['phone2'];
        $data['email'] = $mmcData['email'];
        $data['company_name'] = $mmcData['company_name'];
        $data['company_address']['address1'] = $mmcData['address1'];
        $data['company_address']['address2'] = $mmcData['address2'];
        //$data['company_address']['address3'] = $mmcData['address3'];
        $data['company_address']['town_city'] = $mmcData['town_city'];
        $data['company_address']['postcode'] = $mmcData['postcode'];

        $address_str = "";

        foreach( $data['company_address'] as $ca ) :
            if( ! empty( $ca ) ) :
                $address_str .= $ca . ', ';
            endif;
        endforeach;

        $address_str = substr( $address_str, 0, strlen( $address_str ) -2 );
        $address_str .= ' Tel: ' . $data['phone1'];
        $data['address_str'] = $address_str;

        return $data;
    }


    protected function getMcsGlobals()
    {
        return new McsGlobals;
    }


    protected function getHelpers()
    {
        return new Helpers;
    }
}
