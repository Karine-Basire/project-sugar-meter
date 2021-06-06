<? ob_start() ?>
page d'acceuil
<?php
$titre = "Bienvenue";
$content = ob_get_clean();
require "template.view.php";
?>