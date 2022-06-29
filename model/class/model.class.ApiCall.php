<?php

require_once __DIR__ . '/model.class.IApiCall.php';

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

        
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_HTTPGET, true);

        $res = self::apiReturn($curl);

        return $res;
    }

    public static function post($table, $field, $value)
    {
        $value = array_values($value);
       
        if(sizeof($field) == sizeof($value))
        {
            $array = array();
            $arrayCount = 0;

            while($arrayCount != sizeof($field))
            {
                $array[$field[$arrayCount]] = $value[$arrayCount];

                $arrayCount++;
            }

            $url = self::URL_API . sprintf("model=%s", $table);

            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $array);

            $res = self::apiReturn($curl);

            return $res;
        }

    }

    public static function put($table, $id, $field, $value)
    {
       
        if(sizeof($field) == sizeof($value) || $table == IModel::MODEL_PROFIL && sizeof($field) == sizeof($value) + 1)
        {
           
            $field = array_values($field);
            $value = array_values($value);

            $listCount = 0;
            $list = array();

            while($listCount != sizeof($value))
            {
           
                $list[$field[$listCount]] = $value[$listCount];
                $listCount++;
            }

            $array = array();

            foreach($list as $key => $data)
            {
                if($key == IModel::CURSUS)
                {
                    $array[$key] = IModel::ARRAY_CURSUS_REV[$data];
                }
                elseif($key == IModel::STAT)
                {
                    $array[$key] = IModel::ARRAY_STAT_REV[$data];
                }
                else
                {
                    $array[$key] = $data;
                }
            }

            $array['ID'] = $id;
        

            
            $url = self::URL_API . "model=$table&" . http_build_query($array, JSON_FORCE_OBJECT);

       
            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_PUT, true);

            $res = self::apiReturn($curl);

            return $res;
            
        }
    }

    public static function delete($table,  $id)
    {
        $array = array();

        $array['model'] = $table;
        $array['ID'] = $id;

        $url = self::URL_API . http_build_query($array, JSON_FORCE_OBJECT);

      

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");

        $res = self::apiReturn($curl);

        return $res;
    }

    public static function apiReturn($curl)
    {
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $res = curl_exec($curl);
        curl_close($curl);

      
        return json_decode($res);
    }
}