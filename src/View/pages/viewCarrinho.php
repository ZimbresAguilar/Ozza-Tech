<?php
    // Controller do carrinho
    include("../../Controller/carrinhoController.php");
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

        <?php if(isset($_SESSION['id'])) { ?>
            <article class="carrinho">
                <div class="carrinho-cabecalho">
                    <h1>Carrinho de <?php echo $_SESSION['nome'];?></h1>
                </div>

                <div class="carrinho-conteudo-container">
                    <?php include "../carrinho/listagem.php" ?>
                </div>

                <div class="carrinho-resumo">
                    <h2>Valor Total:</h2>
                    <h2>R$ <?php include "../carrinho/resumo.php" ?></h2>
                </div>
            </article>
        <?php } else { ?>
            <h1>Faça <a href="/src/View/pages/viewLoginCadastro.php">Login</a> para ter acesso ao carrinho</h1>
        <?php } ?>

    </main>

    <?php include "../universal/footer.php" ?>

</body>

<script src="/js/headerScroll.js"></script>

</html>