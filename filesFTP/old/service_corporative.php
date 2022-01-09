<?php $url = $_SERVER[REQUEST_URI]; $parts = parse_url($url); parse_str($parts['query'], $query);?>
<?php  $detect = new Mobile_Detect;  ?>
<?php include 'mob_header_buttons.php'; ?>
<div class="corporative-wrap">
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
                <div class="text">Для Вас і Вашої компанії ми організовуємо ЯКІСНЕ та ОПЕРАТИВНЕ<br>
обслуговування відповідно до найвищих стандартів!
                </div>
            </div>      
            <?php  
            $sub_service_arr = array(3381, 3383, 3384, 3385, 3386);
            $sub_services = dbQuery("SELECT id,url,name,preview,info2 FROM content WHERE id IN (".implode(',', $sub_service_arr).") ORDER BY showorder"); 
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
                                <img loading="lazy" class="fits colored-pic" src="/images/files/<?=$images[0]["image"]?>" alt="<?=$sub_service['name']?>">
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
                            <?=htmlspecialchars_decode($sub_service['info2'])?>
                            <a href="<?=$sub_service['url']?>" class="green">Ціни</a>
                        </div>
                    </div>
                </div>
                 <?php } ?>
            </div>
            <?php } ?>
            <div class="info-wrap c-box-95">
                    <div class="text">20-ти річний ДОСВІД роботи, успішна РЕПУТАЦІЯ лідера, 7 виробництв і штат НАЙКРАЩИХ професіоналів України дозволяє нам ГАРАНТУВАТИ якість та оперативність виконання замовлень будь-якої складності та об'ємів.
                    </div>
                    <div class="um-form-cont">
                            <div class="green-btn squared-btn showHiddenForm">Замов пробне чищення і отримай 30% знижки</div>
                            <div class="hidden-content">
                                    <div class="title">Залишити замовлення на пробне чищення<br> зі знижкою 30%</div>
                                    <div class="simple-form-wrap order-discount-corp hidden-content">
                                    <form method="post" target="_srframe" action="/request.php?action=add&id=13">
                                                    <div class="input">
                                                            <input name="f59" id="f59" type="f59" required placeholder="Телефон">
                                                    </div>
                                                    <div class="input">
                                                            <input name="f58" type="email" required required placeholder="E-mail">
                                                    </div>
                                                    <div class="input">
                                                            <textarea name="f60" required placeholder="Повідомлення"></textarea>
                                                    </div>
                                                    <input class="green-btn" type="submit" value="Відправити">
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
                    ПЕРЕВАГИ роботи з нами:
                    </div>
                </div>
            </div>
            <div class="col-75">
                <div class="num-col-inner">
                    <div class="col-33 one-num">
                        <div class="star-num-wrap">
                            <div class="num">1</div>
                        </div>
                        <div class="star-num-text">Працюємо <br>в режимі 24/7</div>
                    </div>
                    <div class="col-33 one-num">
                        <div class="star-num-wrap">
                            <div class="num">2</div>
                        </div>
                        <div class="star-num-text">Страхуємо ризики <br>відповідальності</div>
                    </div>
                    <div class="col-33 one-num">
                        <div class="star-num-wrap">
                            <div class="num">3</div>
                        </div>
                        <div class="star-num-text">За Вами закріплюється <br>персональний менеджер</div>
                    </div>
                    <div class="col-33 one-num">
                        <div class="star-num-wrap">
                            <div class="num">4</div>
                        </div>
                        <div class="star-num-text">Ми розробляємо індивідуальну програму лояльності виключно для Вас</div>
                    </div>
                    <div class="col-33 one-num">
                        <div class="star-num-wrap">
                            <div class="num">5</div>
                        </div>
                        <div class="star-num-text">Оперативна доставка та прийом в слушний час і місце</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="info-wrap c-box-95">
            <div class="text">Ми завжди йдемо назустріч партнерам, опрацьовуючи до найдрібніших подробиць спеціальні взаємовигідні умови для співпраці.
            </div>
            <div class="um-form-cont">
                <div class="green-btn showHiddenForm">Передзвоніть мені</div>
                <div class="simple-form-wrap hidden-content">
                    <div class="title">Передзвоніть мені</div>
                    <form method="post" target="_srframe" action="/request.php?action=add&id=10">
                        <div class="input">
                            <input type="text" name="f79" required placeholder="Вашe ім'я">
                        </div>
                        <div class="input">
                            <input type="text" name="f50" required class="setMask" placeholder="Ваш телефон">
                                <input type="hidden" name="f51" id="f51" />
                        </div>
                        <input class="green-btn " type="submit" value="Передзвонити">
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
        <div class="common-title">Етапи роботи:</div>
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
                    <div class="c-text">Пробна чистка / прання</div>
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
                    <div class="c-text">Формування максимально вигідної пропозиції (мінімум 20% від прайсу)</div>
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
                    <div class="c-text">Укладання договору</div>
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
                    <div class="c-text">Безкоштовне виїзне обслуговування</div>
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
                    <div class="c-text">Виконання замовлення</div>
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
                    <div class="c-text">Безкоштовна доставка замовлення</div>
                </div>
            </div>
        </div>
        <div class="info-wrap c-box-95">
                <div class="text">Довірте свою репутацію професіоналам! Ми не допустимо на ній жодної плямочки!</div>
        </div>
    </div>
            <?php 
            $corporative_services_arr = array(1713, 3383, 3384, 3385, 3386); //3381,
            $items = dbQuery("SELECT * FROM prices WHERE serviceid IN (".implode(',', $corporative_services_arr).") ORDER BY showorder,name");
            $video = dbQuery("SELECT * FROM video WHERE parentid = '".intval($head["id"])."'");
            if(count($items) > 0) { ?>
            <?php  $detect = new Mobile_Detect; ?>
            <div class="price-section">
                <div class="main_content">
                    <div class="um-service-price-section block_prise_corporative c-box-730">
                        <div class="um-price-wrap" scrollId="staftOfPrice">
                            <h2 class="um-show-price showPriceBtn">
                                Всі ціни
                            </h2>
                            <div>
                                <h2 class="common-title">
                                    Ціни на послугу:
                                </h2>
                                <?php /*
                                <span class="un-warning red">
                                На даний момент на сайті відбувається переоцінка. Уточнюйте ціни у співробітників Unmomento.<br>
                                Просимо пробачення за незручності.
                                </span>
                                */?>
                                <div class="table_prise  clear_after">
                                    <div class="hed_row">
                                        <div class="content_col">Найменування</div>
                                        <div class="content_col">Од. вим</div>
                                        <div class="content_col  <?php echo $detect->isMobile() ? 'showMeTipMob' : 'showMeTip';?>">
                                            AquaLight
                                            <span class="q-mark qMark">?</span>
                                            <div class="popup-tip-wrap">
                                                <div class="popup-tip">
                                                    Aqualight - професійне прання і відпарювання текстильного одягу з використанням інноваційних препаратів, без локальної обробки забруднень. Оціночна вартість виробів до 1000 грн
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content_col  <?php echo $detect->isMobile() ? 'showMeTipMob' : 'showMeTip';?>">
                                            UNMOMENTO
                                            <span class="q-mark qMark">?</span>
                                            <div class="popup-tip-wrap">
                                                <div class="popup-tip">
                                                UNMOMENTO - потокова чистка речей простого крою, що включає загальну чистку і локальну попередню обробку забруднень (виведення плям) за допомогою професійних препаратів. Відпарювання і професійне прасування. Упаковка. Оціночна вартість текстильних виробів до 4000 грн (шкіряних до 6000 грн, хутряні до 10000 грн)
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content_col  <?php echo $detect->isMobile() ? 'showMeTipMob' : 'showMeTip';?>">
                                            Premium
                                            <span class="q-mark qMark">?</span>
                                            <div class="popup-tip-wrap">
                                                <div class="popup-tip">
                                                UNMOMENTO Premium - преміальна чистка речей з делікатних тканин, комбінованих і брендових речей або ж складного крою з об'ємним декором. Послуга включає захист фурнітури, загальну чистку і локальну попередню обробку забруднень, відпарювання, прасування і індивідуальну упаковку. Оціночна вартість виробів до 10000 грн (шкіряних до 20000 грн, хутряні до 30000 грн)
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
                                            <div class="um-green-btn showPopup" data-show="servicePrice">оформити замовлення</div>
                                        </div>
                                        <div class="container_result clear_after">
                                            <?php if(count($items) > 0) { ?>
                                            <div class="prise_result">
                                                Загальна вартість:  <span id="countPrice">0 грн</span>
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
            <div class="common-h2 p-top-30 m-bottom-10">Відео</div>
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
                <div class="common-title">Наші клієнти</div>
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
                    <div class="text">та багато інших шанованих і улюблених брендів
                    </div>
                </div>
            </div>
            <div class="form-section bottom-form-section">
                <div class="main_content">
                    <div class="form-cont">
                        <div class="title">Замовити корпоративне обслуговування</div>
                        <?php /*
                        <div class="subtitle sky-blue">со скидкой 20%</div> 
                        */ ?>
                        <div class="main-form-wrap">
                                <form method="post" target="_srframe" action="/request.php?action=add&id=13">
                                <?php /*
                                <div class="input">
                                    <input name="f62" type="text" required placeholder="Ваше им'я">
                                </div>
                                */?>
                                <div class="input">
                                    <input name="f61" id="f61" type="tel" required placeholder="Телефон">
                                </div>
                                <input type="submit" value="Чекаю на дзвінок">
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
                <iframe name="_srframe" id="_srframe" style="display:none;"></iframe>
        <script>
        $('#f51').val('<?php echo $head['name']; ?>');
        $('.aside-form-subtitle').html('<?php echo $head['name']; ?>');
        </script>