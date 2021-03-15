<?php
    function renderMenuToHTML($currentPageId) {
        // un tableau qui d\'efinit la structure du site
        $mymenu = array(
            // idPage titre
            'accueil' =>  array('Accueil') ,
            'cv' =>  array('Cv') ,
            'hobbies' => array('Mes Hobbies'),
            'contact' => array('Contact')
        );
        // ...
        echo "<nav class=\"menu\">";
            echo"<ul> " ;
            
            foreach($mymenu as $pageId => $pageParameters) {
                echo"<li>";
                if($currentPageId == $pageId) {
                    echo" <a  id=\"currentpage\" href= index.php?page=$pageId > $pageParameters[0] </a>";
                }

                else{
                    echo"<a href= index.php?page=$pageId > $pageParameters[0] </a>";
                }
                echo"</li>";
            }
            echo"</ul>"; 
        echo"</nav>";
        
        // ...
    }
?>
