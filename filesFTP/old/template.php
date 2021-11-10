<?php require_once 'mobile-detect.php'; $detect = new Mobile_Detect;  ?><!DOCTYPE HTML>
<html lang="ru">
<head>
    <base href="<?=_SITE?>"/>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="icon" type="image/png" href="<?=_SITE?>favicon.png" />
    <link rel="shortcut icon" type="image/png" href="<?=_SITE?>favicon.png" />

    <link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://www.googletagmanager.com" crossorigin>

    <script>
            (function(h,o,t,j,a,r){
                h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
                h._hjSettings={hjid:1734219,hjsv:6};
                a=o.getElementsByTagName('head')[0];
                r=o.createElement('script');r.async=1;
                r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
                a.appendChild(r);
            })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');

            !function(f,b,e,v,n,t,s)
            {if(f.fbq)return;n=f.fbq=function()

            {n.callMethod? n.callMethod.apply(n,arguments):n.queue.push(arguments)}
            ;
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window,document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '1742666152724770'); 
            fbq('track', 'PageView');
            <?php if($head['id'] == '2983'){ // Поиск?>
            fbq('track', 'Search');
            <?php } 
            else if ($head['parentid'] === '23'){ //Внутренняя услуг?>
            <?php } else if ($head['parentid'] === '3044'){ //онлайн заказ?>
            fbq('track', 'InitiateCheckout');
            <?php } ?>
            <?php if ($content_type == 'content') {?>
            fbq('track', 'ViewContent',{
                content_ids: ['<?php echo $head['id']; ?>'],
                content_name: '<?php echo $title; ?>'
            });
            <?php } ?>

            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
            ga('create', 'UA-22853312-8', 'auto');
            ga('require', 'ringostat');
            ga('send', 'pageview');

            (function (d,s,u,e,p) {
                p=d.getElementsByTagName(s)[0],e=d.createElement(s),e.async=1,e.src=u,p.parentNode.insertBefore(e, p);
            })(document, 'script', 'https://script.ringostat.com/v4/ac/ac08d18fa936d504ace45a0f9540c41997b3060e.js');

            (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-WZC7BHV');

            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'GTM-WZC7BHV');

    </script>


    <?php if(isset($imageMain) && !empty($imageMain)) {?>
    <meta property="og:image" content="https://ua.unmomento.com.ua/images/files/<?php echo $imageMain['image']; ?>" />
    <?php } else {?>
    <meta property="og:image" content="https://ua.unmomento.com.ua/templates/img/unmomento06.jpg" />
    <?php } ?>

    <meta property="fb:app_id" content="419831541550049"/>
    <meta property="og:url" content="https://<?php echo $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']  ?>" />

    <?php content("meta")?>

    <?php if (strpos($_SERVER['REQUEST_URI'], 'stati')!==false){?>
        <meta name="robots" content="noindex">
    <?php }?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <meta name="google-site-verification" content="lwuPwtQXRiOrEz88ibv0yMMqoCfpNQIsbL8mYcdM78Y" />

