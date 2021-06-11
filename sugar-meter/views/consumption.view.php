<? ob_start() ?>

<!-- <form action="./getConsumption.php" method="post">
    <label>Sélectionner une date de début :</label>
    <input name="dateStart" value="dateStart" type="date" required>
    <label>Sélectionner une date de fin :</label>
    <input name="dateEnd" value="dateEnd" type="date" required>
    <input type="submit" name="submit">
</form> -->
<table>
    <tr>
        <th>Id</th>
        <th>quantité du produit</th>
        <th>quantité de sucre</th>
        <th>date de consommations</th>
    </tr>
    <?php
    for ($i = 0; $i < count($consumptions); $i++) :
    ?>
        <tr>
            <td><?= $consumptions[$i]->getId() ?></td>
            <td><?= $consumptions[$i]->getProductQuantity() ?></td>
            <td><?= $consumptions[$i]->getSugarQuantity() ?></td>
            <td><?= $consumptions[$i]->getDateConsumption() ?></td>
        </tr>
    <?php endfor; ?>
</table>
<form action="./getConsumption.php" method="post">
    <label>Sélectionner une date de début :</label>
    <input name="dateStart" value="dateStart" type="date" required>
    <label>Sélectionner une date de fin :</label>
    <input name="dateEnd" value="dateEnd" type="date" required>
    <input type="submit" name="submit">
</form>

<?php
$titre = "Consommation journée";
$content = ob_get_clean();
require "views/commons/template.view.php";
