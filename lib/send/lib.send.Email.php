<?php

require_once __DIR__ . '/lib.send.IEmail.php';

class Email implements IEmail
{
    private $text = false;
    private $to = false;

    public function setText($text)
    {
        $this->text = $text;
    }

    public function setTo($to)
    {
        $this->to = $to;
    }

    public static function send()
    {

        //return mail("arthur.rubiralta@ecole-89.com", "password", "azerty");
    }
}