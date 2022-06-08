<?php

require_once __DIR__ . '/../../config/config.ConfigInterface.php';
require_once __DIR__ . '/view.link.LinkInterface.php';

class LinkClass
{
    public static function checkCssLink($files)
    {
        $res = array(); 
        if(is_array($files))
        {
            foreach($files as $file)
            {
                //echo LinkInterface::DIR_CSS . $file . LinkInterface::BASENAME_CSS;

                if(file_exists(sprintf(LinkInterface::DIR_CSS, $file)))
                {
                    $res[] = sprintf(LinkInterface::DIR_CSS_CONFIG, $file);
                }
            }
        }
        return $res;
    }

    public static function getCssLink($files)
    {
        $res = array();

        if(is_array($files))
        {
            if(sizeof($files) != 0)
            {
                foreach($files as $file)
                {
                    echo sprintf(LinkInterface::TAG_CSS, $file) . PHP_EOL;
                }
            }
        }
    }

    public static function checkJsLink()
    {

    }
}