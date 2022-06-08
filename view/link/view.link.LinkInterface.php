<?php

interface LinkInterface
{
    const DIR_CSS_CONFIG = ConfigInterface::APP_DIR . "public/css/public.css.%s.css";
    const DIR_CSS = __DIR__ . '/../../public/css/public.css.%s.css';
    const BASENAME_CSS = ".css";

    const TAG_CSS = '<link rel="stylesheet" type="text/css" href="%s">';  
}   