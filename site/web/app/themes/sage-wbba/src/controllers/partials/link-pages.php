<?php
namespace App;

trait LinkPages
{
    public function link_pages()
    {
        $linkPages = wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']);
        return $linkPages;
    }
}