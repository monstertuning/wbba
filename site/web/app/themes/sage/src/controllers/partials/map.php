<?php
namespace App;

use MedusaContentSuite\Functions\Common;


trait Map
{
    //use CompanyInfo;


    public function google_map()
    {

        //$a = new CompanyInfo;
        //$b = $a->company_info();

        $address = Common::getAddress();
        $addressString = Common::getAddressString($address);

        $marker = Common::getLatLong($addressString);

        $markers = [
            /*[
                "lat" => "52.6041155",
                "lng" => "-1.0829533"
            ]*/

            $marker

        ];

        $instance = array (
            'title' => 'test-title',
            'name' => 'test-name',
            'height' => '400',
            'width' => '400',
            'markers' => $markers,
        );

        $output = Common::getTheWidget('Medusa_Widgets_Google_Map', $instance);
        return $output;
    }
}