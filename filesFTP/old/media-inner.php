<div class="container_sevise inner sideheight">
    <?php include 'mob_header_buttons.php'; ?>
        <div class="main_content block_margin clear_after sideheight">
            <div class="container_prise">
                <div class="sidebar">
                    <div href="#" class="top_button">
                        Послуги
                    </div>
                    <?
                    $arr = dbQuery("SELECT id,url,name,(SELECT id FROM images WHERE source = 1 AND parentid = content.id AND is_main = 1) as imid,(SELECT format FROM images WHERE source = 1 AND parentid = content.id AND is_main = 1) as imformat FROM content WHERE parentid = 23 AND ispublish = 1 AND id != $head[id] ORDER BY rand() LIMIT 0,3 ");
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
                $mainImage = getMainImage($head["id"],1);
                $code = str_replace('https://youtu.be/', '', strip_tags(trim(htmlspecialchars_decode($head['preview']))));
                //var_export($code);
                ?>
                <div class="block_prise news_inner">
                <?php /*
                <?if($mainImage["image"] != "") {?>
                    <div class="block_brendinner clear_after">
                        <div class="foto" style="background-image:url(images/files/<?= $mainImage["image"] ?>)"></div>

                    </div>
                <?php } ?>
                */?>
                    <div class="top_prise">
                        <h1 class ="name"> <?= $head["name"] ?></h1>
                    </div>
                    <div class="container_result_desc clear_after">
                        <?php echo htmlspecialchars_decode($head["info"]) ?>
                        <?php if( /*strlen($head['preview']) === 28*/ $code ) {?>
                        <iframe width="100%" height="450" src="https://www.youtube.com/embed/<?php echo $code; ?>" frameborder="0" allowfullscreen></iframe>
                        <?php } ?>

                        <?php
                            if($head[id]==3090){ ?>
                                <div class="forms_registration new_forms">
                                    <div class="title" style="text-transform: inherit;">ЗАПОЛНИТЕ анкету и гарантировано <span style='color: #C1351E;'>ПОЛУЧИТЕ бонус - 100грн</span></div>
                                    <div class="container_form">
                                    <iframe id="rframe" name="rframe" style="display:none;" ></iframe>
                                        <form method="post" target="rframe" enctype="multipart/form-data" action="/request.php?action=add&id=5">
                                            <input type="text" required name="f33" value="" placeholder="ФИО">
                                        <input type="email" required name="f34" value="" placeholder="E-mail">
                                        <input type="tel" required name="f35" value="" placeholder="Телефон">
                                        <input type="submit" name="" value="получить бонус">
                                        </form>
                                    </div>
                                </div>
                                <div class="container_result_desc">
                                    Бонус 100грн действует на чистку текстильной одежды и стирку прайсовых позиций UNMOMENTO UNMOMENTO Premium, при минимальном заказе от 300грн.
                                    <br>Воспользоваться бонусом можно во всей сети химчисток UNMOMENTO <a class="linck" href="https://ua.unmomento.com.ua/index.php?id=106&option=com_content&view=category">г.Киева</a>
                                </div>
                        <?php   } ?>
                        <?php /*
                        <div class="social" style="margin: 20px 0 -20px;">
                        <script type="text/javascript" src="//yastatic.net/share/share.js" charset="utf-8"></script><div class="yashare-auto-init" <?php if(!empty($imageMain)) {  ?> data-image='http://ua.unmomento.com.ua/images/files/<?php echo $imageMain['image']; ?>' <?php } ?> data-yashareL10n="ru" data-url="http://<?php echo $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']  ?>" data-yashareType="small" data-yashareQuickServices="vkontakte,facebook,twitter,odnoklassniki,moimir,gplus" data-yashareTheme="counter"></div>
                        </div>
                        */?>                        
                        <?php $images = getImages($head['id'], 1);
                        if(count($images)>1){ ?>
                        <div class="photo-gallery-wrap">
                        <?php foreach($images as $image){ ?>
                            <div class="col-50 col-gallery-item">
                                <div class="col-gallery-item-inner">
                                    <div class="foto" style="background-image:url(images/files/<?= $image["image"] ?>)"></div>
                                </div>
                            </div>
                        <?php } ?>
                        </div>
                        <? } ?> 
                        <a href="/media/" class="all_button">
                            Всі відео
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
