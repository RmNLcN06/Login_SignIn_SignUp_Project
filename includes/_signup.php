<?php

if(isset($_POST["submit"]))
{
    // On récupère les données
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];
    $email = $_POST["email"];

    // On instancie la classe SignupContr
    include "../classes/dbh.cls.php";
    include "../classes/signup.cls.php";
    include "../classes/signup-contr.cls.php";

    $signup = new SignupContr($uid, $pwd, $pwdRepeat, $email);

    // On lance le gestionnaire d'erreurs et l'inscription de l'utilisateur
    $signup->signupUser();

    // Retour à la page d'accueil
    header('Location: ../index.php?error=none');
}