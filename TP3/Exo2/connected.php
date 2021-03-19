<?php

    require_once("testConnexion.php");
    // on simule une base de données
    $users = $resultat;

    $login = "anonymous";
    $errorText = "";
    $successfullyLogged = false;
    if(isset($_POST['login']) && isset($_POST['password'])) {
        $tryLogin=$_POST['login'];
        $tryPwd=$_POST['password'];

        foreach($resultat as $numbers => $informations){
            // si login existe et password correspond
            if(($informations['login'] == $tryLogin) && ($informations['password']== $tryPwd)){
                $successfullyLogged = true;
                $login = $tryLogin;
                $_SESSION['login'] = $tryLogin;
            }
        }

        if($successfullyLogged = false){
            $errorText = "Erreur de login/password";
        }
    }

    else{
        $errorText = "Merci de remplir le formulaire";
        echo $errorText;
    }
?>
