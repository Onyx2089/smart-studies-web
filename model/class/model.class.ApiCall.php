<?php

require_once __DIR__ . '/../interface/model.interface.IApiCall.php';

class ApiCall implements IApiCall
{
    public static function get($table, $field, $value)
    {
        $url = self::URL_API . "model=$table&field=$field&value=$value";
        $curl = curl_init(self::URL_API . "model=$table&field=$field&value=$value");
        curl_setopt($curl, CURLOPT_HTTPGET, true);

        $res = self::apiReturn($curl);

        return $res;//print_r($res);
    }

    public static function apiReturn($curl)
    {
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $res = curl_exec($curl);
        curl_close($curl);

        return json_decode($res);
    }
}