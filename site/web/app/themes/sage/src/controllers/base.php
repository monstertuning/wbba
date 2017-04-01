<?php

namespace App;

use Sober\Controller\Controller;
use MedusaContentSuite\Config\Globals as McsGlobals;
use MedusaContentSuite\CMB\Meta\PostMeta as McsMeta;
use MedusaContentSuite\Helpers as Helpers;
use MedusaContentSuite\Config\Menus;

class Base extends Controller
{
    use CompanyInfo;
    use Map;

    protected $programs = null;
    protected $menu = null;
    protected $companyInfo = null;

    public function __construct()
    {
        parent::__construct();
    }


    /**
     * @return array
     */
    public function programs()
    {
        if(null == $this->programs)
            $this->programs = $this->setPrograms();
        return $this->programs;
    }


    /**
     * @return array
     */
    public function primary_menu()
    {
        if(null == $this->menu)
            $this->menu = $this->setMenu();
        return $this->menu;
    }


    public function title()
    {
        return $this->getHelpers()->mmcTitle();
    }


    protected function setMenu()
    {
        $bs4NavWalker = Menus::getBs4NavWalker();
        require_once ($bs4NavWalker);

        ob_start( );

        wp_nav_menu( array(
                'menu_id'           => 'main-menu',
                'menu'              => 'main-menu',
                'theme_location'    => 'primary_navigation',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'navbar-collapse ',
                'container_id'      => '',
                'menu_class'        => 'nav navbar-nav ',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new \wp_bootstrap_navwalker())
        );

        return ob_get_clean( );
    }


    protected function setPrograms()
    {
        $args = array(
            'posts_per_page'   => 10,
            'offset'           => 0,
            'category'         => '',
            'category_name'    => '',
            'orderby'          => 'date',
            'order'            => 'DESC',
            'include'          => '',
            'exclude'          => '',
            'meta_key'         => '',
            'meta_value'       => '',
            'post_type'        => 'program',
            'post_mime_type'   => '',
            'post_parent'      => '',
            'author'	   => '',
            'author_name'	   => '',
            'post_status'      => 'publish',
            'suppress_filters' => true,

        );

        $programs = get_posts( $args );
        $programs2 = [];

        $x = 0;
        foreach ( $programs as $program ){

            //$test = new McsMeta;
            //$key = $test->formatKey("_cmb_program_options__cmb_program_options_program_icon_image_id", 'program');

            $programs2[$x]['id'] = $program->ID;
            $programs2[$x]['title'] = $program->post_title;
            $programs2[$x]['link'] = get_permalink( $program->ID );

            $iconId = get_post_meta($program->ID, '_cmb_program_options__cmb_program_options_program_icon_image_id', true);

            $programs2[$x]['image'] = wp_get_attachment_image(
                $iconId,
                'square-100',
                false,
                array( "class" => "img-fluid" )
            );

            $programs2[$x]['ages'] = get_post_meta( $program->ID, '_cmb_program_options__cmb_program_options_suitable_ages', true) . ' years';

            $x++;
        }

        return $programs2;
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
