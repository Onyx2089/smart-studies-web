<?php 

require_once __DIR__ . '/../../model/class/model.class.ApiCall.php';

if(isset($_GET['cursus']) && isset($_GET['time']))
{
    $array = ApiCall::get(ApiCall::MODEL_CLASS, "CURSUS", $_GET['cursus']);
    $res = array();

    foreach($array as $class)
    {
        if(strstr($class->TIME, $_GET['time']) != false)
        {
            $res[] = $class;
        }
    }

    print_r($res);
    //if(array_multisort($res, SORT_ASC)){}

}