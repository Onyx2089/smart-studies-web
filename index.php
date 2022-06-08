<?php

require_once __DIR__ . '/config/config.ConfigInterface.php';
require_once __DIR__ . '/view/link/view.link.LinkClass.php';
require_once __DIR__ .  '/controller/controller.ControllerLogin.php';
require_once __DIR__ .  '/controller/controller.ControllerPlanning.php';
require_once __DIR__ . '/controller/controller.ControllerAdmin.php';

if(isset($_GET['p']))
{
    $page = $_GET['p'];
    if($page == "planning")
    {
        ControllerPlanning::Page();
    }
    elseif($page == "admin")
    {
        ControllerAdmin::Page();
    }
}
else
{
    ControllerLogin::Page();
}