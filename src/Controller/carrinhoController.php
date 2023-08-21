<?php
    // Por algum motivo chamar o conexao.php não tá funcionando
    // include("../Model/conexao.php");
    $host = "localhost";
    $usuario = "root";
    $senha = "MySql_2005_password";
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
        header("Location: ../pages/viewLogin.php");
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
        echo "Nenhum peido encontrado";
    }
    else{
        while ($pedido = $sql_query->fetch_assoc()){
            $pedidos[] = $pedido;
        }
    }
?>