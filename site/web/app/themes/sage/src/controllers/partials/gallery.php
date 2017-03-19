<?php
namespace App;

use MedusaContentSuite\CMB\Meta\PostMeta as MmcMeta;

trait Gallery
{
    public function gallery_images()
    {
        global $post;
        $galleryImages = [];

        $meta = get_post_meta($post->ID);

        $test = $this->cmb2_output_file_list( '_cmb_photo_gallery_options_gallery_images', 'square-150' );

        $imageIds = get_post_meta($post->ID, '_cmb_photo_gallery_options_gallery_images', true);
        $x = 0;
        foreach($imageIds as $imageId => $imgUrl)
        {
            $galleryImages[$x]['thumb'] = wp_get_attachment_image(
                $imageId,
                'square-150',
                false,
                array( "class" => "img-fluid thumb square-150" )
            );

            $galleryImages[$x]['display'] = wp_get_attachment_image(
                $imageId,
                'display-width-1000',
                false,
                array( "class" => "img-fluid display" )
            );

            //$imgSrc = wp_get_attachment_image_srcset($imageId, 'square-150');

            $galleryImages[$x]['display_url'] = wp_get_attachment_image_url(
                $imageId,
                'display-width-1000',
                false
            );

            $x++;

        }

        return $galleryImages;

    }

}