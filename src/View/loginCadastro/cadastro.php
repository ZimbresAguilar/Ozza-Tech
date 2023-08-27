<div class="cabecalho">
    <h1>Fazer Cadastro</h1>
</div>

<form action="/src/Controller/loginCadastro/cadastrarController.php" method="POST" class="form-cadastro">
    <fieldset class="nome-cadastro">
        <input type="text" name="nome-cadastro" id="nome-cadastro" required>
        <label for="nome-cadastro" class="nome-cadastro-label">Nome</label>
    </fieldset>

    <fieldset class="sobrenome-cadastro">
        <input type="text" name="sobrenome-cadastro" id="sobrenome-cadastro" required>
        <label for="sobrenome-cadastro" class="sobrenome-cadastro-label">Sobrenome</label>
    </fieldset>

    <fieldset class="cpf-cadastro">
        <input type="text" name="cpf-cadastro" id="cpf-cadastro" required>
        <label for="cpf-cadastro" class="cpf-cadastro-label">CPF</label>
    </fieldset>

    <fieldset class="rg-cadastro">
        <input type="text" name="rg-cadastro" id="rg-cadastro" required>
        <label for="rg-cadastro" class="rg-cadastro-label">RG</label>
    </fieldset>

    <fieldset class="email-cadastro">
        <input type="text" name="email-cadastro" id="email-cadastro" required>
        <label for="email-cadastro" class="email-cadastro-label">Email</label>
    </fieldset>

    <fieldset class="senha-cadastro">
        <input type="password" name="senha-cadastro" id="senha-cadastro" required>
        <label for="senha-cadastro" class="senha-cadastro-label">Senha</label>
    </fieldset>

    <fieldset class="pessoa-cadastro">
        <select name="pessoa-cadastro" id="pessoa-cadastro">
            <option value="0">Pessoa Física</option>
            <option value="1">Pessoa Jurídica</option>
        </select>
    </fieldset>

    <fieldset class="checkbox1-cadastro">
        <input type="checkbox" name="checkbox1-cadastro" id="checkbox1-cadastro">
        <label for="checkbox1-cadastro" class="checkbox1-cadastro-label">Aceito receber marketing da Ozza Tech</label>
    </fieldset>

    <fieldset class="checkbox2-cadastro">
        <input type="checkbox" name="checkbox2-cadastro" id="checkbox2-cadastro">
        <label for="checkbox2-cadastro" class="checkbox2-cadastro-label">Concordo com os termos de aceite e políticas de privacidade da Ozza Tech</label>
    </fieldset>

    <fieldset class="submit-cadastro">
        <<button type="submit" value="" id="submit-cadastro">
                <h1>CRIAR CONTA</h1>
                <div class="submit-hover-color"></div>
            </button>
    </fieldset>
</form>

<div class="ja-tem-conta">
    <h2>Já tem uma conta? <a class="pra-login">Faça login</a></h2>
</div>