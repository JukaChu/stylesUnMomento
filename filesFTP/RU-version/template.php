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

<style><?php echo file_get_contents(_DIR._TEMPLATE.'/css/font-awesome-4.7.0/css/font-awesome.min.css'); ?></style>
<?php 
    $show_banner_by_ip = show_banner_by_ip();
    if ($show_banner_by_ip === true) 
        show_banner_append_ip();
?>
<script>
    window.show_banner_by_ip = <?php echo ($show_banner_by_ip===false ? 0 : 1); ?>;
</script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!--    <link type="text/css" href="https:///www.uaum.ppa.kiev.ua/templates/build/newcss/main.min.css" rel="stylesheet"/>-->
    <link type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.2/css/swiper.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link type="text/css" href="<?php echo _TEMPL.'build/newcss/main.min.css'?>" rel="stylesheet"/>
</head>
<body class="<?php echo "$content_type-{$head['id']}";?>">
    <noscript><img loading="lazy" height="1" width="1" src="https://www.facebook.com/tr?id=1742666152724770&ev=PageView&noscript=1"/></noscript>
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WZC7BHV" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <noscript><div style="display:inline;"><img loading="lazy" height="1" width="1" style="border-style:none;" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/953300001/?value=0&amp;guid=ON&amp;script=0" alt="gapi"/></div></noscript>



    <div class="global-wrap">

    <?php  
        include 'popups.php'; 
        include 'new_header.php';
        if($head["urlname"] != "index"){
    ?>
            <section class="breadcrumbs-block">
                <div class="container">
                    <ul class="breadcrumbs-list"><?php echo get_path(); ?></ul>
                </div>
            </section>

        <?php } ?>

    <?php content(); ?>
        <footer class="footer">
            <div class="container">
                <div class="footer__container">
                    <div class="footer-logo">
                        <a href="/">
                            <img loading="lazy" src="/templates/img/footerLogo_ru.png"" alt="footer-img">
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
                            <a href="<?php echo _SITE;?>privacy-policy">ПОЛИТИКА КОНФИДЕНЦИАЛЬНОСТИ</a>
                        </div>

                    </div>
                </div>
            </div>
        </footer>


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

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.2/js/swiper.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="<?php echo _TEMPL.'build/js/scripts.min.js'?>"></script>
</body>
</html>