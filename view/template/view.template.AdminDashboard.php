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

        <?php print_r($content); ?>
        <!--
        <div class="data f flex-col f5 two-b op-02">

            <div class="f f1">
                <div class="f ai-center jc-center btnCM f1 two-b">
                    <span class="one-f ft-1_5">Créer</span>
                </div>
                <div class="f ai-center jc-center f1 two-b">
                    <span class="one-f ft-1_5">Modifier</span>
                </div>
            </div>
            <div class="f flex-col f7">
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
                <div class="three f ai-center jc-center f1">
                    <span class="f ai-center jc-center ft-1_8 one-f">Classe : inconnue<span>
                </div>
                <div class="four f ai-center jc-center f1">
                    <div class="btn-validate f flex-col ai-center jc-center">
                        <span class="one-f ft-1">Créer</span>
                    </div>
                </div>
            </div>
            -->


    </body>
</html>
    