<?php

class ControllerAdmin
{
    public static function Page()
    {
        $title = "Admin";
        //$css[0] = '<link rel="stylesheet" type="text/css" href="'. Iconfig::APP_DIR .'/public/css/public.css.PublicCssStyle.css">';
        
        $css = array('Style', 'HomePage', 'Profil');
        $css = LinkClass::checkLink($css, LinkClass::TYPE_CSS);
        
        $js = array('Global', 'Admin');
        $js = LinkClass::checkLink($js, LinkClass::TYPE_JS);
        //$css[1] = '<link rel="stylesheet" type="text/css" href="'. Iconfig::APP_DIR .'public/css/public.css.PublicCssHomePage.css">';

        require_once __DIR__ . '/../view/view.ViewAdmin.php';
    }
}