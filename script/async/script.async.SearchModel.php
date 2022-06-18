<?php

if($_GET['model'] && $_GET['datalist_list'] && $_GET['text'])
{
    print_r($_GET);

    // TO DO DEFINE CONST ARRAY IN INTERFACE MODELS
    /*
    $field = array("EMAIL", "PASSWORD");
    $op = array("EQ", "EQ");
    $value = array($_GET['email'], $_GET['password']);

    $array = ApiCall::get(ApiCall::MODEL_PROFIL, $field, $op, $value);
    */
}