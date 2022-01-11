<?php include 'mob_header_buttons.php'; ?>
<div class="dostavka-service">
    <div class="top-slider-section">
        <h1 class="title">ЗАБЕРЕМО І ДОСТАВИМО 24\7</h1>
        <?php $main_img=getMainImage($head["id"], '1');?>
        <div class="slider-form-wrap">
            <div class="inner-page-slider-wrap">
                <?php $images = getImages($head['id'],1);
                if(count($images ) > 1) {?>
                <div class="umInnerSliderInit">
                    <?php
                    foreach($images as $image){
                    if($image['is_main'] != 1) {
                    ?>
                    <div class="um-inner-slide">
                        <div class="um-inner-img-fix">
                            <?php if(!empty($image["link"])){?>
                            <a class="block-link" href="<?php echo $image["link"]; ?>"></a>
                            <?php } ?>
                            <div class="um-inner-img" style="background-image: url('/images/files/<?php echo $image['image']; ?>')"></div>
                        </div>
                    </div>
                    <?php }
                    }?>
                </div>
                <? } else { ?>
                <div class="um-inner-img-fix">
                    <div class="um-inner-img" style="background-image: url('/images/files/<?php echo $main_img['image']; ?>')"></div>
                </div>
                <?php }?>
            </div>
            <div class="aside-form-wrap delivery-form-wrap">
                <div class="aside-form-inner">
                    <div class="aside-form-content">
                        <div class="aside-form-title-wrap">
                            <div class="aside-form-title green">
                                ВИКЛИКАТИ КУР'ЄРА
                            </div>
                        </div>
                        <div class="aside-form-body">
                            <div class="aside-formblock ajaxFormWrap">
                                <form id="form_order_delivery" method="post">
                                    <input name="action" type="hidden" value="order_delivery">
                                    <div class="form_row">
                                        <div class="form_label">Ім'я:<span>*</span></div>
                                        <div class="form_input"><input name='name' required type="text"></div>
                                    </div>
                                    <div class="form_row">
                                        <div class="form_label">Контактный номер телефона:<span>*</span></div>
                                        <div class="form_input">
                                            <input name="phone" required type="tel" class="setMask" placeholder="+380 XX XXX XX XX" maxlength="17">
                                        </div>
                                    </div>
                                    <div class="form_row">
                                        <div class="form_label">Коментарі:</div>
                                        <div class="form_input">
                                            <textarea name="comments"></textarea>
                                        </div>
                                    </div>
                                    <div class="aside-formrow">
                                        <input id="submit_order_delivery" type="submit"  onclick="gtag('event', 'Click', {'event_category': 'Order'});" value="Надіслати">
                                    </div>
                                </form>
                                <div class="ajaxMessage"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="circles-section">
        <div class="dostavka-title">Як працює сервіс</div>
        <div class="c-cont circles-cont">
            <div class="col-25">
                <div class="col-circle showPopup dostavkaPopup" data-show="dostavkaPopup">
                    <div class="circle">
                        <div class="outer-circle border-green"></div>
                        <div class="inner-circle">
                            <svg class="svg-icon" type="image/svg+xml">
                                <use xlink:href="#phonecall2"></use>
                            </svg>
                        </div>
                    </div>
                    <div class="line line-green animate"></div>
                </div>
                <div class="c-text-cont">
                    <div class="c-title">Викликати кур'єра зручним способом</div>
                    <div class="c-text">через call center, чат-боти, заявку на сайті або завантажити додаток</div>
                </div>
            </div>
            <div class="col-25">
                <div class="col-circle">
                    <div class="circle">
                        <div class="outer-circle border-red"></div>
                        <div class="inner-circle">
                            <svg class="svg-icon" type="image/svg+xml">
                                <use xlink:href="#handsbox"></use>
                            </svg>
                        </div>
                    </div>
                    <div class="line line-red animate"></div>
                </div>
                <div class="c-text-cont">
                    <div class="c-title">Ми заберемо Ваші речі в зручний час</div>
                    <div class="c-text">Вибір часу сервісу доставки</div>
                </div>
            </div>
            <div class="col-25">
                <div class="col-circle">
                    <div class="circle">
                        <div class="outer-circle border-violet"></div>
                        <div class="inner-circle">
                            <svg class="svg-icon" type="image/svg+xml">
                                <use xlink:href="#truck"></use>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="c-text-cont">
                    <div class="c-title">Доставимо Ваші речі вже чістими додому або в офіс</div>
                    <div class="c-text">Максимальний комфорт для клієнта</div>
                </div>
            </div>
        </div>
    </div>
    <div class="btns-section">
        <div class="c-box-980 clock-bgnd">
            <div class="call-to-action">
                <span class="green"><b> Оформити замовлення </b> </span> зручним способом: по телефону або на сайті <span class = "green"> <b> з 9 до 20 години </b> </span>
            </div>
            <div class="um-btns-wrap">
                <div class="col-cont">
                        <div class="col-33">
                                <div class="um-btn btn-blue callAsideForm">Зробити замовлення</div>
                        </div>
                        <div class="col-33">
                                <div class="um-btn btn-purple showForm">Передзвоніть мені</div>
                        </div>
                        <div class="col-33">
                                <a href="/o-kompanii/kontakty.html" class="um-btn btn-green">Пункти прийому</a>
                        </div>
                </div>
                <div class="col-cont">
                        <div class="col-33">
                        </div>
                        <div class="col-33">
                            <ul class="news_social_buttons">
                                <li><a onclick="gtag('event', 'Click', {'event_category': 'Order'});" href="https://play.google.com/store/apps/details?id=ru.agbis.Unmomento"><i class="fa fa-android"></i></a></li>
                                <li><a onclick="gtag('event', 'Click', {'event_category': 'Order'});" href="https://apps.apple.com/ua/app/unmomento/id1491483430?l=ru"><i class="fa fa-apple"></i></a></li>
                            </ul>
                        </div>
                        <div class="col-33">
                        </div>
                </div>
                <div class="um-form-wrap um-hidden">
                    <div class="um-form-close"></div>
                    <form method="post" target="_srframe" action="/request.php?action=add&id=10">
                        <div class="input">
                            <input type="text" name="f79" required="" placeholder="Ваше ім'я">
                            <input type="text" name="f50" class="setMask" required="" placeholder="Ваш телефон">
                            <input type="hidden" name="f51" id="f51" />
                        </div>
                        <input class="um-btn btn-purple" type="submit"  onclick="gtag('event', 'Click', {'event_category': 'Order'});" value="Замовити зворотній дзвінок">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php $items = dbQuery("SELECT * FROM prices WHERE serviceid = '".intval($head["id"])."' ORDER BY showorder,name");
        if(count($items) > 0) { ?>
    <div class="dostavka-price-section">
        <div class="dostavka-title">Ціни на послугу</div>
        <div class="price-card-wrap um-price-wrap">
            <div class="c-cont price-card-cont um-hidden-price">
                <?php foreach($items as $item) { ?>
                <div class="col-25 dostavka-price-col">
                    <a href="#" class="col-inner chooseService"  vid-uslug="Unmomento" data-tovar="<?=$item["name"]?>" data-price="<?=$item["price2"]?>" >
                        <div class="card-title"><?=$item["name"]?></div>
                        <div class="card-check-mark"></div>
                        <?php if(round($item["price2"] == 0) ){ ?>
                            <div class="card-price"><span class="font-80">БЕЗКОШТОВНО</span></div>
                        <?php } else { ?>
                        <div class="card-price"><?=round($item["price2"])?><span class="font-80"> грн</span></div>
                        <?php } ?>
                    </a>
                </div>
                <?php } ?>
            </div>
            <div class="dostavka-show-all">
                <a href="#" class="dostavka-show-all-btn showPriceBtn">
                    <h2>Усі цени</h2>
                </a>
            </div>
        </div>
        <div class="container_result clear_after dostavka-result">
            <div class="prise_result">
                Підсумкова вартість:
                <span class="green num">
                    <span id="countPrice">0 </span>
                    <span class="font-80">грн</span>
                </span>
            </div>
        </div>
        <div class="um-form-cont c-box-730">
            <div class="um-order-btn-wrap">
                    <div class="umOrderBtn um-green-btn">оформити замовлення</div>
            </div>
            <div class="um-order-form-wrap hidden-content">
                <?php /*
                <span class="un-warning red">Обратите внимание!<br> 
                На данный момент на сайте происходит переоценка. Уточняйте цены у сотрудников Unmomento.<br>Просим прощения за неудобства.</span>
                 */?>
                <div class="c-box-300">
                    <div class="um-form-close"></div>
                    <form onsubmit="return false;" >
                            <div class="input">
                                    <input id="o_phone_" type="text"  class="setMask" required placeholder="+38() ___ - __ -__">
                            </div>
                            <div class="input">
                                    <input id="o_email_" type="email" required placeholder="Ваш email">
                            </div>
                            <input class="um-green-btn" id="SentOrder" type="submit" onclick="gtag('event', 'Click', {'event_category': 'Order'});" value="Відправити">
                    </form>
                    <div id="message1"></div>
                </div>
            </div>
            <div>
                <ul class="news_social_buttons">
                    <li><a onclick="gtag('event', 'Click', {'event_category': 'Order'});" href="https://play.google.com/store/apps/details?id=ru.agbis.Unmomento"><i class="fa fa-android"></i></a></li>
                    <li><a onclick="gtag('event', 'Click', {'event_category': 'Order'});" href="https://apps.apple.com/ua/app/unmomento/id1491483430?l=ru"><i class="fa fa-apple"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <?php } ?>
    <div class="dostavka-payment-section">
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
    <?php $service_id = $head["id"];
    $video = dbQuery("SELECT * FROM video WHERE parentid = '".intval($service_id)."'"); 
    if(count($video)>0){ ?>
    <div class="dostavka-video-section">    
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
     <?php } ?>

    <?php  if (strlen($head['info']) > 0 && (int)$head['id'] !=2994 ){ ?>
    <div class="service-s-text-wrap hideContainer">
        <div class="service-s-text hiddenText <?php if (!$head['hide_content_2']) { ?>showHidden<?php } ?>">
            <?=htmlspecialchars_decode($head['info'])?>
        </div>
        <div class="service-s-btn showMoreBtn"<?php if (!$head['hide_content_2']) { ?>style="display: none;"<?php } ?> >больше</div>
    </div>
    <?php } else if ((int)$head['id']==2994){ ?>
    <div class="service-s-text-wrap showHidden">
            <?=htmlspecialchars_decode($head['info'])?>
    </div>
    <?php } ?>

