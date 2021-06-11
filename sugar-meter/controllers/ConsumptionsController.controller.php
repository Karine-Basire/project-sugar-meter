<?php
require_once "models/ConsumptionManager.class.php";

class ConsumptionsController
{
    //*Debut com perso* $this pour remplir l'attribut ci dessous
    //pour toutes mes fonctions que je vais programmer pour les routes ou le CRUD
    //je pourrai accéder à chaque fois a mes produits car ils seront chargés au niveau du constructeur
    //*fin com*
    private $consumptionManager;

    //constructeur qui va instancier ProductManager
    public function __construct()
    {
        //instancie le ProductManager
        $this->consumptionManager = new ConsumptionManager();
        //chargement des produits
        $this->consumptionManager->chargementConsumption();
    }

    //gestion de la route views/product.view.php, création d'une nouvelle fonction qui va faire afficher livre
    public function afficherConsumptions()
    {
        //*com perso* je n'ai pas accés à la variable private $productManager; du coup je met this pour y accéder
        //*com perso*La variable products va récupérer tous les produits de ProductManager
        $consumptions = $this->consumptionManager->getConsumptions();
        require "views/consumption.view.php";
    }

    // public function DateConsumptions()
    // {
    //     $consumptions = $this->consumptionManager->getConsumptionsByDay();
    //     require "views/consumption.view.php";
    // }
}
