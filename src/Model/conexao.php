<?php
    // define() -> constante
    $host = "mysql.ozzatech.kinghost.net";
    $usuario = "ozzatech";
    $senha = "MySql2005password";
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