<?php
    class Securite{
         //convertit tous les caractères bizzare, les chevrons etc....en caractère html
        //ca evite d'avoir des injections qui seraient envoyés depuis les formulaires
        public static function secureHTML($string){
            return htmlentities($string);
        }

        public static function verifAccessSession(){
            return (!empty($_SESSION['access']) && $_SESSION['access'] === "user");
        }
    }
?>