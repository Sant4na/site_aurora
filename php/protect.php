
<?php
    if(!isset($_SESSION)){
        session_start();
    }

    if(!isset($_SESSION['id'])){
        die("Você não pode acessar esta pagina, pois seu Login não foi realizado. <p> <a href=\"index.php\">Entrar<a/></p>");
    }
?>