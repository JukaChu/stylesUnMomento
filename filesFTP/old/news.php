<?php

$arr = dbQuery("SELECT id,url,name,(SELECT id FROM images WHERE source = 1 AND parentid = content.id AND is_main = 1) as imid,(SELECT format FROM images WHERE source = 1 AND parentid = content.id AND is_main = 1) as imformat
FROM content WHERE parentid = 2890 AND ispublish = 1 ORDER BY showorder"); ?>
<div class="container_news def">
    <?php include 'mob_header_buttons.php'; ?>
    <h1 style ="display:none;">Новини</h1>
    <div class="main_content block_margin clear_after">
        <div class="presentation_block clear_after container all-news-container">
            <?
$i = 0;
foreach($arr as $r)
{
    $i++;
    $images = getImages($r["id"],1);
    $img =  getImageById($r["imid"]);
    if($img == "/templates/images/nofoto.jpg")
    {
        $img = "/images/no.png";
    }
    if(count($images) > 1)
    {
        $img = $images[1];
    }
    ?>
                <div  class="block_def <? if ($i==1) { echo('blue');
                } else if($i==2) {  echo('green');
                } else {  echo('orange');
                } ?>">
                <a class="block-link" href="/<?=$r["url"]?>"></a>       
                <div class="block_def_fix">
                    <div class="foto">
                        <div class="foto-inner" style="background-image:url(/images/files/<?=$img["image"]?>)"></div>
                    </div>
                    <div class="block_info">
                        <div class="block_info-inner">
                            <span class="vfix"></span>
                            <div class="container_vfix">
                                <div class="description">
                                   <?=$r["name"]?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                </div>
    <?
    if($i == 3) { $i = 0; }
}
?>
        </div>
    </div>
</div>
<div class="clear"></div>
