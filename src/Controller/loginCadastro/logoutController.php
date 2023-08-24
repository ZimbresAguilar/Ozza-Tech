<?php
    //Se sessão não estiver conectada, revive a sessão
    if(!isset($_SESSION)){
        session_start();
    }
    
    // Se estiver conectado, vem pra cá, e então destrói as variáveis, encerrando assim a sessão
    session_destroy();
    //Redireciona o usuário
    header("location: ../../View/pages/viewLoginCadastro.php");
?>