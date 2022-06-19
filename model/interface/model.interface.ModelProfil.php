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
        "Nom - Prénom" => self::NAME,
        "Anniversaire" => self::BIRTH,
        "Email" => self::EMAIL,
        "Statut" => self::STAT,
        "Cursus" => self::CURSUS,
        self::PASSWORD
    ];
}