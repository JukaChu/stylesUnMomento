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

<?php 
    $show_banner_by_ip = show_banner_by_ip();
    if ($show_banner_by_ip === true) 
        show_banner_append_ip();
?>
<script>
    window.show_banner_by_ip = <?php echo ($show_banner_by_ip ? 0 : 1); ?>;
</script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<!--    <link type="text/css" href="https:///www.uaum.ppa.kiev.ua/templates/build/newcss/main.min.css" rel="stylesheet"/>-->
    <link type="text/css" href="<?php echo _TEMPL.'build/libs/swiper.min.css'?>" rel="stylesheet"/>
    <link type="text/css" href="<?php echo _TEMPL.'build/newcss/main.min.css'?>" rel="stylesheet"/>
</head>
<body class="<?php echo "$content_type-{$head['id']}";?>">
<!--<p>--><?php //echo (_DIR._TEMPLATE.'build/newcss/main.min.css')?><!--</p>-->
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
    <footer class="footer">
        <div class="container">
            <div class="footer__container">
                <div class="footer-logo">
                    <a href="/">
                        <img loading="lazy" src="/templates/img/footerLogo.png" alt="footer-img">
                    </a>
                </div>
                <div class="footer-menu">
                    <ul>
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
                </div>
                <div class="footer__side">

                    <div class="footer__socials">
                        <a class="ht-soc ht-soc--fb" href="https://www.facebook.com/momento.un?ref=ts" target="_blank">
                            <svg width="7" height="14" viewBox="0 0 7 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.73 3.1063H7V1.02859C6.38241 0.964509 5.7614 0.933401 5.14 0.935423C4.70879 0.914714 4.27787 0.980971 3.87667 1.12967C3.47548 1.27837 3.11345 1.506 2.81535 1.79702C2.51724 2.08804 2.29006 2.43558 2.14935 2.81591C2.00863 3.19624 1.95769 3.60038 2 4.00073V5.86415H0V8.14682H2V13.9793H4.5V8.14682H6.5L6.81 5.82688H4.53V4.23366C4.53 3.56283 4.72 3.1063 5.73 3.1063Z"/>
                            </svg>
                        </a>
                        <a class="ht-soc ht-soc--ins" href="https://www.instagram.com/unmomento.com.ua/" target="_blank">
                            <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.69 4.32312C15.6806 3.71506 15.5588 3.11307 15.33 2.54356C15.1328 2.04969 14.8183 1.60377 14.41 1.23917C14.0201 0.863764 13.5452 0.574114 13.02 0.391316C12.4057 0.175472 11.7564 0.058888 11.1 0.0465853C10.26 0 9.94999 0 7.83999 0C5.73 0 5.43 0 4.59 0.0465853C3.93738 0.055315 3.29125 0.168781 2.68 0.381999C2.14993 0.565707 1.67132 0.858741 1.28 1.23917C0.877078 1.60244 0.566197 2.04487 0.37 2.53424C0.138334 3.10658 0.0132045 3.71155 0 4.32312C0 5.10575 0 5.35731 0 7.35116C0 9.34501 0 9.60589 0.05 10.3885C0.0593696 10.9966 0.181152 11.5986 0.41 12.1681C0.611061 12.6601 0.925045 13.1053 1.33 13.4725C1.7199 13.8479 2.19476 14.1375 2.72 14.3203C3.33429 14.5362 3.98361 14.6527 4.64 14.6651C5.48 14.6651 5.75 14.6651 7.89 14.6651C10.03 14.6651 10.3 14.6651 11.15 14.6651C11.8031 14.6528 12.4492 14.5362 13.06 14.3203C13.5859 14.1332 14.0635 13.8448 14.4616 13.4739C14.8596 13.1031 15.1692 12.6581 15.37 12.1681C15.598 11.598 15.723 10.9967 15.74 10.3885C15.74 9.60589 15.74 9.35433 15.74 7.35116C15.74 5.34799 15.73 5.10575 15.69 4.32312ZM14.27 10.3326C14.2681 10.7974 14.1766 11.2582 14 11.6929C13.8706 12.0116 13.6699 12.301 13.4113 12.542C13.1527 12.7829 12.842 12.9699 12.5 13.0905C12.0331 13.2539 11.5388 13.339 11.04 13.342C10.2 13.342 9.94999 13.342 7.85 13.342C5.75 13.342 5.49 13.342 4.66 13.342C4.15788 13.3399 3.66014 13.2548 3.19 13.0905C2.85028 12.9711 2.54299 12.7834 2.29 12.5408C2.02729 12.3032 1.8256 12.0133 1.7 11.6929C1.52233 11.2585 1.43084 10.7975 1.43 10.3326C1.43 9.5593 1.38 9.32638 1.38 7.36048C1.38 5.39458 1.38 5.16165 1.43 4.38833C1.43084 3.92341 1.52233 3.4625 1.7 3.02804C1.828 2.70874 2.02937 2.41937 2.29 2.18019C2.54849 1.93939 2.85856 1.75208 3.2 1.63049C3.6663 1.46495 4.161 1.37971 4.66 1.37892C5.49 1.37892 5.74 1.33234 7.85 1.33234C9.95999 1.33234 10.21 1.33234 11.04 1.37892C11.539 1.37971 12.0337 1.46495 12.5 1.63049C12.8439 1.74751 13.155 1.93542 13.41 2.18019C13.6684 2.42103 13.8695 2.70993 14 3.02804C14.1777 3.4625 14.2691 3.92341 14.27 4.38833C14.27 5.16165 14.27 5.39458 14.27 7.36048C14.27 9.32638 14.31 9.54999 14.27 10.3326Z"/>
                                <path d="M7.84 3.57776C7.03879 3.58695 6.25841 3.81683 5.59715 4.23844C4.93588 4.66006 4.42331 5.25455 4.12397 5.94705C3.82463 6.63955 3.75192 7.3991 3.91498 8.13002C4.07805 8.86095 4.46961 9.53058 5.04035 10.0546C5.61109 10.5786 6.33548 10.9335 7.1223 11.0747C7.90912 11.2158 8.72318 11.1369 9.46196 10.8479C10.2007 10.5588 10.8312 10.0726 11.2739 9.45034C11.7167 8.8281 11.9519 8.09771 11.95 7.35116C11.9487 6.85125 11.8411 6.35653 11.6334 5.89561C11.4256 5.43468 11.1219 5.01669 10.7397 4.66581C10.3575 4.31492 9.90445 4.0381 9.40674 3.85134C8.90903 3.66459 8.37652 3.5716 7.84 3.57776ZM7.84 9.81087C7.31786 9.81087 6.80745 9.66661 6.3733 9.39633C5.93915 9.12606 5.60078 8.7419 5.40096 8.29245C5.20115 7.843 5.14887 7.34844 5.25073 6.8713C5.3526 6.39416 5.60403 5.95589 5.97324 5.61189C6.34245 5.2679 6.81286 5.03363 7.32497 4.93872C7.83708 4.84382 8.36789 4.89253 8.85029 5.0787C9.33268 5.26486 9.745 5.58013 10.0351 5.98463C10.3252 6.38912 10.48 6.86468 10.48 7.35116C10.48 8.00352 10.2019 8.62915 9.70676 9.09044C9.21167 9.55172 8.54017 9.81087 7.84 9.81087Z"/>
                                <path d="M13.01 3.42868C13.01 3.61296 12.9514 3.79309 12.8415 3.94631C12.7316 4.09953 12.5754 4.21895 12.3927 4.28947C12.21 4.35999 12.0089 4.37844 11.8149 4.34249C11.6209 4.30654 11.4428 4.2178 11.3029 4.0875C11.1631 3.9572 11.0678 3.79118 11.0292 3.61045C10.9906 3.42972 11.0104 3.24238 11.0861 3.07214C11.1618 2.90189 11.29 2.75638 11.4544 2.654C11.6189 2.55162 11.8122 2.49698 12.01 2.49698C12.2752 2.49698 12.5296 2.59514 12.7171 2.76987C12.9047 2.9446 13.01 3.18158 13.01 3.42868Z"/>
                            </svg>
                        </a>
                        <a class="ht-soc ht-soc--yt" href="https://www.youtube.com/channel/UCepuB3YL9K2SfJRkz5EFqQA"
                           target="_blank">
                            <svg width="21" height="15" viewBox="0 0 21 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.575 14.1643C8.12738 14.1861 5.68123 14.0459 3.25495 13.745C2.73874 13.6206 2.26743 13.3704 1.88953 13.0199C1.51164 12.6695 1.24082 12.2315 1.10494 11.7511C0.833844 10.3716 0.71323 8.96997 0.744945 7.56777C0.713857 6.15324 0.834455 4.73935 1.10494 3.34715C1.24843 2.87081 1.52043 2.43663 1.89503 2.08598C2.26964 1.73533 2.73437 1.47988 3.24495 1.34398C5.67176 1.04901 8.11769 0.91203 10.565 0.934027C13.0159 0.911657 15.4654 1.05177 17.895 1.35329C18.4075 1.48054 18.8746 1.7321 19.2488 2.08236C19.623 2.43262 19.8908 2.86904 20.025 3.34715C20.3069 4.74423 20.4276 6.1654 20.385 7.58641C20.4218 8.98565 20.3011 10.3846 20.025 11.7605C19.8899 12.2397 19.6206 12.6769 19.2446 13.0272C18.8686 13.3776 18.3993 13.6285 17.885 13.7543C15.4575 14.0416 13.0119 14.1755 10.565 14.1549L10.575 14.1643ZM2.59495 3.72915C2.35797 4.99626 2.25414 6.28188 2.28495 7.56777C2.24938 8.84451 2.35324 10.1213 2.59495 11.3785C2.66575 11.5988 2.7942 11.7993 2.96875 11.9619C3.14329 12.1245 3.35847 12.2442 3.59495 12.3102C5.89357 12.5769 8.20865 12.7014 10.525 12.6828C12.841 12.7045 15.1561 12.5831 17.455 12.3195C17.691 12.2528 17.9058 12.1328 18.0802 11.9703C18.2546 11.8078 18.3834 11.6077 18.455 11.3878C18.6909 10.1331 18.7947 8.85991 18.765 7.58641C18.8344 6.29735 18.7641 5.00504 18.555 3.72915C18.4871 3.49322 18.3532 3.27833 18.167 3.10644C17.9807 2.93455 17.7488 2.81184 17.495 2.75085C15.2002 2.47887 12.8881 2.35435 10.575 2.37817C8.2592 2.3581 5.94446 2.47636 3.64495 2.73222C3.39283 2.80049 3.16381 2.92806 2.97992 3.10265C2.79603 3.27725 2.66345 3.493 2.59495 3.72915ZM8.61495 10.4467V4.66085L13.985 7.54914L8.61495 10.4467Z"/>
                            </svg>

                        </a>
                    </div>
                    <div class="footer__contacts">
                        <div class="footer__address">
                            <p><?=html("footer-address")?></p>
                        </div>
                        <a href="<?php echo _SITE;?>privacy-policy">ПОЛІТИКА КОНФІДЕНЦІЙНОСТІ</a>
                    </div>

                </div>
            </div>
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

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js"></script>

<script src="<?php echo _TEMPL.'build/libs/swiper.min.js'?>"></script>
<script src="<?php echo _TEMPL.'build/js/scripts.min.js'?>"></script>

</body>
</html>
