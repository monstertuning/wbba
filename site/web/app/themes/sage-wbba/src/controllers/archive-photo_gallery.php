<?php

namespace App;

use Sober\Controller\Controller;
use MedusaContentSuite\CMB\Meta\PostMeta;

class ArchivePhotoGallery extends Controller
{
    /*use FeaturedImage;
    use Meta;
    use Content;
    use LinkPages;*/
    use PostClass;
    //use Permalink;

    public function posts(){
        global $posts;
        $posts2 = null;
        $post_meta = null;

        $x = 0;
        foreach ($posts as $p){
            $post_excerpt = substr(strip_tags($p->post_content, '<b><div><p><i>'), 0, 250);
            //$post_excerpt .= '<span class="read-more">...read more</span>';
            $p->post_excerpt = $post_excerpt;
            $p->featured_image = get_the_post_thumbnail($p, 'thumb-width-400-height-400-crop');
            $p->permalink = get_the_permalink($p);
            $authorObj = get_user_by('id', $p->post_author);
            $p->author = $authorObj->data->display_name;

            $meta = new PostMeta;
            $metaKeys = $meta->getPostMetaFieldKeysAndTypeByPostType($p->post_type);

            if(!empty($metaKeys)){

                foreach($metaKeys as $metaKey){
                    $shortKey = $meta->formatMetaKey($metaKey['key'], $p->post_type);
                    $metaVal = get_post_meta($p->ID, $metaKey['key'], true);
                    $post_meta[$shortKey] = $metaVal;
                }

                $p->post_meta = $post_meta;
            }

            $posts2[$x] = (array) $p;

            $x++;
        }
        return (array) $posts2;
    }

}

