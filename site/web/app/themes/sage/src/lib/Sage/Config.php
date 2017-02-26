<?php

namespace Roots\Sage;

use \Illuminate\Config\Repository;
use MedusaContentSuite\Config\Globals as McsGlobals;
use MedusaContentSuite\CMB\Meta\PostMeta;
use MedusaContentSuite\Config\Menus;

class Config extends Repository
{
    protected $postTypes = [];

    public function __construct()
    {
        parent::__construct();
        $postTypes = $this->getMcsGlobals()->getPostConfig();
        $this->setPostTypes($postTypes);
        $this->addGlobalClass();
        add_filter('sage/template/global/data', array($this, 'globalData'));
        add_filter('wp', array($this, 'addClasses'));
    }

    public function addClasses(){
        global $post;

        $pt = get_post_type($post);

        $tag = 'sage/template/post-type-archive-'.$pt.'/data';
        add_filter( $tag, array($this, 'ptArchiveData' ) );

        $tag = 'sage/template/single-'.$pt.'/data';
        add_filter( $tag, array($this, 'ptSingleData' ) );

        $tag = 'sage/template/page/data';
        add_filter( $tag, array($this, 'ptSingleData' ) );
    }

    public function addGlobalClass()
    {
        add_filter( 'body_class', function ( $classes ) {
            $classes[] = 'global';
            return $classes;
        } );
    }

    public function globalData( $data )
    {
        /**
         * @todo
         * see extras2.php
         * menu, header image, footer image, bg image, programs, contact details, address
         *
         */

        $bs4NavWalker = Menus::getBs4NavWalker();
        require_once ($bs4NavWalker);

        ob_start( );

        wp_nav_menu( array(
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

        $data['primary_menu'] = ob_get_clean( );

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
            'suppress_filters' => true
        );

        $programs = get_posts( $args );
        $programs2 = [];

        $x = 0;
        foreach ( $programs as $program ){
            $programs2[$x]['id'] = $program->ID;
            $programs2[$x]['title'] = $program->post_title;
            $programs2[$x]['link'] = get_permalink( $program->ID );

            $programs2[$x]['image'] = get_the_post_thumbnail(
                $program->ID,
                array( 120, 120),
                array( "class" => "img-responsive" )
            );

            $programs2[$x]['ages'] = get_post_meta( $program->ID, '_cmb_program_options__cmb_program_options_suitable_ages', true);

            $x++;
        }

        $data['programs'] = $programs2;

        $attr = array(
            'class' => 'image img-responsive',
            'alt'   => 'vvvvvvvvvvv',
            'title'   => 'vvvvvvvvvvv',
        );

        $mmcData = get_option('mmc');

        $headerImgId = attachment_url_to_postid( $mmcData['company_logo'] );
        $footerImgId = attachment_url_to_postid( get_theme_mod( 'wbba-bg-image' ) );

        $data['site_logo'] = wp_get_attachment_image( $headerImgId, 'thumb-width-400', false,  $attr );
        $data['bg_image'] = wp_get_attachment_image( $footerImgId, '', false,  $attr );

        $data['social_links'] = $mmcData['social_media_setting'];
        $data['tagline'] = get_bloginfo('description');
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

    public function ptSingleData( $data )
    {
        //$metaTest =  get_post_meta($post->ID);
        $pt = get_post_type();
        //$metaBoxTitle = PostMeta::getPostMetaBoxIdByPostType($pt);
        $postMeta = new PostMeta;
        $metaFieldKeysAndTypes = $postMeta->getPostMetaFieldKeysAndTypeByPostType($pt);
        $meta = $postMeta->getPostMetaFieldValuesFromKeys($metaFieldKeysAndTypes, $pt);
        //$terms = get_terms();

        $data['meta'] = (isset($meta) ? $meta : null);
        #$post = get_post();
        //$data['featured_image'] = get_the_post_thumbnail( get_post());

        return $data;
    }


    public function ptArchiveData( $data )
    {
        $pt = get_post_type();

        //$data['pt_archive_title'] = $pt_archive_title;
        
        return $data;
    }


    /**
     * @return array
     */
    public function getPostTypes(): array
    {
        return $this->postTypes;
    }

    /**
     * @param array $postTypes
     * @return Config
     */
    public function setPostTypes(array $postTypes): Config
    {
        $this->postTypes = $postTypes;
        return $this;
    }


    protected function getMcsGlobals()
    {
        return new McsGlobals;
    }

}
