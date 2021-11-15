    <div class="container_sevise inner sideheight">
    <?php include 'mob_header_buttons.php'; ?>
            <div class="main_content block_margin clear_after sideheight">
                <div class="container_prise">
                    <div class="sidebar">
                                        
                        <div href="#" class="top_button">
                            Услуги
                        </div>
                        <?php
                                            $blacklist_arr = array(3382, 3383, 3384, 3385, 3386, $head["id"]);
                        $arr = dbQuery("SELECT id,url,name,(SELECT id FROM images WHERE source = 1 AND parentid = content.id AND is_main = 1) as imid,(SELECT format FROM images WHERE source = 1 AND parentid = content.id AND is_main = 1) as imformat FROM content WHERE parentid = 23 AND ispublish = 1 AND id NOT IN (".implode(',', $blacklist_arr).") ORDER BY rand() LIMIT 0,3 ");
                            foreach($arr as $r)
                            {
                                /*<div class="foto" style="background-image:url(/images/files/<?=$img["image"]?>)"></div>*/
                                $img = getImageById($r["imid"]);
                                $img = getResizeImageById($img["id"],"w",array("width"=>370),$img["format"],$img,100); 
                            ?>
                        <a href="/<?=$r["url"]?>" class="sc block_servise">
                            <div class="foto" style="background-image:url(<?=$img?>)"></div>
                            <div class="block_info">
                                <span class='vfix'></span>
                                <div class="container_vfix">
                                                                <div class ="name"><?=$r["name"]?></div>
                                </div>
                            </div>
                        </a>
                            <?php } ?>
                        <a href="/uslugi/" class="all_button">
                            Все услуги
                        </a>
                    </div>
                    <?php
                    $images = getImages($head["id"],1);
                    $img1 = $images[1];
                    $mainImage = getMainImage($head["id"],1);
                    ?>
                    <div style="font-size: 0;"><?php //var_dump ($img1); ?></div>
                    <div class="block_prise news_inner">
                    <?if($mainImage["image"] != "") {?>
                        <div class="block_brendinner clear_after">
                            <div class="foto" style="background-image:url(images/files/<?= $mainImage["image"] ?>)"></div>
                            <img loading="lazy" class="foto-mobile fits" src="/images/files/<?=$img1["image"]?>" alt="<?= $head["name"] ?>"/>
                        </div>
                    <?php } ?>
                        <div class="top_prise">
                            <h1 class ="name"><?= $head["name"] ?></h1>
                        </div>
                        <div class="container_result_desc clear_after">
                            <div class="date_post">
                                Дата: <span><?= $head["item_date"] ?></span>
                            </div>

                            <?= htmlspecialchars_decode($head["info"]) ?>

                            <?php
                                if($head[id]==3090){ ?>
                                    <div class="forms_registration new_forms">
                                        <div class="title" style="text-transform: inherit;">ЗАПОЛНИТЕ анкету и гарантировано <span style='color: #C1351E;'>ПОЛУЧИТЕ бонус - 100грн</span></div>
                                        <div class="container_form">
                                        <iframe id="rframe" name="rframe" style="display:none;" ></iframe>
                                            <form method="post" target="rframe" enctype="multipart/form-data" action="/request.php?action=add&id=5">
                                                <input type="text" required name="f33" value="" placeholder="ФИО">
                                            <input type="email" required name="f34" value="" placeholder="E-mail">
                                            <input type="tel" id="tel1" required name="f35" value="" placeholder="Телефон">
                                            <input type="submit" name="" value="получить бонус">
                                            </form>
                                        </div>
                                    </div>
                                    <div class="container_result_desc">
                                        Бонус 100грн действует на чистку текстильной одежды и стирку прайсовых позиций UNMOMENTO UNMOMENTO Premium, при минимальном заказе от 300грн.
                                        <br>Воспользоваться бонусом можно во всей сети химчисток UNMOMENTO <a class="linck" href="http://unmomento.com.ua/index.php?id=106&option=com_content&view=category">г.Киева</a>
                                    </div>
                            <?php   } ?>
                            <div class="um-btns-wrap">
                                    <?php 
                                    if ( (int)$head['id'] != 3512 ) { 
                                    ?>
                                <div class="col-cont">
                                    <div class="col-33">
                                        <div class="um-btn btn-blue callPopupForm">Сделать заказ</div>
                                    </div>
                                    <div class="col-33">
                                        <a href="/tseny/" class="um-btn btn-purple">ЦЕНЫ</a>
                                    </div>
                                    <?php 
                                    if ( (int)$head['id'] != 99999999999 ) { 
                                    ?>
                                    <div class="col-33">
                                        <a href="/o-kompanii/kontakty.html" class="um-btn btn-green">Пункты приема</a>
                                    </div>
                                    <?php } else { ?>
                                    <div class="col-33">
                                        <a href="/novosti/novaja-zhizn-dlja-vashih-veshei/" class="um-btn btn-green">АКЦИЯ</a>
                                    </div>
                                    <?php } ?>
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
                                        <div class="um-btn btn-blue callPopupForm">Сделать заказ</div>
                                    </div>
                                    <div>
                                    </div>
                                    <div class="col-33">
                                        <a href="/tseny/" class="um-btn btn-purple">ЦЕНЫ</a>
                                    </div>
                                </div>
                                <div class="col-cont">
                                    <div class="col-33">
                                        <ul class="news_social_buttons">
                                            <li class="social_button social_button_fb"><a taget="_blank" href="https://m.me/momento.un?ref=UNMOMENTO"><div class="social_button_fb"></div></a></li>
                                            <li class="social_button social_button_vb"><a taget="_blank" href="viber://pa?chatURI=unmomentobot&context=ml1"><div class="social_button_vb"></div></a></li>
                                            <li class="social_button social_button_tg"><a taget="_blank" href="https://t.me/unmomento_bot"><div  class="social_button_tg"></div></a></li>
                                        </ul>
                                    </div>
                                </div>
                                    <?php } ?>
                                <div class="um-form-wrap um-hidden">
                                <div class="um-form-close"></div>
                                    <form method="post" target="_srframe" action="/request.php?action=add&id=10">
                                    <div class="input">
                                        <input type="text" name="f50" id="tel2" required="" placeholder="Ваш телефон">
                                            <input type="hidden" name="f51" id="f51" />
                                    </div>
                                    <input class="um-btn btn-purple" type="submit" value="Заказать обратный звонок">
                                </form>
                                </div>
                            </div>
                            <div class="um-btns-wrap">
                                <div class="col-33">
                                    <a href="/novosti/" class="all_button">
                                        Все новости
                                    </a>
                                </div>
                                <?php /*
                                if($head[id]==='3366') { ?>
                                <div class="col-50">
                                    <a href="#" class="red-btn-small callPopupFormById" popup-id="getBonus100">
                                        получить 100 грн бонус
                                    </a>
                                </div>
                                <?php } */?>
                            </div>
                        </div>
                        <div class="block_thanks">
                            ​Коллектив UNMOMENTO свидетельствует Вам свое почтение и благодарит ​з​а проявленный интерес к нашей Компании. 
                            ​Будем рады быть Вам полезны!<br>
                            Директор по развитию , Черныш Александр, тел: <b>495-2-495,</b> моб: <b>067 322 73 93</b>
                            <div class="email">
                                E-MAIL: <span>a.chernysh@unmomento.com.ua</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    <iframe name="_srframe" id="_srframe" style="display:none;"></iframe>
        <script>$('#f51').val('<?php echo $head['name']; ?>');
            $('#tel1').mask("+38(099)999-99-99");
            $('#tel2').mask("+38(099)999-99-99");
        </script>