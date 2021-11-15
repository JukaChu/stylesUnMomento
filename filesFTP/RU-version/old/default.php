<?php global $detect; ?>
<div class="wrapper">
<?php include 'mob_header_buttons.php'; ?>
<?php $spec_services = array(
    1 => array(
        'name' => 'Химчистка<br> одежды и<br> обуви',
        'pic_name' => 'himchistka.svg',
        'url' => 'https://unmomento.com.ua/uslugi/',
        'target' => '_self',
        'nofollow' => false
    ),
    2 => array(
        'name' => 'Химчистка мягкой<br> мебели',
        'pic_name' => 'divan1.svg',
        'url' => 'https://unmomento.com.ua/uslugi/himchistka-mjagkoi-mebeli/',
        'target' => '_self',
        'nofollow' => false
    ),
    3 => array(
        'name' => 'Чистка эксклюзивных<br> изделий',
        'pic_name' => 'diamonds1.svg',
        'url' => 'https://cutt.ly/Negcoy4',/*'https://oscar.kiev.ua/'*/
        'target' => '', /*'_blank',*/
        'nofollow' => false
    ),
    4 => array(
        'name' => 'Корпоративное обслуживание',
        'pic_name' => 'shirt1.svg',
        'url' => 'https://unmomento.com.ua/uslugi/korporativnoe-obsluzhivanie.html',
        'target' => '_self',
        'nofollow' => false
    ),
    5 => array(
        'name' => 'Франчайзинг',
        'pic_name' => 'puzzle1.svg',
        'url' => ' https://unmomento.com.ua/franchayzing/o-franchayzinge.html',
        'target' => '_self',
        'nofollow' => false
    ),
    6 => array(
        'name' => 'Продажа средств для стирки',
        'pic_name' => 'bottle1.svg',
        'url' => 'http://shop.umcleaning.kiev.ua/',
        'target' => '_blank',
        'nofollow' => true
    )
); ?>
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
                        <img loading="lazy" width="95" height="95" class="fits" alt="" src="/templates/img/<?php echo $spec_service['pic_name'] ?>"/>
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
        <?php if (!$detect->isMobile()) { ?>
        <?php
        $banners = dbQuery("SELECT id, urlname FROM content WHERE parentid = 2972 AND ispublish = 1 ORDER BY showorder");
        if (count($banners) > 1){ ?>
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
            <?php $cnt=0;
                foreach($banners as $image){
                $cnt++;    
                $mainImg = getMainImage($image["id"],1);
                $img = getResizeImageById($mainImg["id"],"w",array("width"=>1024),$mainImg["format"],$mainImg,80); 
            ?>
            <?php if ($image["id"]!=3260) {?>
                <a href="<? echo $image["urlname"]; ?>" class="slide imageId<? echo $image["id"]; ?>" id="dpsslide-<?php echo $cnt; ?>"></a>
            <?php } else {?>
                <div class="slide imageId<?php echo $image["id"]; ?>" id="dpsslide-<?php echo $cnt; ?>" style="background-image: url('<?=$img?>');"></div>
            <?php } ?>
            <?php } ?>
            <?php $video = dbQuery("SELECT * FROM video WHERE parentid = 1"); $cnt=0;?>
            <?php foreach($video as $vi) { $cnt++;?> 
            <div class="slide youtube-slide">
                <iframe id="youtube-slide-<?php echo $cnt; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
            <?php } ?>
            <script>
                document.addEventListener("DOMContentLoaded", function(event) {
                    setTimeout(function(){
                <?php $cnt=0;
                    foreach($video as $vi) { $cnt++;?> 
                    var video = document.getElementById('youtube-slide-<?php echo $cnt; ?>');
                    video.src = "https://www.youtube.com/embed/<?php echo $vi['video']?>?rel=0&controls=0&showinfo=0";
                <?php } ?>
                    }, 3000 );
                });
            </script>
        </div>
        <?php } else { 
            $mainSoloImg = getMainImage($banners[0]["id"],1);
        ?>
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
                            <span class="black-text">года</span>
                            <span class="black-text">опыта</span>
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
                            <span class="black-text">пунктов</span>
                            <span class="black-text">приема</span>
                            <span class="black-text">в Киеве</span>
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
                            <span class="black-text">клиентов</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="news-section">
        <div class="section-title"><h1 class="section-title">Новости и акции</h1></div>
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
                        <div class="nextbtn">подробнее</div>
                </div>
            </a>
            <?php } ?>
        </div>
        <a href="/novosti/" class="button new-button">все новости</a>
    </div>
    <div class="promo-section">
        <div class="section-title">Программы лояльности</div>
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
        <a href="/loyalty/" class="button new-button">все программы</a>
    </div>
    <div class="advise-section">
        <div class="section-title">Советы от Unmomento</div>
        <div class="advise-cont">
            <?
            $advise = dbQuery("SELECT id, url, name, DATE_FORMAT(sdate,'%d.%m.%Y') as itemdate, (SELECT id FROM images WHERE source = 1 AND parentid = content.id ORDER BY showorder DESC  LIMIT 1) as imid, info FROM content WHERE parentid = 3222 AND ispublish = 1 ORDER BY showorder LIMIT 0,2");
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
                    <!--div class="date"><?=$r['itemdate']?></div-->
                    <div class="title"><?=$r["name"]?></div>
                    <div class="text"><?=str_replace("&nbsp;", " ", $info)?></div>
                    <div class="nextbtn">далее</div>
                </div>
            </a>
            <?php } ?>
        </div>
        <a href="/sovety-ot-unmomento/" class="button new-button">все советы</a>
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
                            Франчайзинг
                        </div>
                        <div class="text">
                            Революционная разработка
                            Технологи компании «Ун Моменто»
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
                            Профессиональный клининг
                        </div>
                    </div>
                </div>
            </a>
            <a href="https://cutt.ly/Negcoy4" class="block_def blue">
                <div class="foto" style="background-image:url(/templates/img/ban3.jpg)"></div>
                <div class="block_info">
                    <span class='vfix'></span>
                    <div class="container_vfix">
                        <div class="description">
                            Чистка эксклюзивных изделий
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="container">
        <div class="container_training clear_after">
            <?php
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
                <div class="button_next">далее</div>
                </a>
            <? } ?>

        </div>
    </div>
    <div class="container clear_after">
        <div class="blocl_training new clear_after">
            <a href="/stati/" class="button_next_all">полeзные статьи</a>
            <div class="title">ХИМЧИСТКА «UNMOMENTO» -  МЫ СБЕРЕЖЕМ ТО, <br>ЧЕМ ВЫ ДОРОЖИТЕ!</div>
            <div class="block_desc def-seo">
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
                    <div class="button_next">далее</div>
            </div>
        </div>
    </div>
</div>
</div>
