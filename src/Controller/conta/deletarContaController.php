<?php
    if(!isset($_SESSION)){
        session_start();
    }

    // Por algum motivo o conexao.php não tá sendo chamado
    include("../Model/conexao.php");

    if($_SERVER["REQUEST_METHOD"] == "DELETE" && isset($_GET["id"])){
        //Pra previnir SQLInjection, limpa o campo (usando uma função do mysqli)
        //$mysqli está vindo do conexao.php (puxando do include)
        $idCliente = $mysqli->real_escape_string($_GET["id"]);

        // Verificar query
        $sql_code_delete_carrinhos = "DELETE FROM `ozzatech`.`carrinhos` WHERE idCliente = $idCliente;";
        // Caso dê erro encerra
        $sql_query_delete_carrinhos = $mysqli->query($sql_code_delete_carrinhos);
        if(!$sql_query_delete_carrinhos){
            die("Falha na execução do código SQL: ".$mysqli->error);
        }

        $sql_code_delete_clientes = "DELETE FROM `ozzatech`.`clientes` WHERE idClientes = $idCliente;";
        $sql_query_delete_clientes = $mysqli->query($sql_code_delete_clientes);
        if(!$sql_query_delete_clientes){
            die("Falha na execução do código SQL: ".$mysqli->error);
        }

        session_destroy();

        // Após concluir a exclusão devolver resposta pro javascript (feita em json)
        $response = array("success" => true);
        echo json_encode($response);

    }
    else{
        echo "Erro: ID do item não fornecido ou método inválido.";
    }
?>