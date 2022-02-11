<main>
    <div class="container">
        <h1 class="main-title">Цены</h1>
    </div>

    <div class="search-mobile-block search-mobile-block--visible">
        <div class="container">
            <div class="search-cont">
                <form method="get" id="sform" name="sform" action="/search-result/">
                    <input type="text" id="ctext" name="stext" class="search-field" autocomplete="off" placeholder="">
                    <div class="searchsubmit">

                        <input type="submit" class="menuupd_searchsubmit bluebutton"
                               value="">
                        Поиск
                    </div>
                </form>
            </div>
        </div>
    </div>


    <section class="price-slider js-slider">
        <div class="container">
            <div class="price-slider__container swiper-container">
                <div class="swiper-wrapper">
                    <a href="<?php echo _SITE; ?>novosti/vash-zahust/" class="price-slide swiper-slide">
                        <img src="<?php echo _SITE ?>images/files/1_3462_30062020151207_1.jpg" alt="">
                    </a>
                    <div class="price-slide swiper-slide">
                        <iframe src="https://www.youtube.com/embed/WU-haYcrkvg?rel=0&amp;controls=0&amp;showinfo=0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                </div>

            </div>
            <div class="dots">

            </div>
        </div>
    </section>
    <section class="price-block">
        <div class="container">
            <div class="price-block__container">
                <h2 class="price-title top_prise">
                    Чистка текстильных изделий
                </h2>

                <div class="price-block__content">
                    <div class="price-list">
                        <div class="um-service-price-section um-price-wrap" scrollId="staftOfPrice">
                            <div class="block_prise hidden-btn">

                                <div id="priceArea"></div>
                                <div scrollId="endOfPrice"></div>

                                <div class="price-list__btn">
                                    <img src="<?php echo _TEMPL.'build/img/btn-flt.svg'  ?>" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="price-side">
                        <div class="container_prise hidden-bar">
                            <div class="sidebar">
                                <div class="top_sidebar">
                                    <h1 class ="name">Услуги</h1>
                                </div>
                                <div class="scroll_menu">
                                    <ul class="filters">
                                        <?php
                                        $blacklist_arr = array(3198, 3199, 3200, 3201, 3202, 3203, 3204, 3205, 3206, 3207, 3208, 3209, 3210, 3211, 3212, 3213, 3268, 3308, 3309, 3310, 3311, 3195, 2994, 3143,  //массив idшников СЕО услуг + аквалайт
                                            3381, 3383, 3384, 3385, 3386,
                                            3411, 3412, 3413, 3414, 3415, 3416, 3417, 3518, 3516, 3519, 3515, 3517,
                                        ); //+ подразделов Корпоративного обслуживания
                                        $arr = dbQuery("SELECT id,name FROM content WHERE parentid = 23 AND ispublish = 1  ORDER BY showorder");
                                        foreach($arr as $row) {
                                            $pcount = dbGetOne("SELECT count(*) FROM prices WHERE  serviceid NOT IN (".implode(',', $blacklist_arr).") AND serviceid = '".$row["id"]."'");
                                            if($pcount == 0) { continue; }
                                            ?>
                                            <li id="s<?= $row["id"] ?>" onclick="loadPrices(<?= $row["id"] ?>,this,true)"  ><?= $row["name"] ?></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                                <div class="filter-side-btn">
                                    <img src="<?php echo _TEMPL.'build/img/btn-flt.svg'  ?>" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="form-prices">
                            <div class="um-form-cont">
                                <div class="um-fixed-container priceResultBtnWrap">
                                    <div class="um-padding-container-left">
                                        <div class="um-price-result container_result clear_after">
                                            <div class="form-price__result">
                                                <div class="prise_result">
                                                    Итого:  <span id="countPrice">0 грн</span>
                                                </div>
                                                <div class="namber_result">* стоимость указана без учета скидки</div>
                                                <form onsubmit="return false;" >
                                                    <div class="input">
                                                        <input id = "name777" type="text" placeholder="Ваше имя">
                                                    </div>
                                                    <div class="input">
                                                        <input id = "phone87" class="setMask" type="text" required placeholder="Ваш телефон*">
                                                    </div>

                                                    <input class="um-green-btn" id="SentOrderPrice" type="submit" value="Отправить">
                                                    <?php $page_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";?>
                                                    <span data-url="<?php echo $page_link; ?>"></span>
                                                </form>
                                                <div class="ajaxMessage"></div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </section>

    <section class="compare js-slider">
        <div class="container">
            <h2>До и После</h2>
            <div class="compare__container swiper-container">
                <div class="swiper-wrapper">
                    <?php
                    if ($head["id"]==2994 || $head["id"]==3178) {
                        $slider_arr = array(
                            'hm01.jpg','hm02.jpg','hm03.jpg','hm04.jpg','hm05.jpg',
                            'n1.jpg','n2.jpg','n3.jpg','n4.jpg','n5.jpg','n6.jpg','n7.jpg','n8.jpg','n9.jpg',
                            'n10.jpg','n11.jpg','n12.jpg','n13.jpg','n14.jpg','n15.jpg','n16.jpg',
                        );
                    } else {
                        $slider_arr = array(
                            'before_after_1.jpg', 'before_after_2.jpg', 'before_after_3.jpg',
                            'before_after_4.jpg', 'before_after_5.jpg', 'before_after_6.jpg',
                            'before_after_7.jpg', 'before_after_8.jpg');
                    }
                    ?>
                    <?php foreach ($slider_arr as $slide_img){ ?>
                        <div class="compare-slide swiper-slide">
                            <img src="<?php echo _TEMPL ?>img/<?php echo $slide_img; ?>" alt="">
                        </div>
                    <?php }?>
                </div>
            </div>
            <div class="dots"></div>
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

        </div>
    </section>
    <section class="desktop-buttons">
        <div class="container">
            <div class="desk-buttons__list">
                <a href="/uslugi/distantsionnyy-zakaz.html" class="desk-btn cour-non">Вызов курьера</a>
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
                <a href="/o-kompanii/kontakty.html" class="desk-btn">Пункты приема</a>
            </div>

        </div>
    </section>
</main>

