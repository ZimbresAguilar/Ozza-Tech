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
    catch(Exception e){
        
    }

    // Verificar se foi realizada a conexão (se não retorna erro)
    if($mysqli->connect_error){
        die("Falha ao conectar ao banco de dados: ".$mysqli->connect_error);
    }
?>