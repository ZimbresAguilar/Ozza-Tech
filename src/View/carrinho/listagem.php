<?php foreach ($pedidos as $item) : ?>
    <section class="carrinho-conteudo">
        <div class="pedido">
            <div class="pedido-nome">
                <a href="#"><?= $item['nome']; ?></a>
            </div>

            <div class="pedido-quantidade">
                <h1><?= $item['quantidade']; ?></h1>
            </div>

            <div class="pedido-preco-individual">
                <h1>R$ <?= $item['preco']; ?></h1>
            </div>

            <div class="pedido-preco-conjunto">
                <h1>R$ <?= $item['total']; ?></h1>
            </div>

            <div class="pedido-excluir">
                <button type="submit" class="btn-excluir">
                    <h2>EXCLUIR</h2>
                    <div class="excluir-btn-hover-color"></div>
                </button>
            </div>
        </div>
    </section>
<?php endforeach; ?>