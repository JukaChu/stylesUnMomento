<?php if(!isset($_COOKIE['is_subscribe_form_6']) && 1==0){
// Все страницы, если нет записи в куках?>
<div class="popup-wrap subscribePopUp">
    <div class="popup-overlay"></div>
    <div class="popup-e-subscribe  popup-e-subscribe-6"> 
        <div class="main_content">
            <div class="subscribe-form-container">
                <div class="close">+</div>
                <div class="form-header-wrap form-header-banner-6 clear_after">&nbsp;</div>
                <div class="row">
                    <ul class="news_social_buttons">
                        <li><a onclick="gtag('event', 'Click', {'event_category': 'Order'});" href="https://play.google.com/store/apps/details?id=ru.agbis.Unmomento"><i class="fa fa-android"></i></a></li>
                        <li><a onclick="gtag('event', 'Click', {'event_category': 'Order'});" href="https://apps.apple.com/ua/app/unmomento/id1491483430?l=ru"><i class="fa fa-apple"></i></a></li>
                    </ul>
                </div>
                <div class="row">
                    <a class="button_banner" href="<?php echo _SITE;?>novosti/dliiiiinnaja-chernaja-pjatnica/">узнать детали</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>

<?php if(!isset($_COOKIE['is_subscribe_form_5']) && 0 == 1){
// Все страницы, если нет записи в куках?>
<div class="popup-wrap subscribePopUp">
    <div class="popup-overlay"></div>
    <div class="popup-e-subscribe  popup-e-subscribe-5"> 
        <div class="main_content">
            <div class="subscribe-form-container">
                <div class="close">+</div>
                <div class="form-header-wrap form-header-banner-5 clear_after">&nbsp;</div>
                <div class="row">
                    <ul class="news_social_buttons">
                        <li><a onclick="gtag('event', 'Click', {'event_category': 'Order'});" href="https://play.google.com/store/apps/details?id=ru.agbis.Unmomento"><i class="fa fa-android"></i></a></li>
                        <li><a onclick="gtag('event', 'Click', {'event_category': 'Order'});" href="https://apps.apple.com/ua/app/unmomento/id1491483430?l=ru"><i class="fa fa-apple"></i></a></li>
                    </ul>
                </div>
                <div class="row">
                    <a class="button_banner" href="<?php echo _SITE;?>novosti/nu-nakonec-to/">узнать детали</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>



<?php //if(!isset($_COOKIE['is_subscribe_form_3']) && !isset($_COOKIE['is_subscribe_form_4'])  && (int)$head['id'] != 3519 && 1==0 /* remarketing subscribe page */) { ?>
<?php 
if( !isset($_COOKIE['is_subscribe_form_7']) ) {
    if ( $show_banner_by_ip === true ) { 
?>
<div class="popup-wrap subscribePopUp">                                                                
    <div class="popup-overlay"></div>
    <div class="popup-e-subscribe popup-e-subscribe-2 popup-e-subscribe-3"> 
        <div class="main_content">
            <div class="subscribe-form-container">
                <div class="close">+</div>
                <div class="form-header-wrap form-header-banner-3 clear_after">&nbsp;
                </div>
                <iframe id="rframe" name="rnframe" style="display:none;" ></iframe>
                <form method="post" target="rnframe" class="form" target="rframe" enctype="multipart/form-data" action="<?php echo _SITE; ?>request.php?action=add&id=9">
                    <input name="f100" type="hidden" value="Получи 100 грн за контакт и закажи курьера" />
                    <div class="one-third">
                        <div class="row">
                            <div class="input"><input type="text" name="f48" required placeholder="Имя*"></div>
                        </div>
                    </div>
                    <div class="one-third">
                        <div class="row">
                            <div class="input"><input type="text" name="f99" required placeholder="Фамилия*"></div>
                        </div>
                    </div>
                    <div class="one-third">
                        <div class="row">
                            <div class="input"><input type="tel" name="f97" required  placeholder="Телефон*"></div>
                        </div>
                    </div>
                    <div class="row recaptcha-row recaptcha-row-2">
                        <div class="g-recaptcha" data-sitekey="<? echo setting('recaptcha_key'); ?>"></div>
                    </div>
                    <div class="row checkbox-row checkbox-row-2">
                        <div class="checkbox-row-inner">
                            <input type="checkbox" required>
                            <span class="squared"></span>
                            <span class="text">Я даю согласие на обработку данных компанией UNMOMENTO</span>
                        </div>
                    </div>
                    <div class="submit-wrap">
                        <div class="row">
                            <div class="input">
                                <input type="submit" value="Заказать">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php } } ?>

<?php 
if(isset($_COOKIE['is_subscribe_form_3']) && !isset($_COOKIE['is_subscribe_form_4']) && 1==0 ){ 
?>
<div class="popup-wrap subscribePopUp">
    <div class="popup-overlay"></div>
    <div class="popup-e-subscribe popup-e-subscribe-2 popup-e-subscribe-4"> 
        <div class="main_content">
            <div class="subscribe-form-container">
                <div class="close">+</div>
                <div class="form-header-wrap form-header-banner-4 clear_after">&nbsp;
                </div>
                <iframe id="rframe" name="rnframe" style="display:none;" ></iframe>
                <form method="post" target="rnframe" class="form" target="rframe" enctype="multipart/form-data" action="<?php echo _SITE; ?>request.php?action=add&id=9">
                    <input name="f100" type="hidden" value="Закажи курьера и получи 150 грн" />
                    <div class="one-third">
                        <div class="row">
                            <div class="input"><input type="text" name="f48" required placeholder="Имя*"></div>
                        </div>
                    </div>
                    <div class="one-third">
                        <div class="row">
                            <div class="input"><input type="text" name="f99" required placeholder="Фамилия*"></div>
                        </div>
                    </div>
                    <div class="one-third">
                        <div class="row">
                            <div class="input"><input type="tel" name="f97" required  placeholder="Телефон*"></div>
                        </div>
                    </div>
                    <div class="row recaptcha-row recaptcha-row-2">
                        <div class="g-recaptcha" data-sitekey="<? echo setting('recaptcha_key'); ?>"></div>
                    </div>
                    <div class="row checkbox-row checkbox-row-2">
                        <div class="checkbox-row-inner">
                            <input type="checkbox" required>
                            <span class="squared"></span>
                            <span class="text">Я даю согласие на обработку данных компанией UNMOMENTO</span>
                        </div>
                    </div>
                    <div class="submit-wrap">
                        <div class="row">
                            <div class="input">
                                <input type="submit" value="Заказать">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php } ?>

<?php if ( !isset($_COOKIE['is_subscribe_form_2']) && 0 == 1){
// Все страницы, если нет записи в куках?>
<div class="popup-wrap subscribePopUp">
    <div class="popup-overlay"></div>
    <div class="popup-e-subscribe  popup-e-subscribe-2"> 
        <div class="main_content">
            <div class="subscribe-form-container">
                <div class="close">+</div>
                <div class="form-header-wrap clear_after">&nbsp;
                </div>
                <iframe id="rframe" name="rnframe" style="display:none;" ></iframe>
                <form method="post" target="rnframe" class="form" target="rframe" enctype="multipart/form-data" action="<?php echo _SITE; ?>request.php?action=add&id=9">
                    <div class="one-half">
                        <div class="row">
                            <div class="input"><input type="text" name="f48" required placeholder="Имя*"></div>
                        </div>
                    </div>
                    <div class="one-half">
                        <div class="row">
                            <div class="input"><input type="tel" name="f97" required  placeholder="Телефон*"></div>
                        </div>
                    </div>
                    <div class="row recaptcha-row recaptcha-row-2">
                        <div class="g-recaptcha" data-sitekey="<? echo setting('recaptcha_key'); ?>"></div>
                    </div>
                    <div class="row checkbox-row checkbox-row-2">
                        <div class="checkbox-row-inner">
                            <input type="checkbox" required>
                            <span class="squared"></span>
                            <span class="text">Я даю согласие на обработку данных компанией UNMOMENTO</span>
                        </div>
                    </div>
                    <div class="submit-wrap">
                        <div class="row">
                            <div class="input">
                                <input type="submit" value="Заказать">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php } ?>


<?php if ( !isset($_COOKIE['is_bunner_form'] )){?>
<div class="popup-wrap bunnerPopUp">
    <div class="popup-overlay"></div>
    <div class="popup-e-subscribe"> 
        <div class="main_content">
            <div class="subscribe-form-container">
                <div class="close">+</div>
                <img loading="lazy" class="hide-it-now" style="width:100%" src="/templates/images/popupbru.jpg">
                <!--div class="hide-it-now popBunBtn" >Спасибо, приду!</div-->
            </div>
        </div>
    </div>
</div>
<?php } ?>

<div class="um-popups-wrap">
    <div class="um-popup-overlay"></div>

    <div class="popap-wrap callback-popup popup ajaxFormWrap dostavkaPopup" data-popup="dostavkaPopup">
        <div class="popup-close">+</div>
        <div class="title">Вызвать курьера удобным способом</div>
        <div class="um-styled-form">
            <form id="form_order_delivery2" method="post">
                <input name="action" type="hidden" value="order_delivery">
                <div class="form_row">
                    <div class="form_label">Имя:<span>*</span></div>
                    <div class="form_input"><input name='name' required type="text"></div>
                </div>
                <div class="form_row">
                    <div class="form_label">Контактный номер телефона:<span>*</span></div>
                    <div class="form_input">
                        <input name="phone" required type="tel" class="setMask" placeholder="+380 XX XXX XX XX" maxlength="17">
                    </div>
                </div>
                <div class="form_row">
                    <div class="form_label">Коментарии:</div>
                    <div class="form_input">
                        <textarea name="comments"></textarea>
                    </div>
                </div>
                <div class="aside-formrow">
                    <input id="submit_order_delivery" type="submit" value="ОТПРАВИТЬ">
                </div>
            </form>
            <div class="ajaxMessage"></div>
            <ul class="news_social_buttons">
                <li class="social_button social_button_fb"><a taget="_blank" href="https://m.me/momento.un?ref=UNMOMENTO"><div class="social_button_fb"></div></a></li>
                <li class="social_button social_button_vb"><a taget="_blank" href="viber://pa?chatURI=unmomentobot&context=ml1"><div class="social_button_vb"></div></a></li>
                <li class="social_button social_button_tg"><a taget="_blank" href="https://t.me/unmomento_bot"><div  class="social_button_tg"></div></a></li>
            </ul>
            <ul class="news_social_buttons">
                <li><a href="https://play.google.com/store/apps/details?id=ru.agbis.Unmomento"><i class="fa fa-android"></i></a></li>
                <li><a href="https://apps.apple.com/ua/app/unmomento/id1491483430?l=ru"><i class="fa fa-apple"></i></a></li>
            </ul>
        </div>
    </div>

    <?// Все страницы ?>
    <div class="popap-wrap callback-popup popup ajaxFormWrap" data-popup="popapCallback">
        <div class="popup-close">+</div>
        <div class="title">У Вас есть вопросы? Мы Вам поможем!</div>
        <div class="ajaxMessage"></div>
        <form id="corp_phone">
            <div class="line">
                <input class="tel-mask setMask"  placeholder="+380 (xx) xxx-xx-xx" type="text" id="corphone">
            </div>
            <div class="line">
                <button type="submit">перезвоните мне</button>
            </div>
        </form>
    </div>
    <?php if($head['parentid'] ==='23' && $head['id'] !== 142){ //Страницы услуг, кроме страницы доставки ?>
    <?php /*
    <div class="popup popup-300 popup-dostavka ajaxFormWrap" data-popup="dostavkaForm">
        <div class="popup-close">+</div>
        <div class="ajaxMessage"></div>
        <div class="styled-form">
            <form id ="DostavkaVeschey">
                <div class="form-row">
                    <div class="form-label">Имя:<span>*</span></div>
                    <div class="form-input"><input required type="text" id="name"></div>
                </div>
                <div class="form-row">
                    <div class="form-label">Контактный номер телефона:<span>*</span></div>
                    <div class="form-input">
                        <input required type="tel" placeholder="+380 XX XXX XX XX" class="setMask" id="phone">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-label">Дата/время</div>
                    <div class="form-input">
                        <input id="dataPicker" type="text" maxlength="45" size="45"/>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-label">Список вещей</div>
                    <div class="select-wrap">
                        <div class="select-btn selectOpen">Выберите из списка</div>
                        <div class="hidden-select">
                            <div class="select-row">
                                <input type="radio" id="thing_1" name="stuff" value="Одежда, обувь, другие вещи" data-tovar="Одежда, обувь, другие вещи"/>
                                <label for="thing_1">Одежда, обувь, другие вещи</label>
                            </div>
                            <div class="select-row">
                                <input type="radio" id="thing_2" name="stuff" value="Ковры" data-tovar="Ковры"/>
                                <label for="thing_2">Ковры</label>
                            </div>
                            <div class="select-row">
                                <input type="radio" id="thing_3" name="stuff" value="Шторы и гардины" data-tovar="Шторы и гардины"/>
                                <label for="thing_3">Шторы и гардины</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-row submit-row">
                    <input type="submit" value="Отправить" />
                </div>
            </form>
        </div>
    </div>
    */?>
    <?php } ?>

    <?php if($head['parentid'] ==='23') { //Страницы услуг ?>
    <div class="popup popup-300 popup-service serviceForm ajaxFormWrap" data-popup="servicePrice">
        <div class="popup-close">+</div>
        <div class="um-styled-form">
            <form onsubmit="return false">
                <div class="input">
                    <input id = "name_" type="text" placeholder="Ваше имя">
                </div>
                <div class="input">
                    <input id = "phone_" class="setMask" type="text" required placeholder="Ваш телефон*">
                </div>
                <div class="input">
                    <input id ="email_" type="email" placeholder="Ваш email">
                </div>
                <div class="input">
                    <input class="datePicker" type="text" maxlength="45" size="45" value="<?php echo date('d.m.Y'); ?>" placeholder="<?php echo date('d.m.Y'); ?>"/>
                </div>
                <input class="um-green-btn" id="SentOrderService"  type="submit" value="Отправить">
                <?php $page_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";?>
                <span data-url="<?php echo $page_link; ?>"></span>
            </form>
            <div class="ajaxMessage"></div>
        </div>
    </div>
    <?php } ?>

    <?php if($head['id'] === '2983'){ //Страница цен ?>
    <div class="popup popup-300 popup-price ajaxFormWrap" data-popup="priceOrder">
        <div class="popup-close">+</div>
        <div class="um-styled-form">
            <form onsubmit="return false">
                <div class="input">
                    <input id = "name87" type="text" placeholder="Ваше имя">
                </div>
                <div class="input">
                    <input id = "phone87" class="setMask" type="text" required placeholder="Ваш телефон*">
                </div>
                <div class="input">
                        <input id ="email" type="email" placeholder="Ваш email">
                </div>
                <div class="input">
                    <input class="datePicker" type="text" maxlength="45" size="45" value="<?php echo date('d.m.Y'); ?>" placeholder="<?php echo date('d.m.Y'); ?>"/>
                </div>
                <input class="um-green-btn" id="SentOrderPrice" type="submit" value="Отправить">
                <?php $page_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";?>
                <span data-url="<?php echo $page_link; ?>"></span>
            </form>
            <div class="ajaxMessage"></div>
        </div>
    </div>
    <?php } ?>
    <div class="popup popup-300" data-popup="serviceMessage">
        <div class="popup-close">+</div>
        <div class="popup-content"></div>
    </div>
</div>
<?php 
// Внутренняя страница услуг - боковая форма быстрого заказа
if ($head['parentid'] == '23'){?>
    <div class="aside-form-wrap formClose">
        <div class="fast-order-btn"><div class="fast-order-text">Быстрый заказ</div></div>
        <div class="aside-form-inner">
            <div class="aside-form-content">
                <div class="aside-form-title-wrap">
                    <div class="aside-form-title">
                        Быстрый заказ
                    </div>
                    <div class="aside-form-close">
                        +
                    </div>
                </div>
                <div class="aside-form-body">
                    <div id="lf44" class="aside-form-subtitle"><?=$head['name']?></div>
                    <div class="aside-formblock">
                    <iframe id="_srframe" name="_srframe"  style="display:none;"></iframe>
                        <form id="service<?php echo $head['id']; ?>" method="post" target="_srframe"  action="https://unmomento.com.ua/request.php?action=add&amp;id=8" target="_srframe">
                        <input name="f44" id="f44" required="" type="hidden">
                            <div class="form_row">
                                <div class="form_label">ФИО:<span>*</span></div>
                                <div class="form_input"><input name="f45" required="" type="text"></div>
                            </div>
                            <div class="form_row">
                                <div class="form_label">Контактный номер телефона:<span>*</span></div>
                                <div class="form_input">
                                    <input required name="f46" id="cont" class="setMask" type="tel" placeholder="+380 XX XXX XX XX">
                                </div>
                            </div>
                            <div class="form_row">
                                <div class="form_label">Коментарии:</div>
                                <div class="form_input">
                                    <textarea name="f47"></textarea>
                                </div>
                            </div>
                            <div class="aside-formrow">
                                <input type="submit"  onclick="gtag('event', 'Click', {'event_category': 'Order'});" value="Отправить" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php }
else if ($head['parentid'] == '2890' || $head['parentid'] == '3078'){ ?>
    <div class="aside-form-wrap orderFromNewsPage formClose">
        <div class="aside-form-inner">
            <div class="aside-form-content">
                <div class="aside-form-title-wrap">
                    <div class="aside-form-title">
                        Сделать заказ
                    </div>
                    <div class="aside-form-close">
                        +
                    </div>
                </div>
                <div class="aside-form-body ajaxFormWrap">
                    <div class="aside-formblock">
                        <form  id="form_news_action_form" method="post" target="" action="">
                            <div class="form_row">
                                <div class="form_label">ФИО:<span>*</span></div>
                                <div class="form_input"><input name="name" required="" type="text"></div>
                            </div>
                            <div class="form_row">
                                <div class="form_label">Контактный номер телефона:<span>*</span></div>
                                <div class="form_input">
                                    <input required name="phone" id="phone200" class="setMask" type="tel" placeholder="+380 XX XXX XX XX">
                                </div>
                            </div>
                            <div class="form_row">
                                <div class="form_label">Коментарии:</div>
                                <div class="form_input">
                                    <textarea name="comments"></textarea>
                                </div>
                            </div>
                            <div class="aside-formrow">
                                <input id="news_action_form" type="submit" value="Отправить" />
                            </div>
                        </form>
                    </div>
                    <div class="ajaxMessage"></div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>


<div class="popup-form-wrap popup-300" data-id="getBonus100" dat-ipaddress="<?php echo $user_ip;?>" data-show_banner_by_ip = "<?php echo ($show_banner_by_ip===false ? 0 : 1); ?>">
    <div class="popup-title">Получить 100 грн бонус</div>
    <div class="popup-close">+</div>
    <form method="post" action="" id="Bonus100">
        <div class="form_row">
            <div class="form_label">ФИО:<span>*</span></div>
            <div class="form_input"><input id="name100" name="" required="" type="text"></div>
        </div>
        <div class="form_row">
            <div class="form_label">Контактный номер телефона:<span>*</span></div>
            <div class="form_input">
                <input id="phone100" required name="" class="setMask" type="tel" placeholder="+380 XX XXX XX XX">
            </div>
        </div>
        <div class="form_row submit_row">
            <input type="submit" id="btn100" value="Отправить" />
        </div>
        <div class="form_row result_row">

        </div>
    </form>
</div>
