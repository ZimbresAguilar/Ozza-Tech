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
        <div class="campo-vazio">
            <h2>PREENCHA OS CAMPOS OBRIGATÓRIOS</h2>
        </div>
        <div class="login-incorreto">
            <h2>E-MAIL OU SENHA INCORRETOS</h2>
        </div>
    </div>

    <main>
        <article>
            <section class="cadastro-container">
                <?php include("../loginCadastro/cadastro.php");?>
            </section>

            <section class="login-container">
                <?php include("../loginCadastro/login.php");?>
            </section>

        </article>
    </main>

    <?php include "../universal/footer.php"?>
</body>

<script src="/js/loginCadastro.js"></script>

</html>