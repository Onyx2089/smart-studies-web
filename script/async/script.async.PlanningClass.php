<?php 

require_once __DIR__ . '/../../model/class/model.class.ApiCall.php';

if(isset($_GET['cursus']) && isset($_GET['time']))
{
    $field = array("CURSUS", "TIME");
    $op = array("EQ", "LIKE");
    $value = array($_GET['cursus'], $_GET['time']);
    $order = array("TIME", "OBA");

    $array = ApiCall::get(ApiCall::MODEL_CLASS, $field, $op, $value, $order);

    //echo $array;
    //print_r($array);
    
    print_r(json_encode($array));
    //print_r($value);

    foreach($array as $class)
    {
        $res[] = $class;
        
    }

    //print_r(json_encode($res));
    //if(array_multisort($res, SORT_ASC)){}

}