<?php
    // Por algum motivo chamar o conexao.php não tá funcionando
    // include("../Model/conexao.php");
    $host = "localhost";
    $usuario = "root";
    $senha = "";
    $dbname = "ozzatech";

    // Criando uma nova conexão ao criar um objeto mysqli
    $mysqli = new mysqli($host, $usuario, $senha, $dbname);

    // Verificar se foi realizada a conexão (se não retorna erro)
    if($mysqli->connect_error){
        die("Falha ao conectar ao banco de dados: ".$mysqli->connect_error);
    }

    session_start();

    //Se não existir sessão
    if(!isset($_SESSION['id'])){

        ?>
        <!DOCTYPE html>
        <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
            <!--LINKS-->
            <!--Google Fonts-->
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Krona+One&display=swap" rel="stylesheet">
            <!--Own-->
            <link rel="stylesheet" href="/css/universal.css">
            <link rel="stylesheet" href="/css/carrinho.css">
        </head>
        <body>
            <?php include "../universal/header.php"?>
            <main>
                <h1>Faça <a href="/src/View/pages/viewLoginCadastro.php">Login</a> para ter acesso ao carrinho</h1>
            </main>
            <?php include "../universal/footer.php" ?>
        </body>
        </html>
        <?php

        exit();
    }

    $id = $mysqli->real_escape_string($_SESSION['id']);

    $sql_code = "SELECT
        `carrinhos`.`idPedido`,
        `pedidos`.`quantidade`,
        `produtos`.`nome`,
        `produtos`.`preco`,
        (`produtos`.`preco` * `pedidos`.`quantidade`) as total
        FROM carrinhos
        JOIN clientes ON carrinhos.idCliente = clientes.idClientes
        JOIN pedidos ON carrinhos.idPedido = pedidos.idPedidos
        JOIN produtos ON pedidos.idProduto = produtos.idProdutos
        WHERE idCliente = $id;";
    $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: ".$mysqli->error);

    if($sql_query->num_rows == 0){
    }
    else{
        while ($pedido = $sql_query->fetch_assoc()){
            $pedidos[] = $pedido;
        }
    }
?>