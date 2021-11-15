<?php require_once 'mobile-detect.php'; $detect = new Mobile_Detect; ?><!DOCTYPE HTML>
<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <base href="<?=_SITE?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="<?=_SITE?>favicon.png" />
    <link rel="shortcut icon" type="image/png" href="<?=_SITE?>favicon.png" />

    <link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin>
    <link rel="preconnect" href="https://www.googletagmanager.com" crossorigin>
    <link rel="preconnect" href="https://www.google.com" crossorigin>
    <link rel="preconnect" href="https://www.google-analytics.com" crossorigin>
    <link rel="preconnect" href="https://www.googleadservices.com" crossorigin>
    <link rel="preconnect" href="https://googleads.g.doubleclick.net" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://www.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>
    <link rel="preconnect" href="https://mc.yandex.ru" crossorigin>


    <script>

        (function(h,o,t,j,a,r){
            h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
            h._hjSettings={hjid:1734214,hjsv:6};
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

        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-WZC7BHV');

         window.dataLayer = window.dataLayer || [];
         function gtag(){dataLayer.push(arguments);}
         gtag('js', new Date());

         gtag('config', 'GTM-WZC7BHV');

        (function (d,s,u,e,p) {
            p=d.getElementsByTagName(s)[0],e=d.createElement(s),e.async=1,e.src=u,p.parentNode.insertBefore(e, p);
        })(document, 'script', 'https://script.ringostat.com/v4/ac/ac08d18fa936d504ace45a0f9540c41997b3060e.js');

         (function(){
             const script = document.createElement('script');
             script.src = 'https://cdn.sendpulse.com/9dae6d62c816560a842268bde2cd317d/js/push/5c1a3c0122799d6fea367865af51e574_0.js';
             script.async = '';script.defer = '';
             document.head.append(script);
         })();


    </script>

    <?php content("meta")?>

    <?php if(isset($imageMain) && !empty($imageMain)) {?>
    <meta property="og:image" content="https://unmomento.com.ua/images/files/<?php echo $imageMain['image']; ?>" />
    <?php } else {?>
    <meta property="og:image" content="https://unmomento.com.ua/templates/img/unmomento06.jpg" />
    <?php } ?>
    <meta property="fb:app_id" content="419831541550049"/>
    <meta property="og:url" content="https://<?php echo $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']  ?>" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <meta name="google-site-verification" content="lwuPwtQXRiOrEz88ibv0yMMqoCfpNQIsbL8mYcdM78Y" />

    <?php if($_GET['page']){?>
        <meta name="robots" content="noindex, follow" />
    <?}?>
    <?php if(strpos($_SERVER['REQUEST_URI'], 'show=') !== false){?>
        <meta name="robots" content="noindex, follow" />
    <?}?>
    <?php if (strpos($_SERVER['REQUEST_URI'], 'stati/hranenie-meha-i-mehovyh-izdelii_74')!==false){?>
        <link rel="canonical" href="https://unmomento.com.ua/stati/_74/" />
    <?php }?>

    <?php if (strpos($_SERVER['REQUEST_URI'], 'stati/stirka-verhnei-odezhdy-pravila-uhoda_72')!==false){?>
        <link rel="canonical" href="https://unmomento.com.ua/stati/_72/" />
    <?php }?>

    <?php if (strpos($_SERVER['REQUEST_URI'], 'stati/chistka-pjaten-na-kovre-sekrety-yeffektivnogo-udalenija-zagrjaznenii_71')!==false){?>
        <link rel="canonical" href="https://unmomento.com.ua/stati/_71/" />
    <?php }?>

    <?php if (strpos($_SERVER['REQUEST_URI'], 'stati/chistka-odezhdy-chto-delat-kogda-pojavilos-pjatno_55')!==false){?>
        <link rel="canonical" href="https://unmomento.com.ua/stati/_55/" />
    <?php }?>
    <?php if (strpos($_SERVER['REQUEST_URI'], 'stati/himchistka-detskoi-odezhdy_33')!==false){?>
        <link rel="canonical" href="https://unmomento.com.ua/stati/_33/" />
    <?php }?>
    <?php if (strpos($_SERVER['REQUEST_URI'], 'stati/remont-odezhdy_51')!==false){?>
        <link rel="canonical" href="https://unmomento.com.ua/stati/_51/" />
    <?php }?>
    <?php if (strpos($_SERVER['REQUEST_URI'], 'stati/vstrechaite-holoda-pravilno_69')!==false){?>
        <link rel="canonical" href="https://unmomento.com.ua/stati/_69/" />
    <?php }?>
    <?php if (strpos($_SERVER['REQUEST_URI'], 'stati/masterskaja-po-remontu-odezhdy-chto-nuzhno-vzjat-na-zametku_47')!==false){?>
        <link rel="canonical" href="https://unmomento.com.ua/stati/_47/" />
    <?php }?>
    <?php if (strpos($_SERVER['REQUEST_URI'], 'stati/kak-pravilno-uhazhivat-za-sumkami-iz-kozhi_84')!==false){?>
        <link rel="canonical" href="https://unmomento.com.ua/stati/_84/" />
    <?php }?>

    <?php if (strpos($_SERVER['REQUEST_URI'], 'stati/tehnologija-chistki-kozhanyh-veshei-pochemu-tak-dolgo_17')!==false){?>
        <link rel="canonical" href="https://unmomento.com.ua/stati/_17/" />
    <?php }?>

    <?php if (strpos($_SERVER['REQUEST_URI'], 'stati/tufli-chistye-nuzhny-tufli-celye-vazhny_76')!==false){?>
        <link rel="canonical" href="https://unmomento.com.ua/stati/_76/" />
    <?php }?>
    <?php if (strpos($_SERVER['REQUEST_URI'], 'stati/kak-predotvratit-pojavlenie-neprijatnogo-zapaha-obuvi_18')!==false){?>
        <link rel="canonical" href="https://unmomento.com.ua/stati/_18/" />
    <?php }?>

    <?php if (strpos($_SERVER['REQUEST_URI'], 'stati/kak-uhazhivat-za-belymi-krossovkami_89')!==false){?>
        <link rel="canonical" href="https://unmomento.com.ua/stati/_89/" />
    <?php }?>
    <?php if (strpos($_SERVER['REQUEST_URI'], 'stati/znaete-li-vy-chto-skryvaetsja-v-vashei-mjagkoi-mebeli-i-matrasah-i-chto-mozhet-stat-prichinoi-mnogih-zabolevanii-v-vashei-seme_86')!==false){?>
        <link rel="canonical" href="https://unmomento.com.ua/stati/_86/" />
    <?php }?>
    <?php if (strpos($_SERVER['REQUEST_URI'], 'stati/kak-prodlit-svezhest-belja-v-dva-raza_53')!==false){?>
        <link rel="canonical" href="https://unmomento.com.ua/stati/_53/" />
    <?php }?>
    <?php if (strpos($_SERVER['REQUEST_URI'], 'stati/delikatnaja-himchistka-kovrov_25')!==false){?>
        <link rel="canonical" href="https://unmomento.com.ua/stati/_25/" />
    <?php }?>
    <?php if (strpos($_SERVER['REQUEST_URI'], 'stati/himchistka-kovrov-i-kovrovyh-pokrytii-sposoby-i-specifika_35')!==false){?>
        <link rel="canonical" href="https://unmomento.com.ua/stati/_35/" />
    <?php }?>
    <?php if (strpos($_SERVER['REQUEST_URI'], 'stati/chistka-kovrov_52')!==false){?>
        <link rel="canonical" href="https://unmomento.com.ua/stati/_52/" />
    <?php }?>
    <?php if (strpos($_SERVER['REQUEST_URI'], 'stati/chto-vazhno-znat-ob-uhode-za-detskoi-odezhdoi_70')!==false){?>
        <link rel="canonical" href="https://unmomento.com.ua/stati/_70/" />
    <?php }?>
    <?php if (strpos($_SERVER['REQUEST_URI'], 'stati/professionalnaja-chistka-igrushek-vybor-zabotlivyh-mam_50')!==false){?>
        <link rel="canonical" href="https://unmomento.com.ua/stati/_50/" />
    <?php }?>
    <?php if (strpos($_SERVER['REQUEST_URI'], 'stati/glazhenie-odezhdy-vyhod-vsegda-est_77')!==false){?>
        <link rel="canonical" href="https://unmomento.com.ua/stati/_77/" />
    <?php }?>

    <?php if (strpos($_SERVER['REQUEST_URI'], 'stati/glazhka-odezhdy-roskosh-ili-neobhodimost_54')!==false){?>
        <link rel="canonical" href="https://unmomento.com.ua/stati/_54/" />
    <?php }?>

    <?php if (strpos($_SERVER['REQUEST_URI'], 'stati/kak-vyvesti-pjatno-na-dzhinsah_46')!==false){?>
        <link rel="canonical" href="https://unmomento.com.ua/stati/_46/" />
    <?php }?>

    <?php if (strpos($_SERVER['REQUEST_URI'], 'stati/vyvedenie-zhirnyh-pjaten-odezhdy-glavnoe-bez-paniki-est-reshenie_48')!==false){?>
        <link rel="canonical" href="https://unmomento.com.ua/stati/_48/" />
    <?php }?>

    <?php if (strpos($_SERVER['REQUEST_URI'], 'stati/kak-vyvesti-pjatno_44')!==false){?>
        <link rel="canonical" href="https://unmomento.com.ua/stati/_44/" />
    <?php }?>

    <?php if (strpos($_SERVER['REQUEST_URI'], 'stati/krasivye-shtory-chistye-shtory_39')!==false){?>
        <link rel="canonical" href="https://unmomento.com.ua/stati/_39/" />
    <?php }?>

    <?php if (strpos($_SERVER['REQUEST_URI'], 'stati/stirka-i-chistka-shtor-zametka-dlja-lenivyh_49')!==false){?>
        <link rel="canonical" href="https://unmomento.com.ua/stati/_49/" />
    <?php }?>

    <?php if (strpos($_SERVER['REQUEST_URI'], 'stati/professionalnaja-chistka-shtor-zalog-vashego-uyuta-i-zdorovja_75')!==false){?>
        <link rel="canonical" href="https://unmomento.com.ua/stati/_75/" />
    <?php }?>

    <?php if (strpos($_SERVER['REQUEST_URI'], 'stati/kak-pravilno-hranit-mehovye-veshi_15')!==false){?>
        <link rel="canonical" href="https://unmomento.com.ua/stati/_15/" />
    <?php }?>

    <?php if (strpos($_SERVER['REQUEST_URI'], 'stati/zachem-nuzhna-himchistka_56')!==false){?>
        <link rel="canonical" href="https://unmomento.com.ua/stati/_56/" />
    <?php }?>

    <?php if (strpos($_SERVER['REQUEST_URI'], 'stati/laifhaki-dlja-vashei-sportivnoi-odezhdy_68')!==false){?>
        <link rel="canonical" href="https://unmomento.com.ua/stati/_68/" />
    <?php }?>

    <?php if (strpos($_SERVER['REQUEST_URI'], 'stati/himchistka-shuby-sposob-sohranit-svoe-sokrovishe_79')!==false){?>
        <link rel="canonical" href="https://unmomento.com.ua/stati/_79/" />
    <?php }?>

    <?php if (strpos($_SERVER['REQUEST_URI'], 'stati/gotov-sani-letom-ili-chistim-shubki-dlja-budushei-zimy_81')!==false){?>
        <link rel="canonical" href="https://unmomento.com.ua/stati/_81/" />
    <?php }?>

    <?php if (strpos($_SERVER['REQUEST_URI'], 'stati/blesk-i-krasota-vashei-shuby-vsegda_82')!==false){?>
        <link rel="canonical" href="https://unmomento.com.ua/stati/_82/" />
    <?php }?>

    <?php if (strpos($_SERVER['REQUEST_URI'], 'stati/gadaem-po-tkanjam-ili-kakuyu-bluzu-vybrat_85')!==false){?>
        <link rel="canonical" href="https://unmomento.com.ua/stati/_85/" />
    <?php }?>

<style>
    <?php 
    $ft1 = filemtime(_DIR._TEMPLATE.'/build/css/style.css');
    $ft2 = filemtime(_DIR._TEMPLATE.'/build/css/style.min.css');
    
    if ( $ft2 < $ft1) 
        file_put_contents(_DIR._TEMPLATE.'/build/css/style.min.css', compressCSS(file_get_contents(_DIR._TEMPLATE.'/build/css/style.css')) );

    echo file_get_contents(_DIR._TEMPLATE.'/build/css/style.min.css'); 
    ?>

</style>
<style><?php echo file_get_contents(_DIR._TEMPLATE.'/css/font-awesome-4.7.0/css/font-awesome.min.css'); ?></style>
<?php 
    $show_banner_by_ip = show_banner_by_ip();
    if ($show_banner_by_ip === true) 
        show_banner_append_ip();
?>
<script>
    window.show_banner_by_ip = <?php echo ($show_banner_by_ip===false ? 0 : 1); ?>;
</script>
</head>
<body class="<?php echo "$content_type-{$head['id']}";?>">
    <noscript><img loading="lazy" height="1" width="1" src="https://www.facebook.com/tr?id=1742666152724770&ev=PageView&noscript=1"/></noscript>
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WZC7BHV" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <noscript><div style="display:inline;"><img loading="lazy" height="1" width="1" style="border-style:none;" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/953300001/?value=0&amp;guid=ON&amp;script=0" alt="gapi"/></div></noscript>

    <?php
    $service_class =  ($head['parentid'] == '23')?'service-inner':'';
    $search_class = ($head['parentid'] == '2890')?'padding-70':'';
    ?>

    <div class="global-wrap <?php echo $service_class.' '.$search_class;?>">

    <?php  
        include 'popups.php'; 
        include 'new_header.php';
        if($head["urlname"] != "index"){
    ?>
    <div class="container_bredcrams">
        <div class="main_content">
            <ul class="bredcrams"><?php echo get_path(); ?></ul>
        </div>
    </div>
    <?php } ?>

    <?php content(); ?>

<footer>
    <div class="main_content clear_after">
        <a class="logo">
            <img loading="lazy" src="/templates/img/footerLogo_ru.png" alt="footer-img">
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
                <a href="<?php echo _SITE;?>privacy-policy">ПОЛИТИКА КОНФИДЕНЦИАЛЬНОСТИ</a>
            </div>
            <div class="icons_container clearfix">
                <a class="icons fb-icon" href="https://www.facebook.com/momento.un?ref=ts" target="_blank"></a>
                <a class="icons yt-icon" href="https://www.youtube.com/channel/UCepuB3YL9K2SfJRkz5EFqQA" target="_blank"></a>
                <!--a class="icons yt-icon" href="https://www.youtube.com/channel/UCepuB3YL9K2SfJRkz5EFqQA" target="_blank"></a-->
                <a class="icons ig-icon" href="https://www.instagram.com/unmomento.com.ua/" target="_blank"></a>
            </div>
            <div class="autor clearfix">
                СОЗДАНИЕ САЙТА И ПРОДВИЖЕНИЕ САЙТА&nbsp;-&nbsp;<a target="blank" rel="nofollow" class="white" href="http://skinny.kiev.ua/">&copy; SKINNY STUDIO <?php echo date('Y'); ?></a>
            </div>
        </div>
    </div>
    <a href="#popap-callback" id="popup__toggle"  class="popap-btn showPopup" data-show="popapCallback"><div class="circlephone" style="transform-origin: center;"></div><div class="circle-fill" style="transform-origin: center;"></div><div class="img-circle" style="transform-origin: center;"><div class="img-circleblock" style="transform-origin: center;"></div></div></a>
</footer>

<div class="social-messenger-wrap">
    <div class="social-messenger fb-messanger">
        <a href="http://m.me/momento.un" target="_blank">
            <svg class="svgfbmessanger">
                <use xlink:href="#fbmessanger"></use>
            </svg>
        </a>
    </div>
    <div class="social-messenger viber-messanger">
        <a href="viber://chat?number=0676262495">
            <svg class="vibermessanger">
                <use xlink:href="#vibermessanger"></use>
            </svg>
        </a>
    </div>
</div>
<div id="message"></div>
<?php include 'spritesvg.svg';?>

</div>

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" media="none" onload="if(media!='all')media='all'" >
<link rel="stylesheet" type="text/css" href="<?=_SITE?>templates/js/fancybox/jquery.fancybox.css" media="none" onload="if(media!='all')media='all'" />
<link rel="stylesheet" type="text/css" href="<?=_SITE?>templates/js/jquery.datetimepicker.css" media="none" onload="if(media!='all')media='all'" >

<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.pack.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.1.2/jquery.bxslider.min.js" defer></script>

<script src="/templates/js/jquery.datetimepicker.js" defer></script>
<script src="/templates/js/js.js?ver=<?php echo filemtime(_DIR.'templates/js/js.js'); ?>" defer></script>

  <script>
        setTimeout( function() {
            (function(){
                const script = document.createElement('script');
                script.src = 'https://www.google.com/recaptcha/api.js';
                document.head.append(script);

                const script2 = document.createElement('script');
                script2.src = 'https://www.googleadservices.com/pagead/conversion.js';
                document.head.append(script2);

            })();

            (function(){ var widget_id = 'RwPDEOpPAQ';var d=document;var w=window;function l()
            
            { var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id ; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}
            if(d.readyState=='complete')
            
            {l();}
            else{if(w.attachEvent)
            
            {w.attachEvent('onload',l);}
            else
            
            {w.addEventListener('load',l,false);}
            }})();
        }, 5000
        );
  </script>
</body>
</html>