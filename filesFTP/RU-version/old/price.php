<div class="prise_list sideheight">
    <div class="main_content block_margin clear_after">
        <?php include 'mob_header_buttons.php'; ?>
        <div class="container clear_after">
            <div class="slider-section slider-section-price">
                <div class="slider-wrap">
                    <div class="slide">
                        <a href="<?php echo _SITE; ?>novosti/zashitis-ot-virusov/" class="slide imageId9999999" style="background-size:cover;background-image: url('/images/files/1_141_30042020181930_1.jpg');"></a>
                    </div>
                    <div class="slide youtube-slide">
                        <iframe src="https://www.youtube.com/embed/WU-haYcrkvg?rel=0&controls=0&showinfo=0&enablejsapi=true" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class="container container_prise">
            <div class="button_filter">Выберите услугу</div>    
            <div class="sidebar">
                <div class="button_filter"></div>
                <div class="top_sidebar">
                        <h1 class ="name">Прайс-лист</h1>
                </div>
                <div class="title">Выберите услугу:</div>
                <div class="scroll_menu">
                    <ul class="filters">
                    <?php 
                    $blacklist_arr = array(
                        3198, 3199, 3200, 3201, 3202, 3203, 3204, 3205, 3206, 3207, 3208, 3209, 3210, 3211, 3212, 3213, 3268, 3308, 3309, 3310, 3311, 3195, 2994, 3143, //массив idшников СЕО услуг + аквалайт
                        3382, 3383, 3384, 3385, 3386,
                        3416, 3417, 3418, 3419, 3420, 3421, 3422, 3428, 3534, 3535, 3536, 3537, 3538, 3540, 3541, 3542, 3547, 3548, 3549, 3550,
                        3551, 3553, 3554, 3555, 3560, 3561, 3562, 3558, 3563,
                    ); //+ подразделов Корпоративного обслуживания 
                    $arr = dbQuery("SELECT id,name FROM content WHERE parentid = 23 AND ispublish = 1  ORDER BY showorder");
                    foreach($arr as $row) {
                        $pcount = dbGetOne("SELECT count(*) FROM prices WHERE serviceid  NOT IN (".implode(',', $blacklist_arr).") AND serviceid = '".$row["id"]."'");
                        if($pcount == 0) { continue; }?>
                        <li id="s<?= $row["id"] ?>" onclick="loadPrices(<?= $row["id"] ?>,this,true)"  ><?= $row["name"] ?></li>
                    <?php } ?>
                    </ul>
                </div>
            </div>
            <div class="um-service-price-section um-price-wrap show-hidden" scrollId="staftOfPrice">
                <div class="block_prise">
                    <div class="top_prise">Чистка текстильных изделий</div>
                    <div class="block_prise_cloud" <?php if(!setting('service_discount')) { ?> style="display:none"<?php } ?>><div class="block_prise_discount"><?php echo setting('service_discount'); ?></div></div>
                    <div class="searchwrap searchwrap_prise" >
                        <div class="searchblock">
                            <input type="text" id="ctext" name="stext" autocomplete="off" >
                            <div class="searchsubmit"> Поиск по услугам
                                <i class="fa fa-search"></i><input type="submit" class="menuupd_searchsubmit bluebutton" value="">
                            </div>
                        </div>
                    </div>
                    <hr class="border_prise">
                    <div id="priceArea"></div>
                    <div scrollId="endOfPrice"></div>
                    <div class="um-form-cont">
                        <div class="um-fixed-container priceResultBtnWrap">
                            <div class="um-padding-container-left">
                                <div class="um-price-result container_result clear_after">
                                    <div class="namber_result">
                                        Вы выбрали:
                                        <span id="countItem">0 вещей</span>
                                    </div>
                                    <div class="um-order-btn-wrap">
                                        <div class="namber_result">* стоимость указана без учета скидки</div>
                                        <div class="showPopup um-green-btn"  data-show="priceOrder">оформить заказ</div>
                                    </div>
                                    <div class="prise_result">
                                        Итоговая стоимость: <span id="countPrice">0 грн</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>   
    </div>
</div>
<div class="main_content seo-content">
    <div class="container clear_after">
        <div class="blocl_training new clear_after">   
            <div class="editor-seo">
                <?= htmlspecialchars_decode($head["info2"]) ?>
            </div>
        </div>
    </div>
</div>