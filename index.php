<?php
    //-----===Referenciando arquivos===-----
    // Conexão com o banco de dados
    require "src/DBConnection.php";
    // Classe produtos
    require "src/Model/produto.php";

    // -----===QUERY===-----
    // Query para o primeiro carrossel de itens
    $sqlLancamentos = "SELECT * FROM produtos WHERE idProdutos <= 7";
    $statement = $pdo->query($sqlLancamentos);
    // PDO::FETCH_ASSOC -> Retorna um array associativo (toda a linha, como um array de arrays)
    $itens = $statement->fetchAll(PDO::FETCH_ASSOC);

    // -----===Transformando cada índice da query em um OBJETO da Classe Produtos===-----
    // array_map() -> Ensinar o que fazer para cada um dos elementos do array mencionado
    $dadosItens = array_map(function ($item){
        return new Produto($item['idProdutos'], $item['nome'], $item['preco'], $item['marca'], $item['cor'], $item['condicao'], $item['origem'], $item['localizacao'], $item['quantidade'],);
    }, $itens);
    // Agora é um array de objetos, não um array de array
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
                    <a href="html/login.html">
                        <img src="assets/icones/202-2024792_user-profile-icon-png-download-fa-user-circle.png" alt="">
                    </a>
                </figure>
            </div>
        </div>

        <div class="header-bottom">
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
            <section class="container">

                <div class="carrosel-cabecalho">
                    <h2>Lançamento</h2>
                </div>

                <div class="carrosel-btn">
                    <button type="button" class="prvItem"> < </button>
                    <button type="button" class="nxtItem"> > </button>           
                </div>

                <div class="carrosel-visivel">
                    <div class="carrosel">

                        <?php foreach($dadosItens as $item):?>
                            <div class="card">
                                <div class="categoria">  

                                    <figure class="img-container">
                                        <img decoding="async" src="<?= "assets/imagens/".$item->getQuantidade() ?>" alt="Imagem de exemplo">
                                    </figure>

                                    <div class="categoria-conteudo">
                                        <span class="nome">
                                            <h2><?= $item->getNome() ?></h2>
                                        </span>
                                        <span class="preço">
                                            <!--Number format, formata o número (float) para quantas casas forem informadas no parâmetro-->
                                            <p>de R$ <?= number_format($item->getPreco(), 2) ?> por:</p>
                                        </span>
                                        <button>Saiba mais</button>
                                    </div>

                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>
        </article>
    </main>

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


                <div class="newsletter-titulo">NEWSLETTER</div>

                <div class="newsletter-divisa"></div>

                <div class="cadastro-email">
                    <div class="email">
                        <div class="email-titulo">Receba ofertas exclusivas no seu e-mail</div>
                        <div class="email-text-bottom">
                            <form action="" method="post" class="search-bar-form-bottom">
                                <fieldset class="search-bar">
                                    <input type="text" name="search-bar-content" class="search-bar-content"
                                        id="search-bar-content" placeholder="E-mail">
                                    <input type="submit" value="" name="search-bar-submit" class="barra-pesquisa-bottom"
                                        id="barra-pesquisa-bottom">
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
<script src="js/carrosel.js"></script>

</html>