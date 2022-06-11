<?php 

require_once __DIR__ . '/../../model/class/model.class.ApiCall.php';

if(isset($_GET['cursus']) && isset($_GET['time']))
{
    $field = array('CURSUS', 'DEADLINE');
    $op = array('EQ', 'GT');
    $value = array($_GET['cursus'], $_GET['time']);
    $order = array('DEADLINE', 'OBA');

    $array = ApiCall::get(ApiCall::MODEL_PROJECT, $field, $op, $value, $order);
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