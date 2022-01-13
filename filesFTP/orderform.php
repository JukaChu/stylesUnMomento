<main class="service-inner">
    <div class="container">
        <h1 class="main-title">Виклик кур'єра</h1>

    </div>
    <section class="service-page">
        <div class="container">
            <div class="service-page__container service-page__container--cour">
                <div class="service-page__head">
                    <div class="img">
                        <img src="<?php echo _TEMPL . 'img/delivery.jpg' ?>" alt="">
                    </div>
                </div>
                <div class="service-page__delivery">

                    <div class="service-page__delivery-content">
                        <div class="img">
                            <img src="<?php echo _TEMPL . 'img/delivery.jpg' ?>" alt="">
                        </div>
                        <aside class="service-deliv">
                            <div class="styled-form">
                                <div class="form-title">Забрати мої речі</div>
                                <iframe id="_srframe" name="_srframe" style="display:none;"></iframe>
                                <form id="delivery<?php echo $head['id']; ?>" method="post" target="_srframe"
                                      action="/request.php?action=add&amp;id=14">
                                    <input type="hidden" name="f80" id="f80" value="<?= $head['name'] ?>"/>
                                    <div class="styled-form-inner">
                                        <div class="form-row">
                                            <div class="form-input"><input required="" name="f61" id="f61"
                                                                           type="text" placeholder="Ім`я"></div>
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
                                                       maxlength="45" size="45" placeholder="Дата та час">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="select-wrap">
                                                <div class="select-btn selectOpen">Оберіть зі списку</div>
                                                <div class="hidden-select">
                                                    <div class="select-row">
                                                        <input type="radio" id="stuff_4" name="f63"
                                                               value="Одяг, взуття, інші речі">
                                                        <label for="stuff_4">Одяг, взуття, інші речі</label>
                                                    </div>
                                                    <div class="select-row">
                                                        <input type="radio" id="stuff_5" name="f63"
                                                               value="Чистка м'яких меблів">
                                                        <label for="stuff_5">Чистка м'яких меблів</label>
                                                    </div>
                                                    <div class="select-row">
                                                        <input type="radio" id="stuff_6" name="f63"
                                                               value="Штори та гардини">
                                                        <label for="stuff_6">Штори та гардини</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row submit-row">
                                            <input class="btn btn--blue" onclick="fbq('track', 'SubmitApplication');" type="submit"
                                                   value="Відправити">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </aside>

                    </div>

                </div>
                <div class="service-page__adv">
                    <h2>Складові ідеального сервісу</h2>
                    <div class="service-page__adv-list">
                        <div class="service-page__adv-item">
                            <div class="img">
                                <img src="<?php echo _TEMPL . 'build/img/com-1.png' ?>" alt="">
                            </div>
                            <p>Ефективне <br>чищення</p>
                        </div>
                        <div class="service-page__adv-item">
                            <div class="img">
                                <img src="<?php echo _TEMPL . 'build/img/com-2.png' ?>" alt="">
                            </div>
                            <p>Бережне <br>прасування</p>
                        </div>
                        <div class="service-page__adv-item">
                            <div class="img">
                                <img src="<?php echo _TEMPL . 'build/img/com-3.png' ?>" alt="">
                            </div>
                            <p>Копіткий <br>ремонт</p>
                        </div>
                        <div class="service-page__adv-item">
                            <div class="img">
                                <img src="<?php echo _TEMPL . 'build/img/com-4.png' ?>" alt="">
                            </div>
                            <p>Екологічна <br>упаковка</p>
                        </div>
                    </div>
                </div>
                <div class="service-page__price">
                    <h2>Ціни</h2>

                    <div class="search-mobile-block search-mobile-block--visible">
                        <div class="search-cont">

                            <form method="get" id="sform" name="sform" action="/search-result/">
                                <input type="text" id="stext" name="stext"
                                       class="search-field ui-autocomplete-input" autocomplete="off"
                                       placeholder="Пошук послуги...">
                                <div class="searchsubmit">
                                    <input type="submit" class="menuupd_searchsubmit bluebutton" value="">
                                    пошук
                                </div>
                            </form>


                        </div>
                    </div>
                    <div class="service-page__price-cont">
                        <div class="price-list">


                            <?php
                            //Все страницы услуг, кроме Аквалайт
                            if ($head["id"] != 1619) {
                                $items = dbQuery("SELECT * FROM prices WHERE serviceid = '" . intval($head["id"]) . "' ORDER BY showorder,name");
//                                echo 'TUT';
//                                echo intval($head["id"]);
//                                echo $items;
                                if (count($items) > 0) { ?>
                                    <div class="um-price-wrap" scrollId="staftOfPrice">
                                        <div class="block_prise hidden-btn">


                                            <div>
                                                <div class="table_prise block_prise_corporative clear_after">
                                                    <div class="hed_row  ">
                                                        <div class="content_col">Найменування</div>
                                                        <div class="content_col">Од. вим</div>
                                                        <div class="content_col  <?php echo $detect->isMobile() ? 'showMeTipMob' : 'showMeTip'; ?>">
                                                            AquaLight
                                                            <span class="q-mark qMark">?</span>
                                                            <div class="popup-tip-wrap">
                                                                <div class="popup-tip">
                                                                    Aqualight - професійне прання і відпарювання
                                                                    текстильного одягу з використанням інноваційних
                                                                    препаратів, без локальної обробки забруднень.
                                                                    Оціночна вартість виробів до 1000 грн
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="content_col <?php echo $detect->isMobile() ? 'showMeTipMob' : 'showMeTip'; ?>">
                                                            UNMOMENTO
                                                            <span class="q-mark qMark">?</span>
                                                            <div class="popup-tip-wrap">
                                                                <div class="popup-tip">
                                                                    UNMOMENTO - потокова чистка речей простого крою,
                                                                    що включає загальну чистку і локальну попередню
                                                                    обробку забруднень (виведення плям) за допомогою
                                                                    професійних препаратів. Відпарювання і
                                                                    професійне прасування. Упаковка. Оціночна
                                                                    вартість текстильних виробів до 4000 грн
                                                                    (шкіряних до 6000 грн, хутряні до 10000 грн)
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="content_col <?php echo $detect->isMobile() ? 'showMeTipMob' : 'showMeTip'; ?>">
                                                            Premium
                                                            <span class="q-mark qMark">?</span>
                                                            <div class="popup-tip-wrap">
                                                                <div class="popup-tip">
                                                                    UNMOMENTO Premium - преміальна чистка речей з
                                                                    делікатних тканин, комбінованих і брендових
                                                                    речей або ж складного крою з об'ємним декором.
                                                                    Послуга включає захист фурнітури, загальну
                                                                    чистку і локальну попередню обробку забруднень,
                                                                    відпарювання, прасування і індивідуальну
                                                                    упаковку. Оціночна вартість виробів до 10000 грн
                                                                    (шкіряних до 20000 грн, хутряні до 30000 грн)
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
                                                                    <div vid-uslug="Аквалайт"
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
                                // Страница Аквалайт выбирает цены из основных услуг из ячейки Аквалайт, если заполнена
                                // Другая структура html
                                $blacklist_arr = array(3198, 3199, 3200, 3201, 3202, 3203, 3204, 3205, 3206, 3207, 3208, 3209, 3210, 3211, 3212, 3213, 3268, 3308, 3309, 3310, 3311, 3195, 1619, 1713, 3174, 3381, 3383, 3384, 3385, 3386); //СЕО услуги
                                $items = dbQuery("SELECT * FROM prices WHERE  substr(name, 1,3) !='КО.' and serviceid  NOT IN (" . implode(',', $blacklist_arr) . ") ORDER BY showorder,name");
                                $items_co = dbQuery("SELECT * FROM prices WHERE  substr(name, 1,3) ='КО.' and serviceid  NOT IN (" . implode(',', $blacklist_arr) . ") ORDER BY showorder,name");
                                $items_h = dbQuery("SELECT * FROM content WHERE id=3174");
                                if (count($items) > 0) { ?>
                                    <div class="um-price-wrap um-akva-price" scrollId="staftOfPrice">
                                        <div class="block_prise hidden-btn">


                                            <div>
                                                <div class="table_prise block_prise_corporative clear_after">
                                                    <div class="hed_row  ">
                                                        <div class="content_col">Найменування</div>
                                                        <div class="content_col">Од. вим</div>
                                                        <div class="content_col <?php echo $detect->isMobile() ? 'showMeTipMob' : 'showMeTip'; ?>">
                                                            AquaLight
                                                            <span class="q-mark qMark">?</span>
                                                            <div class="popup-tip-wrap">
                                                                <div class="popup-tip">
                                                                    Aqualight - професійне прання і відпарювання
                                                                    текстильного одягу з використанням інноваційних
                                                                    препаратів, без локальної обробки забруднень.
                                                                    Оціночна вартість виробів до 1000 грн
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
                                                                    <div vid-uslug="Аквалайт"
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
                                                                    <div vid-uslug="Аквалайт"
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
                                                        Загалом: <span id="countPrice">0 грн</span>
                                                    </div>
                                                    <div class="namber_result">* вартість вказана без урахування
                                                        знижки
                                                    </div>
                                                    <form onsubmit="return false;">
                                                        <div class="input">
                                                            <input id="name777" type="text" placeholder="Ваше ім'я">
                                                        </div>
                                                        <div class="input">
                                                            <input id="phone87" class="setMask" type="text" required
                                                                   placeholder="Ваш телефон*">
                                                        </div>

                                                        <input class="um-green-btn" id="SentOrderService"
                                                               type="submit" value="Відправити">
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
            </div>

        </div>


    </section>
    <section class="desktop-buttons">
        <div class="container">
            <div class="desk-buttons__list">
                <a href="/onlain-zakaz/" class="desk-btn">Виклик кур`єра</a>
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
                <a href="" class="desk-btn cl-mdl">Перезвоніть</a>
            </div>

        </div>
    </section>
    <div class="call-back-frm">
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
</main>
<script>
    let btnMdlCl = document.querySelector('.cl-mdl');
    function controlMdlCallBack() {
        if (btnMdlCl) {
            btnMdlCl.addEventListener('click', (e) => {
                e.preventDefault();
                document.querySelector('.call-back-frm').classList.toggle('open');
            })
        }
    }
    controlMdlCallBack();
</script>

<!--old-->
<!--<div class="main_content clear_after white_icons_bkgnd grey_icons_bkgnd">-->
<!---->
<!--    <div class="main_content-inner order-content">-->
<!---->
<!--        <div class="corporative-circles-section order-circles-section t-padding-20">-->
<!--            <div class="c-cont">-->
<!--                <div class="col-25">-->
<!--                    <div class="col-circle">-->
<!--                        <div class="circle">-->
<!--                            <div class="outer-circle border-green"></div>-->
<!--                            <div class="inner-circle">-->
<!--                                <svg class="svg-icon" type="image/svg+xml">-->
<!--                                    <use xlink:href="#quality"></use>-->
<!--                                </svg>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="c-text-cont">-->
<!--                        <div class="c-text-service">Гарантія якості</div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-25">-->
<!--                    <div class="col-circle">-->
<!--                        <div class="circle">-->
<!--                            <div class="outer-circle border-yellow"></div>-->
<!--                            <div class="inner-circle">-->
<!--                                <svg class="svg-icon" type="image/svg+xml">-->
<!--                                    <use xlink:href="#shirt"></use>-->
<!--                                </svg>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="c-text-cont">-->
<!--                        <div class="c-text-service">Індивідуальний <br>підхід</div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-25">-->
<!--                    <div class="col-circle">-->
<!--                        <div class="circle">-->
<!--                            <div class="outer-circle border-orange"></div>-->
<!--                            <div class="inner-circle">-->
<!--                                <svg class="svg-icon" type="image/svg+xml">-->
<!--                                    <use xlink:href="#laundry"></use>-->
<!--                                </svg>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="c-text-cont">-->
<!--                        <div class="c-text-service">Гіпоаллегенні <br>препарати</div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-25">-->
<!--                    <div class="col-circle">-->
<!--                        <div class="circle">-->
<!--                            <div class="outer-circle border-red"></div>-->
<!--                            <div class="inner-circle">-->
<!--                                <svg class="svg-icon" type="image/svg+xml">-->
<!--                                    <use xlink:href="#clock"></use>-->
<!--                                </svg>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="c-text-cont">-->
<!--                        <div class="c-text-service">Оперативність <br>від 2 год</div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <h1 class="name_list zakaz-title">Замов кур'єра <span class="red-bkgnd">online</span></h1>-->
<!--        <div id="order_div" class="order_div">-->
<!--            <iframe id="rframe" name="rframe" style="display:none;"></iframe>-->
<!--            <form class="styled-form styled-order-form" method="post" target="rframe" enctype="multipart/form-data"-->
<!--                  action="/request.php?action=add&id=1">-->
<!--                <div class="container_fran">-->
<!--                    <div class="form_row">-->
<!--                        <div class="form_label">-->
<!--                            <div class="form_label_txt blue_label white_label_txt">Ваше ім'я<span>*</span></div>-->
<!--                        </div>-->
<!--                        <div class="form_input"><input required name="f65" type="text" placeholder="Ваше ім'я"></div>-->
<!--                    </div>-->
<!--                    <div class="form_row">-->
<!--                        <div class="form_label">-->
<!--                            <div class="form_label_txt green_label white_label_txt">Контактний номер-->
<!--                                телефону:<span>*</span></div>-->
<!--                        </div>-->
<!--                        <div class="form_input"><input required name="f3" class="setMask" type="text"-->
<!--                                                       placeholder="Номер телефону" id="cont"></div>-->
<!--                    </div>-->
<!--                    <div class="form_row">-->
<!--                        <div class="form_label">Адреса прийому замовлення:</div>-->
<!--                        <div class="form_input"><input required name="f4" type="text"></div>-->
<!--                    </div>-->
<!--                    <div class="form_row">-->
<!--                        <div class="form_label">Дата прийому/доставки замовлення:</div>-->
<!--                        <div class="form_input">-->
<!--                            <div class="form_input">-->
<!--                                <input type="text" class="datePicker" name="f6" value="--><?php //echo date('d.m.Y'); ?><!--"-->
<!--                                       placeholder="--><?php //echo date('d.m.Y'); ?><!--">-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="form_row">-->
<!--                        <div class="form_label">Бажаний час прийому:</div>-->
<!--                        <div class="form_input">-->
<!--                            <div class="date_col services_block">-->
<!--                                <div class="select-wrap">-->
<!--                                    <div class="select-btn selectOpen">Оберіть зі списку</div>-->
<!--                                    <div class="hidden-select">-->
<!--                                        <div class="select-row">-->
<!--                                            <input type="radio" id="time_1" name="f8" value="до 9:00">-->
<!--                                            <label for="time_1">до 9:00</label>-->
<!--                                        </div>-->
<!--                                        <div class="select-row">-->
<!--                                            <input type="radio" id="time_2" name="f8" value="з 9:00 - 12:00">-->
<!--                                            <label for="time_2">з 9:00 - 12:00</label>-->
<!--                                        </div>-->
<!--                                        <div class="select-row">-->
<!--                                            <input type="radio" id="time_3" name="f8" value="з 12:00 - 15:00">-->
<!--                                            <label for="time_3">з 12:00 - 15:00</label>-->
<!--                                        </div>-->
<!--                                        <div class="select-row">-->
<!--                                            <input type="radio" id="time_4" name="f8" value="з 15:00 - 18:00">-->
<!--                                            <label for="time_4">з 15:00 - 18:00</label>-->
<!--                                        </div>-->
<!--                                        <div class="select-row">-->
<!--                                            <input type="radio" id="time_5" name="f8" value="після 18">-->
<!--                                            <label for="time_5">після 18</label>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="date_col checkbox_block">-->
<!--                                <input type="checkbox" name="f67">-->
<!--                                <div class="checkmark"></div>-->
<!--                                <label class="checkbox_label">термінова чистка</label>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="form_row">-->
<!--                        <div class="form_label">Вид послуги:</div>-->
<!--                        <div class="date_col services_block">-->
<!--                            <div class="form_input">-->
<!--                                <div class="select-wrap">-->
<!--                                    <div class="select-btn selectOpen">Оберіть зі списку</div>-->
<!--                                    <div class="hidden-select">-->
<!--                                        <div class="select-row">-->
<!--                                            <input type="radio" id="thing_1" name="f68" value="Одяг, взуття, інші речі">-->
<!--                                            <label for="thing_1">Одяг, взуття, інші речі</label>-->
<!--                                        </div>-->
<!--                                        <div class="select-row">-->
<!--                                            <input type="radio" id="thing_2" name="f68" value="Чистка м'яких меблів">-->
<!--                                            <label for="thing_2">Чистка м'яких меблів</label>-->
<!--                                        </div>-->
<!--                                        <div class="select-row">-->
<!--                                            <input type="radio" id="thing_3" name="f68" value="Штори та гардини">-->
<!--                                            <label for="thing_3">Штори та гардини</label>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="form_row">-->
<!--                        <div class="form_label">Email:</div>-->
<!--                        <div class="form_input"><input name="f2" type="text"></div>-->
<!--                    </div>-->
                    <!--div class="form_row">
                      <div class="form_label">Коментарі:</div>-->
<!--                        <div class="form_input">-->
<!--                            <textarea name="f10"></textarea>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="form_row submit">-->
<!--                        <div class="form_label"><span>*</span> - Обов'язкові поля для заповнення</div>-->
<!--                        <div class="form_input">-->
<!--                            <input onclick="gtag('event', 'Click', {'event_category': 'Order'});" type="submit"-->
<!--                                   value="Замовити">-->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!--                    <br><br>-->
<!--                    <ul class="news_social_buttons">-->
<!--                        <li class="social_button social_button_fb"><a-->
<!--                                    onclick="gtag('event', 'Click', {'event_category': 'Order'});" taget="_blank"-->
<!--                                    href="https://m.me/momento.un?ref=UNMOMENTO">-->
<!--                                <div class="social_button_fb"></div>-->
<!--                            </a></li>-->
<!--                        <li class="social_button social_button_vb"><a-->
<!--                                    onclick="gtag('event', 'Click', {'event_category': 'Order'});" taget="_blank"-->
<!--                                    href="viber://pa?chatURI=unmomentobot&context=ml1">-->
<!--                                <div class="social_button_vb"></div>-->
<!--                            </a></li>-->
<!--                        <li class="social_button social_button_tg"><a-->
<!--                                    onclick="gtag('event', 'Click', {'event_category': 'Order'});" taget="_blank"-->
<!--                                    href="https://t.me/unmomento_bot">-->
<!--                                <div class="social_button_tg"></div>-->
<!--                            </a></li>-->
<!--                    </ul>-->
<!--                    <ul class="news_social_buttons">-->
<!--                        <li><a onclick="gtag('event', 'Click', {'event_category': 'Order'});"-->
<!--                               href="https://play.google.com/store/apps/details?id=ru.agbis.Unmomento"><i-->
<!--                                        class="fa fa-android"></i></a></li>-->
<!--                        <li><a onclick="gtag('event', 'Click', {'event_category': 'Order'});"-->
<!--                               href="https://apps.apple.com/ua/app/unmomento/id1491483430?l=ru"><i-->
<!--                                        class="fa fa-apple"></i></a></li>-->
<!--                    </ul>-->
<!---->
<!--                </div>-->
<!--            </form>-->
<!--        </div>-->
<!--        <div class="corporative-circles-section order-circles-section">-->
<!--            <div class="c-cont">-->
<!--                <div class="col-25">-->
<!--                    <div class="col-circle">-->
<!--                        <div class="circle">-->
<!--                            <div class="outer-circle border-blue"></div>-->
<!--                            <div class="inner-circle">-->
<!--                                <svg class="svg-icon" type="image/svg+xml">-->
<!--                                    <use xlink:href="#water"></use>-->
<!--                                </svg>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="c-text-cont">-->
<!--                        <div class="c-text-service">Ефективне чищення</div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-25">-->
<!--                    <div class="col-circle">-->
<!--                        <div class="circle">-->
<!--                            <div class="outer-circle border-yellow"></div>-->
<!--                            <div class="inner-circle">-->
<!--                                <svg class="svg-icon" type="image/svg+xml">-->
<!--                                    <use xlink:href="#ironing"></use>-->
<!--                                </svg>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="c-text-cont">-->
<!--                        <div class="c-text-service">Бережне прасування</div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-25">-->
<!--                    <div class="col-circle">-->
<!--                        <div class="circle">-->
<!--                            <div class="outer-circle border-orange"></div>-->
<!--                            <div class="inner-circle">-->
<!--                                <svg class="svg-icon" type="image/svg+xml">-->
<!--                                    <use xlink:href="#threads"></use>-->
<!--                                </svg>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="c-text-cont">-->
<!--                        <div class="c-text-service">Копіткий ремонт</div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-25">-->
<!--                    <div class="col-circle">-->
<!--                        <div class="circle">-->
<!--                            <div class="outer-circle border-red"></div>-->
<!--                            <div class="inner-circle">-->
<!--                                <svg class="svg-icon" type="image/svg+xml">-->
<!--                                    <use xlink:href="#eco"></use>-->
<!--                                </svg>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="c-text-cont">-->
<!--                        <div class="c-text-service">Екологічна упаковка</div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="header-search static-search-block">-->
<!--            <div class="hs-wrap c-box-920">-->
<!--                <div class="hs-title">Знайти послугу</div>-->
<!--                <div class="search-form">-->
<!--                    <form method="get" id="sform" name="sform" action="/search-result/">-->
<!--                        <input type="text" id="stext" name="stext" autocomplete="off" placeholder="Пошук послуги...">-->
<!--                        <div class="searchsubmit">-->
<!--                            <i class="fa fa-search"></i><input type="submit" class="menuupd_searchsubmit bluebutton"-->
<!--                                                               value="">-->
<!--                            Знайти послугу-->
<!--                        </div>-->
<!--                    </form>-->
<!--                </div>-->
<!--                <span class="vfix"></span>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!---->
<!--<script>-->
<!--    $(document).ready(function () {-->
<!--        setTimeout(function () {-->
<!---->
<!--            $('#onemoretirm').append(`-->
<!--        <div class="container clear_after">-->
<!--            <div class="slider-section slider-section-price">-->
<!--                <div class="slider-wrap">-->
<!--                    <div class="slide">-->
<!--                        <a href="--><?php //echo _SITE; ?><!--//novosti/zashitis-ot-virusov/" class="slide imageId9999999" style="background-size:cover;background-image: url('/images/files/1_141_30042020181930_1.jpg');"></a>-->
<!--//                    </div>-->
<!--//                    <div class="slide youtube-slide" id="youtube-slide">-->
<!--//                        <iframe id="zakaz-video" src="https://www.youtube.com/embed/WU-haYcrkvg?rel=0&controls=0&showinfo=0&enablejsapi=true" allow="autoplay; encrypted-media" allowfullscreen></iframe>-->
<!--//                    </div>-->
<!--//                </div>-->
<!--//            </div>-->
<!--//        </div>-->
<!--//            `);-->
<!--//-->
<!--//            var mainPageSlider = $('.slider-wrap').bxSlider({-->
<!--//                slideMargin: 0,-->
<!--//                controls: true,-->
<!--//                pager: false,-->
<!--//                useCSS: false,-->
<!--//                auto: true,-->
<!--//                autoStart: true,-->
<!--//                autoControls: false,-->
<!--//                pause: 5000,-->
<!--//                speed: 2000-->
<!--//            });-->
<!--//-->
<!--//            $('.slider-wrap').animate({opacity: 1}, 500);-->
<!--//-->
<!--//            //Слайдер на внутренней услуг-->
<!--//            function sliderInit(initBlock, args) {-->
<!--//                if (initBlock.children().length > 1) {-->
<!--//                    sliderInner = initBlock.bxSlider({-->
<!--//                        auto: true,-->
<!--//                        stopAutoOnClick: true,-->
<!--//                        pager: true-->
<!--//                    });-->
<!--//                }-->
<!--//            }-->
<!--//-->
<!--//        }, 4000);-->
<!--//    });-->
<!--//</script>-->
<!--//<div class="main_content clear_after grey_icons_bkgnd" id="onemoretirm">-->
<!--//</div>-->
