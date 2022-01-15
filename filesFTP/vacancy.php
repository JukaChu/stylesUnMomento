<?php
$vakansii = dbQuery("SELECT id,url,name,preview, info, info2
FROM content WHERE parentid = 2987 AND ispublish = 1 ORDER BY showorder"); ?>

<main>
    <div class="container">
        <h1 class="main-title">
            Вакансії
        </h1>
    </div>
    <section class="cards-section js-section marginet-top">
        <div class="container">
            <div class="cards-section__container">
                <div class="cards-list swiper-container">
                    <div class="swiper-wrapper">

                        <?php foreach ($vakansii as $key=>$r) { ?>
                            <div class="card-obt-cont swiper-slide">
                                <div class="single-card  green">
                                    <div class="img">
                                        <img class="lazyload" data-src="<?php echo _TEMPL . 'build/img/vk-' ?><?php echo $key + 1  .'.png' ?>" alt="">
                                    </div>
                                    <div class="text">
                                        <span class="tag">Вакансії</span>
                                        <p><?= $r['name'] ?></p>
                                        <div class="bottom">
                                            <small><?php echo htmlspecialchars_decode($r['preview'], ENT_QUOTES); ?></small>
                                            <div class="btn btn--blue">Детальніше</div>
                                        </div>

                                    </div>
                                </div>
                                <div class="card-obt__text">
                                    <?php echo htmlspecialchars_decode($r['info'], ENT_QUOTES); ?>
                                    <?php echo htmlspecialchars_decode($r['info2'], ENT_QUOTES); ?>
                                </div>

                            </div>

                        <?php } ?>

                    </div>
                </div>
                <div class="slider-buttons">
                    <div class="btn-slides btn-slides--prev">
                        <svg width="28" height="88" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M26.5 2l-24 42 24 42" stroke-width="3" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <div class="btn-slides btn-slides--next">
                        <svg width="28" height="88" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M26.5 2l-24 42 24 42" stroke-width="3" stroke-linecap="round"/>
                        </svg>
                    </div>

                </div>
                <div class="dots"></div>
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

