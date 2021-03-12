<?php
require_once('template_header.php');
?>

            <header>
                <h1>
                    Page d'Accueil
                </h1>
            </header>

            <?php
            require_once('template_menu.php');
            renderMenuToHTML('index');
            ?>

            
            <h2>Des renseignements sur ma personne disponibles sur ce site !</h1>
            <p> Trop sympa ! </p>
            <img src = "Images/the-tale-of-the-princess-kaguya-01.jpg"  alt = "Accueil" width = "300px">

        
            <?php
require_once('template_footer.php');
?>