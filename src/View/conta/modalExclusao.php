<?php
    //Se sessão não estiver conectada, revive a sessão
    if(!isset($_SESSION)){
        session_start();
    }
?>

<div class="modal-exclusao hidden">
    <div class="modal-exit">X</div>

    <div class="modal-exclusao-cabecalho">
        <h1>Exclusão da conta</h1>
    </div>

    <div class="modal-exclusao-explicacao">
        <h2>Após exluir a conta, não haverá nenhum meio de reverter isso. Deseja continuar a exclusão da conta?</h2>

        <button type="submit" class="modal-btn-exclusao-conta" id="<?php echo $_SESSION['id']?>">
            <h2>EXCLUIR</h2>
            <div class="modal-exclusao-conta-btn-hover-color"></div>
        </button>
    </div>
</div>