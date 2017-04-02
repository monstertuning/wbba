<?php
namespace App;

use MedusaContentSuite\Functions\Common;

trait CompanyInfo
{
    public function company_info()
    {
        $attr = array(
            'class' => 'image img-fluid',
            'alt'   => get_bloginfo('name'),
            'title'   =>  get_bloginfo('name'),
        );

        $mmcData = get_option('mmc');
        $headerImgId = attachment_url_to_postid( $mmcData['company_logo'] );
        $companyBgImgId = attachment_url_to_postid( $mmcData['company_bg_image'] );

        $data['site_logo'] = wp_get_attachment_image( $headerImgId, 'thumb-width-400', false,  $attr );
        $data['bg_image'] = wp_get_attachment_image_url( $companyBgImgId, '' );
        $data['social_links'] = $mmcData['social_media_setting'];
        $data['site_description'] = get_bloginfo('description');
        $data['site_title'] = get_bloginfo('name');
        $data['site_url'] = get_bloginfo('url');
        $data['phone1'] = $mmcData['phone1'];
        $data['phone2'] = $mmcData['phone2'];
        $data['email'] = $mmcData['email'];
        $data['company_name'] = $mmcData['company_name'];
        $data['company_address'] = Common::getAddress();

        $data['slogan1'] = $mmcData['slogan1'];
        $data['slogan2'] = $mmcData['slogan2'];

        $data['address_str'] = Common::getAddressString($data['company_address'], false) . ' Tel: ' . $data['phone1'];

        return $data;
    }
}