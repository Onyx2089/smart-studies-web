<?php

require_once __DIR__ . '/../../config/config.IConfig.php';

interface IApiCall
{
    const URL_API = IConfig::API; //"http://localhost/git/api_final/?";

    const MODEL_CLASS = "class";
    const MODEL_PROFIL = "profil";
    const MODEL_PROJECT = "project";
}