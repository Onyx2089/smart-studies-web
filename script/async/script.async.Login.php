<?php 

require_once __DIR__ . '/../../model/class/model.class.ApiCall.php';

//echo "script for login ";

if(isset($_GET['email']) && isset($_GET['password']))
{
    //echo 'get';
    $array = ApiCall::get(ApiCall::MODEL_PROFIL, "EMAIL", $_GET['email']);

    //print_r($res);
    foreach($array as $res)
    {
        if($res->PASSWORD == $_GET['password'])
        {
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
