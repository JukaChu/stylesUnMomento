<?php include 'mob_header_buttons.php'; ?>
<div class="prise_list sideheight">
        <div class="main_content block_margin clear_after">
        <div class="container clear_after">
            <div class="slider-section slider-section-price">
                <div class="slider-wrap">
                    <div class="slide">
                        <a href="<?php echo _SITE; ?>novosti/vash-zahust/" class="slide imageId9999999" style="background-image: url('/images/files/1_3462_30062020151207_1.jpg');"></a>
                    </div>
                    <div class="slide youtube-slide">
                        <iframe src="https://www.youtube.com/embed/WU-haYcrkvg?rel=0&amp;controls=0&amp;showinfo=0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>

            <div class="container_prise">
                <div class="button_filter">Оберіть послугу</div>    
                <div class="sidebar">
                    <div class="button_filter"></div>
                    <div class="top_sidebar">
                        <h1 class ="name">Прайс-лист</h1>
                    </div>
                    <div class="title">Оберіть послугу:</div>
                    <div class="scroll_menu">
                        <ul class="filters">
                        <?php 
                        $blacklist_arr = array(3198, 3199, 3200, 3201, 3202, 3203, 3204, 3205, 3206, 3207, 3208, 3209, 3210, 3211, 3212, 3213, 3268, 3308, 3309, 3310, 3311, 3195, 2994, 3143,  //массив idшников СЕО услуг + аквалайт
                        3381, 3383, 3384, 3385, 3386,
                        3411, 3412, 3413, 3414, 3415, 3416, 3417, 3518, 3516, 3519, 3515, 3517,
                        ); //+ подразделов Корпоративного обслуживания 
                        $arr = dbQuery("SELECT id,name FROM content WHERE parentid = 23 AND ispublish = 1  ORDER BY showorder");
                        foreach($arr as $row) {
                            $pcount = dbGetOne("SELECT count(*) FROM prices WHERE  serviceid NOT IN (".implode(',', $blacklist_arr).") AND serviceid = '".$row["id"]."'");
                            if($pcount == 0) { continue; }
                        ?>
                            <li id="s<?= $row["id"] ?>" onclick="loadPrices(<?= $row["id"] ?>,this,true)"  ><?= $row["name"] ?></li>
                        <?php } ?>
                        </ul>
                    </div>
                </div>
                <div class="um-service-price-section um-price-wrap show-hidden" scrollId="staftOfPrice">
                    <div class="block_prise">
                        <div class="top_prise">
                            Чистка текстильных изделий
                        </div>
                        <div class="block_prise_cloud" <?php if(!setting('service_discount')) { ?> style="display:none"<?php } ?>><div class="block_prise_discount"><?php echo setting('service_discount'); ?></div></div>
                        <div class="searchwrap searchwrap_prise" >
                            <div class="searchblock">
                                    <input type="text" id="ctext" name="stext" autocomplete="off" >
                                    <div class="searchsubmit"> Пошук по послугам
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
                                            Ви обрали:
                                            <span id="countItem">0 речей</span>
                                        </div>
                                        <div class="um-order-btn-wrap">
                                            <div class="namber_result">* вартість вказана без урахування знижки</div>
                                            <div class="showPopup um-green-btn"  data-show="priceOrder">Оформити замовлення</div>
                                        </div>
                                        <div class="prise_result">
                                            Загальна вартість:  <span id="countPrice">0 грн</span>
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
    <script>
    $(function(){ 
        if ( $("#s134").length > 0) {
            //$("#s134").click(); 
            loadPrices(134,$("#s134")[0],false);
        }
    });

    $("#ctext").keyup(function(){
        
        if($(this).val().length >= 3)
        {
            $.post("/ajax.php",{action:"fast_search",term:$(this).val()},function(data){
                
                $("#priceArea").html(data);
                initTablePrices();
                $("#countItem").html(get_correct_str(0,"річ","речі","речей"));
                $("#countPrice").html("0 грн");
                
            },"html");
        }
        
    });
    </script>
