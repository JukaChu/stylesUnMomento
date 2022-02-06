
<main>

    <div class="container">
        <h1 class="main-title"><?= $head["name"] ?></h1>
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

                    <div class="tag">Вакансія</div>

                    <div class="text">
                        <h1><?=$head["name"];?></h1>
                        <?=htmlspecialchars_decode($head["preview"],ENT_QUOTES)?>
                        <?php echo htmlspecialchars_decode($head['info'], ENT_QUOTES); ?>
                        <?php echo htmlspecialchars_decode($head['info2'], ENT_QUOTES); ?>
                        <?=htmlspecialchars_decode($head["additional"],ENT_QUOTES)?>
                    </div>
                    <div class="form-call-back" style="display: none">
                        <div class="fran-form">
                            <div class="container_feedback um-fran-form " id="orderSend">
                                <div class="title">Зателефонуйте мені</div>
                                <div class="container_form clear_after">
                                    <iframe id="f_rframe" name="f_rframe" style="display:none;" ></iframe>
                                    <form method="post" target="f_rframe"  action="/request.php?action=add&id=10">
                                        <div class="input"><input required name="f90" type="name" id="f90"   value="" placeholder="Ім'я"></div>
                                        <div class="input"><input required name="f50" type="name"    value="" placeholder="Телефон"></div>
                                        <input type="hidden" name="f51" id="f51" value="Курьер">
                                        <input type="submit"  class="btn btn--blue btn--big" onclick="fbq('track', 'SubmitApplication');" name="" value="Відправити">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <aside class="news__other">
                    <div class="news__other-cont">
                        <?php
                        $blacklist_arr = array(3381, 3383, 3384, 3385, 3386);

                        $arr = dbQuery("SELECT id,url,name,(SELECT id FROM images WHERE source = 1 AND parentid = content.id AND is_main = 1) as imid,(SELECT format FROM images WHERE source = 1 AND parentid = content.id AND is_main = 1) as imformat FROM content WHERE parentid = 2987 AND ispublish = 1 AND id != $head[id] AND id NOT IN (".implode(',', $blacklist_arr).") ORDER BY rand() LIMIT 0,2 ");

                        foreach($arr as $r)
                        {
                            $img = getImageById($r["imid"]);
                            ?>

                            <a href="<?= $r["url"] ?>" class="single-card green">
                                <div class="img">
                                    <img class="lazyload" data-src="<?php echo _SITE ?>images/files/<?php echo $img["image"] ?>" alt="">
                                </div>
                                <div class="text">
                                    <span class="tag">Вакансія</span>
                                    <p><?= $r["name"]?></p>

                                    <div class="btn btn--blue">докладніше</div>

                                </div>
                            </a>

                        <?php } ?>
                    </div>

                    <a href="/vakansii/" class="btn btn--blue">
                        Всі вакансії
                    </a>

                </aside>
            </div>

        </div>
    </section>
    <?php include 'desk-buttons-nav.php'; ?>



</main>


