<?php

class ControllerLogin
{
    public static function Page()
    {
        session_start();
        session_destroy();

        $title = "Login";
        //$css[0] = '<link rel="stylesheet" type="text/css" href="'. Iconfig::APP_DIR .'/public/css/public.css.PublicCssStyle.css">';
        
        $css = array('Style', 'HomePage');
        $css = LinkClass::checkLink($css, LinkClass::TYPE_CSS);

        $js = array('Global', 'Login');
        $js = LinkClass::checkLink($js, LinkClass::TYPE_JS);
        
        //$css[1] = '<link rel="stylesheet" type="text/css" href="'. Iconfig::APP_DIR .'public/css/public.css.PublicCssHomePage.css">';

        require_once __DIR__ . '/../view/view.ViewLogin.php';
    }
}