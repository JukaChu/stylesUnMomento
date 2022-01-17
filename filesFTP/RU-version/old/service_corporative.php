<?php global $h1; ?>
<?php  $detect = new Mobile_Detect; ?>
<div class="corporative-wrap">
    <?php include 'mob_header_buttons.php'; ?>
        <h1 style="display:none">Корпоративное обслуживание</h1>
        <div class="slider-corporative-wrap title-pic-wrap">
                    <div class="sliderCorpInit">
                    <?php $images = getImages($head['id'],1);
                    foreach($images as $image){
                            if($image['is_main'] != 1) {?>
                        <div class="corp-slider">
                            <div class="title-pic-fix">
                                <div class="title-img" style="background-image: url('/images/files/<?php echo $image['image']; ?>')"></div>
                            </div>
                        </div>
                        <?php }
                        }?>
                    </div>
                </div>
                <div class="top-info-section service-info-section">
                    <div class="main_content">
                        <div class="info-wrap">
                            <div class="title"><?=$head["name"];?></div>
                            <hr>
                            <div class="text">Для Вас и Вашей компании мы организуем КАЧЕСТВЕННОЕ и ОПЕРАТИВНОЕ<br>
обслуживание в соответствии с наивысшими стандартами!
                            </div>
                        </div>
                        <?php  
                        $sub_service_arr = array(3382, 3383, 3384, 3385, 3386);
                        $sub_services = dbQuery("SELECT id,url,name,preview,info,info2 FROM content WHERE id IN (".implode(',', $sub_service_arr).") ORDER BY showorder"); 
                        if(count($sub_services)>0){ ?>
                        <div class="adv-wrap">
                            <?php foreach ($sub_services as $sub_service){
                            $images = getImages($sub_service['id'],1); ?>
                            <div class="one-third one-adv <?php echo $detect->isMobile()?'showMeTipMob':'showMeTip'?>">
                                <div class="adv-inner">
                                    <div class="adv-pic-fix">
                                            <div class="adv-num"></div>
                                            <?php if ($images[1]["image"] && $images[0]["image"]) {?>
                                            <img loading="lazy" class="fits" src="/images/files/<?=$images[1]["image"]?>" alt="<?=$sub_service['name']?>">
                                            <img loading="lazy"class="fits colored-pic" src="/images/files/<?=$images[0]["image"]?>" alt="<?=$sub_service['name']?>">
                                            <?php } ?>
                                    </div>
                                    <div class="adv-text"><?=htmlspecialchars_decode($sub_service['name'])?></div>  
                                </div>
                                <div class="popup-tip-wrap">
                                    <?php if( !$detect->isMobile()){ ?>
                                    <a href="<?=$sub_service['url']?>" class="link-abs"></a>
                                    <?php } ?>
                                    <?php if($detect->isMobile()){?>
                                    <div class="popup-tip-close closeTip">+</div>
                                    <?php } ?>
                                    <div class="popup-tip">
                                        <?php echo htmlspecialchars_decode($sub_service['info2'])?>
                                        <a href="<?=$sub_service['url']?>" class="green">Цены</a>
                                    </div>
                                </div>
                            </div>
                             <?php } ?>
                        </div>
                        <?php } ?>
                        <div class="info-wrap c-box-95">
                                <div class="text">20-ти летний ОПЫТ работы, успешная РЕПУТАЦИЯ лидера, 7 производств и штат ЛУЧШИХ профессионалов Украины позволяет
