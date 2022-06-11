<?php

require_once __DIR__ . '/../interface/model.interface.IApiCall.php';

class ApiCall implements IApiCall
{
    public static function get($table, $field, $op, $value, $sort = false)
    {
        $fields = json_encode($field);
        $ops = json_encode($op);
        $values = json_encode($value);

        $url = self::URL_API . sprintf("model=%s&field=%s&op=%s&value=%s", $table, $fields, $ops, $values);
        
        if($sort != false)
        {
            $url .= sprintf("&sort=%s", json_encode($sort));
        }

        //return $url;

        //TO DO HERE ERROR
        //return $url;
        
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_HTTPGET, true);

        $res = self::apiReturn($curl);

        return $res;//print_r($res);
    }

    public static function apiReturn($curl)
    {
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $res = curl_exec($curl);
        curl_close($curl);

        //return $res;
        return json_decode($res);
    }
}