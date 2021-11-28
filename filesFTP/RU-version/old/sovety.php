<?php

$arr = dbQuery("SELECT id,url,name,(SELECT id FROM images WHERE source = 1 AND parentid = content.id AND is_main = 1) as imid,
(SELECT format FROM images WHERE source = 1 AND parentid = content.id AND is_main = 1) as imformat
FROM content WHERE parentid = " . $head['id'] . " AND ispublish = 1 ORDER BY showorder"); ?>
<div class="container_news def">
    <div class="main_content block_margin clear_after">
        <div class="presentation_block clear_after container">    <?
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

				<a href="/<?=$r["url"]?>" class="block_def <? if ($i==1) { echo('blue');

} else if($i==2) {  echo('green');

} else {  echo('orange');

} ?>">
					<h1 style="display:none">Советы от Унмоменто</h1>
					<div class="foto sovet-foto-mobile">
						<img class="fits" src="/images/files/<?=$img["image"]?>" alt="<?=$r["name"]?>">
					</div>
					<div class="foto sovet-foto" style="background-image:url(/images/files/<?=$img["image"]?>)"></div>
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
