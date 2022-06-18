<?php

interface IRand
{
    const ALL = self::TINY . self::UPPERCASE . self::NUMBER;

    const TINY = "abcdefghijklmnopqrstuvwxyz";
    const UPPERCASE = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    const NUMBER = "0123456789";
    const SPECIAL = "&~#{}()[]-|_@=+*/.,;?!:";
}