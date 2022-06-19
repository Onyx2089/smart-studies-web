<?php 

interface ModelProject 
{
    const NAME = "NAME";
    const DEAD_LINE = "DEADLINE";
    const CURSUS = "CURSUS";

    const PROJECT_ARRAY = 
    [
        "Nom du projet" => self::NAME,
        "Deadline" => self::DEAD_LINE,
        "Cursus" => self::CURSUS
    ];
}