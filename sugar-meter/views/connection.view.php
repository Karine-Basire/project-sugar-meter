<? ob_start() ?>
    ici le contenu de ma page de connexion
<?php
$titre = "Connection";
$content = ob_get_clean();
require "template.view.php";
?>