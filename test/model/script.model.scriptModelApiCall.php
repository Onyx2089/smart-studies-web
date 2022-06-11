<?php

$array = array('get', 'post', 'put', 'delete');

if($argc != 2)
{
    print_r($array);
}

$curl = curl_init();

if($argv[1] == $array[0])
{
    $field = json_encode(array("CURSUS", "TIME"));
    $op = json_encode(array("EQ", "LIKE"));
    $value = json_encode(array(3000, "2022-06-11"));
    $order = json_encode(array("TIME", "OBA"));

    //$url = "http://localhost/git/api_final/?model=class&field=" + $field + "&op=" + $op + "&value=" + $value ;
    $url = sprintf("http://localhost/git/api_final/?model=class&field=%s&op=%s&value=%s&sort=%s", $field, $op, $value, $order);

    //echo $url . PHP_EOL;
    //die();

    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_HTTPGET, true);
}
elseif($argv[1] == $array[1])
{
    $url = "http://localhost/git/api_final/?model=profil";
    
    $data = array('NAME' => 'Issam', 'BIRTH' => '1990-01-06', 'EMAIL' => 'issam@ecole-89.com', 'CURSUS' => 3000, 'STAT' => 1000);

    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

}
elseif($argv[1] == $array[2])
{
    $url = "http://localhost/git/api_final/?model=project";
    
    //$data = array(/*'ID' => 'NOP', */'NAME' => 'ECO', 'TIME' => '2022-06-06 26:56:00');
    $data = array('ID' => '8', 'NAME' => 'Blockchain', 'DEADLINE' => '2012-06-06 23:56:00');
        
    $data = http_build_query($data, JSON_FORCE_OBJECT);
    
    $url .= "&$data";
 
    //echo $data . PHP_EOL . PHP_EOL;
    //echo $url . PHP_EOL;
    //die();

    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_PUT, true);
    //curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode( $data ));
    
}
elseif($argv[1] == $array[3])
{
    $url = "http://localhost/git/api_final/?model=project&ID=8";
    
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");


}
        
        
        
        


if(in_array($argv[1], $array))
{
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $res = curl_exec($curl);
    curl_close($curl);

    $res = json_decode($res);
    //echo $res;
    print_r($res);
}

