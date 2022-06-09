<?php

class ControllerLogin
{
    public static function Page()
    {
        session_start();
        session_destroy();

        $title = "Login";
        //$css[0] = '<link rel="stylesheet" type="text/css" href="'. ConfigInterface::APP_DIR .'/public/css/public.css.PublicCssStyle.css">';
        
        $files = array('Style', 'HomePage');
        $css = LinkClass::checkCssLink($files);
        
        //$css[1] = '<link rel="stylesheet" type="text/css" href="'. ConfigInterface::APP_DIR .'public/css/public.css.PublicCssHomePage.css">';

        require_once __DIR__ . '/../view/template/view.template.Login.php';
    }
}