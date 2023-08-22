<?php
    session_start();

    try {
        // Por algum motivo o conexao.php não tá sendo chamado
        require_once("../../Model/conexao.php");
    }catch (Exception $e){
        $error = $e->getMessage();
        echo $error;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_GET["id"]) && isset($_GET["dado"]) && isset($_GET["editado"])) {
        $idCliente = $mysqli->real_escape_string($_GET["id"]);
        $campoMudar = $mysqli->real_escape_string($_GET["dado"]);
        $novoValor = $mysqli->real_escape_string($_GET["editado"]);

        // Verificar o campo e criar a consulta de atualização adequada
        switch ($campoMudar) {
            case "nome":
                $sql_code_update = "UPDATE `ozzatech`.`clientes` SET nome = '$novoValor' WHERE idClientes = $idCliente";
                $_SESSION['nome'] = $novoValor;
                break;
            case "sobrenome":
                $sql_code_update = "UPDATE `ozzatech`.`clientes` SET sobrenome = '$novoValor' WHERE idClientes = $idCliente";
                $_SESSION['sobrenome'] = $novoValor;
                break;
            case "cpf":
                $sql_code_update = "UPDATE `ozzatech`.`clientes` SET cpf = '$novoValor' WHERE idClientes = $idCliente";
                $_SESSION['ncpf'] = $novoValor;
                break;
            case "rg":
                $sql_code_update = "UPDATE `ozzatech`.`clientes` SET rg = '$novoValor' WHERE idClientes = $idCliente";
                $_SESSION['rg'] = $novoValor;
                break;
            default:
                echo "Erro: campo desconhecido.";
                exit;
        }

        // Executar a consulta de atualização
        $sql_query_update = $mysqli->query($sql_code_update);
        if (!$sql_query_update) {
            die("Falha na execução do código SQL: " . $mysqli->error);
        }

        // Responder com um JSON indicando sucesso
        $response = array("success" => true);
        echo json_encode($response);
    } else {
        echo "Erro: parâmetros ausentes ou método inválido.";
    }
?>