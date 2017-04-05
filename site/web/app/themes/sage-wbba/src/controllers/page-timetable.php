<?php

namespace App;

use Sober\Controller\Controller;
use MedusaContentSuite\Config\Globals as McsGlobals;
use MedusaContentSuite\CMB\Meta\PostMeta;
use MedusaContentSuite\Helpers as Helpers;
use MedusaContentSuite\Config\Menus;

class PageTimetable extends Controller
{
    use Content;
    use LinkPages;

    /**
     * Return images from Advanced Custom Fields
     *
     * @return string
     */
    public function timetable()
    {
        $args = [
            'post_status' => 'publish',
            'post_type' => 'program',
            'posts_per_page' => -1,
        ];

        $programs = get_posts($args);
        $data = [];

        $x = 0;
        foreach($programs as $p){
            $data[$x]['class_name'] = $p->post_title;
            $data[$x]['program_link'] = get_permalink($p->ID);
            //$meta = get_post_meta($p->ID);
            $data[$x]['ages'] = get_post_meta($p->ID, '_cmb_program_options__cmb_program_options_suitable_ages', true);
            $data[$x]['day_times'] = get_post_meta($p->ID, '_cmb_program_options__cmb_program_options_classes', true);
            $x++;
        }

        $days = array(
            "monday",
            "tuesday",
            "wednesday",
            "thursday",
            "friday",
            "saturday",
            "sunday"
        );

        $timetable = [];

        foreach($days as $day) {
            foreach ($data as $d) {
                $result = false;
                if(array_key_exists('day_times', $d)){
                    if(!empty($d['day_times'])){

                        foreach($d['day_times'] as $class){
                            if($day == $class['day_of_week']){
                                $d['class'] = $class;
                                unset($d['day_times']);
                                $timetable[ucfirst($day)][] = $d;
                            }
                        }
                    }
                }
            }
        }

        return $timetable;

    }


    protected function getMcsGlobals()
    {
        return new McsGlobals;
    }


    protected function getHelpers()
    {
        return new Helpers;
    }
}