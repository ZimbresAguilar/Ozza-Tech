<?php
    if(!isset($_SESSION)){
        session_start();
    }
    //Se não existir sessão

    if(!isset($_SESSION['id'])){
        require("protectController.php");
        exit();
    }

    //require_once("../Model/conexao.php");não está funcionando
    $host = "localhost";
    $usuario = "root";
    $senha = "MySql_2005_password";
    $dbname = "ozzatech";
    try{
        // Criando uma nova conexão ao criar um objeto mysqli
        $mysqli = new mysqli($host, $usuario, $senha, $dbname);
    }
    catch(Exception $e){
        $error = $e->getMessage();
        echo $error;
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

    //Não pode chamar die pq senão os valores não são passdos ($pedidos, $_SESSION)
?>