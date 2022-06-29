<?php

require_once __DIR__ . '/lib.dashboard.IFormHtml.php';
require_once __DIR__ . '/../../model/interface/model.interface.IModel.php';

class FormHtml implements IFormHtml, IModel
{
    public static function getCreateForm($array)
    {
        $html = self::selectBtn(self::TYPE_CREATE);
        
        $content = self::getCreateInput($array);

        $html .= sprintf(self::CONTAINER_COL, $content);

        //return print_r($array);

        return $html;
    }

    public static function getModifForm($array)
    {
        $html = self::selectBtn(self::TYPE_MODIF);

        $search = sprintf(self::SEARCH_HEAD, self::getList($array), sprintf(self::INPUT, self::INPUT_TEXT, self::INPUT_TEXT, "..."));

        $left =  $search . sprintf(self::LIST_MODEL, sprintf(self::LIST_ELEM, "rien de trouvé"));
        $left = sprintf(self::BLOCK, $left);

   
        $update = self::getCreateInput($array, true);

        $update .= self::HIDDEN_ID;

        $update .= self::UPDATE_BLOCK;

        $right = sprintf(self::UPDATE_LIST, $update);

        $right =  sprintf(self::BLOCK, $right);

        $html .= sprintf(self::CONTAINER_ROW, $left . $right);

        return $html;
    }

    public static function getCreateInput($array, $bool = false)
    {
        $content = '';
        foreach($array as $key => $field)
        {
            $input = false;

            if($field[0] == self::STR)
            {
                $input = $field[1] . " :" . sprintf(self::INPUT, strtolower($key), self::INPUT_TEXT, "...");
                //$input = sprintf("<span>%s</span>", $input);
            }
            elseif($field[0] == self::INT)
            {
                $input = $field[1] . " :" . sprintf(self::INPUT, strtolower($key), self::INPUT_NBR, "...") . "minutes";
            }
            elseif($field[0] == self::DATE)
            {
                $input = $field[1] . " :" . sprintf(self::INPUT, strtolower($key), self::INPUT_DATE, "...");
            }
            elseif($field[0] == self::DATETIME)
            {
                $input = $field[1] . " :" . sprintf(self::INPUT, strtolower($key), self::INPUT_DATETIME, "...");
            }
            elseif($field[0] == self::ARRAY)
            {
                $list = sprintf(self::LIST, strtolower($key), strtolower($key));
                $options = '';

                foreach($field[2] as $value)
                {
                    $options .= sprintf(self::OPTION, $value);
                }

                $input = $field[1] . " :" . $list . sprintf(self::DATALIST, strtolower($key), $options);
            }
            
            if($input != false)
            {
                $content .= sprintf(self::DIV_FIELD, $input);
            }
        }
        
        if(!$bool)
        {
            $content .= self::VALIDATE;
        }

        return $content;
    }

    public static function selectBtn($type)
    {
        if($type == self::TYPE_CREATE)
        {
            return $html = sprintf(self::SELECT_TYPE, self::BTN, '');
        }
        elseif($type == self::TYPE_MODIF)
        {
            return sprintf(self::SELECT_TYPE, '', self::BTN);
        }
    }

    public static function getList($array)
    {

        //echo self::LIST;
        //die();
        $list = sprintf(self::LIST, self::DATALIST_NAME, self::DATALIST_NAME);
        $options = '';

        foreach($array as $value)
        {
            $options .= sprintf(self::OPTION, $value[1]);
        }
        
        return $list . sprintf(self::DATALIST, self::DATALIST_NAME, $options);
    }
}
