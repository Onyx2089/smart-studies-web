<?php 

require_once __DIR__ . '/../model/class/model.class.ApiCall.php'; 

if(isset($_GET['cursus']) && isset($_GET['time']))
{
    $field = array("CURSUS", "TIME");
    $op = array("EQ", "LIKE");
    $value = array($_GET['cursus'], $_GET['time']);
    $order = array("TIME", "OBA");

    $array = ApiCall::get(ApiCall::MODEL_CLASS, $field, $op, $value, $order);

   
    
    print_r(json_encode($array));
   

    foreach($array as $class)
    {
        $res[] = $class;
        
    }

  

}