<!DOCTYPE html>
<html>

    <?php require_once __DIR__ . '/view.ViewBase.php'; ?>

    <body>
        <?php require_once __DIR__ . '/view.ViewHeader.php'; ?>
        <img src="/git/web_final/public/img/background.png" class="wid-100 op-03"/>

        
        <div class="content f flex-col">
        <div class="pic-name f flex-col ai-center jc-center f1">
            <span class="one-f ft-1_5"><?= $model ?></span>
        </div>
        
        <div class="data f flex-col f5 two-b op-02">
            <?= $content ?>
        </div>

        <?php LinkClass::getLink($js, LinkClass::TYPE_JS); ?>

    </body>
</html>
    