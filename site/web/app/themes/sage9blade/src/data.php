<?php

namespace App;

class dataSimon
{
    public function __construct()
    {
        $this->addGlobalClass();
        add_filter( 'sage/template/global/data', array($this, __NAMESPACE__ . '\\globalData' ) );
        add_filter( 'wp', array($this, __NAMESPACE__ .'\\initPostData' ) );
    }

    public function initPostData(){
        global $post;

        #$pt = get_post_type($post);
        #$tag = 'sage/template/single-'.$pt.'/data';
        $tag = 'sage/template/single-news_article'.'/data';

        add_filter( $tag, array($this, 'App\\ptData' ));
    }

    public function addGlobalClass()
    {
        add_filter( 'body_class', function ( $classes ) {
            $classes[] = 'global';
            return $classes;
        } );
    }

    public function globalData( $data ) {
        $data['my_global'] = 'Hi';
        //$data['simon'] = 'beasley';

        return $data;
    }

    public function ptData( $data ){
        $data['cunt'] = 'flaps';
        return $data;
    }
}