<style><?php 
    $ft1 = filemtime(_DIR._TEMPLATE.'/build/css/style.css');
    $ft2 = filemtime(_DIR._TEMPLATE.'/build/css/style.min.css');
    
    if ( $ft2 < $ft1) 
        file_put_contents(_DIR._TEMPLATE.'/build/css/style.min.css', compressCSS(file_get_contents(_DIR._TEMPLATE.'/build/css/style.css')) );

    echo file_get_contents(_DIR._TEMPLATE.'/build/css/style.min.css'); 
    ?>/*.siteLoader{height:100vh;position:fixed;top:0;left:0;right:0;z-index:9999}.preloader-img{background-image:url(/templates/img/pre.svg);background-repeat:no-repeat;background-position:center;background-size:contain;position:absolute;width:75px;height:100px;top:calc(50% - 50px);left:calc(50% - 37px)}.preloader-circle{position:absolute;top:39px;left:calc(50% - 14px);width:30px;height:30px;border-radius:50%;overflow:hidden;-webkit-animation-name:rotation;-webkit-animation-duration:2s;-webkit-animation-iteration-count:infinite;-webkit-animation-timing-function:linear;-moz-animation-name:rotation;-moz-animation-duration:2s;-moz-animation-iteration-count:infinite;-moz-animation-timing-function:linear;-o-animation-name:rotation;-o-animation-duration:2s;-o-animation-iteration-count:infinite;-o-animation-timing-function:linear;animation-name:rotation;animation-duration:2s;animation-iteration-count:infinite;animation-timing-function:linear;background:rgba(69,215,255,.14);background:radial-gradient(circle at bottom right,rgba(69,215,255,.14) 0,rgba(69,215,255,.14) 45%,rgba(69,215,255 ,1) 100%);background:-webkit-radial-gradient(bottom right,circle,rgba(69,215,255,.14) 0,rgba(69,215,255 ,.14) 45%,rgba(69,215,255 ,1) 100%)}.preloader-circle::before{content:'';display:block;background:0 0;background:rgba(69,215,255,.14);background:-webkit-linear-gradient(left,rgba(69,215,255,0) 0,rgba(69,215,255,0) 50%,rgba(69,215,255,1) 100%);background:linear-gradient(to right,rgba(69,215,255,0) 0,rgba(69,215,255,0) 50%,rgba(69,215,255,1) 100%);height:50%}@-webkit-keyframes rotation{0%{-webkit-transform:rotate(0);-moz-transform:rotate(0);-o-transform:rotate(0);transform:rotate(0)}100%{-webkit-transform:rotate(360deg);-moz-transform:rotate(360deg);-o-transform:rotate(360deg);transform:rotate(360deg)}}@-moz-keyframes rotation{0%{-webkit-transform:rotate(0);-moz-transform:rotate(0);-o-transform:rotate(0);transform:rotate(0)}100%{-webkit-transform:rotate(360deg);-moz-transform:rotate(360deg);-o-transform:rotate(360deg);transform:rotate(360deg)}}@-o-keyframes rotation{0%{-webkit-transform:rotate(0);-moz-transform:rotate(0);-o-transform:rotate(0);transform:rotate(0)}100%{-webkit-transform:rotate(360deg);-moz-transform:rotate(360deg);-o-transform:rotate(360deg);transform:rotate(360deg)}}@keyframes rotation{0%{-webkit-transform:rotate(0);-moz-transform:rotate(0);-o-transform:rotate(0);transform:rotate(0)}100%{-webkit-transform:rotate(360deg);-moz-transform:rotate(720deg);-o-transform:rotate(360deg);transform:rotate(360deg)}}.DOMisLoaded .siteLoader{display:none}body .global-wrap{opacity:0}.DOMisLoaded .global-wrap{opacity:1}*/
</style>

<?php 
    $show_banner_by_ip = show_banner_by_ip();
    if ($show_banner_by_ip === true) 
        show_banner_append_ip();
?>
<script>
    window.show_banner_by_ip = <?php echo ($show_banner_by_ip ? 0 : 1); ?>;
</script>

</head>
<body class="<?php echo "$content_type-{$head['id']}";?>">
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WZC7BHV" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <noscript><img loading="lazy" height="1" width="1" src="https://www.facebook.com/tr?id=1742666152724770&ev=PageView&noscript=1"/></noscript>
    <noscript><div style="display:inline;"><img loading="lazy" height="1" width="1" style="border-style:none;" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/953300001/?value=0&amp;guid=ON&amp;script=0" alt="gapi"/></div></noscript>

    <!-- div class="siteLoader">
    <div class="preloader-img">
        <div class="preloader-circle"></div>
    </div>
    </div-->

<?php
$service_class =  ($head['parentid'] == '23')?'service-inner':'';
$search_class = ($head['parentid'] == '2890')?'padding-70':'';?>
<div class="global-wrap <?php echo $service_class.' '.$search_class;?>">

<?php include 'new_header.php';?>

