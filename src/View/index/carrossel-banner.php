<section class="container-banner">
    <div class="banner-conteudo">
        <div class="banner-controle"></div>

        <div class="banner-visivel">
            <div class="banners">
                <?php foreach($banners as $banner): ?>
                    <figure class="banner">
                        <img src="<?= $banner["img"] ?>" alt="" class="banner-img">
                    </figure>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>