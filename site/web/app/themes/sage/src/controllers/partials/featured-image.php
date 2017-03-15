<?php
namespace App;

trait FeaturedImage
{
    public function featured_image_post_header()
    {
        global $post;
        return get_the_post_thumbnail($post, 'post-header');
    }

    public function featured_image_post_portrait()
    {
        global $post;
        return get_the_post_thumbnail($post, 'post-portrait');
    }
}