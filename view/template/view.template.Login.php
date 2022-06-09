<!DOCTYPE html>
<html>

    <?php require_once __DIR__ . '/../../view/template/view.template.Base.php'; ?>

    <body>
        

        <img src="/git/web_final/public/img/background.png" class="wid-100 op-03"/>

        
        <div class="fix wid-100 hei-100 f flex-col ai-center top-0">
            <div class="ft-3 one-f f f1 ai-center">
                Bienvenue sur le nouveau PEGA
            </div>
            <div class="wid-18 f f1 flex-col ai-center">
                <div class="wid-100 f f1 flex-col">
                    <div class="margin hei-23 two-b wid-100 f ai-center brd-40 mrg-top-5 mrg-bottom-5">
                        <!--<span class="input-t ft-1_5 one-f mrg-left-10">Identifiant</span>-->
                        <input id="email" type="text" class="input-t ft-1_5 one-f mrg-left-10 it" placeholder="Identifiant">
                    </div>
                    <div class="hei-23 two-b wid-100 f ai-center brd-40">
                        <!--<span class="input-t ft-1_5 one-f mrg-left-10">Mot de passe</span>-->
                        <input id="password" type="password" class="input-t ft-1_5 one-f mrg-left-10 it" placeholder="Mot de passe">
                    </div>
                    <span class="forget-pass ft-1 one-f mrg-top-5 als-end ptr">Mot de passe oublié ?</span>
                </div>
            </div>
            <div class="connect-block wid-100 f f1 flex-col ai-center">
                <div class="connect three-b f jc-center ai-center brd-40 wid-10 hei-23">
                    <a class="ptr" onclick="Login()">
                        <span class="connect-text ft-1_5 one-f">Se connecter</span>
                    </a>
                </div>
            </div>
        </div>

        <script src="http://localhost:82/git/web_final/public/js/public.js.Login.js"></script>

    </body>
</html>