<?php if ($head['parentid'] == '23'){?>
    <div class="aside-form-wrap formClose">
        <div class="fast-order-btn"><div class="fast-order-text">Швидке замовлення</div></div>
        <div class="aside-form-inner">
            <div class="aside-form-content">
                <div class="aside-form-title-wrap">
                    <div class="aside-form-title">
                        Швидке замовлення
                    </div>
                    <div class="aside-form-close">
                        +
                    </div>
                </div>
                <div class="aside-form-body">
                    <div id="lf44" class="aside-form-subtitle"></div>
                    <div class="aside-formblock">
                    <iframe id="_srframe" name="_srframe"  style="display:none;"></iframe>
                        <form id="service<?php echo $head['id']; ?>" method="post" target="_srframe"  action="https://ua.unmomento.com.ua/request.php?action=add&amp;id=8" target="_srframe">   
                        <input name="f44" id="f44" required="" type="hidden">
                            <div class="form_row">
                                <div class="form_label">ПІБ:<span>*</span></div>
                                <div class="form_input"><input name="f45" required="" type="text"></div>
                            </div>
                            <div class="form_row">
                                <div class="form_label">Контактний номер телефону:<span>*</span></div>
                                <div class="form_input">
                                    <input required name="f46" id="phone200" type="tel" placeholder="+380 XX XXX XX XX">
                                </div>
                            </div>
                            <div class="form_row">
                                <div class="form_label">Коментарі:</div>
                                <div class="form_input">
                                    <textarea name="f47"></textarea>
                                </div>
                            </div>
                            <div class="aside-formrow">
                                <input type="submit"  onclick="gtag('event', 'Click', {'event_category': 'Order'});" value="Відправити" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<? } 
else if ($head['parentid'] == '2890' || $head['parentid'] == '3078'){ ?>
    <div class="um-popup-overlay"></div>
    <div class="aside-form-wrap orderFromNewsPage formClose">
        <div class="aside-form-inner">
            <div class="aside-form-content">
                <div class="aside-form-title-wrap">
                    <div class="aside-form-title">
                        Зробити замовлення
                    </div>
                    <div class="aside-form-close">
                        +
                    </div>
                </div>
                <div class="aside-form-body ajaxFormWrap">
                    <div class="aside-formblock">
                        <form id="form_news_action_form" method="post" target="" action="">   
                            <div class="form_row">
                                <div class="form_label">ПІП:<span>*</span></div>
                                <div class="form_input"><input name="name" required="" type="text"></div>
                            </div>
                            <div class="form_row">
                                <div class="form_label">Контактний номер телефона:<span>*</span></div>
                                <div class="form_input">
                                    <input required name="phone" type="tel" id="phone300" placeholder="+380 XX XXX XX XX">
                                </div>
                            </div>
                            <div class="form_row">
                                <div class="form_label">Коментарі:</div>
                                <div class="form_input">
                                    <textarea name="comments"></textarea>
                                </div>
                            </div>
                            <div class="aside-formrow">
                                <input id="news_action_form" type="submit" value="Відправити" />
                            </div>
                        </form>
                    </div>
                    <div class="ajaxMessage"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="popup-form-wrap popup-300" data-id="getBonus100">
        <div class="popup-title">Одержати 100 грн бонус</div>
        <div class="popup-close">+</div>
        <form method="post" action="" id="Bonus100">    
            <div class="form_row">
                <div class="form_label">ПІБ:<span>*</span></div>
                <div class="form_input"><input id="name100" name="" required="" type="text"></div>
            </div>
            <div class="form_row">
                <div class="form_label">Контактний номер телефону:<span>*</span></div>
                <div class="form_input">
                    <input id="phone100" required name="" type="tel" placeholder="+380 XX XXX XX XX">
                </div>
            </div>
            <div class="form_row submit_row">
                <input type="submit" id="btn100" value="Відправити" />
            </div>
            <div class="form_row result_row">
                
            </div>
        </form>
    </div>
<?php } ?>

