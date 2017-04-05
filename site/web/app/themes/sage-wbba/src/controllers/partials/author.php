<?php
namespace App;

trait Author
{
    public function author()
    {
        global $post;
        $authorObj = get_user_by('id', $post->post_author);
        $author = $authorObj->data->display_name;
        return $author;
    }
}