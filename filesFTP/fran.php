<?php
$subitems = dbQuery("SELECT * FROM content WHERE parentid = 27 AND ispublish = 1 ORDER BY showorder");
?>

<main>

    <div class="container">
        <h1 class="main-title">ФРАНЧАЙЗИНГ</h1>
    </div>

    <section class="company">
        <div class="container">
            <div class="company__container">
                <div class="company__content">
                    <div class="company__text">
                        <?php $mainImage = getMainImage($head["id"],1);
                        if($mainImage){ ?>
                        <div class="img" >
                            <img src="images/files/<?= $mainImage["image"] ?>" alt="">
                        </div>
                        <? } ?>

                        <?php if($head["id"] == 2977) {} else {?>
                            <div class="tag tag--blue">Франчайзинг</div>
                        <?php } ?>
                        <div class="company-row">

                            <div class="company-text__column <?php if($head["id"] == 2977) {} else { echo 'company-text__column--single'; }?>">
                                <?=htmlspecialchars_decode($head["info"],ENT_QUOTES)?>
                            </div>

                        </div>
                    </div>

                </div>
                <aside class="company-side">
                    <div class="company__news">
                        <?php
                        $blacklist_arr = array(3381, 3383, 3384, 3385, 3386);
                        $arr = dbQuery("SELECT id,url,name,(SELECT id FROM images WHERE source = 1 AND parentid = content.id AND is_main = 1) as imid,(SELECT format FROM images WHERE source = 1 AND parentid = content.id AND is_main = 1) as imformat FROM content WHERE parentid = 2976 AND ispublish = 1 AND id != $head[id] AND id NOT IN (" . implode(',', $blacklist_arr) . ") ORDER BY rand() LIMIT 0,4 ");
                        foreach ($arr as $r) {
                            $img = getImageById($r["imid"]);
                            ?>

                            <a href="<?= $r["url"] ?>" class="single-card ">
                                <div class="text">
                                    <span class="tag">Франчайзинг</span>
                                    <p><?= $r["name"] ?></p>

                                    <div class="btn btn--blue">докладніше</div>

                                </div>
                            </a>

                        <?php } ?>
                    </div>
                    <div class="fran-form">
                        <div class="container_feedback um-fran-form " id="orderSend">
                            <div class="title">Залишити заявку</div>
                            <div class="container_form clear_after">
                                <iframe id="f_rframe" name="f_rframe" style="display:none;" ></iframe>
                                <form method="post" target="f_rframe"  action="/request.php?action=add&id=11">
                                    <div class="input"><input required name="f52" type="name"    value="" placeholder="Ім'я"></div>
                                    <div class="input"><input required name="f54" type="name"    value="" placeholder="Телефон"></div>
                                    <textarea  name="f55" placeholder="Повідомлення"></textarea>
                                    <input type="submit"  class="btn btn--blue btn--big" onclick="fbq('track', 'SubmitApplication');" name="" value="Відправити">
                                </form>
                            </div>
                        </div>
                    </div>


                </aside>
                <div class="img non-visible">
                    <img src="images/files/<?= $mainImage["image"] ?>" alt="">
                </div>
            </div>


        </div>

    </section>

    <?php if($head["id"] == 2977) {} else {?>
    <?php include 'desk-buttons-nav.php'; ?>
    <?php } ?>


</main>
