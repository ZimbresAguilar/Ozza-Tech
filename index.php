<?php
    //-----===Referenciando arquivos===-----
    // Conexão com o banco de dados
    require "src/DBConnectionLocal.php";
    // Classe produtos
    require "src/Model/produto.php";
    // Classe produtos do banco de dados
    require "src/Controller/produtoQuerys.php";

    // Pega $pdo (cariavel de conexão com BD) pelo DBConnections e manda para produtoQuerys
    $produtoQuerys = new produtoQuerys($pdo);
    // Chamando Métodos (criação de card)
    $lancamentos = $produtoQuerys->chamarLancamentos();
    $promocoes = $produtoQuerys->chamarPromocoes();
    $destaques = $produtoQuerys->chamarDestaques();
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
    <link rel="stylesheet" href="css/universal.css">
    <link rel="stylesheet" href="css/card.css">
</head>

<body>
    <?php include "pages/universal/header.php"?>

    <main>
        <article>
            <?php include "pages/index/carossel-lancamentos.php"?>

            <?php include "pages/index/carrossel-promocoes.php"?>

            <?php include "pages/index/carrossel-destaques.php"?>
        </article>

    </main>

    <?php include "pages/universal/footer.php"?>
</body>

<script src="js/headerScroll.js"></script>
<script src="js/carroselCards.js"></script>

</html>