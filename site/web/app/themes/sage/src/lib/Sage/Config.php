<?php

namespace Roots\Sage;

use \Illuminate\Config\Repository;
use MedusaContentSuite\Config\Globals as McsGlobals;
use MedusaContentSuite\CMB\Meta\PostMeta;
use MedusaContentSuite\Helpers as Helpers;
use MedusaContentSuite\Config\Menus;

class Config extends Repository
{
    protected $postTypes = [];

    public function __construct()
    {
        parent::__construct();
        add_filter('wp', array($this, 'addClasses'));
    }

    public function addClasses(){
        global $post;

        $pt = get_post_type($post);

        /*$tag = 'sage/template/post-type-archive-'.$pt.'/data';
        add_filter( $tag, array($this, 'ptArchiveData' ) );*/


    }



    public function ptArchiveData( $data )
    {
        $pt = get_post_type();

        //$data['teaser'] =

        $data['image'] = $this->getMcsGlobals()->getArchiveTeaserImageSnippet();

        //$data['pt_archive_title'] = $pt_archive_title;

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
