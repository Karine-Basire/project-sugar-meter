<?php

require "controllers/Securite.class.php";
require "models/UserManager.manager.php";

class UserController
{
    private $userManager;

    public function __construct()
    {
        $this->userManager = new UserManager();
    }

    public function getPageLogin()
    {
        echo "page de login";
        require_once "views/login.view.php";
    }

    public function connectionUser()
    {
        if (isset($_POST['mail']) && isset($_POST['password'])) {
            $mail = Securite::secureHTML($_POST['mail']);
            $password = Securite::secureHTML($_POST['password']);
            //si le result est true aux pages sinon on revient à la homepage
            if ($this->userManager->isConnectionValid($mail, $password)) {
                //on génère les infos en variables de session
                $_SESSION['access'] = "user";
                header('Location: ' . URL . "user");
            } else {
                header('Location: ' . URL . "login");
            }
        }

        //**com perso* methode de cryptrage la plus adapté ence moment, nouveaux paramétragex proposés par php
        //PASSWORD_DEFAULT va chercher la méthode la plus récente pour encrypter les passwords
        // echo password_hash("user09", PASSWORD_DEFAULT);
    }
    public function getAccueilUser()
    {
        if (Securite::verifAccessSession()) {
            require "views/accueilUser.view.php";
        } else {
            header('Location: ' . URL . "login");
        }
    }

    public function deconnection()
    {
        session_destroy();
        header('Location: ' . URL . "login");
    }
}
