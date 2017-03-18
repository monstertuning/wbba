<?php
namespace App;

trait Content
{
    public function content()
    {
        global $post;
        return wpautop($post->post_content);
    }
}