<?php
namespace App;

use MedusaContentSuite\CMB\Meta\PostMeta;

trait Meta
{
    public function meta()
    {
        $pt = get_post_type();
        $postMeta = new PostMeta;
        $metaFieldKeysAndTypes = $postMeta->getPostMetaFieldKeysAndTypeByPostType($pt);
        $meta = $postMeta->getPostMetaFieldValuesFromKeys($metaFieldKeysAndTypes, $pt);

        return (isset($meta) ? $meta : null);
    }

}