<?php

    session_start();
    $currentLogin = $_SESSION['login'];

    $currentStyle = "style1";

    if(isset($_COOKIE['cstyle'])){
        $currentStyle = $_COOKIE['cstyle'];
    }

    if(isset($_GET['css'])){
        $currentStyle = $_GET['css'];
        setcookie("cstyle", $currentStyle, time()+3600);
    }

    $currentPageId = 'accueil';
    if(isset($_GET['page'])) {
        $currentPageId = $_GET['page'];
    }   

    $currentLang = 'fr';
    if(isset($_GET['lang'])) {
        $currentLang = $_GET['lang'];
    } 

    require_once("connected.php");
    require_once("template_header.php");
    echo $currentLogin;
    require_once("login.php");


    if($currentLang=='fr'){
        echo"<button><a href= index.php?page=$currentPageId&lang=en >Anglais </a></button>";
    }
    else{
        echo"<button><a href= index.php?page=$currentPageId&lang=fr >French </a></button>";
    }
?>

<form id="style_form" action="index.php" method="GET">
    <select name="css">
        <option value="style1">style1</option>
        <option value="style2">style2</option>
    </select>
    <input type="submit" value="Appliquer" />
</form>

<?php

    require_once("template_menu.php");
    renderMenuToHTML($currentPageId,$currentLang);
?>

<section class="corps">
<?php
    $pageToInclude = "$currentLang/$currentPageId.php";
    if(is_readable($pageToInclude)){
    require_once($pageToInclude);
    }
    else{
    require_once("error.php");
    }
?>

</section>
<?php
    require_once("$currentLang/template_footer.php");
?>
