<?php
require_once "models/ProductManager.class.php";

class ProductsController
{
    //*Debut com perso* $this pour remplir l'attribut ci dessous
    //pour toutes mes fonctions que je vais programmer pour les routes ou le CRUD
    //je pourrai accéder à chaque fois a mes produits car ils seront chargés au niveau du constructeur
    //*fin com*
    private $productManager;

    //constructeur qui va instancier ProductManager
    public function __construct()
    {
        //instancie le ProductManager
        $this->productManager = new ProductManager();
        //chargement des produits
        $this->productManager->chargementProducts();
    }

    //gestion de la route views/product.view.php, création d'une nouvelle fonction qui va faire afficher le produit
    public function afficherProducts()
    {
        //*com perso* je n'ai pas accés à la variable private $productManager; du coup je met this pour y accéder
        //*com perso*La variable products va récupérer tous les produits de ProductManager
        $products = $this->productManager->getProducts();
        require "views/product.view.php";
    }

    public function deleteProduct($id)
    {
        // $nomImage = $this->productManager->getProductById($id)->getPicture();
        // unlink("public/img/".$nomImage);
        $this->productManager->deleteProductBD($id);
        header('Location: ' . URL . "favoris");
    }
}
