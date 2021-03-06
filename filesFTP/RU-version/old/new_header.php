<header class="header">
    <div class="top_header clear_after ">
        <div class="soc-mob">
            <ul class="soc left">
                <li>
                    <a target="_blank" href="https://www.facebook.com/momento.un?ref=ts">
                        <img src="/templates/img/icon-facebook.svg" alt=""/>
                    </a>
                </li>
                <li>
                    <a target="_blank" href="https://www.instagram.com/unmomento.com.ua/">
                        <img src="/templates/img/icon-insta.svg" alt=""/>
                    </a>
                </li>
                <li>
                    <a target="_blank" href="https://www.youtube.com/channel/UCepuB3YL9K2SfJRkz5EFqQA">
                        <img src="/templates/img/icon-youtube.svg" alt=""/>
                    </a>
                </li>
            </ul>
            <ul class="soc right">
                <li>
                    <a onclick="gtag('event', 'Click', {'event_category': 'Order'});" href="tel:+380676262495">
                        <img src="/templates/img/icon-phone.svg" alt=""/>
                    </a>
                </li>
                <li>
                    <a href="http://m.me/momento.un">
                        <img src="/templates/img/icon-f_mess.svg" alt=""/>
                    </a>
                </li>
                <li>
                    <a onclick="gtag('event', 'Click', {'event_category': 'Order'});" href="tel:+380676262495">
                        <img src="/templates/img/icon-viber.svg" alt=""/>
                    </a>
                </li>
            </ul>
        </div>
        
        <div class="main_content clear_after">
            <div class="top-left-header">
                <div class="um-lang-wrap">
                    <a href="https://unmomento.com.ua/" class="um-lang active">RU</a>
                    <a href="https://ua.unmomento.com.ua/" class="um-lang">UA</a>
                </div>
                <div class="colored-links-wrap">
                    <div class="fran-link-wrap">
                        <a href="/franchayzing/o-franchayzinge.html">??????????????????????</a>
                    </div>
                    <div class="corp-link-wrap">
                        <a href="/uslugi/korporativnoe-obsluzhivanie.html">?????????????????????????? ????????????????????????</a>
                    </div>
                </div>
                
                
                
                
                
            </div>
            <div class="description_header ">
                <?php if(!$detect->isMobile()){ ?>
                <a onclick="gtag('event', 'Click', {'event_category': 'Order'});" class="phone new_padding" href="tel:+380444952495">(044) <span>495-2-495</span></a>
                <?php } else { ?>
                <!--
                <div class="corp-link-wrap mobile-corp-btn">
                    <a href="/uslugi/korporativnoe-obsluzhivanie.html">?????????????????????????? <br>????????????????????????</a>
                </div>
                -->
                <?php } ?>
                <a onclick="gtag('event', 'Click', {'event_category': 'Order'});" class="phone new_padding" href="tel:+380676262495">(067) <span>626-2-495</span> </a>
                <a href="/tseny/" class="calculation" >???????????? ??????????????????</a>
                <a href="/onlain-zakaz/" class="online-order-btn">?????????????? ??????????????</a>
                <a href="https://unmomento.com.ua/personal-account/" class="cabinet">??????????????</a>
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
            <div style="display:none;" class="tech-works">???? ?????????? ?????????????? ?????????????????????? ????????????, ???????????????????????? ?????? ?????????????????????????? ?? ??????????????????.</div>
            <div class="mobi_fons ">
                <a href="/" class="logo">
                    <img src="/templates/img/logo_transparent.svg" alt="logo">
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
                            <div class="tit" href="<?=$link?>"><?=$text?></div>
                            <? } else { ?>
                            <a class="tit" href="<?=$link?>"><?=$text?></a>
                            <? } ?>
                            
                            <? if($i==3) { ?>
                                <ul class="sub_menu clear_after ordered-submenu item-content">
                                    <?php
                                    $arr = dbQuery("SELECT id,url,name FROM content WHERE parentid = 23 AND ispublish = 1 ORDER BY showorder");
                                    $blacklist_arr = array(
                                        3404,3198, 3199, 3200, 3201, 3202, 3203, 3204, 3205, 3206, 3207, 3208, 3209, 3210, 
                                        3211, 3212, 3213, 3268, 3308, 3309, 3310, 3311, 3195, 3382, 3383, 3384, 3385, 
                                        3386,
                                        3416, 3417, 3418, 3419, 3420, 3421, 3422,
                                        3423, 3428, 3522, 3523, 3531, 3530, 3529, 3528, 3527, 3526, 3525, 3524, 
                                        3534, 3535, 3536, 3537, 3538, 3540, 3541, 3542, 3543, 3527,
                                        3558, 3560, 3561, 3562, 3563,
                                        3547, 3548, 3549, 3550, 3551, 3552, 3553, 3554, 3555, 3556,
                                    );

                                    foreach($arr as $r)
                                    {
                                         if (!in_array((int)$r["id"], $blacklist_arr)) 
                                            { ?>
                                            <li class="serviceID-<?php echo $r["id"]; ?>">
                                                <?php if($r["id"] == 3016){ ?>
                                                <a href="http://shop.umcleaning.kiev.ua/" target="_blank" rel="nofollow"><?=$r["name"]?></a>
                                                <?php } else { ?>
                                                <a href="<?=$r['url']?>"><?=$r["name"]?></a>
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

    <?php if ($head["id"] == 3117){?>
    <a href="https://unmomento.com.ua/shop/shopping-cart/" class="cart-icon-wrap">
        <div class="cart-icon-circle" style="background-image: url('/templates/img/shop/cart-icon.png')">
            <div class="cart-icon-count-circle cart_count"><?php echo (isset($_SESSION['cart_count']) ? $_SESSION['cart_count'] : 0) ?></div>
        </div>
    </a>
    <?php } ?>
</header>


<?php if(($head['parentid'] == '2890'|| $head["urlname"] == "index")){ //???????????? ???? ?????????????? ?? ???? ?????????????????? ?????????????????>
<div class="header-search">
    <div class="hs-wrap main_content">
        <div class="hs-title">?????????? ????????????</div>
        <div class="search-form">
            <form method="get" id="sform" name="sform" action="/search-result/">
                <input type="text" id="stext" name="stext" autocomplete="off" placeholder="?????????? ????????????...">
                <div class="searchsubmit">
                        <i class="fa fa-search"></i><input type="submit" class="menuupd_searchsubmit bluebutton" value="">
                        ?????????? ????????????
                </div>
            </form>
        </div>
        <span class="vfix"></span>
    </div>
</div>
<?php } ?>
