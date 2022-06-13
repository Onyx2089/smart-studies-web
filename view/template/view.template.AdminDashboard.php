<!DOCTYPE html>
<html>

    <?php require_once __DIR__ . '/../../view/template/view.template.Base.php'; ?>

    <body>
        <?php require_once __DIR__ . '/../../view/template/view.template.Header.php'; ?>
        <img src="/git/web_final/public/img/background.png" class="wid-100 op-03"/>

        
        <div class="content f flex-col">
        <div class="pic-name f flex-col ai-center jc-center f1">
            <span class="one-f ft-1_5"><?= $model ?></span>
        </div>
        
        <div class="data f flex-col f5 two-b op-02">
            <?= $content ?>

            <!--
            <div class="f f1">
                <div class="f ai-center jc-center f1 two-b">
                    <span class="one-f ft-1_5">Créer</span>
                </div>
                <div class="f ai-center jc-center btnCM f1 two-b">
                    <span class="one-f ft-1_5">Modifier</span>
                </div>
            </div>
            <div class="f f7">
                <div class="f flex-col f1">
                    <div class="f f1">
                        <div class="f ai-center jc-end f1">
                            <span class="one-f ft-1_8">Type</span>
                        </div>
                        <div class="f ai-center jc-center f2">
                            <div class="btn-validate search f flex-col ai-center jc-center three-b">
                                <span class="one-f ft-1">Inconnue ...</span>
                            </div>
                        </div>
                        <div class="f ai-center f1">
                            <div class="f ai-center jc-center">
                                <i class="fa fa-search w3-text-teal" style="font-size:64px"></i>
                            </div>
                        </div>
                    </div>
                    <div class="f flex-col ai-center f5">
                        <div class="f flex-col ai-center scrool-search">
                            <span class="one-f ft-1_5 mrg-top-2">prénom.nom@gmail.com</span>
                            <span class="one-f ft-1_5 mrg-top-2">prénom.nom@gmail.com</span>
                            <span class="one-f ft-1_5 mrg-top-2">prénom.nom@gmail.com</span>
                            <span class="one-f ft-1_5 mrg-top-2">prénom.nom@gmail.com</span>
                            <span class="one-f ft-1_5 mrg-top-2">prénom.nom@gmail.com</span>
                            <span class="one-f ft-1_5 mrg-top-2">prénom.nom@gmail.com</span>
                            <span class="one-f ft-1_5 mrg-top-2">prénom.nom@gmail.com</span>
                            <span class="one-f ft-1_5 mrg-top-2">prénom.nom@gmail.com</span>
                            <span class="one-f ft-1_5 mrg-top-2">prénom.nom@gmail.com</span>
                            <span class="one-f ft-1_5 mrg-top-2">prénom.nom@gmail.com</span>
                            <span class="one-f ft-1_5 mrg-top-2">prénom.nom@gmail.com</span>
                            <span class="one-f ft-1_5 mrg-top-2">prénom.nom@gmail.com</span>
                            <span class="one-f ft-1_5 mrg-top-2">prénom.nom@gmail.com</span>
                            <span class="one-f ft-1_5 mrg-top-2">prénom.nom@gmail.com</span>
                            <span class="one-f ft-1_5 mrg-top-2">prénom.nom@gmail.com</span>
                            <span class="one-f ft-1_5 mrg-top-2">prénom.nom@gmail.com</span>
                            <span class="one-f ft-1_5 mrg-top-2">prénom.nom@gmail.com</span>
                            <span class="one-f ft-1_5 mrg-top-2">prénom.nom@gmail.com</span>
                        </div>
                    </div>
                </div>
                <div class="f flex-col f1">
                    <div class="f flex-col f5">
                        <div class="one f ai-center jc-center f1">
                            <span class="f ai-center jc-center ft-1_8 one-f">Nom : inconue</span>
                        </div>
                        <div class="one f ai-center jc-center f1">
                            <span class="f ai-center jc-center ft-1_8 one-f">Prénom : inconue</span>
                        </div>
                        <div class="one f ai-center jc-center f1">
                            <span class="f ai-center jc-center ft-1_8 one-f">Date de naissance : jj/mm/aaa</span>
                        </div>
                        <div class="two f ai-center jc-center f1">
                            <span class="f ai-center jc-center ft-1_8 one-f">Email : nom.prénom@gmail.com</span>
                        </div>
                    </div>
                    <div class="f f1">
                        <div class="f ai-center jc-center f1">
                            <div class="btn-validate search f flex-col ai-center jc-center three-b">
                                <span class="one-f ft-1">Modifier</span>
                            </div>
                        </div>
                        <div class="f ai-center jc-center f1">
                            <div class="f ai-center jc-center">
                                <i class="fa fa-trash w3-text-red" style="font-size:64px"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            -->

        </div>

        
            

        <?php LinkClass::getLink($js, LinkClass::TYPE_JS); ?>

    </body>
</html>
    