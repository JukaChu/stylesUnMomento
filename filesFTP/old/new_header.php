<header class="header">
    <div class="top_header clear_after ">
    <div class="soc-mob">
            <ul class="soc left">
                <li>
                    <a target="_blank" href="https://www.facebook.com/momento.un?ref=ts">
                        <img loading="lazy" src="/templates/img/icon-facebook.svg" alt=""/>
                    </a>
                </li>
                <li>
                    <a target="_blank" href="https://www.instagram.com/unmomento.com.ua/">
                        <img loading="lazy" src="/templates/img/icon-insta.svg" alt=""/>
                    </a>
                </li>
                <li>
                    <a target="_blank" href="https://www.youtube.com/channel/UCepuB3YL9K2SfJRkz5EFqQA">
                        <img loading="lazy" src="/templates/img/icon-youtube.svg" alt=""/>
                    </a>
                </li>
            </ul>
            <ul class="soc right">
                <li>
                    <a onclick="gtag('event', 'Click', {'event_category': 'Order'});" href="tel:+380676262495">
                        <img loading="lazy" src="/templates/img/icon-phone.svg" alt=""/>
                    </a>
                </li>
                <li>
                    <a href="http://m.me/momento.un">
                        <img loading="lazy" src="/templates/img/icon-f_mess.svg" alt=""/>
                    </a>
                </li>
                <li>
                    <a onclick="gtag('event', 'Click', {'event_category': 'Order'});" href="tel:+380676262495">
                        <img loading="lazy" src="/templates/img/icon-viber.svg" alt=""/>
                    </a>
                </li>
            </ul>
        </div>
        <div class="main_content clear_after">
            <div class="top-left-header">
                <div class="um-lang-wrap">
                    <a href="https://unmomento.com.ua/" class="um-lang">RU</a>
                    <a href="https://ua.unmomento.com.ua/" class="um-lang active">UA</a>
                </div>
                <div class="colored-links-wrap">
                    <div class="fran-link-wrap">
                        <a href="/franchayzing/o-franchayzinge.html">Франчайзинг</a>
                    </div>
                    <div class="corp-link-wrap">
                        <a href="/uslugi/korporativnoe-obsluzhivanie.html">Корпоративне обслуговування</a>
                    </div>
                </div>
            </div>
            <div class="description_header ">
                <?php if(!$detect->isMobile()){ ?>
                <a onclick="gtag('event', 'Click', {'event_category': 'Order'});" class="phone new_padding" href="tel:+380444952495">(044) <span>495-2-495</span></a>
                <?php } else { ?>
                <!--
                <div class="corp-link-wrap mobile-corp-btn">
                    <a href="/uslugi/korporativnoe-obsluzhivanie.html">Корпоративне <br>обслуговування</a>
                </div>
                -->
                <?php } ?>
                <a onclick="gtag('event', 'Click', {'event_category': 'Order'});" class="phone new_padding" href="tel:+380676262495">(067) <span>626-2-495</span> </a>
                <a href="/tseny/" class="calculation" >Розрахунок вартості</a>
                <a href="/onlain-zakaz/" class="online-order-btn">Викликати кур'єра</a>
                <a href="https://ua.unmomento.com.ua/personal-account/" class="cabinet">Кабінет</a>
                <div class="icons_container clearfix">
                    <a class="icons fb-icon" href="https://www.facebook.com/momento.un?ref=ts" target="_blank"></a>
                    <a class="icons yt-icon" href="https://www.youtube.com/channel/UCepuB3YL9K2SfJRkz5EFqQA" target="_blank"></a>
                    <a class="icons ig-icon" href="https://www.instagram.com/unmomento.com.ua/" target="_blank"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container_menu">
        <div class="main_content clear_after ">
            <div style="display:none;" class="tech-works">На сайті ведуться технічні роботи, коректність цін уточнюйте у оператора.</div>
            <div class="mobi_fons ">
                <a href="/" class="logo">
                    <img loading="lazy" src="/templates/img/logo_transparent.svg" alt="logo">
                </a>
                <div class="menuMain_mobile"></div>
            </div>
            <div class="container_mobile">
                <div class="scroll_menu">
                    <ul class="menu_desk wwwwwww">
                    <?php
                    $i = 0;
                    foreach ($menuarray as $link => $text)
                    {
                        $i++;
                        ?>
                        <li>
                            <? if($i==3) { ?>
                            <div class="tit"><?=$text?></div>
                            <? } else { ?>
                            <a href="<?=$link?>"><?=$text?></a>
                            <? } ?>

                            <? if($i==3) { ?>
                                <ul class="sub_menu clear_after ordered-submenu item-content">
                                    <?php
                                    $arr = dbQuery("SELECT id,url,name FROM content WHERE parentid = 23 AND ispublish = 1 ORDER BY showorder");
                                    $blacklist_arr = array(
                                        3401, 3198, 3199, 3200, 3201, 3202, 3203, 3204, 3205, 3206, 3207, 3208, 3209, 3210, 3211, 3212, 3213, 
                                        3268, 3308, 3309, 3310, 3311, 3195, 3381, 3383, 3384, 3385, 3386,
                                        3411, 3412, 3413, 3414, 3415, 3416, 3417,
                                        3515, 3516, 3517, 3518, 3519,
                                    );

                                    foreach($arr as $r)
                                    {
                                        if (!in_array((int)$r["id"], $blacklist_arr)) {
                                        ?><li class="serviceID-<?php echo $r["id"]; ?>">
                                            <?php if($r["id"] == 3016){ ?>
                                            <a href="http://shop.umcleaning.kiev.ua" target="_blank" rel="nofollow"><?=$r["name"]?></a>
                                            <?php } else { ?>
                                            <a href="<?=$r["url"]?>"><?=$r["name"]?></a>
                                            <?php } ?>
                                        </li><?
                                        }
                                    }?>

                                </ul>
                            <?}?>

                        </li>
                        <?
                    }?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <?php if ($head["id"] == 3117 || $head["id"] == 3118){?>
    <a href="https://ua.unmomento.com.ua/shop/shopping-cart/" class="cart-icon-wrap">
        <div class="cart-icon-circle" style="background-image: url('/templates/img/shop/cart-icon.png')">
            <div class="cart-icon-count-circle cart_count"><?php echo (isset($_SESSION['cart_count']) ? $_SESSION['cart_count'] : 0) ?></div>
        </div>
    </a>
    <?php } ?>
</header>
<?php if(($head['parentid'] == '2890'|| $head["urlname"] == "index")){ //Только на главной и на страницах новостей?>
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
<?php } ?>