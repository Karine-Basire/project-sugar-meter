<?php
require_once "Model.class.php";
require_once "Product.class.php";

// ***Commentaire perso à enlever*** permet de gerer les produits et de définir les fonctionnalités d'ajout, supression etc...
//gestion des produits, définit les fonctionnalités(ajout...)
class ProductManager extends Model
{
    private $products;
    // ***Commentaire perso à enlever***
    //pas necessaire de définir un constructeur ci celui-ci est vide de base il est là
    // public function __construct()
    // {vide... }
    // ***Fin Commentaire perso à enlever***

    //création d'un tableau
    public function ajoutProduct($product)
    {
        $this->products[] = $product;
    }
    //retourne un tableau
    public function getProducts()
    {
        return $this->products;
    }
    //récupère tous les produits
    public function chargementProducts()
    {
        $req = $this->getBdd()->prepare("SELECT * FROM product");
        $req->execute();
        // **A enlever**fetch_assoc evite les doublons
        $myProducts = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();

        foreach ($myProducts as $product) {
            $prod = new Product($product['idproduct'], $product['name'], $product['sugarthousand'], $product['picture'], $product['codebar']);
            $this->ajoutProduct($prod);
        }
    }

    public function getProductById($id)
    {
        $imax = count($this->products);
        for ($i = 0; $i < $imax; ++$i) {
            if ($this->products[$i]->getId() === $id) {
                return $this->products[$i];
            }
        }
        throw new Exception("Le produit n'existe pas");
    }

    public function deleteProductBD($id)
    {
        $req = "
        Delete from product where idproduct = :idproduct
        ";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":idproduct", $id, PDO::PARAM_INT);
        $resultat = $stmt->execute();
        $stmt->closeCursor();
        if ($resultat > 0) {
            //je récupère
            $product = $this->getProductById($id);
            //je met à jour mon tableau
            unset($product);
        }
    }
}
