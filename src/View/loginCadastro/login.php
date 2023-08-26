<?php

    ?>
    <div class="cabecalho">
        <h1>Fazer Login</h1>
    </div>

    <form action="/src/Controller/loginCadastro/loginController.php" method="POST" class="form-login" id="form-login">
        <fieldset class="email-login">
            <input type="text" name="email-login" id="email-login" required>
            <label for="email-login" class="email-login-label">Email</label>
        </fieldset>

        <fieldset class="senha-login">
            <input type="password" name="senha-login" id="senha-login" required>
            <label for="senha-login" class="senha-login-label">Senha</label>
        </fieldset>

        <fieldset class="checkbox-login">
            <input type="checkbox" name="checkbox-login" id="checkbox-login">
            <label for="checkbox-login" class="checkbox-login-label">Aceito receber marketing da Ozza Tech</label>
        </fieldset>

        <fieldset class="submit-login">
            <button type="submit" value="" id="submit-login">
                <h1>ACESSAR CONTA</h1>
                <div class="submit-hover-color"></div>
            </button>
        </fieldset>
    </form>

    <div class="ja-tem-conta">
        <h2>Não tem uma conta? <a class="pra-cadastro">Cadastre-se</a></h2>
    </div>
    <?php

?>