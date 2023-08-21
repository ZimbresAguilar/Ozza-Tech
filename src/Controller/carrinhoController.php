<?php
    // Por algum motivo chamar o conexao.php não tá funcionando
    try {
        require_once("../Model/conexao.php");
    }catch (Exception $e){
        $error = $e->getMessage();
        echo $error;
    }

    session_start();

    //Se não existir sessão
    if(!isset($_SESSION['id'])){
        require("protectController.php");
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
        $pedidos = null;
    }
    else{
        while ($pedido = $sql_query->fetch_assoc()){
            $pedidos[] = $pedido;
        }
    }

    die();
?>