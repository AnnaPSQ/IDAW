<!DOCTYPE html>
<html>
    <head>
        <title>Test PHP</title>
        <meta charset = "utf-8">
    </head>
    <body>
        <h1> Coucou bienvenue dans mon premier code php !</h1>

        <h2> Là on doit afficher l'heure </h2>
        <?php
        $date = date("d-m-Y");
        $heure = date("H:i");
        Print("Nous sommes le $date et il est $heure : youpi");
        ?>

        <h2> Et Là j'affiche un tableau. </h2>

        <?php
            $array = array(
            "foo" => "bar",
            "bar" => "foo",
        );
        ?>
        <h2> Et ici je sais pas encore. </h2>
    </body>
</html>