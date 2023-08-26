<?php
    if(!isset($_SESSION['id'])){
        //"Revivendo" a sessão pra poder utilizar as variáveis dela
        session_start();
    }
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
    <link rel="stylesheet" href="/css/loginCadastro.css">
</head>

<body>
    <?php include "../universal/header.php"?>

    <div class="avisos">
    </div>

    <main>
        <article>
            <section class="cadastro-container">
                <?php include("../loginCadastro/cadastro.php");?>
            </section>

            <section class="login-cadastro-img-container">

            </section>

            <section class="login-container">
                <?php include("../loginCadastro/login.php");?>
            </section>

        </article>
    </main>

    <?php include "../universal/footer.php"?>
</body>

<script src="/js/universal/headerScroll.js"></script>
<script src="/js/loginCadastro/loginCadastro.js"></script>
<script src="/js/loginCadastro/cadastroFormat.js"></script>

</html>