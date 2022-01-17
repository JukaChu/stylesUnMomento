<?php

$arr = dbQuery("SELECT id,url,name,(SELECT id FROM images WHERE source = 1 AND parentid = content.id AND is_main = 1) as imid,(SELECT format FROM images WHERE source = 1 AND parentid = content.id AND is_main = 1) as imformat
FROM content WHERE parentid = $head[id] AND ispublish = 1 ORDER BY showorder"); ?>
<main>
    <section class="all-cards">
        <div class="container">
            <h1 class="main-title">Програми лояльності</h1>

            <div class="cards-slider">
                <div class="cards-slider__container swiper-container">
                    <div class="swiper-wrapper">
                        <?php $sql = dbQuery("SELECT id,url,name,(SELECT id FROM images WHERE source = 1 AND parentid = content.id AND is_main = 1) as imid,(SELECT format FROM images WHERE source = 1 AND parentid = content.id AND is_main = 1) as imformat FROM content WHERE parentid = '$head[id]' AND ispublish = 1 ORDER BY id DESC");
                        foreach($sql as $item) {
                            $img = getImageById($item["imid"]);
                            ?>

                            <a href="/<?=$item["url"]?>/" class="single-card green swiper-slide">
                                <div class="img">
                                    <img class="lazyload" data-src="<?php echo _SITE; ?>images/files/<?=$img["image"]?>" alt="">
                                </div>
                                <div class="text">
                                    <span class="tag">Програма лояльності</span>
                                    <p><?= $item["name"] ?></p>

                                    <div class="btn btn--blue">докладніше</div>

                                </div>
                            </a>
                        <?php } ?>



                    </div>

                </div>
                <div class="dots">

                </div>
                <div class="slider-buttons">
                    <div class="btn-slides btn-slides--prev"><svg width="28" height="88" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M26.5 2l-24 42 24 42"  stroke-width="3" stroke-linecap="round"/>
                        </svg></div>
                    <div class="btn-slides btn-slides--next"><svg width="28" height="88" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M26.5 2l-24 42 24 42"  stroke-width="3" stroke-linecap="round"/>
                        </svg></div>

                </div>
            </div>
        </div>


    </section>

    <?php include 'desk-buttons-nav.php'; ?>
</main>