<div class="um-popups-wrap">
    <div class="um-popup-overlay"></div>

    <?php if($head['parentid'] ==='23' && $head['id'] !== 142){ //Страницы услуг, кроме страницы доставки ?>
    <div class="popup callback-popup ajaxFormWrap dostavkaPopup" data-popup="dostavkaPopup">
        <div class="popup-close">+</div>
        <div class="title">Викликати кур'єра зручно</div>
        <div class="um-styled-form">
            <form id="form_order_delivery2" method="post">
                <input name="action" type="hidden" value="order_delivery">
                <div class="form_row">
                    <div class="form_label">Ім'я:<span>*</span></div>
                    <div class="form_input"><input name='name' required type="text"></div>
                </div>
                <div class="form_row">
                    <div class="form_label">Контактний номер телефону:<span>*</span></div>
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
                    <input id="submit_order_delivery" type="submit" value="НАДІСЛАТИ">
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
    <?php } ?>

    <?php if($head['parentid'] ==='23' && $head['id'] !== 142){ //Страницы услуг, кроме страницы доставки ?>
    <div class="popup popup-300 popup-dostavka" data-popup="dostavkaForm">
        <div class="popup-close">+</div>
        <div class="styled-form">
            <form onsubmit="return false">
                <div class="form-row">
                    <div class="form-label">Ім'я:<span>*</span></div>
                    <div class="form-input"><input required type="text" id="name"></div>
                </div>
                <div class="form-row">
                    <div class="form-label">Контактний номер телефону:<span>*</span></div>
                    <div class="form-input">
                        <input required type="tel" placeholder="+380 XX XXX XX XX" id="phone">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-label">Дата/час</div>
                    <div class="form-input">
                        <input id="dataPicker" type="text" maxlength="45" size="45"/>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-label">Список речей</div>
                    <div class="select-wrap">
                        <div class="select-btn selectOpen">Оберіть зі списку</div>
                        <div class="hidden-select">
                            <div class="select-row">
                                <input type="radio" id="thing_1" name="stuff" value="Одяг, взуття, інші речі"  data-tovar="Одяг, взуття, інші речі"/>
                                <label for="thing_1">Одяг, взуття, інші речі</label>
                            </div>
                            <div class="select-row">
                                <input type="radio" id="thing_2" name="stuff" value="Килими" data-tovar="Килими"/>
                                <label for="thing_2">Килими</label>
                            </div>
                            <div class="select-row">
                                <input type="radio" id="thing_3" name="stuff" value="Штори та гардини"  data-tovar="Штори та гардини" />
                                <label for="thing_3">Штори та гардини</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-row submit-row">
                    <input type="submit" value="Відправити"  id ="DostavkaVeschey" />
                </div>
            </form>
            <div id ="message1"></div>
        </div>
    </div>
    <?php } ?>
    <?php if($head['parentid'] ==='23') { //Страницы услуг
    ?>
    <div class="popup popup-300 popup-service serviceForm ajaxFormWrap" data-popup="servicePrice">
        <div class="popup-close">+</div>
        <div class="um-styled-form">
            <form onsubmit="return false;" >
                <div class="input">
                    <input id = "name_" type="text" placeholder="Ваше ім'я">
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
                <input class="um-green-btn" id="SentOrderService" type="submit" value="Відправити">
                <?php $page_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";?>
                <span data-url="<?php echo $page_link; ?>"></span>
            </form>
            <div class="ajaxMessage"></div>
        </div>
    </div>
    <?php }
    if($head['id'] === '2983'){ //Страница цен
    ?>
    <div class="popup popup-300 popup-price ajaxFormWrap" data-popup="priceOrder">
        <div class="popup-close">+</div>
        <div class="um-styled-form">
            <form onsubmit="return false;" >
                <div class="input">
                    <input id = "name777" type="text" placeholder="Ваше ім'я">
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
                <input class="um-green-btn" id="SentOrderPrice" type="submit" value="Відправити">
                <?php $page_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";?>
                <span data-url="<?php echo $page_link; ?>"></span>
            </form>
            <div class="ajaxMessage"></div>
        </div>
    </div>
    <?php } ?>
</div>

