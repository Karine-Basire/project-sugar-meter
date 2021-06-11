<?php
class Consumption
{
    private $id;
    // private $productQuantity;
    // private $sugarQuantity;
    private $dateConsumption;
   
    //contient la liste des consommations
    public static $consumptions;

    //constucteur permettant de générer un produit
    public function __construct($id, $productQuantity, $sugarQuantity, $dateConsumption)
    {
        //partie de gauche $this->$productQuantity fait référence à l'attribut(private $productQuantity) celui de drooite aux paramètre de fonction du construct
        $this->id = $id;
        $this->productQuantity = $productQuantity;
        $this->sugarQuantity = $sugarQuantity;
        $this->dateConsumption = $dateConsumption;  
    }

    //création les getters et setters car nos attribut sont en private
    //getter on accède au info, il retourne l'attribut concerné
    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getProductQuantity()
    {
        return $this->productQuantity;
    }
    public function setProductQuantity($productQuantity)
    {
        $this->productQuantity = $productQuantity;
    }

    public function getSugarQuantity()
    {
        return $this->sugarQuantity;
    }
    public function setSugarQuantity($sugarQuantity)
    {
        $this->sugarQuantity = $sugarQuantity;
    }

    public function getDateConsumption()
    {
        return $this->dateConsumption;
    }
    public function setDateConsumption($dateConsumption)
    {
        $this->dateConsumption = $dateConsumption;
    }
}