<?php
// ***Commentaire perso à enlever***
// Cette class est abstract ne va jamais etre instancié directement chaque class devra etendre la classModel(héritage)
// ERR permet de gerer les erreurs
// a chaque fois qu'on veut se co on appelle la fonction getBDD
// cette fonction a un role crucial, elle va faire deux choses:
// 1-elle va tester une connexion pour savoir si elle est paramétré ou non
// 2-si pas de co alors je crée la co en appellant la fonction setBdd
// si la co existe je retourne la valeur de l'attribut static
// ***Fin Commentaire perso à enlever***

//gestion de connexion à la BDD
abstract class Model
{

    private const HOST = 'localhost';
    private const DB = 'sugar';
    private const USER = 'root';
    private const PWD = '';

    private static $pdo;//on le met en static pour qu'il soit accessible pour toute les class(fille) qui heritera de la class Model

    //function setBDD en private pour qu'elle ne soit pas appellé par des algorythme tiers et ni par les class filles
    //la connexion sera appellé juste avec la fonction getBDD
    private static function setBDD(){
        //je remplis mon attribut static pdo
        self::$pdo = new PDO('mysql:host='. self::HOST . ';dbname='. self::DB,
        self::USER,
        self::PWD,
        [PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8']
    );
        //gestion des erreurs 
        self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }
    //pattern singleton
    protected function getBdd()
    {
        if (self::$pdo === null) {
            self::setBdd();
        }
        return self::$pdo;
    }
}
