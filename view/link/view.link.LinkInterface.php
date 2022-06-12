<?php

interface LinkInterface
{
    const PUBLIC = "public/";
    
    /**
     * 
     */

    const TYPE_CSS = 1000;
    const FILE_CSS = "public.css.%s.css";
    const CSS = "css/";
    const DIR_CSS = __DIR__ . "/../../" . self::PUBLIC . self::CSS . self::FILE_CSS;
    const DIR_CSS_CONFIG = ConfigInterface::APP_DIR . self::PUBLIC . self::CSS . self::FILE_CSS;
    //const BASENAME_CSS = ".css";
    const TAG_CSS = '<link rel="stylesheet" type="text/css" href="%s">';  

    /**
     * 
     */

    const TYPE_JS = 2000;
    const FILE_JS = "public.js.%s.js";
    const JS = "js/";
    const DIR_JS = __DIR__ . "/../../" . self::PUBLIC . self::JS . self::FILE_JS;
    const DIR_JS_CONFIG = ConfigInterface::APP_DIR . self::PUBLIC . self::JS . self::FILE_JS;
    const TAG_JS = '<script src="%s"></script>';
}   