<?php

interface IFormHtml
{
    const BTN = "btnCM";
    const SELECT_TYPE = '<div class="f f1"> <div class="f ai-center jc-center %s f1 two-b"> <span class="one-f ft-1_5">Créer</span> </div> <div class="f ai-center jc-center %s f1 two-b"> <span class="one-f ft-1_5">Modifier</span> </div> </div>';

    const CONTAINER = '<div class="f flex-col f7"> %s </div>';
    const DIV_FIELD = '<div class="one f ai-center jc-center f1 wsn">  <span class="f ai-center jc-center ft-1_8 one-f"> %s </span> </div>';
    const VALIDATE = '<div class="four f ai-center jc-center f1"> <div class="btn-validate f flex-col ai-center jc-center"> <span class="one-f ft-1">Créer</span> </div> </div>';


    const INPUT = '<input type="%s" class="input-t ft-1_5 one-f mrg-left-10 it" placeholder="%s">';

    const INPUT_TEXT = "text";
    const INPUT_EMAIL = "email";
    const INPUT_NBR = "number";
    const INPUT_DATETIME = "datetime-local";

    const LIST = '<input list="%s">';
    const DATALIST = '<datalist id="%s">%s</datalist>';
    const OPTION = '<option value="%s">';

    /*
    const INPUT_TEXT = '<input type="text" class="input-t ft-1_5 one-f mrg-left-10 it" placeholder="%s">';
    const INPUT_EMAIL = '<input type="email" class="input-t ft-1_5 one-f mrg-left-10 it" placeholder="%s">';
    const INPUT_NBR = '<input type="number" class="input-t ft-1_5 one-f mrg-left-10 it" placeholder="%s">';
    const INPUT_DATETIME = '<input type="datetime-local" class="input-t ft-1_5 one-f mrg-left-10 it">';
    */

}
