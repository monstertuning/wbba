<?php

namespace App;

use Sober\Controller\Controller;

class SinglePhotoGallery extends Controller
{
    use Gallery;
    use PostClass;
    use Content;



    private function cmb2_output_file_list( $file_list_meta_key, $img_size = 'medium' ) {

        $result = [];
        $files = get_post_meta( get_the_ID(), $file_list_meta_key, 1 );

        foreach ( (array) $files as $attachment_id => $attachment_url ) {
            $result[] = wp_get_attachment_image( $attachment_id, $img_size );
        }

        return $result;
    }
}

