<?php

$arr = dbQuery("SELECT id,url,name,preview,
(SELECT id FROM images WHERE source = 1 AND parentid = content.id AND is_main = 1) as imid,
(SELECT format FROM images WHERE source = 1 AND parentid = content.id AND is_main = 1) as imformat
FROM content WHERE parentid = 3220 AND ispublish = 1 ORDER BY showorder"); ?>
<?php include 'mob_header_buttons.php'; ?>
<div class="container_news def">
    <h1 style ="display:none;">Media</h1>
    <div class="main_content block_margin clear_after">
        <div class="presentation_block clear_after container">    <?
$i = 0;
foreach($arr as $r)
{

    $i++;
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

                <a href="/<?=$r["url"]?>" class="block_def <? if ($i==1) { echo('blue');

} else if($i==2) {  echo('green');

} else {  echo('orange');

} ?>">
                    <div class="foto" style="background-image:url('<?php echo $img["image"]; ?>')"></div>
                    <div class="block_info">
                        <span class="vfix"></span>
                        <div class="container_vfix">
                            <div class="description">
                               <?=$r["name"]?>
                            </div>
                        </div>
                    </div>

                </a>
    <?
    if($i == 3) { $i = 0; }
}
?>
        </div>
    </div>
</div>
<div class="clear"></div>

<?/*<div class="main_content block_margin clear_after">
    <?php include("company-menu.php"); ?>
    <div class="media-wrap">
        <div class="media-container">
            <div class="one-third loadOnClick">
                <div class="bckgrnd-wrap">
                    <div class="video_container" data-youtube="VijifBB3NR0">
                        <div class="cover-img" style="background-image: url('templates/images/video-cover/screen1.jpg')"></div>
                    </div>
                    <div class="arrow-container">
                        <div class="text-container">
                            <span class="vfix"></span>
                            <div class="container_vfix">
                                <div class="info">
                                Новогодние чудеса от UNMOMENTO.
                                Милая и полная добра акция от сети химчисток к Новому Году. Ведь абсолютно каждый заслуживает на небольшое чудо. И мы решили стать теми, кто его подарит:)
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
            <div class="one-third loadOnClick">
                <div class="bckgrnd-wrap">
                    <div class="video_container" data-youtube="EZNFmqW-JRg">
                        <div class="cover-img" style="background-image: url('templates/images/video-cover/screen2.jpg')"></div>
                    </div>
                    <div class="arrow-container">
                        <div class="text-container">
                            <span class="vfix"></span>
                            <div class="container_vfix">
                                <div class="info">
                                Почему одежду нужно сдавать в химчистку, а не стирать самостоятельно в домашних условиях? Какие привилегии вас ждут в UNMOMENTO? Все ответы в видео!
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
            <div class="one-third loadOnClick">
                <div class="bckgrnd-wrap">
                    <div class="video_container" data-youtube="gACZ25q4ayE">
                        <div class="cover-img" style="background-image: url('templates/images/video-cover/screen3.jpg')"></div>
                    </div>
                    <div class="arrow-container">
                        <div class="text-container">
                            <span class="vfix"></span>
                            <div class="container_vfix">
                                <div class="info">
                                Преобразить замшевую и кожаную обувь могут лишь профессионалы сети химчисток UNMOMENTO.
                                Как? Благодаря многолетнему опыту, высокой квалификации мастеров и профессиональных препаратов, которые вы не найдете на полках магазинов.
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
            <div class="one-third loadOnClick">
                <div class="bckgrnd-wrap">
                    <div class="video_container" data-youtube="x8KaZlIurCo">
                        <div class="cover-img" style="background-image: url('templates/images/video-cover/screen4.jpg')"></div>
                    </div>
                    <div class="arrow-container">
                        <div class="text-container">
                            <span class="vfix"></span>
                            <div class="container_vfix">
                                <div class="info">
                                Доверьте нам заботу о чистоте вашего дома, офиса, магазина, склада или любого другого помещения, нуждающегося в профессиональном клининге один раз, и вы гарантированно станете нашим постоянным клиентом!
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
            <div class="one-third loadOnClick">
                <div class="bckgrnd-wrap">
                    <div class="video_container" data-youtube="Yub9UZUYxfY">
                        <div class="cover-img" style="background-image: url('templates/images/video-cover/screen5.jpg')"></div>
                    </div>
                    <div class="arrow-container">
                        <div class="text-container">
                            <span class="vfix"></span>
                            <div class="container_vfix">
                                <div class="info">
                                Доказано: в 98% матрасов живут пылевые клещи, которые могут стать причиной бронхиальной астмы! А как от них избавиться смотрите в видео.
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
            <div class="one-third loadOnClick">
                <div class="bckgrnd-wrap">
                    <div class="video_container" data-youtube="70d7Xz7HVxk">
                        <div class="cover-img" style="background-image: url('templates/images/video-cover/screen6.jpg')"></div>
                    </div>
                    <div class="arrow-container">
                        <div class="text-container">
                            <span class="vfix"></span>
                            <div class="container_vfix">
                                <div class="info">
                                Доказано: в 98% матрасов живут пылевые клещи, которые могут стать причиной бронхиальной астмы! А как от них избавиться смотрите в видео.
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</div>*/?>
