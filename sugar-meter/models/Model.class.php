<?php
    // ***Commentaire perso à enlever***
    // Cette class est abstract ne va jamais etre instancié directement chaque class devra etendre la classModel(héritage)
    // ERR permet de gerer les erreurs
    // a chaque fois qu'on veut se co on appelle la fonction getBDD
    // cette fonction a un role crucial, elle va faire deux choses:
    // 1-elle va tester une connexion pour savoir si elle est paramétré ou non
    // 2-si pas de co alors je crée la co en appellant la fonction serBdd
    // si la co existe je retourne la valeur de l'attribut static
    // ***Fin Commentaire perso à enlever***

//gestion de connexion à la BDD
 abstract class Model{
     private static $pdo;

     private static function setBDD(){
         self::$pdo = new PDO("mysql:host=localhost;dbname=sugar;charset=utf8", "root", "");
         self::$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
     }

     protected function getBdd(){
         if(self::$pdo === null){
             self::setBdd();
         }
         return self::$pdo;
     }
 }