<?php

class ControllerAdmin
{
    public static function Page()
    {
        $title = "Admin";
        
        
        $css = array('Style', 'HomePage', 'Profil');
        $css = LinkClass::checkLink($css, LinkClass::TYPE_CSS);
        
        $js = array('Global', 'Admin');
        $js = LinkClass::checkLink($js, LinkClass::TYPE_JS);
        

        require_once __DIR__ . '/../view/view.ViewAdmin.php';
    }
}