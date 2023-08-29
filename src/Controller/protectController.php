<?php
    //Arquivo para proteger meus dados (como sessão etc)
    //Pra poder utilizar a $_SESSION, antes você precisa inicializá-la
    if(!isset($_SESSION['id'])){
        //"Revivendo" a sessão pra poder utilizar as variáveis dela
        session_start();
    }

    //Se não tiver nenhuma sessão de id adquirido pelo login vai encerrar
    if(!isset($_SESSION['id'])){
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
            <link rel="stylesheet" href="/css/protect.css">
        </head>
        <body>
            <?php include "../universal/header.php"?>
            <main>
                <h1>Faça <a href="/src/View/pages/viewLoginCadastro.php">Login</a> para ter acesso ao carrinho</h1>
            </main>
            <?php include "../universal/footer.php" ?>
        </body>
        </html>
        <?php
    }
?>