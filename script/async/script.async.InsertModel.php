<?php

require_once __DIR__ . '/../../model/interface/model.interface.IModel.php';
require_once __DIR__ . '/../../model/class/model.class.ApiCall.php';
require_once __DIR__ . '/../../model/interface/model.Interface.ModelClass.php';
require_once __DIR__ . '/../../model/interface/model.interface.ModelProfil.php';
require_once __DIR__ . '/../../model/interface/model.Interface.ModelProject.php';
require_once __DIR__ . '/../../lib/generator/lib.generator.Rand.php';
require_once __DIR__ . '/../../lib/send/lib.send.Email.php';

if(isset($_GET['model']))
{
    $model = $_GET['model'];
    if(array_key_exists($model, IModel::ARRAY_MODEL))
    {
        unset($_GET['model']);

        if(!isset($_GET['model']))
        {
            $value = $_GET;

            if($model == IModel::MODEL_CLASS)
            {
                $field = array_values(ModelClass::CLASS_ARRAY);
            }
            elseif($model == IModel::MODEL_PROFIL)
            {
                $field = array_values(ModelProfil::PROFIL_ARRAY);
                $value[] = Rand::password(20);
            }
            elseif($model == IModel::MODEL_PROJECT)
            {
                $field = array_values(ModelProject::PROJECT_ARRAY);
            } 

            if(isset($field))
            {
                if(sizeof($field) == sizeof($value))
                {
                    $array = array();
                    foreach($value as $row)
                    {
                        if($row == IModel::ADMIN)
                        {
                            $array[] = IModel::STAT_ADMIN;
                        }
                        elseif($row == IModel::STUDENT)
                        {
                            $array[] = IModel::STAT_STUDENT;
                        }
                        elseif($row == IModel::PRG)
                        {
                            $array[] = IModel::CURSUS_PRG;
                        }
                        elseif($row == IModel::MKT)
                        {
                            $array[] = IModel::CURSUS_MKT;
                        }
                        else
                        {
                            $array[] = $row;
                        }
                    }
                
                    //print_r(array( $field, $array) );
                    //die();
                    //print_r( array($field, $array));
                    $res = ApiCall::post($model, $field, $array);
                
                    if($res != null)
                    {
                        print_r($array);

                        $Email = new Email;

                        var_export( $Email::send() );

                        echo $res;
                    }
                }
            }
        }

        

        //ApiCall::post();
    }
    else
    {
        echo 'error';
    }
}


//print_r($_GET);
//print_r(ModelProject::PROJECT_ARRAY);