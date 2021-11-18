<?php global $detect; ?>
<main>

    <?php $spec_services = array(
        1 => array(
            'name' => 'Хімчистка<br> одягу і взуття',
            'pic_name' => 'f-i-1.png',
            'url' => 'https://ua.unmomento.com.ua/uslugi/',
            'target' => '_self',
            'nofollow' => false
        ),
        2 => array(
            'name' => 'Хімчистка м\'яких<br> меблів',
            'pic_name' => 'f-i-4.png',
            'url' => 'https://ua.unmomento.com.ua/uslugi/himchistka-mjagkoi-mebeli/',
            'target' => '_self',
            'nofollow' => false
        ),
        3 => array(
            'name' => 'Чистка ексклюзивних<br> виробів',
            'pic_name' => 'f-i-5.png',
            'url' => 'https://cutt.ly/Vegc2u1', /**/
            'target' => '', /*_blank',*/
            'nofollow' => false
        ),
        4 => array(
            'name' => 'Корпоративне обслуговування',
            'pic_name' => 'f-i-3.png',
            'url' => 'https://ua.unmomento.com.ua/uslugi/korporativnoe-obsluzhivanie.html',
            'target' => '_self',
            'nofollow' => false
        ),
        5 => array(
            'name' => 'Франчайзинг',
            'pic_name' => 'f-i-6.png',
            'url' => 'https://ua.unmomento.com.ua/franchayzing/o-franchayzinge.html',
            'target' => '_self',
            'nofollow' => false
        ),
        6 => array(
            'name' => 'Продаж <br> засобів для прання',
            'pic_name' => 'f-i-2.png',
            'url' => 'http://ua.shop.umcleaning.kiev.ua/',
            'target' => '_blank',
            'nofollow' => true
        )
    ); ?>


    <div class="search-mobile-block">
        <div class="container">
            <div class="search-cont">
                <form method="get" id="sform" name="sform" action="/search-result/">
                    <input class='search-field' type="text" id="stext" name="stext" autocomplete="off"
                           placeholder="Пошук послуги...">
                    <div class="searchsubmit">

                        <input type="submit" class="menuupd_searchsubmit bluebutton"
                               value="">
                        Пошук
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
                        <p>роки досвіду</p>
                    </div>
                </a>
                <a href="/o-kompanii/kontakty.html" class="single-achiv">
                    <div class="img">
                        <img src="/templates/build/img/ac-m-2.png" alt="">
                    </div>
                    <div class="text">
                        <span>57</span>
                        <p>пунктів прийому</p>
                    </div>
                </a>
                <div class="single-achiv">
                    <div class="img">
                        <img src="/templates/build/img/ac-m-3.png" alt="">
                    </div>
                    <div class="text">
                        <span>1 млн+</span>
                        <p>клієнтів</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cards-section">
        <div class="container">
            <div class="cards-section__container">
                <div class="cards-list">
