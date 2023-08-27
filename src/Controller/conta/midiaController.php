<?php
    session_start();

    try {
        // Por algum motivo o conexao.php não tá sendo chamado
        require_once("../../Model/conexao.php");
    }catch (Exception $e){
        $error = $e->getMessage();
        echo $error;
    }

    if(isset($_POST["secao"]) && isset($_FILES["midia"]) && isset($_POST["ativo"])) {
        $secao = $mysqli->real_escape_string($_GET["secao"]);
        $midia = $mysqli->real_escape_string($_GET["midia"]);
        $ativo = $mysqli->real_escape_string($_GET["ativo"]);

        $sql_code = "INSERT INTO `ozzatech`.`midias`(nome, secao, ativo) VALUES (\"$midia\, \"$secao\", $ativo)";
        
        // Executar a consulta de atualização
        $sql_query_update = $mysqli->query($sql_code_update);
        if (!$sql_query_update) {
            die("Falha na execução do código SQL: " . $mysqli->error);
        }

        // Responder com um JSON indicando sucesso
        $response = array("success" => true, "message" => "Tudo OK");
        echo json_encode($response);
    } else {
        echo "Erro: parâmetros ausentes ou método inválido.";
    }
?>