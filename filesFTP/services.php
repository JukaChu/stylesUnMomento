<?php include 'mob_header_buttons.php'; ?>
<div class="container_sevise container_sevise_new def  sideheight">
    <div class="main_content block_margin clear_after">
        <div class="catalog_servise">
            <?php
            $services_obj = array(
                0 => array(
                    'title' => 'хімчистка',
                    'subtitle' => 'одягу, взуття, іграшок, штор та ін.',
                    'ids' => array(134, 133, 135, 139, 144, 136, 138, 145, 137, 3404, 3143)
                ),
                1 => array(
                    'title' => 'Ремонт і чищення',
                    'subtitle' => 'одягу, взуття, сумок та ін.',
                    'ids' => array(3156, 141, 148, 3164)
                ),
                2 => array(
                    'title' => 'клінінг і домашній мастер',
                    'subtitle' => 'прибирання, чищення м\'яких меблів, миття вікон и та ін.',
                    'ids' => array(3178, 147, 143)
                ),
                3 => array(
                    'title' => 'додаткові послуги',
                    'subtitle' => '',
                    'ids' => array(1639, 3314, 857)
                )
            );
            $service_cat_counter = 0;
            foreach($services_obj as $service){ ?>
            <div class="section-service-block">
                <?php if($service_cat_counter === 0){?>
                <h1 class="service-block_title"><?php echo $service['title'] ?></h1>
                <?php } else {?>
                <div class="service-block_title"><?php echo $service['title'] ?></div>
                <?php } ?>
                <div class="service-block_subtitle"><?php echo $service['subtitle'] ?></div>
                <?php $arr = dbQuery("SELECT id,url,name,(SELECT id FROM images WHERE source = 1 AND parentid = content.id AND is_main = 1) as imid,(SELECT format FROM images WHERE source = 1 AND parentid = content.id AND is_main = 1) as imformat FROM content WHERE parentid = 23 AND id IN (".implode(',' , $service['ids'] ).") AND ispublish = 1 ORDER BY showorder");
                ?>
                <div class="service-container service-container-new clear_after">
                <?php  
                foreach($arr as $r){
                $img = getImageById($r["imid"]); ?>
                    <a 
                    data-id="<?php echo $r["id"]; ?>" 
                    href="<?php echo ($r["id"] == 3016)? 'http://shop.umcleaning.kiev.ua/':$r["url"];?>" 
                    target="<?php echo ($r["id"] == 3016)? '_blank': '_self';?>"
                    class="block_servise"
                    <?php echo ($r["id"] == 3016)?'rel="nofollow"':''; ?>>

                        <style>
                            .container_sevise_new .block_servise[data-id="<?php echo $r["id"]; ?>"] .foto {
                                background-image: url(/images/files/<?=$img["image"]?>);
                            }

                            @media (max-width:600px) {
                                .container_sevise_new .block_servise[data-id="<?php echo $r["id"]; ?>"] .foto {
                                    background-image: none;
                                }
                            }
                        </style>

                        <div class="foto"></div>
                        <div class="block_info">
                            <span class='vfix'></span>
                            <div class="container_vfix">
                                <div class="name">
                                    <?=$r["name"]?>
                                </div>
                            </div>
                        </div>
                    </a>
                <?php } ?>
                </div>
                <div class="service-more-btn-wrap">
                    <div class="service-more-btn" onclick="$(this).hide().parents('.section-service-block').find('.service-container-new').height('auto');">Показати ще</div>
                </div>
            </div>
            <?php $service_cat_counter ++; }?>
            <div class="section-service-block special-service-block">
            <?php $special_service = array(1713, 142, 3016);
            $special_arr = dbQuery("SELECT id,url,name,(SELECT id FROM images WHERE source = 1 AND parentid = content.id AND is_main = 1) as imid,(SELECT format FROM images WHERE source = 1 AND parentid = content.id AND is_main = 1) as imformat FROM content WHERE parentid = 23 AND id IN (".implode(',' , $special_service).") AND ispublish = 1 ORDER BY showorder");?>
                <div class="service-container clear_after">
                <?php foreach($special_arr as $r){
                $img = getImageById($r["imid"]); ?>
                    <a 
                    data-id="<?php echo $r["id"]; ?>" 
                    href="<?php echo ($r["id"] == 3016)? 'http://shop.umcleaning.kiev.ua/':$r["url"];?>" 
                    target="<?php echo ($r["id"] == 3016)? '_blank': '_self';?>"
                    class="block_servise"
                    <?php echo ($r["id"] == 3016)?'rel="nofollow"':''; ?>>
                        <div class="block_info">
                            <span class='vfix'></span>
                            <div class="container_vfix">
                                <div class="name">
                                    <div><?=$r["name"]?></div>
                                </div>
                            </div>
                        </div>
                        <div class="foto" style="background-image:url(/images/files/<?=$img["image"]?>)"></div>
                    </a>
                <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>