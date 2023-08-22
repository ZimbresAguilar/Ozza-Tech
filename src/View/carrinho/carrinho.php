<?php if($pedidos != null){?>
        <div class="carrinho-conteudo-container">
            <?php include "../carrinho/listagem.php" ?>
        </div>
        
        <div class="carrinho-resumo">
            <h2>Valor Total:</h2>
            <h2>R$ <?php include "../carrinho/resumo.php" ?></h2>
        </div>
    <?php }
?>