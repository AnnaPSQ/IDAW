<?php
    function renderMenuToHTML($currentPageId) {
        // un tableau qui d\'efinit la structure du site
        $mymenu = array(
            // idPage titre
            'index' =>  array('Accueil') ,
            'cv' =>  array('Cv') ,
            'hobbies' => array('Mes Hobbies'),
            'infos_technique' => array('Informations')
        );
        // ...
        echo "<nav class=\"menu\">";
            echo"<ul> " ;
            
            foreach($mymenu as $pageId => $pageParameters) {
                echo"<li>";
                if($currentPageId == $pageId) {
                    echo" <a  id=\"currentpage\" href= $pageId >";
                    echo $pageParameters[0];
                    echo" </a>";
                }

                else{
                    echo" <a href= $pageId > ";
                    echo $pageParameters[0]; 
                    echo"</a> ";
                }
                echo"</li>";
            }
            echo"</ul>"; 
        echo"</nav>";
        
        // ...
    }
?>
