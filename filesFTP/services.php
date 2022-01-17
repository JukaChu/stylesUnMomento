
<main>
    <div class="container">
        <h1 class="main-title">Послуги</h1>
    </div>

    <div class="search-mobile-block search-mobile-block--visible">
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


    <?php
    $services_obj = array(
        0 => array(
            'title' => 'хімчистка',
            'color' => 'blue',
            'subtitle' => 'одягу, взуття, іграшок, штор та ін.',
            'ids' => array(134, 133, 135, 139, 144, 136, 138, 145, 137, 3404, 3143)
        ),
        1 => array(
            'title' => 'Ремонт і чищення',
            'color' => 'red',
            'subtitle' => 'одягу, взуття, сумок та ін.',
            'ids' => array(3156, 141, 148)
        ),
        2 => array(
            'title' => 'клінінг і домашній мастер',
            'color' => 'green',
            'subtitle' => 'прибирання, чищення м\'яких меблів, миття вікон и та ін.',
            'ids' => array(3178, 147, 143)
        ),
        3 => array(
            'title' => 'додаткові послуги',
            'color' => 'orange',
            'subtitle' => '',
            'ids' => array(1639, 3314, 857, 1713, 142, 3016)
        )
    );
    $service_cat_counter = 0;
    foreach ($services_obj

    as $service){ ?>
    <?php if (sizeof($service['ids']) > 3) { ?>


    <section class="cards-section js-section">
        <?php }  else { ?>
        <section class="cards-section">
            <?php } ?>
            <div class="container">
                <div class="cards-section__container">
                    <?php if ($service_cat_counter === 0) { ?>
                        <h1 class="service-title"><?php echo $service['title'] ?></h1>
                    <?php } else { ?>
                        <div class="service-title"><?php echo $service['title'] ?></div>
                    <?php } ?>
                    <div class="service-subtitle"><?php echo $service['subtitle'] ?></div>
                    <?php $arr = dbQuery("SELECT id,url,name,(SELECT id FROM images WHERE source = 1 AND parentid = content.id AND is_main = 1) as imid,(SELECT format FROM images WHERE source = 1 AND parentid = content.id AND is_main = 1) as imformat FROM content WHERE parentid = 23 AND id IN (" . implode(',', $service['ids']) . ") AND ispublish = 1 ORDER BY showorder");
                    ?>
                    <?php if (sizeof($service['ids']) > 3) { ?>


                    <div class="cards-list swiper-container">
                        <div class="swiper-wrapper">

                            <?php
                            foreach ($arr as $r) {
                                $img = getImageById($r["imid"]); ?>


                                <a data-id="<?php echo $r["id"]; ?>"
                                   href="<?php echo ($r["id"] == 3016) ? 'http://shop.umcleaning.kiev.ua/' : $r["url"]; ?>"
                                   class="single-card swiper-slide <?php echo $service['color'] ?>">
                                    <div class="img">
                                        <img class="lazyload"
                                             data-src="<?php echo _SITE ?>images/files/<?php echo $img["image"] ?>"
                                             alt="">
                                    </div>
                                    <div class="text">
                                        <span class="tag"><?php echo $service['title'] ?></span>
                                        <p><?= $r["name"] ?></p>

                                        <div class="btn btn--blue">докладніше</div>

                                    </div>

                                </a>
                            <?php } ?>
                            <?php }  else { ?>
                            <div class="cards-list">
                                <?php
                                foreach ($arr as $r) {
                                    $img = getImageById($r["imid"]); ?>


                                    <a data-id="<?php echo $r["id"]; ?>"
                                       href="<?php echo ($r["id"] == 3016) ? 'http://shop.umcleaning.kiev.ua/' : $r["url"]; ?>"
                                       class="single-card <?php echo $service['color'] ?>">
                                        <div class="img">
                                            <img class="lazyload"
                                                 data-src="<?php echo _SITE ?>images/files/<?php echo $img["image"] ?>"
                                                 alt="">
                                        </div>
                                        <div class="text">
                                            <span class="tag"><?php echo $service['title'] ?></span>
                                            <p><?= $r["name"] ?></p>

                                            <div class="btn btn--blue">докладніше</div>

                                        </div>

                                    </a>
                                <?php } ?>
                                <?php } ?>


                            </div>

                            <?php if (sizeof($service['ids']) > 3) { ?>
                        </div>

                        <div class="dots">

                        </div>
                        <div class="slider-buttons">
                            <div class="btn-slides btn-slides--prev">
                                <svg width="28" height="88" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M26.5 2l-24 42 24 42" stroke-width="3" stroke-linecap="round"/>
                                </svg>
                            </div>
                            <div class="btn-slides btn-slides--next">
                                <svg width="28" height="88" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M26.5 2l-24 42 24 42" stroke-width="3" stroke-linecap="round"/>
                                </svg>
                            </div>

                        </div>
                        <?php } else { ?>

                        <?php } ?>

                    </div>
                </div>

        </section>
        <?php $service_cat_counter++;
        } ?>
        <div class="mob-only-btn">
        <?php include 'desk-buttons-nav.php'; ?>
        </div>

</main>
