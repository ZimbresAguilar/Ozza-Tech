<?php
    include("../../Controller/protectController.php");
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
    <link rel="stylesheet" href="/css/conta.css">
</head>

<body>
    <?php include "../universal/header.php"?>

    <main>
        <?php include("../conta/modalExclusao.php");?>

        <article>
            <section class="abas-listagem">
                <ul class="abas">
                    <li class="dados-pessoais active">Dados Pessoais</li>
                    <li class="seguranca">Segurança</li>
                    <li class="conta">Conta</li>
                </ul>
            </section>

            <section class="aba-exibicao">
                <div class="exibicao-dados-pessoais active">
                    <?php include("../conta/abaDadosPessoais.php"); ?>
                </div>

                <div class="exibicao-seguranca">
                    <h1>Segurança</h1>
                </div>

                <div class="exibicao-conta">
                    <h1>Conta</h1>
                    <?php include("../conta/abaConta.php");?>
                </div>
            </section>
        </article>
    </main>

    <?php include "../universal/footer.php"?>
</body>

<script src="/js/headerScroll.js"></script>
<script src="/js/Conta.js"></script>
<script src="/js/exclusaoConta.js"></script>
<script src="/js/editarDadosPessoais.js"></script>

</html>