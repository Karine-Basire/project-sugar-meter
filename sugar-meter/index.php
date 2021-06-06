<?php 
require_once "controllers/ProductsController.controller.php";
//1-instancie mon controlleur de produits
$productController = new ProductsController;
//http://localhost/...
//htpps://www.sugarmeter.com/... (chemin absolu)
// define("URL", str_replace("index.php","",(isset($_SERVER['HTTPS']) ? "https" : "http").
// "://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));

// require_once "controllers/API.controller.php";
// $apiController = new APIController();

if(empty($_GET['page'])){
    require "views/home.view.php";
} else {
    switch($_GET['page']){
        case "accueil" : require "views/home.view.php";
        break;
        // case "favoris" : require "views/product.view.php";
        //1-et j'appelle la fonction afficherProduits present dans mon controlleur de produits
        case "favoris" : $productController->afficherProducts();
        break;
        case "sucre" : require "views/sugar.view.php";
        break;
        case "connexion" : require "views/connection.view.php";
        break;
    }
}
// //réalisation du système de routage
// try{
//     if(empty($_GET['page'])){
//         throw new Exception("La page n'existe pas");
//     } else {
//         $url = explode("/",filter_var($_GET['page'],FILTER_SANITIZE_URL));//permet de sécurisé de rajouter un filtre sur des champs passé par la mérhode get
//         if(empty($url[0]) || empty($url[1])) throw new Exception ("La page n'existe pas");
//         switch($url[0]){
//             case "front" : 
//                 switch($url[1]){
//                     case "accueil": echo "données JSON de l'accueil demandées";
//                     break;
//                     case "produit": echo "données JSON du produit ".$url[2]." demandées";
//                     break;
//                     case "consommations": echo "données JSON des consommations demandées";
//                     break;
//                     default : throw new Exception ("La page n'existe pas");
//                 }
//             break;
//             case "back" : echo "page back end demandée";
//             break;
//             default : throw new Exception ("La page n'existe pas");
//         }
//     }
// } catch (Exception $e){
//     $msg = $e->getMessage();
//     echo $msg;
// }
