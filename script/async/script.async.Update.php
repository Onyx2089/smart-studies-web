<?php


require_once __DIR__ . '/../../model/interface/model.interface.IModel.php';
require_once __DIR__ . '/../../model/interface/model.Interface.ModelClass.php';
require_once __DIR__ . '/../../model/interface/model.interface.ModelProfil.php';
require_once __DIR__ . '/../../model/interface/model.Interface.ModelProject.php';
require_once __DIR__ . '/../../model/class/model.class.ApiCall.php';




if(isset($_GET['model']))
{
    $model = $_GET['model'];
    if(isset($_GET['ID']))
    {
        $id = $_GET['ID'];
        
        if($model == IModel::MODEL_CLASS)
        {
            $array = ModelClass::CLASS_ARRAY;
        }
        elseif($model == IModel::MODEL_PROFIL)
        {
            $array = ModelProfil::PROFIL_ARRAY;
        }
        elseif($model == IModel::MODEL_PROJECT)
        {
            $array = ModelProject::PROJECT_ARRAY;
        }
        
        if(isset($array))
        {
            $data = $_GET;
            
            unset($data['model']);
            unset($data['ID']);
            if(!isset($data['model']) && !isset($data['ID']))
            {
                
                //echo sizeof($array) . " " . sizeof($data);
                //print_r($array);
                //print_r($data);

                $res = ApiCall::put($model, $id, $array, $data);
                
                //print_r($res);
                
                //echo "<- res";
                //echo 'update';

                //die();
                $res = json_encode($res);

                if($res != false)
                {
                    echo $res;
                }
                /*
                if(sizeof($data) == sizeof($array))
                {
                    $data = array_values($data);
                    $array = array_values($array);

                    $listCount = 0;
                    $list = array();

                    while($listCount != sizeof($data))
                    {
                        echo $array[$listCount] . ' : ' . $data[$listCount] . PHP_EOL;
                        $listCount++;
                    }

                    //print_r($array);
                }
                */
            }
        }
    }
}
