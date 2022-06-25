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
        //$css[0] = '<link rel="stylesheet" type="text/css" href="'. Iconfig::APP_DIR .'/public/css/public.css.PublicCssStyle.css">';
        
        $css = array('Style', 'HomePage', 'Profil', 'Planning');
        $css = LinkClass::checkLink($css, LinkClass::TYPE_CSS);

        $js = array('Global', 'Planning');
        $js = LinkClass::checkLink($js, LinkClass::TYPE_JS);
        
        //$css[1] = '<link rel="stylesheet" type="text/css" href="'. Iconfig::APP_DIR .'public/css/public.css.PublicCssHomePage.css">';

        require_once __DIR__ . '/../view/view.ViewPlanning.php';
    }
}