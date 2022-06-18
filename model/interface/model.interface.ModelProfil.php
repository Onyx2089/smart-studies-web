<?php 

interface ModelProfil 
{
    const NAME = "NAME";
    const BIRTH = "BIRTH";
    const EMAIL = "EMAIL";
    const CURSUS = "CURSUS";
    const STAT = "STAT";
    const PASSWORD = "PASSWORD";

    const PROFIL_ARRAY = 
    [
        self::NAME,
        self::BIRTH,
        self::EMAIL,
        self::STAT,
        self::CURSUS,
        self::PASSWORD
    ];
}