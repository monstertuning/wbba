<?php

namespace App;

use Sober\Controller\Controller;
use MedusaContentSuite\Config\Globals as McsGlobals;
use MedusaContentSuite\CMB\Meta\PostMeta;
use MedusaContentSuite\Helpers as Helpers;
use MedusaContentSuite\Config\Menus;

class Page extends Controller
{
    use Content;

    protected function getMcsGlobals()
    {
        return new McsGlobals;
    }


    protected function getHelpers()
    {
        return new Helpers;
    }
}