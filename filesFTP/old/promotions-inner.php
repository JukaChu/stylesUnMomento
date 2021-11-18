<?php

    $end_date = date('Y-m-d',strtotime($head['enddate']));



    $prices = dbQuery('SELECT * FROM prices WHERE serviceid = ' . $head['id'] . ' ORDER BY showorder');

    $mainImage = getMainImage($head['id'],1);

?>
<div class="promo-inner-wrap">
    <div class="promo-inner-section">
        <div class="main_content">
            <?php
            $mainImage = getMainImage($head["id"],1);

            ?>
            <div class="promo-banner-wrap">
                <div class="promo-main-banner" style="background-image: url('/images/files/<?php echo $mainImage['image']; ?>')">
                </div>
                <?php if($head['enddate'] != '0000-00-00 00:00:00') {?>
                <div class="countdown-wrap">
                    <div class="title">до конца Акции осталось:</div>
                    <div id="countDown" class="countdown-cont"></div>
                </div>
            <?php } ?>
            </div>
        </div>
        <script>
            $(document).ready(function(){

            <?php if($head['enddate'] != '0000-00-00 00:00:00') {?>
                var finishDate = '<?php echo $end_date; ?>'; /* format: YYYY/MM/DD */
                $('#countDown').countdown( finishDate, function(event) {
                  var $this = $(this).html(event.strftime(''
                    + '<span class="count-part count-day">%-D</span>'
                    + '<span class="count-part count-hour">%H</span>'
                    + '<span class="count-part count-min">%M</span>'
                    + '<span class="count-part count-sec">%S</span>'));
                });
                <?php } ?>
                $('.showForm').click(function(){
                    $(this).animate({opacity: 0}, 100, function(){
                    $(this).hide().siblings('.simple-form-wrap').height('auto')});
                });
            });
            </script>
    </div>

    <div class="top-info-section">
        <div class="main_content">
            <div class="info-wrap">
                <?php echo htmlspecialchars_decode($head['info'],ENT_QUOTES); ?>
            </div>
        </div>
    </div>
    <div class="price-section">
    <?php
        $url_id = 0;
        switch ($head['id']) {
            case '3170':
                $url_id = '148';
                break;
            case '3181':
                $url_id = '3181';
                break;
            case '3171':
                $url_id = '133';
                break;
            case '3172':
                $url_id = '135';
                break;
            case '3173':
                $url_id = '141';
                break;
            case '3174':
                $url_id = '134';
                break;
            case '3189':
                $url_id = '142';
                break;
        }
    ?>
        <div class="main_content">
            <div class="price-cont">
                <?php if(!empty($prices)) {?>
                <div class="title">ПРАЙС-ЛИСТ</div>
                <div class="table_prise clear_after">
                    <div class="hed_row">
                        <div class="content_col">Наименование</div>
                        <div class="content_col">Ед. изм</div>
                        <div class="content_col">Аквалайт</div>
                        <div class="content_col">Unmomento</div>
                        <div class="content_col"> Premium</div>
                    </div>
                    <?php foreach($prices as $price) {?>
                    <div class="content_row ">
                        <div class="content_col"><?php echo $price['name']; ?></div>
                        <div class="content_col"><?php echo $price['unit']; ?></div>
                        <div class="content_col"><?php echo $price['price1'];?></div>
                        <div class="content_col"><?php echo $price['price2']; ?></div>
                        <div class="content_col"><?php echo $price['price3']; ?></div>
                    </div>
                    <?php } ?>

                </div>
                <a href="https://ua.unmomento.com.ua/tseny/<?php if ($url_id != 0){ echo '?show='.$url_id; }?>" class="show-more-price">Смотреть весь прайс-лист</a>
            <?php } ?>
                <div class="callback-cont">
                    <div class="orange-btn showForm">Заказать обратный звонок</div>
                    <div class="simple-form-wrap">
                            <iframe id="rframe" name="rframe" style="display:none;"></iframe>
                        <form method="post" target="rframe" enctype="multipart/form-data" action="/request.php?action=add&amp;id=10">
                            <div class="input">
                                <input type="text" name="f50" required placeholder="Телефон">
                                <input type="hidden" name="f51" value="<?php echo $head['name'] ?>">
                            </div>
                            <input class="orange-btn" type="submit" value="Заказать обратный звонок">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="form-section">
        <div class="main_content">
        <?php
        $images = getImages($head['id'],1);
        if(count($images ) > 2) {
            $image = $images[2];
            if($image['is_main'] !== 1) {
            ?>
            <div class="banner-cont">
                <img loading="lazy" class="banner fits" src="/images/files/<?php echo $image['image']; ?>" alt="<?php echo $image['title']; ?>">
            </div>
        <?php } } ?>
            <div class="form-cont">
                <?php echo htmlspecialchars_decode($head['preview'],ENT_QUOTES); ?> 
                <div class="main-form-wrap">
                    <form method="post" target="rframe" enctype="multipart/form-data" action="/request.php?action=add&amp;id=8">
                        <input type="hidden" name="f44" value="<?php echo $head['name'] ?>">
                        <div class="input">
                            <input type="text" name="f45" placeholder="Ваше имя">
                        </div>
                        <div class="input">
                            <input type="tel" name="f46"  placeholder="Телефон">
                        </div>
                        <input type="submit" value="Заказать услугу">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="/templates/js/jquery.countdown.min.js"></script>