<!--                    --><?php
//                    $news = dbQuery("SELECT id,url,name, sdate, (SELECT id FROM images WHERE source = 1 AND parentid = content.id ORDER BY showorder DESC LIMIT 1) as imid
//            FROM content WHERE parentid = 2890 AND ispublish = 1 ORDER BY showorder ASC LIMIT 0,3");
//                    foreach ($news as $r) {
//                        $images = getImages($r["id"], 1);
//
//                        $mainImg = getImageById($r["imid"]);
//                        $img = getResizeImageById($mainImg["id"], "h", array("height" => 274), $mainImg["format"], $mainImg, 85);
//
//                        $date_arr = split('[/.-]', $r["sdate"]);
//                        $date = $date_arr[2] . "." . $date_arr[1] . "." . $date_arr[0];
//                        ?>
<!--                        <a href="--><?//= $r["url"] ?><!--" class="single-card">-->
<!--                            <div class="img">-->
<!--                                <img class="lazyload" data-src="--><?php //echo (_SITE.$img) ?><!--" alt="">-->
<!--                            </div>-->
<!--                            <div class="text">-->
<!--                                <span class="date">--><?//= $date ?><!--</span>-->
<!--                                <span class="tag">Новини</span>-->
<!--                                <p>--><?//= $r["name"] ?><!--</p>-->
<!---->
<!--                                <div class="btn btn--blue">докладніше</div>-->
<!---->
<!--                            </div>-->
<!--                        </a>-->
<!---->
<!--                    --><?php //} ?>
                    <a href="https://uaum.ppa.kiev.ua/novosti" class="single-card">
                        <div class="img">
                            <img class="lazyload" data-src="https://um.ppa.kiev.ua//images/thumbs/2932-0x274.jpeg" alt="">
                        </div>
                        <div class="text">
                            <span class="tag">Новини</span>
                            <p>Сеть UNMOMENTO работает в обычном режиме!</p>

                            <div class="btn btn--blue">докладніше</div>

                        </div>
                    </a>
                    <a href="https://uaum.ppa.kiev.ua/sovety-ot-unmomento/" class="single-card">
                        <div class="img">
                            <img class="lazyload" data-src="https://um.ppa.kiev.ua//images/thumbs/901-0x300.jpeg" alt="">
                        </div>
                        <div class="text">
                            <span class="tag">Поради</span>
                            <p>"Почему и для чего?"  - разница между типами чистки в  UNMOMENTO</p>

                            <div class="btn btn--blue">докладніше</div>

                        </div>
                    </a>
                    <a href="https://uaum.ppa.kiev.ua/loyalty/" class="single-card">
                        <div class="img">
                            <img class="lazyload" data-src="https://um.ppa.kiev.ua//images/thumbs/1078-0x274.jpeg" alt="">
                        </div>
                        <div class="text">
                            <span class="tag">Програма лояльності</span>
                            <p>Акция на чистку
                                мебели</p>

                            <div class="btn btn--blue">докладніше</div>

                        </div>
                    </a>
                </div>

            </div>
        </div>
    </section>

    <section class="seo-block">
        <div class="container">
            <div class="seo-title">
                ХІМЧИСТКА «UNMOMENTO» - МИ ЗБЕРЕЖЕМО ТО, <br>ЩО Є ЦІННИМ ДЛЯ ВАС!
            </div>
            <div class="seo-text">
                <p><strong>Одяг - це не просто поєднання тканини, модного фасону і підходящої фурнітури.Каждая річ
                        несе в собі емоцію і спогади, які міцно пов'язують її з власником.</strong><br>
                    Двадцятирічний досвід щоденної роботи допоміг нашій компанії твердо переконатися в цих словах.
                </p>
                <p>Тому <em>хімчистка </em> «UNMOMENTO» докладає всіх зусиль, щоб якісно і оперативно усунути
                    будь-які неприємності, які могли статися з вашими улюбленими речами. . Будь то звичайна <strong>чистка
                        взуття, ремонт взуття, пральня, клінінг</strong> або навіть ретельна <strong>хімчистка
                        хутра</strong> – професіонали <strong>«UNMOMENTO»</strong> бездоганно впораються з будь-яким
                    завданням.</p>
                <p><strong>«Ми даруємо чистоту і радість кожному».</strong><br>
                    Кредо компанії свідчить про наявність лідерських переконань: ще в 1996 році - звичайна
                    <strong><em>звичайна пральня хімчистка в м.Київ,</em></strong> ,сьогодні - відомий бренд,
                    наявність більше 50-ти прийомних пунктів в місті Києві та області, співпраця зі світовими
                    виробниками.<br>
                    Хіба не привід для успіху?<br>
                    Ще одна відмінна принцип, якого дотримується наша <strong><em>хімчистка</em></strong> в місті
                    Київ -широкий спектр послуг, детально дізнатися про які Ви зможете в однойменному розділі. В
                    основному, діяльність зводиться до наступних напрямках:
                </p>
                <div class="add-main-text">
                    <ul>
                        <li><em>Якісний клінінг</em></li>
                        <li><em>Ремонт одягу</em></li>
                        <li><em>Ремонт взуття</em></li>
                        <li><em>Ретельне чищення взуття та одягу</em></li>
                        <li><em>Хімчистка предметів домашнього вжитку</em></li>
                        <li><em>Пральня</em></li>
                        <li><em>Прасування</em></li>
                        <li><em>Персональний технолог</em></li>
                        <li><em>Обробка сріблом</em></li>
                        <li><strong><em>Доставка всіх виробів</em></strong></li>
                    </ul>
                    <h2 style="font-size: 14px;color:#393939">Клінінг від «UNMOMENTO» - прибирання може бути
                        приємною і веселою ... Якщо, звичайно, Ви доручили її нам ☺</h2>
                    <p>Вологий, сухий, генеральний <strong><em>клінінг в Києві,</em></strong> прибирання домашніх і
                        офісних приміщень після ремонту - легке завдання для професійної команди
                        <strong>UNMOMENTO.</strong></p>
                    <p>Завдяки досвіду, професійному обладнанню та інноваційних препаратів, ми можемо гарантувати
                        якість прибирання і бездоганну чистоту у вашому будинку, квартирі та офісі.</p>
                    <p><strong>Ми надаємо оперативний і високоякісний <em>клінінг</em></strong> за допомогою
                        полемічних машин, пилососів, парогенераторів та інших пристроїв для прибирання. Зокрема</p>
                    <ul style="text-align: left;">
                        <li><strong><em>клінінг</em></strong><strong> вікон і вітрин;</strong></li>
                        <li><strong><em>хімчистка </em></strong><strong> всіх видів покриттів;</strong></li>
                        <li><strong>обробка гранітних і мармурових поверхонь;</strong></li>
                        <li><strong>прибирання снігу;</strong></li>
                        <li><strong><em>клінінг </em></strong><strong>територій та ін.</strong></li>
                    </ul>
                    <h2 style="font-size: 14px;color:#393939">Ремонт одягу - запорука того, що ваш одяг завжди буде
                        виглядати стильно!</h2>

                    <p><strong>У кожній шафі знайдеться красива річ, яка дуже довго "чекала" свого часа.&#8986; <em>Прощатися
                                з нею не хочеться, а носити нема з чим? </em></strong></p>
                    <p>Майстри UNMOMENTO вирішать цю дилему. Завдяки таланту, почуттю стилю і багаторічному досвіду
                        фахівців UNMOMENTO, ваші речі завжди будуть в тренді!<br><strong>Ремонт одягу, який
                            здійснюють наші майстерні в місті Київ і в інших містах, можуть перетворити будь-який
                            елемент гардеробу у святкове вбрання</strong>. Цьому також допоможе наша <strong>пральня.</strong>
                        Не вірите? Приходьте до нас і переконайтеся самі: після професійного чищення, ваші речі
                        будуть виглядати бездоганно, ніби Ви щойно придбали її в магазині.</strong></p>
                    <p><strong><em>Ремонт одягу </em></strong> від « Ун Моменто » - це також якісна <strong><em>хімчистка
                                шкіри</em></strong>, хутра, замші, <strong><em>чистка сумок, взуття </em></strong> і
                        інших аксесуарів. Наші фахівці знають як зберегти насиченість кольору, форму і красу кожного
                        елемента гардероба.<br>Льон, бавовна, шовк, вовна, або віскоза - делікатна чистка та
                        <strong><em>ремонт одягу</em></strong> усунуть всі «неприємності», не змінюючи при цьому
                        первозданний вигляд виробу. Те ж саме пропонує <strong><em>ремонт взуття </em></strong> від
                        нашої компанії.</p>
                    <h2 style="font-size: 14px;color:#393939">Причепурився сам - причепурити свою квартиру</h2>
                    <p><strong><em>Ми знаємо секрети ідеальної чистоти і порядку ...</em></strong></p>
                    <p><strong>Працівники «Ун Моменто» почистять килими, штори та гардини так, що навіть господиня
                            зі стажем або будь-яка інша <em>хімчистка в м.Київ</em> зможе позаздрити</strong>.
                        Крім чистки, ми також проводимо демонтаж і навішування вищезазначених об'єктів. Тому Вам не
                        доведеться витрачати час на дрібниці.</p>
                    <p>А щоб Ваші діти завжди були в безпеці і в будь-яку хвилину могли обійняти свого іграшкового
                        друга - ми охоче проведемо <strong><em>чистку іграшок.</em></strong></p>
                    <h2 style="font-size: 14px;color:#393939">Ремонт взуття - все до найдрібніших деталей</h2>
                    <p><strong><em>- Туфлі можуть змінити життя ... Не вірите?</em></strong></p>
                    <p><strong><em>Запитайте у Попелюшки!</em></strong></p>

                    <p>Не кожна <strong><em>майстерня по ремонту взуття </em></strong> взуття може похвалитися таким
                        високим рівнем професіоналізму і якості роботи.
                        Повернути первісний вигляд черевиків допоможе <strong><em>ремонт взуття </em></strong> від
                        «Ун Моменто» в Києві.</p>
                    <p><strong>Подібно ювелірним майстрам, наші фахівці з філігранністю проводять
                            <em>ремонт взуття </em> будь-якого виду.</strong> Починаючи від зимової, яка страждає
                        від витівок природи, і закінчуючи літніми капцями і взуттям із замші, набука, лакованої
                        шкіри</p>
                    <p><strong>До Ваших послуг також якісна чистка взуття в Києві</strong><strong>. </strong>Тепер
                        ніякі зайві плями або бруд не зможуть затьмарити блиск улюблених туфель.</p>
                    <p>Звичайна <strong><em>пральня</em></strong> в місті <strong><em>Київ</em></strong>, як
                        правило, не виправдовує наших надій - або доводиться довго чекати, або плями не
                        відпираються, або ціна занадто висока. Але, тепер ви зможете забути про подібні проблеми.
                        Хімчистка «UNMOMENTO» - це доступні ціни в поєднанні з оперативністю виконання замовлення і
                        високоякісним сервісом.</p>
                    <p><strong><span style="text-decoration: underline;">Ми зробимо все, щоб ваші речі завжди дарували вам радість і красу!</span></strong>
                    </p>
                </div>
            </div>

            <div class="button-open-seo btn btn--blue">Детальніше</div>

        </div>
    </section>
</main>
