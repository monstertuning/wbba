<?php

namespace App;

use Sober\Controller\Controller;

class Archive extends Controller
{
    use FeaturedImage;
    use Meta;
    use Content;
    use LinkPages;
    use PostClass;
    use Permalink;

    public function posts(){
        global $posts;
        $posts2 = null;
        $x = 0;
        foreach ($posts as $p){
            $post_excerpt = substr(strip_tags($p->post_content, '<b><div><p><i>'), 0, 250);
            $post_excerpt .= '<a href="' . get_permalink($p) . '">' . '...read more</a>';
            $p->post_excerpt = $post_excerpt;
            $posts2[$x] = (array) $p;
            $x++;
        }
        return (array) $posts2;
    }

    public function sitest()
    {
        return;
    }


}

