<?php global $detect;?>
<main>

<?php //include 'mob_header_buttons.php'; ?>

<?php $spec_services = array(
    1 => array(
        'name' => 'Хімчистка<br> одягу і<br> взуття',
        'pic_name' => 'himchistka.svg',
        'url' => 'https://ua.unmomento.com.ua/uslugi/',
        'target' => '_self',
        'nofollow' => false
    ),
    2 => array(
        'name' => 'Хімчистка м\'яких<br> меблів',
        'pic_name' => 'divan.svg',
        'url' => 'https://ua.unmomento.com.ua/uslugi/himchistka-mjagkoi-mebeli/',
        'target' => '_self',
        'nofollow' => false
    ),
    3 => array(
        'name' => 'Чистка ексклюзивних<br> виробів',
        'pic_name' => 'diamonds.svg',
        'url' => 'https://cutt.ly/Vegc2u1', /**/
        'target' => '', /*_blank',*/
        'nofollow' => false
    ),
    4 => array(
        'name' => 'Корпоративне обслуговування',
        'pic_name' => 'shirt.svg',
        'url' => 'https://ua.unmomento.com.ua/uslugi/korporativnoe-obsluzhivanie.html',
        'target' => '_self',
        'nofollow' => false
    ),
    5 => array(
        'name' => 'Франчайзинг',
        'pic_name' => 'puzzle.svg',
        'url' => 'https://ua.unmomento.com.ua/franchayzing/o-franchayzinge.html',
        'target' => '_self',
        'nofollow' => false
    ),
    6 => array(
        'name' => 'Продаж засобів для прання',
        'pic_name' => 'bottle.svg',
        'url' => 'http://ua.shop.umcleaning.kiev.ua/',
        'target' => '_blank',
        'nofollow' => true
    )
); ?>
    <section class="spec-services">
        <div class="container">
            <div class="spec-services__container">

            </div>
        </div>
    </section>
