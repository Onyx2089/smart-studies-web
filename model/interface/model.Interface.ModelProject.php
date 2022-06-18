<?php 

interface ModelProject 
{
    const NAME = "NAME";
    const DEAD_LINE = "DEADLINE";
    const CURSUS = "CURSUS";

    const PROJECT_ARRAY = 
    [
        self::NAME,
        self::DEAD_LINE,
        self::CURSUS
    ];
}