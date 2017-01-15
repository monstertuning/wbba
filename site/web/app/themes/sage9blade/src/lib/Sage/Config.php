<?php

namespace Roots\Sage;

use \Illuminate\Config\Repository;
use MedusaContentSuite\Config\Globals as McsGlobals;

class Config extends Repository
{
    protected $postTypes = [];

    public function __construct()
    {
        parent::__construct();
        $postTypes = McsGlobals::getPostConfigStatic();
        $postMeta = McsGlobals::getPostMetaConfigStatic();
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

        $data['my_global'] = 'Hi';
        //$data['simon'] = 'beasley';
        return $data;
    }

    public function ptData( $data )
    {
        $pt = get_post_type();
        $metaBoxTitle = McsGlobals::getPostMetaBoxIdByPostType($pt);
        $metaPrefix = McsGlobals::getPostMetaPrefixByPostType($pt);
        $metaFieldKeys = McsGlobals::getPostMetaFieldKeysByPostType($pt);
        //$metaFieldKeysStripped = McsGlobals::stripPostMetaFieldKeys($metaBoxId, $metaPrefix, $metaFieldKeys);
        $data['cunt'] = 'flaps2';
        $data['metaPrefix'] = $metaPrefix;
        $data['metaFieldKeys'] = $metaFieldKeys;
        $data['meta'] = McsGlobals::getPostMetaFieldValuesFromKeys($metaFieldKeys);
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
}
