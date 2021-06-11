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
            <td>
                <form method="POST" action="<?= URL ?>favoris/suppression/<?= $products[$i]->getId(); ?>" onSubmit="return confirm('Voulez-vous vraiment supprimer le produit ?');">
                    <button class="btn btn-danger" type="submit">Supprimer</button>
                </form>
            </td>
        <?php endfor; ?>
</table>
<?php
$titre = "Favoris";
$content = ob_get_clean();
require "views/commons/template.view.php";
