<?php

namespace Roots\Sage;

use \Illuminate\Config\Repository;
use MedusaContentSuite\Config\Globals as McsGlobals;
use MedusaContentSuite\CMB\Meta\PostMeta;

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
        add_filter('wp', array($this, 'initPostData'));
    }

    public function initPostData(){
        global $post;
        //$postTypes = $this->getPostTypes();
        $pt = get_post_type($post);
        $tag = 'sage/template/single-'.$pt.'/data';
        add_filter( $tag, array($this, 'ptData' ) );

        $tag = 'sage/template/page/data';
        add_filter( $tag, array($this, 'ptData' ) );
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
                array( 100, 100),
                array( "class" => "img-responsive" )
            );

            $programs2[$x]['ages'] = get_post_meta( $program->ID, '_cmb_program_options__cmb_program_options_suitable_ages', true);

            $x++;
        }

        $data['programs'] = $programs2;
        //$data['simon'] = 'beasley';
        return $data;
    }

    public function ptData( $data )
    {
        //$metaTest =  get_post_meta($post->ID);
        $pt = get_post_type();
        //$metaBoxTitle = PostMeta::getPostMetaBoxIdByPostType($pt);
        $postMeta = new PostMeta;
        $metaFieldKeysAndTypes = $postMeta->getPostMetaFieldKeysAndTypeByPostType($pt);
        $meta = $postMeta->getPostMetaFieldValuesFromKeys($metaFieldKeysAndTypes, $pt);
        //$terms = get_terms();c

        $data['meta'] = (isset($meta) ? $meta : null);

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