<div class="special-services-wrap">
    <div class="new-main-wrap">
        <div class="special-services-cont">
            <?php foreach($spec_services as $spec_service){ ?>
            <div class="special-service-col">
                <div class="special-service-inner">
                    <a href="<?php echo $spec_service['url'] ?>" 
                    target="<?php echo $spec_service['target']?>"
                    <?php if($spec_service['nofollow'] === true) { echo 'rel="nofollow"';}?>
                    class="block-link"></a>
                    <div class="special-service-img_fix">
                        <img loading="lazy" class="fits" alt="" src="/templates/img/<?php echo $spec_service['pic_name'] ?>"/>
                    </div>
                    <div class="special-service-title"><?php echo $spec_service['name'] ?></div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
<div class="new-main-wrap">
    <div class="slider-section">    
    <?php if (!$detect->isMobile() ) { ?>
        <?php $banners = dbQuery("SELECT id, urlname FROM content WHERE parentid = 2972 AND ispublish = 1 ORDER BY showorder");
        if (count($banners) > 1){ 
        ?>
            <script>
                document.addEventListener("DOMContentLoaded", function(event) {
            <?php $cnt=0;
                foreach($banners as $image){
                $cnt++;    
                $mainImg = getMainImage($image["id"],1);
                $img = getResizeImageById($mainImg["id"],"w",array("width"=>1024),$mainImg["format"],$mainImg,80); 
            ?>
                    setTimeout(function(){
                        var slide = document.getElementById('dpsslide-<?php echo $cnt; ?>');
                        slide.style.backgroundImage="url('<?= _SITE.$img?>')";
                    },<?php echo $cnt*1000; ?>);
            <?php } ?>
                });
            </script>
        <div class="slider-wrap">
            <?php 
            $cnt=0;
            foreach($banners as $image){
                $cnt++;
                $mainImg = getMainImage($image["id"],1);
                $img = getResizeImageById($mainImg["id"],"w",array("width"=>1024),$mainImg["format"],$mainImg,80); 
            ?>
            <a href="<?php print $image["urlname"]; ?>" class="slide imageId<? echo $image["id"]; ?>" id="dpsslide-<?php echo $cnt; ?>"></a>
            <?php } ?>

            <?php $video = dbQuery("SELECT * FROM video WHERE parentid = 1"); $cnt=0;?>
            <?php foreach($video as $vi) { $cnt++;?> 
            <div class="slide youtube-slide">
                <iframe id="youtube-slide-<?php echo $cnt; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
            <?php } ?>
            <script>
                document.addEventListener("DOMContentLoaded", function(event) {
                <?php $cnt=0;
                    foreach($video as $vi) { $cnt++;?> 
                    var video = document.getElementById('youtube-slide-<?php echo $cnt; ?>');
                    video.src = "https://www.youtube.com/embed/<?php echo $vi['video']?>?rel=0&controls=0&showinfo=0";
                <?php } ?>
                });
            </script>
        </div>
        <?php } else { 
                $mainSoloImg = getMainImage($banners[0]["id"],1);?>
        <div class="pic-wrap">
            <a class="um-block-link" href="<? print $banners[0]["urlname"]; ?>"></a>
            <div class="slide" style="background-image: url('/images/files/<?=$mainSoloImg["image"]?>')">
            </div>
        </div>
        <?php } ?>
    <?php } ?>
        <div class="circles-wrap">
            <a href="o-kompanii/o-kompanii/" class="block-with-circle one-third">
                <div class="one-circle">
                    <div class="outer-circle"></div>
                    <div class="inner-circle">
                        <div class="circle-text">
                            <span class="red-num">23<span class="smaller">+</span></span>
                            <span class="black-text">роки</span>
                            <span class="black-text">досвіду</span>
                        </div>
                    </div>
                </div>
            </a>
            <a href="/o-kompanii/kontakty.html" class="block-with-circle one-third">
                <div class="one-circle">
                    <div class="outer-circle"></div>
                    <div class="inner-circle">
                        <div class="circle-text">
                            <span class="red-num">57<span class="smaller">+</span></span>
                            <span class="black-text">пунктів</span>
                            <span class="black-text">прийому</span>
                            <span class="black-text">в Києві</span>
                        </div>
                    </div>
                </div>
            </a>
            <div class="block-with-circle one-third">
                <div class="one-circle">
                    <div class="outer-circle"></div>
                    <div class="inner-circle">
                        <div class="circle-text">
                            <span class="red-num"><span class="text-08">1 млн<span class="smaller">+</span></span></span>
                            <span class="black-text">клієнтів</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="news-section">
        <div class="section-title"><h1 class="section-title">Новини і акції</h1></div>
        <div class="news-cont">
        <?php
            $news = dbQuery("SELECT id,url,name, sdate, (SELECT id FROM images WHERE source = 1 AND parentid = content.id ORDER BY showorder DESC LIMIT 1) as imid
            FROM content WHERE parentid = 2890 AND ispublish = 1 ORDER BY showorder ASC LIMIT 0,3");
            foreach($news as $r) {
            $images = getImages($r["id"],1);

            $mainImg = getImageById($r["imid"]);
            $img = getResizeImageById($mainImg["id"],"h",array("height"=>274),$mainImg["format"],$mainImg,85); 

            $date_arr = split('[/.-]', $r["sdate"]);
            $date = $date_arr[2].".".$date_arr[1].".".$date_arr[0];
            ?>
            <a href="/<?=$r["url"]?>" class="one-third">
                <div class="img" style="background-image: url('<?=$img?>')"></div>
                <div class="info-block">
                        <div class="date"><?=$date?></div>
                        <div class="title"><?=$r["name"]?></div>
                        <div class="nextbtn">докладніше</div>
                </div>
            </a>
            <?php } ?>
        </div>
        <a href="/novosti/" class="button new-button">всі новини</a>
    </div>
    <div class="promo-section">
        <div class="section-title">програми лояльності</div>
        <div class="promo-cont">
            <?php
                $promo = dbQuery("SELECT id, url FROM content WHERE parentid = 3078 AND ispublish = 1 ORDER BY id DESC LIMIT 0,3");
                foreach($promo as $r) {

                $img_arr = getImages($r["id"],1);
                $mainImg = $img_arr[0];
                $img = getResizeImageById($mainImg["id"],"h",array("height"=>274),$mainImg["format"],$mainImg,85); 
            ?>
            <a href="/<?=$r["url"]?>" class="one-third">
                <div class="promo-inside-wrap">
                    <div class="promo-inside" style="background-image: url('<?=$img?>')"></div>
                </div>
            </a>
            <?php } ?>

        </div>
        <a href="/loyalty/" class="button new-button">всі програми</a>
    </div>
    <div class="advise-section">
        <div class="section-title">Поради від Unmomento</div>
        <div class="advise-cont">
            <?php
                $advise = dbQuery("SELECT id, url, name, DATE_FORMAT(sdate,'%d.%m.%Y') as itemdate, (SELECT id FROM images WHERE source = 1 AND parentid = content.id ORDER BY showorder DESC LIMIT 1) as imid,info FROM content WHERE parentid = 3222 AND ispublish = 1 ORDER BY showorder LIMIT 0,2");
                foreach($advise as $r) {
                    $info = '<p>'.substr(strip_tags(html_entity_decode(htmlspecialchars_decode($r["info"]),ENT_QUOTES, "UTF-8")),0,512).'</p>';

                    $mainImg = getImageById($r["imid"]);

                    if($mainImg == "/templates/images/nofoto.jpg")
                            $mainImg = "/images/no.png";

                    $img = getResizeImageById($mainImg["id"],"h",array("height"=>300),$mainImg["format"],$mainImg,80); 
                ?>
            <a href="/<?=$r["url"]?>" class="one-half">
                <div class="img-wrap">
                    <div class="img"  style="background-image: url('<?=$img?>')"></div>
                </div>
                <div class="info-block">
                    <div class="title"><?php echo $r["name"];?></div>
                    <div class="text"><?php echo $info;?></div>
                    <div class="nextbtn">далі</div>
                </div>
            </a>
            <?php } ?>
        </div>
        <a href="/sovety-ot-unmomento/" class="button new-button">всі поради</a>
    </div>
</div>
<div class="main_content">
    <div class="presentation_corporate clear_after container">
        <div class="block_gorizont">
            <a href="/franchayzing/o-franchayzinge.html" class="block_def violet">
                <div class="foto" style="background-image:url(/templates/img/ban2.jpg)"></div>
                <div class="block_info">
                    <span class='vfix'></span>
                    <div class="container_vfix">
                        <div class="description">
                            Франчайзінг
                        </div>
                        <div class="text">
                            Революційна розробка
                            Технологи компанії «Ун Моменто»
                        </div>
                    </div>
                </div>

            </a>
        </div>
        <div class="block_vertical">
            <a href="/uslugi/professionalnyy-klining.html" target="_blank" class="block_def green" >
                <div class="foto" style="background-image:url(/templates/img/ban1.jpg)"></div>
                <div class="block_info">
                    <span class='vfix'></span>
                    <div class="container_vfix">
                        <div class="description">
                            Професійний клінінг
                        </div>
                    </div>
                </div>
            </a>
            <!--a href="http://oscar.kiev.ua/" target="_blank" class="block_def blue"-->
            <a href="https://cutt.ly/Vegc2u1" class="block_def blue">
                <div class="foto" style="background-image:url(/templates/img/ban3.jpg)"></div>
                <div class="block_info">
                    <span class='vfix'></span>
                    <div class="container_vfix">
                        <div class="description">
                            Чистка ексклюзивних виробів
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="container">
        <div class="container_training clear_after">
                        <?
            $ind = 0;
            isset($head['parentid']) ? $parent = " AND parentid = $head[id]" : "";
            $head['id']==1 ? $limit = " LIMIT 0,3" : $limit = "";
            $articles = dbQuery("SELECT * FROM articles WHERE ispublish = 1 $parent ORDER BY id DESC $limit ");
            foreach ($articles as $r) {
                $ind++;
                $url = "/stati/" . create_urlname($r['name']) . "_" . $r['id'];
                ?>
                <a href="<?=$url?>" class="blocl_training">
                <div class="title"><?=$r['name']?></div>
                <div class="desc"><?=maxsite_str_word(htmlspecialchars_decode($r['info']), 20, " ")?>...</div>
                <div class="button_next">далі</div>
                </a>
            <? } ?>

        </div>
    </div>
    <div class="container clear_after">
        <div class="blocl_training new clear_after">
            <a href="/stati/" class="button_next_all">Корисні статті</a>
            <div class="title">ХІМЧИСТКА «UNMOMENTO» - МИ ЗБЕРЕЖЕМО ТО, <br>ЩО Є ЦІННИМ ДЛЯ ВАС!</div>
            <div class="block_desc def-seo">
                    <p><strong>Одяг - це не просто поєднання тканини, модного фасону і підходящої фурнітури.Каждая річ несе в собі емоцію і спогади, які міцно пов'язують її з власником.</strong><br>
                    Двадцятирічний досвід щоденної роботи допоміг нашій компанії твердо переконатися в цих словах.</p>
                    <p>Тому  <em>хімчистка </em> «UNMOMENTO» докладає всіх зусиль, щоб якісно і оперативно усунути будь-які неприємності, які могли статися з вашими улюбленими речами. . Будь то звичайна <strong>чистка взуття, ремонт взуття, пральня, клінінг</strong> або навіть ретельна <strong>хімчистка хутра</strong> – професіонали <strong>«UNMOMENTO»</strong> бездоганно впораються з будь-яким завданням.</p>
                    <p><strong>«Ми даруємо чистоту і радість кожному».</strong><br>
                    Кредо компанії свідчить про наявність лідерських переконань: ще в 1996 році - звичайна <strong><em>звичайна пральня хімчистка в м.Київ,</em></strong> ,сьогодні - відомий бренд, наявність більше 50-ти прийомних пунктів в місті Києві та області, співпраця зі світовими виробниками.<br>
                    Хіба не привід для успіху?<br>
                    Ще одна відмінна принцип, якого дотримується наша <strong><em>хімчистка</em></strong> в місті Київ -широкий спектр послуг, детально дізнатися про які Ви зможете в однойменному розділі. В основному, діяльність зводиться до наступних напрямках:
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
                        <h2 style="font-size: 14px;color:#393939">Клінінг від  «UNMOMENTO» - прибирання може бути приємною і веселою ... Якщо, звичайно, Ви доручили її нам ☺</h2>
                        <p>Вологий, сухий, генеральний <strong><em>клінінг в Києві,</em></strong> прибирання домашніх і офісних приміщень після ремонту - легке завдання для професійної команди <strong>UNMOMENTO.</strong></p>
                        <p>Завдяки досвіду, професійному обладнанню та інноваційних препаратів, ми можемо гарантувати якість прибирання і бездоганну чистоту у вашому будинку, квартирі та офісі.</p>
                        <p><strong>Ми надаємо оперативний і високоякісний <em>клінінг</em></strong> за допомогою полемічних машин, пилососів, парогенераторів та інших пристроїв для прибирання. Зокрема</p>
                        <ul style="text-align: left;">
                            <li><strong><em>клінінг</em></strong><strong> вікон і вітрин;</strong></li>
                            <li><strong><em>хімчистка </em></strong><strong> всіх видів покриттів;</strong></li>
                            <li><strong>обробка гранітних і мармурових поверхонь;</strong></li>
                            <li><strong>прибирання снігу;</strong></li>
                            <li><strong><em>клінінг </em></strong><strong>територій та ін.</strong></li>
                        </ul>
                        <h2 style="font-size: 14px;color:#393939">Ремонт одягу - запорука того, що ваш одяг завжди буде виглядати стильно!</h2>

                        <p><strong>У кожній шафі знайдеться красива річ, яка дуже довго "чекала" свого часа.&#8986; <em>Прощатися з нею не хочеться, а носити нема з чим? </em></strong></p>
                        <p>Майстри UNMOMENTO вирішать цю дилему. Завдяки таланту, почуттю стилю і багаторічному досвіду фахівців UNMOMENTO, ваші речі завжди будуть в тренді!<br><strong>Ремонт одягу, який здійснюють наші майстерні в місті Київ і в інших містах, можуть перетворити будь-який елемент гардеробу у святкове вбрання</strong>. Цьому також допоможе наша <strong>пральня.</strong> Не вірите? Приходьте до нас і переконайтеся самі: після професійного чищення, ваші речі будуть виглядати бездоганно, ніби Ви щойно придбали її в магазині.</strong></p>
                        <p><strong><em>Ремонт одягу </em></strong> від « Ун Моменто »  - це також якісна  <strong><em>хімчистка шкіри</em></strong>, хутра, замші, <strong><em>чистка сумок, взуття </em></strong> і інших аксесуарів. Наші фахівці знають як зберегти насиченість кольору, форму і красу кожного елемента гардероба.<br>Льон, бавовна, шовк, вовна, або віскоза - делікатна чистка та <strong><em>ремонт одягу</em></strong> усунуть всі «неприємності», не змінюючи при цьому первозданний вигляд виробу. Те ж саме пропонує <strong><em>ремонт взуття </em></strong> від нашої компанії.</p>
                        <h2 style="font-size: 14px;color:#393939">Причепурився сам - причепурити свою квартиру</h2>
                        <p><strong><em>Ми знаємо секрети ідеальної чистоти і порядку ...</em></strong></p>
                        <p><strong>Працівники «Ун Моменто» почистять килими, штори та гардини так, що навіть господиня зі стажем або будь-яка інша <em>хімчистка в м.Київ</em> зможе позаздрити</strong>.
                            Крім чистки, ми також проводимо демонтаж і навішування вищезазначених об'єктів. Тому Вам не доведеться витрачати час на дрібниці.</p>
                        <p>А щоб Ваші діти завжди були в безпеці і в будь-яку хвилину могли обійняти свого іграшкового друга - ми охоче проведемо  <strong><em>чистку іграшок.</em></strong></p>
                        <h2 style="font-size: 14px;color:#393939">Ремонт взуття - все до найдрібніших деталей</h2>
                        <p><strong><em>- Туфлі можуть змінити життя ... Не вірите?</em></strong></p>
                        <p><strong><em>Запитайте у Попелюшки!</em></strong></p>

                        <p>Не кожна  <strong><em>майстерня по ремонту взуття </em></strong> взуття може похвалитися таким високим рівнем професіоналізму і якості роботи.
                        Повернути первісний вигляд черевиків допоможе  <strong><em>ремонт взуття </em></strong> від «Ун Моменто» в Києві.</p>
                        <p><strong>Подібно ювелірним майстрам, наші фахівці з філігранністю проводять 
                           <em>ремонт взуття </em> будь-якого виду.</strong> Починаючи від зимової, яка страждає від витівок природи, і закінчуючи літніми капцями і взуттям із замші, набука, лакованої шкіри</p>
                        <p><strong>До Ваших послуг також якісна чистка взуття в Києві</strong><strong>. </strong>Тепер ніякі зайві плями або бруд не зможуть затьмарити блиск улюблених туфель.</p>
                        <p>Звичайна <strong><em>пральня</em></strong> в місті <strong><em>Київ</em></strong>, як правило, не виправдовує наших надій - або доводиться довго чекати, або плями не відпираються, або ціна занадто висока. Але, тепер ви зможете забути про подібні проблеми. Хімчистка «UNMOMENTO» - це доступні ціни в поєднанні з оперативністю виконання замовлення і високоякісним сервісом.</p>
                        <p><strong><span style="text-decoration: underline;">Ми зробимо все, щоб ваші речі завжди дарували вам радість і красу!</span></strong>
                        </p>
                    </div>
                    <div class="button_next">далі</div>
            </div>
        </div>
    </div>
</div>
</main>
