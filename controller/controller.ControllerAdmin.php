<?php

class ControllerAdmin
{
    public static function Page()
    {
        $title = "test";
        //$css[0] = '<link rel="stylesheet" type="text/css" href="'. ConfigInterface::APP_DIR .'/public/css/public.css.PublicCssStyle.css">';
        
        $files = array('Style', 'HomePage', 'Profil');
        $css = LinkClass::checkCssLink($files);
        
        //$css[1] = '<link rel="stylesheet" type="text/css" href="'. ConfigInterface::APP_DIR .'public/css/public.css.PublicCssHomePage.css">';

        require_once __DIR__ . '/../view/template/view.template.Admin.php';
    }
}