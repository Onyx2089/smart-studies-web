<!DOCTYPE html>
<html>

    <?php require_once __DIR__ . '/view.ViewBase.php'; ?>

    <body>
        <?php require_once __DIR__ . '/view.ViewHeader.php'; ?>
        <img src="/git/web_final/public/img/background.png" class="wid-100 op-03"/>

        <div class="content f flex-col">
            <div class="pic-name f flex-col ai-center jc-center f1">
                <span id="admin" class="one-f ft-1_5">Admin</span>
            </div>
            <div class="data f flex-col f5 two-b op-02">
                <div class="f f1 ">
                    <div class="f jc-center ai-center f1">
                        <div id="student" class="btn-validate f flex-col ai-center jc-center idx-999">
                            <span id="" class="one-f ft-1">étudiant</span>
                        </div>
                    </div>
                    <div class="f jc-center ai-center f1">
                        <div id="class" class="btn-validate f flex-col ai-center jc-center idx-999">
                            <span class="one-f ft-1">cour</span>
                        </div>
                    </div>
                </div>
                <div class="f f1 ">
                    <div class="f jc-center ai-center f1">
                        <div id="project" class="btn-validate f flex-col ai-center jc-center idx-999">
                            <span class="one-f ft-1">projet</span>
                        </div>
                    </div>
                    <div class="f jc-center ai-center f1">
                        <div id="news" class="btn-validate f flex-col ai-center jc-center idx-999">
                            <span class="one-f ft-1">news</span>
                        </div>
                    </div>
                </div>

                <div class="all-place f ai-center jc-center">
                        <div class="admin-icon "></div>
                </div>
            </div>
        </div>

        <?php LinkClass::getLink($js, LinkClass::TYPE_JS); ?>

    </body>
</html>
    