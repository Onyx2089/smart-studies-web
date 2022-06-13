<?php

require_once __DIR__ . '/lib.dashboard.IFormHtml.php';
require_once __DIR__ . '/../../model/interface/model.interface.IModel.php';

class FormHtml implements IFormHtml, IModel
{
    public static function getCreateForm($array)
    {
        $html = sprintf(self::SELECT_TYPE, self::BTN, '');
        
        $content = self::getFormInput($array);

        $html .= sprintf(self::CONTAINER, $content);

        //return print_r($array);

        return $html;
    }

    public static function getModifForm($array)
    {
        $html = sprintf(self::SELECT_TYPE, '', self::BTN);
        $html .= self::CONTAINER;

        return $html;
    }

    public static function getFormInput($array)
    {
        $content = '';
        foreach($array as $key => $field)
        {
            $input = false;

            if($field[0] == self::STR)
            {
                $input = $field[1] . " :" . sprintf(self::INPUT, self::INPUT_TEXT, "...");
                //$input = sprintf("<span>%s</span>", $input);
            }
            elseif($field[0] == self::INT)
            {
                $input = $field[1] . " :" . sprintf(self::INPUT, self::INPUT_NBR, "...") . "minutes";
            }
            elseif($field[0] == self::DATETIME)
            {
                $input = $field[1] . " :" . sprintf(self::INPUT, self::INPUT_DATETIME, "...");
            }
            elseif($field[0] == self::ARRAY)
            {
                $list = sprintf(self::LIST, $key);
                $options = '';

                foreach($field[2] as $value)
                {
                    $options .= sprintf(self::OPTION, $value);
                }

                $input .= $field[1] . " :" . $list . sprintf(self::DATALIST, $key, $options);
            }
            
            if($input != false)
            {
                $content .= sprintf(self::DIV_FIELD, $input);
            }
        }
        
        $content .= self::VALIDATE;

        return $content;
    }
}
