<?php 
$vakansii = dbQuery("SELECT id,url,name,preview, info, info2
FROM content WHERE parentid = 2987 AND ispublish = 1 ORDER BY showorder"); ?>

<main>
    <div class="container">
        <h1 class="main-title">
            Вакансии
        </h1>
    </div>
    <section class="cards-section  marginet-top">
        <div class="container">
            <div class="cards-section__container">
                <div class="cards-list cards-list--table">


                        <?php foreach ($vakansii as $key=>$r) { ?>

                                <a href="<?= $r["url"] ?>/" class="single-card  green">
                                    <div class="img">
                                        <img class="lazyload" data-src="<?php echo _TEMPL . 'build/img/vk-' ?><?php echo $key + 1  .'.png' ?>" alt="">
                                    </div>
                                    <div class="text">
                                        <span class="tag">Вакансии</span>
                                        <p><?= $r['name'] ?></p>
                                        <div class="bottom">
                                            <small><?php echo htmlspecialchars_decode($r['preview'], ENT_QUOTES); ?></small>
                                            <div class="btn btn--blue">Детальнее</div>
                                        </div>

                                    </div>
                                </a>
                                <div class="card-obt__text" style="display: none">
                                    <?php echo htmlspecialchars_decode($r['info'], ENT_QUOTES); ?>
                                    <?php echo htmlspecialchars_decode($r['info2'], ENT_QUOTES); ?>
                                </div>



                        <?php } ?>


                </div>

            </div>
        </div>
        <div class="desk-socials">
            <a target="_blank" href="https://m.me/momento.un?ref=UNMOMENTO" class="desk-soc">
                <img src="<?php echo _TEMPL.'build/img/ds-ms.svg'?>" alt="">
            </a>
            <a target="_blank" href="viber://pa?chatURI=unmomentobot&context=ml1" class="desk-soc">
                <img src="<?php echo _TEMPL.'build/img/ds-vb.svg'?>" alt="">
            </a>
            <a target="_blank" href="https://t.me/unmomento_bot" class="desk-soc">
                <img src="<?php echo _TEMPL.'build/img/ds-tg.svg'?>" alt="">
            </a>
            <a onclick="gtag('event', 'Click', {'event_category': 'Order'});" href="https://play.google.com/store/apps/details?id=ru.agbis.Unmomento" class="desk-soc">
                <img src="<?php echo _TEMPL.'build/img/ds-pm.svg'?>" alt="">
            </a>
            <a onclick="gtag('event', 'Click', {'event_category': 'Order'});" href="https://apps.apple.com/ua/app/unmomento/id1491483430?l=ru" class="desk-soc">
                <img src="<?php echo _TEMPL.'build/img/ds-as.svg'?>" alt="">
            </a>
        </div>
    </section>

</main>
