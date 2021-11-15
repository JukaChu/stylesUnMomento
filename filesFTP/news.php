<?php

$arr = dbQuery("SELECT id,url,name,(SELECT id FROM images WHERE source = 1 AND parentid = content.id AND is_main = 1) as imid,(SELECT format FROM images WHERE source = 1 AND parentid = content.id AND is_main = 1) as imformat
FROM content WHERE parentid = 2890 AND ispublish = 1 ORDER BY showorder"); ?>
<main>
    <section class="all-cards">
        <div class="container">
            <h1 class="main-title">Новини</h1>

            <div class="cards-slider">
                <div class="cards-slider__container swiper-container">
                    <div class="swiper-wrapper">
                        <?
                        $i = 0;
                        foreach($arr as $r)
                        {
                            $i++;
                            $images = getImages($r["id"],1);
                            $img =  getImageById($r["imid"]);
                            if($img == "/templates/images/nofoto.jpg")
                            {
                                $img = "/images/no.png";
                            }
                            if(count($images) > 1)
                            {
                                $img = $images[1];
                            }
                            ?>

                            <a href="/<?= $r["url"] ?>" class="single-card blue swiper-slide">
                                <div class="img">
                                    <img class="lazyload" data-src="<?php echo _SITE; ?>images/files/<?php echo $img["image"] ?>" alt="">
                                </div>
                                <div class="text">
                                    <span class="tag">Новини</span>
                                    <p><?= $r["name"] ?></p>

                                    <div class="btn btn--blue">докладніше</div>

                                </div>
                            </a>

                            <?
                            if($i == 3) { $i = 0; }
                        }
                        ?>



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

