
<h1 style="color: white;">
    <?php
        if(!isset($_SESSION['id'])){
            //"Revivendo" a sessão pra poder utilizar as variáveis dela
            session_start();
        }
    ?>
</h1>

<header>
    <div class="header-top">
        <div class="header-top-left"></div>

        <nav>
            <ul class="nav-content">
                <li class="nav-item">
                    <a href="/index.php">HOME</a>
                </li>

                <li class="nav-item">
                    <a href="#">CATEGORIAS</a>
                </li>

                <li class="nav-item">
                    <a href="#">CONTATO</a>
                </li>

                <li class="nav-item">
                    <a href="#">OFERTAS</a>
                </li>
            </ul>
        </nav>

        <div class="header-top-right">
            <figure class="site-theme-btn-container">
                <a href="">
                    <img src="/assets/icones/dark_theme_regular_icon_204499.png" alt="">
                </a>
            </figure>

            <figure class="shopping-kart-btn-container">
                <a href="/src/View/pages/viewCarrinho.php">
                    <img src="/assets/icones/1413908.png" alt="carrinho de compras">
                </a>
            </figure>

            <figure class="user-account-btn-container">

                <?php if(!isset($_SESSION['id'])){?>
                        <a href="/src/View/pages/viewLoginCadastro.php">
                            <img src="/assets/icones/202-2024792_user-profile-icon-png-download-fa-user-circle.png" alt="">
                        </a>
                <?php }else{?>
                    <a href="/src/View/pages/viewConta.php">
                        <img src="/assets/icones/202-2024792_user-profile-icon-png-download-fa-user-circle.png" alt="">
                    </a>
                <?php } ?>

            </figure>
        </div>
    </div>

    <?php
        $currentPage = basename($_SERVER['PHP_SELF']);

        if($currentPage != "viewLoginCadastro.php"){ ?>

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
    <?php } ?>
</header>