<?php
if($head["urlname"] != "index")
{?>
<div class="container_bredcrams">
    <div class="main_content">
        <ul class="bredcrams"><?php echo get_path(); ?></ul>
    </div>
</div>
    <?
}
?>
<?php content(); ?>
<footer>
    <div class="main_content clear_after">
        <a class="logo">
            <img loading="lazy" src="/templates/img/footerLogo.png" alt="footer-img">
        </a>
        <ul class="menu_desk">
            <?php
                    $i = 0;
                    foreach ($menuarray as $link => $text)
                    {
                        $i++;
                        ?>
                        <li><a href="<?=$link?>"><?=$text?></a></li>
                        <?
                    }?>
        </ul>
        <div class="bottom_footer clearfix">
            <div class="content_addres">
                <?=html("footer-address")?><br>
                <a href="<?php echo _SITE;?>privacy-policy">ПОЛІТИКА КОНФІДЕНЦІЙНОСТІ</a>
            </div>
            <div class="icons_container clearfix">
                <a class="icons fb-icon" href="https://www.facebook.com/momento.un?ref=ts" target="_blank"></a>
                <a class="icons yt-icon" href="https://www.youtube.com/channel/UCepuB3YL9K2SfJRkz5EFqQA" target="_blank"></a>
                <?php/* <a class="icons vk-icon" href="https://vk.com/club24245435" target="_blank"></a> */?>
                <a class="icons ig-icon" href="https://www.instagram.com/unmomento.com.ua/" target="_blank"></a>
            </div>
            <div class="autor clearfix">
                СТВОРЕННЯ САЙТУ ТА ПРОСУВАННЯ САЙТУ&nbsp;-&nbsp;<a target="blank" rel="nofollow" class="white" href="http://skinny.kiev.ua/">&copy; SKINNY STUDIO <?php echo date('Y'); ?></a>
            </div>
        </div>
    </div>

    <a href="#popap-callback" id="popup__toggle" class="popap-btn"><div class="circlephone" style="transform-origin: center;"></div><div class="circle-fill" style="transform-origin: center;"></div><div class="img-circle" style="transform-origin: center;"><div class="img-circleblock" style="transform-origin: center;"></div></div></a>


    <div class="popap-shadow"></div>

    <div class="popap-wrap" id="popap-callback">
        <div class="close icon-close"></div>
        <div class="title">У Вас є питання? Ми Вам допоможемо!</div>
        <form onsubmit="return false">
            <div class="line">
                <input class="tel-mask" placeholder="+380 (xx) xxx-xx-xx" type="text" id="corphone">
            </div>
            <div class="line">
                <button type="submit" id="corp_phone">перездвоніть мені</button>
            </div>
        </form>
    </div>

</footer>
<div id="message"></div>
<?php include 'spritesvg.svg';?>
</div>
<?php include 'popups.php'; ?>

<style><?php echo file_get_contents(_DIR._TEMPLATE.'/css/font-awesome-4.7.0/css/font-awesome.min.css'); ?></style>

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" media="none" onload="if(media!='all')media='all'" >
<link rel="stylesheet" type="text/css" href="<?=_SITE?>templates/js/fancybox/jquery.fancybox.css" media="none" onload="if(media!='all')media='all'" />
<link rel="stylesheet" type="text/css" href="<?=_SITE?>templates/js/jquery.datetimepicker.css" media="none" onload="if(media!='all')media='all'" >


<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.1.2/jquery.bxslider.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.pack.js"></script>

<script src="/templates/js/jquery.datetimepicker.js"></script>
<script src="/templates/js/js.js?ver=<?php echo filemtime(_DIR.'templates/js/js.js'); ?>"></script>
<script src="/templates/js/ajaxjs.js?ver=<?php echo filemtime(_DIR.'templates/js/ajaxjs.js'); ?>"></script>

