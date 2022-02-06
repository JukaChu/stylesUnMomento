
    <div class="container">
        <h1 class="main-title">Доставка</h1>

    </div>
    <section class="service-page">
        <div class="container">
            <div class="service-page__container service-page__container--cour">

                <div class="service-page__delivery">

                    <div class="service-page__delivery-content service-page__delivery-content--wrap">
                        <div class="service-slider swiper-container ">
                            <div class="swiper-wrapper">
                                <?php $images = getImages($head['id'],1);
                                foreach($images as $image){
                                    if($image['is_main'] != 1) {?>
                                        <div class="img swiper-slide">
                                            <img src="/images/files/<?php echo $image['image'] ?>" alt="">
                                        </div>
                                    <?php }
                                }?>

                                <?php $images = getImages($head['id'],1);
                                if(count($images ) > 1) {?>
                                <div class="service-slider swiper-container ">
                                    <div class="swiper-wrapper">
                                        <?php
                                        foreach($images as $image){
                                            if($image['is_main'] != 1) {
                                                ?>
                                                <div class="img swiper-slide">
                                                    <img src="/images/files/<?php echo $image['image']; ?>" alt="">
                                                </div>
                                            <?php }
                                        }?>
                                    </div>
                                </div>
                                <? } else { ?>
                                    <div class="img">
                                        <img src="/images/files/<?php echo $main_img['image']; ?>" alt="">
                                    </div>

                                <?php }?>
                            </div>
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
                    <h2>Як працює сервіс</h2>
                    <div class="service-page__adv-list service-page__adv-list--double">
                        <div class="service-page__adv-item showPopup" data-show="dostavkaPopup">
                            <div class="img">
                                <img src="<?php echo _TEMPL . 'build/img/u-del-1.png' ?>" alt="">
                            </div>
                            <p>Викликати кур'єра зручним способом</p>
                            <small>через call center, чат-боти, заявку на сайті або завантажити додаток</small>
                        </div>
                        <div class="service-page__adv-item">
                            <div class="img">
                                <img src="<?php echo _TEMPL . 'build/img/u-del-2.png' ?>" alt="">
                            </div>
                            <p>Ми заберемо Ваші речі в зручний час</p>
                            <small>Вибір часу сервісу доставки</small>
                        </div>
                        <div class="service-page__adv-item">
                            <div class="img">
                                <img src="<?php echo _TEMPL . 'build/img/u-del-3.png' ?>" alt="">
                            </div>
                            <p>Почистимо, попрасуємо, відремонтуємо</p>
                            <small>виконуємо роботи будь-якої складності</small>
                        </div>
                        <div class="service-page__adv-item">
                            <div class="img">
                                <img src="<?php echo _TEMPL . 'build/img/u-del-4.png' ?>" alt="">
                            </div>
                            <p>Доставимо Ваші речі вже чістими додому або в офіс</p>
                            <small>Максимальний комфорт для клієнта</small>
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
                <a href="/uslugi/distantsionnyy-zakaz.html" class="desk-btn cour-non">Виклик кур`єра</a>
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
    <script>
        $(document).ready(function(){
            $('.aside-form-subtitle').html('<?php echo $head['name']; ?>');
            $('#f44, #lf44, #f59, #f51').val('<?php echo $head['name']; ?>');
            var summ = 0;
            $('.chooseService').click(function(e){
                e.preventDefault();
                var clickedItem = $(this),
                    blockPrice = +$(this).attr('data-price');
                if(clickedItem.hasClass('active')){summ-=blockPrice;}
                else{summ+=blockPrice;}
                clickedItem.toggleClass('active');
                $("#countPrice").html(summ);
            });
            $("#phone_").keyup(function(e){
                this.value = this.value.replace(/[^()0-9\.-]/g, '');
            });
            $('#SentOrder').click(function() {
                var phone = $('#o_phone_').val();
                var email = $('#o_email_').val();
                var price = $('#countPrice').text();
                var OrderArray = new Array();
                $(".chooseService.active").each(function () {
                    OrderArray.push({
                        tovar: $(this).attr("data-tovar"),
                        vid: $(this).attr("vid-uslug"),
                        price: parseInt($(this).attr("data-price"))
                    });
                });
                var re = /^(?:[a-z0-9!#$%&amp;'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&amp;'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])$/;
                if (OrderArray.length >0) {
                    if (phone && email && re.test(email)) {
                        $.ajax({
                            'type': 'POST',
                            'url': "/inc/sentorder.php",
                            'data': {
                                'phone': phone,
                                'email': email,
                                'price': price,
                                'orders': OrderArray
                            },
                            'success': function (html) {

                                $('#message').dialog({
                                    modal: true,
                                    title: "Сообщение",
                                    open: function () {
                                        var text = '<p>' + html + '</p>';
                                        $(this).html(text);
                                    },
                                    buttons: {
                                        Ok: function () {
                                            $(this).dialog("close");
                                        }
                                    }
                                });
                                $('#phone').val('');
                                $('#email').val('');
                            },
                            'error': function (jqXHR, textStatus, errorThrown) {
                                console.log(jqXHR);
                                alert("AJAX Error!", "Error  SORRY (Error: " + textStatus + ", " + errorThrown + ")");
                            }

                        });
                    }
                } else {
                    $('#message').dialog({
                        modal: true,
                        title: "Сообщение",
                        open: function () {
                            var text = '<p>' + 'Выберете услугу доставки' + '</p>';
                            $(this).html(text);
                        },
                        buttons: {
                            Ok: function () {
                                $(this).dialog("close");
                            }
                        }
                    });
                }
            });
        });
    </script>