<?php 

require_once __DIR__ . '/../../model/class/model.class.ApiCall.php';

//echo "script for login ";

if(isset($_GET['email']) && isset($_GET['password']))
{
    //echo 'get';
    $field = array("EMAIL", "PASSWORD");
    $op = array("EQ", "EQ");
    $value = array($_GET['email'], $_GET['password']);

    $array = ApiCall::get(ApiCall::MODEL_PROFIL, $field, $op, $value);

    //print_r($array);
    //die();

    //print_r($res);
    foreach($array as $res)
    {
        //var_export($res->PASSWORD == $_GET['password']);
        if($res->PASSWORD == $_GET['password'])
        {
            //echo 'here';
            //print_r($res);
            $stat = $res->STAT;
            if($stat == 1000)
            {
                echo "ADMIN";
            }
            elseif($stat == 2000)
            {
                echo "STUDENT";
            }

            session_start();

            $_SESSION['CURSUS'] = $res->CURSUS;
        }
        //print_r($res);
    }
}

//if()
