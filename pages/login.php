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
    <link rel="stylesheet" href="../css/universal.css">
    <link rel="stylesheet" href="../css/login.css">
</head>

<body>
<?php include "universal/header.php"?>

    <main>
        <article>
            <section class="cadastro-container">
                <div class="cabecalho">
                    <h1>Fazer Cadastro</h1>
                </div>

                <form action="" class="form-cadastro"></form>
            </section>

            <section class="login-container">
                <div class="cabecalho">
                    <h1>Fazer Login</h1>
                </div>

                <form action="" class="form-login">
                    <fieldset class="email-login">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email">
                    </fieldset>

                    <fieldset class="senha-login">
                        <label for="senha-login">Senha</label>
                        <input type="password" name="senha-login" id="senha-login">
                    </fieldset>

                    <fieldset class="checkbox-login">
                        <input type="checkbox" name="checkbox-login" id="checkbox-login">
                        <label for="checkbox-login">Aceito receber marketing da Ozza Tech</label>
                    </fieldset>

                    <fieldset class="submit-login">
                        <input type="submit" value="ACESSAR CONTA" id="submit-login">
                    </fieldset>
                </form>

                <div class="ja-tem-conta">
                    <h2>Já tem uma conta? <span class="trocar">Faça login</span></h2>
            </div>
            </section>

        </article>
    </main>

    <?php include "universal/footer.php"?>
</body>

<script src="../js/headerScroll.js"></script>

</html>