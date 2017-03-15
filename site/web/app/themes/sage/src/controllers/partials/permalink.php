<?php
namespace App;

trait Permalink
{
    public function permalink()
    {
        global $post;
        $permalink = get_the_permalink();
        return $permalink;
    }
}