<?php
    function renderMenuToHTML($currentPageId) {
        // un tableau qui d\'efinit la structure du site
        $mymenu = array(
            // idPage titre
            'index' =>  'Accueil' ,
            'cv' =>  'Cv' ,
            'hobbies' => 'Mes Hobbies',
            'infos_technique' => 'Informations'
            );
        // ...
        echo "<nav class=\"menu\">";
            echo"<ul> " ;
            
            foreach($mymenu as $pageId => $pageParameters) {
                echo"<li>";
                if($currentPageId == $pageId) {
                    echo" <a  id=\"currentpage\" href= $pageId >";
                    echo $pageParameters;
                    echo" </a>";
                }

                else{
                    echo" <a href= $pageId > ";
                    echo $pageParameters; 
                    echo"</a> ";
                }
                echo"</li>";
            }
            echo"</ul>"; 
        echo"</nav>";
        
        // ...
    }
?>
