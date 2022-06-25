<?php

require_once __DIR__ . '/../model/class/model.class.ApiCall.php'; 

//echo "test";
if(isset($_GET['model']))
{
    $model = $_GET['model'];
    if(isset($_GET['ID']))
    {
        $id = $_GET['ID'];


        $res = ApiCall::delete($model, $id);

        echo $res;
        die();
        if($res != null)
        {
            echo $res;
        }
    }
}