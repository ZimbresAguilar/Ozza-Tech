<?php
    // define() -> constante
    define("HOST", "localhost");
    define("USUARIO", "root");
    define("SENHA", "MySql_2005_password");
    define("DBNAME", "ozzatech");

    $conexao = mysqli_connect(HOST, USUARIO, SENHA, DBNAME) or die ("Não foi possível conectar ao banco de dados");
?>