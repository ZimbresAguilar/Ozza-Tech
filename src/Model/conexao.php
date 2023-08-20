<?php
    // define() -> constante
    $host = "localhost";
    $usuario = "root";
    $senha = "MySql_2005_password";
    $dbname = "ozzatech";

    // Criando uma nova conexão ao criar um objeto mysqli
    $mysqli = new mysqli($host, $usuario, $senha, $dbname);

    // Verificar se foi realizada a conexão (se não retorna erro)
    if($mysqli->error){
        die("Falha ao conectar ao banco de dados: ".$mysqli->error);
    }
?>