<div class="cabecalho">
    <h1>Fazer Cadastro</h1>
</div>

<form action="/src/Controller/loginCadastro/cadastrarController.php" method="POST" class="form-cadastro">
    <fieldset class="nome-cadastro">
        <label for="nome-cadastro">Nome</label>
        <input type="text" name="nome-cadastro" id="nome-cadastro">
    </fieldset>

    <fieldset class="sobrenome-cadastro">
        <label for="sobrenome-cadastro">Sobrenome</label>
        <input type="text" name="sobrenome-cadastro" id="sobrenome-cadastro">
    </fieldset>

    <fieldset class="cpf-cadastro">
        <label for="cpf-cadastro">CPF</label>
        <input type="text" name="cpf-cadastro" id="cpf-cadastro">
    </fieldset>

    <fieldset class="rg-cadastro">
        <label for="rg-cadastro">RG</label>
        <input type="text" name="rg-cadastro" id="rg-cadastro">
    </fieldset>

    <fieldset class="email-cadastro">
        <label for="email-cadastro">Email</label>
        <input type="email" name="email-cadastro" id="email-cadastro">
    </fieldset>

    <fieldset class="senha-cadastro">
        <label for="senha-cadastro">Senha</label>
        <input type="password" name="senha-cadastro" id="senha-cadastro">
    </fieldset>

    <fieldset class="pessoa-cadastro">
        <select name="pessoa-cadastro" id="pessoa-cadastro">
            <option value="0">Pessoa Física</option>
            <option value="1">Pessoa Jurídica</option>
        </select>
    </fieldset>

    <fieldset class="checkbox1-cadastro">
        <input type="checkbox" name="checkbox1-cadastro" id="checkbox1-cadastro">
        <label for="checkbox1-cadastro">Aceito receber marketing da Ozza Tech</label>
    </fieldset>

    <fieldset class="checkbox2-cadastro">
        <input type="checkbox" name="checkbox2-cadastro" id="checkbox2-cadastro">
        <label for="checkbox2-cadastro">Concordo com os termos de aceite e políticas de privacidade da Ozza Tech</label>
    </fieldset>

    <fieldset class="submit-cadastro">
        <input type="submit" value="CRIAR CONTA" id="submit-cadastro">
    </fieldset>
</form>

<div class="ja-tem-conta">
    <h2>Já tem uma conta? <a class="pra-login">Faça login</a></h2>
</div>