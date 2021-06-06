<? ob_start() ?>

    <p>7622210449283</p>
    <form class="search-product">
        <label for="recherche">Code barre</label>
        <input placeholder="code" type="text" id="input_search" autofocus value="7622210449283" />
        <br>
        <label for="gramme">Entrer la quantité de produit consommé </label>
        <input placeholder="gramme" type="text" id="input_gram" />
        <br>
        <button type="button" id="submit_search">rechercher</button>
    </form>
    <output id="result_piece_sugar"></output>

    <div class="deck">
    </div>
    
<?php
$titre = "Ajax JS";
$content = ob_get_clean();
require "template.view.php";
?>