<?php
ob_start();
?>

<table>
    <tr>
        <th>Id</th>
        <th>Image</th>
        <th>Nom</th>
        <th>Pourcentage</th>
        <th>code barre</th>
        <th>Supression</th>
    </tr>
    <?php
    for ($i = 0; $i < count($products); $i++) :
    ?>
        <tr>
            <td><?= $products[$i]->getId() ?></td>
            <td><img src="public/img/<?= $products[$i]->getPicture(); ?>" alt="prince"></td>
            <td><?= $products[$i]->getName() ?></td>
            <td><?= $products[$i]->getSugarThousand() ?></td>
            <td><?= $products[$i]->getcodeBar() ?></td>
            <td><a href"">Supprimer</a></td>
        </tr>
    <?php endfor; ?>
</table>
<?php
$titre = "Favoris";
$content = ob_get_clean();
require "template.view.php";
?>