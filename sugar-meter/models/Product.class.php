<?php
class Product
{
    private $id;
    private $name;
    private $SugarThousand;
    private $picture;
    private $codeBar;

    //contient la liste des produits
    public static $products;

    //constucteur permettant de générer un produit
    public function __construct($id, $name, $SugarThousand, $picture, $codeBar)
    {
        //partie de gauche $this->$name fait référence à l'attribut(private $name) celui de drooite aux paramètre de fonction du construct
        $this->id = $id;
        $this->name = $name;
        $this->SugarThousand = $SugarThousand;
        $this->picture = $picture;
        $this->codeBar = $codeBar;
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

    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }

    public function getSugarThousand()
    {
        return $this->SugarThousand;
    }
    public function setSugarThousand($SugarThousand)
    {
        $this->SugarThousand = $SugarThousand;
    }

    public function getPicture()
    {
        return $this->picture;
    }
    public function setPicture($picture)
    {
        $this->picture = $picture;
    }

    public function getCodeBar()
    {
        return $this->codeBar;
    }
    public function setCodeBar($codeBar)
    {
        $this->codebar = $codeBar;
    }
}
