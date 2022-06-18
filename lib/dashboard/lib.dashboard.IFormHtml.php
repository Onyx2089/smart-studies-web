<?php

interface IFormHtml
{
    const TYPE_CREATE = "TYPE_CREATE";
    const TYPE_MODIF = "TYPE_MODIF";

    const BTN = "btnCM";
    const SELECT_TYPE = '<div class="f f1"> <div id="create" class="f ai-center jc-center %s f1 two-b"> <span class="one-f ft-1_5">Créer</span> </div> <div id="modif" class="f ai-center jc-center %s f1 two-b"> <span class="one-f ft-1_5">Modifier</span> </div> </div>';

    const CONTAINER_COL = '<div class="f flex-col f7"> %s </div>';
    const CONTAINER_ROW = '<div class="f flex-row f7"> %s </div>';
    const DIV_FIELD = '<div class="one f ai-center jc-center f1 wsn">  <span class="f ai-center jc-center ft-1_8 one-f"> %s </span> </div>';
    const VALIDATE = '<div class="four f ai-center jc-center f1"> <div id="createBtn" class="btn-validate f flex-col ai-center jc-center"> <span class="one-f ft-1">Créer</span> </div> </div>';

    /**
     * 
     */

    const INPUT = '<input id="%s" type="%s" class="input-t ft-1_5 one-f mrg-left-10 it" placeholder="%s">';

    const INPUT_TEXT = "text";
    const INPUT_EMAIL = "email";
    const INPUT_NBR = "number";
    const INPUT_DATE = "date";
    const INPUT_DATETIME = "datetime-local";

    const LIST = '<input id="%s_list" class="wid-100" list="%s">';
    const DATALIST = '<datalist id="%s">%s</datalist>';
    const OPTION = '<option value="%s">';

    const DATALIST_NAME = 'datalist';

    /**
     * 
     */

    const BLOCK = '<div class="f flex-col f1">%s</div>';

    const SEARCH_HEAD = '<div class="f f1"> <div class="f ai-center jc-end f1"> <span class="one-f ft-1_8">%s</span> </div> <div class="f ai-center jc-center f2"> <div class="btn-validate search f flex-col ai-center jc-center three-b"> <span class="one-f ft-1">%s</span> </div> </div> <div class="f ai-center f1"> <div class="f ai-center jc-center"> <i id="search" class="fa fa-search w3-text-teal" style="font-size:64px"></i> </div> </div> </div>';
    const LIST_MODEL = '<div class="f flex-col ai-center f5"> <div class="f flex-col ai-center scrool-search">%s</div> </div>';
    const LIST_ELEM = '<span class="one-f ft-1_5 mrg-top-2">%s</span>';

    const UPDATE_BLOCK = '<div class="f f1"> <div class="f ai-center jc-center f1"> <div class="btn-validate search f flex-col ai-center jc-center three-b"> <span class="one-f ft-1">Modifier</span> </div> </div> <div class="f ai-center jc-center f1"> <div class="f ai-center jc-center"> <i class="fa fa-trash w3-text-red" style="font-size:64px"></i> </div> </div>';
    const UPDATE_LIST = '<div class="f flex-col f5">%s</div>';
    const UPDATE_ELEM = '<div class="one f ai-center jc-center f1"> <span class="f ai-center jc-center ft-1_8 one-f">%s</span> </div>';

}
