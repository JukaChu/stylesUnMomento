
<?php 
global $h1;
$detect = new Mobile_Detect;
?>
<?php if((int)$head["id"] == 1713 || (int)$head["id"] == 142 /*|| ( (int)$head["id"] == 147 && isset($_GET['dev']) )*/ ){ ?>

<main class="service-inner">
    <?php 
    if($head["id"] == 1713) { include 'service_corporative.php'; } 
    else if($head["id"] == 142){ include 'service_dostavka.php'; }
    /*else if($head["id"] == 147){ include 'service_corporative_2.php'; }*/
    ?>
</main>
<?php }  else { ?>

    <main class="service-inner">
        <div class="container">
            <h1 class="main-title"><?= $h1 ?></h1>
        </div>
        <section class="service-page">
            <div class="container">
                <div class="service-page__container">
                    <div class="service-page__head">
                        <?php $images = getImages($head['id'], 1);
                        $i = 0;
                        foreach ($images as $image) {
                            ?>
                            <?php if ($i === 0) { ?>
                                <div class="img <?php echo $image['id'] ?>">
                                    <img src="/images/files/<?php echo $image['image'] ?>" alt="">
                                </div>
                            <?php }
                            $i++ ?>


                            <?php
                        } ?>
                        <div class="service-page__cont desk-only">
                            <div class="service-page__before swiper-container">
                                <div class="swiper-wrapper">
                                    <?php
                                    if ($head["id"] == 2994 || $head["id"] == 3178) {
                                        $slider_arr = array(
                                            'hm01.jpg', 'hm02.jpg', 'hm03.jpg', 'hm04.jpg', 'hm05.jpg',
                                            'n1.jpg', 'n2.jpg', 'n3.jpg', 'n4.jpg', 'n5.jpg', 'n6.jpg', 'n7.jpg', 'n8.jpg', 'n9.jpg',
                                            'n10.jpg', 'n11.jpg', 'n12.jpg', 'n13.jpg', 'n14.jpg', 'n15.jpg', 'n16.jpg',
                                        );
                                    } else {
                                        $slider_arr = array(
                                            'before_after_1.jpg', 'before_after_2.jpg', 'before_after_3.jpg',
                                            'before_after_4.jpg', 'before_after_5.jpg', 'before_after_6.jpg',
                                            'before_after_7.jpg', 'before_after_8.jpg');
                                    }
                                    ?>
                                    <?php foreach ($slider_arr as $slide_img) { ?>
                                        <div class="swiper-slide service-page__before-slide">
                                            <img src="<?php echo _TEMPL . '/img/' ?><?php echo $slide_img; ?>" alt="">
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


                        </div>

                    </div>

                    <div class="service-page__text">
                        <?= htmlspecialchars_decode($head["preview"], ENT_QUOTES) ?>
                        <div class="open-ser-txt">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>

                    <div class="service-page__adv">
                        <h2>???????? ????????????????????????</h2>
                        <div class="service-page__adv-list">
                            <div class="service-page__adv-item">
                                <div class="img">
                                    <img src="<?php echo _TEMPL . 'build/img/per-1.png' ?>" alt="">
                                </div>
                                <p>???????????????? <br>????????????????</p>
                            </div>
                            <div class="service-page__adv-item">
                                <div class="img">
                                    <img src="<?php echo _TEMPL . 'build/img/per-2.png' ?>" alt="">
                                </div>
                                <p>?????????????????????????????? <br>??????????????????</p>
                            </div>
                            <div class="service-page__adv-item">
                                <div class="img">
                                    <img src="<?php echo _TEMPL . 'build/img/per-3.png' ?>" alt="">
                                </div>
                                <p>???????????????????????????? <br>????????????</p>
                            </div>
                            <div class="service-page__adv-item">
                                <div class="img">
                                    <img src="<?php echo _TEMPL . 'build/img/per-4.png' ?>" alt="">
                                </div>
                                <p>?????????????????????????? <br>???? 2 ??????????</p>
                            </div>
                        </div>
                    </div>

                    <div class="service-page__price">
                        <h2>????????</h2>

                        <div class="search-mobile-block search-mobile-block--visible">
                            <div class="search-cont">

                                <form method="get" id="sform" name="sform" action="/search-result/">
                                    <input type="text" id="stext" name="stext"
                                           class="search-field ui-autocomplete-input" autocomplete="off"
                                           placeholder="?????????? ????????????...">
                                    <div class="searchsubmit">
                                        <input type="submit" class="menuupd_searchsubmit bluebutton" value="">
                                        ??????????
                                    </div>
                                </form>


                            </div>
                        </div>
                        <div class="service-page__price-cont">
                            <div class="price-list">


                                <?php
                                //?????? ???????????????? ??????????, ?????????? ????????????????
                                if ($head["id"] != 1619) {
                                    $items = dbQuery("SELECT * FROM prices WHERE serviceid = '" . intval($head["id"]) . "' ORDER BY showorder,name");

                                    if (count($items) > 0) { ?>
                                        <div class="um-price-wrap" scrollId="staftOfPrice">
                                            <div class="block_prise hidden-btn">


                                                <div>
                                                    <div class="table_prise block_prise_corporative clear_after">
                                                        <div class="hed_row  ">
                                                            <div class="content_col">????????????????????????</div>
                                                            <div class="content_col">????. ??????</div>
                                                            <div class="content_col  <?php echo $detect->isMobile() ? 'showMeTipMob' : 'showMeTip'; ?>">
                                                                AquaLight
                                                                <span class="q-mark qMark">?</span>
                                                                <div class="popup-tip-wrap">
                                                                    <div class="popup-tip">
                                                                        Aqualight - ???????????????????????????????? ???????????? ?? ?????????????????????? ?????????????????????? ???????????? ?? ???????????????????????????? ?????????????????????????? ????????????????????, ?????? ?????????????????? ?????????????????? ??????????????????????. ?????????????????? ?????????????????? ?????????????? ???? 1000 ??????
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="content_col <?php echo $detect->isMobile() ? 'showMeTipMob' : 'showMeTip'; ?>">
                                                                UNMOMENTO
                                                                <span class="q-mark qMark">?</span>
                                                                <div class="popup-tip-wrap">
                                                                    <div class="popup-tip">
                                                                        UNMOMENTO - ?????????????????? ???????????? ?????????? ???????????????? ????????, ?????? ???????????????? ?????????? ???????????? ?? ?????????????????? ?????????????????????????????? ?????????????????? ?????????????????????? (?????????????????? ??????????) ?? ?????????????? ???????????????????????????????? ????????????????????. ?????????????????????? ?? ???????????????????????????????? ????????????????. ????????????????. ?????????????????? ?????????????????? ?????????????????????? ?????????????? ???? 4000 ?????? (?????????????? ???? 6000 ??????, ?????????????? ???? 10000 ??????)

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="content_col <?php echo $detect->isMobile() ? 'showMeTipMob' : 'showMeTip'; ?>">
                                                                Premium
                                                                <span class="q-mark qMark">?</span>
                                                                <div class="popup-tip-wrap">
                                                                    <div class="popup-tip">
                                                                        UNMOMENTO Premium - ?????????????????????? ???????????? ?????????? ???? ???????????????????? ????????????, ?????????????????????????????? ?? ?????????????????? ?????????? ?????? ???? ???????????????? ???????? ?? ???????????????? ??????????????. ???????????? ???????????????? ???????????? ??????????????????, ?????????? ???????????? ?? ?????????????????? ?????????????????????????????? ?????????????????? ??????????????????????, ??????????????????????, ???????????????? ?? ???????????????????????????? ????????????????. ?????????????????? ?????????????????? ?????????????? ???? 10000 ?????? (?????????????? ???? 20000??????, ?????????????? ???? 30000??????)

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <?php foreach ($items as $item) { ?>
                                                            <div class="content_row check_block <?= ($item["isaction"] == 1 ? " action" : "") ?>">
                                                                <div class="content_col"><?= $item["name"] ?></div>
                                                                <div class="content_col"><?= $item["unit"] ?></div>
                                                                <div class="content_col">
                                                                    <?php if ($item["price1"] > 0) { ?>
                                                                        <div vid-uslug="????????????????"
                                                                             data-tovar="<?= $item["name"] ?>"
                                                                             data-price="<?= $item["price1"] ?>"
                                                                             class="square_check"></div>
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;<?= ($item["price1"]) ?>
                                                                    <?php } ?>
                                                                </div>
                                                                <div class="content_col">
                                                                    <?php if ($item["price2"] > 0) { ?>
                                                                        <div vid-uslug="Unmomento"
                                                                             data-tovar="<?= $item["name"] ?>"
                                                                             data-price="<?= $item["price2"] ?>"
                                                                             class="square_check"></div>
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;<?= ($item["price2"]) ?>
                                                                    <?php } ?>
                                                                </div>
                                                                <div class="content_col">
                                                                    <?php if ($item["price3"] > 0) { ?>
                                                                        <div vid-uslug="Unmomento"
                                                                             data-tovar="<?= $item["name"] ?>"
                                                                             data-price="<?= $item["price3"] ?>"
                                                                             class="square_check"></div>
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;<?= ($item["price3"]) ?>
                                                                    <?php } ?>
                                                                </div>
                                                            </div>
                                                        <?php } ?>

                                                    </div>
                                                    <div scrollId="endOfPrice"></div>
                                                    <div class="price-list__btn">
                                                        <img src="<?php echo _TEMPL . 'build/img/btn-flt.svg' ?>"
                                                             alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                <?php } else {
                                    // ???????????????? ???????????????? ???????????????? ???????? ???? ???????????????? ?????????? ???? ???????????? ????????????????, ???????? ??????????????????
                                    // ???????????? ?????????????????? html
                                    $blacklist_arr = array(3198, 3199, 3200, 3201, 3202, 3203, 3204, 3205, 3206, 3207, 3208, 3209, 3210, 3211, 3212, 3213, 3268, 3308, 3309, 3310, 3311, 3195, 1619, 1713, 3174, 3381, 3383, 3384, 3385, 3386); //?????? ????????????
                                    $items = dbQuery("SELECT * FROM prices WHERE  substr(name, 1,3) !='????.' and serviceid  NOT IN (" . implode(',', $blacklist_arr) . ") ORDER BY showorder,name");
                                    $items_co = dbQuery("SELECT * FROM prices WHERE  substr(name, 1,3) ='????.' and serviceid  NOT IN (" . implode(',', $blacklist_arr) . ") ORDER BY showorder,name");
                                    $items_h = dbQuery("SELECT * FROM content WHERE id=3174");
                                    if (count($items) > 0) { ?>
                                        <div class="um-price-wrap um-akva-price" scrollId="staftOfPrice">
                                            <div class="block_prise hidden-btn">


                                                <div>
                                                    <div class="table_prise block_prise_corporative clear_after">
                                                        <div class="hed_row  ">
                                                            <div class="content_col">????????????????????????</div>
                                                            <div class="content_col">????. ??????</div>
                                                            <div class="content_col <?php echo $detect->isMobile() ? 'showMeTipMob' : 'showMeTip'; ?>">
                                                                AquaLight
                                                                <span class="q-mark qMark">?</span>
                                                                <div class="popup-tip-wrap">
                                                                    <div class="popup-tip">
                                                                        Aqualight - ???????????????????????????????? ???????????? ?? ?????????????????????? ?????????????????????? ???????????? ?? ???????????????????????????? ?????????????????????????? ????????????????????, ?????? ?????????????????? ?????????????????? ??????????????????????. ?????????????????? ?????????????????? ?????????????? ???? 1000 ??????

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <?php
                                                        foreach ($items as $item) {
                                                            if ($item["price1"] > 0) {
                                                                ?>
                                                                <div class="content_row"
                                                                     data-parent="<?php echo $item["serviceid"]; ?>">
                                                                    <div class="content_col"><?= $item["name"] ?></div>
                                                                    <div class="content_col"><?= $item["unit"] ?></div>
                                                                    <div class="content_col">
                                                                        <div vid-uslug="????????????????"
                                                                             data-tovar="<?= $item["name"] ?>"
                                                                             data-price="<?= $item["price1"] ?>"
                                                                             class="square_check"></div>
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;<?= ($item["price1"]) ?>

                                                                    </div>
                                                                </div>
                                                            <?php } ?>
                                                        <?php } ?>

                                                        <?php
                                                        foreach ($items_co as $item) {
                                                            if ($item["price1"] > 0 && (int)$head['id'] != 1619) {
                                                                ?>
                                                                <div class="content_row check_block"
                                                                     data-parent="<?php echo $item["serviceid"]; ?>">
                                                                    <div class="content_col"><?= $item["name"] ?></div>
                                                                    <div class="content_col"><?= $item["unit"] ?></div>
                                                                    <div class="content_col">
                                                                        <div vid-uslug="????????????????"
                                                                             data-tovar="<?= $item["name"] ?>"
                                                                             data-price="<?= $item["price1"] ?>"
                                                                             class="square_check"></div>
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;<?= ($item["price1"]) ?>

                                                                    </div>
                                                                </div>
                                                            <?php } ?>
                                                        <?php } ?>

                                                    </div>

                                                </div>
                                                <div scrollId="endOfPrice"></div>
                                                <div class="price-list__btn">
                                                    <img src="<?php echo _TEMPL . 'build/img/btn-flt.svg' ?>" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    <?php }
                                } ?>
                            </div>
                            <div class="price-side">
                                <div class="form-prices">
                                    <div class="um-form-cont">
                                        <div class="um-fixed-container priceResultBtnWrap">
                                            <div class="um-padding-container-left">
                                                <div class="um-price-result container_result clear_after">
                                                    <div class="form-price__result">
                                                        <div class="prise_result">
                                                            ??????????: <span id="countPrice">0 ??????</span>
                                                        </div>
                                                        <div class="namber_result">* ?????????????????? ?????????????? ?????? ?????????? ????????????
                                                        </div>
                                                        <form onsubmit="return false;">
                                                            <div class="input">
                                                                <input id="name777" type="text" placeholder="???????? ??????">
                                                            </div>
                                                            <div class="input">
                                                                <input id="phone87" class="setMask" type="text" required
                                                                       placeholder="?????? ??????????????*">
                                                            </div>

                                                            <input class="um-green-btn" id="SentOrderService"
                                                                   type="submit" value="??????????????????">
                                                            <?php $page_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
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

                    <div class="service-page__adv">
                        <h2>C?????????????????????? ???????????????????? ??????????????</h2>
                        <div class="service-page__adv-list">
                            <div class="service-page__adv-item">
                                <div class="img">
                                    <img src="<?php echo _TEMPL . 'build/img/com-1.png' ?>" alt="">
                                </div>
                                <p>?????????????????????? <br>????????????</p>
                            </div>
                            <div class="service-page__adv-item">
                                <div class="img">
                                    <img src="<?php echo _TEMPL . 'build/img/com-2.png' ?>" alt="">
                                </div>
                                <p>???????????????? <br>????????????</p>
                            </div>
                            <div class="service-page__adv-item">
                                <div class="img">
                                    <img src="<?php echo _TEMPL . 'build/img/com-3.png' ?>" alt="">
                                </div>
                                <p>?????????????????????? <br>????????????</p>
                            </div>
                            <div class="service-page__adv-item">
                                <div class="img">
                                    <img src="<?php echo _TEMPL . 'build/img/com-4.png' ?>" alt="">
                                </div>
                                <p>?????????????????????? <br>????????????????</p>
                            </div>
                        </div>
                    </div>

                    <div class="service-page__cont mob-only">
                        <div class="service-page__before swiper-container">
                            <div class="swiper-wrapper">
                                <?php
                                if ($head["id"] == 2994 || $head["id"] == 3178) {
                                    $slider_arr = array(
                                        'hm01.jpg', 'hm02.jpg', 'hm03.jpg', 'hm04.jpg', 'hm05.jpg',
                                        'n1.jpg', 'n2.jpg', 'n3.jpg', 'n4.jpg', 'n5.jpg', 'n6.jpg', 'n7.jpg', 'n8.jpg', 'n9.jpg',
                                        'n10.jpg', 'n11.jpg', 'n12.jpg', 'n13.jpg', 'n14.jpg', 'n15.jpg', 'n16.jpg',
                                    );
                                } else {
                                    $slider_arr = array(
                                        'before_after_1.jpg', 'before_after_2.jpg', 'before_after_3.jpg',
                                        'before_after_4.jpg', 'before_after_5.jpg', 'before_after_6.jpg',
                                        'before_after_7.jpg', 'before_after_8.jpg');
                                }
                                ?>
                                <?php foreach ($slider_arr as $slide_img) { ?>
                                    <div class="swiper-slide service-page__before-slide">
                                        <img src="<?php echo _TEMPL . '/img/' ?><?php echo $slide_img; ?>" alt="">
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
                    <div class="service-page__delivery">
                        <h2>????????????????</h2>
                        <div class="service-page__delivery-content">
                            <div class="img">
                                <img src="<?php echo _TEMPL . 'img/delivery.jpg' ?>" alt="">
                            </div>
                            <aside class="service-deliv">
                                <div class="styled-form">
                                    <div class="form-title">?????????????? ?????? ????????</div>
                                    <iframe id="_srframe" name="_srframe" style="display:none;"></iframe>
                                    <form id="delivery<?php echo $head['id']; ?>" method="post" target="_srframe"
                                          action="/request.php?action=add&amp;id=14">
                                        <input type="hidden" name="f80" id="f80" value="<?= $head['name'] ?>"/>
                                        <div class="styled-form-inner">
                                            <div class="form-row">
                                                <div class="form-input"><input required="" name="f61" id="f61"
                                                                               type="text" placeholder="??????"></div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-input">
                                                    <input required="" type="tel" name="f62" id="f62"
                                                           placeholder="+380 XX XXX XX XX" class="setMask">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-input">
                                                    <input class="dateTimePicker" name="f64" id="f64" type="text"
                                                           maxlength="45" size="45" placeholder="???????? ?? ??????????">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="select-wrap">
                                                    <div class="select-btn selectOpen">???????????????? ???? ????????????</div>
                                                    <div class="hidden-select">
                                                        <div class="select-row">
                                                            <input type="radio" id="stuff_4" name="f63"
                                                                   value="????????, ????????????, ???????? ????????">
                                                            <label for="stuff_4">????????????, ??????????, ???????????? ????????</label>
                                                        </div>
                                                        <div class="select-row">
                                                            <input type="radio" id="stuff_5" name="f63"
                                                                   value="???????????? ??'???????? ????????????">
                                                            <label for="stuff_5">???????????? ???????????? ????????????<</label>
                                                        </div>
                                                        <div class="select-row">
                                                            <input type="radio" id="stuff_6" name="f63"
                                                                   value="?????????? ???? ??????????????">
                                                            <label for="stuff_6">?????????? ?? ??????????????</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row submit-row">
                                                <input class="btn btn--blue" onclick="fbq('track', 'SubmitApplication');" type="submit"
                                                       value="??????????????????">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </aside>

                        </div>

                    </div>
                </div>
            </div>
        </section>
        <section class="cards-section js-section">
            <div class="container">
                <div class="cards-section__container">
                    <h2>???????????? ????????????</h2>
                    <div class="cards-list swiper-container">
                        <div class="swiper-wrapper">

                            <?php
                            $blacklist_arr = array(3198, 3199, 3200, 3201, 3202, 3203, 3204, 3205, 3206, 3207, 3208, 3209, 3210, 3211, 3212, 3213, 3268, 3308, 3309, 3310, 3311, 3195, 1619, 1713, 3174, 3381, 3383, 3384, 3385, 3386); //?????? ????????????
                            $blacklist_arr[] = $head['id'];
                            $arr = dbQuery("SELECT id,url,name,(SELECT id FROM images WHERE source = 1 AND parentid = content.id AND is_main = 1) as imid
                FROM content WHERE parentid = 23 AND id NOT IN (" . implode(',', $blacklist_arr) . ") AND ispublish = 1 ORDER BY rand() LIMIT 0,6");
                            ?>

                            <?php
                            foreach ($arr as $r) {
                                $img = getImageById($r["imid"]); ?>

                                <a data-id="<?php echo $r["id"]; ?>"
                                   href="<?php if ($r["id"] == 3016) {
                                       echo 'http://shop.umcleaning.kiev.ua';
                                   } else if ($r["id"] == 147) {
                                       echo 'https://ua.unmomento.com.ua/';
                                   } else if ($r["id"] == 2994) {
                                       echo 'https://ua.unmomento.com.ua/services/himchistka-myagkoj-mebeli/';
                                   } else {
                                       echo $r["url"];
                                   } ?>"
                                   class="single-card red swiper-slide">
                                    <div class="img">
                                        <img class="lazyload"
                                             data-src="<?php echo _SITE ?>images/files/<?php echo $img["image"] ?>"
                                             alt="">
                                    </div>
                                    <div class="text">
                                        <span class="tag">????????????</span>
                                        <p><?= $r["name"] ?></p>

                                        <div class="btn btn--blue">??????????????????</div>

                                    </div>

                                </a>
                            <?php } ?>


                        </div>
                    </div>

                    <div class="dots">

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
                </div>
            </div>
        </section>
        <?php include 'desk-buttons-nav.php'; ?>

    </main>

<?php } ?>
<script>
    $('.aside-form-subtitle').html('<?php echo $head['name']; ?>');
    $('#f44, #lf44, #f59, #f51').val('<?php echo $head['name']; ?>');
</script>