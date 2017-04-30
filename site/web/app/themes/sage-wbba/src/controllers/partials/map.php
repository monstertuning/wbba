<?php
namespace App;

use MedusaContentSuite\Functions\Common;


trait Map
{
    //use CompanyInfo;

    public function google_map()
    {
        $address = Common::getAddress();

        $marker = Common::getLatLong(Common::getAddressString($address, false));
        $marker['address'] = Common::getAddressString($address, true);
        $marker['link'] = "https://www.google.com/maps?q=loc:" . $marker['lat'] . ',' . $marker['lng'];
        $marker['title'] = "See on Google Maps";
        $markers = [
            $marker
        ];

        $instance = array (
            'title' => 'test-title',
            'name' => 'test-name',
            'height' => '400',
            'width' => '400',
            'markers' => $markers,
            'api_key' => 'AIzaSyDDIw3cfhcVLyAd4rUNgR_GO2OfLcdrq8k',
        );

        $output = Common::getTheWidget('Medusa_Widgets_Google_Map', $instance);
        return $output;
    }
}