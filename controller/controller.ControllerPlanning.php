<?php

class ControllerPlanning
{
    public static function Page()
    {
        session_start();

        if(isset($_SESSION['CURSUS']))
        {
            $cursus = $_SESSION['CURSUS'];
        }

        $title = "Planning";
        //$css[0] = '<link rel="stylesheet" type="text/css" href="'. ConfigInterface::APP_DIR .'/public/css/public.css.PublicCssStyle.css">';
        
        $files = array('Style', 'HomePage', 'Profil', 'Planning');
        $css = LinkClass::checkCssLink($files);
        
        //$css[1] = '<link rel="stylesheet" type="text/css" href="'. ConfigInterface::APP_DIR .'public/css/public.css.PublicCssHomePage.css">';

        require_once __DIR__ . '/../view/template/view.template.Planning.php';
    }
}