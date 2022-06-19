<?php 

interface ModelClass 
{
    const NAME = "NAME";
    const NBR_CLASS = "NBR_CLASS";
    const TIME = "TIME";
    const DURATION = "DURATION";
    const CURSUS = "CURSUS";

    const CLASS_ARRAY = 
    [
        "Matière" => self::NAME,
        "Nom de la salle" => self::NBR_CLASS,
        "Date et horaires" => self::TIME,
        "Durée du cours" => self::DURATION,
        "Cursus" => self::CURSUS
    ];
}