
<main>

    <div class="container">
        <h1 class="main-title">Відео</h1>
    </div>

    <section class="news-inner">
        <div class="container">
            <div class="news-inner__block">

                <div class="news-inner__main">

                    <?php
                    $images = getImages($head["id"],1);
                    $img1 = $images[1];
                    $mainImage = getMainImage($head["id"],1);
                    $code = str_replace('https://youtu.be/', '', strip_tags(trim(htmlspecialchars_decode($head['preview']))));

                    ?>
                    <div class="img">
                        <?php if( /*strlen($head['preview']) === 28*/ $code ) {?>
                            <iframe width="100%" height="450" src="https://www.youtube.com/embed/<?php echo $code; ?>" frameborder="0" allowfullscreen></iframe>
                        <?php } ?>
                    </div>

                    <div class="tag">Відео</div>

                    <h1><?= $head["name"] ?></h1>
                    <div class="text">
                        <?= htmlspecialchars_decode($head["info"]) ?>

                        <?php echo htmlspecialchars_decode($head["info"]) ?>

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
                <aside class="news__other">
                    <div class="news__other-cont">
                        <?php
                        $blacklist_arr = array(3381, 3383, 3384, 3385, 3386);
                        $arr = dbQuery("SELECT id,url,name,(SELECT id FROM images WHERE source = 1 AND parentid = content.id AND is_main = 1) as imid,(SELECT format FROM images WHERE source = 1 AND parentid = content.id AND is_main = 1) as imformat FROM content WHERE parentid = 3220 AND ispublish = 1 AND id != $head[id] AND id NOT IN (".implode(',', $blacklist_arr).") ORDER BY rand() LIMIT 0,3 ");
                        foreach($arr as $r)
                        {
                            $img =  getImageById($r["imid"]);
                            if(empty($r["imid"]))
                            {
                                $code = str_replace('https://youtu.be/', '', strip_tags(trim(htmlspecialchars_decode($r['preview']))));
                                $img['image'] = "https://i1.ytimg.com/vi/" . $code . "/hqdefault.jpg";
                            }
                            else
                            {
                                $img['image'] = '/images/files/' . $img["image"];
                            }
                            ?>

                            <a href="<?= $r["url"] ?>" class="single-card purple">
                                <div class="img">
                                    <img class="lazyload" data-src="<?php echo $img["image"] ?>" alt="">
                                </div>
                                <div class="text">
                                    <span class="tag">Відео</span>
                                    <p><?= $r["name"]?></p>

                                    <div class="btn btn--blue">докладніше</div>

                                </div>
                            </a>

                        <?php } ?>
                    </div>

                    <a href="/media/" class="btn btn--blue">
                        Всі відео
                    </a>

                </aside>
            </div>

        </div>
    </section>

    <?php include 'desk-buttons-nav.php'; ?>



</main>

