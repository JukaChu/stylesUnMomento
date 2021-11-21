<div class="container_sevise inner sideheight">
        <div class="main_content block_margin clear_after sideheight">
            <div class="container_prise">
                <div class="sidebar">
                    <div  class="top_button">
                        Послуги
                    </div>
                    <?php
                    global $h1;
                    $blacklist_arr = array(3381, 3383, 3384, 3385, 3386);
                    $arr = dbQuery("SELECT id,url,name,
                        (SELECT id FROM images WHERE source = 1 AND parentid = content.id AND is_main = 1) as imid,
                        (SELECT format FROM images WHERE source = 1 AND parentid = content.id AND is_main = 1) as imformat
                        FROM content WHERE parentid = 23 AND ispublish = 1  AND id NOT IN (".implode(',', $blacklist_arr).") ORDER BY rand() LIMIT 0,3 ");
                        foreach($arr as $r){
                                                    $img = getImageById($r["imid"]);?>

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
                        Все услуги
                    </a>
                </div>
                <?php
                $mainImage = getMainImage($head["id"],57);

                ?>
                <div class="block_prise news_inner">
                <?if(!empty($mainImage)) {?>
                    <div class="block_brendinner clear_after">
                        <div class="foto" style="background-image:url(images/files/<?= $mainImage["image"] ?>)"></div>

                    </div>
                <?php } ?>
                    <h1 class="top_prise">
                        <?= $h1;?>
                    </h1>
                    <div class="container_result_desc clear_after">


                        <?= htmlspecialchars_decode($head["info"]) ?>
                        <div class="social" style="margin: 20px 0 -20px;">
                        <script type="text/javascript" src="//yastatic.net/share/share.js" charset="utf-8"></script><div class="yashare-auto-init" data-yashareL10n="ru" data-yashareType="small" data-yashareQuickServices="vkontakte,facebook,twitter,odnoklassniki,moimir,gplus" data-yashareTheme="counter"></div>
                        </div>

                    <div class="um-btns-wrap">
                        <div class="col-cont">
                            <div class="col-33">
                                <div class="um-btn btn-blue callPopupForm">Зробити замовлення</div>
                            </div>
                            <div class="col-33">
                                <a href="/tseny/" class="um-btn btn-purple">Ціни</a>
                            </div>
                            <div class="col-33">
                                <a href="/o-kompanii/kontakty.html" class="um-btn btn-green">Пункти прийому</a>
                            </div>
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
                    </div>

                        <a href="/stati/" class="all_button">
                            Все статьи
                        </a>
                    </div>
                    <div class="block_thanks">
                        ​Коллектив UNMOMENTO свидетельствует Вам свое почтение и благодарит ​з​а проявленный интерес к нашей Компании. 
                        ​Будем рады быть Вам полезны!<br>
                        Директор по развитию , Черныш Александр, тел: <b>495-2-495,</b> моб: <b>067 322 73 93</b>
                        <div class="email">
                            E-MAIL: <span>a.chernysh@ua.unmomento.com.ua</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
