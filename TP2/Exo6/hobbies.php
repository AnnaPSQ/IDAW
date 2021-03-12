<?php
require_once('template_header.php');
?>

            <header>
                <h1>
                    Mes Hobbies
                </h1>
            </header>

            <?php
            require_once('template_menu.php');
            renderMenuToHTML('hobbies');
            ?>
            
            <h2>Venez découvrir mes hobbies !</h2>
            <p> Se divertir pour ne pas penser à la mort c'est vraiment sympa.</p>

            <h3> J'adore la peinture</h3>
            <p> C'est vraiment chouette</p>
            <h3> Embêter Antoine est mon activité favorite.</h3>
            <img src = "Images\Antoine.jpg"  alt = "Antowane" width = "300px">

        
            <?php
require_once('template_footer.php');
?>