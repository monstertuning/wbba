<?php
namespace App;

trait FeaturedImage
{
    public function featured_image()
    {
        global $post;
        return get_the_post_thumbnail($post, 'article-header');
    }
}