<script>

    $(document).ready(function() { // вся магия после загрузки страницы
        $("#Bonus100").submit(function(){ // перехватываем все при событии отправки
            var form = $(this); // запишем форму, чтобы потом не было проблем с this
            var name = $('#name100').val(); // подготавливаем данные
            var phone = $('#phone100').val(); // подготавливаем данные
            $.ajax({ // инициализируем ajax запрос
               type: 'POST', // отправляем в POST формате, можно GET
               url: 'sendmail.php', // путь до обработчика, у нас он лежит в той же папке
               data: 'name='+name+'&phone='+phone, // данные для отправки
               success: function(data){ // событие после удачного обращения к серверу и получения ответа
                    $('.result_row').html(data);
                    //setTimeout($('.result_row').html(''), 5000);
                 },
               error: function (xhr, ajaxOptions, thrownError) { // в случае неудачного завершения запроса к серверу
                    alert(xhr.status); // покажем ответ сервера
                    alert(thrownError); // и текст ошибки
                 } 
            });
            return false; // вырубаем стандартную отправку формы
        });
    });

    /* <![CDATA[ */
    var google_conversion_id = 953300001;
    var google_custom_params = window.google_tag_params;
    var google_remarketing_only = true;
    /* ]]> */

    $("#phone").mask("+38(099)999-99-99");
    $("#phone100").mask("+38(099)999-99-99");
    $("#phone200").mask("+38(099)999-99-99");
    $("#phone300").mask("+38(099)999-99-99");
    $('#DostavkaVeschey').click(function() {

        var phone = $('#phone').val();
        var name =$('#name').val();
        var data =$('#dataPicker').val();

        var OrderArray = new Array();
        $(".select-row input:checked").each(function(){
            console.log($(this).attr("data-tovar"));
            OrderArray.push({tovar:$(this).attr("data-tovar")});
        });

        if (phone && OrderArray.length>0 && data) {

            $.ajax({
                'type':    'POST',
                'url':      "../inc/dostavkaveschey.php",
                'data':    {
                    'phone' :        phone,
                    'name' :         name,
                    'datetime' :     data,
                    'orders':        OrderArray
                },
                'success': function (html) {

                    $('.um-popup-overlay').hide();
                    $('.um-popups-wrap').hide();
                    $('#message1').dialog({
                        modal: true,
                        title: "Повідомлення",
                        open: function() {
                            var text = '<p>'+html+'</p>';
                            $(this).html(text);
                        },
                        buttons: {
                            Ok: function() {
                                $( this ).dialog( "close" );
                            }
                        }
                    });
                    $('#phone').val('');
                    $('#name').val('');
                    $('#dataPicker').val('');
                },
                'error' : function (jqXHR, textStatus, errorThrown) {
                    console.log(jqXHR);
                    alert("AJAX Error!", "Error  SORRY (Error: " + textStatus + ", " + errorThrown + ")");
                }

            });
        }
    });

    $('#corphone').mask("+38(099)999-99-99");

    $('#corp_phone').click(function() {

        var phone = $('#corphone').val();

        if (phone) {

            $.ajax({
                'type':    'POST',
                'url':      "../inc/sentcontact.php",
                'data':    {
                    'phone' :        phone
                },
                'success': function (html) {

                    $('#message').dialog({
                        modal: true,
                        title: "Сообщение",
                        open: function() {
                            var text = '<p>'+html+'</p>';
                            $(this).html(text);
                        },
                        buttons: {
                            Ok: function() {
                                $( this ).dialog( "close" );
                            }
                        }
                    });
                    $('#corphone').val('');

                },
                'error' : function (jqXHR, textStatus, errorThrown) {
                    console.log(jqXHR);
                    alert("AJAX Error!", "Error  SORRY (Error: " + textStatus + ", " + errorThrown + ")");
                }

            });
        }
    });

    $('.popap-btn').click(function (event) {
        console.log(event);
        var hrefBtn = $(this).attr('href');
        var h = $(hrefBtn).height();
        $(hrefBtn).css({'marginTop':-(h + 27 + 15)/2});
        setTimeout(function () {
            $(hrefBtn).stop().fadeIn(500);
        }, 300);
        $(hrefBtn).find('input').val('').removeClass('error');
        $('.popap-shadow').stop().fadeIn(300);
        event.preventDefault();
    });
    $('.close').click(function(event){
        $(this).parent().stop().fadeOut(500);
        $('.popap-shadow').stop().fadeOut(300);
        event.preventDefault();
    });
    $(document).click(function(event) {
        if ($(event.target).closest(".popap-wrap, .popap-btn").length) return;
        $('.popap-wrap').css({'display':'none'});
        $('.popap-shadow').css({'display':'none'});
        event.stopPropagation();
    });

    setTimeout( function() {
        (function(){
            const script = document.createElement('script');
            script.src = 'https://www.google.com/recaptcha/api.js';
            document.head.append(script);

            const script2 = document.createElement('script');
            script2.src = 'https://www.googleadservices.com/pagead/conversion.js';
            document.head.append(script2);

        })();


        (function(){ var widget_id = 'ZAgogLxhNN';var d=document;var w=window;function l()

        { var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id ; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}
        if(d.readyState=='complete')

        {l();}
        else{if(w.attachEvent)

        {w.attachEvent('onload',l);}
        else

        {w.addEventListener('load',l,false);}
        }})();
    },5000
    );
</script>

</body>
</html>
