<main>

    <div class="container">
        <h1 class="main-title">Программа лояльности</h1>
    </div>

    <section class="news-inner promot">
        <div class="container">
            <div class="news-inner__block">

                <div class="news-inner__main">

                    <?php
                    $main_img = getMainImage($head["id"],1);
                    ?>
                    <div class="img">
                        <img src="<?php echo _SITE ?>images/files/<?=$main_img['image']?>" alt="">
                    </div>

                    <div class="tag">Программа лояльности</div>

                    <h1><?= $head["name"] ?></h1>
                    <div class="text">
                        <h1><?=$head["name"];?></h1>
                        <?=htmlspecialchars_decode($head["preview"],ENT_QUOTES)?>
                        <?= htmlspecialchars_decode($head["info"]) ?>
                        <?=htmlspecialchars_decode($head["additional"],ENT_QUOTES)?>
                    </div>

                </div>
                <aside class="news__other">
                    <div class="news__other-cont">
                        <?php
                        $blacklist_arr = array(3381, 3383, 3384, 3385, 3386);

                        $arr = dbQuery("SELECT id,url,name,(SELECT id FROM images WHERE source = 1 AND parentid = content.id AND is_main = 1) as imid,(SELECT format FROM images WHERE source = 1 AND parentid = content.id AND is_main = 1) as imformat FROM content WHERE parentid = 3078 AND ispublish = 1 AND id != $head[id] AND id NOT IN (".implode(',', $blacklist_arr).") ORDER BY rand() LIMIT 0,2 ");

                        foreach($arr as $r)
                        {
                            $img = getImageById($r["imid"]);
                            ?>

                            <a href="<?= $r["url"] ?>" class="single-card green">
                                <div class="img">
                                    <img class="lazyload" data-src="<?php echo _SITE ?>images/files/<?php echo $img["image"] ?>" alt="">
                                </div>
                                <div class="text">
                                    <span class="tag">Программа лояльности</span>
                                    <p><?= $r["name"]?></p>

                                    <div class="btn btn--blue">Детальнее</div>

                                </div>
                            </a>

                        <?php } ?>
                    </div>

                    <a href="/loyalty/" class="btn btn--blue">
                        Все лояльности
                    </a>

                </aside>
            </div>

        </div>
    </section>
    <?php include 'desk-buttons-nav.php'; ?>
</main>
