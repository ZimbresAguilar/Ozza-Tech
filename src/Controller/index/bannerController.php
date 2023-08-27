<?php
    session_start();

    try {
        // Por algum motivo o conexao.php não tá sendo chamado
        require_once("../../Model/conexao.php");
    }catch (Exception $e){
        $error = $e->getMessage();
        echo $error;
    }
?>