<section class="container-destaques">
                <div class="carrosel-cabecalho">
                    <h2>Destaques</h2>
                </div>

                <div class="carrossel-conteudo">
                    <div class="carrosel-btn">
                        <button type="button" class="prvItem"> < </button>
                        <button type="button" class="nxtItem"> > </button>
                    </div>
    
                    <div class="carrosel-visivel">
                        <div class="carrosel">
    
                            <?php foreach($destaques as $item):?>
                                <div class="card">
                                    <div class="categoria">
        
                                        <figure class="categoria-container">
                                            <img decoding="async" src="assets/imagens/produtos/<?=$item->getImagem()?>" alt="Imagem de exemplo" class="imagem-produto">

                                            <div class="fav-share">
                                                <figure class="share-container">
                                                    <img src="assets/icones/share.png" alt="" class="filled-share">
                                                </figure>
                                                
                                                <figure class="fav-container">
                                                    <img src="assets/icones/heart.png" alt="" class="hollow-heart">
                                                    
                                                    <img src="assets/icones/heart-fill.png" alt="" class="filled-heart">
                                                </figure>
                                            </div>
                                        </figure>
        
                                        <div class="categoria-conteudo">
                                            <div class="nome-container">
                                                <h2 class="nome"> <?=$item->getNome()?> </h2>
                                            </div> 

                                            <div class="preco">
                                                <div class="preco-antes">
                                                    <p>De R$ <?=$item->getPreco()?> por:</p>
                                                </div>

                                                <div class="preço-final">
                                                    <p class="preco-depois">R$<?=number_format(($item->getPreco() * (1 - $item->getPromocao())), 2)?></p>
                                                    <span class="vista">Desconto de <?=($item->getPromocao() * 100)?>%</span>
                                                </div>

                                                <div class="pix">
                                                    <p>No PIX com 15% de desconto</p>
                                                </div>
                                            </div>
                                        </div>
        
                                        <div class="compras-button">
                                            <button type="submit" class="comprar-button">
                                                <h2>COMPRAR</h2>
                                                <div class="comprar-button-hover-color"></div>
                                            </button>

                                            <figure class="categoria-button">
                                                <a href="">
                                                    <img src="assets/icones/1413908.png" alt="">
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>

                        </div>
                    </div>

                </div>
                </div>
            </section>