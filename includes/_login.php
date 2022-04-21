<?php

if(isset($_POST["submit"]))
{
    // On récupère les données
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];

    // On instancie la classe SignupContr
    include "../classes/dbh.cls.php";
    include "../classes/login.cls.php";
    include "../classes/login-contr.cls.php";

    $login = new LoginContr($uid, $pwd);

    // On lance le gestionnaire d'erreurs et l'inscription de l'utilisateur
    $login->loginUser();

    // Retour à la page d'accueil
    header('Location: ../index.php?error=none');
}