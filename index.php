<?php
    session_start();
    //-----===Referenciando arquivos===-----
    // Conexão com o banco de dados
<<<<<<< HEAD
    require "src/Model/DBConnectionLocal.php";
=======
    require "src/local/DBConnectionLocal.php";
>>>>>>> 126ed04d4cd507cd27a4bf3002c1358c1646ffd3
    // Classe produtos
    require "src/local/Model/produto.php";
    // Classe produtos do banco de dados
<<<<<<< HEAD
    require "src/Model/produtoQuerys.php";

    // Pega $pdo (cariavel de conexão com BD) pelo DBConnections e manda para produtoQuerys
    $produtoQuerys = new produtoQuerys($pdo);
    // Chamando Métodos (criação de card)
    $lancamentos = $produtoQuerys->chamarLancamentos();
    $promocoes = $produtoQuerys->chamarPromocoes();
    $destaques = $produtoQuerys->chamarDestaques();
=======
    require "src/local/Controller/produtoRepositorio.php";

    // Pega $pdo (cariavel de conexão com BD) pelo DBConnections e manda para produtoRepositorio
    $produtoRepositorio = new produtoRepositorio($pdo);
    
    $lancamentos = $produtoRepositorio->chamarLancamentos();
    $promocoes = $produtoRepositorio->chamarPromocoes();
    $destaques = $produtoRepositorio->chamarDestaques();
>>>>>>> 126ed04d4cd507cd27a4bf3002c1358c1646ffd3
?>

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
    <link rel="stylesheet" href="css/universal.css">
    <link rel="stylesheet" href="css/card.css">
</head>

<body>
<<<<<<< HEAD
    <?php include "src/View/universal/header.php"?>

    <main>
        <article>
            <?php include "src/View/index/carossel-lancamentos.php"?>

            <?php include "src/View/index/carrossel-promocoes.php"?>

            <?php include "src/View/index/carrossel-destaques.php"?>
=======
    <header>
        <div class="header-top">
            <div class="header-top-left"></div>

            <nav>
                <ul class="nav-content">
                    <li class="nav-item">
                        <a href="index.html">HOME</a>
                    </li>

                    <li class="nav-item">
                        <a href="index.html">SOBRE</a>
                    </li>

                    <li class="nav-item">
                        <a href="index.html">CATEGORIAS</a>
                    </li>

                    <li class="nav-item">
                        <a href="index.html">OFERTAS</a>
                    </li>
                </ul>
            </nav>

            <div class="header-top-right">
                <figure class="site-theme-btn-container">
                    <a href="">
                        <img src="assets/icones/dark_theme_regular_icon_204499.png" alt="">
                    </a>
                </figure>

                <figure class="shopping-kart-btn-container">
                    <a href="">
                        <img src="assets/icones/1413908.png" alt="carrinho de compras">
                    </a>
                </figure>

                <figure class="user-account-btn-container">
                    <a href="html/login.php">
                        <img src="assets/icones/202-2024792_user-profile-icon-png-download-fa-user-circle.png" alt="">
                    </a>
                </figure>
            </div>
        </div>

        <div id="header-bottom" class="header-bottom">
            <form action="" method="post" class="search-bar-form">
                <fieldset class="search-bar">
                    <input type="text" name="search-bar-content" class="search-bar-content" id="search-bar-content"
                        placeholder="Digite aqui...">
                    <input type="submit" value="" name="search-bar-submit" class="search-bar-submit"
                        id="search-bar-submit">
                </fieldset>
            </form>
        </div>
    </header>

    <main>
        <article>
            <section class="container-lancamentos">
                <div class="carrosel-cabecalho">
                    <h2>Lançamentos</h2>
                </div>

                <div class="carrossel-conteudo">
                    <div class="carrosel-btn">
                        <button type="button" class="prvItem"> < </button>
                        <button type="button" class="nxtItem"> > </button>
                    </div>
    
                    <div class="carrosel-visivel">
                        <div class="carrosel">
    
                        <?php foreach($lancamentos as $item):?>
                            <div class="card">
                                <div class="categoria">

                                    <figure class="categoria-container">
                                        <img decoding="async" src="assets/imagens/produtos/<?=$item->getImagem()?>" alt="Imagem de exemplo">
                                    </figure>
    
                                    <div class="categoria-conteudo">
                                        <div class="nome-container">
                                            <h2 class="nome"> <?=$item->getNome()?> </h2>
                                        </div> 

                                        <div class="preco">
                                            <div class="preco-antes">
                                                <p>De R$ <?=($item->getPreco() + 100.00)?> por:</p>
                                            </div>

                                            <div class="preço-final">
                                                <p class="preco-depois">R$<?=$item->getPrecoFormatado()?></p>
                                                <span class="vista">À vista</span>
                                            </div>

                                            <div class="pix">
                                                <p>No PIX com 15% de desconto</p>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="compras-button">
                                        <button type="submit" class="comprar-button">COMPRAR</button>
                                        <figure class="categoria-buttons">
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
            </section>

            <section class="container-promocoes">
                <div class="carrosel-cabecalho">
                    <h2>Promoções</h2>
                </div>

                <div class="carrossel-conteudo">
                    <div class="carrosel-btn">
                        <button type="button" class="prvItem"> < </button>
                        <button type="button" class="nxtItem"> > </button>
                    </div>
    
                    <div class="carrosel-visivel">
                        <div class="carrosel">
    
                        <?php foreach($promocoes as $item):?>
                            <div class="card">
                                <div class="categoria">
    
                                    <figure class="categoria-container">
                                        <img decoding="async" src="assets/imagens/produtos/<?=$item->getImagem()?>" alt="Imagem de exemplo">
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
                                        <button type="submit" class="comprar-button">COMPRAR</button>
                                        <figure class="categoria-buttons">
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
            </section>

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
                                        <img decoding="async" src="assets/imagens/produtos/<?=$item->getImagem()?>" alt="Imagem de exemplo">
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
                                        <button type="submit" class="comprar-button">COMPRAR</button>
                                        <figure class="categoria-buttons">
                                            <a href="">
                                                <img src="assets/icones/1413908.png" alt="">
                                            </a>
                                        </figure>
                                    </div>
                                </div>
                            <?php endforeach; ?>

                        </div>
                    </div>

                </div>
                </div>
            </section>
