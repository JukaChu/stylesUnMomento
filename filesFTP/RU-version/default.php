<?php global $detect; ?>

<main>
    <?php $spec_services = array(
        1 => array(
            'name' => 'Химчистка<br> одежды и<br> обуви',
            'pic_name' => 'f-i-1.png',
            'url' => 'https://unmomento.com.ua/uslugi/',
            'target' => '_self',
            'nofollow' => false
        ),
        2 => array(
            'name' => 'Химчистка мягкой<br> мебели',
            'pic_name' => 'f-i-4.png',
            'url' => 'https://unmomento.com.ua/uslugi/himchistka-mjagkoi-mebeli/',
            'target' => '_self',
            'nofollow' => false
        ),
        3 => array(
            'name' => 'Чистка эксклюзивных<br> изделий',
            'pic_name' => 'f-i-5.png',
            'url' => 'https://cutt.ly/Negcoy4',/*'https://oscar.kiev.ua/'*/
            'target' => '', /*'_blank',*/
            'nofollow' => false
        ),
        4 => array(
            'name' => 'Корпоративное обслуживание',
            'pic_name' => 'f-i-3.png',
            'url' => 'https://unmomento.com.ua/uslugi/korporativnoe-obsluzhivanie.html',
            'target' => '_self',
            'nofollow' => false
        ),
        5 => array(
            'name' => 'Франчайзинг',
            'pic_name' => 'f-i-6.png',
            'url' => ' https://unmomento.com.ua/franchayzing/o-franchayzinge.html',
            'target' => '_self',
            'nofollow' => false
        ),
        6 => array(
            'name' => 'Продажа средств для стирки',
            'pic_name' => 'f-i-2.png',
            'url' => 'http://shop.umcleaning.kiev.ua/',
            'target' => '_blank',
            'nofollow' => true
        )
    ); ?>
    <div class="search-mobile-block">
        <div class="container">
            <div class="search-cont">
                <form method="get" id="sform" name="sform" action="/search-result/">
                    <input class='search-field' type="text" id="stext" name="stext" autocomplete="off"
                           placeholder="Поиск услуги...">
                    <div class="searchsubmit">

                        <input type="submit" class="menuupd_searchsubmit bluebutton"
                               value="">
                        Поиск
                    </div>
                </form>
            </div>
        </div>
    </div>

    <section class="spec-services">
        <div class="container">
            <div class="spec-services__container">
                <?php foreach ($spec_services as $spec_service) { ?>
                    <a href="<?php echo $spec_service['url'] ?>"
                       target="<?php echo $spec_service['target'] ?>"
                        <?php if ($spec_service['nofollow'] === true) {
                            echo 'rel="nofollow"';
                        } ?>
                       class="spec-services__single">
                        <div class="img">
                            <img loading="lazy" alt=""
                                 src="/templates/build/img/<?php echo $spec_service['pic_name'] ?>"/>
                        </div>
                        <p><?php echo $spec_service['name'] ?></p>
                    </a>

                <?php } ?>


            </div>
        </div>
    </section>
    <?php include 'mob_header_buttons.php'; ?>
    <section class="slider-banners">
        <div class="container">
            <div class="sliders-banners__container swiper-container">
                <div class="swiper-wrapper">


                    <!--Это нужно заменить на свое, или убрать было создано для  картинок, вставите свои картинки при передаче
                    $imagesBan, $textBan
                    -->


                    <!--Это нужно заменить на свое, или убрать было создано для  картинок, вставите свои картинки при передаче-->

                    <?php
                    $banners = dbQuery("SELECT id, urlname FROM content WHERE parentid = 2972 AND ispublish = 1 ORDER BY showorder");

                    $imagesBan = array(
                        1 => 'bnr-1.jpg',
                        2 => 'bnr-2.jpg',
                        3 => 'bnr-3.jpg',
                        4 => 'bnr-4.jpg',
                        5 => 'bnr-1.jpg',
                        6 => 'bnr-2.jpg',
                        7 => 'bnr-3.jpg',
                        8 => 'bnr-4.jpg',
                        9 => 'bnr-1.jpg',
                        10 => 'bnr-2.jpg',
                        11 => 'bnr-3.jpg',
                        12 => 'bnr-4.jpg',
                        13 => 'bnr-1.jpg',
                        14 => 'bnr-2.jpg',

                    );
                    $textBan = array(
                        1 => 'Выгодная чистка мебели',
                        2 => 'Новый пункт в',
                        3 => 'Защитите себя от вирусов!',
                        4 => 'Легко и просто вызвать курьера химчистки',
                        5 => 'Выгодная чистка мебели',
                        6 => 'Новый пункт в',
                        7 => 'Защитите себя от вирусов!',
                        8 => 'Легко и просто вызвать курьера химчистки',
                        9 => 'Выгодная чистка мебели',
                        10 => 'Новый пункт в',
                        11 => 'Защитите себя от вирусов!',
                        12 => 'Легко и просто вызвать курьера химчистки',
                        13 => 'Выгодная чистка мебели',
                        14 => 'Новый пункт в',

                    );

                    if (count($banners) > 1){
                    ?>

                    <?php
                    echo '<div class="slides-wrap swiper-slide">';
                    $cnt = 1;
                    foreach ($banners as $image) {

                        $mainImg = getMainImage($image["id"], 1);
                        $img = getResizeImageById($mainImg["id"], "w", array("width" => 1024), $mainImg["format"], $mainImg, 80);
                        ?>
                        <a href="<?php print $image["urlname"]; ?>" class="banner-slide  Id<? echo $image["id"]; ?>"
                           id="dpsslide-<?php echo $cnt; ?>">
                            <div class="img">
                                <img class="lazyload" data-src="/templates/build/img/<?php echo $imagesBan[$cnt] ?>" alt="">
                            </div>
                            <p><?php echo $textBan[$cnt] ?></p>

                        </a>

                        <?php
                        if ($cnt % 4== 0) {
                            echo '</div><div class="slides-wrap swiper-slide">';
                        }
                        $cnt++;
                    } ?>
                </div>
            </div>
            <?php } ?>
        </div>
        </div>
        <div class="container container-z">
            <div class="dots">

            </div>
        </div>
    </section>

    <section class="mobile-slider-banners">
        <div class="container">
            <div class="sliders-banners__container swiper-container">
                <div class="swiper-wrapper">


                    <!--Это нужно заменить на свое, или убрать было создано для  картинок, вставите свои картинки при передаче
                    $imagesBan, $textBan
                    -->


                    <!--Это нужно заменить на свое, или убрать было создано для  картинок, вставите свои картинки при передаче-->

                    <?php
                    $banners = dbQuery("SELECT id, urlname FROM content WHERE parentid = 2972 AND ispublish = 1 ORDER BY showorder");

                    $imagesBan = array(
                        1 => 'bnr-1.jpg',
                        2 => 'bnr-2.jpg',
                        3 => 'bnr-3.jpg',
                        4 => 'bnr-4.jpg',
                        5 => 'bnr-1.jpg',
                        6 => 'bnr-2.jpg',
                        7 => 'bnr-3.jpg',
                        8 => 'bnr-4.jpg',
                        9 => 'bnr-1.jpg',
                        10 => 'bnr-2.jpg',
                        11 => 'bnr-3.jpg',
                        12 => 'bnr-4.jpg',
                        13 => 'bnr-1.jpg',
                        14 => 'bnr-2.jpg',

                    );
                    $textBan = array(
                        1 => 'Выгодная чистка мебели',
                        2 => 'Новый пункт в',
                        3 => 'Защитите себя от вирусов!',
                        4 => 'Легко и просто вызвать курьера химчистки',
                        5 => 'Выгодная чистка мебели',
                        6 => 'Новый пункт в',
                        7 => 'Защитите себя от вирусов!',
                        8 => 'Легко и просто вызвать курьера химчистки',
                        9 => 'Выгодная чистка мебели',
                        10 => 'Новый пункт в',
                        11 => 'Защитите себя от вирусов!',
                        12 => 'Легко и просто вызвать курьера химчистки',
                        13 => 'Выгодная чистка мебели',
                        14 => 'Новый пункт в',

                    );

                    if (count($banners) > 1){
                        ?>

                        <?php
                        $cnt = 1;
                        foreach ($banners as $image) {

                            $mainImg = getMainImage($image["id"], 1);
                            $img = getResizeImageById($mainImg["id"], "w", array("width" => 1024), $mainImg["format"], $mainImg, 80);
                            ?>
                            <a href="<?php print $image["urlname"]; ?>" class="banner-slide  swiper-slide Id<? echo $image["id"]; ?>"
                               id="dpsslide-<?php echo $cnt; ?>">
                                <div class="img">
                                    <img class="lazyload" data-src="/templates/build/img/<?php echo $imagesBan[$cnt] ?>" alt="">
                                </div>
                                <p><?php echo $textBan[$cnt] ?></p>

                            </a>

                            <?php

                            $cnt++;
                        } ?>

                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="container container-z">
            <div class="dots">

            </div>
        </div>
    </section>

    <section class="achiv">
        <div class="container">
            <div class="achiv-list">
                <a href="o-kompanii/o-kompanii/" class="single-achiv">
                    <div class="img">
                        <img src="/templates/build/img/ac-m-1.png" alt="">
                    </div>
                    <div class="text">
                        <span>24</span>
                        <p>года опыта</p>
                    </div>
                </a>
                <a href="/o-kompanii/kontakty.html" class="single-achiv">
                    <div class="img">
                        <img src="/templates/build/img/ac-m-2.png" alt="">
                    </div>
                    <div class="text">
                        <span>57</span>
                        <p>пунктов приема</p>
                    </div>
                </a>
                <div class="single-achiv">
                    <div class="img">
                        <img src="/templates/build/img/ac-m-3.png" alt="">
                    </div>
                    <div class="text">
                        <span>1 млн+</span>
                        <p>клиентов</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cards-section">
        <div class="container">
            <div class="cards-section__container">
                <div class="cards-list">
                    <a href="https://um.ppa.kiev.ua/novosti" class="single-card">
                        <div class="img">
                            <img class="lazyload" data-src="https://um.ppa.kiev.ua/images/thumbs/2932-0x274.jpeg" alt="">
                        </div>
                        <div class="text">
                            <span class="tag">Новости</span>
                            <p>Сеть UNMOMENTO работает в обычном режиме!</p>

                            <div class="btn btn--blue">Детальней</div>

                        </div>
                    </a>
                    <a href="https://um.ppa.kiev.ua/sovety-ot-unmomento/" class="single-card">
                        <div class="img">
                            <img class="lazyload" data-src="https://um.ppa.kiev.ua/images/thumbs/901-0x300.jpeg" alt="">
                        </div>
                        <div class="text">
                            <span class="tag">Советы</span>
                            <p>"Почему и для чего?"  - разница между типами чистки в  UNMOMENTO</p>

                            <div class="btn btn--blue">Детальней</div>

                        </div>
                    </a>
                    <a href="https://um.ppa.kiev.ua/loyalty/" class="single-card">
                        <div class="img">
                            <img class="lazyload" data-src="https://um.ppa.kiev.ua/images/thumbs/1078-0x274.jpeg" alt="">
                        </div>
                        <div class="text">
                            <span class="tag">Программа лояльности</span>
                            <p>Акция на чистку
                                мебели</p>

                            <div class="btn btn--blue">Детальней</div>

                        </div>
                    </a>

                </div>
            </div>
        </div>
    </section>

    <section class="seo-block">
        <div class="container">
            <div class="seo-title">
                ХИМЧИСТКА «UNMOMENTO» -  МЫ СБЕРЕЖЕМ ТО, <br>ЧЕМ ВЫ ДОРОЖИТЕ!
            </div>
            <div class="seo-text">
                <p><strong>Одежда – это не просто сочетание ткани, модного фасона и подходящей фурнитуры.Каждая вещь несет в себе эмоцию и воспоминания, которые прочно связывают ее с владельцем.</strong><br>
                    Двадцатилетний опыт ежедневной работы помог нашей компании твердо убедиться в этих словах.</p>
                <p>Поэтому  <em>химчистка</em> «UNMOMENTO» прилагает все усилия, чтобы качественно и оперативно устранить любые неприятности, которые могли произойти с вашими любимыми вещами. Будь то обычная <strong>чистка обуви, ремонт обуви, прачечная, клининг</strong> или даже тщательная <strong>химчистка меха</strong> – профессионалы <strong>«UNMOMENTO»</strong> безупречно справятся с любой задачей.</p>
                <p><strong>«Мы дарим чистоту и радость каждому».</strong><br>
                    Кредо компании свидетельствует о наличии лидерских убеждений: еще в 1996 году - обычная <strong><em>прачечная химчистка в г.Киев,</em></strong> сегодня - известный бренд, наличие более 50-ти приемных пунктов в городе Киеве и области, сотрудничество с мировыми производителями.<br>
                    Разве не повод для успеха?<br>
                    Еще один отличительный принцип, которого придерживается наша <strong><em>химчистка</em></strong> в городе Киев -широкий спектр услуг, подробно узнать о которых Вы сможете в одноименном разделе. В основном, деятельность сводится к следующим направлениям:
                </p>
                <div class="add-main-text">
                    <ul>
                        <li><em>Качественный клининг</em></li>
                        <li><em>Ремонт одежды</em></li>
                        <li><em>Ремонт обуви</em></li>
                        <li><em>Тщательная чистка обуви и одежды</em></li>
                        <li><em>Химчистка предметов домашнего обихода</em></li>
                        <li><em>Прачечная</em></li>
                        <li><em>Глажка</em></li>
                        <li><em>Персональный технолог</em></li>
                        <li><em>Обработка серебром</em></li>
                        <li><strong><em>Доставка всех изделий</em></strong></li>
                    </ul>
                    <h2 style="font-size: 14px;color:#393939">Клининг от «UNMOMENTO» - уборка может быть приятной и веселой…Если, конечно, Вы поручили ее нам ☺</h2>
                    <p>Влажный, сухой, генеральный <strong><em>клининг в Киеве,</em></strong> уборка домашних и офисных помещений после ремонта – легкая задача для профессиональной команды <strong>UNMOMENTO.</strong></p>
                    <p>Благодаря опыту, профессиональному оборудованию и инновационным препаратам, мы можем гарантировать качество уборки и безупречную чистоту в вашем доме, квартире и офисе.</p>
                    <p><strong>Мы предоставляем оперативный и высококачественный <em>клининг</em></strong> при помощи поломоечных машин, пылесосов, парогенераторов и других устройств для уборки. В частности</p>
                    <ul style="text-align: left;">
                        <li><strong><em>клининг</em></strong><strong> окон и витрин;</strong></li>
                        <li><strong><em>химчистка</em></strong><strong> всех видов покрытий;</strong></li>
                        <li><strong>обработка гранитных и мраморных поверхностей;</strong></li>
                        <li><strong>уборка снега;</strong></li>
                        <li><strong><em>клининг </em></strong><strong>территорий и др.</strong></li>
                    </ul>
                    <h2 style="font-size: 14px;color:#393939">Ремонт одежды – залог того, что ваша одежда всегда будет выглядеть стильно!</h2>

                    <p><strong>В каждом шкафу найдется красивая вещь, которая слишком долго “ждала” своего часа.&#8986; <em>Прощаться с ней не хочется, а носить не с чем? </em></strong></p>
                    <p>Мастера UNMOMENTO решат эту дилемму. Благодаря таланту, чувству стиля и многолетнему опыту специалистов UNMOMENTO, ваши вещи всегда будут в тренде!<br><strong>Ремонт одежды, который осуществляют наши мастерские в городе Киев и в других городах, могут превратить любой элемент гардероба в праздничный наряд.</strong> Этому также поможет наша <strong>прачечная.</strong> Не верите? Приходите к нам и убедитесь сами: после профессиональной чистки, ваши вещи будут выглядеть безупречно, будто Вы только что приобрели ее в магазине.</p>
                    <p><strong><em>Ремонт одежды</em></strong> от «Ун Моменто » - это также качественная <strong><em>химчистка кожи</em></strong>, меха, замши, <strong><em>чистка сумок, обуви</em></strong> и других аксессуаров. Наши специалисты знают как сохранить насыщенность цвета, форму и красоту каждого элемента гардероба.<br>Лен, хлопок, шелк, шерсть, или вискоза - деликатная чистка и <strong><em>ремонт одежды</em></strong> устранят все «неприятности», не изменяя при этом первозданный вид изделия. То же самое предлагает <strong><em>ремонт обуви</em></strong> от нашей компании.</p>
                    <h2 style="font-size: 14px;color:#393939">Принарядился сам – принаряди свою квартиру</h2>
                    <p><strong><em>Мы знаем секреты идеальной чистоты и порядка...</em></strong></p>
                    <p><strong>Работники «Ун Моменто » почистят ковры, шторы и гардины так, что даже хозяйка со стажем или любая другая <em>химчистка в г.Киев</em> сможет позавидовать</strong>.
                        Кроме чистки, мы также проводим демонтаж и навешивание вышеупомянутых объектов. Поэтому Вам не придется тратить время на пустяки.</p>
                    <p>А чтобы Ваши дети всегда были в безопасности и в любую минуту могли обнять своего игрушечного друга - мы охотно проведем <strong><em>чистку игрушек.</em></strong></p>
                    <h2 style="font-size: 14px;color:#393939">Ремонт обуви - все до мельчайших деталей</h2>
                    <p><strong><em>- Туфли могут изменить жизнь... Не верите?</em></strong></p>
                    <p><strong><em>Спросите у Золушки!</em></strong></p>

                    <p>Не каждая <strong><em>мастерская по ремонту обуви</em></strong> может похвастаться столь высоким уровнем профессионализма и качества работы.
                        Вернуть первоначальный вид ботинкам поможет <strong><em>ремонт обуви</em></strong> от «Ун Моменто» в Киеве.</p>
                    <p><strong>Подобно ювелирным мастерам, наши специалисты с филигранностью
                            проводят <em>ремонт обуви</em> любого вида.</strong> Начиная от зимней, которая страдает от выходок
                        природы, и заканчивая летними шлепанцами и обувью из замши, набука, лакированной кожи.</p>
                    <p><strong>К Вашим услугам также качественная чистка обуви в
                            Киеве</strong><strong>. </strong>Теперь никакие лишние пятна или грязь не смогут затмить блеск
                        любимых туфель.</p>
                    <p>Обычная <strong><em>прачечная</em></strong> в городе <strong><em>Киев</em></strong>,
                        как правило, не оправдывает наших надежд - либо приходится долго ждать, либо пятна не отстирываются,
                        либо цена слишком высока. Но, теперь вы сможете забыть о подобных проблемах.
                        Химчистка «UNMOMENTO» - это доступные цены в сочетании с оперативностью выполнения заказа и высококачественным сервисом.</p>
                    <p>У вас накопилось много вещей, которые давно пора отправить в химчистку? Сняли гардины и шторы, но все не хватает времени отвезти их в пункт приема? Несмотря на то, что филиалы химчистки «Унмоменто» расположены по всему Киеву, иногда просто физически нет времени, чтобы их туда отвезти.  А в конце рабочего дня совсем не хочется заниматься бытовыми вопросам. Прачечная Киев «Унмоменто» предлагает доставку ваших вещей в пункт приема и обратно. Почему стоит воспользоваться этой услугой? Приведем 3 основные причины:
                    <ul style="text-align: left;">
                        <li>- вам не придется простаивать «в пробках» в час пик;</li>
                        <li>- наши сотрудники приедут в удобное для вас время даже в выходные дни;</li>
                        <li>- мы предлагаем доступные цены на услугу.</li>
                    </ul>
                    </p>
                    <p><strong><span style="text-decoration: underline;">Мы сделаем все, чтобы ваши вещи всегда дарили вам радость и красоту!</span></strong>
                    </p>
                </div>
            </div>

            <div class="button-open-seo btn btn--blue">Детальней</div>

        </div>
    </section>

</main>

