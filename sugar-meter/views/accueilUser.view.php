<? ob_start() ?>
page d'accueil
<?php
$titre = "Bienvenue";
$content = ob_get_clean();
require "views/commons/template.view.php";