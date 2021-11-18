<?php

$arr = dbQuery("SELECT id,url,name,preview,
(SELECT id FROM images WHERE source = 1 AND parentid = content.id AND is_main = 1) as imid,
(SELECT format FROM images WHERE source = 1 AND parentid = content.id AND is_main = 1) as imformat
FROM content WHERE parentid = 3220 AND ispublish = 1 ORDER BY showorder"); ?>
<main>
    <section class="all-cards">
        <div class="container">
            <h1 class="main-title">Відео</h1>

            <div class="cards-slider">
                <div class="cards-slider__container swiper-container">
                    <div class="swiper-wrapper">
                        <?
                        $i = 0;
                        foreach($arr as $r)
                        {
                            $i++;
                            $img =  getImageById($r["imid"]);
                            if(empty($r["imid"]))
                            {
                                $code = str_replace('https://youtu.be/', '', strip_tags(trim(htmlspecialchars_decode($r['preview']))));
                                $img['image'] = "https://i1.ytimg.com/vi/" . $code . "/hqdefault.jpg";
                            }
                            else
                            {
                                $img['image'] = '/images/files/' . $img["image"];
                            }
                            ?>

                            <a href="/<?= $r["url"] ?>" class="single-card green swiper-slide">
                                <div class="img">
                                    <img class="lazyload" data-src="<?php echo $img["image"] ?>" alt="">
                                </div>
                                <div class="text">
                                    <span class="tag">Відео</span>
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

