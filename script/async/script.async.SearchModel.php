<?php

require_once __DIR__ . '/../../model/interface/model.interface.IModel.php';
require_once __DIR__ . '/../../model/interface/model.Interface.ModelClass.php';
require_once __DIR__ . '/../../model/interface/model.interface.ModelProfil.php';
require_once __DIR__ . '/../../model/interface/model.Interface.ModelProject.php';
require_once __DIR__ . '/../../model/class/model.class.ApiCall.php';

if($_GET['model'] && $_GET['datalist_list'] && $_GET['text'])
{
    //print_r($_GET);

    $model = $_GET['model'];
    $column = $_GET['datalist_list'];
    
    if(array_key_exists($model, IModel::ARRAY_MODEL))
    {
        if($model == IModel::MODEL_CLASS)
        {
            $field = array(ModelClass::CLASS_ARRAY[$column]);
            $array = ModelClass::CLASS_ARRAY;
        }
        elseif($model == IModel::MODEL_PROFIL)
        {
            $field = array(ModelProfil::PROFIL_ARRAY[$column]);
            $array = ModelProfil::PROFIL_ARRAY;
        }
        elseif($model == IModel::MODEL_PROJECT)
        {
            $field = array(ModelProject::PROJECT_ARRAY[$column]);
            $array = ModelProject::PROJECT_ARRAY;
        }

        if(isset($field))
        {
            //$field = array(ModelProject::PROJECT_ARRAY[$_GET['datalist_list']]);
            $op = array("LIKE");
            $value = array($_GET['text']);


            //print_r($field);
            /*
            $field = array("EMAIL", "PASSWORD");
            $op = array("EQ", "EQ");
            $value = array($_GET['email'], $_GET['password']);
            */

            //print_r(array($field, $op, $value));

            $res = ApiCall::get($_GET['model'], $field, $op, $value);

            $res = json_encode(array($array[$column], $res));

            if($res != false)
            {
                echo $res;
            }
        }


    }


}