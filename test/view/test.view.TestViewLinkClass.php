<?php

require_once __DIR__ . '/../../view/link/view.link.LinkClass.php';

$files = array('Style', 'HomePage');

$res = LinkClass::checkCssLink($files);
$res = LinkClass::getCssLink($res);

//var_export(file_exists('/git/web_final/public/css/public.css.PublicCssStyle.css'));
//var_export(file_exists(__DIR__ . ));

//print_r(scandir(__DIR__ . '/../../public/css/'));
//echo PHP_EOL;
//print_r($res);