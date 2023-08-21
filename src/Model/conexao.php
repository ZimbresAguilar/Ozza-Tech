<?php
    // define() -> constante
    $host = "localhost";
    $usuario = "root";
    $senha = "";
    $dbname = "ozzatech";

    try{
        // Criando uma nova conexão ao criar um objeto mysqli
        $mysqli = new mysqli($host, $usuario, $senha, $dbname);
    }
    catch(Exception $e){
        $error = $e->getMessage();
        echo $error;
    }
?>