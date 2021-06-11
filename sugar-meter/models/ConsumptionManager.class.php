<?php
require_once "Model.class.php";
require_once "Consumption.class.php";

class ConsumptionManager extends Model
{
    private $consumptions;

    // ***Commentaire perso à enlever***
    //pas necessaire de définir un constructeur ci celui-ci est vide de base il est là
    // public function __construct()
    // {vide... }
    // ***Fin Commentaire perso à enlever***

    //création d'un tableau
    public function ajoutConsumption($consumption)
    {
        $this->consumptions[] = $consumption;
    }

    //retourne un tableau
    public function getConsumptions()
    {
        return $this->consumptions;
    }

    //récupère toutes les consommations
    public function chargementConsumption()
    {
        $req = $this->getBdd()->prepare("SELECT * FROM consumption ORDER BY idconsumption DESC");
        $req->execute();
        // **A enlever**fetch_assoc evite les doublons
        $myConsumptions = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();
        // echo "<pre>";
        // print_r($consumptions);
        // echo "<pre>";

        foreach ($myConsumptions as $consumption) {
            $conso = new Consumption($consumption['idconsumption'],$consumption['productquantity'], 
            $consumption['sugarquantity'], $consumption['dtconsumption']);
            $this->ajoutConsumption($conso);
        }
    }

    //récupère les consommations par jour(date)
// public function consumptionsByDay(){

// $dateStart = $_POST['dateStart'];
// // NETTOYAGE 
// $dateStart = htmlspecialchars(strip_tags(trim($dateStart)));

// $req = "SELECT cl.idClient, cl.username,
//     COUNT(co.sugarquantity) AS nbConsumption,
//     SUM(co.sugarquantity) AS consumptionTotal 
// FROM client AS cl LEFT JOIN consumption AS co 
// ON cl.idClient = co.idClient 
// where co.dtconsumption = :dateDay 
// group by cl.idClient";

// $stmt = $this->getBdd()->prepare($req);
// $stmt ->bindValue(':dateDay', $dateStart, PDO::PARAM_STR);

// $stmt ->execute();
// $consumptionsByDay = $stmt->fetchAll(PDO::FETCH_ASSOC);
// $stmt->closeCursor();
// return $consumptionsByDay;

//     }
}