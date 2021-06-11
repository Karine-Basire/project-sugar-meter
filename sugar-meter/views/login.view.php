<? ob_start(); ?>

<form method="POST" action="<?= URL ?>connexion">
    <div>
        <label for="mail">Login</label>
        <input class="champ" type="email" name="mail" placeholder="Email" />
        <small id="emailHelp">nous ne partagerons jamais votre e-mail avec quelqu'un d'autre</small>
    </div>
    <div>
        <label for="password1">password</label>
        <input class="champ" type="password" name="password" placeholder="Password" />
    </div>
    <button class="bt" type="submit" name="login" value="Login">Valider</button>
    </div>
</form>

<?php
$content = ob_get_clean();
$titre = "Login";
require "views/commons/template.view.php";
