<?php
session_start(); //on peut utiliser les variables de session pour transmettre des infos de pages en pages
require_once "controllers/ProductsController.controller.php";
require_once "controllers/ConsumptionsController.controller.php";
require_once "controllers/Usercontroller.controller.php";
//1-instancie mon controlleur de produits
$productController = new ProductsController();
$consumptionController = new ConsumptionsController();
$userController = new UserController();
//activation des SESSION pour pouvoir
//http://localhost/...
//htpps://www.sugarmeter.com/... (chemin absolu)
define("URL", str_replace("index.php", "", (isset($_SERVER['HTTPS']) ? "https" : "http") .
    "://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));

// require_once "controllers/API.controller.php";
// $apiController = new APIController();

// //réalisation du système de routage
try {
    if (empty($_GET['page'])) {
        require "views/accueilUser.view.php";
    } else {
        //permet de sécurisé de rajouter un filtre sur des champs passé par la mérhode get
        $url = explode("/", filter_var($_GET['page'], FILTER_SANITIZE_URL));
        //         if(empty($url[0]) || empty($url[1])) throw new Exception ("La page n'existe pas");
        switch ($url[0]) {
            case "login":
                $userController->getPageLogin();
                break;
            case "connexion":
                $userController->connectionUser();
                break;
            case "user":
                $userController->getAccueilUser();
                break;
                case "deconnexion" : $userController->deconnection();
                break;
                // case "favoris" : require "views/product.view.php";
                //1-et j'appelle la fonction afficherProduits present dans mon controlleur de produits
            case "favoris":
                if (empty($url[1])) {
                    $productController->afficherProducts();
                } else if ($url[1] === "suppression") {
                    $productController->deleteProduct($url[2]);
                } else {
                    throw new Exception("La page n'existe pas");
                }
                break;
            case "sucre":
                require "views/sugar.view.php";
                break;
            case "consommations":
                if (empty($url[1])) {
                    $consumptionController->afficherConsumptions();
                } else {
                    throw new Exception("La page n'existe pas");
                }
                break;
            default:
                throw new Exception("La page n'existe pas");
        }
    }
} catch (Exception $e) {
    echo $e->getMessage();
    //    echo $msg;
}
