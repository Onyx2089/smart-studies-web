<?php 

require_once __DIR__ . '/../model/class/model.class.ApiCall.php'; 



if(isset($_GET['email']) && isset($_GET['password']))
{

    $field = array("EMAIL", "PASSWORD");
    $op = array("EQ", "EQ");
    $value = array($_GET['email'], $_GET['password']);

    $array = ApiCall::get(ApiCall::MODEL_PROFIL, $field, $op, $value);




    foreach($array as $res)
    {
     
        if($res->PASSWORD == $_GET['password'])
        {
        
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
    
    }
}

