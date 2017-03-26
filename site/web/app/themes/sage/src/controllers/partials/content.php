<?php
namespace App;

trait Content
{
    public function content()
    {
        global $post;
        //return wpautop($post->post_content);
        return apply_filters( 'the_content', wpautop($post->post_content ));
    }
}