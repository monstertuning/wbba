<?php

namespace App;

use Sober\Controller\Controller;
use MedusaContentSuite\Config\Globals as McsGlobals;
use MedusaContentSuite\CMB\Meta\PostMeta;
use MedusaContentSuite\Helpers as Helpers;
use MedusaContentSuite\Config\Menus;

class PageContactUs extends Controller
{
    use Content;

    public function show_form(){
        return \FrmFormsController::show_form(2, $key = '', $title=true, $description=true);
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