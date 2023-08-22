<?php
    include("../../Controller/protectController.php");
    // Controller do carrinho
    include("../../Controller/carrinho/carrinhoController.php");
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
    <?php include("../universal/header.php")?>

    <main>

        <?php if(isset($_SESSION['id'])) { ?>
            <article class="carrinho">
                <div class="carrinho-cabecalho">
                    <h1>Carrinho de <?php echo $_SESSION['nome'];?></h1>
                </div>

                <?php if($pedidos != null) { include("../carrinho/carrinho.php"); }?>
            </article>
        <?php } else { ?>
            <h1>Faça <a href="/src/View/pages/viewLoginCadastro.php">Login</a> para ter acesso ao carrinho</h1>
        <?php } ?>

    </main>

    <?php include "../universal/footer.php" ?>

</body>

<script src="/js/headerScroll.js"></script>

</html>