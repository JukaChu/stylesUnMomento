<?php include 'mob_header_buttons.php'; ?>
<div class="container_sevise inner sideheight">
        <div class="main_content block_margin clear_after sideheight">
            <div class="container_prise">
                <div class="sidebar">
                    <div href="#" class="top_button">
                        Послуги
                    </div>
                    <?php 
                                        $blacklist_arr = array(3381, 3383, 3384, 3385, 3386);
                    $arr = dbQuery("SELECT id,url,name,(SELECT id FROM images WHERE source = 1 AND parentid = content.id AND is_main = 1) as imid,(SELECT format FROM images WHERE source = 1 AND parentid = content.id AND is_main = 1) as imformat FROM content WHERE parentid = 23 AND ispublish = 1 AND id != $head[id] AND id NOT IN (".implode(',', $blacklist_arr).") ORDER BY rand() LIMIT 0,3 ");
                        foreach($arr as $r)
                        {
                            $img = getImageById($r["imid"]);
                        ?>
                    <a href="/<?=$r["url"]?>" class="sc block_servise">
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
                    <a href="/uslugi/" class="all_button">
                        Всі послуги
                    </a>
                </div>
                <?php
                $images = getImages($head["id"],1);
                $img1 = $images[1];
                $mainImage = getMainImage($head["id"],1);
                ?>
                <div style="font-size: 0;"><?php var_dump ($img1); ?></div>
                <div class="block_prise news_inner">
                <?if($mainImage["image"] != "") {?>
                    <div class="block_brendinner clear_after">
                        <div class="foto" style="background-image:url(images/files/<?= $mainImage["image"] ?>)"></div>
                        <img loading="lazy" class="foto-mobile fits" src="/images/files/<?=$img1["image"]?>" alt="<?= $head["name"] ?>"/>
                        <?/*?>
                        <div class="foto-mobile" style="background-image:url(/images/files/<?=$img1["image"]?>)"></div>
                         */ ?>
                    </div>
                <?php } ?>
                    <div class="top_prise">
                        <h1 class ="name"> <?= $head["name"] ?></h1>
                    </div>
                    <div class="container_result_desc clear_after">
                        <?php /*
                        <div class="date_post">
                            Дата: <span><?= $head["item_date"] ?></span>
                        </div>
                        */?>

                        <?= htmlspecialchars_decode($head["info"]) ?>

                        <?php
                            if($head[id]==3090){ ?>
                                <div class="forms_registration new_forms">
                                    <div class="title" style="text-transform: inherit;">ЗАПОВНІТЬ анкету та гарантовано <span style='color: #C1351E;'>ОТРИМАЙТЕ бонус - 100грн</span></div>
                                    <div class="container_form">
                                    <iframe id="rframe" name="rframe" style="display:none;" ></iframe>
                                        <form method="post" target="rframe" enctype="multipart/form-data" action="/request.php?action=add&id=5">
                                            <input type="text" required name="f33" value="" placeholder="ПІП">
                                        <input type="email" required name="f34" value="" placeholder="E-mail">
                                        <input type="tel" required name="f35" value="" placeholder="Телефон">
                                        <input type="submit" name="" value="отримати бонус">
                                        </form>
                                    </div>
                                </div>
                                <div class="container_result_desc">
                                    Бонус 100грн діє на чистку текстильного одягу і прання прайсових позицій UNMOMENTO UNMOMENTO Premium, при мінімальному замовленні від 300грн.
                                    <br>Скористатись бонусом можна в усій мережі хімчисток UNMOMENTO <a class="linck" href="https://ua.unmomento.com.ua/index.php?id=106&option=com_content&view=category">м.Києва</a>
                                </div>
                        <?php   } ?>
                        <?php /*
                        <div class="social" style="margin: 20px 0 -20px;">
                        <script type="text/javascript" src="//yastatic.net/share/share.js" charset="utf-8"></script><div class="yashare-auto-init" <?php if(!empty($imageMain)) {  ?> data-image='http://ua.unmomento.com.ua/images/files/<?php echo $imageMain['image']; ?>' <?php } ?> data-yashareL10n="ru" data-url="http://<?php echo $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']  ?>" data-yashareType="small" data-yashareQuickServices="vkontakte,facebook,twitter,odnoklassniki,moimir,gplus" data-yashareTheme="counter"></div>
                        </div>
                        */?>
                        <div class="um-btns-wrap">
                            <?php 
                            if ( (int)$head['id'] != 3500 ) { 
                            ?>
                            <div class="col-cont">
                                <div class="col-33">
                                    <div class="um-btn btn-blue callPopupForm">Зробити замовлення</div>
                                </div>
                                <div class="col-33">
                                    <a href="/tseny/" class="um-btn btn-purple">Ціни</a>
                                </div>
                                <?php 
                                if ( (int)$head['id'] != 99999999999 ) { 
                                ?>
                                <div class="col-33">
                                    <a href="/o-kompanii/kontakty.html" class="um-btn btn-green">Пункти прийому</a>
                                </div>
                                <?php 
                                } else { 
                                ?>
                                <div class="col-33">
                                    <a href="/novosti/nove-zhittja-dlja-vashih-rechei/" class="um-btn btn-green">АКЦІЯ</a>
                                </div>
                                <?php 
                                } 
                                ?>
                                <div class="col-33">
                                    <ul class="news_social_buttons">
                                        <li class="social_button social_button_fb"><a taget="_blank" href="https://m.me/momento.un?ref=UNMOMENTO"><div class="social_button_fb"></div></a></li>
                                        <li class="social_button social_button_vb"><a taget="_blank" href="viber://pa?chatURI=unmomentobot&context=ml1"><div class="social_button_vb"></div></a></li>
                                        <li class="social_button social_button_tg"><a taget="_blank" href="https://t.me/unmomento_bot"><div  class="social_button_tg"></div></a></li>
                                    </ul>
                                    <ul class="news_social_buttons">
                                        <li><a onclick="gtag('event', 'Click', {'event_category': 'Order'});" href="https://play.google.com/store/apps/details?id=ru.agbis.Unmomento"><i class="fa fa-android"></i></a></li>
                                        <li><a onclick="gtag('event', 'Click', {'event_category': 'Order'});" href="https://apps.apple.com/ua/app/unmomento/id1491483430?l=ru"><i class="fa fa-apple"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <?php } else { ?>
                            <div class="col-cont">
                                <div class="col-33">
                                    <div class="um-btn btn-blue callPopupForm">Зробити замовлення</div>
                                </div>
                                <div>
                                </div>
                                <div class="col-33">
                                    <a href="/tseny/" class="um-btn btn-purple">Ціни</a>
                                </div>
                            </div>
                            <div class="col-cont">
                                <div class="col-33">
                                    <ul class="news_social_buttons">
                                        <li class="social_button social_button_fb"><a taget="_blank" href="https://m.me/momento.un?ref=UNMOMENTO"><div class="social_button_fb"></div></a></li>
                                        <li class="social_button social_button_vb"><a taget="_blank" href="viber://pa?chatURI=unmomentobot&context=ml1"><div class="social_button_vb"></div></a></li>
                                        <li class="social_button social_button_tg"><a taget="_blank" href="https://t.me/unmomento_bot"><div  class="social_button_tg"></div></a></li>
                                    </ul>
                                    <ul class="news_social_buttons">
                                        <li><a onclick="gtag('event', 'Click', {'event_category': 'Order'});" href="https://play.google.com/store/apps/details?id=ru.agbis.Unmomento"><i class="fa fa-android"></i></a></li>
                                        <li><a onclick="gtag('event', 'Click', {'event_category': 'Order'});" href="https://apps.apple.com/ua/app/unmomento/id1491483430?l=ru"><i class="fa fa-apple"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <?php } ?>
                            <div class="um-form-wrap um-hidden">
                                <div class="um-form-close"></div>
                                <form method="post" target="_srframe" action="/request.php?action=add&id=10">
                                    <div class="input">
                                        <input type="text" name="f50" required="" placeholder="Ваш телефон">
                                            <input type="hidden" name="f51" id="f51" />
                                    </div>
                                    <input class="um-btn btn-purple" type="submit" value="Замовити зворотній дзвінок">
                                </form>
                            </div>
                        </div>
                        <div class="um-btns-wrap">
                            <div class="col-33">
                                <a href="/novosti/" class="all_button">
                                    Всі новини
                                </a>
                            </div>
                            <?php
                            if($head[id]==='3358'){ ?>
                            <div class="col-50">
                                <a href="#" class="red-btn-small callPopupFormById" popup-id="getBonus100">
                                    одержати 100 грн бонус
                                </a>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="block_thanks">
                        Колектив UNMOMENTO засвідчує Вам свою повагу та подяку за проявлений інтерес до нашої Компанії.<br/> Будемо раді бути Вам корисними!<br>
                        Директор з розвитку, Черниш Олександр, тел: <b>495-2-495,</b> моб: <b>067 322 73 93</b>
                        <div class="email">
                            E-MAIL: <span>a.chernysh@ua.unmomento.com.ua</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
