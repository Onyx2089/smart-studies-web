<?php

require_once __DIR__ . '/lib.dashboard.IFormHtml.php';

class FormHtml implements IFormHtml
{
    public static function getCreateForm($array)
    {
        return $array;
    }

    public static function getModifForm($array)
    {
        return $array;
    }
}