</div>
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
            var email =$('#o_email_').val();
            var price =$('#countPrice').text();
            var OrderArray = new Array();
            $(".chooseService.active").each(function(){
                OrderArray.push({
                    tovar:$(this).attr("data-tovar"),
                    vid:$(this).attr("vid-uslug"),
                    price: parseInt($(this).attr("data-price"))
                });
            });
            var re = /^(?:[a-z0-9!#$%&amp;'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&amp;'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])$/;
            if (OrderArray.length >0) {
                if (phone && email && re.test(email)) {
                    $.ajax({
                        'type': 'POST',
                        'url': "../inc/sentorder.php",
                        'data': {
                            'phone': phone,
                            'email': email,
                            'price': price,
                            'orders': OrderArray
                        },
                        'success': function (html) {

                            $('#message1').dialog({
                                modal: true,
                                title: "Повідомлення",
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
                            var phone = $('#phone').val();
                            var email = $('#email').val();
                        },
                        'error': function (jqXHR, textStatus, errorThrown) {
                            console.log(jqXHR);
                            alert("AJAX Error!", "Error  SORRY (Error: " + textStatus + ", " + errorThrown + ")");
                        }

                    });
                }
            } else {
                $('#message1').dialog({
                    modal: true,
                    title: "Сообщение",
                    open: function () {
                        var text = '<p>' + 'Виберете послугу доставки' + '</p>';
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