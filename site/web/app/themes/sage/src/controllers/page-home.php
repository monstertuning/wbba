<?php

namespace App;

use Sober\Controller\Controller;
use MedusaContentSuite\Config\Globals as McsGlobals;
use MedusaContentSuite\CMB\Meta\PostMeta;
use MedusaContentSuite\Helpers as Helpers;
use MedusaContentSuite\Config\Menus;

class PageHome extends Controller
{
    /**
     * Return images from Advanced Custom Fields
     *
     * @return string
     */
    public function news_slides()
    {

        $args = array(
            'posts_per_page' => 5,
            'post_type' => 'news_article',
        );

        $imgAttr =[
            'class'=>'d-block img-fluid img-responsive'
        ];

        $posts = get_posts( $args );
        $data = [];

        $x = 0;
        $helpers = new Helpers;

        if( ! empty( $posts ) ){
            foreach( $posts as $p ){
                if(has_post_thumbnail($p->ID)){
                    $news_slides[$x]['title'] = get_the_title( $p->ID );
                    $news_slides[$x]['link'] = get_permalink( $p->ID );
                    $news_slides[$x]['image'] = get_the_post_thumbnail( $p->ID, 'width-600-height-600-crop', $imgAttr );
                    #$data[$x]['image'] = get_the_post_thumbnail( $p->ID, array(400, 400), $imgAttr );
                    #$data[$x]['excerpt'] = get_the_excerpt( $p );
                    $news_slides[$x]['excerpt'] = $helpers->mmcGetExcerptById( $p->ID, 40, 'read more' );
                    $x++;
                }
            }
        }

        return $news_slides;
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