>>>>>>> 126ed04d4cd507cd27a4bf3002c1358c1646ffd3
        </article>

    </main>

<<<<<<< HEAD
    <?php include "src/View/universal/footer.php"?>
</body>

<script src="/js/headerScroll.js"></script>
<script src="/js/carroselCards.js"></script>
=======
    <footer>
        <div class="footer-top">
            <div class="footer-top-institucional">
                <div class="institucional-titulo">INSTITUCIONAL</div>

                <div class="institucional-divisa"></div>

                <ul class="institucional-content">
                    <li class="institucional-item">
                        <a href="">Quem somos</a>
                    </li>

                    <li class="institucional-item">
                        <a href="">Localização</a>
                    </li>

                    <li class="institucional-item">
                        <a href="">Nossas lojas</a>
                    </li>
                </ul>
            </div>

            <div class="footer-top-duvidas">
                <div class="duvidas-titulo">DÚVIDAS</div>

                <div class="duvidas-divisa"></div>

                <ul class="duvidas-content">
                    <li class="duvidas-item">
                        <a href="">Entregas</a>
                    </li>

                    <li class="duvidas-item">
                        <a href="">Garantia</a>
                    </li>

                    <li class="duvidas-item">
                        <a href="">Como comprar</a>
                    </li>

                    <li class="duvidas-item">
                        <a href="">Formas de Pagamento</a>
                    </li>

                    <li class="duvidas-item">
                        <a href="">Sobre Boletos</a>
                    </li>
                </ul>
            </div>

            <div class="footer-top-ajuda">
                <div class="ajuda-titulo">AJUDA</div>

                <div class="ajuda-divisa"></div>

                <ul class="ajuda-content">
                    <li class="ajuda-item">
                        <a href="">SAC</a>
                    </li>

                    <li class="ajuda-item">
                        <a href="">Fale conosco</a>
                    </li>

                    <li class="ajuda-item">
                        <a href="">Termos de aceite</a>
                    </li>

                    <li class="ajuda-item">
                        <a href="">Políticas de privacidade</a>
                    </li>
                </ul>
            </div>

            <div class="footer-top-duplo">

                <div class="footer-duplo-pagamento">
                    <div class="pagamento-titulo">PAGAMENTO</div>
    
                    <div class="pagamento-divisa"></div>
    
                    <div class="cartao-container">
                        <figure class="cartao-card-container">
                            <a href="">
                                <img class="cartao-card" src="assets/imagens/dinners.png" alt="Diners">
                            </a>
                        </figure>
    
                        <figure class="cartao-card-container">
                            <a href="">
                                <img class="cartao-card" src="assets/imagens/maestro.png" alt="Express">
                            </a>
                        </figure>
    
                        <figure class="cartao-card-container">
                            <a href="">
                                <img class="cartao-card" src="assets/imagens/pngwing.com.png" alt="Maestro">
                            </a>
                        </figure>
    
                        <figure class="cartao-card-container">
                            <a href="">
                                <img class="cartao-card" src="assets/imagens/Mastercard.png" alt="Maestro">
                            </a>
                        </figure>
    
                        <figure class="cartao-card-container">
                            <a href="">
                                <img class="cartao-card" src="assets/imagens/visa.png" alt="Maestro">
                            </a>
                        </figure>
    
                        <figure class="cartao-card-container">
                            <a href="">
                                <img class="cartao-card" src="assets/imagens/santander.png" alt="Maestro">
                            </a>
                        </figure>
                    </div>

                <div class="caixa-pagamento">

                    <div class="pagamento-titulo">PAGAMENTO</div>
    
                    <div class="pagamento-divisa"></div>
    
                    <div class="cartao-container">
                        <figure class="cartao-card-container">
                            <a href="">
                                <img class="cartao-card" src="assets/imagens/dinners.png" alt="Diners">
                            </a>
                        </figure>
    
                        <figure class="cartao-card-container">
                            <a href="">
                                <img class="cartao-card" src="assets/imagens/maestro.png" alt="Express">
                            </a>
                        </figure>
    
                        <figure class="cartao-card-container">
                            <a href="">
                                <img class="cartao-card" src="assets/imagens/pngwing.com.png" alt="Maestro">
                            </a>
                        </figure>
    
                        <figure class="cartao-card-container">
                            <a href="">
                                <img class="cartao-card" src="assets/imagens/Mastercard.png" alt="Maestro">
                            </a>
                        </figure>
    
                        <figure class="cartao-card-container">
                            <a href="">
                                <img class="cartao-card" src="assets/imagens/visa.png" alt="Maestro">
                            </a>
                        </figure>
    
                        <figure class="cartao-card-container">
                            <a href="">
                                <img class="cartao-card" src="assets/imagens/santander.png" alt="Maestro">
                            </a>
                        </figure>
    
                    </div>
                </div>

                <div class="footer-duplo-newsletter">
                    <div class="newsletter-titulo">NEWSLETTER</div>

                    <div class="newsletter-divisa"></div>

                    <div class="cadastro-email">
                        <div class="email">
                            <div class="email-titulo">
                                <h2>Receba ofertas exclusivas no seu e-mail</h2>
                            </div>

                            <form action="" method="post" id="form-cadastro-email" class="form-cadastro-email">

                                <fieldset class="fieldset-email">
                                    <input type="text" name="input-cadastro-email" class="input-cadastro-email" id="input-cadastro-email" placeholder="E-mail">

                                    <!--
                                    <input type="submit" value="" name="input-cadastro-email-btn" class="input-cadastro-email-btn" id="input-cadastro-email-btn">
                                    -->
                                    
                                    <button type="submit" name="input-cadastro-email-btn" class="input-cadastro-email-btn" id="input-cadastro-email-btn">
                                        <img src="../assets/imagens/seta.png" alt="">
                                    </button>
                                </fieldset>

                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="footer-bottom">
            <h3>Copyright © 2000-2023 Latan.com.br LTDA. CNPJ 03.003.003/0001-03 / Av. das Ruas, nº 3, Centro,
                Limeira/SP - CEP 00300-003</h3>
        </div>
    </footer>
</body>
<script src="js/headerScroll.js"></script>
<script src="js/carroselCards.js"></script>
>>>>>>> 126ed04d4cd507cd27a4bf3002c1358c1646ffd3

</html>