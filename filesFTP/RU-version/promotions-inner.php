

<main>

    <div class="container">
        <h1 class="main-title">Акции</h1>
    </div>

    <section class="news-inner promot">
        <div class="container">
            <div class="news-inner__block">

                <div class="news-inner__main">

                    <?php
                    $images = getImages($head["id"],1);
                    $img1 = $images[1];
                    $mainImage = getMainImage($head["id"],1);
                    ?>
                    <div class="img">
                        <img src="<?php echo _SITE ?>images/files/<?php echo $img1["image"] ?>" alt="">
                    </div>

                    <div class="tag">Акція</div>

                    <h1><?= $head["name"] ?></h1>
                    <div class="text">
                        <?= htmlspecialchars_decode($head["info"]) ?>


                    </div>

                </div>
                <aside class="news__other">
                    <div class="news__other-cont">
                        <?php
                        $blacklist_arr = array(3381, 3383, 3384, 3385, 3386);
                        $arr = dbQuery("SELECT id,url,name,(SELECT id FROM images WHERE source = 1 AND parentid = content.id AND is_main = 1) as imid,(SELECT format FROM images WHERE source = 1 AND parentid = content.id AND is_main = 1) as imformat FROM content WHERE parentid = 3166 AND ispublish = 1 AND id != $head[id] AND id NOT IN (".implode(',', $blacklist_arr).") ORDER BY rand() LIMIT 0,2 ");
                        foreach($arr as $r)
                        {
                            $img = getImageById($r["imid"]);
                            ?>

                            <a href="<?= $r["url"] ?>" class="single-card red">
                                <div class="img">
                                    <img class="lazyload" data-src="<?php echo _SITE ?>images/files/<?php echo $img["image"] ?>" alt="">
                                </div>
                                <div class="text">
                                    <span class="tag">Акции</span>
                                    <p><?= $r["name"]?></p>

                                    <div class="btn btn--blue">Подробнее</div>

                                </div>
                            </a>

                        <?php } ?>
                    </div>

                    <a href="/promotions/" class="btn btn--blue">
                        Все акции
                    </a>

                </aside>
            </div>

        </div>
    </section>
    <?php include 'desk-buttons-nav.php'; ?>



</main>

