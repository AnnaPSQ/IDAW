<?php
    function renderMenuToHTML($currentPageId,$currentLang) {
        // un tableau qui d\'efinit la structure du site
        $mymenu = array(
            // idPage titre
            'accueil' =>  array('Accueil','Home') ,
            'cv' =>  array('CV','CV') ,
            'hobbies' => array('Mes Hobbies','Hobbies'),
            'contact' => array('Contact','Contact')
        );
        // ...
        $i = 0;
        if($currentLang == 'fr'){
            $i = 0;
        }
        else{
            $i = 1;
        }

         
        echo "<nav class=\"menu\">";
            echo"<ul> " ;
            
            foreach($mymenu as $pageId => $pageParameters) {
                echo"<li>";
                if($currentPageId == $pageId) {
                    echo" <a  id=\"currentpage\" href= index.php?page=$pageId&lang=$currentLang > $pageParameters[$i] </a>";
                }

                else{
                    echo"<a href= index.php?page=$pageId&lang=$currentLang > $pageParameters[$i] </a>";
                }
                echo"</li>";
            }
            echo"</ul>"; 
        echo"</nav>";
        
        // ...
    }
?>
