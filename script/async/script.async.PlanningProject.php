<?php 

require_once __DIR__ . '/../../model/class/model.class.ApiCall.php';

if(isset($_GET['cursus']) && isset($_GET['time']))
{
    $array = ApiCall::get(ApiCall::MODEL_PROJECT, "CURSUS", $_GET['cursus']);
    //$res = array();

    /*
    foreach($array as $class)
    {
        if(strstr($class->TIME, $_GET['time']) != false)
        {
            $res[] = $class;
        }
    }
    */

    print_r(json_encode($array));
    //if(array_multisort($res, SORT_ASC)){}

}