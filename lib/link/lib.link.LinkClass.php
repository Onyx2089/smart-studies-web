<?php

require_once __DIR__ . '/../../config/config.Iconfig.php';
require_once __DIR__ . '/lib.link.ILink.php';

class LinkClass implements ILink
{
    public static function checkLink($files, $type)
    {
        $res = array(); 
        if(is_array($files))
        {
            if(is_int($type))
            {
                if($type == self::TYPE_CSS)
                {
                    $dir = self::DIR_CSS;
                    $dir_config = self::DIR_CSS_CONFIG;
                }
                elseif($type == self::TYPE_JS)
                {
                    $dir = self::DIR_JS;
                    $dir_config = self::DIR_JS_CONFIG;
                }

                if(isset($dir) && isset($dir_config))
                {
                    foreach($files as $file)
                    {

                        if(file_exists(sprintf($dir, $file)))
                        {
                            $res[] = sprintf($dir_config, $file);
                        }
                    }
                }
           
            }
        }
        return $res;
    }

    public static function getLink($files, $type)
    {
        $res = array();

        if(is_array($files))
        {
            if(is_int($type))
            {
                if($type == self::TYPE_CSS)
                {
                    $tag = self::TAG_CSS;
                }
                elseif($type == self::TYPE_JS)
                {
                    $tag = self::TAG_JS;
                
                }

                if(sizeof($files) != 0)
                {
                    if(isset($type))
                    {
                        foreach($files as $file)
                        {
                            echo sprintf($tag, $file) . PHP_EOL;
                           
                        }
                    }
                }
            }
        }
    }

    public static function checkJsLink()
    {

    }
}