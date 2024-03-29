<?php

require_once __DIR__ . '/../lib/dashboard/lib.dashboard.FormHtml.php';
require_once __DIR__ . '/../model/interface/model.interface.IModel.php';

class ControllerAdminDashBoard
{
    public static function Page()
    {
        session_start();
        session_destroy();

        $title = "DashBoard";
        
        
        $css = array('Style', 'HomePage', 'Profil', 'planning');
        $css = LinkClass::checkLink($css, LinkClass::TYPE_CSS);
        


        
        
        if(isset($_GET['model']) && isset($_GET['type']))
        {
            $model = $_GET['model'];
            $type = $_GET['type'];

            if(array_key_exists($model, IModel::ARRAY_MODEL))
            {
                if(in_array($type, IModel::ARRAY_METHOD))
                {
                    $js = array('Global', 'DashBoard');
                    $js = LinkClass::checkLink($js, LinkClass::TYPE_JS);

                    if($type == IModel::CREATE)
                    {
                        $content = FormHtml::getCreateForm(IModel::ARRAY_MODEL[$model]);
                    }
                    elseif($type == IModel::MODIF)
                    {
                        $content = FormHtml::getModifForm(IModel::ARRAY_MODEL[$model]);
                    }

                    require_once __DIR__ . '/../view/view.ViewAdminDashboard.php';
                }
                else
                {
                    ControllerLogin::Page();
                }
            }
            else
            {
                ControllerLogin::Page();
            }
        }
        else
        {
            ControllerLogin::Page();
        }

    }
}