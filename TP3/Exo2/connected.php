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

        // si login existe et password correspond
        if( array_key_exists($tryLogin,$users) && $users[$tryLogin]==$tryPwd ) {
        $successfullyLogged = true;
        $login = $tryLogin;
        } 
        else{
            $errorText = "Erreur de login/password";
        }
    }

    if(!$successfullyLogged) {
        echo $errorText;
    }
    else {
        $_SESSION['login'] = $tryLogin;

    }
?>
