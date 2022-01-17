<div class="container_news fran">
        <div class="main_content block_margin clear_after"> 
                <div class="container_fran_top">
                    <div class="name_list"><h1 class="name">Франчайзинг</h1></div>
                    <ul class="city_menu">
                        <?php 
                            $items = dbQuery("SELECT id,name,url FROM content WHERE parentid = 2976 AND ispublish = 1 ORDER BY showorder");
                                foreach($items as $item)
                    {
                        ?>
                        <li><a <?php if($head["id"] == $item["id"]) {?> class="active" <?php } ?> href="/<?=$item["url"]?>"><?=$item["name"]?></a></li>
                    <?php } ?>
                    </ul>
                </div>
            <div class="articles_container"></div>  
            <div class="container_fran_wrapper">
            <div class="container_fran ">
                <?php $mainImage = getMainImage($head["id"],1); 
                if($mainImage){ ?>
                <div class="fran-pic-fix">
                    <div class="fran-pic" style="background-image: url('images/files/<?= $mainImage["image"] ?>')"></div>
                </div>
                <? } ?>
                <?=htmlspecialchars_decode($head["info"],ENT_QUOTES)?>
                <div class="um-fran-form-wrap">
                    <div class="two-btns-wrap">
                        <div class="um-fran-btn coloredBkgnd showFormData"  data-form="orderSend">Оставить заявку</div>
                        <div class="um-fran-btn coloredBorder showFormData" data-form="callBack">Перезвонить</div>
                    </div>
                    <div class="two-forms-wrap">
                        <div class="container_feedback um-fran-form um-hidden" id="callBack">
                            <div class="title">Перезвонить</div>
                            <div class="container_form clear_after">
                                <form>
                                    <div class="input"><input type="text" class="coloredBorder" name="" required="" placeholder="Ваш телефон" id="ph"></div>
                                    <div class="input-submit"><input type="submit" class="coloredBkgnd" value="Заказать обратный звонок"></div>
                                </form>
                            </div>
                        </div>
                        <div class="container_feedback um-fran-form um-hidden" id="orderSend">
                            <div class="title">Оставить заявку</div>
                            <div class="container_form clear_after">
                                <iframe id="f_rframe" name="f_rframe" style="display:none;" ></iframe>
                                <form method="post" target="f_rframe"  action="/request.php?action=add&id=11">
                                    <div class="input"><input required name="f52" type="name"  class="coloredBorder"  value="" placeholder="Имя"></div>
                                    <div class="input"><input required name="f54" type="name"  class="coloredBorder"  value="" placeholder="Телефон"></div>
                                    <textarea class="coloredBorder" name="f55" placeholder="Сообщение"></textarea>
                                    <input type="submit" onclick="fbq('track', 'SubmitApplication');" class="coloredBkgnd" name="" value="Отправить">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
            <div class="slider_media" id='slider_media'>
                <?php 
    $arr = dbQuery("SELECT id,url,name,(SELECT id FROM images WHERE source = 1 AND parentid = content.id AND is_main = 0) as imid,(SELECT format FROM images WHERE source = 1 AND parentid = content.id AND is_main = 0) as imformat,info2 FROM content WHERE parentid = 2813 AND ispublish = 1 ORDER BY showorder");
?>
<?php
                foreach($arr as $r)
                {
                    $img = getResizeImageById($r["imid"],"w",array("width"=>150),$r["imformat"]);
                ?>
                <div class="el_slider">
                    <span class='vfix'></span>
                    <img src="<?=$img?>">
                </div>
                <?php } ?>
            </div>
        </div>              
        </div>
    </div>

    <link rel="stylesheet" type="text/css" href="<?=_SITE?>templates/css/owl.carousel.css">
    <script src="<?=_SITE?>templates/js/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function(){
        $('.slider_media').owlCarousel({
                loop:true,
                margin:0,
                nav:true,
                mouseDrag:true,
                responsive:{
                    0:{
                    items:1
                    },
                    600:{
                    items:3
                    },
                    1000:{
                    items:5
                    }
                }
        });
            $('#ph').mask("+38(099)999-99-99");
      });
    </script>