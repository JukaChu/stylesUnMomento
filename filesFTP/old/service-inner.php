<?php include 'mob_header_buttons.php'; ?>
<?php 
global $h1;
$detect = new Mobile_Detect;
?>
<?php if((int)$head["id"] == 1713 || (int)$head["id"] == 142 /*|| (int)$head["id"] == 147*/){ ?>
<div class="header-search">
    <div class="hs-wrap main_content">
        <div class="hs-title">Знайти послугу</div>
        <div class="search-form">
            <form method="get" id="sform" name="sform" action="/search-result/">
                <input type="text" id="stext" name="stext" autocomplete="off" placeholder="Пошук послуги...">
                <div class="searchsubmit">
                        <i class="fa fa-search"></i><input type="submit" class="menuupd_searchsubmit bluebutton" value="">
                        Знайти послугу
                </div>
            </form>
        </div>
        <span class="vfix"></span>
    </div>
</div>
<div class="container_sevise inner sideheight">
    <div class="main_content block_margin clear_after sideheight">
    <?php if($head["id"] == 1713) { include 'service_corporative.php'; } 
        /*else if($head["id"] == 147){ include 'service_corporative_2.php'; } */
        else if($head["id"] == 142){ include 'service_dostavka.php'; }?>
    </div>
</div>
<?php }  else { ?>
<div class="corporative-wrap um-new-inner-wrap">
    <h1 class="common-h1"><?=$h1?></h1>
    <div class="main_content">
        <div class="slider-corporative-wrap inner-slider-cont c-cont title-pic-wrap">
            <div class="col-65">
                <div class="sliderCorpInit">
                <?php $images = getImages($head['id'],1);
                foreach($images as $image){
                        if($image['is_main'] != 1 && strpos($image['title'],'adv') !== 0) {?>
                    <div class="corp-slider">
                        <div class="title-pic-fix">
                           <?php if ( !empty($image['title']) && strtolower(trim($image['title'])) == 'youtube') { ?>
                               <div class="title-img"><iframe style="width:100%;height:100%;" src="https://www.youtube.com/embed/<?=$image['link']?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                           <?php } else { ?>
                               
                               <?php if ( !empty($image['link']) ) { ?>
                               <a href="<?=$image['link'];?>"><div class="title-img" style="background-image: url('/images/files/<?php echo $image['image']; ?>')"></div></a>
                               <?php } else {?> 
                               <div class="title-img" style="background-image: url('/images/files/<?php echo $image['image']; ?>')"></div>
                               <?php } ?> 
                               
                           <?php } ?> 
                        </div>
                    </div>
                    <?php }
                    }?>
                </div>
            </div>
            <div class="col-35 hideContainer">
                <div class="service-text hiddenText"><?=htmlspecialchars_decode($head["preview"],ENT_QUOTES)?></div>
                <div class="service-text-more-btn showMoreBtn">Далі</div>
            </div>
        </div>
    </div>

    <?php if( (int)$head["id"] == 147 ) { ?>
                <div class="top-info-section service-info-section">
                    <div class="main_content">
                        <div class="info-wrap">
                            <div class="title"><?php echo $head["name"];?></div>
                            <hr>
                            <div class="text">Для Вас і Вашої компанії ми організовуємо ЯКІСНЕ та ОПЕРАТИВНЕ<br>
обслуговування відповідно до найвищих стандартів!
                            </div>
                        </div>
                        <?php  
                        $sub_service_arr = array(  3515, 3516, 3517, 3518, 3519, );
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
                                        <a href="<?=$sub_service['url']?>" class="green">Ціни</a>
                                    </div>
                                </div>
                            </div>
                             <?php } ?>
                        </div>
                        <?php } ?>

                    </div>
                </div>
       <?php } ?>


    <div class="section-pros">
        <div class="common-h2">Наші переваги</div>
        <?php if (($head["id"] != 2994) && ($head["id"] != 3178)) {?>
                <div class="main_content border-shadow">
            <div class="corporative-circles-section">
                <div class="c-cont">
                    <div class="col-25">
                        <div class="col-circle">
                            <div class="circle">
                                <div class="outer-circle border-green"></div>
                                <div class="inner-circle">
                                    <svg class="svg-icon" type="image/svg+xml">
                                        <use xlink:href="#quality"></use>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="c-text-cont">
                            <div class="c-text-service">Гарантія якості</div>
                        </div>
                    </div>
                    <div class="col-25">
                        <div class="col-circle">
                            <div class="circle">
                                <div class="outer-circle border-yellow"></div>
                                <div class="inner-circle">
                                    <svg class="svg-icon" type="image/svg+xml">
                                        <use xlink:href="#shirt"></use>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="c-text-cont">
                            <div class="c-text-service">Індивідуальний <br>підхід</div>
                        </div>
                    </div>
                    <div class="col-25">
                        <div class="col-circle">
                            <div class="circle">
                                <div class="outer-circle border-orange"></div>
                                <div class="inner-circle">
                                    <svg class="svg-icon" type="image/svg+xml">
                                        <use xlink:href="#laundry"></use>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="c-text-cont">
                            <div class="c-text-service">Гіпоаллегенні <br>препарати</div>
                        </div>
                    </div>
                    <div class="col-25">
                        <div class="col-circle">
                            <div class="circle">
                                <div class="outer-circle border-red"></div>
                                <div class="inner-circle">
                                    <svg class="svg-icon" type="image/svg+xml">
                                        <use xlink:href="#clock"></use>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="c-text-cont">
                            <div class="c-text-service">Оперативність <br>від 2 год</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } else if ($head["id"] == 2994) {?>
                
                <div class="main_content border-shadow">
                    <div class="corporative-circles-section corporative-circles-section_2">
                        <div class="c-cont">
                            <div class="col-33">
                                <div class="col-circle">
                                    <div class="circle">
                                        <div class="outer-circle border-green"></div>
                                        <div class="inner-circle">
                                            БІЛЬШЕ<br/>
                                            <b>20 РОКІВ</b><br/>
                                            ДОСВІДУ
                                        </div>
                                    </div>
                                </div>
                                <div class="c-text-cont">
                                    <div class="c-text-service">Незмінна команда кращих<br/> фахівців України</div>
                                </div>
                            </div>
                            <div class="col-33">
                                <div class="col-circle">
                                    <div class="circle">
                                        <div class="outer-circle border-yellow"></div>
                                        <div class="inner-circle">
                                            БІЛЬШЕ<br/>
                                            <b>5 000</b><br/>
                                            КЛІЄНТІВ
                                        </div>
                                    </div>
                                </div>
                                <div class="c-text-cont">
                                    <div class="c-text-service">Визнання самих<br/> вимогливих клієнтів</div>
                                </div>
                            </div>
                            <div class="col-33">
                                <div class="col-circle">
                                    <div class="circle">
                                        <div class="outer-circle border-orange"></div>
                                        <div class="inner-circle">
                                            ПРАЦЮЄМО<br/>
                                            <b>24 години</b><br/>
                                            НА ДОБУ
                                        </div>
                                    </div>
                                </div>
                                <div class="c-text-cont">
                                    <div class="c-text-service">Сертифіковані засоби<br/> pramol, helper, starwax, ​mellerud</div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            <?php } else if ($head["id"] == 3178) {?>
                
                <div class="main_content border-shadow">
                    <div class="corporative-circles-section corporative-circles-section_2">
                        <div class="c-cont">
                            <div class="col-33">
                                <div class="col-circle">
                                    <div class="circle">
                                        <div class="outer-circle border-green"></div>
                                        <div class="inner-circle">
                                            БІЛЬШЕ<br/>
                                            <b>20 РОКІВ</b><br/>
                                            ДОСВІДУ
                                        </div>
                                    </div>
                                </div>
                                <div class="c-text-cont">
                                    <div class="c-text-service">Незмінна команда кращих<br/> фахівців України</div>
                                </div>
                            </div>
                            <div class="col-33">
                                <div class="col-circle">
                                    <div class="circle">
                                        <div class="outer-circle border-yellow"></div>
                                        <div class="inner-circle">
                                            БІЛЬШЕ<br/>
                                            <b>5 000</b><br/>
                                            КЛІЄНТІВ
                                        </div>
                                    </div>
                                </div>
                                <div class="c-text-cont">
                                    <div class="c-text-service">Визнання самих<br/> вимогливих клієнтів</div>
                                </div>
                            </div>
                            <div class="col-33">
                                <div class="col-circle">
                                    <div class="circle">
                                        <div class="outer-circle border-orange"></div>
                                        <div class="inner-circle">
                                            ПРАЦЮЄМО<br/>
                                            <b>24 години</b><br/>
                                            НА ДОБУ
                                        </div>
                                    </div>
                                </div>
                                <div class="c-text-cont">
                                    <div class="c-text-service">Сертифіковані засоби<br/> pramol, helper, starwax, ​mellerud</div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            <?php }?>
    </div>
    <div class="header-search static-search-block">
        <div class="hs-wrap c-box-920">
            <div class="hs-title">Знайти послугу</div>
            <div class="search-form">
                <form method="get" id="sform" name="sform" action="/search-result/">
                    <input type="text" id="stext" name="stext" autocomplete="off" placeholder="Пошук послуги..." class="ui-autocomplete-input">
                    <div class="searchsubmit">
                            <i class="fa fa-search"></i><input type="submit" class="menuupd_searchsubmit bluebutton" value="">
                            Знайти послугу
                    </div>
                </form>
            </div>
            <span class="vfix"></span>
        </div>
    </div>

    <?php if( (int)$head["id"] == 147 ) { ?>
            <?php 
            $corporative_services_arr = array(3515, 3516, 3517, 3518, 3519); //3381,
            $items = dbQuery("SELECT * FROM prices WHERE serviceid IN (".implode(',', $corporative_services_arr).") ORDER BY showorder,name");
            $video = dbQuery("SELECT * FROM video WHERE parentid = '".intval($head["id"])."'");
            if(count($items) > 0) { ?>
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
                        </div><br>
                    </div>
                </div>
            </div>
            <?php } ?>  

    <?php } else { ?>
    <div class="um-service-price-section">
        <div class="main_content">
            <div class="common-h2">Ціни</div>
            <div class="c-box-730">
                <?php if((int)$head["id"] == 3314) { ?>
                <!--div class="block_prise_cloud"><div class="block_prise_discount">-30%</div></div-->
                <?php } else { ?>
                <div class="block_prise_cloud" <?php if(!setting('service_discount')  || $head['dont_use_discount'] == 1) { ?> style="display:none"<?php } ?>><div class="block_prise_discount"><?php echo ( (int)$head["id"] == 3314 ? '-30%' : setting('service_discount')); ?></div></div>
                <?php } ?>
                <?php
                //Все страницы услуг, кроме Аквалайт
                if ($head["id"] != 1619) {
                $items = dbQuery("SELECT * FROM prices WHERE serviceid = '".intval($head["id"])."' ORDER BY showorder,name");
                
                if(count($items) > 0) { ?>
                <div class="um-price-wrap" scrollId="staftOfPrice">
                    <h2 class="um-show-price showPriceBtn">Всі ціни</h2>
                    <div>
                        <div class="table_prise block_prise_corporative clear_after">
                            <div class="hed_row  ">
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
                                <div class="content_col <?php echo $detect->isMobile() ? 'showMeTipMob' : 'showMeTip';?>">
                                    UNMOMENTO
                                    <span class="q-mark qMark">?</span>
                                    <div class="popup-tip-wrap">
                                        <div class="popup-tip">
                                        UNMOMENTO - потокова чистка речей простого крою, що включає загальну чистку і локальну попередню обробку забруднень (виведення плям) за допомогою професійних препаратів. Відпарювання і професійне прасування. Упаковка. Оціночна вартість текстильних виробів до 4000 грн (шкіряних до 6000 грн, хутряні до 10000 грн)
                                        </div>
                                    </div>
                                </div>
                                <div class="content_col <?php echo $detect->isMobile() ? 'showMeTipMob' : 'showMeTip';?>">
                                    Premium
                                    <span class="q-mark qMark">?</span>
                                    <div class="popup-tip-wrap">
                                        <div class="popup-tip">
                                        UNMOMENTO Premium - преміальна чистка речей з делікатних тканин, комбінованих і брендових речей або ж складного крою з об'ємним декором. Послуга включає захист фурнітури, загальну чистку і локальну попередню обробку забруднень, відпарювання, прасування і індивідуальну упаковку. Оціночна вартість виробів до 10000 грн (шкіряних до 20000 грн, хутряні до 30000 грн)
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="um-hidden-price">
                                <?php foreach($items as $item) { ?>
                                <div class="content_row<?= ($item["isaction"] == 1 ? " action" : "") ?>">
                                    <div class="content_col"><?=$item["name"]?></div>
                                    <div class="content_col"><?=$item["unit"]?></div>
                                    <div class="content_col">
                                        <?php if($item["price1"] > 0){?>
                                            <div vid-uslug="Аквалайт" data-tovar="<?=$item["name"]?>" data-price="<?=$item["price1"]?>" class="square_check"></div>
                                            &nbsp;&nbsp;&nbsp;&nbsp;<?=($item["price1"])?>
                                        <?php }?>
                                    </div>
                                    <div class="content_col">
                                        <?php if($item["price2"] > 0){?>
                                            <div vid-uslug="Unmomento" data-tovar="<?=$item["name"]?>" data-price="<?=$item["price2"]?>" class="square_check"></div>
                                            &nbsp;&nbsp;&nbsp;&nbsp;<?=($item["price2"])?>
                                        <?php }?>
                                    </div>
                                    <div class="content_col">
                                        <?php if($item["price3"] > 0){?>
                                            <div vid-uslug="Unmomento" data-tovar="<?=$item["name"]?>" data-price="<?=$item["price3"]?>" class="square_check"></div>
                                            &nbsp;&nbsp;&nbsp;&nbsp;<?=($item["price3"])?>
                                        <?php }?>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                        <div scrollId="endOfPrice"></div>
                    </div>
                </div>
                <?php } ?>
                <?php } else { 
                // Страница Аквалайт выбирает цены из основных услуг из ячейки Аквалайт, если заполнена
                // Другая структура html
                $blacklist_arr = array(3198, 3199, 3200, 3201, 3202, 3203, 3204, 3205, 3206, 3207, 3208, 3209, 3210, 3211, 3212, 3213, 3268, 3308, 3309, 3310, 3311, 3195, 1619, 1713, 3174, 3381, 3383, 3384, 3385, 3386); //СЕО услуги
                $items = dbQuery("SELECT * FROM prices WHERE  substr(name, 1,3) !='КО.' and serviceid  NOT IN (".implode(',', $blacklist_arr).") ORDER BY showorder,name");
                $items_co = dbQuery("SELECT * FROM prices WHERE  substr(name, 1,3) ='КО.' and serviceid  NOT IN (".implode(',', $blacklist_arr).") ORDER BY showorder,name");
                $items_h = dbQuery("SELECT * FROM content WHERE id=3174");
                if(count($items) > 0) {?>
                <div class="um-price-wrap um-akva-price" scrollId="staftOfPrice">
                    <h2 class="um-show-price showPriceBtn">Усі ціни</h2>
                    <div>
                        <div class="table_prise block_prise_corporative clear_after">
                            <div class="hed_row  ">
                                <div class="content_col">Найменування</div>
                                <div class="content_col">Од. вим</div>
                                <div class="content_col <?php echo $detect->isMobile() ? 'showMeTipMob' : 'showMeTip';?>">
                                    AquaLight
                                    <span class="q-mark qMark">?</span>
                                    <div class="popup-tip-wrap">
                                        <div class="popup-tip">
                                            Aqualight - професійне прання і відпарювання текстильного одягу з використанням інноваційних препаратів, без локальної обробки забруднень. Оціночна вартість виробів до 1000 грн
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="um-hidden-price">
                                <?php
                                foreach($items as $item) {
                                    if($item["price1"] > 0){?>
                                    <div class="content_row" data-parent="<?php echo $item["serviceid"]; ?>">
                                        <div class="content_col"><?=$item["name"]?></div>
                                        <div class="content_col"><?=$item["unit"]?></div>
                                        <div class="content_col">
                                                <div vid-uslug="Аквалайт" data-tovar="<?=$item["name"]?>" data-price="<?=$item["price1"]?>" class="square_check"></div>
                                                &nbsp;&nbsp;&nbsp;&nbsp;<?=($item["price1"])?>
                                            
                                        </div>
                                    </div>
                                    <?php }?>
                                <?php } ?>

                                <?php
                                foreach($items_co as $item) {
                                    if($item["price1"] > 0 && (int)$head['id'] != 1619){?>
                                        <div class="content_row" data-parent="<?php echo $item["serviceid"]; ?>">
                                            <div class="content_col"><?=$item["name"]?></div>
                                            <div class="content_col"><?=$item["unit"]?></div>
                                            <div class="content_col">
                                                <div vid-uslug="Аквалайт" data-tovar="<?=$item["name"]?>" data-price="<?=$item["price1"]?>" class="square_check"></div>
                                                &nbsp;&nbsp;&nbsp;&nbsp;<?=($item["price1"])?>

                                            </div>
                                        </div>
                                    <?php }?>
                                <?php } ?>
                            </div>
                        </div>
                        <div scrollId="endOfPrice"></div>
                    </div>
                </div>
                <?php }
                } ?>  
                <div class="um-form-cont">
                    <div class="um-fixed-container priceResultBtnWrap">
                        <div class="um-padding-container">
                            <div class="um-price-result">
                                <div class="um-order-btn-wrap">
                                    <div class="namber_result">* вартість вказана без урахування знижки</div>
                                    <div class="um-green-btn showPopup" data-show="servicePrice">оформити замовлення</div>
                                    <?php if ($head['id'] == 3404) { ?>
                                    <br><br>
                                    <div>
                                        <a href="/uslugi/chistka-izdeliy-iz-tekstilya.html" class="um-green-btn">Ціни на чищення текстилю</a>
                                    </div>
                                    <?php } ?>
                                </div>
                                <div class="container_result clear_after">
                                    <?php if(count($items) > 0) { ?>
                                    <div class="prise_result">
                                        Загальна вартість:  <span id="countPrice">0 грн</span>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="um-price-result-app um-price-result-app-fix1">
                                <ul class="news_social_buttons">
                                    <li><a onclick="gtag('event', 'Click', {'event_category': 'Order'});" href="https://play.google.com/store/apps/details?id=ru.agbis.Unmomento"><i class="fa fa-android"></i></a></li>
                                    <li><a onclick="gtag('event', 'Click', {'event_category': 'Order'});" href="https://apps.apple.com/ua/app/unmomento/id1491483430?l=ru"><i class="fa fa-apple"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>          
                </div>
            </div> 
        </div>    
    </div>
    <?php } ?>
    <div class="common-h2">Складові ідеального сервісу</div>
    <div class="main_content border-shadow">
        <div class="corporative-circles-section">
            <div class="c-cont">
                <div class="col-25">
                    <div class="col-circle">
                        <div class="circle">
                            <div class="outer-circle border-blue"></div>
                            <div class="inner-circle">
                                <svg class="svg-icon" type="image/svg+xml">
                                    <use xlink:href="#water"></use>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="c-text-cont">
                        <div class="c-text-service">Ефективне чищення</div>
                    </div>
                </div>
                <div class="col-25">
                    <div class="col-circle">
                        <div class="circle">
                            <div class="outer-circle border-yellow"></div>
                            <div class="inner-circle">
                                <svg class="svg-icon" type="image/svg+xml">
                                    <use xlink:href="#ironing"></use>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="c-text-cont">
                        <div class="c-text-service">Бережне прасування</div>
                    </div>
                </div>
                <div class="col-25">
                    <div class="col-circle">
                        <div class="circle">
                            <div class="outer-circle border-orange"></div>
                            <div class="inner-circle">
                                <svg class="svg-icon" type="image/svg+xml">
                                    <use xlink:href="#threads"></use>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="c-text-cont">
                        <div class="c-text-service">Копіткий ремонт</div>
                    </div>
                </div>
                <div class="col-25">
                    <div class="col-circle">
                        <div class="circle">
                            <div class="outer-circle border-red"></div>
                            <div class="inner-circle">
                                <svg class="svg-icon" type="image/svg+xml">
                                    <use xlink:href="#eco"></use>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="c-text-cont">
                        <div class="c-text-service">Екологічна упаковка</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="order-forms-section">
        <div class="common-h2">Оформіть замовлення зручним для Вас способом</div>
        <div class="c-box-920 c-cont-flex">
            <div class="col-flex-33 hideContainer">
                <div class="mobile-trigger new-service-btn blue-btn showMoreBtn">Зробити замовлення</div>
                <div class="styled-form hiddenText">
                    <iframe id="_srframe" name="_srframe"  style="display:none;"></iframe>
                    <form id="order<?php echo $head['id']; ?>" method="post" target="_srframe"  action="/request.php?action=add&amp;id=16">
                        <input name="f74" id="f74" required type="hidden" value="<?=$head['name']?>">
                        <div class="white-bkgnd">
                            <div class="form-title"><?=$head['name']?></div>
                            <div class="form-row">
                                <div class="form-label">Ім'я:<span>*</span></div>
                                <div class="form-input">
                                    <input  name="f75" id="f75" type="text">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-label">Контактний номер телефону:<span>*</span></div>
                                <div class="form-input">
                                    <input name="f76" id="f76"  required type="text" placeholder="+380 XX XXX XX XX" class="setMask">
                                </div>
                            </div>
                            <div class="form-row" style="display:none;">
                                <div class="form-label">Коментарі</div>
                                <div class="form-input">
                                    <input name="f77" id="f77"  type="text">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="select-wrap">
                                    <div class="select-btn selectOpen">Оберіть зі списку</div>
                                    <div class="hidden-select">
                                        <div class="select-row">
                                            <input type="radio" name="f78" id="stuff_1" value="Одяг, взуття, інші речі">
                                            <label  for="stuff_1">Одяг, взуття, інші речі</label>
                                        </div>
                                        <div class="select-row">
                                            <input type="radio" name="f78"  id="stuff_2" value="Чистка м'яких меблів">
                                            <label for="stuff_2">Чистка м'яких меблів</label>
                                        </div>
                                        <div class="select-row">
                                            <input type="radio" name="f78" id="stuff_3" value="Штори та гардини">
                                            <label for="stuff_3">Штори та гардини</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br><br><br>
                        </div>   
                        <div class="form-row submit-row">
                            <input onclick="fbq('track', 'SubmitApplication');" type="submit" class="new-service-btn blue-btn" value="Зробити замовлення">
                        </div>
                    </form>
                </div>  
            </div>
            <div class="col-flex-33">
                <div class="map-img_fix">
                    <div class="map-img" style="background-image: url('templates/img/map.jpg') "></div>
                    <a href="/o-kompanii/kontakty.html" class="link-abs"></a>
                </div>
                <a href="/o-kompanii/kontakty.html" class="new-service-btn new-green-btn">Пункти прийому</a>
            </div>
            <div class="col-flex-33 col-callback-form hideContainer">
                <div class="mobile-trigger new-service-btn btn-purple showMoreBtn">Передзвоніть мені</div>
                <div class="form-bkgnd_fix"></div>
                <div class="styled-form violet-form form-abs hiddenText">                 
                    <div class="title-violet">Введіть номер телефону <br>і наш менеджер <br>зв'яжеться з Вами</div>
                    <form method="post" target="_srframe" action="/request.php?action=add&id=10">
                        <div class="form-row">
                            <div class="form-label">Ім'я:<span>*</span></div>
                            <div class="form-input"><input name="f79" id="f79" type="text"></div>
                        </div>
                        <div class="form-row">
                            <div class="form-label">Контактний номер телефону<span>*</span></div>
                            <div class="form-input">
                                <input required="" name="f50"  type="text" placeholder="+380 XX XXX XX XX" class="setMask">
                                <input type="hidden" name="f51" id="f51" />
                            </div>
                        </div>
                        <div class="form-row submit-row">
                            <input onclick="fbq('track', 'SubmitApplication');" class="btn-purple" type="submit" value="Передзвоніть мені">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="c-box-920 c-cont-flex">
            <div class="col-flex-33">
            </div>
            <div class="col-flex-33">
                <ul class="news_social_buttons">
                    <li><a onclick="gtag('event', 'Click', {'event_category': 'Order'});" href="https://play.google.com/store/apps/details?id=ru.agbis.Unmomento"><i class="fa fa-android"></i></a></li>
                    <li><a onclick="gtag('event', 'Click', {'event_category': 'Order'});" href="https://apps.apple.com/ua/app/unmomento/id1491483430?l=ru"><i class="fa fa-apple"></i></a></li>
                </ul>
            </div>
            <div class="col-flex-33">
            </div>
        </div>
    </div>
    <div class="before-after-section">
        <div class="main_content">
            <div class="common-h2">До і Після</div>
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
            <div class="before-after-wrap">
                <div class="c-cont beforeAfterSliderInit">
                    <?php foreach ($slider_arr as $slide_img){ ?>
                       <div class="col-flex-25">
                           <div class="before-after-img_fix">
                               <div class="before-after-img" style="background-image: url('/templates/img/<?php echo $slide_img;?>');"></div>
                           </div>
                       </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
    <div class="delivery-section">
        <div class="main_content">
            <div class="common-h2 p-top-20">Доставка</div>
            <div class="c-cont-flex">
                <div class="delivery-img-col">
                    <div class="delivery-img_fix">
                        <div class="delivery-img" style="background-image: url('/templates/img/delivery.jpg')"></div>
                    </div>
                </div>
                <div class="delivery-form-col">
                    <div class="white-bkgnd">
                        <div class="styled-form">
                            <div class="form-title">Забрати мої речі</div>
                            <iframe id="_srframe" name="_srframe"  style="display:none;"></iframe>
                            <form id="delivery<?php echo $head['id']; ?>" method="post" target="_srframe"  action="/request.php?action=add&amp;id=14">
                                <input type="hidden" name="f80" id="f80" value="<?=$head['name']?>" />
                                <div class="styled-form-inner">
                                    <div class="form-row">
                                        <div class="form-label">ПІБ:<span>*</span></div>
                                        <div class="form-input"><input required="" name="f61" id="f61" type="text"></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-label">Контактний номер телефону<span>*</span></div>
                                        <div class="form-input">
                                            <input required="" type="tel" name="f62" id="f62" placeholder="+380 XX XXX XX XX" class="setMask">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-label">Дата/час</div>
                                        <div class="form-input">
                                            <input class="dateTimePicker" name="f64" id="f64" type="text" maxlength="45" size="45">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="select-wrap">
                                            <div class="select-btn selectOpen">Оберіть зі списку</div>
                                            <div class="hidden-select">
                                                <div class="select-row">
                                                    <input type="radio" id="stuff_4" name="f63" value="Одяг, взуття, інші речі">
                                                    <label for="stuff_4">Одяг, взуття, інші речі</label>
                                                </div>
                                                <div class="select-row">
                                                    <input type="radio"  id="stuff_5" name="f63" value="Чистка м'яких меблів">
                                                    <label for="stuff_5">Чистка м'яких меблів</label>
                                                </div>
                                                <div class="select-row">
                                                    <input type="radio" id="stuff_6" name="f63" value="Штори та гардини">
                                                    <label for="stuff_6">Штори та гардини</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="form-row submit-row">
                                        <input onclick="fbq('track', 'SubmitApplication');" type="submit" value="Відправити">
                                    </div>  
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="article-section">
        <div class="main_content">
            <div class="common-h2">Статті</div>
            <div class="container">
                <div class="container_training c-cont-flex articleSlider">
                    <?

                    $articles = dbQuery("SELECT * FROM articles WHERE ispublish = 1 ORDER BY id ASC LIMIT 0,3");
                    foreach ($articles as $r) {
                        $url = "/stati/" . create_urlname($r['name']) . "_" . $r['id'];
                        ?>
                        <div class="col-flex-33">
                            <a href="<?=$url?>" class="blocl_training ">
                                <div class="article-inner">
                                    <div class="title"><?=$r['name']?></div>
                                    <div class="desc"><?=maxsite_str_word(strip_tags(htmlspecialchars_decode($r['info'])), 20, " ")?>...</div>
                                    <div class="button_next">далі</div>
                                </div>
                            </a>
                        </div>
                    <? } ?>
        
                </div>
            </div>
        </div>
    </div>
    <?php
        $service_id = $head["id"];
        $video = dbQuery("SELECT * FROM video WHERE parentid = '".intval($service_id)."'");
    ?>
    <div class="video-section">
        <div class="main_content">
            <?php if( $video){ ?><div class="common-h2 p-top-30 m-bottom-10">Відео</div><? } ?>
            <div class="c-box-820">
            <?php if( $video){ ?>
                 <div class="slider-corporative-wrap inner-slider-cont inner-slider-video c-cont title-pic-wrap">
                    <div class="sliderCorpInit">
                <?php /*foreach($video as $vi) {
                    <div class="video_container">
                        <div class="video_container_wrap">
                            <div class="video_container_hatch"></div>
                            <iframe src="https://www.youtube.com/embed/<?php echo trim($vi['video'])//echo $youtube_id; ?>?rel=0&controls=0&showinfo=0&enablejsapi=true" allow="autoplay; encrypted-media" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                } */ ?>
                        <div class="video_container video_container_1">
                            <div class="video_container_wrap">
                                <div class="video_container_hatch"></div>
                                <iframe src="https://www.youtube.com/embed/MiARrk2eEhQ?rel=0&controls=0&showinfo=0&enablejsapi=true" allow="autoplay; encrypted-media" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="video_container video_container_2">
                            <div class="video_container_wrap">
                                <div class="video_container_hatch"></div>
                                <iframe src="https://www.youtube.com/embed/DKztWHtrfoE?rel=0&controls=0&showinfo=0&enablejsapi=true" allow="autoplay; encrypted-media" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="video_container  video_container_3">
                            <div class="video_container_wrap">
                                <div class="video_container_hatch"></div>
                                <iframe src="https://www.youtube.com/embed/2FDXGkTsAiE?rel=0&controls=0&showinfo=0&enablejsapi=true" allow="autoplay; encrypted-media" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="video_container  video_container_4">
                            <div class="video_container_wrap">
                                <div class="video_container_hatch"></div>
                                <iframe src="https://www.youtube.com/embed/kZjzbZ8GiM8?rel=0&controls=0&showinfo=0&enablejsapi=true" allow="autoplay; encrypted-media" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="video_container video_container_5">
                            <div class="video_container_wrap">
                                <div class="video_container_hatch"></div>
                                <iframe src="https://www.youtube.com/embed/NMukzJNTs0Y?rel=0&controls=0&showinfo=0&enablejsapi=true" allow="autoplay; encrypted-media" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="video_container video_container_6">
                            <div class="video_container_wrap">
                                <div class="video_container_hatch"></div>
                                <iframe src="https://www.youtube.com/embed/Rj4kRZFXaCc?rel=0&controls=0&showinfo=0&enablejsapi=true" allow="autoplay; encrypted-media" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="video_container video_container_7">
                            <div class="video_container_wrap">
                                <div class="video_container_hatch"></div>
                                <iframe src="https://www.youtube.com/embed/bVmHYRPB_B0?rel=0&controls=0&showinfo=0&enablejsapi=true" allow="autoplay; encrypted-media" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>

                    </div>
                </div>
            <?php } ?>
            </div>
            <?php if (strlen($head['info']) > 0) { ?>
            <div class="service-s-text-wrap hideContainer <?php if (!$head['hide_content_2']) { ?>showHidden<?php } ?>">
                <div class="service-s-text hiddenText">
                    <?=htmlspecialchars_decode($head['info'])?>
                </div>
                <div class="service-s-btn showMoreBtn" <?php if (!$head['hide_content_2']) { ?>style="display: none;"<?php } ?>>больше</div>
            </div>
            <?php } ?>
        </div>
    </div>

    <div class="related-section">
        <div class="main_content container_sevise">
            <div class="common-h2 p-top-40">Інші послуги</div>
            <div class="section-service-block">
                <?php
                $blacklist_arr = array(3198, 3199, 3200, 3201, 3202, 3203, 3204, 3205, 3206, 3207, 3208, 3209, 3210, 3211, 3212, 3213, 3268, 3308, 3309, 3310, 3311, 3195, 1619, 1713, 3174, 3381, 3383, 3384, 3385, 3386); //СЕО услуги
                $blacklist_arr[] = $head['id'];
                $arr = dbQuery("SELECT id,url,name,(SELECT id FROM images WHERE source = 1 AND parentid = content.id AND is_main = 1) as imid
                FROM content WHERE parentid = 23 AND id NOT IN (".implode(',' , $blacklist_arr).") AND ispublish = 1 ORDER BY rand() LIMIT 0,3");
                ?>
                <div class="service-container service-container-new clear_after">
                <?php  
                foreach($arr as $r){
                $img = getImageById($r["imid"]); ?>
                    <a data-id="<?php echo $r["id"]; ?>" href="<?php if($r["id"] == 3016){ echo 'http://shop.umcleaning.kiev.ua'; }
                        else if ($r["id"] == 147) { echo 'https://ua.unmomento.com.ua/';}
                        else if ($r["id"] == 2994) { echo 'https://ua.unmomento.com.ua/services/himchistka-myagkoj-mebeli/';}
                        else{ echo $r["url"]; }?>" class="block_servise">
                        <div class="foto" style="background-image:url(/images/files/<?=$img["image"]?>)"></div>
                        <div class="block_info">
                            <span class='vfix'></span>
                            <div class="container_vfix">
                                <div class="name">
                                    <?=$r["name"]?>
                                </div>
                            </div>
                        </div>
                    </a>
                <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <div class="dostavka-payment-section">
        <div class="main_content">
            <div class="dostavka-title">Способи оплати</div>
            <div class="dostavka-subtitle">Ми приймаємо до оплати як безготівковий розрахунок, готівкові, так і банківські картки</div>
            <div class="bank-card-wrap">
                <div class="c-box-980 c-cont">
                    <div class="col-25">
                        <img loading="lazy" class="fits partner-img" src="/templates/img/payment1.png">
                    </div>
                    <div class="col-25">
                        <img loading="lazy" class="fits partner-img" src="/templates/img/payment2.png">
                    </div>
                    <div class="col-25">
                        <img loading="lazy" class="fits partner-img" src="/templates/img/payment3.png">
                    </div>
                    <div class="col-25">
                        <img loading="lazy" class="fits partner-img" src="/templates/img/payment4.png">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>
<script>
    $('.aside-form-subtitle').html('<?php echo $head['name']; ?>');
    $('#f44, #lf44, #f59, #f51').val('<?php echo $head['name']; ?>');
</script>