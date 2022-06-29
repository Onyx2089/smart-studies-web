<?php

require_once __DIR__ . '/config/config.Iconfig.php';
require_once __DIR__ . '/lib/link/lib.link.LinkClass.php'; 
require_once __DIR__ . '/controller/controller.ControllerLogin.php';
require_once __DIR__ . '/controller/controller.ControllerPlanning.php';
require_once __DIR__ . '/controller/controller.ControllerAdmin.php';
require_once __DIR__ . '/controller/controller.ControllerAdminDashBoard.php';

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
    elseif($page == "dashboard")
    {
        ControllerAdminDashBoard::Page();
    }
}
else
{
    ControllerLogin::Page();
}