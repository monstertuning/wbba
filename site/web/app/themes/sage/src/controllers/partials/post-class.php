<?php
namespace App;

trait PostClass
{
    public function post_class()
    {
        $postClass = get_post_class();
        $postClassString = '';
        foreach($postClass as $pc){
            $postClassString .= $pc . ' ';
        }
        return $postClassString;
    }
}