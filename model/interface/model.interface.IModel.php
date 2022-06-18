<?php

interface IModel
{
    const CREATE = "create";
    const MODIF = "modif";

    const ARRAY_METHOD = 
    [
        self::CREATE,
        self::MODIF
    ];

    const MODEL_CLASS = "class";
    const MODEL_PROFIL = "profil";
    const MODEL_PROJECT = "project";

    const ARRAY_MODEL = 
    [
        self::MODEL_CLASS => self::ARRAY_CLASS_FIELD,
        self::MODEL_PROFIL => self::ARRAY_PROFIL_FIELD,
        self::MODEL_PROJECT => self::ARRAY_PROJECT_FIELD
    ];
    
    const NAME = "NAME";
    const CURSUS = "CURSUS";
    const STAT = "STAT";

    /**
     * 
     */

    const INT = "INT";
    const STR = "STRING";
    const EMAIL = "EMAIL";
    const DATE = "DATE";
    const TIME = "TIME";
    const DATETIME = "DATETIME";
    const ARRAY = "ARRAY";

    /**
     * 
     */

    const STAT_ADMIN = 1000;
    const STAT_STUDENT = 2000;

    const ADMIN = "administration";
    const STUDENT = "student";

    const ARRAY_STAT = 
    [
        self::STAT_ADMIN => self::ADMIN,
        self::STAT_STUDENT => self::STUDENT
    ];

    const CURSUS_PRG = 3000;
    const CURSUS_MKT = 4000;

    const PRG = "programmer";
    const MKT = "marketing";

    const ARRAY_CURSUS = 
    [
        self::CURSUS_PRG => self::PRG,
        self::CURSUS_MKT => self::MKT
    ];

    /**
     * 
     */

    const CLASS_NBR_CLASS = "NBR_CLASS";
    const CLASS_TIME = "TIME";
    const CLASS_DURATION = "DURATION";

    const ARRAY_CLASS_FIELD = 
    [
        self::NAME => array(self::STR, "Matière"),
        self::CLASS_NBR_CLASS => array(self::STR, "Nom de la salle"),
        self::CLASS_TIME => array(self::DATETIME, "Date et horaires"),
        self::CLASS_DURATION => array(self::INT, "Durée du cours"),
        self::CURSUS => array(self::ARRAY, "Cursus", self::ARRAY_CURSUS)
    ];

    /**
     * 
     */

    const PROFIL_BIRTH = "BIRTH";
    const PROFIL_EMAIL = "EMAIL";
    const PROFIL_PASSWORD = "PASSWORD";
    const PROFIL_STAT = "STAT";

    const ARRAY_PROFIL_FIELD = 
    [
        self::NAME => array(self::STR, "Nom - Prénom"),
        self::PROFIL_BIRTH => array(self::DATE, "Anniversaire"),
        self::PROFIL_EMAIL => array(self::STR, "Email"),
        /*self::PROFIL_PASSWORD,*/
        self::PROFIL_STAT => array(self::ARRAY, "Statut", self::ARRAY_STAT),
        self::CURSUS => array(self::ARRAY, "Cursus", self::ARRAY_CURSUS)
    ];

    /**
     * 
     */

    const PROJECT_DEADLINE = "DEADLINE";

    const ARRAY_PROJECT_FIELD = 
    [
        self::NAME => array(self::STR, "Nom du projet"),
        self::PROJECT_DEADLINE => array(self::DATE, "Deadline"),
        self::CURSUS => array(self::ARRAY, "Cursus", self::ARRAY_CURSUS)
    ];
}