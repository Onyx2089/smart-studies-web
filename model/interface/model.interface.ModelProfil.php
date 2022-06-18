<?php 

interface ModelProfil 
{
    const NAME = "NAME";
    const BIRTH = "BIRTH";
    const EMAIL = "EMAIL";
    const PASSWORD = "PASSWORD";
    const CURSUS = "CURSUS";
    const STAT = "STAT";

    const PROFIL_ARRAY = 
    [
        self::NAME,
        self::BIRTH,
        self::EMAIL,
        self::PASSWORD,
        self::CURSUS,
        self::STAT
    ];
}