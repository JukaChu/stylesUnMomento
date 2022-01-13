<?php
session_start();

include("inc/protection.php");
include("inc/constant.php");
include("inc/global.php");
include("inc/engine.php");
include("templates/mobile-detect.php");
                            
$items = dbQuery(trim("
    SELECT p.*, c.dont_use_discount
    FROM prices p
    LEFT JOIN content c ON c.id = p.serviceid
    WHERE p.serviceid = '".intval($_REQUEST["id"])."' 
    ORDER BY showorder,name
"));

$detect = new Mobile_Detect;
?>
<script>
    <?php if ( isset($items[0]) && (int)$items[0]['dont_use_discount'] == 1) {?>
    $('.block_prise_cloud').addClass('hide_block');
    <?php } else { ?>
    $('.block_prise_cloud').removeClass('hide_block');
    <?php } ?>
</script>
<div class="table_prise clear_after">
                        <div class="hed_row check_block ">
                            <div class="content_col"><div id="showSelected" class="square_check "></div>Тільки вибрані</div>
                            <div class="content_col">Ед. изм</div>
                            <div class="content_col  <?php echo $detect->isMobile() ? 'showMeTipMob' : 'showMeTip';?>">
                                AquaLight
                                <span class="q-mark qMark">?</span>
                                <div class="popup-tip-wrap">
                                    <div class="popup-tip">
                                        Aqualight - професійне прання і відпарювання текстильного одягу з використанням інноваційних препаратів, без локальної обробки забруднень. Оціночна вартість виробів до 1000 грн
                                    </div>
                                </div>
                            </div>
                            <div class="content_col  <?php echo $detect->isMobile() ? 'showMeTipMob' : 'showMeTip';?>">
                                UNMOMENTO
                                <span class="q-mark qMark">?</span>
                                <div class="popup-tip-wrap">
                                    <div class="popup-tip">
                                    UNMOMENTO - потокова чистка речей простого крою, що включає загальну чистку і локальну попередню обробку забруднень (виведення плям) за допомогою професійних препаратів. Відпарювання і професійне прасування. Упаковка. Оціночна вартість текстильних виробів до 4000 грн (шкіряних до 6000 грн, хутряні до 10000 грн)
                                    </div>
                                </div>
                            </div>
                            <div class="content_col  <?php echo $detect->isMobile() ? 'showMeTipMob' : 'showMeTip';?>">
                                Premium
                                <span class="q-mark qMark">?</span>
                                <div class="popup-tip-wrap">
                                    <div class="popup-tip">
                                    UNMOMENTO Premium - преміальна чистка речей з делікатних тканин, комбінованих і брендових речей або ж складного крою з об'ємним декором. Послуга включає захист фурнітури, загальну чистку і локальну попередню обробку забруднень, відпарювання, прасування і індивідуальну упаковку. Оціночна вартість виробів до 10000 грн (шкіряних до 20000 грн, хутряні до 30000 грн)
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php foreach($items as $item) {?>
                        <div class="content_row check_block<?= ($item["isaction"] == 1 ? " action" : "") ?>">
                            <div class="content_col"><?= $item["name"] ?></div>
                            <div class="content_col"><?= $item["unit"] ?></div>
                            <div class="content_col">
                            <?php if($item["price1"] > 0) {?>
                            <div vid-uslug="AquaLight" data-price="<?= $item["price1"] ?>" data-id="p<?=$item["id"]?>1" class="square_check"></div>&nbsp;&nbsp;<?= $item["price1"] ?><?php } ?></div>
                            <div class="content_col">
                            <?php if($item["price2"] > 0) {?>
                            <div vid-uslug="UNMOMENTO" data-price="<?= $item["price2"] ?>" data-id="p<?=$item["id"]?>2" class="square_check"></div>&nbsp;&nbsp;<?= $item["price2"] ?><?php } ?>
                            </div>
                            <div class="content_col"><?php if($item["price3"] > 0) {?>
                            <div vid-uslug="Premium" data-price="<?= $item["price3"] ?>" data-id="p<?=$item["id"]?>2" class="square_check"></div>&nbsp;&nbsp;<?= $item["price3"] ?><?php } ?></div>
                        </div>
                        <?php } ?>
                    </div>