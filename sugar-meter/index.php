<?php
require_once "controllers/ProductsController.controller.php";
//1-instancie mon controlleur de produits
$productController = new ProductsController;
//http://localhost/...
//htpps://www.sugarmeter.com/... (chemin absolu)
define("URL", str_replace("index.php", "", (isset($_SERVER['HTTPS']) ? "https" : "http") .
    "://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));

// require_once "controllers/API.controller.php";
// $apiController = new APIController();

// //réalisation du système de routage
try {
    if (empty($_GET['page'])) {
        require "views/home.view.php";
    } else {
        $url = explode("/", filter_var($_GET['page'], FILTER_SANITIZE_URL)); //permet de sécurisé de rajouter un filtre sur des champs passé par la mérhode get
        //         if(empty($url[0]) || empty($url[1])) throw new Exception ("La page n'existe pas");
        switch ($url[0]) {
            case "accueil":
                require "views/home.view.php";
                break;
                // case "favoris" : require "views/product.view.php";
                //1-et j'appelle la fonction afficherProduits present dans mon controlleur de produits
            case "favoris":
                if (empty($url[1])) {
                    $productController->afficherProducts();
                } else if ($url[1] === "afficher") {
                    echo "affichage d'un produit";
                } else if ($url[1] === "suppression") {
                    echo "supression d'un produit";
                } else {
                    throw new Exception("La page n'existe pas");
                }
                break;
            case "sucre":
                require "views/sugar.view.php";
                break;
            case "connexion":
                require "views/connection.view.php";
                break;
            default:
                throw new Exception("La page n'existe pas");
        }
    }
} catch (Exception $e) {
    echo $e->getMessage();
    //    echo $msg;
}
