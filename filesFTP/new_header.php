<header class="header" style="display:none;">
    <div class="header-top">
        <div class="container">
            <div class="header-top__container">
                <div class="logo">
                    <a href="/"><img class="lazyload" data-src="/templates/img/logo_transparent.svg" alt="logo"" alt=""></a>
                </div>
                <div class="header-top__menu">
                    <div class="header-top__phones">
                        <?php if (!$detect->isMobile()) { ?>
                            <a onclick="gtag('event', 'Click', {'event_category': 'Order'});" class=""
                               href="tel:+380444952495">(044) 495-2-495</a>
                        <?php } else { ?>
                            <!--
                            <div class="corp-link-wrap mobile-corp-btn">
                                <a href="/uslugi/korporativnoe-obsluzhivanie.html">Корпоративне <br>обслуговування</a>
                            </div>
                            -->
                        <?php } ?>
                        <a onclick="gtag('event', 'Click', {'event_category': 'Order'});" class=""
                           href="tel:+380676262495">(067) 626-2-495</a>
                    </div>
                    <div class="header-top__socials">
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
                    <div class="header-top__lang">
                        <a href="https://unmomento.com.ua/" class="">RU</a>
                        <a href="https://ua.unmomento.com.ua/" class="active">UA</a>
                    </div>
                    <div class="header-top__btns">
                        <a href="/onlain-zakaz/" class="btn-cour">Викликати кур'єра</a>
                        <a href="https://ua.unmomento.com.ua/personal-account/" class="btn-cab">Кабінет</a>
                    </div>
                </div>

                <div class="header-burger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

            </div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="container">
            <div class="header-bottom__container">
                <div class="header-bottom__menu">
                    <ul>
<!--                     class="menu_desk wwwwwww"-->

                        <li><a class="active" href="/">Головна</a></li>
                        <?php
                        $i = 0;
                        foreach ($menuarray as $link => $text) {
                            $i++;
                            ?>
                            <li>
                                <? if ($i == 3) { ?>
                                    <span><?= $text ?></span>
                                <? } else { ?>

                                    <a  href="<?= $link ?>"><?= $text ?></a>
                                <? } ?>

                                <? if ($i == 3) { ?>
                                    <ul class="sub_menu clear_after ordered-submenu item-content" style="display: none">
                                        <?php
                                        $arr = dbQuery("SELECT id,url,name FROM content WHERE parentid = 23 AND ispublish = 1 ORDER BY showorder");
                                        $blacklist_arr = array(
                                            3401, 3198, 3199, 3200, 3201, 3202, 3203, 3204, 3205, 3206, 3207, 3208, 3209, 3210, 3211, 3212, 3213,
                                            3268, 3308, 3309, 3310, 3311, 3195, 3381, 3383, 3384, 3385, 3386,
                                            3411, 3412, 3413, 3414, 3415, 3416, 3417,
                                            3515, 3516, 3517, 3518, 3519,
                                        );

                                        foreach ($arr as $r) {
                                            if (!in_array((int)$r["id"], $blacklist_arr)) {
                                                ?>
                                            <li class="serviceID-<?php echo $r["id"]; ?>">
                                                <?php if ($r["id"] == 3016) { ?>
                                                    <a href="http://shop.umcleaning.kiev.ua" target="_blank"
                                                       rel="nofollow"><?= $r["name"] ?></a>
                                                <?php } else { ?>
                                                    <a href="<?= $r["url"] ?>"><?= $r["name"] ?></a>
                                                <?php } ?>
                                                </li><?
                                            }
                                        } ?>

                                    </ul>
                                <? } ?>

                            </li>
                            <?
                        } ?>
                    </ul>
                </div>
                <div class="header-bottom__search">
                    <div class="search-icon">
                        <img src="https:///www.uaum.ppa.kiev.ua/templates/build/img/src-i-1.svg" alt="">
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>

