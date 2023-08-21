<?php
    //Arquivo para proteger meus dados (como sessão etc)
    //Pra poder utilizar a $_SESSION, antes você precisa inicializá-la
    if(!isset($_SESSION)){
        //"Revivendo" a sessão pra poder utilizar as variáveis dela
        session_start();
    }

    //Se não tiver nenhuma sessão de id adquirido pelo login vai encerrar
    if(!isset($_SESSION['id'])){
        die("Você não pode acessar esta página.\nFaça <a href=\"/src/View/pages/viewLoginCadastro.php\">Login!</a>");
    }
?>