нам ГАРАНТИРОВАТЬ качество и оперативность выполнения заказов любой сложности и объёмов.
                                </div>
                                <div class="um-form-cont">
                                        <div class="green-btn squared-btn showHiddenForm">Закажи пробную чистку, получи 30% скидку</div>
                                        <div class="hidden-content order-discount-corp">
                                                <div class="title">Оставить заявку на пробную чистку<br> со скидкой 30%</div>
                                                <div class="simple-form-wrap hidden-content">
                                                        <form method="post" target="_srframe" action="/request.php?action=add&id=13">
                                                                <div class="input">
                                                                        <input name="f61" id="f61" type="text"  required placeholder="Телефон">
                                                                </div>
                                                                <div class="input">
                                                                        <input name="f60" type="email" required placeholder="E-mail">
                                                                </div>
                                                                <div class="input">
                                                                        <textarea name="f63" required placeholder="Сообщение"></textarea>
                                                                </div>
                                                                <input class="green-btn" type="submit" value="Отправить">
                                                        </form>
                                                </div>
                                        </div>
                                </div>
                                <div class="um-form-cont">
                                    <ul class="news_social_buttons news_social_buttons_corp">
                                        <li><a onclick="gtag('event', 'Click', {'event_category': 'Order'});" href="https://play.google.com/store/apps/details?id=ru.agbis.Unmomento"><i class="fa fa-android"></i></a></li>
                                        <li><a onclick="gtag('event', 'Click', {'event_category': 'Order'});" href="https://apps.apple.com/ua/app/unmomento/id1491483430?l=ru"><i class="fa fa-apple"></i></a></li>
                                    </ul>
                                </div>
                        </div>
                    </div>
                </div>
            <div class="service-info-section work-with-us-section">
                <div class="col-cont">
                    <div class="col-25">
                        <div class="info-col-inner">
                            <div class="info-title">
                            Преимущества работы с нами:
                            </div>
                        </div>
                    </div>
                    <div class="col-75">
                        <div class="num-col-inner">
                            <div class="col-33 one-num">
                                <div class="star-num-wrap">
                                    <div class="num">1</div>
                                </div>
                                <div class="star-num-text">Работаем <br>в режиме 24/7</div>
                            </div>
                            <div class="col-33 one-num">
                                <div class="star-num-wrap">
                                    <div class="num">2</div>
                                </div>
                                <div class="star-num-text">Страхуем риски <br>ответственности</div>
                            </div>
                            <div class="col-33 one-num">
                                <div class="star-num-wrap">
                                    <div class="num">3</div>
                                </div>
                                <div class="star-num-text">За Вами закрепляется <br>персональный менеджер</div>
                            </div>
                            <div class="col-33 one-num">
                                <div class="star-num-wrap">
                                    <div class="num">4</div>
                                </div>
                                <div class="star-num-text">Разрабатываем индивидуальную программу лояльности</div>
                            </div>
                            <div class="col-33 one-num">
                                <div class="star-num-wrap">
                                    <div class="num">5</div>
                                </div>
                                <div class="star-num-text">Оперативная доставка и прием в удобное время и место</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="info-wrap c-box-95">
                    <div class="text">Мы всегда идем навстречу партнеру, прорабатывая до мельчайших подробностей специальные <br>взаимовыгодные условия для сотрудничества.
                    </div>
                    <div class="um-form-cont">
                        <div class="green-btn showHiddenForm">Перезвонить мне</div>
                        <div class="simple-form-wrap hidden-content">
                            <div class="title">Перезвонить мне</div>
                            <form method="post" target="_srframe" action="/request.php?action=add&id=10">
                                <div class="input">
                                    <input required=""  name="f90" id="f90" type="text" placeholder="Ваше имя">
                                </div>
                                <div class="input">
                                    <input type="text" name="f50" id="f50" required="" placeholder="Ваш телефон">
                                        <input type="hidden" name="f51" id="f51" />
                                </div>
                                <input class="green-btn " type="submit" value="Перезвонить">
                            </form>
                        </div>
                    </div>
                    <div class="um-form-cont">
                        <ul class="news_social_buttons news_social_buttons_corp">
                            <li><a onclick="gtag('event', 'Click', {'event_category': 'Order'});" href="https://play.google.com/store/apps/details?id=ru.agbis.Unmomento"><i class="fa fa-android"></i></a></li>
                            <li><a onclick="gtag('event', 'Click', {'event_category': 'Order'});" href="https://apps.apple.com/ua/app/unmomento/id1491483430?l=ru"><i class="fa fa-apple"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="corporative-circles-section">
                <div class="common-title">Этапы работы:</div>
                <div class="c-cont circles-cont repeatAnimation">
                    <div class="col-33">
                        <div class="col-circle">
                            <div class="circle">
                                <div class="outer-circle border-green"></div>
                                <div class="inner-circle">
                                    <svg class="svg-icon" type="image/svg+xml">
                                        <use xlink:href="#washingMachine"></use>
                                    </svg>
                                </div>
                            </div>
                            <div class="line line-green animate"></div>
                        </div>
                        <div class="c-text-cont">
                            <div class="c-text"> Пробная  чистка / стирка</div>
                        </div>
                    </div>
                    <div class="col-33">
                        <div class="col-circle">
                            <div class="circle">
                                <div class="outer-circle border-yellow"></div>
                                <div class="inner-circle">
                                    <svg class="svg-icon" type="image/svg+xml">
                                        <use xlink:href="#tag"></use>
                                    </svg>
                                </div>
                            </div>
                            <div class="line line-yellow animate"></div>
                        </div>
                        <div class="c-text-cont">
                            <div class="c-text">Формирование максимально выгодного предложения (минимум 20% от прайса)</div>
                        </div>
                    </div>
                    <div class="col-33">
                        <div class="col-circle">
                            <div class="circle">
                                <div class="outer-circle border-red"></div>
                                <div class="inner-circle">
                                    <svg class="svg-icon" type="image/svg+xml">
                                        <use xlink:href="#contract"></use>
                                    </svg>
                                </div>
                            </div>
                            <div class="line line-red short animate"></div>
                            <div class="line line-red vertical animate"></div>
                        </div>
                        <div class="c-text-cont">
                            <div class="c-text">Заключение договора</div>
                        </div>
                    </div>
                    <div class="long-line-wrap">
                        <div class="col-circle">
                            <div class="line line-red long animate"></div>
                        </div>
                    </div>
                    <div class="col-33">
                        <div class="col-circle">
                            <div class="circle">
                                <div class="outer-circle border-green"></div>
                                <div class="inner-circle">
                                    <svg class="svg-icon" type="image/svg+xml">
                                        <use xlink:href="#huver"></use>
                                    </svg>
                                </div>
                            </div>
                            <div class="line line-red vertical left-line animate"></div>
                            <div class="line line-red short left-line animate"></div>
                            <div class="line line-green animate"></div>
                        </div>
                        <div class="c-text-cont">
                            <div class="c-text">Бесплатное выездное обслуживание</div>
                        </div>
                    </div>
                    <div class="col-33">
                        <div class="col-circle">
                            <div class="circle">
                                <div class="outer-circle border-yellow"></div>
                                <div class="inner-circle">
                                    <svg class="svg-icon" type="image/svg+xml">
                                        <use xlink:href="#checked"></use>
                                    </svg>
                                </div>
                            </div>
                            <div class="line line-yellow animate"></div>
                        </div>
                        <div class="c-text-cont">
                            <div class="c-text">Выполнение заказа</div>
                        </div>
                    </div>
                    <div class="col-33">
                        <div class="col-circle">
                            <div class="circle">
                                <div class="outer-circle border-red"></div>
                                <div class="inner-circle">
                                    <svg class="svg-icon" type="image/svg+xml">
                                        <use xlink:href="#truck"></use>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="c-text-cont">
                            <div class="c-text">Бесплатная доставка заказа</div>
                        </div>
                    </div>
                </div>
                <div class="info-wrap c-box-95">
                        <div class="text">Доверьте свою репутацию профессионалам! Мы не допустим на ней ни единого пятнышка!                                    </div>
                </div>
            </div>
                <?php 
                    $detect = new Mobile_Detect;
                    $corporative_services_arr = array(1713, 3383, 3384, 3385, 3386); //3382,
                    $items = dbQuery("SELECT * FROM prices WHERE serviceid IN (".implode(',', $corporative_services_arr).") ORDER BY showorder,name");
                    $video = dbQuery("SELECT * FROM video WHERE parentid = '".intval($head["id"])."' ");
                    if(count($items) > 0) { ?>

            <div class="price-section">
                <div class="main_content">
                    <div class="um-service-price-section c-box-730 block_prise_corporative">
                        <div class="um-price-wrap" scrollId="staftOfPrice">
                            <h2 class="um-show-price showPriceBtn">
                                Все цены
                            </h2>
                            <div>
                                <h2 class="common-title">
                                    Цены на услугу:
                                </h2>
                                <div class="table_prise clear_after">
                                    <div class="hed_row  ">
                                        <div class="content_col">Наименование</div>
                                        <div class="content_col">Ед. изм</div>
                                            <div class="content_col <?php echo $detect->isMobile() ? 'showMeTipMob' : 'showMeTip';?>">
                                            AquaLight
                                            <span class="q-mark qMark">?</span>
                                                <div class="popup-tip-wrap">
                                                    <div class="popup-tip">
                                                        Aqualight - профессиональная стирка и отпаривание текстильной одежды с использованием инновационных препаратов, без локальной обработки загрязнений. Оценочная стоимость изделий до 1000 грн
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content_col <?php echo $detect->isMobile() ? 'showMeTipMob' : 'showMeTip';?>">
                                            UNMOMENTO
                                            <span class="q-mark qMark">?</span>
                                                <div class="popup-tip-wrap">
                                                    <div class="popup-tip">
                                                        UNMOMENTO - потоковая чистка вещей простого кроя, что включает общую чистку и локальную предварительную обработку загрязнений (выведение пятен) с помощью профессиональных препаратов. Отпаривание и профессиональное глажение. Упаковка. Оценочная стоимость текстильных изделий до 4000 грн (кожаных до 6000 грн, меховые до 10000 грн)
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content_col <?php echo $detect->isMobile() ? 'showMeTipMob' : 'showMeTip';?>">
                                            Premium
                                            <span class="q-mark qMark">?</span>
                                                <div class="popup-tip-wrap">
                                                    <div class="popup-tip">
                                                        UNMOMENTO Premium - премиальная чистка вещей из деликатных тканей, комбинированных и брендовых вещей или же сложного кроя с объёмным декором. Услуга включает защиту фурнитуры, общую чистку и локальную предварительную обработку загрязнений, отпаривание, глажение и индивидуальную упаковку. Оценочная стоимость изделий до 10000 грн (кожаных до 20000грн, меховые до 30000грн)
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                                <div class="table_prise clear_after um-hidden-price">
                                    <?php
                                    foreach($items as $item) {
                                    ?>
                                    <div class="content_row<?= ($item["isaction"] == 1 ? " action" : "") ?>">
                                        <div class="content_col"><?=$item["name"]?></div>
                                        <div class="content_col"><?=$item["unit"]?></div>
                                        <div class="content_col">
                                            <?php if($item["price1"] > 0){?>
                                                <div vid-uslug="Аквалайт" data-tovar="<?=$item["name"]?>" data-price="<?=$item["price1"]?>" class="square_check"></div>
                                                &nbsp;&nbsp;&nbsp;&nbsp;<?=($item["price1"])?>
                                            <?}?>
                                        </div>
                                        <div class="content_col">
                                            <?php if($item["price2"] > 0){?>
                                                <div vid-uslug="Unmomento" data-tovar="<?=$item["name"]?>" data-price="<?=$item["price2"]?>" class="square_check"></div>
                                                &nbsp;&nbsp;&nbsp;&nbsp;<?=($item["price2"])?>
                                            <?}?>
                                        </div>
                                        <div class="content_col">
                                            <?php if($item["price3"] > 0){?>
                                                <div vid-uslug="Unmomento" data-tovar="<?=$item["name"]?>" data-price="<?=$item["price3"]?>" class="square_check"></div>
                                                &nbsp;&nbsp;&nbsp;&nbsp;<?=($item["price3"])?>
                                            <?}?>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                                <div scrollId="endOfPrice"></div>
                            </div>
                        </div>
                        <div class="um-form-cont">
                            <div class="um-fixed-container priceResultBtnWrap">
                                <div class="um-padding-container">
                                    <div class="um-price-result">
                                        <div class="um-order-btn-wrap">
                                            <div class="um-green-btn showPopup" data-show="servicePrice">оформить заказ</div>
                                        </div>
                                        <div class="container_result clear_after">
                                            <?php if(count($items) > 0) { ?>
                                            <div class="prise_result">
                                                Итоговая стоимость: <span id="countPrice">0 грн</span>
                                            </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>          
                        </div>
                        <div class="um-form-cont">
                            <ul class="news_social_buttons">
                                <li><a onclick="gtag('event', 'Click', {'event_category': 'Order'});" href="https://play.google.com/store/apps/details?id=ru.agbis.Unmomento"><i class="fa fa-android"></i></a></li>
                                <li><a onclick="gtag('event', 'Click', {'event_category': 'Order'});" href="https://apps.apple.com/ua/app/unmomento/id1491483430?l=ru"><i class="fa fa-apple"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>  
            <div class="yt-video-section">
                <div class="main_content">
                    <div class="price-cont">
            <?php if( $video){ ?>
            <div class="common-h2 p-top-30 m-bottom-10">Видео</div>
            <div class="c-box-820">
                 <div class="slider-corporative-wrap inner-slider-cont inner-slider-video c-cont title-pic-wrap">
                    <div class="sliderCorpInit">
                <?php foreach($video as $vi) {?>
                    <div class="video_container">
                        <div class="video_container_wrap">
                            <div class="video_container_hatch"></div>
                            <iframe src="https://www.youtube.com/embed/<?php echo trim($vi['video'])//echo $youtube_id; ?>?rel=0&controls=0&showinfo=0&enablejsapi=true" allow="autoplay; encrypted-media" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                <?php } ?>
                    </div>
                </div>
            <?php } ?>
                    </div>
                </div>
            </div>
            <div class="partners-section">
                <div class="common-title">Наши клиенты</div>
                <div class="col-cont partners-cont">
                    <div class="col-12 col-brand">
                        <img loading="lazy" class="fits" src="/templates/img/partner1.png">
                    </div>
                    <div class="col-12 col-brand">
                        <img loading="lazy" class="fits" src="/templates/img/partner2.png">
                    </div>
                    <div class="col-12 col-brand">
                        <img loading="lazy" class="fits" src="/templates/img/partner3.png">
                    </div>
                    <div class="col-12 col-brand">
                        <img loading="lazy" class="fits" src="/templates/img/partner4.png">
                    </div>
                    <div class="col-12 col-brand">
                        <img loading="lazy" class="fits" src="/templates/img/partner5.png">
                    </div>
                    <div class="col-12 col-brand">
                        <img loading="lazy" class="fits" src="/templates/img/partner6.png">
                    </div>
                    <div class="col-12 col-brand">
                        <img loading="lazy" class="fits" src="/templates/img/partner7.png">
                    </div>
                    <div class="col-12 col-brand">
                        <img loading="lazy" class="fits" src="/templates/img/partner8.png">
                    </div>
                    <div class="col-12 col-brand">
                        <img loading="lazy" class="fits" src="/templates/img/partner9.png">
                    </div>
                    <div class="col-12 col-brand">
                        <img loading="lazy" class="fits" src="/templates/img/partner10.png">
                    </div>
                    <div class="col-12 col-brand">
                        <img loading="lazy" class="fits" src="/templates/img/partner11.png">
                    </div>
                    <div class="col-12 col-brand">
                        <img loading="lazy" class="fits" src="/templates/img/partner12.png">
                    </div>
                    <div class="col-12 col-brand">
                        <img loading="lazy" class="fits" src="/templates/img/partner13.png">
                    </div>
                    <div class="col-12 col-brand">
                        <img loading="lazy" class="fits" src="/templates/img/partner14.png">
                    </div>
                    <div class="col-12 col-brand">
                        <img loading="lazy" class="fits" src="/templates/img/partner15.png">
                    </div>
                    <div class="col-12 col-brand">
                        <img loading="lazy" class="fits" src="/templates/img/partner16.png">
                    </div>
                </div>
                <div class="info-wrap c-box-95">
                    <div class="text">и много других уважаемых и любимых брендов
                    </div>
                </div>
            </div>
            <div class="form-section bottom-form-section">
                <div class="main_content">
                    <div class="form-cont">
                        <div class="title">Заказать корпоративное обслуживание</div>

                        <div class="main-form-wrap">
                                <form method="post" target="_srframe" action="/request.php?action=add&id=13">
                                <div class="input">
                                    <input name="f61" id="phone61" type="text" required placeholder="Телефон">
                                </div>
                                <input type="submit" value="Жду звонка">
                            </form>
                            <div>
                                <ul class="news_social_buttons news_social_buttons_corp">
                                    <li><a onclick="gtag('event', 'Click', {'event_category': 'Order'});" href="https://play.google.com/store/apps/details?id=ru.agbis.Unmomento"><i class="fa fa-android"></i></a></li>
                                    <li><a onclick="gtag('event', 'Click', {'event_category': 'Order'});" href="https://apps.apple.com/ua/app/unmomento/id1491483430?l=ru"><i class="fa fa-apple"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
