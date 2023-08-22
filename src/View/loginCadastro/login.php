<?php

    ?>
    <div class="cabeca">
        <div class="cabecalho">
            <h1>Fazer Login</h1>
        </div>
    </div>
    <div class="form-loggin">
        <form action="/src/Controller/loginCadastro/loginController.php" method="POST" class="form-login">
            <fieldset class="email-login">
                <label for="email-login">Email</label>
                <input type="email" name="email-login" id="email-login">
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
    </div>

    <div class="ja-tem-conta">
        <h2>Não tem uma conta? <a class="pra-cadastro">Cadastre-se</a></h2>
    </div>
    <?php

?>