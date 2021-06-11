<?php

require_once "models/Model.class.php";


//fonction qui va chercher l'information et la renvoie au controller
class UserManager extends Model
{

    private function getPasswordUser($login)
    {
        $req = 'SELECT * FROM client WHERE mail = :mail';
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindvalue(":mail", $login, PDO::PARAM_STR);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        return $user['password'];
    }

    //fonction qui retourne si la connexion est autorisé ou non
    //renvoie un booléen
    public function isConnectionValid($login, $password)
    { //elle prend le login et le password qui lui est envoyé

        //actions de vérifications
        $passwordBdd = $this->getPasswordUser($login);
        return password_verify($password, $passwordBdd); //password posté = password récupéré ?

    }
}
