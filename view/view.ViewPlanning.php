<!DOCTYPE html>
<html>
    
    <?php require_once __DIR__ . '/view.ViewBase.php'; ?>

    <body>

        <?php require_once __DIR__ . '/view.ViewHeader.php'; ?>
        <img src="/git/web_final/public/img/background.png" class="wid-100 op-03"/>

        <div class="content f flex-col">
            <div class="f ai-center jc-center f1">
                <span class="ft-1_8 one-f">Planning / Cours</span>
            </div>
            <div class="f  f5 op-02">
                <div class="f flex-col f1 bar-b">
                    <div class="f ai-center jc-center f1 two-b">
                        <span class="ft-1_8 one-f">Planning</span>
                    </div>
                    <div class="f flex-col f5">
                        <div class="f jc-space-between ai-center f1 bar-w">
                            <span class="mrg-left-10 ft-1_5 one-f">Cours</span>
                            <span class="ft-1_5 one-f">salle</span>
                            <span class="mrg-right-10 ft-1_5 one-f">Horaires</span>
                        </div>
                        <div id="class" class="f6 scrool-auto">
                        </div>
                    </div>
                </div>
                <div class="f flex-col f1 bar-b">
                    <div class="f ai-center jc-center f1 two-b">
                        <span class="ft-1_8 one-f">Projets</span>
                    </div>
                    <div class="f flex-col f5">
                        <div class="f jc-space-arround ai-center f1 bar-w">
                            <span class="mrg-left-10 ft-1_5 one-f">Projet</span>
                            <span class="mrg-right-10 ft-1_5 one-f">Date de rendu</span>
                        </div>
                        <div id="project" class="f6 scrool-auto">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php LinkClass::getLink($js, LinkClass::TYPE_JS); ?>

        <script>
            getClass(<?= $cursus ?>)
            getProject(<?= $cursus ?>)
        </script>

    </body>
</html>