<?php

require_once __DIR__ . '/lib.generator.IRand.php';

class Rand implements IRand
{
    public static function password($size)
    {
      
        $charactersLength = strlen(self::ALL);
        $randomString = '';
        for ($i = 0; $i < $size; $i++) {
            $randomString .= self::ALL[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}