<header class="header" style="display: none">
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
                <?php if (!$detect->isMobile()) { ?>
                    <a onclick="gtag('event', 'Click', {'event_category': 'Order'});" class="phone new_padding"
                       href="tel:+380444952495">(044) <span>495-2-495</span></a>
                <?php } else { ?>
                    <!--
                    <div class="corp-link-wrap mobile-corp-btn">
                        <a href="/uslugi/korporativnoe-obsluzhivanie.html">Корпоративне <br>обслуговування</a>
                    </div>
                    -->
                <?php } ?>
                <a onclick="gtag('event', 'Click', {'event_category': 'Order'});" class="phone new_padding"
                   href="tel:+380676262495">(067) <span>626-2-495</span> </a>
                <a href="/tseny/" class="calculation">Розрахунок вартості</a>
                <a href="/onlain-zakaz/" class="online-order-btn">Викликати кур'єра</a>
                <a href="https://ua.unmomento.com.ua/personal-account/" class="cabinet">Кабінет</a>
                <div class="icons_container clearfix">
                    <a class="icons fb-icon" href="https://www.facebook.com/momento.un?ref=ts" target="_blank"></a>
                    <a class="icons yt-icon" href="https://www.youtube.com/channel/UCepuB3YL9K2SfJRkz5EFqQA"
                       target="_blank"></a>
                    <a class="icons ig-icon" href="https://www.instagram.com/unmomento.com.ua/" target="_blank"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container_menu">
        <div class="main_content clear_after ">
            <div style="display:none;" class="tech-works">На сайті ведуться технічні роботи, коректність цін уточнюйте у
                оператора.
            </div>
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
                        foreach ($menuarray as $link => $text) {
                            $i++;
                            ?>
                            <li>
                                <? if ($i == 3) { ?>
                                    <div class="tit"><?= $text ?></div>
                                <? } else { ?>
                                    <a href="<?= $link ?>"><?= $text ?></a>
                                <? } ?>

                                <? if ($i == 3) { ?>
                                    <ul class="sub_menu clear_after ordered-submenu item-content">
                                        <?php
                                        $arr = dbQuery("SELECT id,url,name FROM content WHERE parentid = 23 AND ispublish = 1 ORDER BY showorder");
                                        $blacklist_arr = array(
                                            3401, 3198, 3199, 3200, 3201, 3202, 3203, 3204, 3205, 3206, 3207, 3208, 3209, 3210, 3211, 3212, 3213,
                                            3268, 3308, 3309, 3310, 3311, 3195, 3381, 3383, 3384, 3385, 3386,
                                            3411, 3412, 3413, 3414, 3415, 3416, 3417,
                                            3515, 3516, 3517, 3518, 3519,
                                        );

                                        foreach ($arr as $r) {
                                            if (!in_array((int)$r["id"], $blacklist_arr)) {
                                                ?>
                                                <li class="serviceID-<?php echo $r["id"]; ?>">
                                                <?php if ($r["id"] == 3016) { ?>
                                                    <a href="http://shop.umcleaning.kiev.ua" target="_blank"
                                                       rel="nofollow"><?= $r["name"] ?></a>
                                                <?php } else { ?>
                                                    <a href="<?= $r["url"] ?>"><?= $r["name"] ?></a>
                                                <?php } ?>
                                                </li><?
                                            }
                                        } ?>

                                    </ul>
                                <? } ?>

                            </li>
                            <?
                        } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <?php if ($head["id"] == 3117 || $head["id"] == 3118) { ?>
        <a href="https://ua.unmomento.com.ua/shop/shopping-cart/" class="cart-icon-wrap">
            <div class="cart-icon-circle" style="background-image: url('/templates/img/shop/cart-icon.png')">
                <div class="cart-icon-count-circle cart_count"><?php echo(isset($_SESSION['cart_count']) ? $_SESSION['cart_count'] : 0) ?></div>
            </div>
        </a>
    <?php } ?>
</header>
<?php if (($head['parentid'] == '2890' || $head["urlname"] == "index")) { //Только на главной и на страницах новостей?>
    <div class="header-search">
        <div class="hs-wrap main_content">
            <div class="hs-title">Знайти послугу</div>
            <div class="search-form">
                <form method="get" id="sform" name="sform" action="/search-result/">
                    <input type="text" id="stext" name="stext" autocomplete="off" placeholder="Пошук послуги...">
                    <div class="searchsubmit">
                        <i class="fa fa-search"></i><input type="submit" class="menuupd_searchsubmit bluebutton"
                                                           value="">
                        Знайти послугу
                    </div>
                </form>
            </div>
            <span class="vfix"></span>
        </div>
    </div>
<?php } ?>