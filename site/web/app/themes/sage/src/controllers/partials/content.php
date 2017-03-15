<?php
namespace App;

trait Content
{
    public function content()
    {
        global $post;
        return $post->post_content;
    }
}