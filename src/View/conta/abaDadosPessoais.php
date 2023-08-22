<?php
    //Se sessão não estiver conectada, revive a sessão
    if(!isset($_SESSION)){
        session_start();
    }
?>

<div class="exibicao-dados-pessoais-cabecalho">
    <h1>Bem vindo de volta <?php echo $_SESSION['nome']; ?></h1>
    <h1><a href="/src/Controller/loginCadastro/logoutController.php">Sign Out</a></h1>
</div>

<div class="exibicao-dados-pessoais-conteudo">
    <div class="dados-pessoais-nome">
        <h1>Nome:</h1>
        <textarea name="conta-nome" id="conta-nome" cols="20" rows="2"><?php echo $_SESSION['nome']?></textarea>
        <button type="submit" class="btn-editar-dados-pessoais" id="<?php echo $_SESSION['id']?>" dado="nome">
            <h1>EDITAR</h1>
        </button>
    </div>

    <div class="dados-pessoais-sobrenome">
        <h1>SobreNome:</h1>
        <textarea name="conta-sobrenome" id="conta-sobrenome" cols="20" rows="2"><?php echo $_SESSION['sobrenome']?></textarea>
        <button type="submit" class="btn-editar-dados-pessoais" id="<?php echo $_SESSION['id']?>" dado="sobrenome">
            <h1>EDITAR</h1>
        </button>
    </div>

    <div class="dados-pessoais-cpf">
        <h1>CPF:</h1>
        <textarea name="conta-cpf" id="conta-cpf" cols="20" rows="2"><?php echo $_SESSION['cpf']?></textarea>
        <button type="submit" class="btn-editar-dados-pessoais" id="<?php echo $_SESSION['id']?>" dado="cpf">
            <h1>EDITAR</h1>
        </button>
    </div>

    <div class="dados-pessoais-rg">
        <h1>RG:</h1>
        <textarea name="conta-rg" id="conta-rg" cols="20" rows="2"><?php echo $_SESSION['rg']?></textarea>
        <button type="submit" class="btn-editar-dados-pessoais" id="<?php echo $_SESSION['id']?>" dado="rg">
            <h1>EDITAR</h1>
        </button>
    </div>
</div>